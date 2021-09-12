<!DOCTYPE html>

<html class="no-js" lang = "en">
    <head>
        <link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">
        <link rel="apple-touch-icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"3>
        <title>Houses for rent | Shareshell</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y7VQ4L5MXN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y7VQ4L5MXN');
</script>
        <meta name="description" content="Eagerly searching for best houses for rent in your city? shareshell is the best platform to provide you the best place for residence.">
        <meta name="author" content="ShareShell">
        <meta name="keyword" content="Houses for rent, shareshell">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<a href="https://icons8.com/icon/16713/whatsapp"></a>

<meta name="google-site-verification" content="s2F5QYnA-2Rek_UN-oqDnio-8psnvB5xLEjHezaVvaY" />

<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://shareshell.in">
<meta property="og:type" content="website">
<meta property="og:title" content="ShareShell | Home">
<meta property="og:description" content="Eagerly searching for best houses for rent in your city? shareshell is the best platform to provide you the best place for residence.">
<meta property="fb:app_id" content="235531264523889">
<meta property="og:image" content="<?=base_url('assets/img/logo-sm.jpg');?>">

<!-- css Link -->

<link rel="stylesheet" href="<?=base_url();?>assets/css/normalize.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css">
<link href="<?=base_url();?>assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="<?=base_url();?>assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
<!-- <link href="<?=base_url();?>assets/css/animate.css" rel="stylesheet" media="screen"> -->
<link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/owl.carousel.css">  
<link rel="stylesheet" href="<?=base_url();?>assets/css/owl.theme.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css?v=1.2">
<link rel="stylesheet" href="<?=base_url();?>assets/css/responsive.css?v=18768">


<link rel="stylesheet" href="<?=base_url();?>assets/css/home_special.css?v=1">



<!-- css link ends -->


<?php

    $this->load->view('website/header');
    
?> 

<style>
    @media only screen and (max-width: 400px) {
        .bt123 {
            flex: none;
            display: none;
        }
        .asks-first-info {
    color: #454545;
    margin: 5px;
}

    }




    .slider-heading {
        margin: auto;
        width: 100%;
        position: absolute;
        margin-top: 250px;

    }
    .slider-heading2 {
        margin: auto;
        width: 100%;
        position: absolute;
        margin-top: 250px;

    }

    .slider-heading h1 {
        color: rgb(61, 61, 61);
        font-weight: bold;
        font-size: 40px;
        margin: auto;
        width: 100%;
        text-align: center;
        justify-content: center;
        position: absolute;
        z-index: 3;

    }

    .slider-heading p {
        color: rgb(61, 61, 61);
        font-weight: 500;
        font-size: 25px;
        padding-top: 1.9em;
        margin: auto;
        width: 100%;
        text-align: center;
        justify-content: center;
        position: absolute;
        z-index: 3;

    }

    .item #mobile-img {
        display: none;
    }
    .outer-searchbox ul li{

        margin-right: 30px;
        color: white;
        font-size: 20px;
        cursor: pointer;
    }
    .outer-searchbox ul li:hover{
        border-bottom: 2px solid white;
    }
    .list{
        display: none;
    }



    .blog-images {

width: 25%;
padding: 10px;
text-align: center;


}

.blog-images p {
background-color: rgb(58, 58, 58);
padding: 5px;
color: white;
border-radius: 0 0 7px 7px;

}

/* Style the images inside the grid */
.blog-images img {

cursor: pointer;
height: 14em;
border-radius: 7px 7px 0 0;
object-fit: cover;

width: 100%;




}

.blog-images img:hover {
opacity: 0.6;

z-index: 110;
}




.blog-heading {
margin-left: auto;
margin-right: auto;
width: 88% !important;


padding: 12px;
display: flex;
margin-bottom: 0px;

}
.ai-searching{
    background-color: rgb(240, 240, 240) !important;
    display: none;
    
    
}
/* #input:hover + .ai-searching{
    display: block;

    
    
} */
.ai-searching input{
    background-color: rgb(240, 240, 240)!important;
    

}

