<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Admin | Shareshell</title>
    
</head>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?> 
<body>
    
   <div class="container-fluid">
       
       <div class="row" id="form_row" style="padding-left:30px;">
            
            <!-- <div class="col-md-6 " id="edit_col" style="margin-bottom:20px; border-radius:5px; margin-top:20px; box-shadow:0px 0px 5px #e3dede; position:absolute; bottom:300px;"> -->
            <div class="col-md-6 " id="edit_col" style="margin-bottom:20px; border-radius:5px; margin-top:20px; box-shadow:0px 0px 5px #e3dede; position:fixed;">
                
                <div style="display:flex; justify-content:space-between;">

                    <div style=" width:50%;">
                    <h1>Write Your Blog</h1>

                    

                    <h4 style="float:left; margin-right:20px;">Select Image</h4>
                    <form id="blog_form"> 
                        <input type="file" accept="image/*" id="blog_image" class="form-control" style="width:250px; float:left;"><br><br>
                        <h3 style="float:left; margin-right: 30px;">Category</h3> &nbsp;
                        <select class="form-control" style="width:100px; margin-top:-10px;" id="blog_category">
                            <option value="Home">Home</option>
                            <option value="News">News</option>
                            <option value="Information">Information</option>
                            <option value="Decor">Decor</option>
                        </select>
                        <h2 style="float:left;">Heading</h2>
                        </div>
                    <div style="width:50%; margin-top:50px;">
                    <div style="float:right;">
                        <button id="append_image_double">Image double</button>
                        <button id="append_image_full_image">Image 100%</button>
                        <button id="append_link_anchor">Link 	&lt;a&gt;</button>

                        <!-- image upload to get link -->
                        <br><br>
                        <input type="file" name="image_upload_link" id="image_upload_link" class="form-control">
                        <button class="btn btn-default" id="image_upload_btn" style="float:right;">Upload</button>
                        <img src="" style="height:120px; width: 120px;" id="image_upload_prev" alt="upload_image"> 
                        <input type="text" class="form-control" id="show_url_upload">
                    </div>
                    </div>  
                    </div>
                        <input type="text" class="form-control" id="blog_heading" placeholder="Blog Heading"><br>
                        <textarea class="form-control" id="blog_body" placeholder="Write Your Blog in Html Format" rows="20"></textarea>
                    </form>

                    <div id="error_display_seo"  style="color:red;">
                        
                    </div>
                    
                
             </div>

            <!-- <div class="col-md-6" id="prev_col"> -->
            <div class="col-md-6 col-md-offset-6" id="prev_col">
            <!-- preview Blog -->
            <div id="preview_div" style="margin-top:20px; box-shadow:0px 0px 5px #e3dede; padding:10px; border-radius:5px; margin-bottom:20px;">
                <h4>Preview</h4>
                <div class="blog-lst mb-3 p-1" style="border:1px solid #d0d0d0; padding:10px;">
                    <section id="id-100" class="post single">
                        <div class="post-header single">
                            <div class="">
                                <h2 id="preview_heading"></h2>
                                <div class="title-line"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="author-category">
                                        By <a href="<?=base_url();?>"><?=ucfirst($name);?></a>
                                        in <a href="<?=base_url();?>" id="preview_category"></a>
                                    </p>
                                </div>
                                <div class="col-sm-6 right" >
                                    <p class="date-comments">
                                        <a href="<?=base_url();?>"><i class="fa fa-calendar-o"></i> <?=date('d-M-Y');?></a>
                                        <!-- <a href="single.html"><i class="fa fa-comment-o"></i> 8 Comments</a> -->
                                    </p>
                                </div>
                            </div>
                            <div class="image "> 
                                <img src="" class="img-responsive" alt="Main Image" id="main_img" style="height: 400px;object-fit:contain;"> 
                            </div>
                        </div> 
                        <div id="post-content" class="post-body single" style="min-height:200px;">
                           
                        </div>
                        <!-- buttons -->
                       
                        <br>
                        
                    </section> 
                </div>   
                    
            </div>
                <form>
                    <input type="text" id="tag_input" class="form-control" placeholder="Tags">
                    <button class="btn btn-warning" style="margin-top:10px;" id="add_tag_btn">Add Tag</button>
                </form>
                <div id="show_tags" style="margin-top:10px;"></div>
            </div>
            <button class="btn btn-default" id="submit_button_final" style="float:right; margin:30px; margin-top:0px;">Submit Blog</button>
                  
           

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
            // console.log(i);
                i.src = event.target.result;
                i.onload = function(){
                    
                    // console.log("Image loaded");
                }
        };
        output_format = file.name.split(".").pop();
        file_name = file.name;
        // console.log("Filename:" + file.name);
        // console.log("Fileformat:" + output_format);
        // console.log("Filesize:" + (parseInt(file.size) / 1024) + " Kb");
        // console.log("Type:" + file.type);
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
        
        // console.log("process start...");
        // console.log("process start compress ...");
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
            // console.log("image uploaded successfully! :)");
            // console.log(response);       
        }

        var errorCallback= function(response){
            // console.log("image Filed to upload! :)");
            // console.log(response); 
        }
        
        // console.log(compressed_image.src);
        // console.log("process start upload ...");
        jic.upload(compressed_image, "<?=base_url('main_helper/upload_blog_image');?>", "file", new_name+"."+output_format,successCallback,errorCallback);

        // console.log(x);
    }
        
    // });

