<!DOCTYPE html>
<html lang="en">
    <head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SHARESHELL| Home page</title>
        <meta name="author" content="shareshell">
        <meta name="keyword" content="shareshell, forget password, change password">
        <meta name="description" content="Forgot your password? change now.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    </head>
    <body>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?> 

<style>
.form-group i{
            margin-left: -38px;
            cursor: pointer;
            font-size:2em
            
        }

</style>
        <!-- End of nav bar -->

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">RESET YOUR <span class="orange strong">PASSWORD</span></h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header --> 
        <div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 profiel-container">

                    <form action="" method="">

                        <div class="profiel-header">
                            <h3>
                                <strong>UPDATE</strong> YOUR PASSWORD <br>
                                <small>All change will send to your e-mail.</small>
                            </h3>
                            <hr>
                        </div>

                        <div class="clear">

                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="form-group">
                                    <label>Enter Email <small>(required)</small></label> <small style="color:red; font-weight:bold;" id="reset_email_error"></small>
                                    <input name="Email" type="text" class="form-control" id="reset_email" placeholder="abc@xyz.com">
                                    <div class="col-sm-0 col-sm-offset-1 " style="margin-top:10px;">
                                        <input id="btn1" type='button' class='btn btn-finish btn-primary pull-right'
                                            name='Enter' value='NEXT' />
                                    </div>
                                </div>
                                <div class="form-group" id="display1" style="display: none;" >
                                    <label>Enter OTP sent to your Mail: <small>(required)</small>  
                                        <a id="resend_otp_a" style="cursor: pointer;">Resend OTP</a> </label> <small style="color:red; font-weight:bold;" id="reset_otp_error"></small><br>
                                        
                                        <input  type="password" id="reset_otp" name="otp" class="col-sm-6 form-control" max_length="4" placeholder="0000"><br>
                                        
                                    <div class="col-sm-0 col-sm-offset-1" style="margin-top:30px;">
                                        <input id="btn2" type='button' class='btn btn-finish btn-primary pull-right'
                                            name='Enter  OTP' value='NEXT' />
                                    </div>



                                </div>
                                <div id="display2" style="display: none;">
                                    <div class="form-group">
                                        
                                        <label>New Password <small>(required)</small></label> <small style="color:red; font-weight:bold;" id="reset_pass_error"></small>
                                        <div style="display:flex;">
                                        <input name="Password" type="password" class="form-control" id="new_password" placeholder="********"><i class="bi bi-eye-slash toggle_password" style="font-size:25px;"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm New password : <small>(required)</small></label> <small style="color:red; font-weight:bold;" id="reset_cnfrm_pass_error"></small>
                                        <div style="display:flex;">
                                        <input type="password" class="form-control" id="confirm_new_password" placeholder="********"><i class="bi bi-eye-slash toggle_password" style="font-size:25PX;"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-0 col-sm-offset-1">
                                        <input type='button' class='btn btn-finish btn-primary pull-right' name='update'
                                            value='Update' id='btn3'/>
                                    </div>
                                </div>
                            </div>
                            

                        </div>




                    </form>

                </div>
            </div><!-- end row -->

        </div>
    </div>

 <?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');
?>

    </body>

<script>
var key="<?php echo $this->security->get_csrf_hash(); ?>";

var user_id="";

function showDivs(btn, toHide, toShow){
            document.getElementById(toShow).style.display = "block";
            document.getElementById(btn).style.display = "none";
            if(toHide!=""){
                document.getElementById(toHide).style.display = "none";
            }
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

function send_email_reset(){
    $.ajax({
        url:"<?=base_url('main_helper/reset_password_otp');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            email_field:$("#reset_email").val(),       
            },
            dataType:"json",
            success:function(data){
                key=data.key;
                console.log(data);
                // result=data.data;
                user_id=data.user_id;
            },
            error:function(data){
                console.log(data);
                // result=data;
            }
    });
}

function verify_otp(){
    result="";
    $.ajax({
        url:"<?=base_url('main_helper/verify_otp');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            user_id:user_id,      
            otp:document.getElementById("reset_otp").value,
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

function update_pass(){
    reset_email=document.getElementById("reset_email").value;
    pass=document.getElementById("new_password").value;
    $.ajax({
        url:"<?=base_url('main_helper/update_password');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            email:reset_email,
            password:pass   
            },
        dataType:"json",
        success:function(data){
            key=data.key;
            console.log(data);
            if(data.data){
                alert("Password Changed");
                window.location.href="<?=base_url('main/log_user');?>";
            }
                // result=data.data;
        },
        error:function(data){
            console.log(data);
            // result=data;
        }
    });    
}

    //btn1
    document.getElementById("btn1").addEventListener("click", function(){
        reset_email=document.getElementById("reset_email");
        v_email=isEmail(reset_email.value);
        if(v_email){
            if(validate_data('email',reset_email.value)){
                showDivs('btn1','','display1');
                
                document.getElementById("reset_email_error").innerHTML="";
                send_email_reset();
                reset_email.setAttribute("disabled","disabled");
            }else{
                document.getElementById("reset_email_error").innerHTML="Email Not Registered";
            }
            
        }else{
            document.getElementById("reset_email_error").innerHTML="*Incorrect Email";
        }
    });


    //btn2
    document.getElementById("btn2").addEventListener("click",function(){
        if(document.getElementById("reset_otp").value.length==4){
            if(verify_otp()){
                showDivs("btn2","display1","display2");
                document.getElementById("reset_otp_error").innerHTML="";
            }else{
                document.getElementById("reset_otp_error").innerHTML="*Incorrect OTP";
            }

        }else{
            document.getElementById("reset_otp_error").innerHTML="*Incorrect OTP";
        }

        
    });

    //btn 3
    match_pass=0;
    document.getElementById("new_password").addEventListener("keyup",function(){
        pass=document.getElementById("new_password").value;
        cnfrm_pass=document.getElementById("confirm_new_password").value;
        if(pass.length<8){
            document.getElementById("reset_pass_error").innerHTML="* Small Password";
            match_pass=0;
        }else{
            document.getElementById("reset_pass_error").innerHTML="";
        }
        if(cnfrm_pass!=""){
            onkeyfun();
        }
    });


    document.getElementById("confirm_new_password").addEventListener("keyup",function(){
       onkeyfun();
    });

    function onkeyfun(){
        pass=document.getElementById("new_password").value;
        cnfrm_pass=document.getElementById("confirm_new_password").value;
        if(pass.length>=8){
            if(pass!=cnfrm_pass){
                document.getElementById("reset_cnfrm_pass_error").innerHTML="* Dosen't Match";
                match_pass=0;
            }else{
                document.getElementById("reset_cnfrm_pass_error").innerHTML="";
                match_pass=1;
            }
        }
        
    }

    document.getElementById("btn3").addEventListener("click",function(){
        reset_email=document.getElementById("reset_email").value;
        pass=document.getElementById("new_password").value;
        console.log(match_pass);
        if(match_pass){
           update_pass();
        }
    });


    //resend otp
    document.getElementById("resend_otp_a").addEventListener("click",function(){
        send_email_reset();
    });

    $(".toggle_password").click(function(e){
        e.preventDefault();
        var thiss=$(this);
        show_hide_password(thiss);
    });

    
</script>

</html>