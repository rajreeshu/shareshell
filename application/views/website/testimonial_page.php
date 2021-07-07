<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->


<head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SHARESHELL| Contact page</title>
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
                    <h1 class="page-title">Testimonials page</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <!-- property area -->
    <div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="" id="contact1">

                        <!-- /.row -->


                        <hr>
                        <h2>Send us your sucess story</h2>
                        <hr>
                        <p><small>all fiels marked with * are mandatory</small></p>
                        
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Name*</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Mobile/Phone*</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email*</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">City*</label>
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Country*</label>
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Company Name</label>
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="message">Do you want us to use your success story on any of our ads/ press releases?*</label>
                                        
                                    </div>
                                    
                                

                                    <div class="col-sm-3">
                                        <div  style="text-orientation: sideways;">
                                            <form>
                                                <input type="radio" id="yes" name="dicision">
                                                <label for="yes">Yes</label><br>
                                                <input type="radio" id="no" name="dicision">
                                                <label for="no">No</label><br>
                                            </form>
                                            
                                               
                                                
                                                
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="message">My Testimonial*:</label>
                                        <textarea id="message" class="form-control"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
                                </div>
                                
                               
                            </div>
                            <hr>
                        <h3>Mail us your photo with name at <b>contactus@shareshell.in&#128519;</b></h3>
                        
                        <hr>
                        
                            <!-- /.row -->
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- <div id="map" style="height: 400px;"></div> -->


<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');
?>
<!--     <script src="assets/js/modernizr-2.6.2.min.js"></script>

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

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/gmaps.init.js"></script>

    <script src="assets/js/main.js"></script> -->

</body>

</html>