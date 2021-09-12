
<?php
    $property_no=$this->uri->segment(2);
    $property_slug=$this->uri->segment(4);
    $prop_det=$this->db->select('name,main_image')->where('sn',$property_no)->get('property_info')->row();
    // print_r($prop_det);
    if(!$prop_det->name){
        redirect('properties');
    }
    // print_r($prop_det->name);
    $prop_info=$this->db->select('name,addon,description,address,city')->where('sn',$property_no)->get('property_info')->row();
    // print_r($prop_info);
    
?>

<!DOCTYPE html>
<html class="no-js" lang = "en"> 
    <head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$prop_info->name;?></title>
        <meta name="author" content="Shareshell">
        <meta name="keyword" content='<?=$prop_info->addon;?>'>
        <meta name="Description" content='<?=$prop_info->description.",".$prop_info->address.",".$prop_info->city;?>'>
        <meta name="viewport" content="width=device-width, initial-scale=1">

       
        <link rel="stylesheet" href="<?=base_url();?>/assets/css/lightslider.min.css">
        <link href="<?=base_url();?>/assets/css/lightgallery.min.css" rel="stylesheet">

        <!-- Facebook Meta Tags -->
<meta property="og:url" content="https://shareshell.in/property?id=<?=$property_no;?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?=$prop_det->name;?> | Shareshell" id="og_title">
<meta property="og:description" content="Property Listed on ShareShell. Visit us @ shareshell.in to check more Properties.">
<meta property="fb:app_id" content="235531264523889">
<meta property="og:image" content="<?=base_url('utility/main_image/').$prop_det->main_image;?>" id="og_image">

<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?>
    <style type="text/css">
    .thumb_class_src {
    height: 472px;
    width: 100%;
    object-fit: cover;
    padding: 4px;
    border-radius: 33px;
}
   .fa-heart-o {
  color: white;
  cursor: pointer;
  font-size:30px;
}

.fa-heart {
  color: red;
  cursor: pointer;
  font-size:30px;

}
   .thumb_class_src {
            height: 472px;
            width: 100%;
            object-fit: cover;

        }


        .lSSlideOuter .lSPager.lSGallery img {
            height: 50px;
            width: 80px;
            object-fit: cover;
        }

 
        .demo-gallery>ul>li {
            float: left;
            margin-bottom: 15px;
 
        }

        .demo-gallery>ul>li a {
            border: 1px solid #FDC600;
            border-radius: 3px;
            display: block;
            overflow: hidden;
            position: relative;
            float: left;
            width:100%;
            height: 120px;
        }

        .demo-gallery>ul>li a>img {
            -webkit-transition: -webkit-transform 0.15s ease 0s;
            -moz-transition: -moz-transform 0.15s ease 0s;
            -o-transition: -o-transform 0.15s ease 0s;
            transition: transform 0.15s ease 0s;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            height: 100%;
            width: 100%;
        }

        .demo-gallery>ul>li a:hover>img {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
        }

        .demo-gallery>ul>li a:hover .demo-gallery-poster>img {
            opacity: 1;
        }

        @media only screen and (max-width:992px) 
        
        
        {

            .thumb_class_src {
    height: 472px;
    width: 100%;
    object-fit: cover;
    padding: 4px;
    border-radius: 23px;
}

            .thumb_class_src {
                height: 250px;
            }

            .lSSlideOuter .lSPager.lSGallery {
                display: none;
            }

        }

 
        #contact-details {
            display: none;
        }

        #contact-details {
        display: none;
    }

    #contact-owner:hover {
        background-color: teal;
    }

    .item {
        border: 0.6px solid rgb(228, 228, 228);
        width: 116px !important;
        height: 96px;
        text-align: center;
        margin-right: 10px;
        margin-top: 10px;
        border-radius: 4px;
        /* flex: 0 0 auto; */
        /* box-sizing: border-box; */
        /* cursor: pointer; */


    }

    .item img {
        opacity: 0.8;
        height: 35px;
        margin-top: 20px;
        width: auto;
        text-align: center;
        z-index: 1;
    }

    .item p {
        font-size: 10px;
        margin-top: 8px;
    }

    .amenities-icon {
        display: flex;
        /* padding-top: 8px; */
    }

    .add-d-entry {
        font-weight: 500;
    }
    .save button:hover{

        background-color: #fdd543 !important;

    }
    .contact-btn{
        display: none;
    }

    @media only screen and (max-width: 700px) {
        .amenities-icon {
            flex-direction: column !important;
            /* padding-top: 8px !important; */

        }
        .contact-btn{
            display: block;
            margin: auto;
            width: 100%;
            text-align: center;
            justify-content: center;

        }
        .contact-btn img{
            height: 15em;
        }
        .pull-right {
            float:left!important;
        }

        .single-property-wrapper{
            margin-top:0px !important;
        }
        
    }

    @media (min-width: 992px){
.col-md-4 {
    width: 30.333333%;
}
.col-md-8 {
    width: 67.96666667%;
}


}
    </style>
