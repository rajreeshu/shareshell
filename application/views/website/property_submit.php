<!DOCTYPE html> 
<html class="no-js" lang = "en"> 
    <head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shareshell | Property Listing</title>
        <meta name="author" content="shareshell">
        <meta name="keyword" content="shareshell, submit property, post property">
        <meta name="description" content="Post your property now to get Rented">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
        .lds-ripple {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px; 
}
.lds-ripple div {
  position: absolute;
  border: 4px solid  rgb(229, 233, 22);
  opacity: 1;
  border-radius: 50%;
  animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}
.lds-ripple div:nth-child(2) {
  animation-delay: -0.5s;
}
@keyframes lds-ripple {
  0% {
    top: 36px;
    left: 36px;
    width: 0;
    height: 0;
    opacity: 1;
  }
  100% {
    top: 0px;
    left: 0px;
    width: 72px;
    height: 72px;
    opacity: 0;
  }
}

.prev_img{
    height:100px;
    width:100px; 
    object-fit:cover; 
    border:2px solid #FFC500; 
    border-radius:5px; 
    margin:3px;
    margin-top:15px;
}

    </style>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?>   


        <!-- property area -->
        <div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">
                <div class="clearfix" > 
                    <div class="wizard-container"> 

                        <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                            <form  enctype="multipart/form-data" method="post" id="form1">                        
                                <div class="wizard-header">
                                    <h3>
                                        <b>Submit</b> YOUR PROPERTY <br>
                                        <small>Let's start with the basic information (with validation)</small>
                                    </h3>
                                </div>

                                <ul>
                                    <li><a href="#step1" data-toggle="tab">Step 1 </a></li>
                                    <li><a href="#step2" data-toggle="tab">Step 2 </a></li>
                                    <li><a href="#step3" data-toggle="tab">Step 3 </a></li>
                                    <li><a href="#step4" data-toggle="tab">Finished </a></li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane" id="step1">
                                        <div class="row p-b-15  ">
                                            <!-- <h4 class="info-text"> Let's start with the basic information (with validation)</h4> -->
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <h4 style="text-align: center;">Upload Main Image</h4>
                                                        <img src="<?=base_url();?>assets/img/default-property.jpg" class="picture-src" id="main_img_prev" title="" style="cursor: pointer;"/>
                                                   
                                                    <!-- <form  enctype="multipart/form-data"  method="post" id="form_main_img" > -->
                                                        <input type="file" id="main_img" name="main_img" accept=".jpg,.jpeg,.png" style="display: none;">

                                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                                        <!-- <input type="submit" name="submit_main_img" value="upload" id="submit_main_img"> -->

                                                    <!-- </form> -->


                                                   
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Property name </label>
                                                    <input name="propertyname" type="text" class="form-control" placeholder="Super villa ..." id="property_name" >
                                                </div>

                                                 

                                                
                                                    

                                                    <div class="form-group">
                                                        <label>Status  :</label>
                                                        <select id="property_status" name="property_status" class="selectpicker show-tick form-control" data-live-search-style="begins" title="Status">
                                                            <option value="" selected> -Status- </option>
                                                            <option value="rent">Rent </option>
                                                            <option value="pg">PG</option>
                                                            <option value="buy">Sell</option>  

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Property Type  :</label>
                                                        <select id="property_type" name="property_type" class="selectpicker show-tick form-control">
                                                            <option value="" selected> -Type- </option>
                                                            <option value="hostel">Hostel </option>
                                                            <option value="flat">Flat </option>
                                                            <option value="house">House / Villa</option> 
                                                            <option value="plot">Plot</option>  
                                                            <option value="commercial">Commercial</option>  
                                                            <option value="shop">Shop</option>  
                                                            <option value="others">Others</option>  

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                    <label>Property price <small id="small_price">/Month</small></label>
                                                    <input name="propertyprice" type="number" class="form-control" placeholder="3330000" id="property_price" >
                                                    <input type="checkbox" id="price_negotiable" name="price_negotiable"> <label><small>Negoitable</small></label>
                                                </div>

                                                    <div class="form-group">
                                                        <label>Your Detail  :</label>
                                                        <select id="owner_type" name="owner_type" class="selectpicker show-tick form-control" data-live-search-style="begins" title="Status">
                                                            <option value="" selected> -Your Detail- </option>
                                                            <option value="owner">Owner </option>
                                                            <option value="agent">Agent</option>
                                                            <option value="builder">Builder</option>  

                                                        </select>
                                                    </div>
                                                

                                               
                                                <div class="form-group">
                                                    <label>Phone no. <small id="contact_error"><a href="" id="use_default_no">(Click to use Your Default Contact Number)</a></small></label>
                                                    <input name="propertycontact" type="number" class="form-control" placeholder="+91 473 843 7436" id="property_contact">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 1 -->

                                    <div class="tab-pane tab-pane-step-2" id="step2">
                                        <h4 class="info-text"> Your Property Details? </h4>
                                        <div class="row">
                                            <div class="col-sm-12"> 
                                                <div class="col-sm-12"> 
                                                    <div class="form-group">
                                                        <label>Property Description :</label>
                                                        <textarea name="description" class="form-control" id="property_description" rows="8"></textarea>
                                                    </div> 
                                                </div> 
                                            </div>

                                            <div class="col-sm-12">

                                            <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Property City :</label>
                                                        <select id="property_city" name="property_city" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                            <option value="" selected>-City-</option>
                                                            <option value="bhubaneswar">Bhubaneswar</option>
                                                            <option value="cuttack">Cuttack</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Available for :</label>
                                                        <select id="property_avail" name="property_avail" class="selectpicker" data-live-search-style="begins" title="Available for: ">
                                                            <option value="" selected>-Available For-</option>
                                                            <option value="girl">Girls</option>
                                                            <option value="boy">Boys</option> 
                                                            <option value="combined">Girls/Boys(combined)</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                

                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Furnishing :</label>
                                                        <select id="property_furnish" name="property_furnish" class="selectpicker" data-live-search-style="begins" title="Furnish type">
                                                            <option value="" selected>-Select-</option>
                                                            <option value="furnished">Furnished</option>
                                                            <option value="semi furnished">Semi Furnished</option>
                                                            <option value="unfurnished">Un-Furnished</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Food(Veg/Non-Veg) :</label>
                                                        <select id="property_veg" name="property_veg" class="selectpicker"  data-live-search-style="begins" title="Select your city">
                                                            <option value="" selected>-Select-</option>
                                                            <option value="veg">Veg Only</option>
                                                            <option value="non-veg">Non-Veg Allowed</option>
                                                            
                                                           
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Property Facing : <small>(Optional)</small></label>
                                                        <select id="property_facing" name="property_facing" class="selectpicker" data-live-search-style="begins" title="Select your city">
                                                            <option value="" selected>-Direction-</option>
                                                            <option value="north">North</option>
                                                            <option value="south">South</option>
                                                            <option value="east">East</option>
                                                            <option value="west">West</option>
                                                            <option value="north-east">North-East</option>
                                                            <option value="north-west">North-West</option>
                                                            <option value="south-east">South-East</option>
                                                            <option value="south-west">South-West</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>
                                            <div class="col-sm-12 padding-top-15">                                                   
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="property-geo">Bedrooms (BHK) : </label>
                                                        <!-- input type no -->
                                                        <input name="property_rooms" type="number" class="form-control" placeholder="2" id="property_rooms">
                                                        
                                                    </div>
                                                </div>  
                                                
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="property-geo">No. of Bathrooms :</label>
                                                        <!-- input type no -->
                                                        <input name="property_bathrooms" type="number" class="form-control" placeholder="2" id="property_bathroom">
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="property-geo">No. of Balconies :</label>                                       
                                                        <input name="property_balcony" type="number" class="form-control" placeholder="2" id="property_balcony">
                                                        
                                                    </div>
                                                </div> 

                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="property-geo">Floor No. :</label>
                                                        <!-- input type no -->
                                                        <input name="property_floor_no" type="number" class="form-control" placeholder="2" id="property_floor_no">
                                                        
                                                    </div>
                                                </div> 

                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="property-geo">Area ( sq ft. ) : <small>(optional)</small> </label>
                                                        <!-- input type no -->
                                                        <input name="property_area" type="number" class="form-control" placeholder="960" id="property_area">
                                                        
                                                    </div>
                                                </div> 

                                                

                                                <div class="col-sm-2 pg-special-tab">
                                                    <div class="form-group">
                                                        <label>Tenauts (Prefered) :</label>
                                                        <select id="property_prefered" name="property_prefered" class="selectpicker"  data-live-search-style="begins" title="Select your city">
                                                            <option value="" selected>-Select-</option>
                                                            <option value="professional">Professional</option>
                                                            <option value="students">Students</option>
                                                            <option value="Everyone">All</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Complete Address</label>
                                                    <input name="propertyaddress" type="text" class="form-control" placeholder="Plot:000, XyZ place" id="property_address">
                                                </div> 
                                                </div>

                                                <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Landmark <small>(Optional)</small> </label>
                                                    <input name="property_landmark" type="text" class="form-control" placeholder="near ABC place" id="property_landmark">
                                                </div> 
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="property-geo">Occupacy (Sharing With) :</label>                                       
                                                        <input name="property_sharing" type="number" class="form-control" placeholder="2" id="property_sharing">
                                                        
                                                    </div>
                                                </div> 
                                               

                                            </div>
                                            <div class="col-sm-12 padding-top-15">
                                        
                                            <div class="col-sm-12">
                                                    <div class="form-group" style="margin-top:-20px; margin-bottom:-15px;">                                                      
                                                            <label>
                                                            Aminities : 
                                                         </label>
                                                    </div>
                                                </div> 

                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                            <input type="checkbox" id="ame_fire_place" name="fire_place"> fire extinguisher   
                                                         </label>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="ame_emergency_exit" name="emergency_exit"> Emergency Exit
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>                                                 
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                              <input type="checkbox" id="ame_laundry" name="laundry"> Laundry

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>                                                 
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="ame_mess" name="mess"> Mess (food)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 

                                                                                                
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="ame_club" name="club"> Club House
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                                                                 
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="ame_gym" name="gym"> Gym
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 

                                                                                                
                                                

                                                                                              
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="ame_garden" name="garden"> Garden
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 

                                                                                             
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="ame_parking" name="parking"> Parking
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 

                                                                                                
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="ame_pool" name="pool"> Swimming Pool
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="ame_wifi" name="wifi"> Wifi
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="ame_staff" name="staff"> Maintainance Staff
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 

                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="ame_ground" name="ground"> Play Ground
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 
                                                                                               
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="ame_electricity" name="electricity"> 24 Hrs Power Supply
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 

                                            </div> 

                                            <!-- pg special tab -->
                                           
                                             <div class="col-sm-12 padding-bottom-15 pg-special-tab">
                                             <div class="col-sm-12">
                                                    <div class="form-group" style="margin-top:0px; margin-bottom:-15px;">                                                      
                                                            <label>
                                                           Others  :
                                                         </label>
                                                    </div>
                                                </div>    

                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="oth_attach_kitchen" name="attach_kitchen"> Attached Kitchen
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="oth_attach_bathroom" name="attach_bathroom"> Attached Bathroom
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <!-- End step 2 -->

                                    <div class="tab-pane" id="step3">                                        
                                        <h4 class="info-text">Give us some images and videos. </h4>
                                        <div class="row">  
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="property-images">Select Images :</label>
                                                    <div>
                                                        <span id="prev_multi_image">
                                                        <!-- <img src="" id="prev_img" height="100" width="100"> -->
                                                        </span>
                                                        <img src="<?=base_url('assets/img/add.png');?>" id="add_image_click" class="prev_img">
                                                    </div>
                                                    
                                                    <span id="for_multiple_image">
                                                        <!-- <input class="form-control property-images" type="file" id="" name="property-images" style="margin-top:10px;">
                                                        <input class="form-control property-images" type="file" id="" name="property-images" style="margin-top:10px;">
                                                        <input class="form-control property-images" type="file" id="" name="property-images" style="margin-top:10px;">
 -->                                                    </span>
                                                    
                                                    <!-- <p class="help-block">Select multipel images for your property .</p> -->
                                                </div>
                                            </div>
                                            <div class="col-sm-6"> 
                                                <div class="form-group">
                                                    <label for="property-video">Property video :</label>
                                                    <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text" id="video_link">
                                                </div> 
