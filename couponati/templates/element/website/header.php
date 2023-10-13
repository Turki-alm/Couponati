<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <!--css plugin-->

    <link rel="stylesheet" href="<?=URL?>website/css/style.css"/>


    <link rel="stylesheet" href="<?=URL?>website/css/res-menu.css"/>
    <link rel="stylesheet" href="<?=URL?>website/css/responsive.css"/>
    <link href="<?=URL?>css/bootstrap532.css" rel="stylesheet">
</head>
<body class="gray"><!--<div class="alert_w_p_u"></div>-->
<div class="container-page">
    <div>
        <header class="mod-header">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <div class="header-content clearfix">
                            <h1 id="logo" class="rs">
                                <a href="<?=URL?>">
                                    <img src="<?=URL?>img/logo.png" alt="Couponati" width="100px" />
                                </a>
                            </h1>
                            <a class="btn btn-green type-login btn-login" href="<?=URL.'requests/add'?>" >
                                سجل متجرك
                            </a>

                       
                        </div>
                    </div>
                </div>
            </div>

     


        </header><!--end: header.mod-header -->


        <style>
            .coupon-item .wrap-img-thumb img{      margin: -40px  auto 20px auto ;height: 130px;}
            .coupon-item .wrap-img-thumb {height: 100px;}
            .coupon-item .btn-take-coupon , .btn{background: #481aa0 !important;border-bottom: 3px solid #481aa0 !important;}
            .gray .mod-footer .footer-top {background: #481aa0 !important;}
            .btn-toogle-res-menu{border-top: 5px solid #481aa0;box-shadow: 0 5px #ffffff inset, 0 10px #481aa0 inset, 0 15px #ffffff inset, 0 20px #481aa0 inset;}
            .main-nav , .mod-header .btn-login{margin-top: 35px;    margin-left: 10px; font-size: 14px;}
            .gray .coupon-item:hover .coupon-content, .gray .coupons-code-item:hover , .gray .mod-filter .txt-search:focus, .gray .mod-email-newsletter .wrap-email input:focus, .gray .mod-search .keyword-search:focus  {    border-color: #481aa0 ;    }
            .gray #main-menu > li.active > a, .gray #main-menu > li > a:hover {color :  #481aa0 !important;}
            .coupon-content { box-shadow: -2px 1px 13px 0px #0101011c;}
            .gray .container-page {background : white !important}
            .gray .mod-brand-detail-3 .social-link .fa, .gray .mod-footer .social-link ul i.fa , p, .gray .article-item .art-desc , .gray .block .title-block{color : white !important}
            .mod-footer .company-info p{text-align: center;}
            .gray .mod-header{background-color: #eee;    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);}
            .btn-login{background-color: #481aa0;color: white;font-size: 12px;border-radius: 25px;border: 0;outline: none !important;font-weight: 700;}
            .coupon-content {    border-radius: 10% !important;}
            .coupon-price , .coupon-brand {    text-align: center;}
            .btn-take-coupon{  border-radius: 20px;height: 50px;  margin-top: 15px;padding: 15px 2px !important;}
            .grid_1, .grid_2, .grid_3, .grid_4, .grid_5, .grid_6, .grid_7, .grid_8, .grid_9, .grid_10, .grid_11, .grid_12{    float: right;}
            .mod-filter .lbl-search {float: right;}
            .gray .mod-filter .txt-search , .mod-filter .btn-apply-filter{    height: 50px;}
            .mod-filter .btn-search{top: 20px;}
            .coupon-item .coupon-brand{font-size: 14px !important;}
            /***media query for menu */
            @media (min-width: 980px)  {
                #logo , #main-menu > li{float: right;}
                .main-nav  , .mod-header .btn-login{float: left;}
            }
            @media screen and (max-device-width: 979px), screen and (max-width: 979px){ 
            .mod-header .btn-login, #main-menu {
                display: block !important;
            }
            }
            /***end media query */

            /*****ar css */
            html , h2 , input , button , a , p , h4 , h3 , h5 ,h6 ,h1 , h2 , div {direction: rtl; font-family: Cairo  !important;}
            /*****end ar css */
            .form_search>span , a{color:white  !important}
            #search ,.form_search>span {height: 40px;    margin-left: -56px; }
            .form_search>span {border-top-right-radius: 0;border-bottom-right-radius: 0;}
            #search {border-top-left-radius: 0; border-bottom-left-radius: 0;}
            .align-items-center{    text-align: center;}

           .btn-load-more {    border: none !important;background: #FFA43E !important;}

            
            @font-face {
                font-family: 'Cairo';
                src: url('<?=URL?>website/fonts/Cairo-VariableFont_slnt,wght.ttf');
            }

        </style>