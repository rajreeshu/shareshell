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
       
       <div class="row">
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
<h1>Preview<br>---------------<br><br><br></h1>
       <div class="blog-lst col-md-9 mb-3 p-1" style="border:1px solid #d0d0d0;">
                        <section id="id-100" class="post single">

                            <div class="post-header single">
                                <div class="">
                                    <h2 class="wow fadeInLeft animated" id="preview_heading"></h2>
                                    <div class="title-line wow fadeInRight animated"></div>
                                </div>
                                <div class="row wow fadeInRight animated">
                                    <div class="col-sm-6">
                                        <p class="author-category">
                                            By <a href="#">John Snow</a>
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
                                <div class="image wow fadeInRight animated"> 
                                    <img src="" class="img-responsive" alt="Example blog post alt" id="main_img" style="height: 400px;object-fit:contain;"> 
                                </div>
                            </div> 

                            <div id="post-content" class="post-body single wow fadeInLeft animated">
                                <!-- <p>
                                    <strong>Pellentesque habitant morbi tristique</strong> 
                                    senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                                    semper. <em>Aenean ultricies mi vitae est.</em> 
                                    Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean
                                    fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
                                <p>
                                    <img src="assets/img/blog10.jpg" class="img-responsive" alt="Example blog post alt">
                                </p>

                                <h2>Header Level 2</h2>
                                <ol>
                                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                    <li>Aliquam tincidunt mauris eu risus.</li>
                                </ol>

                                <blockquote>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada
                                        tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
                                    </p>
                                </blockquote>

                                <h3>Header Level 3</h3>

                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                    <li>Aliquam tincidunt mauris eu risus.</li>
                                </ul>
                                <p>
                                    <img src="assets/img/blog.jpg" class="img-responsive" alt="Example blog post alt">
                                </p>
                                <p>
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros
                                    eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
                                </p> -->

                            </div>

                            <!-- buttons -->
                            <div class="post-footer single wow fadeInBottum animated">
                                <ul class="pager">
                                    <li class="previous"><a href="#"><i class=""></i>← Older </a></li>
                                    <li class="next disabled"><a href="#">Newer →<i class=""></i> </a></li>
                                </ul> 
                            </div>    

                        </section> 

                        <section class="about-autor">

                        </section>

                        

                       
                    </div>    

   </div>


<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');
?>

<script type="text/javascript">
    var key="<?php echo $this->security->get_csrf_hash(); ?>";

    function previewFile(){
        var file = $("#blog_image").get(0).files[0];
        
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#main_img").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
    // $("#blog_image").change(previewFile);

    $("#blog_submit").click(function(e){
        e.preventDefault();

        var heading=$("#blog_heading").val();
        var category=$("#blog_category").val();
        var blog_body=$("#blog_body").val();

        $("#preview_heading").html(heading);
        $("#preview_category").html(category);
        $("#post-content").html(blog_body);

        console.log($("#preview_body"));
        previewFile();
    });


</script>


</body>
</html>