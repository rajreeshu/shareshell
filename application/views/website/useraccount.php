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
    .form-group label{
      
    }
    /* .input{
        display:none;
    } */
    .edit_btn{
        display:none;
    }
    
</style>

<body>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?>  

    <div class="page-head">
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title">Hello : <span class="orange strong" id="title_name"></span></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

 

    <!-- property area -->
    <div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 profiel-container">

                    
                        <div class="profiel-header">
                            <h3>
                                <b id="your_profile_heading"> YOUR PROFILE</b><br>
                                <small>This information will let us know more about you.</small>
                            </h3>
                            <hr>
                        </div>
 
                        <div class="clear">
                            <div class="col-sm-3 col-sm-offset-1">
                                <div class="picture-container">
                                    <div class="picture" style="height:auto; background-color: white; border: 0px;">
                                        
                                        <img src="<?=base_url('assets/img/avatar_boy.jpg');?>" class="picture-src" id="PicturePreview" title="" style="object-fit: cover; border-radius: 3px; border:2px solid #fdc600;"/>
                                        <!-- <input type="file" id="wizard-picture"> -->
                                    </div>
                                    <h5>
                                        <p id="user_bio" style="text-align:left; margin-top: -30px; padding-left: 5px ; font-family: Gill Sans Extrabold, sans-serif; font-size: 12px; color: grey;"></p>
                                    </h5>
                                </div>
                            </div>

                            <div class="col-sm-6 padding-top-25">

                                <div class="form-group">
                                    <label id="labelname" class="label_p">First Name: <span style="color:#999999;" id="user_first_name" class="prev_data"></span></label>
                                    
                                    <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="btn-name edit_btn edit_btn_img" data-field="first_name">
                                    <!-- <div id="input-name" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div> -->
                                   

                                </div>

                                <div class="form-group">
                                    <label id="labelname" class="label_p">Last Name: <span style="color:#999999;" id="user_last_name" class="prev_data"></span></label>
                                    
                                    <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="btn-name edit_btn edit_btn_img" data-field="last_name">
                                    <!-- <div id="input-name" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div> -->
                                   

                                </div>
        
                                <div class="form-group">
                                    <label class="label_p">Email: <span style="color:#999999;" id="user_email" class="prev_data"></span></label>
                                    <!-- <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-email edit_btn" data-field="email"> -->
                                    

                                </div>
                                <div class="form-group">
                                    <label class="label_p">Phone: <span style="color:#999999;" id="user_phone" class="prev_data"></span></label>
                                    <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-detailes edit_btn edit_btn_img" data-field="phone">
                                   


                                </div>
                                <div class="form-group">
                                    <label class="label_p">Username: <span style="color:#999999;" id="user_username" class="prev_data"></span></label>
                                    <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-detailes edit_btn edit_btn_img" data-field="username">
                                    <!-- <div id="input-username" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div> -->


                                </div>
                                <div class="form-group">
                                    <label class="label_p">Gender: <span style="color:#999999;" id="user_gender" class="prev_data"></span></label>
                                    <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-details-gender edit_btn" data-field="gender">
                                    <!-- <div id="input-gender" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div> -->


                                </div>

                                <div class="form-group">
                            <label class="label_p">Facebook: 
                                <!-- <a href="" id="user_facebook_link" target="_blank"> -->
                                    <span style="color:#999999;" id="user_facebook" class="prev_data"></span>
                                <!-- </a> -->
                            </label>
                                    <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-detailes edit_btn edit_btn_img" data-field="facebook">
                                    <!-- <div id="input-facebook" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div> -->


                            </div>

                            <div class="form-group">
                                <label class="label_p">Twitter: 
                                <!-- <a href="" id="user_twitter_link" target="_blank"> -->
                                    <span style="color:#999999;" id="user_twitter" class="prev_data"></span>
                                <!-- </a> -->

                            </label>
                            <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-detailes edit_btn edit_btn_img" data-field="twitter">
                            <!-- <div id="input-name" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div> -->


                            </div>

                            <div class="form-group">
                                <label class="label_p">Website: 
                                <!-- <a href="" id="user_twitter_link" target="_blank"> -->
                                    <span style="color:#999999;" id="user_website" class="prev_data"></span>
                                <!-- </a> -->

                            </label>
                            <img src="<?=base_url('assets/img/edit.png');?>" alt="edit" class="edit-detailes edit_btn edit_btn_img" data-field="website">
                            <!-- <div id="input-name" class="input"> 
                                        <input type="text"  style="border: 2px solid rgb(252, 172, 0);width:15em " />
                                        <b><span id="contact-owner" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);">Save Detailes</span></b>
                                    </div> -->


                            </div>
                            </div>


                        </div>

                </div>

                <div class="clear">
                    <br>
                    <hr>
                    
                    <div class="col-sm-5 col-sm-offset-1">

                    </div>

                </div>



            <div class="col-sm-4 col-sm-offset-1">
                <br>
               <a href="<?=base_url('contact');?>"><input  type='button' class='btn btn-finish btn-primary' name='Male us your problem (help)' value='E-male us (help)' /></a> 

               
                
            </div>
            
            
            <div class="col-sm-4 col-sm-offset-2 float-right">
                <br>
                <a href="<?=base_url("main/myProperties");?>"><input type='button' class='btn btn-finish btn-primary' name='See your submitted property' value='My properties' /></a>
            </div>
            <br>

                        <div class="col-sm-4 col-sm-offset-1">
                <br>
               <a href="<?=base_url('main/changePassword');?>"><input  type='button' class='btn btn-finish btn-primary' name='Male us your problem (help)' value='Change Password' /></a> 

               
                
            </div>
            
            
            <div class="col-sm-4 col-sm-offset-2 float-right" style="">
                <br>
                <a href="#" id="edit_profile_btn"><input type='button' class='btn btn-finish btn-primary' name='See your submitted property' value='Edit Profile' /></a>
            </div>
            


    </div>
    </div>

