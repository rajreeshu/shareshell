<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"3>
        <title>Shareshell | Home page</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&display=swap" rel="stylesheet">



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="auto-complete.js"></script>
    
    
    <body>
    <!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "106921368151575");
  chatbox.setAttribute("attribution", "biz_inbox");
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script> 
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?> 
  
        <div class="slider-area">
            <div class="slider">
            <div id="bg-slider" class="owl-carousel owl-theme">
 
<<<<<<< HEAD
                <div class="item"><img src="<?=base_url();?>assets/img/slide1/slider-1.jpg" alt="The Last of us"></div>
                <div class="item"><img src="<?=base_url();?>assets/img/slide1/slider-2.jpg" alt="The Last of us"></div>
                <div class="item"><img src="<?=base_url();?>assets/img/slide1/slider-3.jpg" alt="GTA V"></div>
                
=======
                <!-- <div class="item"><img src="<?=base_url();?>assets/img/slide1/slider-image-0.jpg" alt="The Last of us"></div> -->
                <div class="item"><img src="<?=base_url();?>assets/img/slide1/slider-image-1.jpg" alt="Slider Image 1"></div>
                <div class="item"><img src="<?=base_url();?>assets/img/slide1/slider-image-2.jpg" alt="Slider Image 2"></div>
                <div class="item"><img style="" src="assets/img/slide1/slider-image-3.jpg" alt="Slider Image 3"></div>
                <!-- <div class="item"><img style="" src="assets/img/slide1/slider-image-4.jpg" alt="GTA V"></div> -->
>>>>>>> 5614256e2f186164d6ef9317a9a87daf634f46ac

            </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2 style="text-shadow:1px 1px white;font-family: 'Open Sans', sans-serif;font-weight:bold;">property Searching Just Got So Easy</h2>
                        <h5 style="color: rgb(252, 252, 252); text-shadow: 1px 1px 3px grey;">“Now, one thing I tell everyone is learn about real estate.
                        Repeat after me: real estate provides the highest returns, the greatest values and the least
                        risk. ”</h5>

                    </div>
                </div>
            </div>
        </div>

        <div class="home-lager-shearch" style="background-color: rgb(252, 252, 252); padding-top: 25px; margin-top: -125px; opacity:1;">
            <div class="container">
                <div class="col-md-12 large-search"> 
                    <div class="search-form wow pulse">
                        

                        
                       

                    <form action="" class=" form-inline" id="search_form">



<!--<div class="col-md-12" style="list-style: none;display: flex;padding: 10px;">
    <li
        style="margin-right: 28px;margin-left: 15px;cursor: pointer;border-bottom: 3px solid rgb(241, 240, 240);">
        <a>R E N T</a></li>
    <li style="margin-right: 28px;cursor: pointer;border-bottom: 3px solid rgb(241, 240, 240);">
        <a>B U Y</a></li>
    <li style="margin-right: 28px;cursor: pointer;border-bottom: 3px solid rgb(241, 240, 240);">
        <a>P L O T</a></li>

</div>-->

<div class="col-md-12">
<div><h3><b>Start Searching your Property......</b></h3></div>


    <div class="small" style="align-content: center;align-items: center;display:flex;">
    



        <input class="search" id="search_box_home" type="text"
            placeholder="Search property on your desired location,name,....."
            style="border: 1px solid grey;border-radius: 10px;height:3em;background-color: rgb(248, 245, 245);align-items: center;align-content: center;">

        <span>

            <button
                style="border-radius: 10px;border: 2px solid rgb(255, 255, 255);font-size: 15px;width:8em;"
                class='  btn-primary '>SEARCH</button>

        </span>
        
              
        </div>
      </div>

    </div>
    



</div>


</div>

</form>
                    

                    </div>
                </div>
            </div>
        </div>


        <!-- property area -->
        <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Top submitted property</h2>
                        <p>Have a glance at some of our best properties.These represents our master work pattern and ideas,we give preference to.</p>
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
                                        <h2>SHARE SHELL</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div  class="welcome_services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-home pe-4x"></i>
                                            </div>
                                            <h3>Any property</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-users pe-4x"></i>
                                            </div>
                                            <h3>More Clients</h3>
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
                                            <h3>Easy to use</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
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

        <!-- boy-sale area -->
        <div class="boy-sale-area">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
                        <div class="asks-first">
                            <div class="asks-first-circle">
                                <span class="fa fa-search"></span>
                            </div>
                            <div class="asks-first-info">
                                <h2>ARE YOU LOOKING FOR A Property?</h2>
                                <p>Looking to buy property?Our team is there to help you find a perfect property,just check in,search and surf thousands of properties in no time.</p>                                        
                            </div>
                            <div class="asks-first-arrow">
                                <a href="properties.html"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0">
                        <div  class="asks-first">
                            <div class="asks-first-circle">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="asks-first-info">
                                <h2>DO YOU WANT TO SELL A Property?</h2>
                                <p>Just check into this website,our team will go through all your conditions evaluate your asset and will bring amazing deals and some best brokers to you.</p>
                            </div>
                            <div class="asks-first-arrow">
                                <a href="submit-property copy.html"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p  class="asks-call">QUESTIONS? CALL US  : <span class="strong"> + 3-123- 424-5700</span></p>
                    </div>
                </div>
            </div>
        </div>
<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');
?>

<script type="text/javascript" >
        
    var key="<?php echo $this->security->get_csrf_hash(); ?>";    
    // console.log("1st key:"+key);
    var property_list="";

    $(".box-tree").click(function(event) {
        event.preventDefault();
        // console.log("gg");
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
            filter_addon:[''],
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

                    if(this.name.length>9){
                        dot_after_name="...";
                    }else{
                        dot_after_name="";
                    }

                    thumb_img=this.main_image.split('.').slice(0, -1).join('.')+"_thumb."+this.main_image.substr(this.main_image.lastIndexOf('.') + 1);

                    property_list+='<div class="col-sm-6 col-md-3 p0">';
                    property_list+='<div class="box-two proerty-item">';
                    property_list+='<div class="item-thumb">';
                    property_list+='<a href="<?=base_url('property?id=');?>'+this.sn+'" ><img src="<?=base_url('utility/main_image');?>/'+thumb_img+'" style="height:225px;"></a>';
                    property_list+='</div>';
                    property_list+='<div class="item-entry overflow">';
                    property_list+='<h5><a href="property-1.html" >'+this.name.slice(0,10)+''+dot_after_name+'</a></h5>';
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
                property_list+='<h5><a href="<?=base_url('properties');?>" >CAN\'T DECIDE ? </a></h5>';
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

    // $("#filter_avail").change(function() {
    //     // load_page_content(); 
    //     console.log($("#price-range").val());
    //     // console.log($("#property-geo").val());
    // });

    // $("#filter_city").change(function() {
    //     load_page_content();
    // });

    // $("#filter_status").change(function() {
    //     load_page_content();
    // });

    // $("#price-range").mouseup(function() {
    
    //     console.log($("#price-range").val());
    //     console.log($("#property-geo").val());
    // });

    $("#btn-search-main").click(function(event) {
        event.preventDefault();
        load_page_content();
    });

    $("#search_form").submit(function(e){
        e.preventDefault();
        window.location.href="<?=base_url('properties');?>?s="+$("#search_box_home").val();    
    });










   
</script>
<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "106921368151575");
  chatbox.setAttribute("attribution", "biz_inbox");
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

</body>
<!-- </html> -->

                        
                            
                                
                                    
                                
                                
                                    
                                    
                                    
                                
                            
                        