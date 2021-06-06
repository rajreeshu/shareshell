<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SHARESHELL| Properties  page</title>
        <meta name="shareshell" content="Making rental easy">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?>  
<style type="text/css">
    .pagination_box{
        color:green;
        border:2px solid black;
    }
</style>
</head>
<body>
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Make your Property searching easy with ShareShell</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container">  
                <div class="row">
                     
                <div class="col-md-3 p0 padding-top-40">
                    <div class="blog-asside-right pr0">
                        <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                            <div class="panel-heading">
                                <h3 class="panel-title">Smart search</h3>
                            </div>
                            <div class="panel-body search-widget">
                                <form action="" class=" form-inline"> 
                                    <fieldset>
                                        <div class="row" style="padding-bottom: 10px;">
                                            <div class="col-xs-12">
                                                <div class="col-md-4 col-lg-12">
                                                <input type="text" id="search_box" placeholder="Type to Search ....." name="" class="form-control">
                                            </div>
                                            </div>    
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">

                                                
                                               
                                                <div class="col-md-4 col-lg-12">
                                                    <select data-live-search="true" data-live-search-style="begins" id="filter_avail" class="selectpicker show-tick form-control" title="-Available for-">
                                                        <option value="all">All</option>
                                                        <option value="girl">Girls</option>
                                                        <option value="boy">Boys</option> 
                                                        <option value="combined">Girls/Boys(combined)</option> 
                                                    </select>
                
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-6">

                                                <select id="filter_city" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">
                                                    <option value="">Select Your City</option>
                                                    <option value="bhubaneswar">Bhubaneshwar</option>
                                                   
                                                </select>
                                            </div>
                                            <div class="col-xs-6">

                                                <select id="filter_status"data-live-search="true" data-live-search-style="begins" id="basic" class="selectpicker show-tick form-control" title="-status-">
                                                    <option value="">All</option>
                                                    <option value="pg">PG</option>
                                                    <option value="rent">Rent</option>
                                                      

                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col">
                                                <label for="price-range">Price range (rs):</label>
                                                <input type="text" class="span2" value="" data-slider-min="500" 
                                                       data-slider-max="100000" data-slider-step="100" 
                                                       data-slider-value="[5000,50000]" id="price-range" ><br />
                                                <b class="pull-left color">500</b> 
                                                <b class="pull-right color">100000</b>                                                
                                            </div>
                                           <!--  <div class="col-xs-6">
                                                <label for="property-geo">Property geo (m2) :</label>
                                                <input type="text" class="span2" value="" data-slider-min="40" 
                                                       data-slider-max="12000" data-slider-step="5" 
                                                       data-slider-value="[40,450]" id="property-geo" ><br />
                                                <b class="pull-left color">40m</b> 
                                                <b class="pull-right color">12000m</b>                                                
                                            </div>   -->                                          
                                        </div>
                                    </fieldset>                                

                                    <!-- <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label for="price-range">Min baths :</label>
                                                <input type="text" class="span2" value="" data-slider-min="1" 
                                                       data-slider-max="10" data-slider-step="1" 
                                                       data-slider-value="[0,10]" id="min-baths" ><br />
                                                <b class="pull-left color">1</b> 
                                                <b class="pull-right color">10</b>                                                
                                            </div>

                                            <div class="col-xs-6">
                                                <label for="property-geo">Min bed :</label>
                                                <input type="text" class="span2" value="" data-slider-min="1" 
                                                       data-slider-max="10" data-slider-step="5" 
                                                       data-slider-value="[1,10]" id="min-bed" ><br />
                                                <b class="pull-left color">1</b> 
                                                <b class="pull-right color">10</b>

                                            </div>
                                        </div>
                                    </fieldset> -->

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox"  name="filter_addon" value="fire"> Fire Place</label>
                                                </div> 
                                            </div>

                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox" name="filter_addon" value="mess">Mess(food)</label>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </fieldset>

                                    

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6"> 
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="filter_addon" value="laundry"> Laundry  </label>
                                                </div>
                                            </div>  
                                            <div class="col-xs-6"> 
                                                <div class="checkbox">
                                                    <label> <input type="checkbox" name="filter_addon" value="exit"> Emergency Exit</label>
                                                </div>
                                            </div>  
                                        </div>
                                    </fieldset>

                                    

                                   

                                    <fieldset >
                                        <div class="row">
                                            <div class="col-xs-12">  
                                                <input class="button btn largesearch-btn" value="Search" type="submit" id="btn-search-main">
                                            </div>  
                                        </div>
                                    </fieldset>                                     
                                </form>
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu wow fadeInRight animated">
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
                    </div>
                </div>

                <div class="col-md-9  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear"> 
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                                <li class="active" id="sort_date">
                                    <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                        Property Date <i class="fa fa-sort-amount-asc"></i>					
                                    </a>
                                </li>
                                <li class="" id="sort_price">
                                    <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                        Property Price <i class="fa fa-sort-numeric-desc"></i>						
                                    </a>
                                </li>
                            </ul><!--/ .sort-by-list-->

                            <div class="items-per-page">
                                <label for="items_per_page"><b>Property per page :</b></label>
                                <div class="sel">
                                    <select id="items_per_page" name="per_page">
                                        <option value="3">3</option>
                                        <option value="6">6</option>
                                        <option value="9">9</option>
                                        <option selected="selected" value="12">12</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                        <option value="45">45</option>
                                        <option value="60">60</option>
                                    </select>
                                </div><!--/ .sel-->
                            </div><!--/ .items-per-page-->
                        </div>

                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                        </div><!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-12 clear"> 
                        <div id="list-type" class="proerty-th">
                            <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="assets/img/demo/property-3.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...ss</p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">(5)|
                                                <img src="assets/img/icon/shawer.png">(2)|
                                                <img src="assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">(5)|
                                                <img src="assets/img/icon/shawer.png">(2)|
                                                <img src="assets/img/icon/cars.png">(1)  
                                            </div>
                                        </div> 
                                    </div>
                                </div> 

                         
                        </div>
                    </div>
                    
                    <div class="col-md-12"> 
                        <div class="pull-right">
                            <div class="pagination">
                                <ul id="pagination_pages">
                                    <!-- <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">Next</a></li> -->
                                </ul>
                            </div>
                        </div>                
                    </div>
                </div>  
                </div>              
            </div>
        </div>
