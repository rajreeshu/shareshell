<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SHARESHELL| Home page</title>
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
                                <b>UPDATE</b> YOUR PASSWORD <br>
                                <small>All change will send to your e-mail.</small>
                            </h3>
                            <hr>
                        </div>

                        <div class="clear">

                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="form-group">
                                    <label>Enter email/ph no <small>(required)</small></label>
                                    <input name="Password" type="password" class="form-control">
                                    <div class="col-sm-0 col-sm-offset-1">
                                        <input id="btn1" type='button' class='btn btn-finish btn-primary pull-right'
                                            name='Enter' value='Enter Email' onclick="showDivs('btn1','','display1')" />
                                    </div>
                                </div>
                                <div class="form-group" id="display1" style="display: none;" >
                                    <label>Enter OTP sent to your mail/ph:<small>(required)</small> 
                                        <a href="forget_password.html">Resend OTP</a> </label>
                                    <input  type="password" class="  col-sm-6 form-control">
                                    <div class="col-sm-0 col-sm-offset-1">
                                        <input id="btn2" type='button' class='btn btn-finish btn-primary pull-right'
                                            name='Enter  OTP' value='Enter OTP'  onclick='showDivs("btn2","display1","display2")' />
                                    </div>



                                </div>
                                <div id="display2" style="display: none;">
                                    <div class="form-group">
                                        <label>New Password <small>(required)</small></label>
                                        <input name="Password" type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm New password : <small>(required)</small></label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="col-sm-0 col-sm-offset-1">
                                        <input type='button' class='btn btn-finish btn-primary pull-right' name='update'
                                            value='Update'/>
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

    function showDivs(btn, toHide, toShow){
            document.getElementById(toShow).style.display = "block";
            document.getElementById(btn).style.display = "none";
            if(toHide!=""){
                document.getElementById(toHide).style.display = "none";
            }
    }
</script>

</html>