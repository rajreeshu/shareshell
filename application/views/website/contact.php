<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SHARESHELL| Contact page</title>
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
                        <h1 class="page-title">Contact Us</h1>               
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
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-map-marker"></i> Address</h3>
                                    <p>flat no.3,
                                        Bhubaneswar
                                        <br>Odisha, India
                                        <br>
                                        <!-- <strong>India</strong> -->
                                    </p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-phone"></i> Call center</h3>
                                    <p class="text-muted">please feel comfortable calling us at any time you want, we are available 23x7.</p>
                                    <p><strong>+91 78723 90186</strong></p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                    <p class="text-muted">Please feel free to write an email whenever you feel any difficulty.</p>
                                    <!-- <ul>
                                        <li><strong><a href="mailto:">info@company.com</a></strong>   </li>
                                        <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
                                    </ul> -->
                                </div>
                                <!-- /.col-sm-4 -->
                            </div>
                            <!-- /.row -->
                            <hr>
                           



                            
                            
                            <hr>
                            <h2>Contact form</h2>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary" id="submit_btn"><i class="fa fa-envelope-o"></i> Send message</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>
                    </div>    
                </div>
               
            </div>
        </div>
        <div id="map" style="height: 400px;"></div>
<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');
?>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoIazJ1jMajTPdU5gy1KphnjBmU9jvpNw&callback=initMap"></script>
        <!-- <script src="assets/js/gmaps.js"></script>        
        <script src="assets/js/gmaps.init.js"></script> -->
        
 <script>
    function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}

var key="<?php echo $this->security->get_csrf_hash(); ?>";

$("#submit_btn").click(function(e){
    e.preventDefault();

    
    $.ajax({
        url:"<?=base_url('main_helper/contact_us_email_send');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            firstname:$("#firstname").val(),
            lastname:$("#lastname").val(),
            email:$("#email").val(),
            subject:$("#subject").val(),
            message:$("#message").val()        
            },
            dataType:"json",
            success:function(data){
                key=data.key;
                // console.log(data);
                if(data.data){
                    alert("mail is Sent..");
                }else{
                    alert("Something Went Wrong");
                }
                $("#firstname").val("");
                $("#lastname").val("");
                $("#email").val("");
                $("#subject").val("");
                $("#message").val("") ;  
            },
            error:function(data){
                console.log(data);
            }
        });


});


</script>


        
</body>
</html>



