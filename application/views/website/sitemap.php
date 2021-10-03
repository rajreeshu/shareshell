<!DOCTYPE html> 
<html class="no-js" lang = "en">
    <head>
    <link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sitemap | Shareshell</title>
        <meta name="description" content="">
        <meta name="author" content="shareshell">
        <meta name="keyword" content="">
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
                        <h2 class="error-title">SiteMap</h2>
                                           
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