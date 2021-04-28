<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">

<style>

    h4{
        color:white;
    }
    h2{
        color: white;
    }
    .head-text{

        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
        text-align: center;
        color: #FFFFFF;
        font-size: 43px;
        font-style: ;
        font-weight: 900 !important;
        text-transform: uppercase;
    }
    .line-space-1{
        line-height: 1.3;
    }
    .line-space-1-2{
        line-height: 1.7;
    }
    .text{
        margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 10px;
        margin-left: 10px;
        font-size: 18px;
    }

    .logos{
        margin-top: 4px;
        margin-bottom: 0px;
        margin-right: 0px;
        padding: 2px;
        margin-left:60px;
        max-width:170px;
        max-height:75px;
        display: inline;
    }
    .parallax{
        height:auto!important;

    }

    .box1 {
        color: #FFFFFF;
        background-color: rgba(1, 0, 7, 0.8);
        width: 480px;
        height: 900px;
    }

    .box2 {
        color: #FFFFFF;
        background-color: white;
        width: 480px;
        height: 900px;
    }

    .col{
        display: flex;
        margin: 0 auto;
        height: 100%;
    }

    .row {

        flex-wrap: wrap;
        display: flex;
        justify-content: center;
        height: 100%;
    }


    @media (max-width: 768px){
        .box1 {
            min-width:300px ;
            max-width: 400px;
            display: flex;
            height: auto;

        }

        .box2 {
            min-width:300px ;
            max-width: 400px;
            display: flex;
            height: auto;

        }
        .logos{
            margin-top: 4px;
            margin-bottom: 0px;
            margin-right: 0px;
            padding: 2px;
            margin-left:40px;
            max-width:150px;
            max-height:75px;
            display: inline;
        }

        .col{
            display: flex;
            justify-content: center;
        }
        .row{
            height: auto;
            display: flex;

        }

        .head-text{
            line-height: 40px;
        }
        .flex-container{
            margin-right: 10px;
        }
        .text{
            margin-top: 10px;
            margin-bottom: 10px;
            margin-right: 10px;
            margin-left: 10px;
            font-size: 15px;
        }
    }

    @media (min-width: 768px) and (max-width: 1000px)  {

        .head-text{
            line-height: 35px;
        }
        .row{
            height: auto;
        }
        .col{
            justify-content: center;
        }

    }

    @media (min-width: 1000px) and (max-width: 1400px)  {
        #home_first_section{

        }
        .col-md-10{
            width: 100%;
        }
        .row{
            height: auto;
        }
        .col{
            justify-content: center;
        }
        .head-text{
            line-height: 35px;
        }

    }

    @media (min-width: 1400px) and (max-width: 1600px)  {
       .col-md-10{
           width: 100%;
       }
        .row{
            height: 100%;
        }
        .col{

            justify-content: center;

        }
    }

    @media (min-width: 1600px) and (max-width: 1800px)  {

        .col-md-10{
            width: 100%;
        }
        .row{
            height: 100%;
        }
        .col{
            justify-content: center;
        }
    }

    @media (min-width: 1800px) and (max-width: 2200px)  {

        .col-md-10{
            width: 100%;
        }
        .row{
            height: 100%;
        }
        .col{

            justify-content: center;

        }

    }

    @media (min-width: 2200px) and (max-width: 2800px)  {
        .parallax{
            padding-bottom: 20%;
        }
    }
    @media (min-width: 2800px) and (max-width: 3200px)  {
        .parallax{
            padding-bottom: 20%;
        }
    }

    @media (min-width: 3200px) and (max-width: 4200px)  {
        .parallax{
            padding-bottom: 20%;
        }
    }

    @media (min-width: 4200px) and (max-width: 6000px)  {
        .parallax{
            padding-bottom: 20%;
        }
    }
    .parallax{
        margin-top: -50px;
        overflow: hidden;

    }
    .flex-container{

    }
