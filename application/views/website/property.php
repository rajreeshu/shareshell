<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SHARESHELL | Property  page</title>
        <meta name="shareshell" content="Making rental easy">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       
        <link rel="stylesheet" href="assets/css/lightslider.min.css">

<style type="text/css">
    .thumb_class{
        /*border: 3px solid blue;*/

    }
    .thumb_class_src{
        height:472px;
        width: 100%;
        object-fit: cover;
        /*border: 3px solid red;*/
    }

    .lSPager{
        /*padding: 10px;*/
        /*border: 3px solid red;*/
    }
    .lSSlideOuter .lSPager.lSGallery img{
        /*border: 3px solid pink;*/
        height: 50px;
        width: 80px;
        object-fit: cover;
    }
    .lSGallery img{
        /*height: 100px;*/
        /*border: 3px solid blue;*/
    }
</style>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?> 
</head>
<body>
	    <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title" id="property_name">Property Name</h1>               
                    </div>
                </div>
            </div>
        </div> 
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">
            <div class="container">

                <div class="clearfix padding-top-40">
                    <div class="col-md-8 single-property-content ">
                        <div class="row">
                            <div class="light-slide-item">            
                                <div class="clearfix">
                                    <div class="favorite-and-print">
                                        <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                            <i class="fa fa-star-o"></i>
                                        </a>
                                        <a class="printer-icon " href="javascript:window.print()">
                                            <i class="fa fa-print"></i> 
                                        </a>
                                    </div> 

                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                        <li data-thumb="" id="main_img_thumb" class="thumb_class"> 
                                            <img src="" id="main_img_slider" class="thumb_class_src">
                                        </li>                                      
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single-property-wrapper">
                            <div class="single-property-header">                                          
                                <h1 class="property-title pull-left" id="property_city">Villa in Coral Gables</h1>
                                <span class="property-price pull-right" id="property_price">$825,000</span>
                            </div>

                            <div class="property-meta entry-meta clearfix ">   

                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-tag">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                        <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#FFA500" d="M47.199 24.176l-23.552-23.392c-.504-.502-1.174-.778-1.897-.778l-19.087.09c-.236.003-.469.038-.696.1l-.251.1-.166.069c-.319.152-.564.321-.766.529-.497.502-.781 1.196-.778 1.907l.092 19.124c.003.711.283 1.385.795 1.901l23.549 23.389c.221.218.482.393.779.523l.224.092c.26.092.519.145.78.155l.121.009h.012c.239-.003.476-.037.693-.098l.195-.076.2-.084c.315-.145.573-.319.791-.539l18.976-19.214c.507-.511.785-1.188.781-1.908-.003-.72-.287-1.394-.795-1.899zm-35.198-9.17c-1.657 0-3-1.345-3-3 0-1.657 1.343-3 3-3 1.656 0 2.999 1.343 2.999 3 0 1.656-1.343 3-2.999 3z"></path>
                                        </svg>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Status</span>
                                        <span class="property-info-value" id="property_status">For Sale</span>
                                    </span>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info icon-area">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                        <path class="meta-icon" fill="#FFA500" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"></path>
                                        </svg>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label"></span>
                                        <span class="property-info-value" id="property_bed">3500<b class="property-info-unit">Sq Ft</b></span>
                                    </span>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                        <path class="meta-icon" fill="#FFA500" d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z"></path>
                                        </svg>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label"></span>
                                        <span class="property-info-value" id="property_type">3</span>
                                    </span>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">

                                    <span class="property-info-entry" >
                                        <h1 style="color:#FFA500; margin-top: -20px;"> &#9893;</h1>
                                        <span class="property-info-label"></span>
                                        <span class="property-info-value" id="property_avail" style="margin-left: -25px;">3.5</span>
                                    </span>
                                </div>
                            </div>
                            <!-- .property-meta -->

                            <div class="section">
                                <h4 class="s-property-title">Description</h4>
                                <div class="s-property-content" id="property_description">
                                    <p>Nulla quis dapibus nisl. Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies commodo arcu nec pretium. Nullam sed arcu ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies                                </p>
                                </div>
                            </div>
                            <!-- End description area  -->

                            <div class="section additional-details">

                                <h4 class="s-property-title">Additional Details</h4>

                                <ul class="additional-details-list clearfix">
                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Yes</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Built In</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">2003</span>
                                    </li>
                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Parking</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">2 Or More Spaces,Covered Parking,Valet Parking</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Yes</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">View</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Intracoastal View,Direct ew</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront Description:</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Intracoastal Front,Ocean Access</span>
                                    </li> 

                                </ul>
                            </div>  
                            <!-- End additional-details area  -->

                            <div class="section property-features">      

                                <h4 class="s-property-title">Features</h4>                            
                                <ul id="property_addon">
                                    <li><a href="properties.html">Swimming Pool</a></li>   
                                    <li><a href="properties.html">3 Stories</a></li>
                                    <li><a href="properties.html">Central Cooling</a></li>
                                    <li><a href="properties.html">Jog Path 2</a></li>
                                    <li><a href="properties.html">2 Lawn</a></li>
                                    <li><a href="properties.html">Bike Path</a></li>
                                </ul>

                            </div>
                            <!-- End features area  -->

                            <div class="section property-video"> 
                                <h4 class="s-property-title">Property Video</h4> 
                                <div class="video-thumb">
                                    <a class="video-popup" href="yout" title="Virtual Tour">
                                        <!-- <img src="<?=base_url();?>assets/img/property-video.jpg" class="img-responsive wp-post-image" alt="Exterior">             -->
                                        <iframe class="img-responsive" id="property_video" style="width:90%; height: 300px;" alt="Exterior"></iframe>
                                    </a>
                                </div>
                            </div>
                            <!-- End video area  -->
                            <div class="section property-share"> 
                                <h4 class="s-property-title">Share width your friends </h4> 
                                <div class="roperty-social">
                                    <ul> 
                                        <li><a title="Share this on dribbble " href="#"><img src="assets/img/social_big/dribbble_grey.png"></a></li>                                         
                                        <li><a title="Share this on facebok " href="#"><img src="assets/img/social_big/facebook_grey.png"></a></li> 
                                        <li><a title="Share this on delicious " href="#"><img src="assets/img/social_big/delicious_grey.png"></a></li> 
                                        <li><a title="Share this on tumblr " href="#"><img src="assets/img/social_big/tumblr_grey.png"></a></li> 
                                        <li><a title="Share this on digg " href="#"><img src="assets/img/social_big/digg_grey.png"></a></li> 
                                        <li><a title="Share this on twitter " href="#"><img src="assets/img/social_big/twitter_grey.png"></a></li> 
                                        <li><a title="Share this on linkedin " href="#"><img src="assets/img/social_big/linkedin_grey.png"></a></li>                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right">
                            <div class="dealer-widget">
                                <div class="dealer-content">
                                    <div class="inner-wrapper">

                                        <div class="clear">
                                            <div class="col-xs-4 col-sm-4 dealer-face">
                                                <!-- <a href=""> -->
                                                    <img src="<?=base_url();?>assets/img/client-face1.png" class="img-circle" id="user_img" style="height: 100px; width: 100px; object-fit: cover; margin: 0px;padding: 0px;">
                                                <!-- </a> -->
                                            </div>
                                            <div class="col-xs-8 col-sm-8 ">
                                                <h3 class="dealer-name" style="padding-bottom:10px;">
                                                    <a href="" id="agent_name" style="">my name</a>
                                                    <div id="agent_username" style="font-size: 15px;">My Username</div>        
                                                </h3>
                                                <div class="dealer-social-media">
                                                    <a class="twitter" target="_blank" href="" id="agent_twitter_link">
                                                        <!-- <i class="fa fa-twitter-square fa-2x" id="agent_twitter"style="margin-right: 20px;"></i> -->
                                                    </a>
                                                    <a class="facebook" target="_blank" href="" id="agent_facebook_link">
                                                        <!-- <i class="fa fa-facebook-official fa-2x" id="agent_facebook"></i> -->
                                                    </a>
                                                   <!--  <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>  -->
                                                 <!--    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>     -->   
                                                </div>

                                            </div>
                                        </div>

                                        <div class="clear">
                                            <ul class="dealer-contacts">                                       
                                                <li><i class="pe-7s-map-marker strong"> </i><span id="agent_address"> 9089 your adress her</span></li>
                                                <!-- <li><i class="pe-7s-mail strong"> </i> <span id="agent_email">email@yourcompany.com</span></li> -->
                                                <!-- <li><i class="pe-7s-call strong"> </i> <span id="agent_phone">+1 908 967 5906</span></li> -->
                                            </ul>
                                            <p id="agent_bio">Duis mollis  blandit tempus porttitor curabiturDuis mollis  blandit tempus porttitor curabitur , est non…</p>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Similar Properties</h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                    <ul>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="<?=base_url();?>assets/img/demo/small-property-2.jpg"></a>
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
                                                <a href="single.html"><img src="<?=base_url();?>assets/img/demo/small-property-1.jpg"></a>
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
                                                <a href="single.html"><img src="<?=base_url();?>assets/img/demo/small-property-3.jpg"></a>
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
                                                <a href="single.html"><img src="<?=base_url();?>assets/img/demo/small-property-2.jpg"></a>
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



                            <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ads her  </h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                    <img src="<?=base_url();?>assets/img/ads.jpg">
                                </div>
                            </div>

                        </aside>
                    </div>
                </div>

            </div>
        </div>
