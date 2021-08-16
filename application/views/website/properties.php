<!DOCTYPE html>

<html class="no-js" lang = "en"> 
    <head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Search Properties</title>
        <meta name="description" content="find properties near you to rent">
        <meta name="author" content="Shareshell">
        <meta name="keyword" content="house for rent, shareshell, property, buy property, rent property, hostels">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?>  
<link rel="stylesheet" href="<?=base_url();?>assets/css/style-properties.css?v=3.3">
<style type="text/css">
    .pagination_box{
        color:green;
        border:2px solid black;
    }
    .navbar{
        z-index: 11;
    }
    .property-type {
        padding-top: 0px;
        margin: auto;
        width: 95%;
        display: flex;
        overflow-x: scroll !important;
    }

    .item {
        border: 0.6px solid rgb(228, 228, 228);
        width: 116px !important;
        height: 96px;
        text-align: center;
        margin-right: 10px;
        border-radius: 4px;
        flex: 0 0 auto;
        cursor: pointer;


    }

    .item:hover {
        background-color: rgb(255, 220, 104, 0.8);
        border: none;



    }

    .item2 {
        border: 0.6px solid rgb(228, 228, 228);
        width: 90px !important;
        height: 46px;
        text-align: center;
        margin-right: 10px;
        border-radius: 4px;
        flex: 0 0 auto;
        cursor: pointer;

    }

    .item2:hover {
        background-color: rgb(255, 220, 104, 0.8);
        border: none;


    }

    .item2 p {
        margin-top: 14px;
        font-size: 12px;
    }

    h5 {
        margin-left: 0px !important;
        left: 0px !important;
        color: rgb(24, 24, 24);
    }

    .head h2 {
        font-size: 18px;

        color: rgb(66, 66, 66);
        font-weight: bold;

    }

    .smart-search {
        border-bottom: 2px solid rgb(3, 175, 175);
        margin: auto;
        width: 90%;
        padding-top: 10px;
    }

    .smart-search input {
        margin: auto;
        width: 90%;
    }

    .cateogary {
        margin: auto;
        width: 100%;
        text-align: center;
        justify-content: center;
        padding-top: 20px;

    }

    .cateogary-button input {
        margin: auto;
        height: 40px;
        width: 80px;
        border: 1px solid rgb(49, 49, 49);
        border-radius: 0px;
        background-color: white;



    }

    .cateogary-button input:hover {
        background-color: rgb(3, 175, 175);
        color: white;

    }

    ::placeholder {
        font-size: 12px;
    }


    .property-type::-webkit-scrollbar {
        width: 3px;
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














    #height {
        height: 150px;
        ;
    }

    .flter-button {
        display: none;
    }

    input:focus,
    textarea:focus,
    select:focus {
        outline: none !important;
    }

    .property-search ul li {
        margin-right: 40px;
        font-weight: 700;
        cursor: pointer;

    }

    .property-search ul li:hover {
        color: rgb(255, 187, 0);

    }

    .property-search {
        margin-left: -38px;
    }

    .more-filter button:hover {
        background-color: rgba(0, 0, 0, 0.6) !important;

    }

    body::-webkit-scrollbar {
        width: 1em;

    }

    body::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 100px;

    }

    body::-webkit-scrollbar-thumb {
        background-color: rgb(150, 150, 150);
        border-radius: 100px;


    }


    .startmenu::-webkit-scrollbar {
        width: 12px;
    }

    .startmenu::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 100px;
    }
   

    .startmenu::-webkit-scrollbar-thumb {
        background-color: rgba(92, 92, 92, 0.8);

        border-radius: 100px;

    }





    .startmenu {
        font-family: 'Andada Pro', serif;
        font-family: 'Open Sans', sans-serif;
        position: absolute;
        margin-left: auto !important;
        margin-right: auto !important;
        width: 50%;
        height: 400px;
        text-align: center;
        justify-content: center;
        /* z-index: 9 !important; */
        z-index: -1;
        left: 25%;
        top: -186px;
        overflow-y: scroll;
        border-radius: 15px;

        transition: all 0.3s ease-in;
        background-color: rgb(255, 255, 255);


    }

    .black-background {
        display: none;
        background-color: rgb(0, 0, 0, 0.7);
        position: absolute;
        z-index: 8;


        width: 100%;
        height: 100%;
    }

    .more-filter:hover {
        background-color: #FDC600 !important;
        
        
    }

    .more-filters:hover {
        background-color: #ffe483 !important;
        border: none !important;
    }
    #search-smart{
        display: none;
    }
    .appy-filter:hover{
        
        background-color: #fcca17 !important;
       border: 2px solid rgb(32, 32, 32) !important;

    }
    #done:hover{
        background-color: rgb(255, 220, 104, 0.8);
        border: none !important;
    }

    .search_btn_img_div{
        width:50px;background-color: #FDC600;border-radius: 4px;margin-left: -17px;margin-right: 20px;
    }

    @media only screen and (max-width: 700px) {
        .property-btn{
            display: none !important; 
        }
        .properties-page{
            margin-top:-50px;
        }
        .search_btn_img_div{
            margin-left:45px;
        }

        #search-smart{
        display:block;
    }

        #smart-search {
            display: none;
        }

        .flter-button {
            display: block;
        }

        .mobile-filter {
            display: none;
        }

        .startmenu {
            display: none;
        }

        .mobile-search {
            width: 100%;
        }
        .mobile-filter-box{
            margin: auto !important;
            width: 100% !important;
            margin-left: 0px !important;
            
           
        }
        .mobile-filter-box input{
            
        }
        .more-filters{
            width: 100% !important;
        }
        #recommended{
            display: none;
        }
        .mobile-search-img{
           
        }
        .mobile-input{
            width: 100% !important;
        }
        #form-inline{
            margin-top: -68px;
        }


    }

