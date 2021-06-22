<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <title>SHARESHELL| Home page</title>
        <meta name="shareshell" content="Making rental easy">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

 <!--        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
 -->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<!--         <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css"> -->
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

    </head>
    <body>


        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Hello : <span class="orange strong">YOUR NAME</span></h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header --> 

        <!-- property area -->
        <div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 profiel-container">

                        <form enctype="multipart/form-data" method="post" id="form_field">
                            
                            <div class="profiel-header">
                                <h3>
                                    <b>BUILD</b> YOUR PROFILE <br>
                                    <small>This information will let us know more about you.</small>
                                </h3>
                                <hr>
                                <!-- <div class="alert btn-finish btn-primary rounded wow fadeInRight" style="position: absolute; float: right; right:10px; top:10px;cursor: context-menu; " data-wow-delay="0.1s"><b>OTP send to your E-Mail</b></div> -->
                            </div>

                            <div class="clear">
                                <div class="col-sm-3 col-sm-offset-1">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <img src="" style=" height: 100%;object-fit: cover;" title="" id="show_image_field" />
                                            <div style=" margin-top:70px;"><b>Click and Upload</b></div>
                                            <input type="file" id="image_field" name="image_field">
                                        </div>
                                        <h6>Choose Picture</h6>
                                    </div>
<!--  -->
                                    <!-- <img src="" id="compressed_image" height="100" width="100" style="border:3px solid black;"> -->
                                  
<!--  -->

                                </div>

                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label>Username </label>&nbsp
                                        <b><span class="text-danger mr-1" id="signup_username_error"></span></b>
                                        <input name="username_field" type="text" class="form-control" placeholder="myusername" id="username_field">
                                    </div> 
                                    <div class="form-group">
                                        <label>First Name <small>(required)</small></label>
                                        <b><span class="text-danger mr-1" id="signup_first_name_error"></span></b>
                                        <input name="first_name_field" type="text" class="form-control" placeholder="first name" id="first_name_field">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name </label>
                                        <b><span class="text-danger mr-1" id="signup_last_name_error"></span></b>
                                        <input name="last_name_field" type="text" class="form-control" placeholder="last name" id="last_name_field">
                                    </div> 
                                    <div class="form-group">
                                        <label>Bio: <!-- <small>(required)</small> --></label> 
                                        <b><span class="text-danger mr-1" id="bio_error"></span></b>
                                        <!-- <input type="text" name="bio_field" class="form-control" placeholder="1234" id="bio_field"> -->
                                        <textarea rows="3" cols="" placeholder="Hiii! I have Awsm Properties to Sell. check my account for ......" class="form-control" id="bio_area" name="bio_area" ></textarea>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label>Email <small>(required)</small></label>
                                        <b><span class="text-danger mr-1" id="signup_email_error"></span></b>
                                        <input name="email_field" type="text" class="form-control" placeholder="abc123@xyz.com" id="email_field">
                                    </div>
                                    <div class="form-group">
                                        <label>Password : <small>(required)</small></label>
                                        <b><span class="text-danger mr-1" id="signup_password_error"></span></b>
                                        <input type="password" name="password_field" class="form-control" placeholder="******" id="password_field">
                                    </div>
                                    <div class="form-group">
                                        <label>Gender:</label> <b><span class="text-danger mr-1" id="signup_gender_error"></span></b>
                                        <select class="form-control" id="signup_gender" name="gender_field">
                                            <option value="" selected>Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <textarea rows="3" cols="" placeholder="sakunat kala, station road, khandak par ....." class="form-control" id="address_area" name="address_area" ></textarea>

                                    </div>
                                    
                                </div>  

                            </div>

                            <div class="clear">
                                <br>
                                <hr>
                                <br>
                                <div class="col-sm-5 col-sm-offset-1">
                                    
                                    <div class="form-group">
                                        <label>Website :</label>
                                        <b><span class="text-danger mr-1" id="website_username_error"></span></b>
                                        <input name="website_field" type="text" class="form-control" placeholder="https://yoursite.com/" id="website_field">
                                    </div>
                                    <div class="form-group">
                                        <b><span class="text-danger mr-1" id="phone_username_error"></span></b>
                                        <label>Phone :</label>
                                        <input name="phone_field" type="number" class="form-control" placeholder="+91 9090909090" id="phone_field">
                                    </div>

                                </div>  

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label>Facebook :</label>
                                        <b><span class="text-danger mr-1" id="signup_facebook_error"></span></b>
                                        <input name="facebook_field" type="text" class="form-control" placeholder="https://facebook.com/user" id="fb_field">
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter :</label>
                                        <b><span class="text-danger mr-1" id="signup_twitter_error"></span></b>
                                        <input name="twitter_field" type="text" class="form-control" placeholder="https://Twitter.com/@user" id="twitter_field">
                                    </div>
                                </div>
 
                            </div>
                            <div class="col-sm-5 col-sm-offset-1">
                                <br>
                                <div class="lds-ripple" style="display:none;" id="loader"><div></div><div></div></div>
                                <input type='submit' class='btn btn-finish btn-primary' name='field_submit' value='Finish' id="field_submit" >
                            </div>
                            <br>
                    </form>

                </div>
            </div><!-- end row -->

        </div>
    </div>

