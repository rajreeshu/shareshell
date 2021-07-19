<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Admin Login</title>

</head>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?> 
<body>
    
   <div class="container">
       
       <div class="row" id="form_row">
           <div class="col-12">
               <div class="row">
                   
                   <div class="col col-md-6  col-md-offset-3" style="border:2px solid #d0d0d0; margin-top:20px;margin-bottom:20px; border-radius:20px; box-shadow:1px 1px 2px #d0d0d0;">
                   <h1>Write Your Blog</h1>
                   <h4 style="float:left; margin-right:20px;">Select Image</h4>
                   <form id="blog_form"> 
                        <input type="file" accept="image/*" id="blog_image" class="form-control" style="width:250px; float:left;"><br><br>
                        <h3 style="float:left; margin-right: 30px;">Category</h3> &nbsp;
                        <select class="form-control" style="width:100px; margin-top:-10px;" id="blog_category">
                            <option value="Home">Home</option>
                            <option value="News">News</option>
                            <option value="Information">Information</option>
                        </select>
                        <h2 style="float:left;">Heading</h2>
                        <input type="text" class="form-control" id="blog_heading" placeholder="Blog Heading"><br>
                        <textarea class="form-control" id="blog_body" placeholder="Write Your Blog in Html Format" rows="20"></textarea>
                       
                        <center>
                        <button class="btn btn-success" id="blog_submit" style="margin-bottom:10px; margin-top:10px;">Preview</button>
                        </center>
                   </form>
                    </div>
                  
               </div>
               
           </div>
       </div>



       <!-- preview Blog -->
<div id="preview_div">
<h1>Preview<br>---------------<br></h1>
<button class="btn btn-warning" id="edit_preview">Edit</button><br><br>
       <div class="blog-lst col-md-9 mb-3 p-1" style="border:1px solid #d0d0d0;">
                        <section id="id-100" class="post single">

                            <div class="post-header single">
                                <div class="">
                                    <h2 id="preview_heading"></h2>
                                    <div class="title-line"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="author-category">
                                            By <a href="#"><?=ucfirst($name);?></a>
                                            in <a href="blog.html" id="preview_category"></a>
                                        </p>
                                    </div>
                                    <div class="col-sm-6 right" >
                                        <p class="date-comments">
                                            <a href="#"><i class="fa fa-calendar-o"></i> <?=date('d-M-Y');?></a>
                                            <!-- <a href="single.html"><i class="fa fa-comment-o"></i> 8 Comments</a> -->
                                        </p>
                                    </div>
                                </div>
                                <div class="image "> 
                                    <img src="" class="img-responsive" alt="Example blog post alt" id="main_img" style="height: 400px;object-fit:contain;"> 
                                </div>
                            </div> 

                            <div id="post-content" class="post-body single">
                               

                            </div>

                            <!-- buttons -->
                           
                            <br>
                            <button class="btn btn-default" id="submit_button_final">Submit Blog</button>
                        </section> 

                        

                        

                       
                    </div>   
                    
</div>

   </div>



<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');
?>
<!-- image compressor starts -->
<script src="<?=base_url('assets/js');?>/JIC.js"></script>
<script>
    
    var output_format = null;
    var file_name = null;
    function readFile(evt) {
        var file = evt.target.files[0];
        var reader = new FileReader();
        reader.onload = function(event) {
            var i = document.getElementById("main_img");
            console.log(i);
                i.src = event.target.result;
                i.onload = function(){
                    
                    console.log("Image loaded");
                }
        };
        output_format = file.name.split(".").pop();
        file_name = file.name;
        console.log("Filename:" + file.name);
        console.log("Fileformat:" + output_format);
        console.log("Filesize:" + (parseInt(file.size) / 1024) + " Kb");
        console.log("Type:" + file.type);
        reader.readAsDataURL(file);
        $("#compress").show();
        return false;
    }
 // compress image
    // $( "#compress" ).click(function() {
        function compress_image_jic(){
        var source_image = document.getElementById("main_img");
        if (source_image.src == "") {
            alert("You must load an image first!");
            return false;
        }

        var quality = 20;
        
        console.log("process start...");
        console.log("process start compress ...");
        var compressed_image = document.getElementById("main_img");
        compressed_image.src = jic.compress(source_image,quality,output_format).src;
        // $("#upload").show();
        
    // });
}


    // upload imange
    // $( "#upload" ).click(function() {
        function upload_image_jic(new_name) {
        var compressed_image = document.getElementById("main_img");
        if (compressed_image.src == "") {
            alert("You must compress image first!");
            return false;
        }

        var successCallback= function(response){
            console.log("image uploaded successfully! :)");
            console.log(response);       
        }

        var errorCallback= function(response){
            console.log("image Filed to upload! :)");
            console.log(response); 
        }
        
        // console.log(compressed_image.src);
        console.log("process start upload ...");
        var x=jic.upload(compressed_image, "<?=base_url('main_helper/upload_blog_image');?>", "file", new_name+"."+output_format,successCallback,errorCallback);

        console.log(x);
    }
        
    // });

document.getElementById("blog_image").addEventListener("change", readFile, false);
</script>


<script type="text/javascript">
    var key="<?php echo $this->security->get_csrf_hash(); ?>";

    function previewFile(){
        var file = $("#blog_image").get(0).files[0];
        
 
        // if(file){
        //     var reader = new FileReader();
 
        //     reader.onload = function(){
        //         $("#main_img").attr("src", reader.result);
        //     }
 
        //     reader.readAsDataURL(file);
        // }
    }
    // $("#blog_image").change(previewFile);

    var is_complete =1;



    $("#preview_div").hide();
    $("#blog_submit").click(function(e){
        e.preventDefault();
        

        

        var heading=$("#blog_heading").val();
        var category=$("#blog_category").val();
        var blog_body=$("#blog_body").val();

        if($("#blog_image").val()==""||heading==""||category==""||blog_body==""){
            is_complete =0;
        }else{
            is_complete =1;
        }

        if(is_complete){
            $("#preview_heading").html(heading);
            $("#preview_category").html(category);
            $("#post-content").html(blog_body);
            compress_image_jic();
            previewFile();


            $("#form_row").fadeOut(300);
            $("#preview_div").fadeIn(300);
        }else{
            alert("All Fields are not Filled");
        }

        


    });

    $("#edit_preview").click(function(e){
        e.preventDefault();

        $("#preview_div").fadeOut(300);
        $("#form_row").fadeIn(300);

    });

    $("#submit_button_final").click(function(e){
        var heading=$("#blog_heading").val();
        var category=$("#blog_category").val();
        var blog_body=$("#blog_body").val();
        e.preventDefault();
        
        console.log("he");
        $.ajax({
            url: "<?=base_url('main_helper/upload_blog');?>",
            type:"POST",
            async:false,
            data:{
                "<?php echo $this->security->get_csrf_token_name();?>":key,
                writer_id:"<?=$writer_id;?>",
                blog_heading:heading,
                blog_body:blog_body,
                blog_category:category,
            },
            dataType:"json",
            success:function(data){
                console.log(data);
                // compress_image_jic();
                upload_image_jic(data.blog_id);
                key=data.key;
                alert("blog Submitted");
                location.href="<?=base_url('main/blog?id=');?>"+data.blog_id;
            },
            error:function(data){
                console.log(data);
            }

        });
    });


</script>


</body>
</html>