</style>
</head>
<body>
        <!-- <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Make your Property searching easy with ShareShell</h1>               
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End page header -->
        <div class="page-head" style="z-index: 20;">
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <div style="">

                        <div class="panel-body search-widget">





                            <form class=" form-inline" id="main_search_form" style="display:flex ;">




                                <div class="mobile-filter-box">

                                    <div class="mobile-search" style="display: flex;margin: auto;">

                                        <div>
                                            <input type="search" id="search_box" class="mobile-input"
                                                style="border: 2px solid #ffffff; height: 26px;width:200px;background-color: rgb(250, 249, 249);margin-right: 20px;">
                                        </div>

                                        <div class="search_btn_img_div">
                                            <img src="<?=base_url('assets/img/');?>loupe.png" alt="" class="btn-search-main"
                                                style="height: 25px;width: auto;margin-left: 12px;margin-top: 6px; cursor: pointer;">
                                        </div>
                                    </div>
                                </div>


                                <fieldset class="mobile-filter">
                                    <div class="row">
                                        <div class="col-xs-12">

                                            <div class="col-md-4 col-lg-12">
                                                <select data-live-search-style="begins"
                                                    id="filter_status" class="selectpicker show-tick form-control"
                                                    title="-Status-"
                                                    style="outline: none;border:2px solid teal;background-color: white !important;">
                                                    <option value="">All</option> 
                                                    <option value="rent">Rent</option>
                                                    <option value="buy">Buy</option>
                                                    <option value="pg">PG</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </fieldset>


                                <fieldset style="margin-left: -25px;" class="mobile-filter">
                                    <div class="row">
                                        <div class="col-xs-12">

                                            <div class="col-md-4 col-lg-12">
                                                <select data-live-search-style="begins"
                                                    id="filter_type" class="selectpicker show-tick form-control"
                                                    title="-Type-"
                                                    style="outline: none;border:2px solid teal;background-color: white !important;">
                                                            <option value="">All</option> 
                                                            <option value="hostel">Hostel </option>
                                                            <option value="flat">Flat </option>
                                                            <option value="house">House / Villa</option> 
                                                            <option value="plot">Plot</option>  
                                                            <option value="others">Others</option>  
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset style="margin-left: -25px;" class="mobile-filter">
                                    <div class="row">
                                        <div class="col-xs-12">

                                            <div class="col-md-4 col-lg-12">
                                                <select data-live-search-style="begins"
                                                    id="filter_min_bed" class="selectpicker show-tick form-control"
                                                    title="-BHK-" value="2">
                                                    <option value="">All</option> 
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">4+</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </fieldset>







                                <fieldset class="mobile-filter">

                                    <div style="display: flex;margin: -7px -11px;cursor: pointer;"
                                        >
                                        <div class="" style=" justify-content: center;text-align: center;">
                                            <div class="more-filter" id="more-filter"
                                                style="border:2px solid #535353;background-color: rgba(255, 255, 255, 0.8);width: 210px;font-weight: bold;color: #1b1b1b;height: 43px;margin-top: 5px;border-radius: 5px;">
                                                <p style="margin-top: 7px;"><b>MORE FILTER</b></p>
                                            </div>
                                        </div>
                                </fieldset>

                                <fieldset class="mobile-filter">

                                    <div style="display: flex;margin: -7px 20px;cursor: pointer;">
                                        <div class="" style=" justify-content: center;text-align: center;">
                                            <div class="btn-search-main more-filter"
                                                style="border:2px solid #535353;background-color: rgba(255, 255, 255, 0.8);width: 210px;font-weight: bold;color: #1b1b1b;height: 43px;margin-top: 5px;border-radius: 5px;">
                                                <p style="margin-top: 7px;"><b>SEARCH</b></p>
                                            </div>
                                        </div>
                                </fieldset>
                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- filter popup start -->
    <div style="width: 100%;justify-content: center;text-align: center;">

        <div class="startmenu">

            <div class="head">
                <h2>Make your searching easy with smart search</h2>
            </div>





            <div id="rent-buy">

                <div style="float: left;margin-left: 20px;">
                    <h5><b>Property type</b></h5>

                </div>


                <div class="property-type">
                    <div class="item"><img src="<?=base_url('assets/img/');?>residential.png" alt="">
                        <p><b>Flat</b></p>
                    </div>
                    <div class="item"><img src="<?=base_url('assets/img/');?>house.png" alt="">
                        <p><b>House/Villa</b></p>
                    </div>
                    <div class="item"><img src="<?=base_url('assets/img/');?>bunk.png" alt="">
                        <p><b>Hostel</b></p>
                    </div>
                    <div class="item"><img src="<?=base_url('assets/img/');?>workspace.png" alt="">
                        <p><b>Commercial</b></p>
                    </div>
                    <div class="item"><img src="<?=base_url('assets/img/');?>shop.png" alt="">
                        <p><b>Shop</b></p>
                    </div>


                </div>

                <div style="float: left;margin-left: 20px;">
                    <h5><b>Bedrooms</b></h5>

                </div>
                <div class="property-type" style="">
                    <div class="item2">
                        <p><b>1 BHK</b></p>
                    </div>
                    <div class="item2">
                        <p><b>2 BHK</b></p>
                    </div>
                    <div class="item2">
                        <p><b>3 BHK</b></p>
                    </div>
                    <div class="item2">
                        <p><b>4 BHK</b></p>
                    </div>
                    <div class="item2">
                        <p><b>4+ BHK</b></p>
                    </div>


                </div>

                <div style="float: left;margin-left: 20px;">
                    <h5><b>Furnishing Status</b></h5>

                </div>

                <div class="property-type">
                    <div class="item"><img src="<?=base_url('assets/img/');?>interior-design.png" alt="">
                        <p><b>Furnished</b></p>
                    </div>
                    <div class="item"><img src="<?=base_url('assets/img/');?>chest-of-drawers.png" alt="">
                        <p><b>Semi Furnished</b></p>
                    </div>
                    <div class="item"><img src="<?=base_url('assets/img/');?>open-door.png" alt="">
                        <p><b>Unfurnished</b></p>
                    </div>


                </div>
                <div style="float: left;margin-left: 20px;">
                    <h5><b>Aminities</b></h5>

                </div>


                <div class="property-type" style="overflow-x: scroll;cursor: pointer;">


                    <div style="display: flex;">
                        <div class="item"><img src="<?=base_url('assets/img/');?>exit.png" alt="">
                            <p><b>Emergency Exit</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>laundry.png" alt="">
                            <p><b>Laundry</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>restaurant (1).png" alt="">
                            <p><b>Mess</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>club.png" alt="">
                            <p><b>Club House</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>power-supply.png" alt="">
                            <p><b>24 hr Power Supply</b></p>
                        </div>
                    </div>
                    <br>

                    <div style="display: flex;">

                        <div class="item"><img src="<?=base_url('assets/img/');?>employees.png" alt="">
                            <p><b>Maintainance Staff</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>gardening.png" alt="">
                            <p><b>Garden</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>parking.png" alt="">
                            <p><b>Parking</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>slider.png" alt="">
                            <p><b>Parking</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>pool.png" alt="">
                            <p><b>Swimming Pool</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>dumbbell (1).png" alt="">
                            <p><b>Gym</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>carrom.png" alt="">
                            <p><b>Indoor Games</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>atm.png" alt="">
                            <p><b>Bank/ATM</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>wifi-signal.png" alt="">
                            <p><b>Wifi</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>hospital.png" alt="">
                            <p><b>Health Facilities</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>cafeteria.png" alt="">
                            <p><b>Cafeteria</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>book.png" alt="">
                            <p><b>Library</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>temple.png" alt="">
                            <p><b>Temple</b></p>
                        </div>
                        <div class="item"><img src="<?=base_url('assets/img/');?>wifi-router.png" alt="">
                            <p><b>Broad Band</b></p>
                        </div>
                    </div>



                </div>

                <div style="float: left;margin-left: 20px;">
                    <h5><b>Bathrooms</b></h5>

                </div>

                <div class="property-type" style="">
                    <div class="item2">
                        <p><b>1</b></p>
                    </div>
                    <div class="item2">
                        <p><b>2</b></p>
                    </div>
                    <div class="item2">
                        <p><b>3</b></p>
                    </div>
                    <div class="item2">
                        <p><b>4</b></p>
                    </div>
                    <div class="item2">
                        <p><b>4+</b></p>
                    </div>


                </div>
                <div style="float: left;margin-left: 20px;">
                    <h5><b>Facing</b></h5>

                </div>

                <div class="property-type" style="">
                    <div class="item2">
                        <p><b>North</b></p>
                    </div>
                    <div class="item2">
                        <p><b>South</b></p>
                    </div>
                    <div class="item2">
                        <p><b>East</b></p>
                    </div>
                    <div class="item2">
                        <p><b>West</b></p>
                    </div>
                    <div class="item2">
                        <p><b>North-East</b></p>
                    </div>
                    <div class="item2">
                        <p><b>North-West</b></p>
                    </div>
                    <div class="item2">
                        <p><b>South-East</b></p>
                    </div>
                    <div class="item2">
                        <p><b>South-West</b></p>
                    </div>

                </div>


                 <div id="pg">





                    <div style="float: left;margin-left: 20px;">
                        <h5><b>Occupacy</b></h5>
    
                    </div>
            <div class="property-type" style="">
                <div class="item2">
                    <p><b>1</b></p>
                </div>
                <div class="item2">
                    <p><b>2</b></p>
                </div>
                <div class="item2">
                    <p><b>3</b></p>
                </div>
                <div class="item2">
                    <p><b>4</b></p>
                </div>
                <div class="item2">
                    <p><b>4+</b></p>
                </div>


            </div>


            <div style="float: left;margin-left: 20px;">
                <h5><b>Boys/Girls</b></h5>

            </div>
            <div class="property-type" style="">
                <div class="item2">
                    <p><b>Boy</b></p>
                </div>
                <div class="item2">
                    <p><b>Girl</b></p>
                </div>
                <div class="item2">
                    <p><b>Both</b></p>
                </div>


            </div>


            <div style="float: left;margin-left: 20px;">
                <h5><b>Food</b></h5>

            </div>

            <div class="property-type">
                <div class="item"><img src="<?=base_url('assets/img/');?>restaurant (1).png" alt="">
                    <p><b>Food Provided</b></p>
                </div>
                <div class="item"><img src="<?=base_url('assets/img/');?>kitchen.png" alt="">
                    <p><b>Cooking Kitchen</b></p>
                </div>
                <div class="item"><img src="<?=base_url('assets/img/');?>chicken-leg.png" alt="">
                    <p><b>Non veg Allowed</b></p>
                </div>


            </div>
            <div style="float: left;margin-left: 20px;">
                <h5><b>Aminities</b></h5>

            </div>


            <div class="property-type">
                <div class="item"><img src="<?=base_url('assets/img/');?>air-conditioner.png" alt="">
                    <p><b>AC</b></p>
                </div>

                <div class="item"><img src="<?=base_url('assets/img/');?>laundry.png" alt="">
                    <p><b>Laundry</b></p>
                </div>
                <div class="item"><img src="<?=base_url('assets/img/');?>restaurant (1).png" alt="">
                    <p><b>Mess</b></p>
                </div>
                <div class="item"><img src="<?=base_url('assets/img/');?>power-supply.png" alt="">
                    <p><b>24 hr Power Supply</b></p>
                </div>
                <div class="item"><img src="<?=base_url('assets/img/');?>employees.png" alt="">
                    <p><b>Maintainance Staff</b></p>
                </div>
                <div class="item"><img src="<?=base_url('assets/img/');?>parking.png" alt="">
                    <p><b>Parking</b></p>
                </div>
                <div class="item"><img src="<?=base_url('assets/img/');?>wifi-signal.png" alt="">
                    <p><b>Wifi</b></p>
                </div>
                <div class="item"><img src="<?=base_url('assets/img/');?>toilet.png" alt="">
                    <p><b>Attached Washroom</b></p>
                </div>


            </div>


            <div style="float: left;margin-left: 20px;">
                <h5><b>Tennants Preffered</b></h5>

            </div>
            <div class="property-type" style="">
                <div class="item2">
                    <p><b>Professional</b></p>
                </div>
                <div class="item2">
                    <p><b>Students</b></p>
                </div>
                <div class="item2">
                    <p><b>Both</b></p>
                </div>


            </div>



        </div>




            </div>


            <div class="footer"
                style="width: 100%; z-index: 10;;height: 2px;background-color:white ;position: sticky;bottom: 0;justify-content: center;text-align: center;border-top: 2px solid rgb(216, 216, 216);">
                <button id="done"
                    style="border:2px solid grey;border: 1px solid gray;font-weight: bold;color: rgb(37, 37, 37);height: 50px;width: 30%;margin-top: 5px;">
                    Done
                </button>
            </div>



        </div>



    </div>
