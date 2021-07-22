<!DOCTYPE html>

    <head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SHARESHELL| Blogs Home</title>
        <meta name="shareshell" content="Making rental easy">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
    * {
        box-sizing: border-box;
    }



    .blog-images {

        width: 25%;
        padding: 10px;
        text-align: center;


    }

    .blog-images p {
        background-color: rgb(58, 58, 58);
        padding: 5px;
        color: white;

    }

    /* Style the images inside the grid */
    .blog-images img {

        cursor: pointer;
        height: 14em;

        width: 100%;




    }

    .blog-images img:hover {
        opacity: 0.6;

        z-index: 110;
    }




    .blog-heading {
        margin-left: auto;
        margin-right: auto;
        width: 75%;

        padding: 12px;
        display: flex;
        margin-bottom: 61px;

    }


    .mySlides1 {
        padding: 100px;
    }

    .slider-txt h2 {

        margin-top: -200px;
        margin-left: 400px;
        font-weight: bold;


    }

    .slider-txt p {
        margin-left: 400px;

    }

    .slider-txt {
        position: relative;
    }


    /* Slideshow container */
    .slideshow-container {
        /* max-width: 1100px; */
        position: relative;
        margin: auto;
        transition: all 0.3s ease;
        width:72.5%;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a grey background color */
    .prev:hover,
    .next:hover {
        background-color: #f1f1f1;
        color: black;
    }

    .slider-txt {
        color: black;
        font-size: 23px;
        justify-content: start;
        text-align: start;
        z-index: 111;
        font-weight: bold;
    }

    .slideshow-container-2 {
        /* width: 72.5%; */
        position: relative;
        margin: auto;
        transition: all 0.3s ease;
        bottom: 20px;
    }

    .trending-page {
        margin-left: auto;
        width: 1000px;

    }

    .trending-page h2 {
        color: white;
    }

    .trending-page p {
        color: rgb(187, 187, 187);
    }

    .slideshow-container-2 img {
        height: 300px;
        object-fit: cover;
    }



    @media only screen and (max-width: 600px) {
        #subheading {
            margin-top: 0px;
        }
    

        .blog-images {
            margin: auto;
            width: 84% !important;
        }

        .mySlides1 img {
            margin: auto !important;
            width: 50% !important;
            height: 9em !important;
        }

        .slider-txt h2 {
            float: none;
            margin-top: 0px;


        }

        .slider-txt p {
            float: none;
            margin-top: 0px;


        }

        .slider-txt {
            width: 100% !important;
            padding-top: 20px;

        }

        .slider-txt h2 {
            font-size: 20px;
            margin-left: 0%;
        }

        .slider-txt p {
            font-size: 10px;
            margin-left: 0%;
            width: 80% !important;
        }

        .blog-heading {
            flex-direction: column;
            width: 100%;
        }

        .mySlides1 {

            padding: 40px;
            width: 100% !important;
            justify-content: center !important;
            text-align: center !important;
        }

        .mySlides1 img {
            height: 8em !important;
            justify-content: center !important;


        }

        .slideshow-container {
            margin-right: auto;
            margin-left: auto;
            width: 90%;
        }

        .slideshow-container-2 {
            flex-direction: column !important;
            position: relative;
            margin: auto;
            width: 90%;
            transition: all 0.3s ease;
            bottom: 20px;
        }

        .trending-page {
            margin-left: auto;
            width: 300px;
            padding: 20px;

        }

        .trending-page h2 {
            color: white;
            font-size: 20px !important;
        }

        .trending-page p {
            color: rgb(187, 187, 187);
            font-size: 10px !important;
        }

        #dates p {

            color: white;
            right: 20px !important;
            margin-top: 10px;
            
        }


    }
</style>

        </head>

    <body>
    <?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?>  

<style>
@media (min-width: 768px){
.container {
    width: 75%;
}
}

</style>