.search_category{
    z-index: 10;
}



    



     @media only screen and (max-width: 600px){

        .ai-searching{
    width: 200px !important;
    margin-left: -45px !important;
}


        #computer-img {
            display: none;
        }


        .owl-pagination {
            display: none !important;
        }

        .slider-heading h1 {
            color: rgb(61, 61, 61);
            font-weight: bold;
            font-size: 20px;
            margin: auto;
            width: 100%;
            text-align: center;
            justify-content: center;
            position: absolute;
            z-index: 3;

        }

        .slider-heading p {
            color: rgb(61, 61, 61);
            font-weight: 500;
            font-size: 12px;
            padding-top: 4em !important;
            margin: auto;
            width: 100%;
            text-align: center;
            justify-content: center;
            position: absolute;
            z-index: 3;

        }

        .slider-heading {
            margin: auto;
            width: 100%;
            position: absolute;
            margin-top: 75px !important;

        }
        #search{
            display: block !important;
        }
        .search_submit{
            display: none !important;
        }
        .outer-searchbox{
            position: relative !important;
            margin: auto;
            width: 95% !important;
            top: -1em !important;
            height: 113px !important;
        }
        .outer-searchbox ul {

            margin-left: -22px !important;
            top: 15px !important;
        }
        .outer-searchbox ul li{
            font-size: 15px;
        }
        .inner-box{
            position: absolute;
            margin-top: -24px !important;
            padding: 10px !important;
            width: 108% !important;
        }
        #search-div{
            width: 180px !important;
        }
        #search-div img{
           margin: 9px 17px;
        }
        #pointer{
            width: 160px !important;
        }
        .item img{
            height: 272px !important;
        }
        #pointer{
            height: 45px !important;
        }
        #input{
            height: 35px !important;
        }
        #search-div{
            height: 45px !important;
        }
        #pointer img{
            height: 51px !important;
        }
        .list{
            display: block;
            background-color: rgb(233, 233, 233);
            height: 10em;
            margin: auto;
            width: 88%;
            margin-top: 1em;
            border-radius: 9px;
            
        }
        .list p {
            width: 180px !important;
            padding-top: 20px;
            padding-left: 20px;
            color: rgb(27, 27, 27);
            
        }
        .list button{
            font-size:11px;
            background-color:#00a79d;
            position: absolute;
            margin: auto;
            width: 40%;
            margin-left: 130px;
            margin-top: -25px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }

        #subheading {
            margin-top: 0px;
        }

        .blog-images {
            margin: auto;
            width: 100% !important;
        }
        .blog-heading {
            flex-direction: row !important;
            overflow-x: auto !important;
            width: 88% !important;
            
        }
        .blog-heading::-webkit-scrollbar{
            width: 0px;
        }
        .blog-images p {
            background-color: rgb(58, 58, 58);
            padding: 5px;
            color: white;
            width: 15em;

        }
        h3{
            font-size: 17px;
        }
        .sub-heading{
            font-size:30px !important;
        }
}

