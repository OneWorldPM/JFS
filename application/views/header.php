<?php
if (isset($_GET['testing']))
{
    //echo"<pre>"; print_r(themeColour(79)); exit('</pre>');
}


if(isset($session_id))
    $themeColour = themeColour($session_id);
else
    $themeColour = '674ea0';
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="shortcut icon" href="<?= base_url() ?>front_assets/images/favicon.png">
        <title>JFS Event</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url() ?>front_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>front_assets/vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link href="<?= base_url() ?>front_assets/vendor/animateit/animate.min.css" rel="stylesheet">

        <!-- Vendor css -->
        <link href="<?= base_url() ?>front_assets/vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
        <link href="<?= base_url() ?>front_assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Template base -->
        <link href="<?= base_url() ?>front_assets/css/theme-base.css?v=5" rel="stylesheet">

        <!-- Template elements -->
        <link href="<?= base_url() ?>front_assets/css/theme-elements.css" rel="stylesheet">

        <!-- Responsive classes -->
        <link href="<?= base_url() ?>front_assets/css/responsive.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
        <!-- [if lt IE 9]>
        <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif] -->

        <!-- Template color -->
        <link href="<?= base_url() ?>front_assets/css/color-variations/blue.css" rel="stylesheet" type="text/css" media="screen" title="blue">

        <!-- LOAD GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />

        <!-- CSS CUSTOM STYLE -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>front_assets/css/custom.css" media="screen" />
        <!--VENDOR SCRIPT-->
        <script src="<?= base_url() ?>front_assets/vendor/jquery/jquery-1.11.2.min.js"></script>
        <script src="<?= base_url() ?>front_assets/vendor/plugins-compressed.js"></script>

        <link href="<?= base_url() ?>assets/alertify/alertify.core.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/alertify/alertify.default.css" rel="stylesheet" type="text/css" />
        <style>
            @media (min-width: 1200px){
                .container {
                    width: 1300px;
                }
            }
            @media (min-width: 1400px){
                .container {
                    width: 1450px;
                }
            }
            @media (min-width: 1600px){
                .container {
                    width: 1600px;
                }
            }
            @media (min-width: 1800px){
                .container {
                    width: 1700px;
                }
            }

            @media (min-width: 1900px){
                .container {
                    width: 1850px;
                }
            }
            @media (min-width: 2200px){
                .container {
                    width: 2400px;
                }
            }

            .button.black-light {
                border-color: #FFFFFF;
            }

            .logo2 {
                float: left;
                padding-left: 15px;
                margin-top: 11px;
            }

            .logo0 {
                float: left;
                margin-top: 11px;
                margin-right: 11px;
            }

            .logo2 img {
                object-fit: contain;
                width: 79px;
                height: 50px;
            }

            .logo0 img {
                object-fit: contain;
                width: 134px;
                height: 56px;
            }

            .logo2 span {
                position: absolute;
                top: 0px;
                font-family: sans-serif;
                font-size: 11px;
            }


            #mainMenu2 .nav {
                height: max-content;
            }

            #mainMenu2 ul li a {
                line-height: 0 !important;
                height: max-content !important;
                font-weight: 600;
                font-size: 13px;
                color: #000;
            }

            #mainMenu2 ul li {
                margin-right: 0px;
            }

            #mainMenu2 ul li a:hover {
                background-color: transparent;
                color: #FFFFFF;
                cursor: pointer;
            }

            #mainMenu2 ul li:hover ul {
                display: block !important;
            }

            .toolboxCustomDrop {

                display: none;
                background-color: white;
                position: absolute;
                width: 180px;
                box-shadow: 0 0 12px -6px black;
                padding: 11px !important;
                position: absolute;
                z-index: 124214214;
            }

            .toolboxCustomDrop li {
                margin-right: 0 !important;

                font-weight: bold;
            }

            .toolboxCustomDrop li a {
                color: #7a7a7a !important;
                cursor: pointer;
            }

            .toolboxCustomDrop li a:hover {
                /*color: #ff5e00 !important;*/

            }

            .toolboxCustomDrop li i {
                font-size: 19px !important;
            }

            .toolboxCustomDrop li:nth-of-type(1n+2) {
                margin-top: 12px;
            }

            @media screen and (max-width: 1290px) {
                #header-wrap {
                    padding: 10px 30px;
                }
            }

            @media screen and (max-width: 1200px) {
                #header-wrap {
                    padding: 0px 0px;

                }
                #button-support{
                    margin-top: -60px !important;
                }

                #header .container {
                    width: 100% !important;
                }

                #mainMenu2 {
                    margin-right: 0;
                }

                #mainMenu2 ul li {
                    margin-right: 10px;
                }
            }

            @media screen and (max-width: 992px) {
                .parallax {
                    margin-top: 0;

                }
                .dropdown-backdrop {
                    z-index:0;
                }


                #mainMenu2 .nav {
                    /*background-color: ;*/
                    height: 200px;
                    width: 200px;
                    float: right;
                }

                .nav-main-menu-responsive {
                    height: max-content;
                    line-height: 0;
                }

                .collapse ul{
                    height: 40px !important;
                }
                .nav-button{
                    margin-top: 50px !important;
                }

            }

            @media screen and (max-width: 493px) {
                .logo2 {
                    margin-left: 5px;
                }

                .logo2 img {
                    width: 115px;
                }

                .collapse ul{
                    height: 40px !important;
                }

                .nav-button{
                    margin-top: 50px !important;
                }

            }

            #briefcase, #resource_display_status {
                color: #FFFFFF !important;
            }

            /****** Theme based colours ****/
            .hoverThemeColour:hover{
                color: #<?=$themeColour?> !important;
            }
            .rightSticky ul li{
                background-color: #<?=$themeColour?> !important;
            }
            .rightSticykPopup .header{
                background-color: #<?=$themeColour?> !important;
            }
            .rightSticykPopup .contentHeader{
                color: #<?=$themeColour?> !important;
            }
            .button.color, .btn.btn-primary {
                background-color: #<?=$themeColour?> !important;
                border-color: #<?=$themeColour?> !important;
                color: #FFFFFF;
            }
            ::-moz-selection { /* Code for Firefox */
                color: #FFFFFF;
                background: #<?=$themeColour?> !important;
            }

            ::selection {
                color: #FFFFFF;
                background: #<?=$themeColour?> !important;
            }
            #mainMenu2 ul li a:hover {
                color: #ba9cff !important;
            }
            /****** Theme based colours ****/
            .dropdown-backdrop{
                position: static;
            }

            a{
                color:whitesmoke !important;
            }
            a :hover{

      
            }

            ul{
                border-top-color: whitesmoke !important;
                border-radius: 10px !important;
                border-bottom: 1px !important;
                border-color: whitesmoke !important;

            }

            ul :hover   {
                border-top-color: whitesmoke !important;
            }
            li{
                border-bottom: 0px !important;
            }




            .photo-dropdown {
                background-color:;
                border-radius: 10px;
            }

