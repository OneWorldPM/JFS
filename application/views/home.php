<!-- SECTION -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
<style>
    .icon-home {
        color: #0077cc;
        font-size: 1.5em;
        font-weight: 700;
        vertical-align: middle;
    }

    .box-home {
        background-color: #444;
        border-radius: 30px;
        background: rgba(250, 250, 250, 0.8);
        max-width: 270px;
        min-width: 270px;
        min-height: 270px;
        max-height: 270px;
        padding: 15px;
    }
    .box-home_2 {
        background-color: #444;
        border-radius: 30px;
        background: rgba(250, 250, 250, 0.8);
        max-width: 185px;
        min-width: 120px;
        min-height: 160px;
        max-height: 185px;
        padding: 15px;
        padding: 0px !important;
    }

    a:hover {
        background-color: #FFFFFF !important;
        color:#FFFFFF !important;
    }


    .fa {
        font-weight: 900;
    }

    .col-sm-12 {
        margin-bottom: 10px;
    }
    
     @media (min-width: 768px) and (max-width: 1000px)  {
        #home_first_section{
            height: 550px;
        }
    }

    @media (min-width: 1000px) and (max-width: 1400px)  {
        #home_first_section{
            height: 590px;
        }
    }

    @media (min-width: 1400px) and (max-width: 1600px)  {
        #home_first_section{
            height: 700px;
        }
    }

    @media (min-width: 1600px) and (max-width: 1800px)  {
        #home_first_section{
            height: 800px;
        }
    }

    @media (min-width: 1800px) and (max-width: 2200px)  {
        #home_first_section{
            height: 900px;
        }
    }

    @media (min-width: 2200px) and (max-width: 2800px)  {
        #home_first_section{
            height: 1100px;
        }
    }
    @media (min-width: 2800px) and (max-width: 3200px)  {
        #home_first_section{
            height: 1450px;
        }
    }

    @media (min-width: 3200px) and (max-width: 4200px)  {
        #home_first_section{
            height: 1950px;
        }
    }

    @media (min-width: 4200px) and (max-width: 6000px)  {
        #home_first_section{
            height: 2550px;
        }
    }
    .box-home{
        background-color: #674ea0;
    }
</style>

<section class="parallax" style="background-image: url(<?= base_url() ?>front_assets/images/Site_Background_02_Welcome_Lobby.jpg);">
    <div class="container container-fullscreen" id="home_first_section">
        <div class="text-middle">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center m-t-0">
                        <h1 style="color: #674ea0; font-family: 'Architects Daughter', cursive; margin-bottom: 0px; font-weight: 700; font-size: 40px;">Welcome, <?= $this->session->userdata('cname') ?></h1>
                    </div>
<!--                    <div class="col-md-10 col-md-offset-1">
                  <div class="jumbotron" style="background-image: url(<?/*=base_url()*/?>front_assets/images/Header_Logos_JFS.png);height:300px; background-repeat: no-repeat;   background-size: contain;"></div>
                    </div>-->
                <div class="row justify-content-center " style="text-align: -webkit-center;">
                    <div class="col-md-2 col-sm-12 col-md-offset-2">
                        <div style="text-align: center !important;">
                        <a class="" href="<?= base_url() ?>sessions">
                            <div class="col-lg box-home ml-5 mr-5 p-5 text-center" >
                                <img src="<?= base_url() ?>front_assets/images/Session.png" alt="welcome" class="m-t-40 " style="height: 150px; width: 160px; ">
                                <br>
                                <br>
                                <span>SESSIONS</span>
                            </div>
                        </a>
                        </div>
                    </div> 
                     <div class="col-md-2 col-sm-12  col-md-offset-1" >
                        <a class="" href="<?= base_url().'productTheaters'?>"">
                         <div class="col-lg box-home ml-5 mr-5 p-5 text-center">
                                <span class="fa fa-desktop"  style="font-size: 135px !important; color: #22A5DA; margin-top:50px;"></span>
                                <br>
                                <br>
                                <span>Underwriters</span>
                            </div>
                        </a>
                    </div> 
                    <div class="col-md-2 col-sm-12  col-md-offset-1">
                        <a class="" href="<?= base_url().'claimCredit'?>">
                            <div class="col-lg box-home ml-5 mr-5 p-5 text-center">
                                <span class="fa fa-trophy"  style="font-size: 135px !important; color: #22A5DA; margin-top:50px;"></span>
                                <br>
                                <br>
                                <span>Honorees</span>
                            </div>
                        </a>
                    </div>
                    <div class="row justify-content-center " style="text-align: -webkit-center;">
                    <div class="col-md-2 col-sm-12  col-md-offset-3" >
                        <a class="" href="<?= base_url().'claimCredit'?>">
                            <div class="col-lg box-home ml-5 mr-5 p-5 text-center">
                                <span class="fa fa-handshake"  style="font-size: 135px !important; color: #22A5DA; margin-top:50px;"></span>
                                <br>
                                <br>
                                <span>VIP Meet and Greet</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2  col-sm-12 col-md-offset-2" >
                        <a class="" href="<?= base_url().'claimCredit'?>">
                            <div class="col-lg box-home ml-5 mr-5 p-5 text-center ">
                                <span class="fa fa-gavel"  style="font-size: 135px !important; color: #22A5DA; margin-top:50px;"></span>
                                <br>
                                <br>
                                <span>Auction</span>
                            </div>
                        </a>
                    </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
</section>
<script type="text/javascript">
    $(document).ready(function () {
        var page_link = $(location).attr('href');
        var user_id = <?= $this->session->userdata("cid") ?>;
        var page_name = "User Dashboard";
        $.ajax({
            url: "<?= base_url() ?>home/add_user_activity",
            type: "post",
            data: {'user_id': user_id, 'page_name': page_name, 'page_link': page_link},
            dataType: "json",
            success: function (data) {
            }
        });

        $('#toolbox').hide();
    });
</script>