<div class="slideshow-container" style="margin-top: 10px;background-color: rgb(236, 234, 234);">
        <div class="mySlides1">
            <div>
                <img src="<?=base_url('assets/images/blogs/');?>undraw_urban_design_kpu8.svg"
                    style="width:100%;height: 15em;justify-content: start;margin-left:-330px;">
            </div>

            <div class="slider-txt">
                <h2>Investing in the right property within budget</h2>
                <p style="width: 33em; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsum dolor,
                    pariatur, dolorem
                    necessitatibus asperiores eaque nisi, doloremque distinctio at exercitationem fuga dolores est a!
                </p>
            </div>
        </div>

        <div class="mySlides1">
            <img src="<?=base_url('assets/images/blogs/');?>undraw_interior_design_9i70.svg" style="width:100%;height: 15em;margin-left:-330px;">
            <div class="slider-txt">
                <h2>Affordable Eco-Friendly Home Decorating Ideas</h2>
                <p style="width: 33em; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsum dolor,
                    pariatur, dolorem
                    necessitatibus asperiores eaque nisi, doloremque distinctio at exercitationem fuga dolores est a!
                </p>
            </div>
        </div>

        <div class="mySlides1">
            <img src="<?=base_url('assets/images/blogs/');?>undraw_clean_up_ucm0.svg" style="width:100%;height:15em;margin-left:-330px;">
            <div class="slider-txt">
                <h2>Best Waste Management Practices for your Apartment</h2>
                <p style="width: 33em; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsum dolor,
                    pariatur, dolorem
                    necessitatibus asperiores eaque nisi, doloremque distinctio at exercitationem fuga dolores est a!
                </p>
            </div>
        </div>

        <a class="prev" onclick="plusSlides(-1, 0)" style="color: black;">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 0)" style="color: black;">&#10095;</a>
    </div>

    <div>
        <div class="blog-heading">
            <div class="blog-images">
                <img src="<?=base_url('assets/images/blogs/');?>home-buying.jpg" alt="home-buying.jpg" style="">

                <p><b>HOME BUYING/INVESTING</b></p>


            </div>

            <div class="blog-images">
                <img id="subheading" src="<?=base_url('assets/images/blogs/');?>decor.jfif" alt="Snow">

                <p><b>HOME DECOR</b></p>



            </div>
            <div class="blog-images">
                <img id="subheading" src="<?=base_url('assets/images/blogs/');?>home-maintenancee.jpg" alt="Mountains">

                <p><b>HOME MAINTAINANCE</b></p>


            </div>
            <div class="blog-images">
                <img id="subheading" src="<?=base_url('assets/images/blogs/');?>konstantin-evdokimov-UUYkTnQkn9c-unsplash.jpg" alt="Lights">

                <p><b>HOME LONE</b></p>


            </div>
        </div>
    </div>
    <div class="container" style="">

        <div style="margin: auto;width: 72%;margin-top: -70px;font-weight: bold;color: rgb(43, 43, 43);">
            <h3>NEWEST</h3>
        </div>

        <div id="show_list_content">
    </div>
        


        <div class="col-md-12" style="position:relative;bottom: 20px;">
            <div class="pull-right">
                <div class="pagination">
                    <ul id="pagination_blog">
                        <!-- <li><a href="#">Prev</a></li> -->
                        <!-- <li><a href="#">Next</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>



<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import'); 

?>


</body>
<script>
    var key ="<?php echo $this->security->get_csrf_hash(); ?>";
        var slideIndex = [1, 1];
        var slideId = ["mySlides1"]
        showSlides(1, 0);
        // showSlides(1, 1);

        function plusSlides(n, no) {
            showSlides(slideIndex[no] += n, no);
        }

        function showSlides(n, no) {
            var i;
            var x = document.getElementsByClassName(slideId[no]);
            if (n > x.length) { slideIndex[no] = 1 }
            if (n < 1) { slideIndex[no] = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex[no] - 1].style.display = "block";
        }

        var category="";
        var page_no=1;

        

        function load_blog_content(){
            $.ajax({
        url:"<?=base_url('main_helper/get_blog_list_content');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key, 
            page_no:page_no,
            per_page:5,
            category:category,
            },
            dataType:"json",
            success:function(data){
                console.log(data);
                var total_page=data.page_count;
                result_html="";
                dot_after_name="";
                
                $.each(data.data, function(){
                    if(this.blog_body.length>15){
                        dot_after_name="...";
                    }else{
                        dot_after_name="";
                    }
                    result_html+='<div class="slideshow-container-2 " style="margin-top:35px;background-color: rgb(46, 45, 45);display: flex;">';
                    result_html+='<div><img src="<?=base_url('utility/blog_image/');?>'+this.blog_image+'" alt="" style="width:600px;"></div>';
                    result_html+='<div class="trending-page" style="margin-left: 20px;">';
                    result_html+='<h2><b>'+this.blog_heading+'</b></h2>';
                    result_html+='<p>'+this.blog_body.slice(0,600)+dot_after_name+'</p>';
                    result_html+='<a href="<?=base_url('main/blog?id=');?>'+this.blog_id+'" class="navbar-btn nav-button login" style="margin-top: -2px;"><b>Read full story</b></a>';
                    result_html+=' <div id="date"><p style="margin-bottom:-20px; margin-top:20px;">'+this.blog_date+'</p> </div> </div></div>';
                });
                $("#show_list_content").html(result_html);

                total_page_html="";
                for(page=1;page<=total_page;page++){
                    total_page_html+='<li><a href="#" class="pagin">'+page+'</a></li>';
                }
                $("#pagination_blog").html(total_page_html);


            }
            ,
            error:function(data){
                console.log(data);
            }
        });
        }
        load_blog_content();

        $(document).on('click',".pagin",function(e){
            e.preventDefault();
            page_no=$(this).html();
            load_blog_content();
            // console.log($(this).html());
        });
    </script>

</html>