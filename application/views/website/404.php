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
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?> 
</head>
<body>
	        <div class="content-area error-page" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <h2 class="error-title">404</h2>
                        <p>Sorry, the page you requested may have been moved or deleted</p>
                        <a href="<?=base_url();?>" class="btn btn-default">Home</a>                        
                    </div>
                </div> 
            </div>
        </div> 
<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');
?>s
</body>
</html>