</style>


        <div class="slider-area" style="z-index:-1;">
            <div class="slider">
            <div id="bg-slider" class="owl-carousel owl-theme" style="transition: none;">
 
                
                <!-- <div class="item"><img src="<?=base_url();?>assets/img/slide1/slider-image-1.jpg" alt="Shareshell_choice"></div>
                <div class="item"><img src="<?=base_url();?>assets/img/slide1/slider-image-2.jpg" alt="Shareshell_homepage"></div>
                <div class="item"><img src="assets/img/slide1/slider-image-3.jpg" alt="Shareshell_affordable_luxury_renting"></div> -->
                
            <div class="item" >
                <div class="slider-heading">
                   <h1>Find your Dream Home in your favorite location</h1>
                   <p>Relaxedly end your search</p>
                </div>
                   <img style="height:600px;object-fit: cover;" src="<?=base_url();?>assets/images/ShareShell Home Page Image 1332x540Pix.svg" alt="The Last of us">
            </div>
                
                   <div class="item">
                   <div class="slider-heading">
                   <h1>ONLY FOR <span style="color:white;font-size:57px;" class="sub-heading">BHUBANESWARIAN'S</span></h1><br>
                   <p>Relaxedly end your search</p>
                </div>
                       <img style="height:600px;object-fit: cover;" src="<?=base_url();?>assets/images/dhauligiri.jpg" alt="The Last of us">
                    </div>

            </div>
            </div>
            </div>
            <!-- <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2 style="text-shadow:1px 1px white;font-family: 'Open Sans', sans-serif;font-weight:bold;">property Searching Just Got So Easy</h2>
                        <h5 style="color: rgb(252, 252, 252); text-shadow: 1px 1px 3px grey;">“Now, one thing I tell everyone is learn about real estate.
                        Repeat after me: real estate provides the highest returns, the greatest values and the least
                        risk. ”</h5>

                    </div>
                </div>
            </div> -->
            <form id="search_form"> 
            <div class="outer-searchbox" style=" z-index: 11111; position: absolute; margin: auto;
    left: 0;
    right: 0;
    top: 35em;
    width: 60%;
    border-radius: 10px;
    background-color: rgba(22, 22, 22, 0.7);
    height: 170px;">

    <ul style="position: absolute; display: flex;list-style: none;margin-left: 30px;top: 27px;" >
        <li class="search_category">Rent</li>
        <li class="search_category">PG</li>
        <li class="search_category">Hostel</li>
        <li class="search_category">Plot</li>
    </ul>

        <div class="inner-box" style="height: 100%;display: flex;width: 100%;margin: auto;justify-content: center;">
            <div id="pointer" style="background-color: white;height: 50px;width: 125px;margin: 65px 0;border-radius: 10px 0 0 10px;">
                <img src="<?=base_url();?>assets/img/pointer.svg" alt="" style="height: 60px;text-align: center;width: 100%;opacity: 0.7;">
            </div>
            <div id="input" style="background-color: white;height: 40px;width: 500px;margin: 65px 3px;">
            <input type="search" placeholder="search for hpuse,plot,pg" style="border-radius: 0;" id="search_box_home">
            </div>

            <div class="ai-searching" style="background-color: rgb(190, 190, 190);border-radius: 0 0 7px 7px;width: 530px;position: absolute;margin-top: 115px;margin-left: -5px;padding: 10px;">
                <input id="ai-search" type="text" placeholder="ai searching">
                <input id="ai-search" type="text" placeholder="ai searching">
                <input id="ai-search" type="text" placeholder="ai searching">
                
            </div>
            <div id="search-div" style="background-color: white;height: 50px;width: 100px;margin: 65px 30px;background-color: #00a79d;border-radius: 0 10px 10px 0;">

                <img id="search" src="<?=base_url('assets/img/');?>search.png" alt="search" style="display: none;height: 28px;width: auto;">
                <input type="submit" value="Search" class="search_submit"
                    style="background-color: #00a79d;width: 125px;font-weight: bold;color: white;border-radius: 0 10px 10px 0;">

                    
            </div>
        </div>



    </div>
</form>

    <div class="list" >
        <div style="display: flex;">
            <div><img src="<?=base_url('assets/img/');?>undraw_Note_list_re_r4u9.svg" alt="" style="height: 94px;margin-top: 25px;margin-left: 14px;"></div>
        <div><p><strong>List with us,receive genuine verified leads.</strong></p></div>
        </div>
        <button onclick="location.href ='<?=base_url('main/submit_property');?>'">Post a property</button>
       
       
       
    </div>
    
    <div style="text-align: center;">