<!-- <button id="read">Read</button>
<button id="compress">compress</button>
<button id="upload">Upload</button> -->

                                               <!--  <div class="form-group">
                                                    <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <!--  End step 3 -->


                                    <div class="tab-pane" id="step4">                                        
                                        <h4 class="info-text"> Finish and Submit </h4>
                                        <div class="row">  
                                            <div class="col-sm-12">
                                                <div class="">
                                                    <p>
                                                        <label><strong>Terms and Conditions</strong></label>
                                                        By accessing or using SHARESHELL services, such as 
                                                        posting your property advertisement with your personal 
                                                        information on our website you agree to the
                                                        collection, use and disclosure of your personal information 
                                                        in the legal proper manner.
                                                    </p>

                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="policy_check" /> <strong>Accept terms and conditions.</strong>
                                                        </label>
                                                    </div> 

                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 4 -->

                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-default' name='next' value='Next' id="next_btn" />
                                        <input type='submit' class='btn btn-finish btn-primary ' name='finish' value='Finish' id="finish_btn" />
                                        <div class="lds-ripple" style="" id="loader"><div></div><div></div></div>
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-default' name='previous' value='Previous' id="prev_btn" />
                                    </div>
                                    <div class="clearfix"></div>                                            
                                </div>  
                            </form>
                        </div>
                        <!-- End submit form -->
                    </div> 
                </div>
            </div>
        </div>

