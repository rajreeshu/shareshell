<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs | Shareshell</title>

</head>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?> 
<style>
    @media only screen and (max-width: 600px){
       #blog{
           margin-left: 0px !important;
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
                    <div class="blog-lst col-md-9 p0">
                        <section id="id-100" class="post single">

                            <div class="post-header single">
                                <div class="">
                                    <h2 class="" id="blog_title"></h2>
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
                                <div class="image"> 
                                    <img src="" id="blog_main_img" class="img-responsive" alt="Example blog post alt" style="height:400px; object-fit:contain;">
                                </div>
                            </div> 

                            <div id="post-content" class="post-body single">

                            </div>
                            <div class="post-footer single">
                                <ul class="pager">
                                    <li class="previous"><a href="#"><i class=""></i>← Older </a></li>
                                    <li class="next disabled"><a href="#">Newer →<i class=""></i> </a></li>
                                </ul> 
                            </div>    

                        </section> 

                        <section class="about-autor">

                        </section>

                        <section id="comments" class="comments"> 
                            <h4 class="text-uppercase ">3 comments</h4>


                            <div class="row comment">
                                <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p>
                                        <img src="<?=base_url();?>/assets/img/avatar_boy.jpg" class="img-responsive img-circle" alt="">
                                    </p>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <h5 class="text-uppercase">Julie Alma</h5>
                                    <p class="posted"><i class="fa fa-clock-o"></i> September 23, 2011 at 12:00 am</p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                        Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    
                                    </p>
                                </div>
                            </div>
                            <!-- /.comment -->


                            <div class="row comment last">

                                <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p>
                                        <img src="assets/img/client-face2.png" class="img-responsive img-circle" alt="">
                                    </p>
                                </div>

                                <div class="col-sm-9 col-md-10">
                                    <h5 class="text-uppercase">Louise Armero</h5>
                                    <p class="posted"><i class="fa fa-clock-o"></i> September 23, 2012 at 12:00 am</p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                        Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    
                                    </p>
                                </div>

                            </div>
                            <!-- /.comment -->
                        </section>

                        <section id="comment-form" class="add-comments">
                            <h4 class="text-uppercase">Leave comment</h4>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name <span class="required">*</span>
                                            </label>
                                            <input class="form-control" id="name" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email <span class="required">*</span>
                                            </label>
                                            <input class="form-control" id="email" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="comment">Comment <span class="required">*</span>
                                            </label>
                                            <textarea class="form-control" id="comment" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button class="btn btn-primary"><i class="fa fa-comment-o"></i> Post comment</button>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>                    

                    
                    <div class="blog-asside-right col-md-3">
                        <div class="panel panel-default sidebar-menu " >
                            <div class="panel-heading">
                                <h3 class="panel-title">Text widget</h3>
                            </div>
                            <div class="panel-body text-widget">
                                <p>Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage mr be. Hold do at tore in park feet near my case.
                                </p>
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu ">
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
                        </div>

                        
                        
                            <div class="panel panel-default sidebar-menu ">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Recommended</h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                        <ul>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Super nice villa </a></h6>
                                                <span class="property-price">3000000$</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3  col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-1.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Super nice villa </a></h6>
                                                <span class="property-price">3000000$</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-3.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Super nice villa </a></h6>
                                                <span class="property-price">3000000$</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Super nice villa </a></h6>
                                                <span class="property-price">3000000$</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            

                        <div class="panel sidebar-menu">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tags</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="tag-cloud">
                                    <li><a href="#"><i class="fa fa-tags"></i> html5</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> css3</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> jquery</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> ajax</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> php</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> responsive</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> visio</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> bootstrap</a> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>   
                    
                </div>

            </div>
        </div>



<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import'); 

    $blog_no=$this->input->get('id');

    if(empty($blog_no)){
        header("Location:".base_url('blogs'));
    }
?>
<script>
var key ="<?php echo $this->security->get_csrf_hash(); ?>";
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

                $("#blog_title").html(data.blog.blog_heading);
                $("#blog_writer").html(data.writer.first_name+" "+data.writer.last_name);
                $("#blog_date").html(data.blog.blog_date);
                $("#blog_main_img").attr("src","<?=base_url('utility/blog_image/');?>"+data.blog.blog_image);
                $("#post-content").html(data.blog.blog_body);
                $("#blog_category").html(data.blog.blog_category);
            },
            error: function (data){
                console.log(data);
            }
        });

</script>


</body>
</html>