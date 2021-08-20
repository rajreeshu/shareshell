<?php
$blog_slug=$this->uri->segment(4);
$img_explode=explode(".",$blog_image);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="<?=substr(strip_tags($head_body),0,150);?>">
    <meta name="author" content="ShareShell">
    <meta name="keyword" content="<?=$head_tags;?>">
    <title><?=$head_heading;?> - Shareshell Blog</title>

    <!-- Facebook Meta Tags -->
<meta property="og:url" content="<?=base_url();?>main/blog/<?=$blog_no;?>/<?=$blog_slug;?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?=$head_heading;?> by <?=$first_name.' '.$last_name;?> - Shareshell Blog">
<meta property="og:description" content="Read Most Amazing Blogs Related to Real Estate on Shareshell">
<meta property="fb:app_id" content="235531264523889">
<!-- <meta property="og:image" content="<?=base_url();?>utility/blog_image/<?=$img_explode[0].'_thumb.'.$img_explode[1];?>"> -->
<meta property="og:image" content="<?=base_url();?>utility/blog_image/<?=$blog_image;?>">


</head>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?> 
<style>
    @media only screen and (max-width: 600px){
       /* #blog{
           margin-left: 20px !important;
       } */
       .double_image{
        flex-direction: column !important;
        
        }
        .double_image img{
            width:100% !important;
        }
        ul{
            padding-left: 20px !important;
        }
    }
    

</style>
<body>
<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">READ THE MOST AMAZING ARTICLES ON REAL ESTATE</h1>               
                    </div>
                </div>
            </div>
        </div>
<div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="blog-lst col-md-9 p0" style="padding-left:15px; padding-right:15px;">
                        <section id="id-100" class="post single" style="padding:0px;">

                            <div class="post-header single">
                                <div class="">
                                    <h3 class="" id="blog_title"></h3>
                                    <div class="title-line"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="author-category">
                                            By <a href="#" id="blog_writer"></a>
                                            in <a href="#" id="blog_category"></a>
                                        </p>
                                    </div>
                                    <div class="col-sm-6 right" >
                                        <p class="date-comments">
                                            <a href="#"><i class="fa fa-calendar-o"></i> <span id="blog_date">June 20, 2013</span></a>
                                            <!-- <a href="#"><i class="fa fa-comment-o"></i> 8 Comments</a> -->
                                        </p>
                                    </div>
                                </div>
                                <div class="image" > 
                                    <img src="" id="blog_main_img" class="img-responsive" alt="" style="max-height:400px; object-fit:contain;">
                                </div>
                            </div> 

                            <div id="post-content" class="post-body single" style="overflow:hidden; text-align:justify;">

                            </div>
                            <div class="post-footer single">
                                <ul class="pager" id="pager_next_prev">
                                
                                </ul> 
                            </div>    

                        </section> 

                        <section class="about-autor">

                        </section>
                        <h4 class="text-uppercase " id="comment_heading">comments</h4>
                        <section id="show_comments" class="comments"> 

                        </section>
                        <a id="show_all_comments" href="#">Show all Comments</a>
                        <a id="show_less_comments" style="display: none;" href="#">Show Less Comments</a>

                        <section id="comment-form" class="add-comments">
                            <h4 class="text-uppercase">Leave comment</h4>
                            <?php
                                if($commentor_id=$this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
                            ?>
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="comment">Comment <span class="required">*</span>
                                            </label>
                                            <textarea class="form-control" id="comment_text" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button class="btn btn-primary" id="comment_btn"><i class="fa fa-comment-o"></i> Post comment</button>
                                    </div>
                                </div>  
                            <?php     
                                }else{
                            ?>
                            <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button class="btn btn-primary" onclick="location.href='<?=base_url('main/log_user');?>'" style="float: left;">Login to post your comment</button>
                                    </div>
                                </div>
                            <?php 
                                }
                            ?>
                        </section>
                    </div>                    

                    
                    <div class="blog-asside-right col-md-3">
                        <div class="panel panel-default sidebar-menu " >
                            <div class="panel-heading">
                                <h3 class="panel-title">Text widget</h3>
                            </div>
                            <div class="panel-body text-widget">
                                <p>
                                    Hope You Liked this Blog. You can Read some more Recommended Blogs.
                                   visit our website i.e <a href="https://shareshell.in">https://shareshell.in</a> to check out some amazing Listed Property on our Platform.
                                </p>
                            </div>
                        </div>

                        <!-- <div class="panel panel-default sidebar-menu ">
                            <div class="panel-heading">
                                <h3 class="panel-title">Search</h3>
                            </div>
                            <div class="panel-body">
                                <form role="search">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Search" type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-smal">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div> -->

                        
                        
                            <div class="panel panel-default sidebar-menu ">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Recommended</h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                        <ul id="recommended_blogs">
                                       

                                    </ul>
                                    
                                </div>
                            </div>
                            

                        <div class="panel sidebar-menu">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tags</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="tag-cloud" id="tags_display"></ul>
                            </div>
                        </div>
                    </div>   
                    
                </div>

            </div>
        </div>