<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');
?>
          <script src="<?=base_url();?>assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/js/jquery.validate.min.js"></script>
        <script src="<?=base_url();?>assets/js/wizard.js"></script>
      
      
</body>


<!-- image compressor starts -->
<script src="<?=base_url('assets/js');?>/JIC.js"></script>
<script>
    var output_format = null;
    var file_name = null;
    function readFile(evt,prev) {
        console.log(prev);
        var file = evt.target.files[0];
        var reader = new FileReader();
        reader.onload = function(event) {
            var i = document.getElementById(prev);
            console.log(i);
                i.src = event.target.result;
                i.onload = function(){
                    
                    console.log("Image loaded");
                }
        };
        output_format = file.name.split(".").pop();
        file_name = file.name;
        reader.readAsDataURL(file);

        return false;
    }

        function compress_image_jic(prev,ext){
        var source_image = document.getElementById(prev);
        console.log('Source Image: '+prev);
        if (source_image.src == "") {
            alert("You must load an image first!");
            return false;
        }

        var quality = 30;
        
        console.log("process start...");
        console.log("process start compress ...");
        var compressed_image = document.getElementById(prev);
        compressed_image.src = jic.compress(source_image,quality,ext).src;
}

    function upload_image_jic(prev,file_transfer) {
        var compressed_image = document.getElementById(prev);
        if (compressed_image.src == "") {
            alert("You must compress image first!");
            return false;
        }

        var successCallback= function(response){
            console.log("image uploaded successfully! :)");
            console.log(response);       
        }

        var errorCallback= function(response){
            console.log("image Filed to upload! :)");
            console.log(response); 
        }
        
        console.log("process start upload ...");
        jic.upload(compressed_image, "<?=base_url('main_helper/upload_multi_prop_img');?>", "file", file_transfer,successCallback,errorCallback);
    }
   </script>
