<!DOCTYPE html> 
<html class="no-js" lang = "en">
    <head>
    <link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>404 Not Found</title>
        <meta name="description" content="This page of shareshell.in in not available">
        <meta name="author" content="shareshell">
        <meta name="keyword" content="shareshell, page not found, error 404, 404 not found">
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