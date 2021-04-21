<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SHARESHELL| Log_User</title>
        <meta name="shareshell" content="Making rental easy">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?>  

    
        </nav>
        <!-- End of nav bar -->
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Home New account / Sign in </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
 

        <!-- register-area -->
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>New account : </h2> 
                            <form action="" method="post">
                                
                                
                                
                                
                            <form action="" method="post">
                                
                                <div class="form-group">
                                    <label for="name">Username (Optional) </label> &nbsp <b><span class="text-danger mr-1" id="signup_username_error"></span></b> 
                                    <input type="text" class="form-control" id="signup_username" placeholder="myusername">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label> &nbsp <b><span class="text-danger mr-1" id="signup_email_error"></span></b> 
                                    <input type="text" class="form-control" id="signup_email" placeholder="abc123@xyz.com">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password *</label> &nbsp <b><span class="text-danger mr-1" id="signup_password_error"></span></b> 
                                    <input type="password" class="form-control" id="signup_password" placeholder="********">
                                </div>
                                <div class="form-group">
                                    <label for="password">Confirm Password *</label> &nbsp <b><span class="text-danger mr-1" id="signup_re_password_error"></span></b> 
                                    <input type="password" class="form-control" id="signup_re_password" placeholder="********">
                                </div>
                                <div class="text-center" style=" ">
                                    <a type="submit" class="btn btn-default align-content-center" style="width:100px;" id="signup_submit" value="Register">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Login : </h2> 
                            <form action="" method="post">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="text-center">
                                    
                                    <input type="submit" class="btn btn-default" value="Log in" id=""> 
                                </div>

                            </form>
                            <br>
                            
                            <h2>Social login :  </h2> 
                            
                            <p>
                            <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a> 
                            <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a> 
                            <a class="login-social" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>  
                            </p> 
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>      

    
<!-- 
         <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <script src="assets/js/jquery-1.10.2.min.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>

        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>

        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>

        <script src="assets/js/main.js"></script> -->
<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import'); 


?>
    </body>

<script type="text/javascript">

var key="<?php echo $this->security->get_csrf_hash(); ?>"; 


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
                console.log(data);
                result=data.data;
            },
            error:function(data){
                console.log(data);
                // result=data;
            }
    });
    return result;  
}

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

var signup_username_btn_active=1;

$("#signup_username").blur(function(event) {

    signup_username_func();

});

function signup_username_func(){
    signup_username=$("#signup_username").val();
    
    var result= validate_data('username',signup_username);
    
    if(signup_username==""){
        $("#signup_username_error").text("");
        signup_username_btn_active=1;
    }else if(result!=0 || signup_username.length<6){
        $("#signup_username_error").text("Select Another Username*");
        signup_username_btn_active=0;
    } else{
        $("#signup_username_error").html("<b class='text-success'> &#10003; </b>");
        signup_username_btn_active=1;
    }
}


var signup_email_btn_active=0;
$("#signup_email").blur(function(event) {

    signup_email_func();

});

function signup_email_func(){
    signup_email=$("#signup_email").val();
    
    var result=validate_data('email',signup_email);
    var isemail=isEmail(signup_email);
    console.log(isemail);

    if(isemail==false){
        $("#signup_email_error").text("Invalid Email Address*");
        signup_email_btn_active=0;
    }else if(result!=0){
        $("#signup_email_error").text("Email Already Registered*");
        signup_email_btn_active=0;
    }else{
        $("#signup_email_error").html("<b class='text-success'> &#10003; </b>");
        signup_email_btn_active=1;
    }
}

var signup_password_btn_active=0;
$("#signup_password").blur(function(event) {

    signup_password_func();

});

function signup_password_func(){
    signup_password=$("#signup_password").val();

    if(signup_password==""){
        $("#signup_password_error").text("Empty Password*");
        signup_password_btn_active=0;
    }else if(signup_password.length<6){
        $("#signup_password_error").text("Small Password*");
        signup_password_btn_active=0;
    }else{
        $("#signup_password_error").html("<b class='text-success'> &#10003; </b>");
        signup_password_btn_active=1;
    }
}

$("#signup_submit").click(function(event) {
    if(signup_username_btn_active==1&&signup_email_btn_active==1&&signup_password_btn_active==1){
        window.location.href = "<?=base_url('main/signup_detail');?>"; 
        // alert('success');       
    }else{
        if(signup_username_btn_active==0){
            $("#signup_username_error").fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150);
            signup_username_func();
        }
        if(signup_email_btn_active==0){
            $("#signup_email_error").fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150);
            signup_email_func();
        }
        if(signup_password_btn_active==0){
           $("#signup_password_error").fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150); 
           signup_password_func();
        }
        
        
    }
});







</script>

</html>