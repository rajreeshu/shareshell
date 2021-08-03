<!DOCTYPE html>
<html lang = "en">
<head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SHARESHELL| Change Password</title>
        
        <meta name="author" content="shareshell">
        <meta name="keyword" content="shareshell">
        <meta name="description" content="change your shareshell password">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

        <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'> -->

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
    </head>
    <style>
        .form-group i{
            margin-left: -38px;
            cursor: pointer;
            font-size:2em
            
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
                        <h1 class="page-title">Hello : <span class="orange strong" id="show_name_head"></span></h1>               
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

                        <form action="" method="">

                            <div class="profiel-header">
                                <h3>
                                    <b>CHANGE</b> YOUR PASSWORD <br>
                                    <small>All change will send to your e-mail.</small>
                                </h3>
                                <div id="password_change_alert"></div>
                                <hr>
                            </div>

                            <div class="clear">

                                <div class="col-sm-10 col-sm-offset-1">
                                    
                                    <div class="form-group">
                                        <label>Current Password <small>(required)</small></label> &nbsp <b><span class="text-danger mr-1" id="old_password_error"></span></b>
                                        <div style="display:flex;">
                                        <input name="Password" type="password" class="form-control" placeholder="********" id="old_password"><i class="bi bi-eye-slash toggle_password" style="size:30em;"></i>
                                        </div>
                                        
                                        <div>
                                             
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>New password : <small>(required)</small></label> &nbsp <b><span class="text-danger mr-1" id="new_password_error"></span></b>
                                        <div style="display:flex;">
                                        <input type="password" class="form-control" placeholder="********" id="new_password"><i class="bi bi-eye-slash toggle_password" style="size:30em;"></i>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label>Confirm New password : <small>(required)</small></label> &nbsp <b><span class="text-danger mr-1" id="confirm_new_password_error"></span></b>
                                        <div style="display:flex;">
                                        <input type="password" class="form-control" placeholder="********" id="confirm_new_password"><i class="bi bi-eye-slash toggle_password" style="size:30em;"></i>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-sm-10 col-sm-offset-1">
                                    <input type='button' class='btn btn-finish btn-primary pull-right' name='update' value='Update' id="update_password_submit" />
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
  <!-- Footer area-->
  
<!--         <script src="assets/js/modernizr-2.6.2.min.js"></script>

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

    </body>

<script type="text/javascript">
        
    var key="<?php echo $this->security->get_csrf_hash(); ?>"; 

    var update_btn_status=0;
    $("#update_password_submit").click(function(){

        var old_password=$("#old_password").val();
        var new_password=$("#new_password").val();
        var confirm_new_password=$("#confirm_new_password").val();

        if(old_password==""){
            $("#old_password_error").html("*Empty Field");
        }else{
            $("#old_password_error").html("");
        }
        
        if(new_password==""){
            $("#new_password_error").html("*Empty Field");
        }else if(new_password.length<6){
            $("#new_password_error").html("*Too Small");
        }else{
            $("#new_password_error").html("");
        }
        
        if(confirm_new_password==""){
            $("#confirm_new_password_error").html("*Empty Field");
        }else if(new_password!=confirm_new_password){
            $("#confirm_new_password_error").html("Dosen't Match");
        }else{
            $("#confirm_new_password_error").html("");
        }


        if(old_password!=""&&new_password.length>=6&&confirm_new_password==new_password){
            $.ajax({
                url:"<?=base_url('main_helper/change_password');?>",
                type:"POST",
                async:false,
                data:{
                    "<?php echo $this->security->get_csrf_token_name();?>":key,
                    user_id:"<?=$this->security->xss_clean($this->session->userdata('user_id_shareshell'));?>",
                    old_password:old_password,
                    new_password:new_password
                    
                            
                    },
                    dataType:"json",
                    success:function(data){
                        key=data.key;
                        console.log(data);
                        if(!data.isSamePassword){
                            $("#old_password_error").html("*Wrong Old Password");
                        }

                        if(data.updated){
                            $("#old_password").val("");
                            $("#new_password").val("");
                            $("#confirm_new_password").val("");

                            $("#password_change_alert").html('<span class="alert alert-success rounded wow fadeInRight" style="position: absolute; float: right; right:10px; top:10px" data-wow-delay="0.1s"><b>Password Changed Successfully</b></span>');
                        }
                        // result=data.data;
                    },
                    error:function(data){
                        console.log(data);
                        // result=data;
                    }
            });
        }


    }); 


    $.ajax({
        url: "<?=base_url('main_helper/get_user_name');?>",
        type: "POST",
        async: false,
        data: {
            "<?php echo $this->security->get_csrf_token_name();?>": key,
            user_id:"<?=$this->security->xss_clean($this->session->userdata('user_id_shareshell'));?>"
        },
        dataType: "json",
        success: function (data) {
            console.log(data);
            $("#show_name_head").html(data.data['first_name']+" "+data.data['last_name']);
        },
        error: function(data){
            console.log(data);
        }
    });

    $(".toggle_password").click(function(e){
        e.preventDefault();
        var thiss=$(this);
        show_hide_password(thiss);
    });




</script>

</html>