</div>
    <br>
    


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
        this_val=$(this).children().val();
        if(this_val=="Edit Profile"){
            $(this).children().val("Save Changes");
            $("#your_profile_heading").html("EDIT PROFILE");
            
        }else{
            $(this).children().val("Edit Profile");
            $("#your_profile_heading").html("YOUR PROFILE")
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

                $("#user_first_name").html(data.data['first_name'].charAt(0).toUpperCase()+data.data['first_name'].slice(1));
                $("#user_last_name").html(data.data['last_name']);
                $("#title_name").html(data.data.first_name+" "+data.data.last_name);
                $("#user_email").html(data.data['email']);
                $("#user_phone").html(data.data['phone']);
                $("#user_gender").html(data.data['gender']);
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

    $(".edit_btn_img").click(function(){
        $(this).hide();

       $(this).parent().append('<div class="input"> <input type="text" class="update_field" value="'+$(this).siblings(".label_p").children('.prev_data').html()+'"  style="border: 2px solid rgb(252, 172, 0);width:15em " /><b><span class="save_change" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);"> Save Details</span></b></div>'); 
        // $(".update_field").focus();
        // $(".update_field").val($(".update_field").val());

        // $(".update_field").val($(".update_field").val());
    });

    $(".edit-details-gender").click(function() {
        $(this).hide();
        $(this).parent().append(select_gender_update);
    });

    $(document).on('click','.save_change',function(){
        // alert("hello");
        // $(this).parent().parent().siblings(".edit_btn").css('background','red');
        var tar=$(this).parent().parent().siblings('.edit_btn').data('field');
        
        var valu=$(this).parent().siblings('input').val();
        if(valu==undefined){
            valu=$(this).parent().siblings('select').val();
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
                    clickon.parent().parent().siblings(".edit_btn").css('display','inline');
                    clickon.parent().parent().css('display','none');
                // }
                load_content();
            },
            error:function(data){
                console.log(data);
            }
    });
});

var gen_val_old=$(".edit-details-gender").siblings(".label_p").children(".prev_data").html();
console.log(gen_val_old);

var select_gender_update="<div class='input'>";
select_gender_update+="<select value='"+gen_val_old+"' style='border: 2px solid rgb(252, 172, 0);width:15em; height:40px;'>";
select_gender_update+="<option value='male'>male</option>";
select_gender_update+="<option value='female'>female</option>";
select_gender_update+="<option value='other'>other</option>";
select_gender_update+="</select>"
select_gender_update+='<b><span class="save_change" style="font-size: 14px;cursor: pointer;color: rgb(252, 172, 0);"> Save Details</span></b>';
select_gender_update+="</div>";

</script>


</html>