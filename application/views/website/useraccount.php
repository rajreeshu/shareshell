<!DOCTYPE html>
<html class="no-js" lang = "en">


<head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SHARESHELL| Profile</title>
    <meta name="author" content="shareshell">
        <meta name="keyword" content="shareshell, your account, profile page">
        <meta name="description" content="check your shareshell account details and edit here">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<style>
    .form-group img{
        height:20px;
        margin-left:20px;
        cursor: pointer;
        opacity: 0.4;
    }
    .edit_btn{
        display:none;
    }

    body {
        background-color: rgb(241, 241, 241);
    }

    .post-property button {
        position: relative;
        border: 2px solid rgb(0, 0, 0);
        padding: 8px 50px;
        background-color: rgb(255, 255, 255, 0);


    }

    .profile-section {
        background-color: rgb(255, 255, 255);

        position: relative;

        width: 25%;
        height: 35em;
        z-index: 10;
        padding: 20px;

    }

    .profile-section img {
        border-radius: 3px;
        border: 3px solid white;
        margin-top: -150px;


    }

    .profile-section h5 {
        color: rgb(122, 122, 122);
        font-weight: 600;
        margin-top: 10px;
    }

    .profile-section h3 {
        color: rgb(70, 70, 70);
        font-weight: bold;
    }

    .profile-section p {
        color: rgb(119, 119, 119);
        font-weight: 400;
    }

    .toggle {
        background-color: rgb(252, 252, 252);
        color: rgb(36, 36, 36);

        position: relative;

        width: 100%;
        height: 35em;
        overflow: auto;

    }

    .feature {



        height: 50px;
        padding: 20px 15px 35px 30px;
        font-weight: 600;


        display: flex;

    }

    .feature img {
        height: 25px;
        margin: 0 8px;
    }

    .feature:hover {
        cursor: pointer;
        border-bottom: 3px solid rgb(255, 174, 0);
        font-weight: bold;



    }

    .contents p {
        font-weight: 500;
        padding: 20px 20px 0px 40px;

    }

    .proerty-th .proerty-item .item-thumb img {
        transition: all 0.2s linear 0s;
        display: block;
        position: relative;
        width: 100%;
        opacity: 0.7;
        min-height: 225px;
        max-height: 265px;
        padding: 15px;
    }

    .btn-finish {
        width: auto !important;
        border-radius: 25px !important;
        float: right !important;

    }

    .contact-btn {
        display: none;
    }

    .post-property-btn button:hover {
        background-color: rgb(255, 255, 255, 0.3) !important;
    }

    .container {
        padding-right: 0px;
        padding-left: 0px;
        margin-right: auto;
        margin-left: auto;
    }

    .remove:hover {
        background-color: rgb(133, 30, 30) !important;
        cursor: pointer !important;
    }

    .input-edit {
        width: 200px;
        margin-left: 40px;
        border-bottom: 2px solid #FDC600;
        background-color: rgb(252, 252, 252);
    }
    .edit-btn{
        display: none;
        background-color:#FDC600 ;
        font-weight: bold;
        padding: 0 14px;
        font-size: 10px;
    }
    .save-btn{
        background-color:#FDC600 ;
        font-weight: bold;
        padding: 0 14px;
        font-size: 10px;
        border-radius: 40px;
        
    }
    .input-edit{
        
    }
    .save-change{
        /* display: none; */
    }
    .heading-feature{
        display: none;
    }

    @media only screen and (max-width: 700px) {
        .post-property-btn {
            display: none;
        }

        .btn-finish {
            width: auto !important;
            border-radius: 5px !important;
            float: right !important;
            width: 100% !important;
            margin: none !important;

        }

        .contact-btn {
            position: relative;
            display: block;
            margin: auto;
            padding-top: 120px;
            width: 100%;
            text-align: center;
            justify-content: center;

        }

        .contact-btn img {
            height: 15em;
        }

        .all-content {
            flex-direction: column !important;
        }

        .profile-section {
            width: 100% !important;
            height: 100% !important;
            text-align: center !important;
            justify-content: center !important;
        }

        .feature {

            height: 60px;
            padding: 0 0 0 0 !important;
            font-weight: bold;

            font-size: 12px !important;
            justify-content: center !important;
            text-align: center !important;

            width: 90% !important;
            border-radius: 12px;

            

        }

        .feature:hover {
            cursor: pointer;
            background-color: rgb(218, 218, 218);
            font-weight: bold;
            border-bottom: none !important;



        }

        .feature p {
            margin-top: 20px !important;
            display: none;
        }

        .toggle {
            justify-content: center;
        }

        .profile-section img {
            border-radius: 3px;
            border: 3px solid white;
            margin-top: -150px;
            height: 200px;




        }

        .feature-section {
            flex-direction: row !important;



            margin: auto !important;
            width: 100% !important;
            padding: 20px;

            position: relative !important;
            background-color: #ffffff !important;


        }

        .feature img {
            height: 25px;
            margin: 21px 8px;
        }

        .contents {
            margin-top: -50px !important;
        }

        #change-password {
            margin-top: -50px !important;

        }
        .heading-feature h4{
            font-weight: bold;
            padding: 20px 38px;
            font-size: 30px;
            color: rgb(80, 79, 79);
            display: block;
            
        }
        .heading-feature{
        display:inline-block;
    }
    .contact-seller{
        margin-top: -50px;
    }



    }
    
