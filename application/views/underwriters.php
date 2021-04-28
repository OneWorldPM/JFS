<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">

<style>
    html{
        background: url(<?= base_url() ?>front_assets/images/underwriters/Site_Background_04_Underwriters.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
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
        font-weight: 900 !important;
        text-transform: uppercase;
        line-height: 50px;
        width: 480px;
        max-width: 100%;
        margin: 40px auto 10px auto;
        font-size: 34px;
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
        margin-top: 0 !important;
        padding-top: 0 !important;
    }

    .box-bg-black{
        color: #FFFFFF;
        background-color: rgba(0,0,0,.8);
        border-radius: 10px;
        border: 1px solid #ffffff9c;
        box-shadow: 0 3px 2px -1px #000;
        border-bottom: none;
        padding: 15px;
        font-size: 15px;
    }

    .flex-container{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }
    .flex-container>div{
        margin-top: 25px;
    }

    .box1 {
        width: 480px;
        max-width: 100%;
        height: 900px;
    }

    .box2 {
        color: #FFFFFF;
        background-color: white;
        width: 480px;
        max-width: 100%;
        height: 900px;
        border-radius: 10px;
    }

    .box3 {
        width: 480px;
        max-width: 100%;
        height: 900px;
    }

    @media screen and (max-width: 506px) {
        .flex-container{
            display: unset;
        }
        .flex-container>div>div{
            max-width: 95% !important;
            margin-left: auto;
            margin-right: auto;
            height: max-content;
        }
        .head-text{
            font-size: 27px;
            line-height: 30px;
            padding: 0 25px;
        }

        .box2 a{
            display: block;
            text-align: center;
        }
        .box2 a img{
            margin-left: 0 !important;
        }
    }



</style>
<section class="parallax" style="background-image: url(<?= base_url() ?>front_assets/images/underwriters/Site_Background_04_Underwriters.jpg);">
    <div class="" id="home_first_section">
        <div class="head-text">
            THANK YOU TO OUR GENEROUS UNDERWRITERS
        </div>
        <div class="flex-container">
            <div class="col">
                <div class="box1 box-bg-black" >
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
            <div class="col">
                <div class="box2">
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
            <div class="col">
                <div class="box3 box-bg-black">
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
</section>