<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shareshell | Home page</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?>    
        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
 
                    <div class="item"><img src="<?=base_url();?>assets/img/slide1/slider-image-2.jpg" alt="The Last of us"></div>
                    <div class="item"><img src="<?=base_url();?>assets/img/slide1/slider-image-1.jpg" alt="GTA V"></div>

                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>property Searching Just Got So Easy</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deserunt deleniti, ullam commodi sit ipsam laboriosam velit adipisci quibusdam aliquam teneturo!</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="home-lager-shearch" style="background-color: rgb(252, 252, 252); padding-top: 25px; margin-top: -125px;">
            <div class="container">
                <div class="col-md-12 large-search"> 
                    <div class="search-form wow pulse">
                        

                        
                       

                        <form action="" class=" form-inline">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <select data-live-search="true" data-live-search-style="begins" id="filter_avail" class="selectpicker show-tick form-control" title="-Available for-">
                                        <option value="">All</option>
                                        <option value="girl">Girls</option>
                                        <option value="boy">Boys</option> 
                                        <option value="combined">Girls/Boys(combined)</option> 
                                    </select>

                                </div>
                                <div class="col-md-4">                                   
                                    <select id="filter_city" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                        <option value="bhubaneswar">Bhubaneshwar</option>
                                        
                                    </select>
                                </div>
                                <div class="col-md-4">                                     
                                    <select id="filter_status" data-live-search="true" data-live-search-style="begins"class="selectpicker show-tick form-control" title="-Status-">
                                        <option value="">All</option>
                                        <option value="rent">Rent </option>
                                        <option value="pg">PG</option>
                                    

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="search-row">   

                                    <div class="col-sm-3">
                                        <label for="price-range">Price range ($):</label>
                                        <input type="text" class="span2" value="" data-slider-min="500" 
                                               data-slider-max="100000" data-slider-step="100" 
                                               data-slider-value="[750,50000]" id="price-range" value="750,50000"><br/>
                                        <b class="pull-left color">500</b> 
                                        <b class="pull-right color">100000</b>
                                    </div>
                                    <!-- End of  -->  

                                    <!-- <div class="col-sm-3">
                                        <label for="property-geo">Property geo (m2) :</label>
                                        <input type="text" class="span2" value="" data-slider-min="40" 
                                               data-slider-max="12000" data-slider-step="5" 
                                               data-slider-value="[0,4450]" id="property-geo" ><br />
                                        <b class="pull-left color">40m</b> 
                                        <b class="pull-right color">12000m</b>
                                    </div> -->
                                    <!-- End of  --> 

                                    <!-- <div class="col-sm-3">
                                        <label for="price-range">Min baths :</label>
                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                               data-slider-max="10" data-slider-step="1" 
                                               data-slider-value="[250,450]" id="min-baths" ><br />
                                        <b class="pull-left color">1</b> 
                                        <b class="pull-right color">10</b>
                                    </div> -->
                                    <!-- End of  --> 

                                    <!-- <div class="col-sm-3">
                                        <label for="property-geo">Min bed :</label>
                                        <input type="text" class="span2" value="" data-slider-min="1" 
                                               data-slider-max="10" data-slider-step="1" 
                                               data-slider-value="[250,450]" id="min-bed" ><br />
                                        <b class="pull-left color">1</b> 
                                        <b class="pull-right color">10</b>
                                    </div> -->
                                    <!-- End of  --> 

                                </div>

                                <div class="search-row">  

                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="filter_addon" value="fire"> Fire Place(3100)
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <!-- End of  -->  


                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="filter_addon" value="exit"> Emergency Exit(200)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of  --> 

                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="filter_addon" value="laundry"> Laundry(10073)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of  -->  

                                   

                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="filter_addon" value="mess">Mess(food)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of  --> 
                                </div>   
                            </div>  
                            <div class="center">
                                <input type="submit" value="" class="btn btn-default btn-lg-sheach" id="btn-search-main">
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
                        <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies . </p>
                    </div>
                </div>

                <div class="row">
                    <div class="proerty-th" id="list-type">
                        

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="<?=base_url();?>assets/img/demo/property-1.jpg"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html" >Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 120m </span>
                                    <span class="proerty-price pull-right">$ 300,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-2.html" ><img src="<?=base_url();?>assets/img/demo/property-2.jpg"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-2.html" >Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 120m </span>
                                    <span class="proerty-price pull-right">$ 300,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-3.html" ><img src="<?=base_url();?>assets/img/demo/property-3.jpg"></a>

                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-3.html" >Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 120m </span>
                                    <span class="proerty-price pull-right">$ 300,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="<?=base_url();?>assets/img/demo/property-4.jpg"></a>

                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html" >Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 120m </span>
                                    <span class="proerty-price pull-right">$ 300,000</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-3.html" ><img src="<?=base_url();?>assets/img/demo/property-2.jpg"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-3.html" >Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 120m </span>
                                    <span class="proerty-price pull-right">$ 300,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-2.html" ><img src="<?=base_url();?>assets/img/demo/property-4.jpg"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-2.html" >Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 120m </span>
                                    <span class="proerty-price pull-right">$ 300,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="<?=base_url();?>assets/img/demo/property-3.jpg"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html" >Super nice villa </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> 120m </span>
                                    <span class="proerty-price pull-right">$ 300,000</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                <div class="item-tree-icon">
                                    <i class="fa fa-th"></i>
                                </div>
                                <div class="more-entry overflow">
                                    <h5><a href="<?=base_url('properties');?>" >CAN'T DECIDE ? </a></h5>
                                    <h5 class="tree-sub-ttl">Show all properties</h5>
                                    <button class="btn border-btn more-black" value="All properties"><a href="<?=base_url('properties');?>">properties</a></button>
                                </div>
                            </div>
                        </div>



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

        <!--TESTIMONIALS -->
        <div class="testimonial-area recent-property" style="background-color: #FCFCFC; padding-bottom: 15px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
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
                                    <div class="client-face wow fadeInRight" data-wow-delay=".9s"> 
                                        <img src="<?=base_url();?>assets/img/client-face1.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                                    </div>
                                    <div class="client-face">
                                        <img src="<?=base_url();?>assets/img/client-face2.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                                    </div>
                                    <div class="client-face">
                                        <img src="<?=base_url();?>assets/img/client-face1.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                                    </div>
                                    <div class="client-face">
                                        <img src="<?=base_url();?>assets/img/client-face2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Count area -->
        <div class="count-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
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
                                <p> varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa</p>                                        
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
                                <p> varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa</p>
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