<!-- filer popup ends -->

        <!-- property area -->
        <div class="properties-area recent-property ">
            <div class="container">  
                <div class="row">
                     
                <div class="col-md-3 p0 padding-top-40">
                    <!-- <div class="blog-asside-right pr0">
                        <div class="panel panel-default sidebar-menu wow animated" >
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
                                            <div class="col-xs-6">

                                                
                                               
                                              
                                                    <select data-live-search="true" data-live-search-style="begins" id="filter_avail" class="selectpicker show-tick form-control" title="-Available for-">
                                                        <option value="all">All</option>
                                                        <option value="girl">Girls</option>
                                                        <option value="boy">Boys</option> 
                                                        <option value="combined">Girls/Boys(combined)</option> 
                                                    </select>
                
                                              
                                            </div>

                                            <div class="col-xs-6">

                                                
                                               
                                              
                                                    <select data-live-search="true" data-live-search-style="begins" id="filter_type" class="selectpicker show-tick form-control" title="-Type -">
                                                        <option value="">All</option>
                                                        <option value="hostel">Hostel</option>
                                                        <option value="flat">Flat</option>
                                                        <option value="house">House/Villa</option> 
                                                        <option value="plot">Plot</option> 
                                                        <option value="Others">Others</option> 
                                                    </select>
                
                                              
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-6">

                                                <select id="filter_city" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">
                                                    <option value="">Select Your City</option>
                                                    <option value="bhubaneswar">Bhubaneshwar</option>
                                                    <option value="cuttack">Cuttack</option>
                                                   
                                                </select>
                                            </div>
                                            <div class="col-xs-6">

                                                <select id="filter_status"data-live-search="true" data-live-search-style="begins" class="selectpicker show-tick form-control" title="-status-">
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
                                                <label for="price-range"><b>Price range (rs): <span id="min_max_slide">[min:max]</span></b></label>
                                                <input type="text" class="span2" value="" data-slider-min="500" 
                                                       data-slider-max="100000" data-slider-step="100" 
                                                       data-slider-value="[5000,50000]" id="price-range" ><br />
                                                <b class="pull-left color">500</b> 
                                                <b class="pull-right color">100000</b>                                                
                                            </div>
                                                                             
                                        </div>
                                    </fieldset>                                

                                  

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox"  name="filter_addon" value="fire"> Fire Place</label>
                                                </div> 
                                            </div>

                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox" name="filter_addon" value="mess"> Mess(food)</label>
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

                        <div class="panel panel-default sidebar-menu wow animated">
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
                    </div> -->
                    <div class="blog-asside-right pr0">
                        <div class="panel panel-default sidebar-menu">
                           
                            <div class="panel-body search-widget">
                                <form action="" class=" form-inline" id="form-inline">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12">

                                                <div class="col-md-4 col-lg-12">
                                                    <select data-live-search="true" data-live-search-style="begins"
                                                        id="sort_data" class="selectpicker show-tick form-control"
                                                        title="-SORT-">
                                                        <option value="recent">Most Recent</option>
                                                        <option value="high2low">Price (High-Low)</option>
                                                        <option value="low2high">Price (Low-High)</option>
                                                        
                                                        
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="price-range">Price range (rs): <span id="min_max_slide">[min:max]</span></b></label>
                                                <input type="text" class="span2" value="" data-slider-min="500"
                                                    data-slider-max="100000" data-slider-step="100"
                                                    data-slider-value="[5000,50000]" id="price-range"><br />
                                                <b class="pull-left color">500</b>
                                                <b class="pull-right color">100000</b>
                                            </div>
                                    
                                        </div>
                                    </fieldset>

                                    

                                    


                                    




                                    <fieldset>
                                        <div class="row" style="text-align: center;">
                                            <div>
                                                <button class="appy-filter btn-search-main"  style="border:2px solid rgb(189, 189, 189);background-color: white;height: 40px;width:80%;padding: 0px 15px 0px;border-radius: 5px;color:#353535;font-weight: bold;margin:auto;">
                                                   APPLY
                                                </button>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row"  id="search-smart" style="margin-top: -15px;text-align: center;">
                                            <div>
                                                <button class="appy-filter"   style="border:2px solid rgb(189, 189, 189);background-color: white;height: 40px;width:80%;padding: 0px 15px 0px;border-radius: 5px;color:#353535;font-weight: bold;margin:auto;">
                                                   More Filter
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu " id="recommended">
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
                                            <a href="single.html"><img src="assets/img/demo/small-property-1.jpg" ></a>
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
                    <!-- <div class="col-md-12 clear"> 
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
                            </ul>

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
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                        </div>
                    </div> -->
                    <div class="col-md-12 clear">



                        


                        <div class="col-xs-2 layout-switcher" style="margin: 0 -70px;">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i> </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>


                        </div>


                        
                        <!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-12 clear"> 
                        <div id="list-type" class="proerty-th">
                            

                                

                         
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

    $url_gets_category=$this->security->xss_clean($this->input->get('category'));
    $url_get_category=(isset($url_gets_category))?$url_gets_category:"";
