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
    .icons{
        font-size: 110px ;
        min-font-size: 50px;
    }

    .box-home {
        border-radius: 30px;
        background-color: rgba(250, 250, 250, 0.8);
        border-color: #FFFFFF !important;
        border-width: 3pt !important;
        border-style: solid;
        max-width: 190px;
        min-width: 170px;
        min-height: 210px;
        max-height: 180px;
        padding: unset;
        margin-top: 100px;
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
         .box-home {
             border-radius: 30px;
             background-color: rgba(250, 250, 250, 0.8);
             border-color: #FFFFFF !important;
             border-width: 3pt !important;
             border-style: solid;
             max-width: 250px;
             min-width: 190px;
             min-height: 180px;
             max-height: 250px;
             margin-left:30px;
             padding: unset;
         }
         .icons{
             font-size: 135px ;
             min-font-size: 70px;
         }
         .col-md-2{
         }
         .row{
             min-width: 800px;
             max-width: 800px;
         }
             .banner2 img{
                 justify-content: center;
                 margin-top: 250px;
             min-width: 250px;
             max-width: 800px;
             min-height: 200px;
             max-height: 300px;

         }
        body{
            height: 100%;
        }
         .parallax
         {
             padding-bottom: 1300px;
             height: 100%;
         }
    }

    @media (min-width: 1000px) and (max-width: 1400px)  {
        #home_first_section{
            height: 590px;

        }
        .box-home {
            border-radius: 30px;
            background-color: rgba(250, 250, 250, 0.8);
            border-color: #FFFFFF !important;
            border-width: 3pt !important;
            border-style: solid;
            max-width: 350px;
            min-width: 170px;
            min-height: 210px;
            max-height: 180px;
            padding: unset;
        }
        .icons{
            font-size: 110px ;
            min-font-size: 70px;
        }
        .banner2 img{
            margin-top: 100px;
            min-width: 950px;
            max-width: 950px;
            min-height: 200px;
            max-height: 300px;

        }
        h3{
            font-size: 18px ;
            min-font-size: 30px;
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
        background-color: #674ea0e0;
        padding: unset;
    }

    body{
        height: 100%;
    }

    .wrapper{
        height: 100%;
    }

    .parallax
    {
        padding-top: unset;
        height: 100%;
    }
    h3{
        color: #FFFFFF;
    }
    .banner2{
        margin-top: -140px;
    }
</style>

<section class="parallax" style="background-image: url(<?= base_url() ?>front_assets/images/Site_Background_02_Welcome_Lobby.jpg);">
    <div class="container container-fullscreen" id="home_first_section">
        <div class="text-middle">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="banner2">
                                <img src="<?=base_url()?>front_assets/images/event_banner_2.png" style="width: 800px;height: 200px">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center " >
                        <div class="col-md-2 col-sm-12 col-md-offset-1">
                            <div style="text-align: center !important;">
                                <a class="" href="<?=base_url().'sessions/attend'?>">
                                    <div class="col-lg box-home ml-5 mr-5 p-5 text-center" >
                                        <span class="fas fa-chalkboard-teacher icons" ></span>
                                        <br>
                                        <br>
                                        <span><h3>Main Event</h3></span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-12">
                            <a class="" href="<?= base_url().'sessions/attend_vip_meet'?>" id="vip-meet-greet-icon">
                                <div class="col-lg box-home ml-5 mr-5 p-5 text-center">
                                    <span class="fa fa-handshake icons"  ></span>
                                    <br>
                                    <br>
                                    <span><h3>VIP Meet and Greet</h3></span>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-2 col-sm-12">
                            <a class="" href="<?= base_url().'underwriters'?>"">
                            <div class="col-lg box-home ml-5 mr-5 p-5 text-center">
                                <span class="fa fa-hand-holding-heart icons"  ></span>
                                <br>
                                <br>
                                <span><h3>Underwriters</h3></span>
                            </div>
                            </a>
                        </div>

                        <div class="col-md-2 col-sm-12">
                            <a class="" href="<?= base_url().'honorees'?>">
                                <div class="col-lg box-home ml-5 mr-5 p-5 text-center">
                                    <span class="fa fa-award icons"  ></span>
                                    <br>
                                    <br>
                                    <span><h3>Honorees</h3></span>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-2  col-sm-12">
                            <a class="" href="https://bit.ly/3afPDTB" target="_blank">
                                <div class="col-lg box-home ml-5 mr-5 p-5 text-center ">
                                    <span class="fa fa-gavel icons"  ></span>
                                    <br>
                                    <br>
                                    <span><h3>Auction</h3></span>
                                </div>
                            </a>
                        </div>

                    </div>
            </div> 
        </div>
    </div>
</div>
</section>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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

    $(document).ready(function(){
        $('#vip-meet-greet-icon').on('click',function(e){
            e.preventDefault();
            var vip_type="<?=$this->session->userdata('vipType')?>";
            if(vip_type=="0"){
                Swal.fire({
                    icon: 'info',
                    title: 'Notification',
                    text: 'This Meet & Greet is for VIPs only',
                })
            }else{
                window.open($(this).attr('href'),"_blank");
            }
        });
    });

</script>