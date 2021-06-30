<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

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
                                    <button type="submit" class="btn btn-default align-content-center" style="width:100px;" id="signup_submit" value="Register">Register</button>
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
                                    <label for="email">Email</label> &nbsp <b><span class="text-danger mr-1" id="login_email_error"></span></b> 
                                    <input type="text" class="form-control" placeholder="abc123@xyz.com" id="login_email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label> &nbsp <b><span class="text-danger mr-1" id="login_password_error"></span></b> 

                                    <input type="password" class="form-control" placeholder="********" id="login_password">
                                    &nbsp <small>

                                    <a href="<?=base_url('main/forgetpassword');?>" id="forget_password">Forgot password ?</a> </small>
                                </div>

                                <div class="text-center">
                                    
                                    <input type="submit" class="btn btn-default" value="Log in" id="login_submit"> 
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

// function isEmail(email) {
//   var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
//   return regex.test(email);
// }

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
    signup_re_password_func();

});

var signup_password;
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

var signup_re_password_btn_active=0;
$("#signup_re_password").blur(function(event) {
    
    signup_re_password_func();
});

function signup_re_password_func(){
    signup_re_password=$("#signup_re_password").val();

    console.log(signup_password_btn_active);

    if(signup_re_password==""){
        $("#signup_re_password_error").text("");
        signup_re_password_btn_active=0;
    }else if(signup_password_btn_active==1&&signup_re_password!=signup_password){
        $("#signup_re_password_error").text("Password Dosen't Match");
        signup_re_password_btn_active=0;
    }else if(signup_password_btn_active==1 && signup_re_password==signup_password){
        $("#signup_re_password_error").html("<b class='text-success'> &#10003; </b>");
        signup_re_password_btn_active=1;

    }else{
        $("#signup_re_password_error").text("");
        signup_re_password_btn_active=0;
    }
}

// function delete_session(sessionName){
//     $.ajax({
//         url:"<?=base_url('main_helper/delete_session');?>",
//         type:"POST",
//         async:false,
//         data:{
//             "<?php echo $this->security->get_csrf_token_name();?>":key,
//             session_name:sessionName,
//             },
//             dataType:"json",
//             success:function(data){
//                 key=data.key;
//                 console.log(data);
                
//             },
//             error:function(data){
//                 console.log(data);
//                 // result=data;
//             }
//     });
// }

// delete_session('signup_username');
// delete_session('signup_email');
// delete_session('signup_password');

// function set_session(sessionName,sessionValue){
//     $.ajax({
//         url:"<?=base_url('main_helper/set_session');?>",
//         type:"POST",
//         async:false,
//         data:{
//             "<?php echo $this->security->get_csrf_token_name();?>":key,
//             session_name:sessionName,
//             session_value:sessionValue
//             },
//             dataType:"json",
//             success:function(data){
//                 key=data.key;
//                 console.log(data);
                
//             },
//             error:function(data){
//                 console.log(data);
//                 // result=data;
//             }
//     });
// }

$("#signup_submit").click(function(event) {
    event.preventDefault();

    var password_hash;
    var signup_email=$("#signup_email").val();
    var signup_password=$("#signup_password").val();


    if(signup_username_btn_active==1&&signup_email_btn_active==1&&signup_password_btn_active==1&&signup_re_password_btn_active==1){

        
    
    $.ajax({
        url:"<?=base_url('main_helper/password_create_hash');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            email:signup_email,
            password:signup_password
            },
            dataType:"json",
            success:function(data){
                key=data.key;
                password_hash=data.data;
            },
            error:function(data){
                console.log(data);
                // result=data;
            }
    });

    var signup_username_url_data="";
    if($("#signup_username").val()!=""){
        // set_session('signup_username',$("#signup_username").val());
        signup_username_url_data="&&u="+signup_username;
    }




    
    // set_session('signup_email',$("#signup_email").val());
    // set_session('signup_password',password_hash);


        // console.log(date);

        // alert("success");

        window.location.href = "<?=base_url().'main/signup_detail?p=';?>"+password_hash+"&&e="+signup_email+""+signup_username_url_data; 
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
        if(signup_re_password_btn_active==0){

            $("#signup_re_password_error").fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150); 
            signup_re_password_func();
            if($("#signup_re_password").val()==""){
                $("#signup_re_password_error").text("Empty Confirm Password*");
            }
        }
        
        
    }
});



//login field code starts here



$("#login_email").blur(function(){
    var login_email_temp=$("#login_email").val();

    if(isEmail(login_email_temp)){
        // $("#login_email_error").html("<b class='text-success'> &#10003; </b>");
        $("#login_email_error").html("");
    }else{
        $("#login_email_error").html("*Invalid Email");
    }

});

$("#login_submit").click(function(e){
    e.preventDefault();

    var login_email_temp=$("#login_email").val();
    var login_password_temp=$("#login_password").val();
    
    if(login_email_temp.length<1){
        $("#login_email_error").html("*Empty Field");
        return;
    }else 

    if(login_password_temp.length<1){
        $("#login_password_error").html("*Empty Field");
        return;
    }else{
        $("#login_password_error").html("");
    }


   
    $.ajax({
        url:"<?=base_url('main_helper/login_validate_data');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            email:login_email_temp,
            password:login_password_temp
            },
            dataType:"json",
            success:function(data){
                console.log(data);
                key=data.key;
                if(data.data==false){
                    $("#login_password").val("");
                    $("#login_email_error").html("*Incorrect Emain/Password");
                }else if(data.account_status==0){
                    window.location.href="<?=base_url('main/account_created');?>";
                }else{
                    window.location.href="<?=base_url('account');?>";
                }

                console.log(data);
                
            },
            error:function(data){
                console.log(data);
                // result=data;
            }
    });


}); 






</script>

</html>