<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');

    $session_username="";
    if(isset($_GET['u'])){
        $session_username=$_GET['u'];
    }

    

    // $temp_session=$this->session->flashdata('item'); 


?>
<!-- image compressor starts -->
<script src="<?=base_url('assets/js');?>/JIC.js"></script>
<script>
    
    var output_format = null;
    var file_name = null;
    function readFile(evt) {
        var file = evt.target.files[0];
        var reader = new FileReader();
        reader.onload = function(event) {
            var i = document.getElementById("show_image_field");
            console.log(i);
                i.src = event.target.result;
                i.onload = function(){
                    
                    console.log("Image loaded");
                }
        };
        output_format = file.name.split(".").pop();
        file_name = file.name;
        console.log("Filename:" + file.name);
        console.log("Fileformat:" + output_format);
        console.log("Filesize:" + (parseInt(file.size) / 1024) + " Kb");
        console.log("Type:" + file.type);
        reader.readAsDataURL(file);
        $("#compress").show();
        return false;
    }
 // compress image
    // $( "#compress" ).click(function() {
        function compress_image_jic(){
        var source_image = document.getElementById("show_image_field");
        if (source_image.src == "") {
            alert("You must load an image first!");
            return false;
        }

        var quality = 30;
        
        console.log("process start...");
        console.log("process start compress ...");
        var compressed_image = document.getElementById("show_image_field");
        compressed_image.src = jic.compress(source_image,quality,output_format).src;
        // $("#upload").show();
        
    // });
}


    // upload imange
    // $( "#upload" ).click(function() {
        function upload_image_jic(new_name) {
        var compressed_image = document.getElementById("show_image_field");
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
        
        // console.log(compressed_image.src);
        console.log("process start upload ...");
        var x=jic.upload(compressed_image, "<?=base_url('main_helper/upload_test');?>", "file", new_name+"."+output_format,successCallback,errorCallback);

        console.log(x);
    }
        
    // });

document.getElementById("image_field").addEventListener("change", readFile, false);
</script>
<!-- image compressor ends  -->


<script type="text/javascript">  

var key="<?php echo $this->security->get_csrf_hash(); ?>"; 
    
    function isEmail(email) {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }

    function isURL(str) {
      var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
        '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
      return !!pattern.test(str);
}

    function blur_field(fieldName){
        $(fieldName).css('background', '#eeeeee');
        $(fieldName).focus(function() {
            $(fieldName).blur();
        });
    }

    function validate_data(datatype,userdata){
        var result;
        $.ajax({
            url:"<?=base_url('main_helper/signup_validate_data');?>",
            type:"POST",
            async:false,
            data:{
                "<?php echo $this->security->get_csrf_token_name();?>":key,
                datatype:datatype,
                data:userdata
                
                        
                },
                dataType:"json",
                success:function(data){
                    key=data.key;
                    // console.log(data);
                    result=data.data;
                },
                error:function(data){
                    console.log(data);
                    // result=data;
                }
        });
        return result;  
    }   

    var session_username="<?=$session_username;?>";
    var session_email="<?=$_GET['e'];?>";
    var session_password="<?=$_GET['p'];?>";

    if(isEmail(session_email)==false||session_password==""||(session_username!=""&&session_username.length<6)){
        window.location.href = "<?=base_url('main/log_user');?>"; 
        // console.log("red");
    }

    if(session_username!=""){
        $("#username_field").val(session_username);
        blur_field("#username_field");
           
    }

    $("#email_field").val(session_email);
    blur_field("#email_field");
    var emai_unique=validate_data('email',session_email);
    if(emai_unique==1){
        window.location.href = "<?=base_url('main/log_user');?>"; 
    }  
    
    $("#password_field").val(session_password);
    blur_field("#password_field");