<h3 style="color: rgb(20, 20, 20);"><b>Most valuable blogs on Real Estate</b></h3>
<!-- <div class="blog-heading">
    <div class="blog-images">
        <img src="<?=base_url('assets/images/blogs/');?>home-buying.jpg" alt="home-buying.jpg">

        <p><b>HOME BUYING/INVESTING</b></p>


    </div>

    <div class="blog-images">
        <img id="subheading" src="<?=base_url('assets/images/blogs/');?>decor.jfif" alt="Snow">

        <p><b>HOME DECOR</b></p>



    </div>
    <div class="blog-images">
        <img id="subheading" src="<?=base_url('assets/images/blogs/');?>home-maintenancee.jpg" alt="Mountains">

        <p><b>HOME MAINTAINANCE</b></p>


    </div>
    <div class="blog-images">
        <img id="subheading" src="<?=base_url('assets/images/blogs/');?>konstantin-evdokimov-UUYkTnQkn9c-unsplash.jpg" alt="Lights">

        <p><b>HOME LOAN</b></p>


    </div>
    <div class="blog-images">
        <img id="subheading" src="<?=base_url('assets/images/blogs/');?>TREND.png" alt="Lights">

        <p><b>TRENDING</b></p>


    </div>
</div> -->
<div class="blog-heading">
            <div class="blog-images">
                <img src="<?=base_url('assets/images/blogs/');?>home-buying.jpg" alt="home-buying.jpg" style="">

                <p><b>HOME BUYING/INVESTING</b></p>


            </div>

            <div class="blog-images">
                <img id="subheading" src="<?=base_url('assets/images/blogs/');?>decor.jfif" alt="Snow">

                <p><b>HOME DECOR</b></p>



            </div>
            <div class="blog-images">
                <img id="subheading" src="<?=base_url('assets/images/blogs/');?>home-maintenancee.jpg" alt="Mountains">

                <p><b>HOME MAINTAINANCE</b></p>


            </div>
            <div class="blog-images">
                <img id="subheading" src="<?=base_url('assets/images/blogs/');?>konstantin-evdokimov-UUYkTnQkn9c-unsplash.jpg" alt="Lights">

                <p><b>HOME LOAN</b></p>


            </div>
            
            <div class="blog-images">
            <img id="subheading" src="<?=base_url('assets/images/blogs/');?>TREND.jpg" alt="Lights">

            <p><b>TRENDING</b></p>


        </div>

        </div>
</div>

        <!-- <div class="home-lager-shearch" style="background-color: rgb(252, 252, 252); padding-top: 25px; margin-top: -125px; opacity:1;">
            <div class="container">
                <div class="col-md-12 large-search"> 
                    <div class="search-form wow pulse">
                        

                         -->
                       

                    


<!-- <form action="" class=" form-inline" id="search_form"> -->
<!--<div class="col-md-12" style="list-style: none;display: flex;padding: 10px;">
    <li
        style="margin-right: 28px;margin-left: 15px;cursor: pointer;border-bottom: 3px solid rgb(241, 240, 240);">
        <a>R E N T</a></li>
    <li style="margin-right: 28px;cursor: pointer;border-bottom: 3px solid rgb(241, 240, 240);">
        <a>B U Y</a></li>
    <li style="margin-right: 28px;cursor: pointer;border-bottom: 3px solid rgb(241, 240, 240);">
        <a>P L O T</a></li>

</div>-->

<!-- 
<div class="col-md-12">
<div ><h3 class="text_above_search" style="font-weight:bold;">Start Searching Property ..  </h3></div>


  <div class="row">
      <div class="col col-md-10">
        <input class="search" id="search_box_home" type="text" placeholder="Search property on your desired location,name,....." style="border: 1px solid grey;border-radius: 10px;height:3em;background-color: rgb(248, 245, 245);align-items: center;align-content: center;">
      </div>
      <div class="col"><center>
         <button style="border-radius: 10px;border: 2px solid rgb(255, 255, 255);font-size: 15px;width:8em;" class='  btn-primary ' id="search">SEARCH</button>
         </center>
      </div>
  </div>
    <div class="small" style="align-content: center;align-items: center;display:flex;">
        <span>
        </span>
        </div>
      </div> -->
      <!-- </form> -->

    <!-- </div>
