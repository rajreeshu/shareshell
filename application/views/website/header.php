
<?php
    if($this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
        // $submit_property_button="<a class=\"navbar-btn nav-button\" href=\"".base_url('main/submit_property')."\" data-wow-delay=\"0.5s\" style=\"position:relative; top:10px;\"><B>PostProperty<span style=\"color: red; top:10px;\"> FREE</b></span></a>";
        // $login_logout_button="<a class=\"navbar-btn nav-button wow login\" href=".base_url('account')." data-wow-delay=\"0.4s\" id=\"account_button_header\" style=\"position:relative; top:10px;\">Account</a>";
        $login_logout_button='<a  href="'.base_url('account').'\" class="navbar-btn nav-button" id="account_button_header" style="background-color: white;color: rgb(26, 25, 25);border: 2px solid rgb(255, 255, 255);"><b>Account</b></a>';
        $logged_in=true; 
    }else{
        // $submit_property_button="<a class=\"navbar-btn nav-button \"href='".base_url('main/submit_property')."'\" data-wow-delay=\"0.5s\" style=\"position:relative; top:10px;\"><B>PostProperty<span style=\"color: red;\"> FREE</b></span></a>";
        // $login_logout_button="<a class=\"navbar-btn nav-button wow login \" href=\"".base_url('main/log_user')."\" data-wow-delay=\"0.5s\" id=\"login_button_header\" style=\"position:relative; top:10px;\">Login/Signup</a>";
        $login_logout_button='<a  href="'.base_url('main/log_user').'\" class="navbar-btn nav-button" style="background-color: white;color: rgb(26, 25, 25);border: 2px solid rgb(255, 255, 255);"><img src="https://img.icons8.com/small/24/000000/user.png" /><b>Login</b></a>';
        $logged_in=false;
    }
?>
        <!-- <nav class="navbar navbar-default ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url();?>"style="font-size: 35px;font-weight: bold;"><img
                        style="max-height: 44px;" src="<?=base_url('assets/img/shareshell_logo.png');?>" alt="Shareshell_logo"></a>
                </div>
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <?=$login_logout_button;?>
                        <?=$submit_property_button;?>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="<?=base_url();?>">Home</a>
                        </li>
                        <li class="wow" data-wow-delay="0.1s"><a class="" href="<?=base_url('properties');?>">Properties</a></li>
                        <li class="wow" data-wow-delay="0.4s"><a href="<?=base_url('main/aboutus');?>">About Us</a></li>
                        <li class="wow" data-wow-delay="0.4s"><a href="<?=base_url('blogs');?>">Blogs</a></li>
                        <li class="dropdown yamm-fw" data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Others<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-2">
                                            </div>
                                        <div class="col-sm-3">
                                            <h5>More Links</h5>
                                            <ul>
                                            <li class="wow" data-wow-delay="0.4s"><a href="<?=base_url('contact');?>">Contact</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="<?=base_url('faq');?>">FAQ page</a> </li> 
                                            </ul>
                                            <ul>
                                                <li><a href="<?=base_url('main/testimonial');?>">testimonials</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2"></div>
                                            <div class="col-sm-3">                                               
                                                <h5>More Links</h5>
                                                <ul>
                                                <li><a href="<?=base_url('main/myproperties');?>">Your properties</a>  </li>
                                                <li><a href="<?=base_url('main/privacypolicy');?>">Privacy and Policy</a> </li>
                                                <li><a href="<?=base_url('main/termsconditions');?>">Terms and Condition</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->



        <nav class="navbar navbar-default ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="" href="<?=base_url();?>" style="font-size: 35px;font-weight: bold;margin-left:0px;"><img
                        style="height:60px;" src="<?=base_url('assets/img/shareshell_new_logo.png');?>" alt=""></a>
            </div>
            <div class="collapse navbar-collapse yamm" id="navigation">
                <div class="button navbar-right" style="margin-top:10px;">
                    <!-- <button class="navbar-btn nav-button" onclick=" window.open('profile.html')" data-wow-delay="0.4s" style="background-color: white;color: rgb(26, 25, 25);border: 2px solid rgb(255, 255, 255);"><img src="https://img.icons8.com/small/24/000000/user.png" /><b>Login</b></button> -->
                    <?=$login_logout_button;?>
                    <a href="<?=base_url('main/submit_property');?>" class="navbar-btn nav-button" style="background-color: white;color: rgb(26, 25, 25);border: 2px solid rgb(82, 14, 114);border-radius: 10px; padding:10px;">
                    <b>PostProperty
                            <span
                                style="color: rgb(255, 255, 255);background-color: rgb(82, 14, 114);padding: 6px 20px;border-radius: 5px;">
                                FREE</b></span></a>
                </div>
                <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow" data-wow-delay="0.1s"><a class="" href="<?=base_url('properties');?>">Properties</a></li>
                <li data-wow-delay="0.4s"><a href="<?=base_url('main/favourites');?>"> <img src="https://img.icons8.com/ios/16/000000/like--v1.png" style="margin-top:-3px;"> My choice</a></li>
                <li class="wow" data-wow-delay="0.4s"><a href="<?=base_url('blogs');?>">Blogs</a></li>
                
                <li class="dropdown yamm-fw" data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Others<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-2">
                                            </div>
                                        <div class="col-sm-3">
                                            <h5>More Links</h5>
                                            <ul>
                                            <li class="wow" data-wow-delay="0.4s"><a href="<?=base_url('contact');?>">Contact</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="<?=base_url('faq');?>">FAQ page</a> </li> 
                                            </ul>
                                            <ul>
                                                <li><a href="<?=base_url('main/testimonial');?>">testimonials</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2"></div>
                                            <div class="col-sm-3">                                               
                                                <h5>More Links</h5>
                                                <ul>
                                                <li><a href="<?=base_url('main/myproperties');?>">Your properties</a>  </li>
                                                <li><a href="<?=base_url('main/privacypolicy');?>">Privacy and Policy</a> </li>
                                                <li><a href="<?=base_url('main/termsconditions');?>">Terms and Condition</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>



                    



                    

                    <!-- <li data-wow-delay="0.4s"><a href="contact.html"> Future Investment</a></li> -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>






      