document.getElementById("blog_image").addEventListener("change", readFile, false);
</script>


<script type="text/javascript">
    var key="<?php echo $this->security->get_csrf_hash(); ?>";

    $("#show_url_upload").hide();
    $("#image_upload_prev").hide();

    var image_name_datetime="";
    function previewFile(img,prev){
        var file = $(img).get(0).files[0];
        // console.log(file);
 
        if(file){

            var reader = new FileReader();

            reader.onload = function(){
                // console.log(prev);
                $(prev).attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
        image_name_datetime=Date.now();

        $("#image_upload_prev").show();
    }

    function compress_image_jic_addon(prev,ext){
        var source_image = document.getElementById(prev);
        // console.log('Source Image: '+prev);
        if (source_image.src == "") {
            alert("You must load an image first!");
            return false;
        }

        var quality = 30;
        
        // console.log("process start...");
        // console.log("process start compress ...");
        var compressed_image = document.getElementById(prev);
        compressed_image.src = jic.compress(source_image,quality,ext).src;
}
  
    function upload_image_jic_addon(prev,file_transfer) {
        var compressed_image = document.getElementById(prev);
        // console.log("hello");
        if (compressed_image.src == "") {
            alert("You must compress image first!");
            return false;
        }

        var successCallback= function(response){
            // console.log("image uploaded successfully! :)");
            // console.log(response);       
        }

        var errorCallback= function(response){
            // console.log("image Filed to upload! :)");
            // console.log(response); 
        }
        
        // console.log("process start upload ...");
        jic.upload(compressed_image, "<?=base_url('main_helper/upload_blog_image_addon');?>", "file", file_transfer,successCallback,errorCallback);
    }

    var main_img_ext;
    $("#image_upload_link").change(function(e){
        e.preventDefault();
        main_img_filee=e.target.files[0];
        main_img_file_name_tra=main_img_filee.name;
        main_img_ext=main_img_filee.name.split(".").pop();
        previewFile("#image_upload_link","#image_upload_prev");
        
        // console.log(main_img_event);
        
    });

    $("#image_upload_btn").click(function (e) {
        e.preventDefault();
        compress_image_jic_addon("image_upload_prev",main_img_ext);
        upload_image_jic_addon("image_upload_prev",image_name_datetime+"."+main_img_ext);
        $("#show_url_upload").val("<?=base_url();?>/utility/blog_image/addon/"+image_name_datetime+"."+main_img_ext);
        $("#show_url_upload").show();
        $("#image_upload_link").val("");
        $("#image_upload_prev").hide();
    });



    var is_complete =1;



    // $("#preview_div").hide();
    is_compressed=0;
    $("#blog_body").keyup(function(e){
        e.preventDefault();
        $("#error_display_seo").html("");
        
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
            if(!is_compressed){
                compress_image_jic();
                // previewFile();
                is_compressed=1;
            }
            // console.log(is_compressed);
            
        }

        $("img").each(function(){
            if($(this).attr("alt")==undefined||$(this).attr("alt")==""){
                $("#error_display_seo").append("Image has no alt tag <br>");
            }
        });
    
        var inbound_link=0;
        var outbound_link=0;
        $("a").each(function(){
            
            if($(this).attr("href")!=""&&$(this).attr("href")!="#"){
                $(this).attr("href").search("<?=base_url();?>")>=0?inbound_link++:outbound_link++;
            }
            
            
            
        });
        if(inbound_link<=27){
            $("#error_display_seo").append("no inbound link present <br>");
        }
        if(outbound_link<=3){
            $("#error_display_seo").append("no Outbound link present <br>");
        }
        var js_word_count=text_from_html($("#blog_body").val()).trim().split(' ').length;
        if(js_word_count<300){
            $("#error_display_seo").append("blog shoud be greater than 300 words. Words: "+js_word_count);
        }
        
    });


    $("#submit_button_final").click(function(e){
        e.preventDefault();
        var heading=$("#blog_heading").val();
        var category=$("#blog_category").val();
        var blog_body=$("#blog_body").val();
        
        
        if(heading==""||category==""||blog_body==""||tag_value==""){
            alert("fill all the fields");
            return;
        }

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
                blog_tags:tag_value
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

    var tag_value="";
    $('#add_tag_btn').click(function(e){
        e.preventDefault();
        tag_input=$("#tag_input").val();
        if(tag_value!=""){
            tag_value+=", ";
        }
        tag_value+=tag_input;
        $("#tag_input").val("");
        tag_val_arr=tag_value.split(",")
        tags_show_html="";
        $.each(tag_val_arr,function(){
            tags_show_html+='<span class="badge badge-dark" style="margin-right:5px; padding:6px;">'+this+'</span>';
        });
        $("#show_tags").html(tags_show_html);
    });
    
    $("#append_image_double").click(function(e){
        e.preventDefault();
        $("#blog_body").val($("#blog_body").val()+'\n<div style="display: flex; justify-content:space-around;">\n<img src=""  style="width:47%; height:300px; object-fit:cover;" alt="">\n<img src=""  style="width:47%; height:300px; object-fit:cover;" alt="">\n</div>');
    });

    $("#append_image_full_image").click(function (e) {
        e.preventDefault();
        $("#blog_body").val($("#blog_body").val()+'\n<img src=""  style="height:300px; width:auto; display:block; margin-left:auto; margin-right:auto;" alt="">');
    });

    $("#append_link_anchor").click(function (e) {
        e.preventDefault();
        $("#blog_body").val($("#blog_body").val()+'\n<a href="" target="_blank"> </a>');
    });



$(window).on("scroll", function() {
	var scrollHeight = $(document).height();
	var scrollPosition = $(window).height() + $(window).scrollTop();

	if ((scrollHeight - 510)< scrollPosition) {
        $("#prev_col").removeClass("col-md-offset-6");
	    $("#edit_col").css('position',"relative");
	    $("#edit_col").css('top',scrollHeight-1500+"px");
        
	}else{
        $("#prev_col").addClass("col-md-offset-6");
	    $("#edit_col").css('position',"fixed");
        $("#edit_col").css('top',"100px");
    }
 
});



</script>


</body>
</html>