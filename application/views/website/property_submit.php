<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shareshell | Property Listing</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
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
                                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small>
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
                                            <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
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
                                                    <label>Property name <small>(required)</small></label>
                                                    <input name="propertyname" type="text" class="form-control" placeholder="Super villa ..." id="property_name" >
                                                </div>

                                                <div class="form-group">
                                                    <label>Property price <small>(required)</small></label>
                                                    <input name="propertyprice" type="number" class="form-control" placeholder="3330000" id="property_price" >
                                                </div> 

                                                <div class="form-group">
                                                    <label>Property Address <small>(required)</small></label>
                                                    <input name="propertyaddress" type="text" class="form-control" placeholder="Plot:000, XyZ place" id="property_add">
                                                </div> 
                                                <div class="form-group">
                                                    <label>Telephone <small id="contact_error">(empty if you wanna use default phone number)</small></label>
                                                    <input name="propertycontact" type="number" class="form-control" placeholder="+1 473 843 7436" id="property_contact">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 1 -->

                                    <div class="tab-pane" id="step2">
                                        <h4 class="info-text"> How much your Property is Beautiful ? </h4>
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
                                                        <label>Available for :</label>
                                                        <select id="property_avail" name="property_avail" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Available for: ">
                                                            <option value="" selected>-Available For-</option>
                                                            <option value="girl">Girls</option>
                                                            <option value="boy">Boys</option> 
                                                            <option value="combined">Girls/Boys(combined)</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Property City :</label>
                                                        <select id="property_city" name="property_city" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                            <option value="" selected>-City-</option>
                                                            <option value="bhubaneswar">Bhubaneswar</option>
                                                           <!--  <option>Paris</option>
                                                            <option>Casablanca</option>
                                                            <option>Tokyo</option>
                                                            <option>Marraekch</option>
                                                            <option>kyoto , shibua</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Status  :</label>
                                                        <select id="property_status" name="property_status" class="selectpicker show-tick form-control"  data-live-search="true" data-live-search-style="begins" title="Status">
                                                            <option value="" selected> -Status- </option>
                                                            <option value="rent">Rent </option>
                                                            <option value="pg">PG</option>
                                                            <!-- <option>used</option>   -->

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Property Type  :</label>
                                                        <select id="property_type" name="property_type" class="selectpicker show-tick form-control">
                                                            <option value="" selected> -Type- </option>
                                                            <option value="hostel">Hostel </option>
                                                            <option value="flat">Flat </option>
                                                            <option value="house">House / Villa</option> 
                                                            <option value="plot">Plot</option>  
                                                            <option value="others">Others</option>  

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 padding-top-15">                                                   
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="property-geo">No. of Bed Rooms :</label>
                                                        <!-- input type no -->
                                                        <input name="property_rooms" type="text" class="form-control" placeholder="2 BHK" id="property_rooms">
                                                        
                                                    </div>
                                                </div>
                                                <!-- <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label for="price-range">Min baths :</label>
                                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                                               data-slider-max="600" data-slider-step="5" 
                                                               data-slider-value="[250,450]" id="min-baths" ><br />
                                                        <b class="pull-left color">1</b> 
                                                        <b class="pull-right color">120</b>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">

                                                    <div class="form-group">
                                                        <label for="property-geo">Property geo (m2) :</label>
                                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                                               data-slider-max="600" data-slider-step="5" 
                                                               data-slider-value="[50,450]" id="property-geo" ><br />
                                                        <b class="pull-left color">40m</b> 
                                                        <b class="pull-right color">12000m</b>
                                                    </div>
                                                </div>  -->  
                                            </div>
                                            <div class="col-sm-12 padding-top-15">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                            <input type="checkbox" id="fire_place" name="fire_place"> Fire Place(3100)       
                                                         </label>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="emergency_exit" name="emergency_exit"> Emergency Exit(200)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>                                                 
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                              <input type="checkbox" id="laundry" name="laundry"> Laundry(10073)

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>                                                 
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="mess" name="mess">Mess(food)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div> 
                                           <!--  <div class="col-sm-12 padding-bottom-15">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Laundry Room
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Jog Path
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Ceilings
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Dual Sinks
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <br>
                                        </div>
                                    </div>
                                    <!-- End step 2 -->

                                    <div class="tab-pane" id="step3">                                        
                                        <h4 class="info-text">Give us somme images and videos ? </h4>
                                        <div class="row">  
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="property-images">Chose Images :</label>
                                                    <input class="form-control" type="file" id="property-images" name="property-images">
                                                    <p class="help-block">Select multipel images for your property .</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6"> 
                                                <div class="form-group">
                                                    <label for="property-video">Property video :</label>
                                                    <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text" id="video_link">
                                                </div> 

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
                                        <h4 class="info-text"> Finished and submit </h4>
                                        <div class="row">  
                                            <div class="col-sm-12">
                                                <div class="">
                                                    <p>
                                                        <label><strong>Terms and Conditions</strong></label>
                                                        By accessing or using SHARESHELL services, such as 
                                                        posting your property advertisement with your personal 
                                                        information on our website you agree to the
                                                        collection, use and disclosure of your personal information 
                                                        in the legal proper manner
                                                    </p>

                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="policy_check" /> <strong>Accept termes and conditions.</strong>
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

<script type="text/javascript">

    var key="<?php echo $this->security->get_csrf_hash(); ?>";
    
    $("#loader").hide();

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
    var prop_address;
    var property_contact;

    var main_img;

    
