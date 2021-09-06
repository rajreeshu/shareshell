          <style>
              .single-footer {
    margin-top: 35px;
    font-weight: 600;
}


.footer ul li a {
    color: #ffffff;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 13px;
}
.footer p {
    line-height: 25px;
    font-weight: 600;

    font-size: 13px;
    padding-bottom: 20px;
}
.footer h4{
    font-weight:bold;
    color: #ffffff;


}
.footer {
    padding: 0px 0px 60px;
    background: rgb(34 34 34) none repeat scroll 0% 0%;
}
.footer-area {
    border-top: 0.5px solid #ffffff;
    background-color: rgb(39, 39, 39);
    color: #ffffff;
}
.footer img {
    height: 135px;
}
.footer img {
    margin-bottom: -23px;
}
@media only screen and (max-width: 600px){
    .footer-adress li img{
        width:20px !important;
    }
}
          </style>
          <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow">
                            <div class="single-footer">
                                <h4>About us </h4>
                                <div class="footer-title-line"></div>

                                <!-- <img src="<?=base_url();?>assets/img/footer-logo." alt="ShareShell"> -->
                               <!-- <b>ShareShell</b> -->
                               <a href="<?=base_url();?>">
                               <img src="<?=base_url('assets/img/shareshell_mobile_logo.png');?>" alt="ShareShell_logo">
                                </a>
                                <br>
                                
                                <ul class="footer-adress">
                                    <li> <img style="height:21px;margin-bottom:5px;" src="<?=base_url('assets/img/location.png');?>" alt=""> flat no.3, Bhubaneswar, <br><span style="margin-left:23px;">Odisha, India.</span></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow ">
                            <div class="single-footer">
                                <h4>Quick links </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="<?=base_url('properties')?>">Properties</a>  </li> 
                                    <!-- <li><a href="#">Services</a>  </li>  -->
                                    <li><a href="<?=base_url('main/submit_property')?>">Submit property </a></li> 
                                    <li><a href="<?=base_url('contact')?>">Contact us</a></li> 
                                    <li><a href="<?=base_url('faq')?>">faq</a>  </li> 
                                    <li><a href="<?=base_url('main/termsconditions')?>">Terms and Conditions </a>  </li> 
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-md-3 col-sm-6 wow ">
                            <div class="single-footer">
                                <h4>Last Blogs</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-blog">
                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="single.html">
                                                <img src="<?=base_url();?>assets/img/demo/small-proerty-2.jpg">
                                            </a>
                                            <span class="blg-date">12-12-2016</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="single.html">Add news functions </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li> 

                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="single.html">
                                                <img src="<?=base_url();?>assets/img/demo/small-proerty-2.jpg">
                                            </a>
                                            <span class="blg-date">12-12-2016</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="single.html">Add news functions </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li> 

                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="single.html">
                                                <img src="<?=base_url();?>assets/img/demo/small-proerty-2.jpg">
                                            </a>
                                            <span class="blg-date">12-12-2016</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="single.html">Add news functions </a></h6> 
                                            <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li> 


                                </ul>
                            </div>
                        </div> -->
                        <div class="col-md-3 col-sm-6 wow ">
                            <div class="single-footer news-letter">
                                <h4>Stay in touch</h4>
                                <div class="footer-title-line"></div>
                                <p>7872390186</br>
                                Monday - Saturday (9:00AM to 7:00PM IST)</br>
                                Email: contact_us@shareshell.in</p>
                                <!-- /input-group 

                                <form>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="E-mail ... ">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary subscribe" type="button"><i class="pe-7s-paper-plane pe-2x"></i></button>
                                        </span>
                                    </div>
                                    
                                </form>
                                -->

                                <div class="social pull-left"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/shareshell10"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/shareshell10/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                        
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/share.shell" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                        
                                    </ul> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <p class="" style="text-align:left;margin-bottom: -10px; margin-top:0px;">
                            <b>Disclaimer:-</b><br>Shareshell Realty Services Limited is only an intermediary offering its platform to advertise properties of the renter for a Customer/Buyer/User coming on its Website and is not and cannot be a party to or privy to or control in any manner any transactions between the renter and the Customer/Buyer/User. All the offers and discounts on this Website have been extended by various Builders/Developers who have advertised their products. Shareshell is only communicating the offers and not renting or rendering any of those products or services. It neither warrants nor is it making any representations concerning to offer(s) made on the site. Shareshell Realty Services Limited shall neither be responsible nor liable to mediate or resolve any disputes or disagreements between the Customer/Buyer/User and the renter and both renter and Customer/Buyer/User shall settle all such disputes without involving Shareshell in any manner.
                        </p>
                        <hr>
                        <div  style="margin-top:-15px;">
                        <div class="pull-left ">
                            <span> (C) <a href="<?=base_url();?>">shareshell</a> , All rights reserved 2021  </span> 
                        </div> 
                        <div class="bottom-menu pull-right"> 
                            <ul> 
                                <li><a class="wow fadeInUp animated" href="<?=base_url();?>" data-wow-delay="0.2s">Home</a></li>
                                <li><a class="wow fadeInUp animated" href="<?=base_url('properties')?>" data-wow-delay="0.3s">Property</a></li>
                                <li><a class="wow fadeInUp animated" href="<?=base_url('faq')?>" data-wow-delay="0.4s">Faq</a></li>
                                <li><a class="wow fadeInUp animated" href="<?=base_url('contact');?>" data-wow-delay="0.6s">Contact</a></li>
                            </ul> 
                        </div>
                    </div>

                    </div>
                </div>
            </div> -->

        </div>

