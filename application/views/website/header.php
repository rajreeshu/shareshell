
<?php

    if($this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
        $submit_property_button="<button class=\"navbar-btn nav-button wow fadeInRight\" onclick=\" window.open('".base_url('main/submit_property')."')\" data-wow-delay=\"0.5s\"><B>PostProperty<span style=\"color: red;\"> FREE</b></span></button>";

        $login_logout_button="<a class=\"navbar-btn nav-button wow bounceInRight login\" href=".base_url('account')." data-wow-delay=\"0.4s\" id=\"account_button_header\">Account</a>";

        $header_tab_shift="";

    }else{

        $submit_property_button="<button class=\"navbar-btn nav-button wow fadeInRight\" onclick=\" window.open('".base_url('main/submit_property')."')\" data-wow-delay=\"0.5s\"><B>PostProperty<span style=\"color: red;\"> FREE</b></span></button>";
        // $submit_property_button="<button class=\"navbar-btn nav-button wow fadeInRight\" onclick=\" window.open('".base_url('main/submit_property')."')\" data-wow-delay=\"0.5s\">submit</button>";

        $login_logout_button="<a class=\"navbar-btn nav-button wow bounceInRight login \" href=\"".base_url('main/log_user')."\" data-wow-delay=\"0.5s\" id=\"login_button_header\" style=\"position:relative;\">Login</a>";

        $header_tab_shift="";
    }

?>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->


        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> +1 234 567 7890</span>
                                <span><i class="pe-7s-mail"></i> contactus@shareshell.in</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>         
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url();?>"style="font-size: 35px;font-weight: bold;"><img
                        style="max-height: 44px;" src="<?=base_url('assets/img/shareshell_logo.png');?>" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation" style="<?=$header_tab_shift;?>">
                    <div class="button navbar-right">
                         <!-- <a class="navbar-btn nav-button wow bounceInRight login" href="<?=base_url('main/log_user');?>" data-wow-delay="0.4s">Login</a> -->
                        <?=$login_logout_button;?>
                        <?=$submit_property_button;?>

                        <!-- <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('submit-property.html')" -->
                        <!-- data-wow-delay="0.5s"><B>PostProperty<span style="color: red;"> FREE</b></span></button> -->
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="<?=base_url();?>">Home</a>
                            
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="<?=base_url('properties');?>">Properties</a></li>
                        
                        <li class="dropdown yamm-fw" data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Others<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h5>Advertisements</h5>
                                                <ul>
                                                    <li><a href="<?=base_url('faq');?>">FAQ page</a> </li> 
                                                    <li><a href="404.html">404 page</a>  </li>
                                                </ul>
                                               
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>Pages and blog</h5>
                                                <ul>
                                                    
                                                    <li><a href="single-right.html">Blog Post</a>  </li>
                                                    
                                                </ul>
                                            </div>
                                             <div class="col-sm-3">
                                            <h5>More Links</h5>
                                            <ul>
                                                <li><a href="testimonials.html">testimonials</a> </li>

                                            </ul>
                                            <ul>
                                                <li><a href="privacy-policy.html">Privacy and Policy</a> </li>

                                            </ul>
                                            <ul>
                                                <li><a href="terms-conditions.html">Terms and Condition</a> </li>

                                            </ul>


                                        </div>
                                            <div class="col-sm-3">
                                                <h5>Property process</h5>
                                                <ul> 
                                                    <li><a href="submit-property.html">Submit - step 1</a> </li>
                                                    <li><a href="submit-property.html">Submit - step 2</a> </li>
                                                    <li><a href="submit-property.html">Submit - step 3</a> </li> 
                                                </ul>
                                                <h5>User account</h5>
                                                <ul>
                                                    <li><a href="register.html">Register / login</a>   </li>
                                                    <li><a href="user-properties.html">Your properties</a>  </li>
                                                    <li><a href="submit-property.html">Submit property</a>  </li>
                                                    <li><a href="change-password.html">Change password</a> </li>
                                                    <li><a href="user-profile.html">Your profile</a>  </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.yamm-content -->
                                </li>
                            </ul>
                        </li>

                                            <li class="dropdown yamm-fw" data-wow-delay="0.1s">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                            data-delay="200">About Us<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>PROFILE</h5>
                                            <ul>
                                                <li><a href="company-profile.html">Company Profile</a> </li>

                                            </ul>

                                        </div>
                                        <div class="col-sm-3">
                                            <h5>TEAM</h5>
                                            <ul>

                                                <li><a href="single-right.html">Team Members</a> </li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>COMMUNITY</h5>
                                            <ul>
                                                <li><a href="service.html">Links</a> </li>

                                            </ul>


                                        </div>

                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                        <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="<?=base_url('contact');?>">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->






      