</style>

<body>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?>  

<div class="container " style="padding:0px;">
        <div style="position: absolute;text-align: center;justify-content: center;width: 100%;margin: 202px 260px;"
            class="post-property-btn">
            <button id="post_property_btn"
                style="background-color: rgb(255, 255, 255,0);border: 3px solid white;padding: 10px 20px;color: white;font-weight: bold;border-radius: 50px;">
                POST NEW PROPERTY
            </button>
        </div>
        <div>
            <img src="https://source.unsplash.com/random/200*800/?realestate" alt=""
                style="width: 100%;height: 20em;object-fit: cover;z-index: -1;">
        </div>

        <div class="all-content" style="display: flex;">
            <div class=" profile-section " style="justify-items: flex-start;">



                <div>
                    <img id="PicturePreview" src="" alt="profile picture" style="width:200px; height:200px; object-fit: cover;">
                </div>

                <div>
                    <h3 id="title_name"></h3>
                    <h5>ABOUT</h5>
                </div>

                <div>
                    <p id="user_bio"> 
                       
                    </p>
                </div>
                <hr>
                <div class="contact-btn" style="display: none;">
                    <img src="Real Estate Agent_Outline.svg" alt="">

                    <div id="save">
                        <button
                            style="background-color: #ffffff;height: 40px;width:70%;border-radius: 5px;color:#1f1f1f;font-weight: bold;border: 1px solid #8d8d8d;margin:auto;margin-top:-8px;">
                            POST NEW PROPERTY
                        </button>
                    </div>
                </div>
                <div class="contact-btn" style="display: none;">
                    <img src="166.-Team-Chat.svg" alt="">

                    <div id="save">
                        <button
                            style="background-color: #ffffff;height: 40px;width:70%;border-radius: 5px;color:#1f1f1f;font-weight: bold;border: 1px solid #8d8d8d;margin:auto;margin-top:-8px;">
                            CONTACT
                        </button>
                    </div>
                </div>

            </div>
            <div class="feature-section"
                style="display: flex;position: absolute;margin-top: 50px;z-index: 11;z-index: 112;;margin: auto;width: 63em;margin-left: 253px;background-color: rgb(252, 252, 252);color: rgb(41, 41, 41);">
                <div class="feature one"  onclick="myfunc()">
                    <img src="<?=base_url('assets/img/');?>user.png" alt="">
                    <p>Overview</p>
                </div>
                <div class="feature two"  onclick="myfunc2()">
                    <img src="<?=base_url('assets/img/');?>house-my.png" alt="">
                    <p>Properties</p>
                </div>
                <!-- <div class="feature three" onclick="myfunc3()">
                    <img src="<?=base_url('assets/img/');?>secure.png" alt="">
                    <p>Password</p>
                </div>
                <div class="feature four" onclick="myfunc4()">
                    <img src="<?=base_url('assets/img/');?>contact.png" alt="">
                    <p>Contact</p>
                </div> -->

            </div>


            <div class="toggle">
                
                <div class="heading-feature">
                    <h4>Objective</h4>
                </div>

                <div style="margin-top: 50px;">
                    <div class="contents" id="overview">
                        <div>
                        <p><strong>First Name : </strong><span id="user_first_name"></span>  <span class="edit_span"><button class="edit-btn edit_btn" data-field="first_name">Edit</button></span>
                        </p>
                        <!-- <div style="flex-direction: row;" class="save-change">
                            <input type="text" class="input-edit">
                            <button class="save-btn">Save Changes</button>
                        </div> -->
                        </div>

                        <div>
                        <p><strong>Last Name : </strong><span id="user_last_name"></span>  <span class="edit_span"><button class="edit-btn edit_btn" data-field="last_name">Edit</button></span>
                        </p>
                        <!-- <div style="flex-direction: row;" class="save-change">
                            <input type="text" class="input-edit">
                            <button class="save-btn">Save Changes</button>
                        </div> -->
                        </div>


                    <div>
                        <p><strong>Email : </strong><span id="user_email"></span> </p>
                        <!-- <div style="flex-direction: row;" class="save-change">
                            <input type="text" class="input-edit">
                            <button class="save-btn">Save Changes</button>
                        </div> -->
                    </div>

                    <div>
                        <p><strong>Phone : </strong><span id="user_phone"></span> <span class="edit_span"><button class="edit-btn edit_btn" data-field="phone">Edit</button></span> </p>
                        <!-- <div style="flex-direction: row;" class="save-change">
                            <input type="text" class="input-edit">
                            <button class="save-btn">Save Changes</button>
                        </div> -->
                    </div>
                    <div>
                        <p><strong>Gender : </strong><span id="user_gender"></span> <span class="edit_span"><button class="edit-btn edit_btn edit-details-gender" data-field="gender">Edit</button></span> </p>
                        <!-- <div style="flex-direction: row;" class="save-change">
                            <input type="text" class="input-edit">
                            <button class="save-btn">Save Changes</button>
                        </div> -->
                    </div>
                        <div>
                        <p><strong>Username : </strong><span id="user_username"></span> <span class="edit_span"><button class="edit-btn edit_btn" data-field="username">Edit</button></span> </p>
                        <!-- <div style="flex-direction: row;" class="save-change">
                            <input type="text" class="input-edit">
                            <button class="save-btn">Save Changes</button>
                        </div> -->
                        </div>

                        <div class="clear" style="padding: 20px;">


                            <div class="col-sm-11 col-sm-offset-1">
                                <input type='button' id="edit_profile_btn" class='btn btn-finish btn-primary edit-profile' name='update' style=""
                                    value='Edit Profile' />
                            </div>

                        </div>
                    </div>

                    <div class="contents" style="padding: 10px;display: none;" id="properties">

                       


                        <div class="col-md-12 clear">

                            <div id="list-type" class="proerty-th">


                                <div class="col-sm-12 col-md-4 p0">

                                    <div class="box-two proerty-item">


                                        <div class="item-thumb">
                                            <div class="remove"
                                                style="width: 100%;height: 3.5em;background-color: indianred;color: white;text-align: center;position:absolute;z-index: 111;">
                                                <p style="margin-top: -5px;"><strong>Remove this Property</strong></p>
                                            </div>

                                            <a href="property-1.html"><img src="assets/img/demo/property-3.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">

                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>

                                            <div style="flex-direction: column;"></div>
                                            <span class="proerty-price pull-left" style="margin-top: -7px;"> Rs
                                                300,000</span>
                                            <span class="pull-left" style="font-weight: 400;"><b>2 BHK Apartment</b> for
                                                Rent in Kalinga Vihar,Bhubaneswar</span>









                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla
                                                quis
                                                dapibus nisl. Suspendisse ultricies commodo <a href="">View Detailes</a>
                                            </p>


                                        </div>


                                    </div>
                                </div>



                                <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">

                                            <div class="remove"
                                                style="width: 100%;height: 3.5em;background-color: indianred;color: white;text-align: center;position:absolute;z-index: 111;">
                                                <p style="margin-top: -5px;"><strong>Remove this Property</strong></p>
                                            </div>
                                            <a href="property-1.html"><img src="assets/img/demo/property-3.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>

                                            <div style="flex-direction: column;"></div>
                                            <span class="proerty-price pull-left" style="margin-top: -7px;"> Rs
                                                300,000</span>
                                            <span class="pull-left" style="font-weight: 400;"><b>2 BHK Apartment</b> for
                                                Rent in Kalinga Vihar,Bhubaneswar</span>








                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla
                                                quis
                                                dapibus nisl. Suspendisse ultricies commodo <a href="">View Detailes</a>
                                            </p>



                                        </div>


                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <div class="remove"
                                                style="width: 100%;height: 3.5em;background-color: indianred;color: white;text-align: center;position:absolute;z-index: 111;">
                                                <p style="margin-top: -5px;"><strong>Remove this Property</strong></p>
                                            </div>
                                            <a href="property-1.html"><img src="assets/img/demo/property-3.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>

                                            <div style="flex-direction: column;"></div>
                                            <span class="proerty-price pull-left" style="margin-top: -7px;"> Rs
                                                300,000</span>
                                            <span class="pull-left" style="font-weight: 400;"><b>2 BHK Apartment</b> for
                                                Rent in Kalinga Vihar,Bhubaneswar</span>









                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla
                                                quis
                                                dapibus nisl. Suspendisse ultricies commodo <a href="">View Detailes</a>
                                            </p>



                                        </div>


                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">

                                            <div class="remove"
                                                style="width: 100%;height: 3.5em;background-color: indianred;color: white;text-align: center;position:absolute;z-index: 111;">
                                                <p style="margin-top: -5px;"><strong>Remove this Property</strong></p>
                                            </div>
                                            <a href="property-1.html"><img src="assets/img/demo/property-3.jpg"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>

                                            <div style="flex-direction: column;"></div>
                                            <span class="proerty-price pull-left" style="margin-top: -7px;"> Rs
                                                300,000</span>
                                            <span class="pull-left" style="font-weight: 400;"><b>2 BHK Apartment</b> for
                                                Rent in Kalinga Vihar,Bhubaneswar</span>









                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla
                                                quis
                                                dapibus nisl. Suspendisse ultricies commodo <a href="">View Detailes</a>
                                            </p>



                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact-seller" id="contact-seller"
                        style="display: none;width: 100%;padding: 10px 50px;">

                        


                        <h5><strong>Please share your contact</strong></h5>

                        <div class="form-group">
                            <label>Name: <small>(required)</small></label>
                            <input type="Name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Phone no: <small>(required)</small></label>
                            <input type="number" class="form-control" placeholder="91+">
                        </div>
                        <div class="form-group">
                            <label>Email: <small>(required)</small></label>
                            <input type="email" class="form-control" placeholder="xyz@abc.com">
                        </div>

                        <div class="clear">


                            <div class="col-sm-11 col-sm-offset-1" >
                                <input type='button' class='btn btn-finish btn-primary pull-right' name='update'
                                    value='Get Contact Detailes' />
                            </div>

                        </div>



                    </div>

                    <div id="change-password" style="display: none;margin-top: 70px;">
                        <div>
                            <div>
                                <div class=" profiel-container">

                                    <form action="" method="">



                                        <div class="clear">

                                            <div class="col-sm-10 col-sm-offset-1">

                                                <div class="form-group">
                                                    <label>Current Password <small>(required)</small></label>
                                                    <input name="Password" type="password" class="form-control">
                                                    <div>
                                                        <li><a href="forget_password.html">Forgot password</a> </li>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>New password : <small>(required)</small></label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm New password : <small>(required)</small></label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <input type='button' class='btn btn-finish btn-primary pull-right'
                                                    name='update' value='Update' />
                                            </div>

                                        </div>




                                    </form>

                                </div>
                            </div><!-- end row -->
                        </div>




                    </div>
                </div>
            </div>
        </div>

        <!-- Footer area-->

    </div>