<!-- image compressor ends  -->


<script type="text/javascript">

    var key="<?php echo $this->security->get_csrf_hash(); ?>";
    var property_insert_id="";

    $("#loader").hide();

    window.onbeforeunload = function() {
        return "All Data will be lost if you leave the page, are you sure?";
    };
    // $("#policy_check").hide();

    // $("#finish_btn").css('opacity', '0.3');
    // $("#finish_btn").attr('disabled', '');
    // $("#finish_btn").css({
    //     backgroundColor: '',
    //     color: '#215655'
    // });

    var onPage=1;
    var inp_data;
//page 1
    var prop_name;
    var property_price;
    var prop_status;
    var prop_type;
    var owner_type;
    var property_contact;

    var main_img;

    var default_phone_no="<?=$this->db->select('phone')->where('sn',$this->security->xss_clean($this->session->userdata('user_id_shareshell')))->get('user_detail')->row()->phone;?>";
    
    if(default_phone_no==""){
        $("#use_default_no").html("");
    }
    $("#use_default_no").click(function(e) {
        e.preventDefault();
        $("#property_contact").val(default_phone_no);
        first_page_value_chk();
    });

$('#main_img_prev').click(function(){ $('#main_img').trigger('click'); });



    function get_all_inp_value(){
        prop_name=$("#property_name").val();
        prop_price=$("#property_price").val();
        prop_status=$("#property_status").val();
        prop_type=$("#property_type").val();
        owner_type=$("#owner_type").val();
        prop_contact=$("#property_contact").val();
        main_img=$("#main_img").val();
        
    }


    function first_page_value_chk(){

        get_all_inp_value();
        
        if((onPage==1)&&(prop_name==""||prop_price==""||prop_status==""||prop_type==""||owner_type==""||prop_contact==""||main_img=="")){
            // $("#next_btn").css('opacity', '0.3').removeClass('btn-next');
            $("#next_btn").css('opacity', '0.3');
            
///////////            //temporarly removed
            // $("#next_btn").attr('disabled', '');
/////////// 
            $("#next_btn").css({
                backgroundColor: '',
                color: '#215655'
            });

        }else{
            $("#next_btn").css('opacity', '1');
            $("#next_btn").removeAttr('disabled');


        }
        // console.log("onPage:"+onPage+" 1:"+prop_name+" 2:"+prop_price+" 3:"+prop_status+" 4:"+prop_type+" 5:"+owner_type+" 6:"+prop_contact+" 7:"+main_img);
    }


    first_page_value_chk();

    $("#property_name").keyup(function() {
        first_page_value_chk();
    });
    $("#property_price").keyup(function() {
        first_page_value_chk();
    });
    $("#property_status").on("change",function() {
        if($(this).val()=="pg"){
            $(".pg-special-tab").show();
        }else{
            $(".pg-special-tab").hide();
        }

        if($(this).val()=="buy"){
            $("#small_price").html("");
        }else{
            $("#small_price").html("/Month")
        }
        

        first_page_value_chk();  

     });
    $("#property_type").on("change",function() {
        first_page_value_chk();    
     });
    $("#owner_type").change(function() {
        first_page_value_chk();
    });
    $("#property_contact").keyup(function() {
        first_page_value_chk();
    });
    $("#main_img").change(function() {
        first_page_value_chk();
    });
    

    function previewFile(img,prev){
        var file = $(img).get(0).files[0];
        console.log(file);
 
        if(file){

            var reader = new FileReader();

            reader.onload = function(){
                // console.log(prev);
                $(prev).attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
    var main_img_event;
    $("#main_img").change(function(event) {
        main_img_event=event;
        previewFile("#main_img","#main_img_prev");
    });



    //2nd page
    var prop_description;
    var prop_avail;
    var prop_city;
    var prop_furnish;
    var prop_facing;
    var min_bed;
    var min_bath;
    var min_balcony;
    var floor_no;
    var area_sq_ft;
    var prop_prefered;
    var prop_address;
    var prop_landmark;
    var prop_sharing;
    var ame_fire_place;
    var ame_emerg_exit;
    var ame_laundry;
    var ame_mess;
    var ame_club;
    var ame_gym;
    var ame_garden;
    var ame_parking;
    var ame_pool;
    var ame_wifi;
    var ame_staff;
    var ame_ground;
    var ame_electricity;
    var oth_attach_kitchen;
    var oth_attach_bathroom;
    var addon;
    


    function get_all_inp_value_two(){
        prop_description=$("#property_description").val();
        prop_avail=$("#property_avail").val();
        prop_city=$("#property_city").val();
        prop_furnish=$("#property_furnish").val();
        prop_facing=$("#property_facing").val();
        min_bed=$("#property_rooms").val();
        min_bath=$("#property_bathroom").val();
        min_balcony=$("#property_balcony").val();
        floor_no=$("#property_floor_no").val();
        area_sq_ft=$("#property_area").val();
        prop_prefered=$("#property_prefered").val();
        prop_veg=$("#property_veg").val();
        prop_address=$("#property_address").val();
        prop_landmark=$("#property_landmark").val();
        prop_sharing=$("#property_sharing").val();

        addon="";

        if($("#ame_fire_place").is(":checked")){
            addon+="fire,";
        }
        if($("#ame_emergency_exit").is(":checked")){
            addon+="exit,";
        }
        if($("#ame_laundry").is(":checked")){
            addon+="laundry,";
        }
        if($("#ame_mess").is(":checked")){
            addon+="mess,";
        }
        if($("#ame_club").is(":checked")){
            addon+="club,";
        }
        if($("#ame_gym").is(":checked")){
            addon+="gym,";
        }
        if($("#ame_garden").is(":checked")){
            addon+="garden,";
        }
        if($("#ame_parking").is(":checked")){
            addon+="parking,";
        }
        if($("#ame_pool").is(":checked")){
            addon+="pool,";
        }
        if($("#ame_wifi").is(":checked")){
            addon+="wifi,";
        }
        if($("#ame_staff").is(":checked")){
            addon+="staff,";
        }
        if($("#ame_ground").is(":checked")){
            addon+="ground,";
        }
        if($("#ame_electricity").is(":checked")){
            addon+="electricity,";
        }
        if($("#oth_attach_kitchen").is(":checked")){
            addon+="attach_kitchen,";
        }
        if($("#oth_attach_bathroom").is(":checked")){
            addon+="attach_bathroom,";
        }
       
    }

    function second_page_value_chk(){
        get_all_inp_value_two();
        if((onPage==2) && (prop_description==""||prop_avail==""||prop_city==""||prop_furnish==""||min_bed==""||min_bath==""||min_balcony==""||floor_no==""||prop_veg==""||prop_address=="")){
            $("#next_btn").css('opacity', '0.3');
////////
            // $("#next_btn").attr('disabled', '');
////////            
            $("#next_btn").css({
                backgroundColor: '',
                color: '#215655'
            });
        }else{
            $("#next_btn").css('opacity', '1');
            $("#next_btn").removeAttr('disabled');
        }

        // console.log(addon);
    }
 
 $("#property_description").keyup(function() {
     second_page_value_chk();
 });
 $("#property_avail").on("change",function() {
        second_page_value_chk();
 });
 $("#property_city").on("change",function() {
    second_page_value_chk();    
 });
 $("#property_furnish").on("change",function() {
    second_page_value_chk();    
 });
 $("#property_veg").on("change",function() {
    second_page_value_chk();    
 });
 $("#property_rooms").keyup(function() {
     second_page_value_chk();
 });
 $("#property_bathroom").keyup(function() {
     second_page_value_chk();
 });
 $("#property_balcony").keyup(function() {
     second_page_value_chk();
 });
 $("#property_floor_no").keyup(function() {
     second_page_value_chk();
 });
 $("#property_address").keyup(function() {
     second_page_value_chk();
 });


//third page
var video;

var property_image_no=1;

var arr_prop_img=[];

var multiple_image_html='<input class="form-control property-images" type="file" accept="image/*" id="property-images'+property_image_no+'" name="prs'+property_image_no+'" style="margin-top:10px; display:none;">';

multiple_image_html+='<input type="hidden" name="property_image_no" id="property_image_no">';

$("#for_multiple_image").html(multiple_image_html);

var events_arr=[];

    $(document).on("change",".property-images",function(event){
    // console.log('hello triggered');
    if($(this).val()!=""&&property_image_no<16){
        events_arr.push(event);
        arr_prop_img.push(property_image_no);
        // console.log(arr_prop_img);

        // console.log(events_arr);
        $("#prev_multi_image").append('<span><img src="<?=base_url();?>assets/img/default-property.jpg" id="prev_img'+property_image_no+'" class="prev_img" ><span class="remove_img_multi" id="remove_img_multi_'+property_image_no+'" data-remid="'+property_image_no+'" style="cursor: pointer;position:absolute; margin-left:-33px; margin-top:8px; height:25px; width:25px; padding-left:7px; padding-top:0px; color:#000; background:#fdc600; border-radius:3px; font-weight:bold; border:1px solid grey;"><span style=" position:absolute; margin-top:-2px;">X</span></span><span style="width:100px; height:30px; background:#fdc600;color:white; font-weight:bold; padding-left:5px; padding-right:5px; position:relative; top:50px; left:-82px; cursor:pointer;" class="upload_img_cl">Upload</span></span>');

        previewFile("#property-images"+property_image_no,"#prev_img"+property_image_no);
       // $("#prev_img"+property_image_no).css('opacity',0.5);
       $("#property-images"+property_image_no).hide();

        property_image_no++;



        $("#for_multiple_image").append('<input class="form-control property-images" type="file" accept="image/*" id="property-images'+property_image_no+'" name="prs'+property_image_no+'" style="margin-top:10px; display:none;">');
        $("#property_image_no").val(property_image_no);
        
    }
    

});
$(document).on('click','.upload_img_cl',function(){
    console.log("clicked");
    var remid=$(this).siblings(".remove_img_multi").data('remid');
    console.log(remid);

    var j=remid-1;
                    // while(j<arr_prop_img.length){
                        filee=events_arr[arr_prop_img[j]-1].target.files[0];
                        file_name_tra=filee.name;
                        ext = filee.name.split(".").pop();
                        // compress_image_jic('prev_img'+arr_prop_img[j],ext);
                        // var tick = function(j) {
                        //     return function() {
                                // console.log(j);
                                compress_image_jic('prev_img'+arr_prop_img[j],ext); 
                                upload_image_jic('prev_img'+arr_prop_img[j],insert_id_submit_property+"_"+arr_prop_img[j]+"."+ext); 

                                $(this).css('background-color',"");
                                $(this).html("&#9989;");
                                // console.log($(this));
                        //     }
                        // };
                        // setTimeout(tick(j), 1000 * j);
                        console.log('prev_img'+arr_prop_img[j]);
                        // upload_image_jic('prev_img'+j);
                        j++;
                    // } 
});

    $(document).on("click",".remove_img_multi",function(){
        var rem_id=$(this).data("remid");
        $("#prev_img"+rem_id).remove();
        $("#remove_img_multi_"+rem_id).remove();

        arr_prop_img.splice(arr_prop_img.indexOf(rem_id),1);
        console.log(arr_prop_img);

    });


    $("#add_image_click").click(function(){
        $("#property-images"+property_image_no).click();
    });


function get_all_value_3(){
    video=$("#video_link").val();
}
get_all_value_3();



function third_page_value_chk(){
    get_all_value_3();
}



//forth page
var policy_check;


$("#form1").submit(function(e) {
    e.preventDefault();
    window.onbeforeunload = function () {}
    if($("#policy_check").is(":checked")){
        get_all_inp_value();
        get_all_inp_value_two();
        get_all_value_3();

        var formData=new FormData(this);
            $("#finish_btn").hide();
            $("#loader").show();

            setTimeout(function() {
                $.ajax({
                type:"post",
                url:"<?=base_url('main_helper/submit_property');?>",
                async:false,
                data:formData,
                dataType:"json",
                processData: false,
                contentType: false,
                beforeSend:function(){
                    // $("#finish_btn").hide();
                    // $("#loader").show();
                },
                success:function(data){
                    key=data.key;
                    
                    main_img_filee=main_img_event.target.files[0];
                    main_img_file_name_tra=main_img_filee.name;
                    main_img_ext=main_img_filee.name.split(".").pop();

                    
                    // upload_image_jic('main_img_prev',data.property_id+"."+main_img_ext); 

                    var j=0;
                    while(j<arr_prop_img.length){
                        filee=events_arr[arr_prop_img[j]-1].target.files[0];
                        file_name_tra=filee.name;
                        ext = filee.name.split(".").pop();
                        // compress_image_jic('prev_img'+arr_prop_img[j],ext);
                        // var tick = function(j) {
                        //     return function() {
                                // console.log(j);
                                upload_image_jic('prev_img'+arr_prop_img[j],data.property_id+"_"+arr_prop_img[j]+"."+ext); 
                       
                        //     }
                        // };
                        // setTimeout(tick(j), 1000 * j);
                        console.log('prev_img'+arr_prop_img[j]);
                        // upload_image_jic('prev_img'+j);
                        j++;
                    } 
                    window.location.href = 'property_submited';
                    console.log(data);
                },
        
                error:function(data){
                    console.log(data);
               }
            });
            },1000);  
    }else{
        alert("Click the CheckBox to Continue..");
    } 
});

//general
var insert_id_submit_property="";
    $("#next_btn").click(function() {
        if(onPage==1){
            main_img_filee=main_img_event.target.files[0];
            main_img_file_name_tra=main_img_filee.name;
            main_img_ext=main_img_filee.name.split(".").pop();
            compress_image_jic('main_img_prev',main_img_ext); 
        }
        if(onPage==2&&property_insert_id==""){
            $.ajax({
                url:"<?=base_url('main_helper/insert_id_submit_property');?>",
                type:"POST",
                async:false,
                data:{
                    "<?php echo $this->security->get_csrf_token_name();?>":key,
                    // "property_id":sn
                    },
                dataType:"json",
                success:function(data){
                    key=data.key;
                    insert_id_submit_property=data.prop_id;
                    upload_image_jic('main_img_prev',data.prop_id+"."+main_img_ext); 
                    console.log(data);
                    // return;
                    
                },
                error:function(data){
                    console.log(data);
                    // result=data;
                }
            });
        }
        if(onPage==3){
            var j=0;
                    while(j<arr_prop_img.length){
                        filee=events_arr[arr_prop_img[j]-1].target.files[0];
                        file_name_tra=filee.name;
                        ext = filee.name.split(".").pop();
                        compress_image_jic('prev_img'+arr_prop_img[j],ext); 
                        // upload_image_jic('prev_img'+arr_prop_img[j],data.property_id+"_"+arr_prop_img[j]+"."+ext); 
                       // upload_image_jic('prev_img'+j);
                        j++;
                    } 
                    console.log(arr_prop_img.length);
        }

        if(onPage>=1&&onPage<4){
            onPage++;
        }
        console.log(onPage);
        
        second_page_value_chk();
        get_all_inp_value_two();
    });

    $("#prev_btn").click(function() {
        if(onPage>1&&onPage<=4){
            onPage--;
        }
        first_page_value_chk();
    });


</script>

</html>