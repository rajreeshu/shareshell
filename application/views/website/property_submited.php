<!DOCTYPE html> 
<html class="no-js" lang = "en"> 
    <head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shareshell | Property Listing</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?>   

        <div class="content-area error-page" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <h2 >Propert listed</h2>
                        <h1 class="" style="padding-left: 50px;">SUCESSFULLY <span style='font-size:40px; color: rgb(229, 233, 22); '>&#10004;</span></h1>
                        
                                               
                    </div>
                </div> 
            </div>
        </div> 
<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');
?>