<!-- old Ui Start -->
  


    <!-- Footer area-->
<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import'); 

?>
</body>

<script type="text/javascript">

    var key="<?php echo $this->security->get_csrf_hash(); ?>"; 
    // console.log(key);

    $("#account_button_header").text("Logout");
    $("#account_button_header").attr("href","<?=base_url('main_helper/logout_account');?>");

    $("#edit_profile_btn").click(function(e){
        e.preventDefault();
        $(".edit_btn").toggle();
        this_val=$(this).val();
        console.log(this_val);
        if(this_val=="Edit Profile"){
            $(this).val("Save Changes");
            
            // $("#your_profile_heading").html("EDIT PROFILE");
            
        }else{
            $(this).val("Edit Profile");
            $(".save-change").hide();
            $(".edit_btn").hide();
            // $("#your_profile_heading").html("YOUR PROFILE")
        }
    });

    // $("#account_button_header").click(function(e){
    //     e.preventDefault();

    //     $.ajax({
    //     url:"<?=base_url('main_helper/logout_account');?>",
    //     type:"POST",
    //     async:false,
    //     data:{
    //         "<?php echo $this->security->get_csrf_token_name();?>":key
    //         // user_id:"<?=$_SESSION['user_id_shareshell'];?>"
    //         },
    //         dataType:"json",
    //         success:function(data){
    //             console.log(key);
    //             key=data.key;
    //             console.log(key);

               
    //             console.log(data);
    //         },
    //         error:function(data){
    //             console.log(data);
    //             // result=data;
    //         }
    //     });

    // });


