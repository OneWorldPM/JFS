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
        font-size: 50px ;
        min-font-size: 30px;
        margin-top: 15px;

    }

    .box-home {
        border-radius: 30px;
        border-color: #FFFFFF !important;
        border-width: 3pt !important;
        border-style: solid;
        max-width: 130px;
        min-width: 110px;
        min-height: 100px;
        max-height: 120px;
        padding: unset;
        margin-top: 100px;
        flex-wrap: wrap;
        background-color: #674ea0e0;
        padding: unset;
        text-align: center;
    }

    .text-box{
        margin-top: -20px;
        color: #FFFFFF;
    }

 


    .fa {
        font-weight: 900;
    }

    .col-sm-12 {
        margin-bottom: 10px;
    }


    body{
        height: 100%;
    }


    .parallax
    {
        padding-top: unset;
        height: 100%;
    }

    .banner2 img{
        width: 800px;
        height: 200px;
        display: flex;
    }
    .banner2{
        margin-top: 100px;
        display: flex;
        width: 100%;
        justify-content: center;
    }

    .row{
        display: flex;
        justify-content: center;
    }

    @media (min-width: 320px) and (max-width: 400px){

        #home_first_section{
            height: 590px;
        }

        .col-md-1 {
            flex-direction: row;
            display: flex;
            margin: 0px auto;
        }

        .box-home {
            margin: 10px auto;
            width: 100px;
            text-align: center;
        }

        .banner2 img {
            max-width: 310px !important;
            min-width: 250px !important;
            max-height: 150px;
        }
        .banner2 {
            margin-left: -5px;
            margin-top: 100px;
            max-width: 310px !important;
            min-width: 250px !important;
        }

        .row{

            max-width: 320px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .icons{
            text-align: center;
            font-size: 50px ;
            min-font-size: 30px;
        }
        .container{
            margin: 0px auto;
        }

    }

    @media (min-width: 400px) and (max-width: 600px) {

        #home_first_section{
            height: 590px;
        }
        .col-md-1 {
            flex-direction: row;
            display: flex;
            margin: 0px auto;
        }

        .box-home {
            margin: 10px auto;
            width: 100px;
            text-align: center;
        }

        .banner2 img {
            max-width: 400px !important;
            min-width: 400px !important;
            max-height: 150px;
        }
        .banner2 {

            margin-top: 100px;
            max-width: 400px !important;
            min-width: 400px !important;
        }

        .row{
            width: 400px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .icons{
            text-align: center;
            font-size: 50px ;
            min-font-size: 30px;
        }
        .container{
            margin: 0px auto;
        }


    }
    
     @media (min-width: 768px) and (max-width: 999px)  {

         #home_first_section{
             height: 590px;
         }
         .col-md-12{
             width: 100%;
         }
         .col-md-1 {
             flex-direction: row;

         }

         .box-home {
             margin: 0;
             width: 100px;
             text-align: center;
         }

         .banner2 img {
             max-width: 800px !important;
             min-width: 400px !important;
             max-height: 150px;
         }
         .banner2 {

             margin-top: 100px;
             max-width: 800px !important;
             min-width: 400px !important;
         }

         .row{
             width: 100%;

             justify-content: center;
         }

         .icons{
             text-align: center;
             font-size: 50px ;
             min-font-size: 30px;
         }
         .container{
             margin: 0px auto;
         }

     }

    @media (min-width: 1000px) and (max-width: 1400px)  {

        #home_first_section{
            height: 590px;
        }

        .col-md-1{
            margin: 30px 0px 0px 30px;
        }
        .row{

        }

    }

    @media (min-width: 1400px) and (max-width: 1600px)  {
        #home_first_section{
            height: 700px;
        }
        .parallax
        {
            padding-bottom: 50%;
            height: 100%;
        }

        .col-md-1{
            margin: 20px;
        }

    }

    @media (min-width: 1600px) and (max-width: 1800px)  {
        #home_first_section{
            height: 800px;
        }
        .parallax
        {
            padding-bottom: 50%;
            height: 100%;
        }

        .col-md-1{
           padding: 0px;
            margin-left: 0px !important;
        }


    }

    @media (min-width: 1800px) and (max-width: 2200px)  {
        #home_first_section{
            height: 900px;
        }
        .parallax
        {
            padding-bottom: 50%;
            height: 100%;
        }
    }

    @media (min-width: 2200px) and (max-width: 2800px)  {
        #home_first_section{
            height: 1100px;
        }
        .parallax
        {
            padding-bottom: 50%;
            height: 100%;
        }
    }
    @media (min-width: 2800px) and (max-width: 3200px)  {
        #home_first_section{
            height: 1450px;
        }
        .parallax
        {
            padding-bottom: 50%;
            height: 100%;
        }
    }

    @media (min-width: 3200px) and (max-width: 4200px)  {
        #home_first_section{
            height: 1950px;
        }
        .parallax
        {
            padding-bottom: 50%;
            height: 100%;
        }
    }

    @media (min-width: 4200px) and (max-width: 6000px)  {
        #home_first_section{
            height: 2550px;
        }
        .parallax
        {
            padding-bottom: 50%;
            height: 100%;
        }
    }

</style>

<section class="parallax" style="background-image: url(<?= base_url() ?>front_assets/images/Site_Background_02_Welcome_Lobby.jpg);">
    <div class="container container-fullscreen" id="home_first_section">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="banner2">
                                <img src="<?=base_url()?>front_assets/images/event_banner_2.png">
                            </div>
                        </div>
                    </div>
                    <div class="row " >
                        <div class="col-md-1 ">
                            <div style="text-align: center !important;">
                                <a class="" href="<?=base_url().'sessions/attend'?>">
                                    <div class="col-lg box-home" >
                                        <span class="fas fa-chalkboard-teacher icons" ></span>
                                        <br>
                                        <br>
                                        <span><p class="text-box">Main Event</p></span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-1 ">
                            <a class="" href="<?= base_url().'sessions/attend_vip_meet'?>" id="vip-meet-greet-icon">
                                <div class="col-lg box-home">
                                    <span class="fa fa-handshake icons"  ></span>
                                    <br>
                                    <br>
                                    <span><p class="text-box">VIP Meet & Greet</p></span>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-1 ">
                            <a class="" href="<?= base_url().'underwriters'?>"">
                            <div class="col-lg box-home">
                                <span class="fa fa-hand-holding-heart icons"  ></span>
                                <br>
                                <br>
                                <span><p class="text-box">Underwriters</p></span>
                            </div>
                            </a>
                        </div>

                        <div class="col-md-1 ">
                            <a class="" href="<?= base_url().'honorees'?>">
                                <div class="col-lg box-home">
                                    <span class="fa fa-award icons"  ></span>
                                    <br>
                                    <br>
                                    <span><p class="text-box">Honorees</p></span>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-1  ">
                            <a class="" href="https://bit.ly/3afPDTB" target="_blank">
                                <div class="col-lg box-home">
                                    <span class="fa fa-gavel icons"  ></span>
                                    <br>
                                    <br>
                                    <span><p class="text-box">Auction</p></span>
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
                    html: 'This Meet and Greet Session is for VIP attendees only. To upgrade your ticket, please contact <a href="mailto:victoriap@jfssd.org" style="color: #00008c !important;">victoriap@jfssd.org</a> before 5:00pm on April 28th, 2021.',
                })
            }else{
                window.open($(this).attr('href'),"_blank");
            }
        });
    });

</script>