function field_error_css(fieldName){
    $(fieldName).css('border','1px solid red');
    // $(fieldName).css('background','#fd94b4');
}

function field_error_cssRemove(fieldName){
    $(fieldName).css('border','1px solid #DADADA');
}


    function previewFile(){
        var file = $("#image_field").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#show_image_field").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }

    $("#image_field").change(function() {
        previewFile();
        console.log("chagne");
    });


var formFieldData_check=1; 

$("#form_field").submit(function(event) {
    event.preventDefault();

    // compress_image_jic();


    formFieldData_check=1;
    var isUrl_var=isURL($("#website_field").val());
    var new_website_field=$("#website_field").val();       

    if($("#username_field").val()!=""&&$("#username_field").val().length<6){
        // formFieldData_check=0;
        formFieldData_check=0;
        field_error_css("#username_field");
        $("#signup_username_error").html("Too Small");
    }else{
        result=validate_data('username',$("#username_field").val());
        if(result>0&&$("#username_field").val()!=""){
            $("#signup_username_error").html('Unavailable');
            formFieldData_check=0;
            field_error_css("#username_field");

        }else{
            field_error_cssRemove('#username_field'); 
            $("#signup_username_error").html('');
        }        
    }

    if($("#first_name_field").val()==""){
        formFieldData_check=0;
        field_error_css("#first_name_field");
        console.log("first name 0");
    }else{
        field_error_cssRemove('#first_name_field');
        
    }

    // console.log($("#signup_gender").val());

    if($("#signup_gender").val()==""){
        formFieldData_check=0;
        field_error_css("#signup_gender");
        // console.log("first name 0");
    }else{
        field_error_cssRemove('#signup_gender');
        
    }

    if($("#address_area").val()==""){
        formFieldData_check=0;
        field_error_css("#address_area");
    }else{
        field_error_cssRemove('#address_area');
    }

    // if($("#otp_field").val()==""){
    //     formFieldData_check=0;
    //     field_error_css("#otp_field");
    //     // console.log("first name 0");
    // }else if($("#otp_field").val().length!=4){
    //     $("#signup_otp_error").html("*Require 4 Digit");
    // }
    // else{
    //     field_error_cssRemove('#otp_field');
        
    // }


    if(new_website_field==""||isUrl_var==true){
        if(new_website_field!=""&&new_website_field.substring(0,4)!="http"){
            new_website_field="https://"+new_website_field;
        }
        
        field_error_cssRemove("#website_field");

    }else{
        formFieldData_check=0;
        field_error_css("#website_field");
        console.log("website 0");
    }


    var formData = new FormData(this);
    formData.append("<?= $this->security->get_csrf_token_name();?>",key);
    formData.append('website_field_new',new_website_field);
    
    var image_field_check=$("#image_field").val();
    formData.append('image_field_check',image_field_check);

    // for (var pair of formData.entries()){
    //     console.log(pair[0]+ ': '+ pair[1]); 
    // }

    if(formFieldData_check==0){
        // formData.delete('website_field');
        console.log(formFieldData_check);
    }else{

        $("#field_submit").hide();
        $("#loader").show();
        // return;

        setTimeout(function(){
            $.ajax({
            type:"POST",
            url:"<?=base_url('main_helper/submit_signup_data');?>",
            async:false,
            data: formData,
            dataType:"json",
            processData: false,
            contentType: false,
            success:function(data){
                key=data.key;
                if(image_field_check!=""){
                    compress_image_jic(); 
                    upload_image_jic(data.user_id);
                }
                    
                    // return;

                if(data.data==true){
                    window.location.href = "<?=base_url('main/account_created');?>"; 
                }else{
                    alert("Something Went Wrong.");
                }

               
                    
            },
            error:function(data){
                console.log(data);
                alert("something went wrong");
                    // result=data;
            }
        });
        },1000);

        
    }


});

</script>

</body>
</html>