function load_content(){
        $.ajax({
        url:"<?=base_url('main_helper/user_account_detail');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            user_id:"<?=$_SESSION['user_id_shareshell'];?>"
            },
            dataType:"json",
            success:function(data){
                console.log(data);
                key=data.key;

                // $("#user_fullname").html(data.data.first_name+" "+data.data.last_name);
                $("#user_first_name").html(data.data['first_name'].charAt(0).toUpperCase()+data.data['first_name'].slice(1));
                $("#user_last_name").html(data.data['last_name']);
                $("#title_name").html(data.data.first_name+" "+data.data.last_name);
                $("#user_email").html(data.data['email']);
                $("#user_phone").html(data.data['phone']);
                $("#user_gender").html(capital_first(data.data['gender']));
                $("#user_username").html(data.data['username']);
                $("#user_bio").html(data.data['user_bio']);
                $("#user_facebook").html(data.data['facebook']);
                $("#user_facebook_link").attr('href',data.data['facebook']);
                $("#user_twitter").html(data.data['twitter']);
                $("#user_twitter_link").attr('href',data.data['twitter']);
                $("#user_website").html(data.data['website']);
                if(data.data['image']!=""){
                    $("#PicturePreview").attr("src","<?=base_url('utility/user_image/');?>"+data.data['image'].replace(/\.[^/.]+$/, "_thumb")+"."+/[^.]+$/.exec(data.data.image));
                }else{
                    $("#PicturePreview").attr("src",'<?=base_url('assets/img/');?>'+user_image_male_female(data.data['gender']));
                }
                // console.log(user_image_male_female(data.data['gender']));
            },
            error:function(data){
                console.log(data);
                // result=data; 
            }
    });
}
load_content();

    $(".edit_btn").click(function(){
        $(this).hide();

    //    $(this).parent().parent().append('<div class="input"> <input type="text" class="update_field" value="'+$(this).siblings(".label_p").children('.prev_data').html()+'"  style="border: 2px solid rgb(252, 172, 0);width:15em " /><b><span class="save_change" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);"> Save Details</span></b></div>'); 
       if(!$(this).hasClass("edit-details-gender")){
        $(this).parent().parent().append('<div style="flex-direction: row;" class="save-change"><input type="text" class="input-edit"><button class="save-btn">Save Changes</button></div> '); 
       }

       
       // $(".update_field").focus();
        // $(".update_field").val($(".update_field").val());

        // $(".update_field").val($(".update_field").val());
    });

    $(".edit-details-gender").click(function() {
        $(this).hide();
        $(this).parent().parent().append(select_gender_update);
    });

    $(document).on('click','.save-btn',function(){
      
        var tar=$(this).parent().siblings('.edit_span').children(".edit_btn").data('field');
        
        var valu=$(this).siblings('input').val();
        if(valu==undefined){
            valu=$(this).siblings('select').val();
        }
        if(valu==""){
            alert("Empty Field");
            return;
        }
        console.log(tar+" : "+valu);
        var clickon=$(this);
        $.ajax({
        url:"<?=base_url('main_helper/update_user_data');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            user_id:"<?=$_SESSION['user_id_shareshell'];?>",
            field:tar,
            value:valu
            },
            dataType:"json",
            success:function(data){
                key = data.key;
                console.log(data);
                if(data.data=="username already taken"){
                    alert(data.data);
                }
                    // var x=clickon.parent().parent().siblings(".btn_edit").css('display','block');
                    console.log(clickon.siblings(".edit_span").children(".edit_btn"));
                    clickon.parent().siblings(".edit_span").children(".edit_btn").css('display','inline');
                    clickon.parent().css('display','none');
                // }
                load_content();
            },
            error:function(data){
                console.log(data);
            }
    });
});