</div>
</div>
</div> -->
                </div>
            </div>
        </div>


        <!-- property area -->
        <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2> <b> Top submitted property</b></h2>
                        <p>Have a glance at some of our best properties. These represent our masterwork pattern and ideas, we give preference to.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="proerty-th" id="list-type">
                        
                    <a href="<?=base_url('properties');?>" >
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                
                                <div class="item-tree-icon" id="more_property_icon">
                                    <i class="fa fa-th"></i>
                                </div>
                                
                                <div class="more-entry overflow">
                                    <h5>CAN'T DECIDE ?</h5>
                                    <h5 class="tree-sub-ttl">Show all properties</h5>
                                    <button class="btn border-btn more-black" value="All properties"></button>
                                </div>
                            </div>
                        </div>
                    </a>



                    </div>
                </div>
            </div>
        </div>

        <!--Welcome area -->
        <div class="Welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 Welcome-entry  col-sm-12">
                        <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
                            <div class="welcome_text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                                        <!-- /.feature title -->
                                        <h1>SHARESHELL</h1>
                                        <!-- <h2>SHARESHELL</h2> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div  class="welcome_services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-xs-6 m-padding" id="center_card_show_properties">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-home pe-4x"></i>
                                            </div>
                                            <h3>Listed Properties</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-users pe-4x"></i>
                                            </div>
                                            <h3>Our Clients</h3>
                                        </div>
                                    </div>


                                    <div class="col-xs-12 text-center">
                                        <i class="welcome-circle"></i>
                                    </div>

                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-notebook pe-4x"></i>
                                            </div>
                                            <h3>User Manual</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding" id="center_card_contact">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-help2 pe-4x"></i>
                                            </div>
                                            <h3>Any help </h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--TESTIMONIALS 
        <div class="testimonial-area recent-property" style="background-color: #FCFCFC; padding-bottom: 15px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        
                        <h2>Our Customers Said  </h2> 
                    </div>
                </div>

                <div class="row">
                    <div class="row testimonial">
                        <div class="col-md-12">
                            <div id="testimonial-slider">
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                                    </div>
                                    <div class="client-face wow swing" data-wow-delay=".9s"> 
                                        <img src="<?=base_url();?>assets/img/client-face1.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                                    </div>
                                    <div class="client-face wow swing" data-wow-delay=".9s">
                                        <img src="<?=base_url();?>assets/img/client-face2.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                                    </div>
                                    <div class="client-face wow swing" data-wow-delay=".9s">
                                        <img src="<?=base_url();?>assets/img/client-face1.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                                    </div>
                                    <div class="client-face wow swing" data-wow-delay=".9s">
                                        <img src="<?=base_url();?>assets/img/client-face2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        -->

        <!-- Count area 
        <div class="count-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        
                        <h2>You can trust Us </h2> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-users"></span>
                                    </div>
                                    <div class="chart" data-percent="5000">
                                        <h2 class="percent" id="counter">0</h2>
                                        <h5>HAPPY CUSTOMER </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-home"></span>
                                    </div>
                                    <div class="chart" data-percent="12000">
                                        <h2 class="percent" id="counter1">0</h2>
                                        <h5>Properties in stock</h5>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-flag"></span>
                                    </div>
                                    <div class="chart" data-percent="120">
                                        <h2 class="percent" id="counter2">0</h2>
                                        <h5>City registered </h5>
                                    </div>
                                </div> 
                            </div> 
                            <div class="col-sm-3 col-xs-6">
                                <div class="count-item">
                                    <div class="count-item-circle">
                                        <span class="pe-7s-graph2"></span>
                                    </div>
                                    <div class="chart" data-percent="5000">
                                        <h2 class="percent"  id="counter3">5000</h2>
                                        <h5>DEALER BRANCHES</h5>
                                    </div>
                                </div> 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
        <div style="position:fixed;bottom:20px;right:10px;z-index:20;">
        <a href="https://wa.me/917872390186?text=Welcome to Shareshell,how can we help you?"><img src="https://img.icons8.com/color/80/000000/whatsapp--v1.png" alt="whatsapp_logo"/></a>

        </div>

        <!-- boy-sale area -->
        <div class="boy-sale-area" style="background:white;">
            <div class="container">
                <div class="row">
                <!-- <a href="<?php echo base_url('properties'); ?>"> -->
                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12" id="card_go_properties">
                        <div class="asks-first">
                            <div class="asks-first-circle">
                                <span class="fa fa-search"></span>
                            </div>
                            <div class="asks-first-info" style="margin: 0px 65px 0px 85px;">
                                <h2>ARE YOU LOOKING FOR THE BEST PROPERTY FOR RENT? </h2>
                                <p>Just check into this website, our team will help you to find a perfect property at an affordable price in your area.</p>                                        
                            </div>
                            <div class="asks-first-arrow">
                            <span class="fa fa-angle-right"></span>
                            </div>
                        </div>
                    </div>
                    <!-- </a> -->
                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0" id="card_go_submit_properties">
                        <div  class="asks-first">
                            <div class="asks-first-circle">
                                <span class="fa fa-usd"></span>
                            </div>
                            <!-- <a href="<?=base_url('main/submit_property');?>"> -->
                            <div class="asks-first-info" style="margin: 0px 65px 0px 85px;">
                                <h2>DO YOU WANT TO RENT YOUR PROPERTY?</h2>
                                <p>Just check into the website, Our team will help you to find a perfect renter for your house.</p>
                            </div>
                            <!-- </a> -->
                            <div class="asks-first-arrow">
                                <span class="fa fa-angle-right"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p  class="asks-call">QUESTIONS? CALL US  : <span class="strong"> +91 78723 90186</span></p>
                    </div>
                </div>
            </div>
        </div>