</head>

<body>

<div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
        <div class="container">

            <div class="clearfix">

                <div class="col-md-8 single-property-content prp-style-1 ">
                    <div class="row">
                        <div class="light-slide-item">
                            <div class="clearfix">
                                <div class="favorite-and-print">
                                <span id = "heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
                                   
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
                            <h1 class="property-title" id="property_name" style="font-weight: 500;"></h1>
                            <span class=" pull-right " style="font-weight: 600;
                            color: #FDC600;
                            font-size: 25px;" id="property_price"></span>
                            
                            <span class="pull-left" style="font-weight: 200;font-size: 22px;"><b><span class="property_bed"></span> BHK <span class="property_type"></span></b> for
                                <span class="property_status"></span> in <span id="property_city"></span></span>
                        </div>

                        <!-- <div class="single-property-header">
                            <h1 class="property-title pull-left"  style="font-weight: 500;">Super Nice Villa</h1>
                            <span class=" pull-right" style="font-weight: 600;
                            color: #FDC600;
                            font-size: 25px;">$825,000</span>

                            <span class="pull-left" style="font-weight: 200;font-size: 22px;"><b>2 BHK Apartment</b> for
                                Rent in Kalinga Vihar,Bhubaneswar</span>
                        </div> -->


                        <hr>

                        <div class="section" style="margin-top: -20px; padding-bottom:0px; ">
                            <h4 class="s-property-title"><strong>Complete Address:</strong></h4>
                            <div class="s-property-content">
                                <p id="property_address" style="margin:0px; padding:0px;">
                                </p>
                                <p id="property_landmark"></p>
                            </div>
                        </div>

                        <div class="section" style="margin:0px; padding:0px;">
                            <h4 class="s-property-title"><strong>About the Property:</strong></h4>

                            <div class="s-property-content">
                                <p id="property_description" style="text-align:justify;"> </p>
                            </div>
                        </div>
                        <!-- End description area  -->

                        <div class="contact-btn">
                            <img src="<?=base_url();?>assets/img/166.-Team-Chat.svg" alt="">

                            <div class="save" id="contact_scroll">
                                <button style="background-color: #ffffff;height: 40px;width:70%;border-radius: 5px;color:#1f1f1f;font-weight: bold;border: 1px solid #8d8d8d;margin:auto;margin-top:-8px;">
                                    contact Owner
                                </button>
                            </div>
                        </div>

                        

                        <div class="section additional-details" style="padding-top:0px;">

                            <h4 class="s-property-title"><strong>Overview:</strong></h4>


                            <ul class="additional-details-list clearfix">
                               
                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Property Type</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry property_type"></span>
                                </li>

                                <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Property For</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry property_status"></span>
                                </li>

                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Negoitable Price</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry" id="property_price_negoitable"></span>
                                </li>


                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Build-Up Area</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry" id="property_area"></span>
                                </li>
                                <!-- <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Carpet Area</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">1100 sq/ft</span>
                                </li> -->


                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Furnishing</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry" id="property_furnish"></span>
                                </li>
                                

                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Bedrooms(BHK)</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry property_bed"></span>
                                </li>
                                
                                
                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Available For (Gender)</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry" id="property_avail"></span>
                                </li>
                                
                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Posted By</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry" id="lister_info"></span>
                                </li>
                                
                            </ul>
                        </div>


                        <div class="section additional-details">

                            <h4 class="s-property-title"><strong>Additional Detailes:</strong></h4>


                            <ul class="additional-details-list clearfix">
                               
                                



                               
                                <!-- <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Parking</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">No</span>
                                </li> -->


                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Bathrooms</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry" id="property_bathroom"></span>
                                </li>
                                
                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Balconies</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry" id="property_balcony"></span>
                                </li>
                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Facing</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry" id="property_facing"></span>
                                </li>
                                
                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Floor</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry" id="property_floor"></span>
                                </li>
                                <!-- <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Pet Allowed</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Yes</span>
                                </li> -->
                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Tenants Preffered</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry" id="property_prefered"></span>
                                </li>
                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Non-Veg Allowed</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry" id="property_food_type"></span>
                                </li>

                                <li>
                                    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Sharing</span>
                                    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry" id="property_sharing"></span>
                                </li>

                            </ul>
                        </div>

                        <!-- End additional-details area  -->

                        <div class="section property-features" style="width: 100%;">

                            <h4 class="s-property-title"><strong>Aminities</strong></h4>

                            <div id="properties_ameneties"  style="display: flex; flex-direction: row; flex-wrap: wrap;padding:10px;">
                            <div style="display: flex;">

                                <div class="amenities-icon">
                                    <div class="item"><img src="<?=base_url('assets/img/');?>employees.png" alt="">
                                        <p><b>Maintainance Staff</b></p>
                                    </div>
                                    <div class="item"><img src="<?=base_url('assets/img/');?>gardening.png" alt="">
                                        <p><b>Garden</b></p>
                                    </div>
                                    <div class="item"><img src="<?=base_url('assets/img/');?>parking.png" alt="">
                                        <p><b>Parking</b></p>
                                    </div>
                                   
                                </div>

                                <div class="amenities-icon">
                                    
                                    <div class="item"><img src="<?=base_url('assets/img/');?>slider.png" alt="">
                                        <p><b>Play Area</b></p>
                                    </div>
                                    <div class="item"><img src="<?=base_url('assets/img/');?>pool.png" alt="">
                                        <p><b>Swimming Pool</b></p>
                                    </div>
                                    <div class="item"><img src="<?=base_url('assets/img/');?>dumbbell (1).png" alt="">
                                        <p><b>Gym</b></p>
                                    </div>
                                </div>

                            </div>
                            <div style="display: flex;">
                                <div class="amenities-icon">
                                    
                                    <div class="item"><img src="<?=base_url('assets/img/');?>carrom.png" alt="">
                                        <p><b>Indoor Games</b></p>
                                    </div>
                                    <div class="item"><img src="<?=base_url('assets/img/');?>atm.png" alt="">
                                        <p><b>Bank/ATM</b></p>
                                    </div>
                                    <div class="item"><img src="<?=base_url('assets/img/');?>wifi-signal.png" alt="">
                                        <p><b>Wifi</b></p>
                                    </div>
                                </div>
                                <div class="amenities-icon">
                                    <div class="item"><img src="<?=base_url('assets/img/');?>hospital.png" alt="">
                                        <p><b>Health Facilities</b></p>
                                    </div>
                                    <div class="item"><img src="<?=base_url('assets/img/');?>cafeteria.png" alt="">
                                        <p><b>Cafeteria</b></p>
                                    </div>
                                    <div class="item"><img src="<?=base_url('assets/img/');?>book.png" alt="">
                                        <p><b>Library</b></p>
                                    </div>
                                </div>

                            </div>

                            <div style="display: flex;">
                                

                                <div class="amenities-icon">
                                    <div class="item"><img src="<?=base_url('assets/img/');?>temple.png" alt="">
                                        <p><b>Temple</b></p>
                                    </div>
                                   
                                    
                                </div>

                                <div class="amenities-icon">
                                    
                                    <div class="item"><img src="<?=base_url('assets/img/');?>wifi-router.png" alt="">
                                        <p><b>Broad Band</b></p>
                                    </div>
                                    
                                </div>
                            </div>

                            </div>

                           
                        </div>
                        <!-- End features area  -->


                        <!-- gallery area starts -->
                        <h4 class="s-property-title">Gallery</h4>
                        <div class="demo-gallery">
                            <ul id="lightgallery" class="list-unstyled row"></ul>
                        </div>
                        <!-- gallery area ends -->

                        <div class="section property-video" id="property_video">
                            <h4 class="s-property-title">Property Video</h4>
                            <div class="video-thumb">
                                <a class="video-popup" href="yout" title="Virtual Tour">
                                    <!-- <img src="<?=base_url();?>assets/img/property-video.jpg" class="img-responsive wp-post-image" alt="Exterior">             -->
                                    <iframe class="img-responsive" id="property_video_link" src="" style="width:90%; height: 300px;"
                                        alt="Exterior"></iframe>
                                </a>
                            </div>
                        </div>
                        <!-- End video area  -->



                        <!-- <div class="section property-share">
                            <h4 class="s-property-title"><strong>Share</strong></h4>

                            <div class="roperty-social">
                                <ul>
                                    <li><a title="Share this on dribbble " href="#"><img
                                                src="assets/img/social_big/dribbble_grey.png"></a></li>
                                    <li><a title="Share this on facebok " href="#"><img
                                                src="assets/img/social_big/facebook_grey.png"></a></li>
                                    <li><a title="Share this on delicious " href="#"><img
                                                src="assets/img/social_big/delicious_grey.png"></a></li>
                                    <li><a title="Share this on tumblr " href="#"><img
                                                src="assets/img/social_big/tumblr_grey.png"></a></li>
                                    <li><a title="Share this on digg " href="#"><img
                                                src="assets/img/social_big/digg_grey.png"></a></li>
                                    <li><a title="Share this on twitter " href="#"><img
                                                src="assets/img/social_big/twitter_grey.png"></a></li>
                                    <li><a title="Share this on linkedin " href="#"><img
                                                src="assets/img/social_big/linkedin_grey.png"></a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- End sharing area  -->

                    </div>
                </div>


                <div class="col-md-4 p0">
                    <aside class="sidebar sidebar-property blog-asside-right">
                        <div class="dealer-widget">
                            <div class="dealer-content">
                                <div class="inner-wrapper">

                                    <div class="clear">
                                        <div class="col-xs-4 col-sm-4 dealer-face" style="height:80px; width:80px; padding:0px;">
                                            <a href="">
                                                <img src=""  id="user_img" class="img-circle" style="height:100%; object-fit: cover;">
                                            </a>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 ">
                                            <h3 class="dealer-name">
                                                <a href="" id="agent_name" style="color:rgb(255, 255, 255);"></a>
                                                <h5 style="color:#d8bf65;"><strong>918617897584</strong></h5>

                                                <span class="dealer-social-media">
                                                    <a class="twitter" target="_blank" href="" id="agent_twitter_link"></a>
                                                    <a class="facebook" target="_blank" href="" id="agent_facebook_link"></a>
                                                   

                                                </span>
                                                <div>
                                                    <button  id="contact-owner" style="background-color: #fdd543;height: 30px;font-size:12px;width:70%;border-radius: 2px;color:#272727;font-weight: bold;margin:auto;margin-top: 15px;">
                                                        Contact Owner
                                                    </button>
                                                </div>
                                            </h3>


                                        </div>
                                    </div>

                                    <div class="clear" id="contact-details">
                                        <ul class="dealer-contacts">
                                            <li><b>Please share your contact</b></li>
                                            <br>
                                            <div>
                                                <div class="form-group">
                                                    <label>Name<small>(required)</small></label>
                                                    <input type="text" class="form-control"  id="owner_name" >

                                                </div>
                                                <div class="form-group">
                                                    <label>phone<small>(required)</small></label>
                                                    <input type="text" class="form-control" id="owner_phone">

                                                </div>
                                                <div class="form-group">
                                                    <label>Email<small>(required)</small></label>
                                                    <input type="text"class="form-control" id="owner_email">

                                                </div>

                                            </div>
                                            <p><input type="checkbox" id="owner_checkbox"> I agree to be contacted my Shareshell and other
                                                agents via SMS,call,Email etc.</p>
                                            <button type="submit" class="btn btn-primary text-center" id="owner_submit_detail"><i
                                                    class="fa fa-envelope-o"></i> Send Details</button>
                                    </div>



                                </div>
                            </div>
                        </div>

                        

                        <div class="panel panel-default sidebar-menu">
                           <!-- <div class="panel-heading">
                                <h3 class="panel-title">Ads her </h3>
                            </div>-->
                            <div class="panel-body recent-property-widget" >
                                <img src="<?=base_url("assets/img/");?>171.-Saving-File.svg" style="height: 180px;margin: 0px 55px;">

                                <div class="save" id="save_property_btn">
                                    <button style="background-color: #ffffff;height: 40px;width:70%;border-radius: 5px;color:#1f1f1f;font-weight: bold;border: 1px solid #8d8d8d;margin:auto;margin-left: 40px;margin-top: 15px;">
                                        Save Property
                                    </button>
                                </div>
                               
                               

                               
                            </div>

                            
                        </div>


                    </aside>
                </div>
            </div>

        </div>
    </div>