?>

<script type="text/javascript">
    
    var key="<?php echo $this->security->get_csrf_hash(); ?>";    

   

    if($(window).width() >= 1024){

        $('.layout-grid').removeClass('active');
        $('.layout-list').addClass('active');
        $('#list-type').addClass('proerty-th-list');
        $('#list-type').removeClass('proerty-th');
        // alert("scree");
    }

    $("#link_import_style").attr("href","");

    // filter popup pc
    let filter = document.getElementsByClassName("more-filter")[0]
        let startmenu = document.getElementsByClassName("startmenu")[0]

        // filter.addEventListener("click", () => {
        //     if (startmenu.style.top == "230px") {
        //         startmenu.style.top = "-176em";
        //         console.log("is 230px");
                
        //     }
        //     else {
        //         startmenu.style.top = "230px";
        //         startmenu.style.zIndex=9;
        //         console.log(startmenu.style.top);
                

        //     }
        // });

        $(document).mouseup(function (e) {
            if ($(e.target).closest(".startmenu").length === 0) {
                startmenu.style.top = "-176em";
            }
            
        });
        $("#more-filter").click(function(e){
            if($(".startmenu").css("top")=="230px"){
                $(".startmenu").css("top","-196em");
            }else{
                $(".startmenu").css("top","230px");
                $(".startmenu").css("z-index","9");
            }   
        });

        
        // let background = document.getElementsByClassName("black-background")[0]

        // function myfunc() {
        //     if (background.style.display == "block") {
        //         background.style.display = "none"

        //     }
        //     else {
        //         background.style.display = "block"


        //     }
        // }

        //filter popup ends pc
    
    // console.log("1st key:"+key);
    var property_list="";

    var sort_by="sn";
    var sort_by_val="DESC"; 
    var i=1;

    $("#search_box").val("<?=$url_get;?>");

    if("<?=$url_get_category;?>"=="PG"||"<?=$url_get_category;?>"=="Rent"){
        $("#filter_status").removeAttr("title");
        $("#filter_status").val("<?=$url_get_category;?>".toLocaleLowerCase());
    }else if("<?=$url_get_category;?>"=="Hostel"||"<?=$url_get_category;?>"=="Plot"){
        $("#filter_type").removeAttr("title");
        $("#filter_type").val("<?=$url_get_category;?>".toLocaleLowerCase());
    }

    // console.log("<?=$url_get;?>");

