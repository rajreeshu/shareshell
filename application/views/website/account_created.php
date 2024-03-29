<!DOCTYPE html>
<html class="no-js" lang = "en">
    <head>
    <link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shareshell | Success</title>
        <meta name="description" content="Your account is successfully created">
        <meta name="author" content="shareshell">
        <meta name="keyword" content="shareshell account, account created">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');

    $temp_session=$this->session->flashdata('account_created'); 
?>   

<div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 profiel-container" id="profile-header">

                       

                            <div class="profiel-header">
                                <h3>
                                    <b>Verify</b> OTP<br>
                                    <small>OTP has been Sent to your E-Mail Account.</small>
                                </h3>
                                <div id="password_change_alert"></div>
                                <hr>
                            </div>

                            <div class="clear">
                            <center>
                                <div class="col-sm-10 col-sm-offset-1">
                                    
                                    <div class="form-group">
                                        
                                            <label>Enter OTP</label> &nbsp <b><a id="resend_otp_a" style="cursor: pointer;">Resend OTP</a> <span class="text-danger mr-1" id="otp_error" style="position: absolute; float:center;"></span></b>
                                        
                                        <input name="otp_field" type="number" class="form-control " placeholder="1234" id="otp_field" style="width:200px;">
                                    
                                        <div>
                                             
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-10 col-sm-offset-1">
                                    <input type='button' class='btn btn-finish btn-primary ' name='otp_submit' value='Submit' id="otp_submit" />
                                </div>
                                </center>
                                <br>
                            </div>
                            
 
                    
                            
                            
            

                </div>
            </div><!-- end row -->
</div>
</div>

<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');
?>

<!-- <script type="text/javascript">
   var flashdata="<?=$temp_session;?>";
   if(flashdata==""){
    window.location.href = "<?=base_url();?>"; 
   }
   // alert(flashdata);
</script> -->

<script type="text/javascript">

    var key="<?php echo $this->security->get_csrf_hash(); ?>"; 

    $("#otp_submit").click(function(e){
        e.preventDefault();
        var otp_val=$("#otp_field").val();
        if(otp_val==""){
            $("#otp_error").html("*Empty Field");
        }else if(otp_val.length!=4){
            $("#otp_error").html("*Incorrect OTP");
        }else{
            $("#otp_error").html("");

            $.ajax({
                type:"POST",
                url:"<?=base_url('main_helper/verify_otp');?>",
                async:false,
                data: {
                    "<?php echo $this->security->get_csrf_token_name();?>":key,
                    user_id:"<?=$this->security->xss_clean($this->session->userdata('otp_verify_signup_shareshell'));?>",
                    otp:otp_val
                },
                dataType:"json",
                success:function(data){
                    key=data.key;

                    if(!data.data){
                        $("#otp_error").html("");
                        // $.delay(1);

                        $("#otp_error").html("*Incorrect OTP");
                    }else{
                        $("#profile-header").html('<div class="content-area error-page" style="background-color: #FCFCFC; padding-bottom: 35px;"><div class="container"><div class="row"><div class="col-md-10 col-sm-12 text-center page-title"><h2 >ACCOUNT CREATED</h2><h1 class="" style="padding-left: 50px;">SUCESSFULLY <span style="font-size:40px; color: rgb(229, 233, 22); ">&#10004;</span></h1></div></div><br><br><center><a href="<?=base_url('main/log_user');?>" class="btn btn-default"><div >LOG IN</div></center></div></div>');
                    }

                    console.log(data);
                        
                },
                error:function(data){
                    console.log(data);
                        // result=data;
                }
            });

        }
        
    });

    
function send_email_reset(){
    $.ajax({
        url:"<?=base_url('main_helper/resend_otp_userid');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            user_id:"<?=$this->security->xss_clean($this->session->userdata('otp_verify_signup_shareshell'));?>",       
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

$('#resend_otp_a').click(function(e){
    e.preventDefault();
    send_email_reset();
});
    
</script>

</body>
</html>