var gen_val_old=$(".edit-details-gender").parent().siblings("#user_gender").html();
console.log(gen_val_old);

// var select_gender_update="<div class='input'>";
var select_gender_update='<div style="flex-direction: row;" class="save-change">';
select_gender_update+="<select style='border: 2px solid rgb(252, 172, 0);width:15em; height:40px;'>";

select_gender_update+="<option value=''>-Select-</option>";
select_gender_update+="<option value='male'>male</option>";

select_gender_update+="<option value='female'>female</option>";
select_gender_update+="<option value='other'>other</option>";
select_gender_update+="</select>"
// select_gender_update+='<b><span class="save_change" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);"> Save Details</span></b>';
select_gender_update+='<button class="save-btn">Save Changes</button>';
select_gender_update+="</div>";

//my properties start

function load_property_content(page_no){

$.ajax({
    url:"<?=base_url('main_helper/my_property_data');?>",
    type:"POST",
    async:false,
    data:{
        "<?php echo $this->security->get_csrf_token_name();?>":key,
        user_id:"<?=$this->security->xss_clean($this->session->userdata('user_id_shareshell'));?>"
        },
        dataType:"json",

        success:function(data){
            key=data.key;

            console.log(data);
            var property_list="";
            var no_of_page="";
            var no_of_page_code="";

            no_of_page=Math.ceil(data.row_count/$("#items_per_page").val());
            console.log(no_of_page);

            $.each(data.data,function() {
                
                type_change="";
                if(this.avail=="combined"){
                    type_change="All";
                }else if(this.avail=="girl"){
                    type_change="F";
                }else if(this.avail="boy"){
                    type_change="M";
                }

                // property_list+='<div class="col-sm-6 col-md-4 p0">';
                // property_list+='<div class="box-two proerty-item">';
                // property_list+='<div class="item-thumb">';
                // property_list+='<a href="<?=base_url('property/');?>'+this.sn+"/"+slug_js(this.name)+'" ><img src="<?=base_url('utility/main_image');?>/'+this.main_image+'" style="height:225px; object-fit: cover;"></a>';
                // property_list+='</div>';
                // property_list+='<div class="item-entry overflow">';
                // property_list+='<h5><a href="<?=base_url('property/');?>'+this.sn+"/"+slug_js(this.name)+'"> '+this.name.toUpperCase()+' </a></h5>';
                // property_list+='<div class="dot-hr"></div>';
                // property_list+='<span class="pull-left"><b> '+this.min_bed+' </b></span>';
                // property_list+='<span class="proerty-price pull-right"> &#8377 '+this.price+'</span>';
                // property_list+='<p style="display: none; overflow: hidden; text-overflow: ellipsis;max-height: 72px;-webkit-line-clamp: 2;">'+this.description+'</p>';
                // property_list+='<div class="property-icon">';
                // property_list+='<span style="font-size:22px;"><b> &#9893;</b></span><span style="text-transform: capitalize;"> ( '+type_change+' ) |</span>';
                // property_list+='<span style="font-size:22px;"><b> &#9963;</b></span><span style="text-transform: capitalize;"> ( '+this.type+' ) |</span>';
                // property_list+='<span style="font-size:22px;"><b> &#9983;</b></span><span style="text-transform: capitalize;"> ( '+this.status+' ) </span>';
                // property_list+= '<div style="margin-top:3px;"><a href="#" class="delete_property" data-propid='+this.sn+' onclick="remove_click('+this.sn+')"><b style="color: rgb(228, 13, 13);">REMOVE PROPERTY</b></a></div>';
                // property_list+='</div>';
                // property_list+='</div>';
                // property_list+='</div>';
                // property_list+='</div>';

                property_list+='<div class="col-sm-12 col-md-4 p0">';
                property_list+='<div class="box-two proerty-item">';
                property_list+='<div class="item-thumb">';
                property_list+='<div class="remove" onclick="remove_click('+this.sn+')" style="width: 100%;height: 3.5em;background-color: indianred;color: white;text-align: center;position:absolute;z-index: 111;">';
                property_list+='<p style="margin-top: -5px;"><strong>Remove this Property</strong></p></div>';
                property_list+='<a href="<?=base_url('property/');?>'+this.sn+"/"+slug_js(this.name)+'"><img src="<?=base_url('utility/main_image');?>/'+this.main_image+'" style="height:225px; object-fit: cover;"></a></div>';
                property_list+='<div class="item-entry overflow">';
                property_list+='<h5><a href="<?=base_url('property/');?>'+this.sn+"/"+slug_js(this.name)+'"> Super nice villa </a></h5>';
                property_list+='<div class="dot-hr"></div><div style="flex-direction: column;"></div>';
                property_list+='<span class="proerty-price pull-left" style="margin-top: -7px;"> Rs '+this.price+'</span><br>';
                property_list+='<span class="pull-left" style="font-weight: 400;"><b> '+this.min_bed+' BHK Apartment</b> for  '+this.status+'<br> in '+this.city+'</span>';
                // property_list+='<p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo <a href="">View Detailes</a></p>';
                property_list+='</div></div></div>';

            });

            var empty_property_list="";
            empty_property_list+="<center><div>";
            empty_property_list+="<h2>No Listed property Found</h2>";
            empty_property_list+="<br><a href=\"<?=base_url('main/submit_property');?>\" class=\"btn btn-default\">Post a new Property</a>";
            empty_property_list+="</div></center>";

            property_list=(property_list=="") ? empty_property_list:property_list;
            $("#list-type").html(property_list);
            // console.log(property_list);

                // for(i=1;i<=no_of_page;i++){
                //     if(i==page_no){
                //         no_of_page_code+='<li><a href="#" class="pagination_box" onclick="load_page_content('+i+')">'+i+'</a></li>';
                //     }else{
                //         no_of_page_code+='<li><a href="#" onclick="load_page_content('+i+')">'+i+'</a></li>';    
                //     }
                    
                // }
                // $("#pagination_pages").html(no_of_page_code);


        },
        error:function(data){
            console.log(data);
        }
    });
}
// load_property_content();