<!-- old ui starts -->
    <!-- <div class="page-head">
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title" id="property_name" style="margin-left:15px;;">Property Name</h1>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End page header -->

    <!-- property area -->
    

    <?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import'); 

    // $property_no=$this->input->get('id');

    // if(empty($property_no)){
    //     header("Location:".base_url('properties'));
    // }
?>
    </div>
    <script type="text/javascript" src="<?=base_url();?>/assets/js/lightslider.min.js"></script>

    <!-- gallery js -->

    <script src="<?=base_url('assets/js');?>/picturefill.min.js"></script>
    <script src="<?=base_url('assets/js');?>/lightgallery.min.js?v=1.3"></script>
    <script src="<?=base_url('assets/js');?>/lg-pager.min.js"></script>
    <script src="<?=base_url('assets/js');?>/lg-autoplay.min.js"></script>
    <script src="<?=base_url('assets/js');?>/lg-fullscreen.min.js"></script>
    <script src="<?=base_url('assets/js');?>/lg-zoom.min.js"></script>
    <script src="<?=base_url('assets/js');?>/lg-hash.min.js"></script>
    <!-- <script src="<?=base_url('assets/js');?>/lg-share.min.js"></script> -->
    <script src="<?=base_url('assets');?>/js/lg-rotate.min.js"></script>


    <!-- end gallery js -->

    <script>

        // window.history.replaceState(null, null, "https://localhost/git_shareshell/shareshell/propertys");

        var key = "<?php echo $this->security->get_csrf_hash(); ?>";
        var user_id="<?=$user_id;?>";

        var property_by = "";
        var listed_by_id="";
        var property_main_img="";

        function ammeneties_addon(value){
            var ret="";
            
            switch(String(value)){
                case "fire":
                    ret+='<div class="item"><img src="<?=base_url('assets/img/');?>fire-extinguisher.png" alt="">';
                    ret+='<p><b>fire extinguisher</b></p></div>';
                    break;
                case "exit":
                    ret+='<div class="item"><img src="<?=base_url('assets/img/');?>exit.png" alt="">';
                    ret+='<p><b>Emergency Exit</b></p></div>';
                    break;
                case "laundry":
                    ret+='<div class="item"><img src="<?=base_url('assets/img/');?>laundry.png">';
                    ret+='<p><b>Laundry</b></p></div>';
                    break;
                case "mess":
                    ret+='<div class="item filter-ameneties" data-filter_type="ameneties" data-value="mess"><img src="<?=base_url('assets/img/');?>restaurant (1).png" alt="">';
                    ret+='<p><b>Mess</b></p></div>';
                    break;
                case "club":
                    ret+='<div class="item filter-ameneties" data-filter_type="ameneties" data-value="club"><img src="<?=base_url('assets/img/');?>club.png" alt="">';
                    ret+='<p><b>Club House</b></p></div>';
                    break;
                case "electricity":
                    ret+='<div class="item filter-ameneties" data-filter_type="ameneties" data-value="electricity"><img src="<?=base_url('assets/img/');?>power-supply.png" alt="">';
                    ret+='<p><b>24 hr Power Supply</b></p>';
                    ret+='</div>';
                    break;
                case "staff":
                    ret+='<div class="item filter-ameneties" data-filter_type="ameneties" data-value="staff"><img src="<?=base_url('assets/img/');?>employees.png" alt=""> <p><b>Maintainance Staff</b></p></div>';
                    break;
                case "garden":
                    ret+='<div class="item filter-ameneties" data-filter_type="ameneties" data-value="garden"><img src="<?=base_url('assets/img/');?>gardening.png" alt=""> <p><b>Garden</b></p></div>';
                    break;
                case "parking":
                    ret+='<div class="item filter-ameneties" data-filter_type="ameneties" data-value="parking"><img src="<?=base_url('assets/img/');?>parking.png" alt=""> <p><b>Parking</b></p></div>';
                    break;
                case "ground":
                    ret+='<div class="item filter-ameneties" data-filter_type="ameneties" data-value="ground"><img src="<?=base_url('assets/img/');?>slider.png" alt=""> <p><b>Play Ground</b></p></div>';
                    break;
                case "pool":
                    ret+='<div class="item filter-ameneties" data-filter_type="ameneties" data-value="pool"><img src="<?=base_url('assets/img/');?>pool.png" alt=""> <p><b>Swimming Pool</b></p></div>';
                    break;
                case "gym":
                    ret+='<div class="item filter-ameneties" data-filter_type="ameneties" data-value="gym"><img src="<?=base_url('assets/img/');?>dumbbell (1).png" alt=""> <p><b>Gym</b></p></div>';
                    break;
                case "wifi":
                    ret+='<div class="item filter-ameneties" data-filter_type="ameneties" data-value="wifi"><img src="<?=base_url('assets/img/');?>wifi-signal.png" alt=""> <p><b>Wifi</b></p></div>';
                    break;
                case "attach_kitchen":
                    ret+='<div class="item filter-ameneties" data-filter_type="ameneties" data-value="attach_kitchen"><img src="<?=base_url('assets/img/');?>kitchen.png" alt=""> <p><b>Attach Kitchen</b></p></div>';
                    break;
                case "attach_bathroom":
                    ret+='<div class="item filter-ameneties" data-filter_type="ameneties" data-value="attach_bathroom"><img src="<?=base_url('assets/img/');?>toilet.png" alt=""> <p><b>Attached Washroom</b></p></div>';
                    break;
            }
            return ret;
        }


        $.ajax({
            url: "<?=base_url('main_helper/get_property_data');?>",
            type: "POST",
            async: false,
            data: {
                "<?php echo $this->security->get_csrf_token_name();?>": key,
                id: "<?= $property_no;?>",
                user_id:user_id,

            },
            dataType: "json",
            success: function (data) {
                key = data.key;

                console.log(data); 
                // property_by = data.data.listed_by;

                //start
                // thumb_img=data.data.main_image.split('.').slice(0, -1).join('.')+"_thumb."+data.data.main_image.substr(data.data.main_image.lastIndexOf('.') + 1);

                property_main_img=data.data.main_image;
                listed_by_id=data.data.listed_by;

                $("#property_name").html(data.data.name);
                $("#main_img_thumb").attr('data-thumb', '<?=base_url("utility/main_image/");?>' + get_thumb_name(data.data.main_image));
                $("#main_img_slider").attr('src', '<?=base_url("utility/main_image/");?>' + data.data.main_image);
                $("#property_city").html( data.data.city);
                $("#property_price").html("&#8377 " + data.data.price);
                $("#property_description").html(data.data.description);
                $("#property_address").html(data.data.address+", "+data.data.city);
                $("#property_landmark").html(data.data.landmark);
                $("#property_addon").html("<h3>" + data.data.addon.slice(0, -1).toUpperCase() + "</h3>");

                // $("#meta-title").html(data.data.name+" - "+data.data.city);
                // $("#meta-keyword").attr("content",data.data.name+", "+data.data.city+", "+data.data.addon);
                // $("#meta-description").attr("content",limit_words(80,data.data.description)+" - "+data.data.address+" - "+data.data.city+" - ");

                var property_slug="<?=$property_slug;?>"
                var property_slug_js=slug_js(data.data.name);
                if(property_slug!=property_slug_js){
                    window.history.replaceState(null, null, "<?=base_url('property/').$property_no;?>/"+property_slug_js);
                }

                var video_play_link = "";
            
                if (data.data.add_video != "") {
                    
                    if (data.data.add_video.search('embed') == -1) {
                        video_play_link = data.data.add_video.replace('/watch?v=', /embed/);
                    } else {
                        video_play_link = data.data.add_video;
                    }
                } else {
                    $("#property_video").css("display", "none");
                }
                

                if(data.data.area!=""){
                    $("#property_area").html(data.data.area+" sq/ft");
                }else{
                    $("#property_area").html("N/A");
                }


                if(data.data.negoitable==1){
                    $("#property_price_negoitable").html("Yes");
                }else{
                    $("#property_price_negoitable").html("No");
                }

                if(data.data.sharing_with==""){
                    $("#property_sharing").html("None");
                }else{
                    $("#property_sharing").html(data.data.sharing_with+" Person");
                }

                if(data.data.food=="veg"){
                    $("#property_food_type").html("No");
                }else{
                    $("#property_food_type").html("Yes");
                }

                var ammeneties_addon_array = data.data.addon.split(",");
                var ammeneties_html="";
                $(ammeneties_addon_array).each(function(){
                    ammeneties_html+=ammeneties_addon(this);
                    // console.log(this);
                });
                $("#properties_ameneties").html(ammeneties_html);
                // console.log(ammeneties_html);
                // console.log(video_play_link);
                $("#lister_info").html(capital_first(data.data.lister_info));
                $("#property_video_link").attr('src', video_play_link); 
                $(".property_status").html(data.data.status.toUpperCase());
                $(".property_bed").html(data.data.min_bed);
                $("#property_bathroom").html(data.data.min_bathroom);
                $("#property_balcony").html(data.data.min_balcony);
                $("#property_facing").html(data.data.facing);
                $("#property_floor").html(data.data.floor_no);
                $("#property_prefered").html(data.data.prefered);
                
                $("#property_furnish").html(data.data.furnish);
                $(".property_type").html(data.data.type.toUpperCase());
                $("#property_avail").html(data.data.avail.toUpperCase());
                $("#lightgallery").append('<li class="col-xs-6 col-sm-4 col-md-3 col-4"  data-responsive="" id="main_img_slide" data-src="<?=base_url('utility/main_image');?>/' + data.data.main_image + '" ><a href=""><img src="<?=base_url('utility/main_image');?>/' + get_thumb_name(data.data.main_image) + '" class="img-responsive" id="main_img_slide_thumb" alt="Thumb-1" style="object-fit:cover;"></a></li>');

                var image_insert = "";
                var lightgallery_data = "";
                $.each(data.image, function () {
                    // console.log(this.image);
                    image_insert += '<li data-thumb="<?=base_url();?>utility/main_image/'+get_thumb_name(this.image)+'" class="thumb_class">';
                    image_insert += '<img src="<?=base_url();?>utility/main_image/'+this.image+'"  class="thumb_class_src"/>';
                    image_insert += '</li>';
                    lightgallery_data += '<li class="col-xs-6 col-sm-4 col-md-3 col-4"  data-responsive="" id="main_img_slide" data-src="<?=base_url('utility/main_image');?>/' + this.image + '" ><a href=""><img src="<?=base_url('utility/main_image');?>/' + get_thumb_name(this.image) + '" class="img-responsive" id="main_img_slide_thumb" alt="Thumb-1" style="object-fit:cover;"></a></li>';
                });
                $("#image-gallery").append(image_insert);
                $("#lightgallery").append(lightgallery_data);


                // favourite property
                if(data.favourite_status){
                    $(".add-to-fav").css('color',"#FDC600");
                $(".add-to-fav").css('border-color',"#FDC600");
                $(".add-to-fav").css('box-shadow',"0px 0px 20px #FDC600 inset");
                }

                if(!user_id){
                    $("#save_property_btn").children().html("Login to Save");
                }else if(data.favourite_status){
                    $("#save_property_btn").children().html("Remove Choice");
                }
                

                //listed by data


                $("#agent_name").html(data.listed_by.first_name + ' ' + data.listed_by.last_name);
                // $("#agent_name").attr("href","<?=base_url();?>")
                $("#agent_username").html(data.listed_by.username);
                $("#agent_address").html(data.listed_by.address);
                $("#agent_bio").html(data.listed_by.user_bio);
                if (data.listed_by.twitter != "") {
                    $("#agent_twitter_link").html('<i class="fa fa-twitter-square fa-1x" id="agent_twitter"style="margin-right: 0px;"></i>');
                }
                $("#agent_twitter_link").attr("href", data.listed_by.twitter);
                if (data.listed_by.facebook != "") {
                    $("#agent_facebook_link").html('<i class="fa fa-facebook-official fa-1x" id="agent_facebook"></i>');
                }
                $("#agent_facebook_link").attr("href", data.listed_by.facebook);

                if (data.listed_by.image != "") {
                    $("#user_img").attr("src", "<?=base_url('utility/user_image/');?>" + get_thumb_name(data.listed_by.image));
                } else {
                    $("#user_img").attr("src", '<?=base_url('assets/img/');?>' + user_image_male_female(data.listed_by['gender']));
                }
                property_by=data.listed_by.email;


            },
            error: function (data) {
                console.log(data);
            }
        });

    function add_to_favo(){
        $.ajax({
            url: "<?=base_url('main_helper/add_to_favorite');?>",
            type: "POST",
            async: false,
            data: {
                "<?php echo $this->security->get_csrf_token_name();?>": key, 
                user_id:user_id,
                property_id:<?= $property_no;?>
            },
            dataType: "json",
            success: function (data) {
                key=data.key;
                
                if(data.data){
                    // console.log(data.work);
                    if(data.work=="added"){
                        $(".add-to-fav").css('color',"#FDC600");
                        $(".add-to-fav").css('border-color',"#FDC600");
                        $(".add-to-fav").css('box-shadow',"0px 0px 20px #FDC600 inset");

                        $("#save_property_btn").children().html("Remove Choice");
                    }else if(data.work=="removed"){
                        // console.log(data);
                        $(".add-to-fav").css('color',"#FFF");
                        $(".add-to-fav").css('border-color',"#FFF");
                        $(".add-to-fav").css('box-shadow',"0px 0px 20px grey inset");

                        $("#save_property_btn").children().html("Save Property");
                    }
                }
            },
            error: function(data){
                console.log(data);
            }
        });
    }

    $("#add-to-fav").click(function(){
        if(!user_id){
            location.href="<?=base_url('main/log_user');?>";
            return;
        }
        add_to_favo();
    });


