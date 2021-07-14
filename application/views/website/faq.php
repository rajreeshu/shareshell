<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SHARESHELL| Home page</title>
        <meta name="shareshell" content="Making rental easy">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                        <h1 class="page-title">FAQ PAge</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
        

        <!-- property area -->
        <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">    

                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Frequently Asked Questions </h2>
                        <br>
                    </div>
                </div>

                <div class="row row-feat"> 
                    <div class="col-md-12">
 
                        <div class="col-sm-6 feat-list">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                         <h4 class="panel-title fqa-title" data-toggle="collapse" data-target="#fqa11" >
                                            I AM TRYING TO LOG IN BUT NOT RECEIVING OTP. WHAT SHOULD I DO?
                                         </h4> 
                                    </div>
                                    <div id="fqa11" class="panel-collapse collapse fqa-body">
                                        <div class="panel-body">
                                            <P>
                                            For any such grievance, please try again by clicking on resend OTP. If not received, then drop an email on the costumer's care email id, undersigned by your name and user ID. 
                                                                                           
                                            <P> 
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                         <h4 class="panel-title fqa-title" data-toggle="collapse" data-target="#fqa22" >
                                         WHAT ARE THE THINGS I CAN SEARCH ON SHARESHELL? 
                                         </h4> 
                                    </div>
                                    <div id="fqa22" class="panel-collapse collapse fqa-body">
                                        <div class="panel-body">
                                            <p>
                                            It is a Real State website,you can browse through various Properties,broker accounts etc.
                                            </p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                         <h4 class="panel-title fqa-title" data-toggle="collapse" data-target="#fqa33" >
                                         HOW MUCH BROKERAGE IS CHARGED BY SHARESHELL?

                                         </h4> 
                                    </div>
                                    <div id="fqa33" class="panel-collapse collapse fqa-body">
                                        <div class="panel-body">
                                           <p>Our company charges zero brokerage to our clients.</p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 feat-list">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                         <h4 class="panel-title fqa-title" data-toggle="collapse" data-target="#fqa1" >
                                         HOW CAN I REPORT INCORRECT DETAILS LISTED ON THE PAGE?
                                         </h4> 
                                    </div>
                                    <div id="fqa1" class="panel-collapse collapse fqa-body">
                                        <div class="panel-body">
                                            <p>Just drop an email on the company email id about your findings  with subject "INCORRECT DETAILS".</p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                         <h4 class="panel-title fqa-title" data-toggle="collapse" data-target="#fqa2" >
                                            HOW TO CONTACT SHARESHELL TEAM OR CUSTOMER CARE?
                                         </h4> 
                                    </div>
                                    <div id="fqa2" class="panel-collapse collapse fqa-body">
                                        <div class="panel-body">
                                           <P>You can contact us through our toll free number if calling from India otherwise we advice you to use our electronic support and drop an E-mail to our company's E-mail Id or you can directly fill out the company's contact form present in the contact page.</P>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                         <h4 class="panel-title fqa-title" data-toggle="collapse" data-target="#fqa3" >
                                            HOW CAN I EDIT MY PROFILE?
                                         </h4> 
                                    </div>
                                    <div id="fqa3" class="panel-collapse collapse fqa-body">
                                        <div class="panel-body">
                                            <P>Comming soon</P>
                                        </div> 
                                    </div>
                                </div>
                            </div>
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
</html>