function remove_click(sn){

console.log(sn);
 if(confirm("Delete this Property?")) {
    
    $.ajax({
        url:"<?=base_url('main_helper/delete_property_byid');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            "property_id":sn
            },
            dataType:"json",
            success:function(data){
                key=data.key;

                load_property_content(1);
                // console.log(data);
                // return;


                
            },
            error:function(data){
                console.log(data);
                // result=data;
            }
    });
}

}

$("#post_property_btn").click(function(e){
    e.preventDefault();
    location.href="<?=base_url('main/submit_property')?>";
});


// $(".edit-profile").on("click",function(){
//     $(".edit-btn").toggle();
// });
// $(".edit-btn").on("click",function(){

// $(".save-change").toggle();
// $(".edit-btn").toggle();

// })

$(".one").click(function(){
  $("h4").html("Overview");
});

$(".Two").click(function(){
  $("h4").html("Properties");
});

$(".three").click(function(){
  $("h4").html("Password");
});

$(".four").click(function(){
  $("h4").html("Contact");
});

function myfunc() {
            document.getElementById("overview").style.display = "block";
            document.getElementById("properties").style.display = "none";
            document.getElementById("change-password").style.display = "none";




        }

        function myfunc2() {
            document.getElementById("overview").style.display = "none";
            document.getElementById("change-password").style.display = "none";

            document.getElementById("properties").style.display = "block";
            document.getElementById("contact-seller").style.display = "none";
            load_property_content();


        }


        function myfunc3() {
            document.getElementById("overview").style.display = "none";
            document.getElementById("properties").style.display = "none";
            document.getElementById("change-password").style.display = "block";
            document.getElementById("contact-seller").style.display = "none";


        }

        function myfunc4() {
            document.getElementById("overview").style.display = "none";
            document.getElementById("properties").style.display = "none";
            document.getElementById("change-password").style.display = "none";
            document.getElementById("contact-seller").style.display = "block";

        }

</script>


</html>