<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import'); 

    $property_no=$this->input->get('id');

    if(empty($property_no)){
        header("Location:".base_url('properties'));
    }
?>
<script type="text/javascript" src="<?=base_url();?>assets/js/lightslider.min.js"></script>
 <script>
        var key="<?php echo $this->security->get_csrf_hash(); ?>";   

        var property_by="";       

    $.ajax({
        url:"<?=base_url('main_helper/get_property_data');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            id:"<?= $property_no;?>"
                    
            },
            dataType:"json",
            // processData:false,
            // contentType:false,

            success:function(data){
                key=data.key;

                console.log(data.data);
                property_by=data.data.listed_by;

                    //start

                $("#property_name").html(data.data.name);
                $("#main_img_thumb").attr('data-thumb', '<?=base_url("utility/main_image/");?>'+data.data.main_image);
                $("#main_img_slider").attr('src',  '<?=base_url("utility/main_image/");?>'+data.data.main_image);
                $("#property_city").html("Property In "+data.data.city);
                $("#property_price").html("&#8377 "+data.data.price);
                $("#property_description").html(data.data.description);
                $("#property_addon").html("<h3>"+data.data.addon.toUpperCase()+"</h3>");

                var video_play_link="";
                if(data.data.add_video.search('embed')==-1){
                    video_play_link=data.data.add_video.replace('/watch?v=',/embed/);
                }else{
                    video_play_link=data.data.add_video;
                }
                // console.log(typeof(video_play_link));
                $("#property_video").attr('src', video_play_link);

                $("#property_status").html("For "+data.data.status.toUpperCase());
                $("#property_bed").html(data.data.min_bed);
                $("#property_type").html(data.data.type.toUpperCase());
                $("#property_avail").html(data.data.avail.toUpperCase());




            },
            error:function(data){
                console.log(data);
            }
        });

    $.ajax({
        url:"<?=base_url('main_helper/get_property_images');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            property_id:"<?= $property_no;?>"
                    
            },
        dataType:"json",
        success:function(data){
            key=data.key;
            console.log(data);

            var image_insert="";
            $.each(data.data,function(){
                // console.log(this.image);
                image_insert+='<li data-thumb="<?=base_url();?>utility/main_image/'+this.image+'" class="thumb_class">';
                image_insert+='<img src="<?=base_url();?>utility/main_image/'+this.image+'"  class="thumb_class_src"/>';
                image_insert+='</li>';

            });
            // while(data.data){
            //     console.log("h");
            // }
            $("#image-gallery").append(image_insert);
        },
        error:function(data){
            console.log(data);
            alert("something went wrong");
        }
    });

    $.ajax({
        url:"<?=base_url('main_helper/user_detail_public');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            user_id:property_by
                    
            },
        dataType:"json",
        success:function(data){
            key=data.key;
            console.log(data);
            
            $("#agent_name").html(data.data.first_name+' '+data.data.last_name);
            $("#agent_username").html(data.data.username);
            $("#agent_address").html(data.data.address);
            $("#agent_bio").html(data.data.user_bio);
            if(data.data.twitter!=""){
                $("#agent_twitter_link").html('<i class="fa fa-twitter-square fa-2x" id="agent_twitter"style="margin-right: 20px;"></i>');
            }
            $("#agent_twitter_link").attr("href",data.data.twitter);
            if(data.data.facebook!=""){
                $("#agent_facebook_link").html('<i class="fa fa-facebook-official fa-2x" id="agent_facebook"></i>');
            }
            $("#agent_facebook_link").attr("href",data.data.facebook);

            if(data.data.image!=""){
                $("#user_img").attr("src","<?=base_url('utility/user_image/');?>"+data.data.image);
            }else{
                 $("#user_img").attr("src",'<?=base_url('assets/img/');?>'+user_image_male_female(data.data['gender']));
            }


        },
        error:function(data){
            console.log(data);
            alert("something went wrong");
        }
    });

        


$('#image-gallery').lightSlider({
    gallery: true,
    item: 1,
    thumbItem: 9,
    slideMargin: 0,
    speed: 500,
    auto: true,
    loop: true,
    onSliderLoad: function () {
        $('#image-gallery').removeClass('cS-hidden');
    }
});                    
        </script>
</body>
</html>