<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import'); 

    
    
        
    if(empty($blog_no)){
        redirect("blogs");
    }


?>
<script>
var key ="<?php echo $this->security->get_csrf_hash(); ?>";

        var blog_slug="<?=$blog_slug;?>";
        $.ajax({
            url: "<?=base_url('main_helper/get_blog_data');?>",
            type: "POST",
            async: false,
            data: {
                "<?php echo $this->security->get_csrf_token_name();?>": key,
                blog_id: "<?= $blog_no;?>"

            },
            dataType: "json",
            success: function (data) {
                key = data.key;
                console.log(data);


                //blog data publish
                $("#blog_title").html(data.blog.blog_heading);
                $("#blog_writer").html(data.writer.first_name+" "+data.writer.last_name);
                $("#blog_date").html(data.blog.blog_date);
                $("#blog_main_img").attr("src","<?=base_url('utility/blog_image/');?>"+data.blog.blog_image);
                $("#blog_main_img").attr("alt",data.blog.blog_heading);
                $("#post-content").html(data.blog.blog_body);
                $("#blog_category").html(data.blog.blog_category);

                var blog_slug_js=slug_js(data.blog.blog_heading);
                if(blog_slug!=blog_slug_js){
                    window.history.replaceState(null, null, "<?=base_url('main/blog/').$blog_no;?>/"+blog_slug_js);
                }

                var tags_display="";
                if(data.blog.blog_tags!=""){
                    $.each(data.blog.blog_tags.split(","), function(){
                        tags_display+='<li><a href="<?=base_url('blogs?');?>tags='+this.trim()+'"><i class="fa fa-tags"></i>'+this+'</a></li>';                    
                    });
                    $("#tags_display").html(tags_display);
                }
                

                // $("#meta-keywords").attr("content",data.blog.blog_tags);
                // $("#meta-description").attr("content",limit_words(100,$("#post-content").text()));
                // $("#meta-title").text(data.blog.blog_heading+" - Shareshell Blog");


                //next prev button code
                if(data.prev_blog_id!=null){
                    // $("#prev_blog_btn").children().attr('href',');
                    $("#pager_next_prev").append('<li class="previous" id="prev_blog_btn"><a href="<?=base_url();?>main/blog/'+data.prev_blog_id.blog_id+'/'+slug_js(data.prev_blog_id.blog_heading)+'"><i class=""></i>← PREVIOUS </a></li>');
                    
                }
                if(data.next_blog_id!=null){
                    // $("#next_blog_btn").children().attr('href','<?=base_url();?>main/blog?id='+data.next_blog_id.blog_id);
                    $("#pager_next_prev").append('<li class="next" id="next_blog_btn"><a href="<?=base_url();?>main/blog/'+data.next_blog_id.blog_id+'/'+slug_js(data.next_blog_id.blog_heading)+'">NEXT →<i class=""></i> </a></li>');
                }

                //recommended
                var recommended_blog="";
                $.each(data.recommended_blogs,function(){
                    recommended_blog+='<li><div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">';
                    recommended_blog+='<a href="<?=base_url();?>/main/blog?id='+this.blog_id+'"><img src="<?=base_url();?>/utility/blog_image/'+get_thumb_name(this.blog_image)+'" alt="shareshell_'+this.blog_heading+'" style="object-fit:cover; height:60px; width:60px;"></a>';
                    recommended_blog+='<span class="property-seeker"></span></div>';
                    recommended_blog+='<div class="col-md-8 col-sm-8 col-xs-8 blg-entry" style="line-height:17px;">';
                    recommended_blog+='<h6> <a href="<?=base_url();?>main/blog/'+this.blog_id+"/"+slug_js(this.blog_heading)+'/">'+this.blog_heading+' </a></h6>';
                    recommended_blog+='<span class="property-price" style="margin-top:-15px;">'+limit_words(30,this.blog_body.replace(/<[^>]+>/g, ''))+'</span></div></li>';
                });
                $("#recommended_blogs").html(recommended_blog);
                
                
                // console.log(data.prev_blog_id.blog_id);
            },
            error: function (data){
                location.href="<?=base_url('blogs');?>";
                console.log(data);
            }
        });

    function fetch_comments(per_page_comment){
        $.ajax({
            url: "<?=base_url('main_helper/get_blog_comments');?>",
            type: "POST",
            async: false,
            data: {
                "<?php echo $this->security->get_csrf_token_name();?>": key,
                blog_id: "<?= $blog_no;?>",
                per_page:per_page_comment,
                page_no:1
            },
            dataType: "json",
            success: function (data) {
                // console.log(data);
                var show_comments="";
                var i=1;
                $.each(data.data, function(){
                    show_comments+='<div class="row comment">'; 
                    show_comments+='<div class="col-sm-3 col-md-2 text-center-xs">';
                    if(this.image){
                        show_comments+='<p><img src="<?=base_url();?>/utility/user_image/'+get_thumb_name(this.image)+'" class="img-responsive img-circle" alt="'+this.first_name+'" style="object-fit:cover;"></p>';
                    }else{
                        show_comments+='<p><img src="<?=base_url();?>assets/img/'+user_image_male_female(this.gender)+'" class="img-responsive img-circle" style="object-fit:cover;" alt="'+this.first_name+'" style="object-fit:cover;"></p>';
                    }
                    
                    show_comments+='</div>';
                    show_comments+='<div class="col-sm-9 col-md-10">';
                    show_comments+='<h5 class="text-uppercase">'+this.first_name+' '+this.last_name+'</h5>';
                    show_comments+='<p class="posted"><i class="fa fa-clock-o"></i> '+this.date_time+'</p>';
                    show_comments+='<p>'+this.comment+'</p></p>';
                    show_comments+='</div></div>';
                });
                $('#show_comments').html(show_comments);

                if(show_comments==""){
                    $("#comment_heading").html("");
                }

            },
            error: function (data){
                console.log(data);
            }
        });
    }
    fetch_comments(5);

    $("#show_all_comments").click(function(e){
        e.preventDefault();
        fetch_comments(-1);
        $(this).hide();
        $("#show_less_comments").show();
    });

    $("#show_less_comments").click(function(e){
        e.preventDefault();
        fetch_comments(5);
        $(this).hide();
        $("#show_all_comments").show();
    });
    

    $("#comment_btn").click(function(){
        $.ajax({
            url: "<?=base_url('main_helper/post_blog_comment');?>",
            type: "POST",
            async: false,
            data: {
                "<?php echo $this->security->get_csrf_token_name();?>": key,
                blog_id: "<?= $blog_no;?>",
                commentor_id: "<?=$commentor_id;?>",
                comment:$("#comment_text").val(), 
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                $("#comment_text").val("");
                fetch_comments(5);
            },
            error: function (data){
                console.log(data);
            }
    }); 
});

// let htmlString = "<p>Hello</p><a href='http://w3c.org'>W3C</a>"
// let plainText = htmlString.replace(/<[^>]+>/g, '');
// console.log(plainText);


</script>


</body>
</html>