<?php
    $this->load->view('website/footer');


?>


<script src="<?=base_url();?>assets/js/jquery-1.10.2.min.js"></script>

<script src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

<script src="<?=base_url();?>assets/js/bootstrap-hover-dropdown.js"></script>


<script src="<?=base_url();?>assets/js/owl.carousel.min.js"></script>        

<script src="<?=base_url();?>assets/js/wow.js"></script>

<script src="<?=base_url();?>assets/js/icheck.min.js"></script>
        <script src="<?=base_url();?>assets/js/price-range.js?v=1.0"></script>

<script src="<?=base_url();?>assets/js/main.js"></script>

<script src="<?=base_url();?>assets/js/myjs.js?v=1.2"></script>

<script type="text/javascript" >
        
    var key="<?php echo $this->security->get_csrf_hash(); ?>";    
    // console.log("1st key:"+key);
    var property_list="";

    $(".blog-images").click(function(){
        location.href="<?=base_url('blogs');?>";
    });


    $("#center_card_show_properties").click(function(){
        window.location.href = "<?=base_url('properties')?>";
    });

    $("#center_card_contact").click(function(){
        window.location.href = "<?=base_url('contact')?>";
    });

    $(".box-tree").click(function(event) {
        event.preventDefault();
        // console.log("gg");
    });

    $("#card_go_properties").click(function(){
        window.location.href = "<?=base_url('properties');?>";
    });

    $("#card_go_submit_properties").click(function(){
        window.location.href = "<?=base_url('main/submit_property')?>";
    });