<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');

    $url_gets=$this->security->xss_clean($this->input->get('s'));
    $url_get=(isset($url_gets))?$url_gets:"";
?>

<script type="text/javascript">
    
    var key="<?php echo $this->security->get_csrf_hash(); ?>";    
    // console.log("1st key:"+key);
    var property_list="";

    var sort_by="sn";
    var sort_by_val="DESC";
    var i=1;

    $("#search_box").val("<?=$url_get;?>");
    // console.log("<?=$url_get;?>");

function load_page_content(page_no){

    var addon_array = [];
    
    $("input:checkbox[name=filter_addon]:checked").each(function() {
        addon_array.push($(this).val());
    });

    $.ajax({
        url:"<?=base_url('main_helper/get_all_property_list');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            search_text:$("#search_box").val(),
            items_per_page:$("#items_per_page").val(),
            page_no:page_no,
            filter_avail:$("#filter_avail").val(),
            filter_city:$("#filter_city").val(),
            filter_status:$("#filter_status").val(),
            filter_price:$("#price-range").val(),
            filter_addon:addon_array,
            filter_sort:sort_by,
            filter_sort_by:sort_by_val
            },
            dataType:"json",
            // processData:false,
            // contentType:false,

            success:function(data){
                key=data.key;

                console.log(data);
                var property_list="";
                var no_of_page="";
                var no_of_page_code="";

                var dot_after_name="";

                no_of_page=Math.ceil(data.row_count/$("#items_per_page").val());
                console.log(no_of_page);

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

                    property_list+='<div class="col-sm-6 col-md-4 p0">';
                    property_list+='<div class="box-two proerty-item">';
                    property_list+='<div class="item-thumb">';
                    property_list+='<a href="<?=base_url('property?id=');?>'+this.sn+'" ><img src="<?=base_url('utility/main_image');?>/'+this.main_image+'" style="height:225px;"></a>';
                    property_list+='</div>';
                    property_list+='<div class="item-entry overflow">';
                    property_list+='<h5><a href="<?=base_url('property?id=');?>'+this.sn+'"> '+this.name.slice(0,10)+''+dot_after_name+' </a></h5>';
                    property_list+='<div class="dot-hr"></div>';
                    property_list+='<span class="pull-left"><b>'+capital_first(this.city)+'  </b></span>';
                    property_list+='<span class="proerty-price pull-right"> &#8377 '+this.price+'</span>';
                    property_list+='<p style="display: none; overflow: hidden; text-overflow: ellipsis;max-height: 72px;-webkit-line-clamp: 2;">'+this.description+'</p>';
                    property_list+='<div class="property-icon">';
                    property_list+='<span style="font-size:22px;"><b> &#9893;</b></span><span style="text-transform: capitalize;"> ( '+type_change+' ) |</span>';
                    property_list+='<span style="font-size:22px;"><b> &#9963;</b></span><span style="text-transform: capitalize;"> ( '+this.type+' ) |</span>';
                    property_list+='<span style="font-size:22px;"><b> &#9983;</b></span><span style="text-transform: capitalize;"> ( '+this.status+' ) </span>';
                    property_list+='</div>';
                    property_list+='</div>';
                    property_list+='</div>';
                    property_list+='</div>';
                    // property__list+='';

                });
                $("#list-type").html(property_list);
                // console.log(property_list);
                if(no_of_page>1){
                    for(i=1;i<=no_of_page;i++){
                        if(i==page_no){
                            no_of_page_code+='<li><a href="#" class="pagination_box" onclick="load_page_content('+i+')">'+i+'</a></li>';
                        }else{
                            no_of_page_code+='<li><a href="#" onclick="load_page_content('+i+')">'+i+'</a></li>';    
                        }
                        
                    }

                    
                }

                $("#pagination_pages").html(no_of_page_code);
                    


            },
            error:function(data){
                console.log(data);
            }
        });
}
load_page_content(1);

    $("#items_per_page").change(function() {
        load_page_content(1);
    });

    $("#sort_price").click(function(event) {
        sort_by="price";
        sort_by_val="ASC";
        $("#sort_date").removeClass('active');
        $("#sort_price").addClass('active');
        load_page_content(1);
    });

    $("#sort_date").click(function(event) {
        sort_by="sn";
        sort_by_val="DESC";
        $("#sort_price").removeClass('active');
        $("#sort_date").addClass('active');
        load_page_content(1);
    });

    $("#price-range").focus(function(){
        console.log("chagne");
    });


    $("#btn-search-main").click(function(event) {
        event.preventDefault();

        window.history.replaceState(null, null, "<?=base_url('properties');?>?s="+$("#search_box").val());

        load_page_content(1);
    });

</script>
</body>
</html>

<!-- <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
 -->