<script type="text/javascript">
        
    var key="<?php echo $this->security->get_csrf_hash(); ?>";    
    // console.log("1st key:"+key);
    var property_list="";


function load_page_content(){

    var addon_array = [];
    
    $("input:checkbox[name=filter_addon]:checked").each(function() {
        addon_array.push($(this).val());
    });
    // console.log(addon_array);

    $.ajax({
        url:"<?=base_url('main_helper/get_all_property_list');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            items_per_page:7,
            page_no:1,
            filter_avail:$("#filter_avail").val(),
            filter_city:$("#filter_city").val(),
            filter_status:$("#filter_status").val(),
            filter_price:$("#price-range").val(),
            filter_addon:addon_array,
            filter_sort:'sn',
            filter_sort_by:'DESC'

            },
            dataType:"json",
            // processData:false,
            // contentType:false,

            success:function(data){
                key=data.key;

                console.log(data);
                console.log($("#price-range").val());
                var property_list="";

                $.each(data.data,function() {
                    
                    type_change="";
                    if(this.avail=="combined"){
                        type_change="All";
                    }else if(this.avail=="girl"){
                        type_change="F";
                    }else if(this.avail="boy"){
                        type_change="M";
                    }

                    property_list+='<div class="col-sm-6 col-md-3 p0">';
                    property_list+='<div class="box-two proerty-item">';
                    property_list+='<div class="item-thumb">';
                    property_list+='<a href="<?=base_url('property?id=');?>'+this.sn+'" ><img src="<?=base_url('utility/main_image');?>/'+this.main_image+'" style="height:225px;"></a>';
                    property_list+='</div>';
                    property_list+='<div class="item-entry overflow">';
                    property_list+='<h5><a href="property-1.html" >'+this.name+'</a></h5>';
                    property_list+='<div class="dot-hr"></div>';
                    property_list+='<span class="pull-left"><b>'+this.sn+' :- '+this.min_bed+' </b></span>';
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

</script>

</body>
<!-- </html> -->

                        
                            
                                
                                    
                                
                                
                                    
                                    
                                    
                                
                            
                        