function load_page_content(){

    var addon_array = [];
    
    $("input:checkbox[name=filter_addon]:checked").each(function() {
        addon_array.push($(this).val());
    });
    // console.log(addon_array);
    // dummy_array=["",""];
    $.ajax({
        url:"<?=base_url('main_helper/get_all_property_list');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            // search_text:$("#search_box_home").val(),
            items_per_page:7,
            page_no:1,
            filter_avail:"",
            filter_city:"",
            filter_status:"",
            filter_price:"",
            filter_addon:'',
            filter_bathroom:"",
            filter_facing:"",
            filter_sharing:"",
            filter_avail:"",
            filter_meal:"",
            filter_prefered:"",
            filter_sort:'sn',
            filter_sort_by:'DESC'

            },
            dataType:"json",
            // processData:false,
            // contentType:false,

            success:function(data){
                key=data.key;

                console.log(data);
                // console.log($("#price-range").val());
                var property_list="";
                var dot_after_name="";

                $.each(data.data,function() {
                    
                    type_change="";
                    if(this.avail=="combined"){
                        type_change="All";
                    }else if(this.avail=="girl"){
                        type_change="F";
                    }else if(this.avail="boy"){
                        type_change="M";
                    }

                    if(this.name.length>15){
                        dot_after_name="...";
                    }else{
                        dot_after_name="";
                    }

                    thumb_img=this.main_image.split('.').slice(0, -1).join('.')+"_thumb."+this.main_image.substr(this.main_image.lastIndexOf('.') + 1);

                    property_list+='<div class="col-sm-6 col-md-3 p0">';
                    property_list+='<div class="box-two proerty-item">';
                    property_list+='<div class="item-thumb">';
                    property_list+='<a href="<?=base_url('property/');?>'+this.sn+"/"+slug_js(this.name)+'" ><img src="<?=base_url('utility/main_image');?>/'+thumb_img+'" alt="shreshell - '+this.name+'" style="height:225px; object-fit:cover;"></a>';
                    property_list+='</div>';
                    property_list+='<div class="item-entry overflow">';
                    property_list+='<h5><a href="<?=base_url('property/');?>'+this.sn+"/"+slug_js(this.name)+'" >'+this.name.slice(0,16)+''+dot_after_name+'</a></h5>';
                    property_list+='<div class="dot-hr"></div>';
                    property_list+='<span class="pull-left"><b>'+capital_first(this.city)+' </b></span>';
                    property_list+='<span class="proerty-price pull-right">&#8377; '+this.price+'</span>';
                    property_list+='</div>';
                    property_list+='</div>';
                    property_list+='</div>';
                    // property__list+='';

                });

                property_list+='<div class="col-sm-6 col-md-3 p0">';
                property_list+='<div class="box-tree more-proerty text-center">';
                property_list+='<div class="item-tree-icon">';
                property_list+='<i class="fa fa-th"></i>';
                property_list+='</div>';
                property_list+='<div class="more-entry overflow">';
                property_list+='<h5><a href="<?=base_url('properties');?>" >CAN\'T DECIDE? </a></h5>';
                property_list+='<h5 class="tree-sub-ttl">Show all properties</h5>';
                property_list+='<button class="btn border-btn more-black" value="All properties"><a href="<?=base_url('properties');?>">properties</a></button>';
                property_list+='</div>';
                property_list+='</div>';
                property_list+='</div>';
                $("#list-type").html(property_list);
                // console.log(property_list);
            },
            error:function(data){
                console.log(data);
            }
        });
}
load_page_content();


    // $("#btn-search-main").click(function(event) {
    //     event.preventDefault();
    //     load_page_content();
    // });
    var search_category="";
    $(".search_category").click(function(){
        
        
        $(".search_category").each(function(){
            $(this).css("border-bottom","");
        });
        if(search_category!="&&category="+$(this).html()){
            $(this).css("border-bottom","2px solid white");
            search_category="&&category="+$(this).html();
        }else{
            search_category="";
        }
        
    });

    function search_properties(){
        window.location.href="<?=base_url('properties');?>?s="+$("#search_box_home").val()+search_category; 
    }

    $("#search_form").submit(function(e){
        e.preventDefault();
        search_properties();    
    });

    $("#search").click(function(e){
        e.preventDefault();
        search_properties(); 
    });

    </script>

</body>
</html>

                        
                            
                                
                                    
                                
                                
                                    
                                    
                                    
                                
                            
                        