</style>
<section class="parallax" style="background-image: url(<?= base_url() ?>front_assets/images/underwriters/Site_Background_04_Underwriters.jpg);">
    <div class="container container-fullscreen" id="home_first_section">
        <div class="text-middle">
            <div class="head-text">
                THANK YOU TO OUR GENEROUS UNDERWRITERS
            </div><br>
            <div class="flex-container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col">
                                <div class="box1">
                                    <div class="text line-space-1" >
                                        <b> <h4>COUTURE $18,000 </h4></b>
                                        Charitable Adult Rides & Services, Inc.<br>
                                        Irwin & Joan Jacobs<br>
                                        The Joseph-Ma Family<br>
                                        The Meiselman Family<br>
                                        Marie G. Raftery & Dr. Robert A. Rubenstein<br>
                                        Karen & Jeffrey Silberman<br>
                                        Caryl Lees Witte<br><br>

                                        <b><h4>DESIGNER  $10,000</h4></b>
                                        Elaine & Rick Barton<br>
                                        Gallagher | Lisa & Gary Levine | Lindsay & Mitch Surowitz <br>
                                        Marcia Foster Hazan & Mark Cammell<br>
                                        Marjorie & Sheldon Derezin<br>
                                        Roxy & Mick Fredericks<br>
                                        Kathy & Mark Jones<br>
                                        Sylvia Liwerant<br>
                                        Sharon & David Wax<br><br>

                                        <b><h4>BESPOKE  $5,000 </h4></b>
                                        Deborah Bucksbaum<br>
                                        Capital City Auto Auction, Inc.<br>
                                        City National Bank<br>
                                        Susan Shmalo & Gene H. Carswell<br>
                                        Liz Nederlander Coden & Daniel Coden, M.D.<br>
                                        Laura Galinson & Jodi Diamond<br>
                                        Linda & Edward Janon<br>
                                        Emily & Chris Jennewein | Times of San Diego<br>
                                        Susan & David Kabakoff<br>
                                        LourdMurray Delphi<br>
                                        Lauren & Robert Resnik<br>
                                        Alan Haubenstock, Brian Haubenstock & Lori Shearer<br>
                                        Karin & Tony Toranto<br>
                                        Emma & Leo Zuckerman<br>
                                        UC San Diego Health<br>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box2">
                                    <div>
                                        <a href="https://careasy.org/home" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/CARS_Logo_Full_Horz_CMYK-01.jpg" class="logos"></a>
                                        <a href="https://www.century21.com/real-estate-agent/profile/caryl-lees-witte-P10304096" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/CLW.jpg" class="logos"></a>
                                        <a href="https://www.ajg.com" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/Gallagher-logo-400x204.png" class="logos"></a>
                                        <a href="" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/UCSDHealth-CMYK.jpg" class="logos"></a>
                                        <a href="https://capitalcityautoauction.com/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/Capital City Auto Auction logo - color.pdf.jpg" class="logos"></a>
                                        <a href="https://www.cnb.com/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/CNB-RBC Integrated Logo_RGB.jpg" class="logos"></a>
                                        <a href="https://www.pacificsothebysrealty.com/agent/621-a-2492-4030139/liz-coden" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/Liz Coden.jpg" class="logos"></a>
                                        <a href="https://timesofsandiego.com/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/TImes_of_San_Diego_logo.png" class="logos"></a>
                                        <a href="https://www.lourdmurray.com/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/LM Delphi Stacked Grey Navy.jpg" class="logos"></a>
                                        <a href="https://www.century21.com/real-estate-agent/profile/nancy-beck-P25127112" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/NancyBeck_bannerhighresolution.jpg" class="logos"></a>
                                        <a ><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/MollysAngel.jpg" class="logos"></a>
                                        <a href="https://www.comfortkeepers.com/"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/CK_logo_vert_EHS.png" class="logos" style="margin-left: 90px"></a>
                                        <a href="https://centurawealth.com/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/CenturaWealthAdvisoryLogo_ontransparentbackground.png" class="logos"></a>
                                        <a href="https://www.manheim.com/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/manheim-logo-400x98.jpg" class="logos"></a>
                                        <a href="https://www.pathfinderfunds.com/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/pathfinder-logo-tagline (1).jpg" class="logos"></a>
                                        <a href="https://www.sdfoundation.org/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/sdf.jpg" class="logos" style="margin-left: 30px"></a>
                                        <a href="https://www.seacrestvillage.org/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/SVRClogo_purple_19.jpg" class="logos"></a>
                                        <a href="https://www.seacrestvillage.org/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/SFlogo2016.jpg" class="logos" style="margin-left: 20px"></a>
                                         <a href="https://www.thompsonsearch.com/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/Thompson.png" class="logos"></a>
                                        <a href="https://jcfsandiego.org/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/jewish-community-foundation-400x267.jpg" class="logos"></a>
                                        <a href="https://sycuantribe.com/" target="_blank"><img src="<?= base_url() ?>front_assets/images/underwriters/Underwritter_Main_Logos/Sycuan-logo-338x400.jpg" class="logos" style="margin-left: 40%; max-height: 100px"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box1">
                                    <div class="text line-space-1-2">
                                        <b><h4>VINTAGE  $2,500 </h4></b>
                                        Nancy Beck | Century 21 Award <br>
                                        Judy & Larry Belinsky<br>
                                        Sheila Belinsky | Molly’s Angels <br>
                                        Rabbi Devorah Marcus & Sebastian Eickholt <br>
                                        April & Mathew Fink | Comfort Keepers Homecare <br>
                                        Gabrielle Hochberg <br>
                                        Dr. Stuart Karasik <br>
                                        Marge Katleman<br>
                                        Theresa Dupuis & Gary Kornfeld<br>
                                        Mimi Lee<br>

                                        Dana Levin | Centura Wealth Advisory<br>
                                        Dr. Marshall Littman<br>
                                        Manheim<br>
                                        Dr. Howard & Barbara Milstein<br>
                                        Dr. Charles & Ilene Mittman<br>
                                        Victoria Pappas<br>
                                        Mitch & Elizabeth Siegler | Pathfinder Partners<br>
                                        Sheryl & Bill Rowling<br>
                                        The San Diego Foundation<br>
                                        Seacrest Village & Seacrest Foundation<br>
                                        Thompson Search<br>
                                        Fern & Lee Siegel<br>
                                        Beth Sirull & Jonathan Shuster<br>
                                        Jill & Mark Spitzer<br>
                                        Sycuan Band of the Kumeyaay Nation<br>
                                        Rachel & Adam Welland<br>
                                        Joellyn & Ron Zollman<br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>