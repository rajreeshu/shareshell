<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SHARESHELL| Profile</title>
    <meta name="shareshell" content="Making rental easy">
    <meta name="author" content="Kimarotec">
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>-->

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
 <!--   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
</head>

<style>
    .form-group img{
        height:20px;
        margin-left:20px;
        cursor: pointer;
        opacity: 0.4;
    }
    .form-group label{
      
    }
    .input{
        display:none;
    }
    
</style>

<body>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?>  

    <div class="page-head">
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title">Hello : <span class="orange strong" id="title_name"></span></h1>
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

                    
                        <div class="profiel-header">
                            <h3>
                                <b> YOUR PROFILE</b><br>
                                <small>This information will let us know more about you.</small>
                            </h3>
                            <hr>
                        </div>
 
                        <div class="clear">
                            <div class="col-sm-3 col-sm-offset-1">
                                <div class="picture-container">
                                    <div class="picture" style="height:auto; background-color: white; border: 0px;">
                                        
                                        <img src="<?=base_url('assets/img/avatar_boy.jpg');?>" class="picture-src" id="PicturePreview" title="" style="object-fit: cover; border-radius: 3px; border:2px solid #fdc600;"/>
                                        <!-- <input type="file" id="wizard-picture"> -->
                                    </div>
                                    <h5>
                                        <p id="user_bio" style="text-align:left; margin-top: -30px; padding-left: 5px ; font-family: Gill Sans Extrabold, sans-serif; font-size: 12px; color: grey;"></p>
                                    </h5>
                                </div>
                            </div>

                            <div class="col-sm-6 padding-top-25">

                                <div class="form-group">
                                    <label id="labelname">Name: <span style="color:#999999;" id="user_name"></span></label>
                                    
                                    <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="btn-name">
                                    <div id="input-name" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div>
                                   

                                </div>
                                <!-- <div class="form-group">
                                    <label>Last Name: </label>

                                </div> -->
                                <div class="form-group">
                                    <label>Email: <span style="color:#999999;" id="user_email"></span></label>
                                    <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-email">
                                    <div id="input-email" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div>


                                </div>
                                <div class="form-group">
                                    <label>Phone: <span style="color:#999999;" id="user_phone"></span></label>
                                    <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-detailes">
                                    <div id="input-phone" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div>


                                </div>
                                <div class="form-group">
                                    <label>Username: <span style="color:#999999;" id="user_username"></span></label>
                                    <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-detailes">
                                    <div id="input-username" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div>


                                </div>
                                <div class="form-group">
                                    <label>Gender: <span style="color:#999999;" id="user_gender"></span></label>
                                    <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-detailes">
                                    <div id="input-gender" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div>


                                </div>

                                <div class="form-group">
                            <label>Facebook: 
                                <a href="" id="user_facebook_link" target="_blank">
                                    <span style="color:#999999;" id="user_facebook"></span></a></label>
                                    <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-detailes">
                                    <div id="input-facebook" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div>


                            </div>

                            <div class="form-group">
                                <label>Twitter: 
                                <a href="" id="user_twitter_link" target="_blank">
                                    <span style="color:#999999;" id="user_twitter"></span>
                                </a>

                            </label>
                            <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-detailes">
                            <div id="input-name" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div>


                            </div>
                            </div>


                        </div>

                </div>

                <div class="clear">
                    <br>
                    <hr>
                    
                    <div class="col-sm-5 col-sm-offset-1">

                    </div>

                </div>



            <div class="col-sm-4 col-sm-offset-1">
                <br>
               <a href="<?=base_url('contact');?>"><input  type='button' class='btn btn-finish btn-primary' name='Male us your problem (help)' value='E-male us (help)' /></a> 

               
                
            </div>
            
            
            <div class="col-sm-4 col-sm-offset-2 float-right" style="">
                <br>
                <a href="<?=base_url("main/myProperties");?>"><input type='button' class='btn btn-finish btn-primary' name='See your submitted property' value='My properties' /></a>
            </div>
            <br>

                        <div class="col-sm-4 col-sm-offset-1">
                <br>
               <a href="<?=base_url('main/changePassword');?>"><input  type='button' class='btn btn-finish btn-primary' name='Male us your problem (help)' value='Change Password' /></a> 

               
                
            </div>
            
            
            <div class="col-sm-4 col-sm-offset-2 float-right" style="">
                <br>
                <a href="#"><input type='button' class='btn btn-finish btn-primary' name='See your submitted property' value='Edit Profile' /></a>
            </div>
            


    </div>
    </div>

</div>
    <br>
    


    <!-- Footer area-->
<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import'); 

?>
</body>

<script type="text/javascript">

    var key="<?php echo $this->security->get_csrf_hash(); ?>"; 
    // console.log(key);

    $("#account_button_header").text("Logout");
    $("#account_button_header").attr("href","<?=base_url('main_helper/logout_account');?>");

    // $("#account_button_header").click(function(e){
    //     e.preventDefault();

    //     $.ajax({
    //     url:"<?=base_url('main_helper/logout_account');?>",
    //     type:"POST",
    //     async:false,
    //     data:{
    //         "<?php echo $this->security->get_csrf_token_name();?>":key
    //         // user_id:"<?=$_SESSION['user_id_shareshell'];?>"
    //         },
    //         dataType:"json",
    //         success:function(data){
    //             console.log(key);
    //             key=data.key;
    //             console.log(key);

               
    //             console.log(data);
    //         },
    //         error:function(data){
    //             console.log(data);
    //             // result=data;
    //         }
    //     });

    // });



        $.ajax({
        url:"<?=base_url('main_helper/user_account_detail');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            user_id:"<?=$_SESSION['user_id_shareshell'];?>"
            },
            dataType:"json",
            success:function(data){
                key=data.key;

                $("#user_name").html(data.data['first_name'].charAt(0).toUpperCase()+data.data['first_name'].slice(1)+" "+data.data['last_name']);
                $("#title_name").html(data.data.first_name+" "+data.data.last_name);
                $("#user_email").html(data.data['email']);
                $("#user_phone").html(data.data['phone']);
                $("#user_gender").html(data.data['gender']);
                $("#user_username").html(data.data['username']);
                $("#user_bio").html(data.data['user_bio']);
                $("#user_facebook").html(data.data['facebook']);
                $("#user_facebook_link").attr('href',data.data['facebook']);
                $("#user_twitter").html(data.data['twitter']);
                $("#user_twitter_link").attr('href',data.data['twitter']);
                if(data.data['image']!=""){
                    $("#PicturePreview").attr("src","<?=base_url('utility/user_image/');?>"+data.data['image'].replace(/\.[^/.]+$/, "_thumb")+"."+/[^.]+$/.exec(data.data.image));
                }else{
                    $("#PicturePreview").attr("src",'<?=base_url('assets/img/');?>'+user_image_male_female(data.data['gender']));
                }
                // console.log(user_image_male_female(data.data['gender']));
            },
            error:function(data){
                console.log(data);
                // result=data;
            }
    });

</script>
<script>

var edit = document.getElementsByClassName("btn-name")[0];

edit.onclick = function() { 
 // modal.style.display = "none";
 var x = document.getElementById("input-name");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  
}
   
</script>

</html>