$("#owner_submit_detail").click(function(){
    if($("#owner_checkbox").is(":checked")){
        if($("#owner_name").val()!=""&&$("#owner_phone").val()!=""&&$("#owner_email").val()!=""){
            $.ajax({
            url: "<?=base_url('main_helper/contact_owner_email_send');?>",
            type: "POST",
            async: false,
            data: {
                "<?php echo $this->security->get_csrf_token_name();?>": key,
                name:$("#owner_name").val(),
                phone:$("#owner_phone").val(),
                email:$("#owner_email").val(),
                property_id:"<?= $property_no;?>",
                property_img:'<?=base_url("utility/main_image/");?>' + property_main_img,
                owner_email:property_by
            },
            dataType: "json",
            success: function (data) {
                key=data.key;
                console.log(data);
                if(data.data){
                    $('#contact-owner').off('click');
                    $("#contact-owner").html("Email is already sent.");
                    $("#owner_name").val("");
                    $("owner_phone").val("");
                    $("#owner_email").val("");
                    $("#contact-details").slideUp();
                    // $('#myimage').off('click');
                    alert("email is sent, owner will contact you shortly");
                }

            },
            error: function (data) {
                console.log(data);
            }
        });
        }else{
            alert("all data is not filled");
        }
    }else{
        alert("Terms and conditions not Agreed");
    }
});
        
$("#contact_scroll").click(function() {
    $("#contact-owner").click();
    $('html,body').animate({
        scrollTop: $("#contact-owner").offset().top-100},
        1000);
});



$("#save_property_btn").click(function() {
    if(!user_id){
        location.href="<?=base_url('main/log_user');?>";
    }else{
        add_to_favo();
    }
});




        lightGallery(document.getElementById('lightgallery'));
        $('#image-gallery').lightSlider({
            gallery: true,
            item: 1,
            thumbItem: 9,
            slideMargin: 0,
            speed: 1000,
            pause:4000,
            auto: true,
            loop: true,
            onSliderLoad: function () {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });


        $("#contact-owner").click(function(){
            $("#contact-details").toggle(300);
        });


    </script>

    <script>
        $(document).ready(function(){
  $("#heart").click(function(){
    if($("#heart").hasClass("liked")){
      $("#heart").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
      $("#heart").removeClass("liked");
    }else{
      $("#heart").html('<i class="fa fa-heart" aria-hidden="true"></i>');
      $("#heart").addClass("liked");
    }
  });
});
    </script>
</body>

</html> 