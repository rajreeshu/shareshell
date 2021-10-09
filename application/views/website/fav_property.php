<!DOCTYPE html>
<html class="no-js" lang = "en">

<head>
<link rel="icon" href="<?=base_url('assets/img/logo-sm.jpg');?>" type="image/x-icon">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Choice | ShareShell</title>
    <meta name="author" content="shareshell">
        <meta name="keyword" content="shareshell, favourite, my choice, favourite properties, shareshell properties">
        <meta name="description" content="get your favourite properties at one place">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<?php
    $this->load->view('website/link_import');
    $this->load->view('website/header');
?> 
<style>
    #height{
        height: 150px;;
    }
    body{
    color: #908c8c;
}
.fa-heart-o {
  color: #e80000;
  cursor: pointer;
  font-size:30px;
}

.fa-heart {
  color: #e80000;
  cursor: pointer;
  font-size:30px;

}
.proerty-th-list .col-md-4 .item-entry {
    width: 60%;
    float: left;
    padding-right: 15px;
    padding-top: 17px;
}
.proerty-th .proerty-item .item-thumb img {
    transition: all 0.2s linear 0s;
    display: block;
    position: relative;
    width: 100%;
    opacity: 1;
    min-height: 225px;
    max-height: 265px;
    border-radius: 25px;
    padding: 4px;
}

.proerty-th-list .proerty-price {
    font-weight: 600;
    color:#4D4B4B;
    font-size: 30px;
    padding-top:10px;
}
.properties-page .proerty-th .proerty-price {
    font-weight: 600;
    color:#4D4B4B;
    font-size: 30px;
    margin-top:-10px;


}
.properties-page .box-two {
    overflow: hidden !important;
    padding: 8px;
}
.proerty-th-list .col-md-4 .item-thumb img {
    height: 260px;
    border: 0px none;
    object-fit: cover;
    width: 100%;
    padding-right: 12px;
    padding: 14px;
    border-radius: 38px !important;
}
.box-two{
    border-radius: 30px !important;

}
</style>

<body>


    <!-- End of nav bar -->

    <div class="page-head">
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title">My choice</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <!-- property area -->
    <div class="properties-area recent-property" style="background-color: rgb(255, 255, 255);">
        <div class="container">
            <div class="row">

                

                <div class="col-md-70  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear">
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                                <li class="active">
                                    
                                </li>
                                
                            </ul>
                            <!--/ .sort-by-list-->

                            <div class="items-per-page">
                               
                               
                                <!--/ .sel-->
                            </div>
                            <!--/ .items-per-page-->
                        </div>

                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i> </a>
                             <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                            
                        </div>
                        <!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-22 clear layout">
                        <div id="list-type" class="proerty-th" >
                            
                            


                            

                            

                        </div>

                    </div>

                 <!--    <div class="col-md-12">
                        <div class="pull-right">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

<br><br><br>
<?php
    $this->load->view('website/footer');

    $this->load->view('website/js_import');
?>
</body>

<script type="text/javascript">

var key="<?php echo $this->security->get_csrf_hash(); ?>"; 

var user_id="<?=$this->security->xss_clean($this->session->userdata('user_id_shareshell'));?>";

function load_page_content(page_no){

    var addon_array = [];
    
    $("input:checkbox[name=filter_addon]:checked").each(function() {
        addon_array.push($(this).val());
    });

    $.ajax({
        url:"<?=base_url('main_helper/my_fav_properties');?>",
        type:"POST",
        async:false,
        data:{
            "<?php echo $this->security->get_csrf_token_name();?>":key,
            user_id:user_id,
            },
            dataType:"json",

            success:function(data){
                key=data.key;

                console.log(data);
                var property_list="";
                var no_of_page="";
                var no_of_page_code="";

                // no_of_page=Math.ceil(data.row_count/$("#items_per_page").val());
                // console.log(no_of_page);

                $.each(data.data,function() {
                    
                    type_change="";
                    if(this.avail=="combined"){
                        type_change="All";
                    }else if(this.avail=="girl"){
                        type_change="F";
                    }else if(this.avail="boy"){
                        type_change="M";
                    }

                    property_list+='<div class="col-sm-6 col-md-3 p0">';
                    property_list+='<div class="box-two proerty-item">'; 
                    property_list+='<div class="item-thumb">';
                    property_list+='<a href="<?=base_url('property/');?>'+this.property_id+"/"+slug_js(this.name)+'" ><img src="<?=base_url('utility/main_image');?>/'+get_thumb_name(this.main_image)+'" style="height:225px; object-fit: cover;"></a>';
                    property_list+='</div>';
                    property_list+='<div class="item-entry overflow">';
                    property_list+='<h5><a href="<?=base_url('property/');?>'+this.property_id+"/"+slug_js(this.name)+'"> '+this.name.toUpperCase()+' </a></h5>';
                    property_list+='<div class="dot-hr"></div>';
                    property_list+='<span class="pull-left"><b> '+this.min_bed+' </b></span>';
                    property_list+='<span class="proerty-price pull-right"> &#8377 '+this.price.replace(/\B(?=(?:(\d\d)+(\d)(?!\d))+(?!\d))/g, ',')+'</span>';
                    property_list+='<p style="display: none; overflow: hidden; text-overflow: ellipsis;max-height: 72px;-webkit-line-clamp: 2;">'+this.description+'</p>';
                    property_list+='<div class="property-icon">';
                    property_list+='<span style="font-size:22px;"><b> &#9893;</b></span><span style="text-transform: capitalize;"> ( '+type_change+' ) |</span>';
                    property_list+='<span style="font-size:22px;"><b> &#9963;</b></span><span style="text-transform: capitalize;"> ( '+this.type+' ) |</span>';
                    property_list+='<span style="font-size:22px;"><b> &#9983;</b></span><span style="text-transform: capitalize;"> ( '+this.status+' ) </span>';
                    property_list+= '<div style="margin-top:3px;"><a href="#" class="delete_property" id="remove_click" data-propid='+this.sn+' data-prop_id="'+this.property_id+'"><b style="color: rgb(228, 13, 13);">REMOVE</b></a></div>';
                    property_list+='</div>';
                    property_list+='</div>';
                    property_list+='</div>';
                    property_list+='</div>';
                    // property__list+='';

                });

                var empty_property_list="";
                empty_property_list+="<center><div>";
                empty_property_list+="<h2>Nothing Found</h2>";
                empty_property_list+="<br><a href=\"<?=base_url('properties');?>\" class=\"btn btn-default\">Check Properties</a>";
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

// console.log(key);
load_page_content(1);
// console.log(key);

$(document).on("click","#remove_click",function(e){
    e.preventDefault();
    remove_click($(this).data("prop_id"));
});

function remove_click(sn){
    
    console.log(sn);
     if(confirm("Remove this Property?")) {
        
        $.ajax({
            url:"<?=base_url('main_helper/add_to_favorite');?>",
            type:"POST",
            async:false,
            data:{
                "<?php echo $this->security->get_csrf_token_name();?>":key,
                property_id:sn,
                user_id:user_id,
                // work:

                },
                dataType:"json",
                success:function(data){
                    key=data.key;

                    load_page_content(1);
                    console.log(data);
                    // return;


                    
                },
                error:function(data){
                    console.log(data);
                    // result=data;
                }
        });
    }

}



</script>

</html>
