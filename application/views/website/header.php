
<?php



    if($this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
        $submit_property_button="<a class=\"navbar-btn nav-button\" href=\"".base_url('main/submit_property')."\" data-wow-delay=\"0.5s\" style=\"position:relative; top:10px;\"><B>PostProperty<span style=\"color: red; top:10px;\"> FREE</b></span></a>";

        $login_logout_button="<a class=\"navbar-btn nav-button wow login\" href=".base_url('account')." data-wow-delay=\"0.4s\" id=\"account_button_header\" style=\"position:relative; top:10px;\">Account</a>";

        $logged_in=true; 

    }else{
        if($cookie_value=$this->encrypt->decode($this->input->cookie('remember_me_shareshell', TRUE))){ 
            $this->session->unset_userdata('user_id_shareshell');
		    $this->session->set_userdata('user_id_shareshell',$cookie_value);
        }

        $submit_property_button="<a class=\"navbar-btn nav-button \"href='".base_url('main/submit_property')."'\" data-wow-delay=\"0.5s\" style=\"position:relative; top:10px;\"><B>PostProperty<span style=\"color: red;\"> FREE</b></span></a>";
        // $submit_property_button="<button class=\"navbar-btn nav-button wow fadeInRight\" onclick=\" window.open('".base_url('main/submit_property')."')\" data-wow-delay=\"0.5s\">submit</button>";

        $login_logout_button="<a class=\"navbar-btn nav-button wow login \" href=\"".base_url('main/log_user')."\" data-wow-delay=\"0.5s\" id=\"login_button_header\" style=\"position:relative; top:10px;\">Login/Signup</a>";

        $logged_in=false;
    }

?>
        
        <!-- Body content -->


       
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
                <div class="collapse navbar-collapse yamm" id="navigation" style="">
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

                        <li class="wow" data-wow-delay="0.1s"><a class="" href="<?=base_url('properties');?>">Properties</a></li>
                        
                        

                    <!-- <li class="dropdown yamm-fw" data-wow-delay="0.1s"> -->
                        
                            <!-- <a href="<?=base_url('main/aboutus');?>" class="" data-toggle="dropdown" data-hover="dropdown"
                            data-delay="200"><span id="aboutus_cover">About Us</span><b class="caret"></b></a> -->
                        
                        <!-- <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>PROFILE</h5>
                                            <ul>
                                                <li><a href="<?=base_url('main/aboutus#contact1');?>">Company Profile</a> </li>

                                            </ul>

                                        </div>
                                        <div class="col-sm-3">
                                            <h5>TEAM</h5>
                                            <ul>

                                                <li><a href="<?=base_url('main/aboutus');?>">Team Members</a> </li>

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
                               
                            </li>
                        </ul> -->
                    <!-- </li> -->
                        <li class="wow" data-wow-delay="0.4s"><a href="<?=base_url('main/aboutus');?>">About Us</a></li>
                        <li class="wow" data-wow-delay="0.4s"><a href="<?=base_url('contact');?>">Contact</a></li>

                        <li class="dropdown yamm-fw" data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Others<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <!-- <div class="col-sm-offset-2"></div> -->
                                            <div class="col-sm-2">
                                            </div>
                                           <!--  <div class="col-sm-3">
                                                <h5>Advertisements</h5>
                                                <ul>
                                                    <li><a href="<?=base_url('faq');?>">FAQ page</a> </li> 
                                                    <li><a href="404.html">404 page</a>  </li>
                                                </ul>
                                               
                                            </div> -->
                                            <!-- <div class="col-sm-3">
                                                <h5>Pages and blog</h5>
                                                <ul>
                                                    
                                                    <li><a href="single-right.html">Blog Post</a>  </li>
                                                    
                                                </ul>
                                            </div>
 -->                                        <div class="col-sm-3">
                                            <h5>More Links</h5>
                                            <ul>
                                                <li><a href="<?=base_url('faq');?>">FAQ page</a> </li> 
                                            </ul>
                                            <ul>
                                                <li><a href="<?=base_url('main/testimonial');?>">testimonials</a> </li>

                                            </ul>
                                            <ul>
                                                <li><a href="<?=base_url('main/privacypolicy');?>">Privacy and Policy</a> </li>

                                            </ul>
                                            <ul>
                                                <li><a href="<?=base_url('main/termsconditions');?>">Terms and Condition</a> </li>

                                            </ul>


                                        </div>

                                        <div class="col-sm-2"></div>
                                        
                                            <div class="col-sm-3">
                                                <!-- <h5>Property process</h5>
                                                <ul> 
                                                    <li><a href="submit-property.html">Submit - step 1</a> </li>
                                                    <li><a href="submit-property.html">Submit - step 2</a> </li>
                                                    <li><a href="submit-property.html">Submit - step 3</a> </li> 
                                                </ul> -->
                                                <h5>User account</h5>
                                                <ul>
                                                    <?php if(!$logged_in){ ?>
                                                    <li><a href="<?=base_url('main/log_user');?>">Register / login</a>   </li>
                                                    <?php }else{ ?>

                                                    <li><a href="<?=base_url('main/myproperties');?>">Your properties</a>  </li>
                                                    <li><a href="<?=base_url('main/submit_property');?>">Submit property</a>  </li>
                                                    <li><a href="<?=base_url('main/changePassword');?>">Change password</a> </li>
                                                    <li><a href="<?=base_url('main/account');?>">Your profile</a>  </li>
                                                <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.yamm-content -->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->






      