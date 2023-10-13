<nav id="mp-menu" class="mp-menu alternate-menu">
            <div class="mp-level">
                <h2>Menu</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="coupon.html">Coupons</a></li>
                    <li class="has-sub">
                        <a href="coupon-code.html">Coupons Code</a>
                        <div class="mp-level">
                            <h2>Coupons Code</h2>
                            <a class="mp-back" href="#">back</a>
                            <ul>
                                <li><a href="coupon-code.html">Coupons Code 1</a></li>
                                <li><a href="coupon-code-2.html">Coupons Code 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-sub">
                        <a href="brand-list.html">Brands</a>
                        <div class="mp-level">
                            <h2>Brands</h2>
                            <a class="mp-back" href="#">back</a>
                            <ul>
                                <li><a href="brand-detail-1.html">Brand Detail 1</a></li>
                                <li><a href="brand-detail-2.html">Brand Detail 2</a></li>
                                <li><a href="brand-detail-3.html">Brand Detail 3</a></li>
                                <li><a href="brand-detail-4.html">Brand Detail 4</a></li>
                                <li><a href="brand-detail-5.html">Brand Detail 5</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="my-coupon.html">My coupons(12)</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
</nav><!--end: .mp-menu -->
    
        <div  class="mod-filter" style="margin-top: 50px;position:relative !important">
            <div class="grid_frame">
            <div class="row align-items-center">
							<div class="col-xl-3">
								<div class="head_title aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<h6><span>أقوى اكواد الخصم </span>لكل التطبيقات والمتاجر <img src="<?=URL?>website/img/dollar.png" style="height:35px"></h6>
								</div>
							</div>
							<div class="col-xl-9 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
							<div class="box_filters d-flex align-items-center">
									<div class="box_search" style="width: 100%;">
										<form action="" method="GET">
                                            <div class="search-coupon form_search">
                                                <input type="text" name="code" value="<?=$_GET["code"]? $_GET["code"]  :"" ?>" class="form-control" style="float: right" placeholder="ابحث عن كود .. ">
                                                <select name="category" id="" class="form-control" style="float: right;">
                                                    <option value="">ابحث بالقسم</option>
                                                    <?php foreach($categories as $k=>$v){?>
                                                        <option value="<?=$v["id"]?>"  <?=$_GET["category"]==$v["id"] ? "selected" :"" ?>><?=$v["name"]?></option>
                                                    <?php }?>
                                                </select>
                                                <input class="btn btn_prim" type="submit" value="بحث" style="width: 20% !important;color:white">
                                            </div>
                                        </form>
									</div>
									
								
								</div>
							</div>
						</div>
            </div>
        </div><!--end: .mod-filter -->
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-grp-coupon block clearfix">
                    <div class="block-content list-coupon clearfix">
                    <?php foreach($coupons as $k=>$v):?>
                        <!--coupon-item -->
                        <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?=URL.$v["logo"]?>" alt="<?=$v["company"]?>"></a>
                                        </div>
                                    </div>
                                    <h5 style="text-align: center;"><?=$v["company"]?></h5>
                                    <div class="coupon-brand"><?=$v["short_description"]?></div>
                                    <a class="btn btn-blue btn-take-coupon dismiss getCoupon" href="#"  copounID="<?=$v["id"]?>">   الكود </a>
                                </div>
                        </div>
                        <!--end: .coupon-item -->
                    <?php endforeach;?>

                    <div id="responseCoupons"></div>

                    </div>
                    <div class="paginator">
                        <ul class="pagination">
                            <?= $this->Paginator->prev('< ' . __('السابق')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('التالى') . ' >') ?>
                        </ul>
                     </div>
                </div><!--end block: Featured Coupons-->
     
            </div>
        </div>
        <div id="response"></div>
   

      





        <style>
           .search-coupon{ background: #dadada; padding: 15px; } 
           .search-coupon >input , .search-coupon  > select{     width: 35% !important;   margin: 5px;}
           .pagination{    background: #481aa0;}
           .pagination > li{ border: 1px solid white;padding: 15px;}
           .pagination li{ margin: 0;}
           .pagination li > a { text-decoration: none;}
           .pagination> .active {    background: goldenrod;}
        </style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $(function(){
        $(".getCoupon").click(function(){
       
        $.ajax({
                url: '<?=URL?>coupons/getCoupon',
                type: 'POST',
                data: {"copounID": jQuery(this).attr("copounID")} ,
                cache: false,
                headers: {
                    'X-CSRF-Token': "<?=$this->request->getAttribute('csrfToken')?>" 
                    },
                success: function(res){
                    $("#response").html(res);
                }
        });

        })
    })
</script>



 