$('#main_img_prev').click(function(){ $('#main_img').trigger('click'); });



    function get_all_inp_value(){
        prop_name=$("#property_name").val();
        prop_price=$("#property_price").val();
        prop_address=$("#property_add").val();
        prop_contact=$("#property_contact").val();
        main_img=$("#main_img").val();
    }


    function first_page_value_chk(){

        get_all_inp_value();
        
        if((onPage==1)&&prop_name==""||prop_price==""||prop_address==""||prop_contact==""||main_img==""){
            // $("#next_btn").css('opacity', '0.3').removeClass('btn-next');
            $("#next_btn").css('opacity', '0.3');
            $("#next_btn").attr('disabled', '');
            $("#next_btn").css({
                backgroundColor: '',
                color: '#215655'
            });

        }else{
            $("#next_btn").css('opacity', '1');
            $("#next_btn").removeAttr('disabled');


        }
    }


    first_page_value_chk();

    $("#property_name").keyup(function() {
        first_page_value_chk();
    });
    $("#property_price").keyup(function() {
        first_page_value_chk();
    });
    $("#property_add").keyup(function() {
        first_page_value_chk();
    });
    $("#property_contact").keyup(function() {
        first_page_value_chk();
    });
    $("#main_img").change(function() {
        first_page_value_chk();
    });
    

    function previewFile(input){
        var file = $("#main_img").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#main_img_prev").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }

    $("#main_img").change(function() {
        previewFile();
    });


    // $("#form_main_img").submit(function(event) {
    //     event.preventDefault();
    //         $.ajax({
    //             url:"<?=base_url('main_helper/insert_property_data');?>",
    //             type:"POST",
    //             async:false,
    //             data:new FormData(this),
    //             dataType:"json",
    //             processData:false,
    //             contentType:false,

    //             success:function(data){
    //                 key:data.key;
    //                 console.log(data);
    //             },
    //             error:function(data){
    //                 console.log(data);
    //             }
    //         });

    //         console.log(new FormData(this));
    // });


    //2nd page
    var prop_description;
    var prop_avail;
    var prop_city;
    var prop_status;
    var prop_type;
    var min_bed;
    // var min_bath;
    // var property_area;
    var fire_place;
    var emerg_exit;
    var laundry;
    var mess;
    var addon;


    function get_all_inp_value_two(){
        prop_description=$("#property_description").val();
        prop_avail=$("#property_avail").val();
        prop_city=$("#property_city").val();
        prop_status=$("#property_status").val();
        prop_type=$("#property_type").val();
        min_bed=$("#property_rooms").val();
        
        // fire_place=;
        // emerg_exit=;
        // laundry=;
        // mess=;
        addon="";
        if($("#fire_place").is(":checked")){
            addon+="fire,";
        }
        if($("#emergency_exit").is(":checked")){
            addon+="exit,";
        }
        if($("#laundry").is(":checked")){
            addon+="laundry,";
        }
        if($("#mess").is(":checked")){
            addon+="mess,";
        }
       
    }

    function second_page_value_chk(){
        get_all_inp_value_two();
        if((onPage==2) && (prop_description==""||prop_avail==""||prop_city==""||prop_status==""||prop_type=="")){
            $("#next_btn").css('opacity', '0.3');
            $("#next_btn").attr('disabled', '');
            $("#next_btn").css({
                backgroundColor: '',
                color: '#215655'
            });
            // console.log(addon);
        }else{
            $("#next_btn").css('opacity', '1');
            $("#next_btn").removeAttr('disabled');
            // console.log("else");


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
$("#property_status").on("change",function() {
    second_page_value_chk();    
 });
$("#property_type").on("change",function() {
    second_page_value_chk();    
 });


//third page
var video;

function get_all_value_3(){
    video=$("#video_link").val();
}
get_all_value_3();



function third_page_value_chk(){
    get_all_value_3();
}



//forth page
var policy_check;




// $("#policy_check").on('change', function() {
//     // $("#finish_btn").removeAttr('disabled');
//     alert("ck");
    
// });

// $("#finish_btn").attr('disabled', '');

// $("body").on('change', 'input[type="checkbox"]', function(event) {
//     alert("hellp");
// });

// $("#finish_btn").click(function(e) {
$("#form1").submit(function(e) {
    e.preventDefault();
    if($("#policy_check").is(":checked")){
        get_all_inp_value();
        get_all_inp_value_two();
        get_all_value_3();
        


             $.ajax({
                type:"post",
                url:"<?=base_url('main_helper/submit_property');?>",
                async:false,
                data:new FormData(this),
                //{
                //     "<?php echo $this->security->get_csrf_token_name();?>":key,
                //     prop_name:prop_name,
                //     prop_price:prop_price,
                //     prop_address:prop_address,
                //     prop_contact:prop_contact,
                //     main_img:main_img,
                //     prop_description:prop_description,
                //     prop_avail:prop_avail,
                //     prop_city:prop_city,
                //     prop_status:prop_status,
                //     prop_type:prop_type,
                //     min_bed:min_bed,
                //     addon:addon,
                //     video:video,
                //     // form_data:($('form')[0])
                // },
                dataType:"json",
                processData: false,
                contentType: false,
                beforeSend:function(){
                    $("#finish_btn").hide();
                    $("#loader").show();
                },
                success:function(data){
                        // console.log(data);
                    key=data.key;
                    console.log(data);
                    window.location.href = 'property_submited';
                },
        
                error:function(data){
                    console.log(data);
               }
            });
    }else{
        alert("not seletcted");
    } 

});






//general

    $("#next_btn").click(function() {
        if(onPage>=1&&onPage<4){
            onPage++;
        }
        // console.log(onPage);
        second_page_value_chk();

        get_all_inp_value_two();

    });

    $("#prev_btn").click(function() {
        if(onPage>1&&onPage<=4){
            onPage--;
        }
        first_page_value_chk();

        // console.log(onPage);
    });


</script>

</html>