#button-support{
    margin-top: -25px;
}


.swal2-modal{
    font-size: 15px !important;
}
        </style>

    </head>
    <body class="wide">
        <!-- WRAPPER -->
        <div class="wrapper ">
            <!-- HEADER -->
            <header id="header" class="header-transparent header-sticky">
                <div id="header-wrap" <?=((isset($sesions_logo_height) && !empty($sesions_logo_height)) && isset($sesions_logo) && !empty($sesions_logo))?($sesions_logo_height > 80)?'style="height:'.$sesions_logo_height.'px"':'style="height:115px"':'';?>>
                    <div class="container">
                        <!--LOGO-->
                        <?php
                        if (isset($sessions_addnl_logo) && $sessions_addnl_logo != '') {
                            ?>
                            <div class="logo0">
                                <img src="<?= base_url() . "uploads/sessions_logo/" . $sessions_addnl_logo ?>" onerror="$(this).parent().remove()">
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if ($this->session->userdata('cid') != "") {
                            $profile_data = $this->common->get_user_details($this->session->userdata('cid'));
                            ?>
                            <div id="logo" style="margin-right: 7px;">
                                <p class="logo" data-dark-logo="<?= base_url() ?>front_assets/images/Header_Logos_JFS.png" style="margin-top: 2px; cursor: auto">
                                    <img src="<?= base_url() ?>front_assets/images/Header_Logos_JFS.png" alt="JFS Logo" style="width: 110px;height: 100px">

                                </p>

                            </div>
                        <?php } else { ?>
                            <div id="logo">
                                <a href="#" class="logo" data-dark-logo="<?= base_url() ?>front_assets/images/Header_Logos_JFS.png">
                                    <img src="<?= base_url() ?>front_assets/images/Header_Logos_JFS.png" alt="JFS Logo" style="width:120px;height:110px">
                                </a>
                            </div>
                        <?php } ?>

                        <?php
                        if (isset($sesions_logo)) {
                            ?>
                            <div class="logo2">
                                <span><?= $sponsor_type ?></span>
                                <img src="<?= base_url() . "uploads/sessions_logo/" . $sesions_logo ?>" onerror="$(this).parent().remove()" style="width: <?=$sesions_logo_width?>px;height: <?=$sesions_logo_height?>px;">
                            </div>
                            <?php
                        }
                        ?>
                        <!--END: LOGO-->
                        <!--MOBILE MENU -->
                        <div class="nav-main-menu-responsive">
                            <button class="lines-button x" type="button" data-toggle="collapse" data-target=".main-menu-collapse">
                                <span class="lines"></span>
                            </button>
                        </div>
                        <!--END: MOBILE MENU -->
                        <!--SHOPPING CART -->

                        <!--END: SHOPPING CART -->

                        <!--NAVIGATION-->
                        <div class="navbar-collapse collapse main-menu-collapse navigation-wrap" id="nav-drop"style="margin-right: 10px">
                            <div class="container" style="text-transform: uppercase;">
                                <nav id="mainMenu2" class="main-menu mega-menu" style="margin-top: 10px;">
                                    <?php
                                    if ($this->session->userdata('cid') != "") {
                                        $profile_data = $this->common->get_user_details($this->session->userdata('cid'));
                                        ?>
                                            <?php  if(1==2){ ?>
                                        <ul class="main-menu nav navbar-nav navbar-right" id="ul-drop">
                                                <li class="dropdown" style="margin-top: 3px;margin-left: 30px">
                                                    <div class="photo-dropdown ">
                                                    <a href="" class="dropdown-toggle " data-toggle="dropdown" aria-expanded="false">
                                                        <?php if ($profile_data->profile != "") { ?>
                                                            <img src="<?= base_url() ?>uploads/customer_profile/<?= $profile_data->profile ?>"style="height: 50px; width: 60px; margin-top: -10px;border-radius: 5px">
                                                            <?= $this->session->userdata('cname')?> <span class="fa fa-caret-down"></span>
                                                        <?php } else { ?>
                                                            <span class="glyphicon glyphicon-user"></span><b > <?=$this->session->userdata('cname')?></b>
                                                        <?php } ?>
                                                    </a>
                                                    </div>
                                                    <ul class="dropdown-menu" >
                                                        <li style="padding: 8px 8px;">
                                                            <a href="<?= base_url() ?>login/logout" >
                                                                <span class="fa fa-sign-out"></span>  <b style="color:#0077cc;" >Log Out</b>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                        </ul>
                                                <?php }?>

                                    <?php } ?>
                                    <?php                   if ($this->session->userdata('cid') != "") {?>
                                    <ul class="main-menu nav navbar-nav navbar-right">
                                        <li><a href="<?=base_url().'login/logout'?>" id="logout" class="hoverThemeColour">LOGOUT</a></li>
                                    </ul>
                                    <?php }?>
                                    <ul class="main-menu nav navbar-nav navbar-right">
                                        <li><a href="https://yourconference.live/support" target="_blank" class="hoverThemeColour">HELP</a></li>
                                    </ul>

                                    <?php  if ($this->session->userdata('cid') != "") {?>
                                        <ul class="main-menu nav navbar-nav navbar-right" id="nav-claim-credit">
                                            <li><a href="https://bit.ly/3afPDTB" target="_blank"  class="hoverThemeColour">AUCTION</a></li>
                                        </ul>
                                        <ul class="main-menu nav navbar-nav navbar-right" id="nav-claim-credit">
                                            <li><a href="<?=base_url().'honorees'?>"  class="hoverThemeColour">HONOREES</a></li>
                                        </ul>
                                        <ul class="main-menu nav navbar-nav navbar-right" id="nav-product-theaters">
                                            <li><a href="<?=base_url().'underwriters'?>"  class="hoverThemeColour">UNDERWRITERS</a></li>
                                        </ul>
                                        <ul class="main-menu nav navbar-nav navbar-right" id="nav-sessions">
                                            <li><a href="<?= base_url().'sessions/attend_vip_meet'?>"  class="hoverThemeColour" id="vip-meet-greet">VIP MEET & GREET</a></li>
                                        </ul>
                                        <ul class="main-menu nav navbar-nav navbar-right" id="nav-home">
                                            <li><a href="<?=base_url().'sessions/attend'?>"class="hoverThemeColour">MAIN EVENT</a></li>
                                        </ul>
                                        <ul class="main-menu nav navbar-nav navbar-right" id="nav-home">
                                            <li><a href="<?=base_url().'home'?>"class="hoverThemeColour">LOBBY</a></li>
                                        </ul>
                                    <?php }?>
                                    <ul class="main-menu nav navbar-nav navbar-left nav-button" >
                                        <li><a href="https://www.jfssd.org/supportjfs" target="_blank" class="hoverThemeColour"><img  id="button-support" src="<?= base_url()?>front_assets/images/Support_JFS_Button.png" style="max-width: 150px;height: 50px; "></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!--END: NAVIGATION-->
                    </div>
                </div>
            </header>
            <!-- END: HEADER -->
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function(){
        $('#vip-meet-greet').on('click',function(e){
            e.preventDefault();
            var vip_type="<?=$this->session->userdata('vipType')?>";
            if(vip_type=="0"){
                Swal.fire({
                    icon: 'info',
                    title: '',
                    html: 'This Meet and Greet Session is for VIP attendees only. To upgrade your ticket, please contact <a href="mailto:victoriap@jfssd.org" style="color: #00008c !important;">victoriap@jfssd.org</a> before 5:00pm on April 28th, 2021.',
                })
            }else{
                window.open($(this).attr('href'),"_blank");
            }
        });
    });

</script>