function load_page_content(page_no){
    var addon_array = [];
    
    $("input:checkbox[name=filter_addon]:checked").each(function() {
        addon_array.push($(this).val());
    });
    
    var sort_data=$("#sort_data").val();
    if(sort_data=="high2low"){
        sort_by="price";
        sort_by_val="DESC";
    }else if(sort_data=="low2high"){
        sort_by="price";
        sort_by_val="ASC";
    }else if(sort_data=="recent"){
        sort_by="sn";
        sort_by_val="DESC";
    }

    $.ajax({
        url:"<?=base_url('main_helper/get_all_property_list');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key, 
            search_text:$("#search_box").val(),
            items_per_page:12,
            page_no:page_no,
            // filter_avail:$("#filter_avail").val(),
            filter_type:$("#filter_type").val(),
            // filter_city:$("#filter_city").val(),
            filter_status:$("#filter_status").val(),
            filter_price:$("#price-range").val(),
            filter_avail:"",
            filter_city:"",
            filter_min_bed:$("#filter_min_bed").val(),
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

                no_of_page=Math.ceil(data.row_count/12);
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

                    if(this.name.length>13){
                        dot_after_name="...";
                    }else{
                        dot_after_name="";
                    }

                    thumb_img=this.main_image.split('.').slice(0, -1).join('.')+"_thumb."+this.main_image.substr(this.main_image.lastIndexOf('.') + 1);


                    // property_list+='<div class="col-sm-6 col-md-4 p0">';
                    // property_list+='<div class="box-two proerty-item">';
                    // property_list+='<div class="item-thumb">';
                   
                    // property_list+='<a href="<?=base_url('property/');?>'+this.sn+"/"+slug_js(this.name)+'" ><img src="<?=base_url('utility/main_image');?>/'+thumb_img+'" style="height:225px; object-fit: cover;"></a>';
                   
                    // property_list+='</div>';
                    // property_list+='<div class="item-entry overflow">';
                    // property_list+='<h5><a href="<?=base_url('property/');?>'+this.sn+"/"+slug_js(this.name)+'"> '+this.name.slice(0,14)+''+dot_after_name+' </a></h5>';
                    // property_list+='<div class="dot-hr"></div>';
                    // property_list+= ' <div style="flex-direction: column;"></div>';
                    // property_list+='<span class="pull-left" style="margin-top: -7px;">'+capital_first(this.city)+' </span>';
                    // // property_list+='<span class="proerty-price pull-left" style="margin-top: -7px;"> Rs 300,000</span>';
                    // property_list+='<span class="proerty-price pull-right"> &#8377 '+this.price+'</span>';
                    // // property_list+='<span class="pull-left" style="font-weight: 400;"><b>2 BHK Apartment</b> for Rent in Kalinga Vihar,Bhubaneswar</span>';
                    // property_list+='<p style="display: none; overflow: hidden; text-overflow: ellipsis;max-height: 72px;-webkit-line-clamp: 2;">'+this.description+'</p>';
                    // property_list+='<div class="property-icon">';
                    // property_list+='<span style="font-size:22px;"><b> &#9893;</b></span><span style="text-transform: capitalize;"> ( '+type_change+' ) |</span>';
                    // property_list+='<span style="font-size:22px;"><b> &#9963;</b></span><span style="text-transform: capitalize;"> ( '+this.type+' ) |</span>';
                    // property_list+='<span style="font-size:22px;"><b> &#9983;</b></span><span style="text-transform: capitalize;"> ( '+this.status+' ) </span>';
                    // property_list+='</div>';
                    // property_list+='</div>';
                    // property_list+='</div>';
                    // property_list+='</div>';

                    //asdfghjkljhgfdsdfghjklkjdfghjk

                    property_list+='<div class="col-sm-6 col-md-4 p0">';
                    property_list+='<div class="box-two proerty-item">';
                    property_list+='<div class="item-thumb">';
                    property_list+='<a href="<?=base_url('property/');?>'+this.sn+"/"+slug_js(this.name)+'"><img src="<?=base_url('utility/main_image');?>/'+thumb_img+'" style="height:225px; max-width:330px; object-fit: cover;"></a>';
                    property_list+='</div>';
                    property_list+='<div class="item-entry overflow">';
                    property_list+='<h5><a href="<?=base_url('property/');?>'+this.sn+"/"+slug_js(this.name)+'">  '+this.name.slice(0,14)+''+dot_after_name+' </a></h5>';
                    property_list+='<div class="dot-hr"></div>';
                    property_list+='<div style="flex-direction: column;"></div>';
                    property_list+='<span class="proerty-price pull-left" style="margin-top: -7px;"> Rs '+this.price+'</span><br>';
                    property_list+='<span class="pull-left" style="font-weight: 400;"><b>'+this.min_bed+' BHK '+this.type+'</b> for ';
                    property_list+=this.status+' in '+this.city+'</span>';
                    property_list+='<span class="pull-left" style="font-weight: 400;"><b>Furnishing :</b>';
                    property_list+='Unfurnished <br></span>';
                    property_list+='<p style="display: none;">'+limit_words(100,this.description)+' <a';
                    property_list+=' href="<?=base_url('property/');?>'+this.sn+"/"+slug_js(this.name)+'">View Detailes</a> </p><br>';
                    property_list+='<div style="display: flex;margin-top: 30px;" id="property-btn" class="property-btn">';
                    property_list+='<span style=""><input class="more-filters" class="navbar-btn nav-button" style="padding: 10px 40px 10px;border-radius: 3px;width: 100%;font-weight: bold;border:2px solid rgb(189, 189, 189);background-color: rgba(255, 255, 255, 0.8);color: rgb(39, 39, 39);" type="submit" value="Contact"></span>';
                    property_list+='<span style="margin-left: 3px;"><input class="more-filters" class="navbar-btn nav-button " style="padding: 10px 40px 10px;border-radius: 3px;width: 100%;font-weight: bold;border:2px solid rgb(189, 189, 189);background-color: rgba(255, 255, 255, 0.8);color: rgb(39, 39, 39);"type="submit" value="Save Property"></span>';
                    property_list+='</div>';
                    property_list+='</div>';
                    property_list+='</div>';
                    property_list+='</div>';
  

                });

                $("#list-type").html(property_list);
                // console.log(property_list);
                if(no_of_page>1){
                    if(page_no>1){
                        no_of_page_code+='<li><a href="#" onclick="load_page_content('+(page_no-1)+')">Prev</a></li>';
                    }
                    
                    for(i=1;i<=no_of_page;i++){
                        
                        if(i==page_no){
                            no_of_page_code+='<li><a href="#" class="pagination_box" onclick="load_page_content('+i+')">'+i+'</a></li>';
                        }else{
                            no_of_page_code+='<li><a href="#" onclick="load_page_content('+i+')">'+i+'</a></li>';    
                        }
                        
                    }
                    if(page_no<no_of_page){
                        no_of_page_code+='<li><a href="#"  onclick="load_page_content('+(page_no+1)+')">Next</a></li>';
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



    $("#price-range").focus(function(){
        console.log("chagne");
    });

    function search_output(){
        search_box_url=$("#search_box").val();
        if(search_box_url!=""){
            window.history.replaceState(null, null, "<?=base_url('properties');?>?s="+$("#search_box").val());
        }
        

        load_page_content(1);
    }

    $(".btn-search-main").click(function(event) {
        event.preventDefault();
        search_output();
    });
    $("#main_search_form").submit(function(e){
        e.preventDefault();
        search_output();
    })


</script>
</body>
</html>

<!-- <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
 -->