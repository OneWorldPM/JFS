
<style>
    body{
        margin-top: -50px;
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
        font-size: 40px;
        font-style: ;
        font-weight: 900 !important;
        text-transform: uppercase;
    }
    .line-space-1{
        line-height: 1;
    }
    .text{

        margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 10px;
        margin-left: 10px;
    }
    .logos{
        margin-top: 0px;
        margin-bottom: 0px;
        margin-right: 0px;
        padding: 2px;
        margin-left:25px;
        max-width:130px;
        max-height:120px;
        display: inline;
    }
    .parallax{
        background-size: cover;
    }
    .photo-box{
        border-style: solid;
        border-width:3pt;
        width: 300px;
        height: 300px;
        border-color: #FFFFFF;

    }

    .text-mid{
        margin-top: 50px;
        text-align: center;
        color: #FFFFFF;
        font-size: 33px;
        font-style: ;
        font-weight: 700 !important;
        text-transform: uppercase;
        line-height: 50px;
        white-space: nowrap;
    }
    .text-white{
        color: #FFFFFF;
        text-align: center;
    }
    .text-white-h1{
        text-align: center;
        color: #FFFFFF;
        font-size: 30px;
        font-style: ;
        font-weight: 600 !important;
        line-height: 20px;
    }

    .text-white-h2{
        text-align: center;
        color: #FFFFFF;
        font-size: 25px;
        font-style: ;
        font-weight: 600 !important;
        line-height: 20px;
    }
    .text-white-h3{
        text-align: center;
        color: #FFFFFF;
        font-size: 20px;
        font-style: ;
        font-weight: 600 !important;
        line-height: 20px;
    }
    .text-white-h4{
        text-align: center;
        color: #FFFFFF;
        font-size: 20px;
        font-style: ;
        font-weight: 600 !important;
        line-height: 20px;
    }

    .message-box{
        width:600px;
        height:300px;
        background-color: #FFFFFF;
        margin:auto;
    }
    .message-header{
        width: 600px;
        height: 60px;
        background-color: #5E478A;
    }
    .message-body{
        width: 600px;
        height: 120px;
        margin-top: 30px;
    }
    .message-send-btn{
        float:right;
        margin-right: 20px;
        width: 120px;
    }
    .message-notif{
        margin-top: 20px;
        text-align: center;
        color: green;
    }
</style>
<section class="parallax" style="background-image: url(<?= base_url() ?>front_assets/images/honorees/Site_Background_05_Honorees.jpg);">
    <div class="container container-fullscreen" id="home_first_section">
        <div class="text-middle">
            <div class="row">
                <div class="col-md-4">
                    <div class="" style="float:right">
                        <img src="<?= base_url() ?>front_assets/images/honorees/CarylWitte.jpg"  class="photo-box">
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="text-mid">
                        HONOREE'S <br> VIRTUAL <br> TRIBUTE BOOKS
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="">
                        <img src="<?= base_url() ?>front_assets/images/honorees/Nathan-Fletcher_Portrait.jpg"  class="photo-box">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="text-white" style="margin-right: 70px">
                        <h3 class="text-white-h1">Caryl Lees Witte</h3>
                        <p class="text-white-h4">Linda Janon Behavioral Health Champion Award</p>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="text-white" style="margin-left: 70px">
                        <h3 class="text-white-h1">Nathan Fletcher</h3>
                        <h4 class="text-white-h2">Supervisor of San Diego's Fourth District</h4>
                        <p class="text-white-h4">Behavioral Health Hero Award</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6" style="text-align: center">
                    <div class="message-box">
                        <div class="message-header"><br>
                            <p class="text-white-h3">Leave a message for Caryl Lees Witte here</p>
                            <div class="message-notif notif-1"></div>
                            <form>
                                <textarea type="text" class="message-body message-1"></textarea>
                                <button class=" btn btn-success message-send-btn send-1"> SEND <span class="fa fa-paper-plane-o" ></span></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="message-box">
                        <div class="message-header"><br>
                            <p class="text-white-h3">Leave a message for Nathan Fletcher here</p>
                            <div class="message-notif notif-2"></div>
                            <form>
                                <textarea type="text" class="message-body message-2"></textarea>
                                <button class=" btn btn-success message-send-btn send-2"> SEND <span class="fa fa-paper-plane-o" ></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script>

</script>
<script>
    $(document).ready(function(){
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        $('.send-1').on('click',function(e){
            e.preventDefault();
            var message = $('.message-1').val();
            var url = "<?= base_url().'honorees/send_message'?>";
            var recepient = "Caryl_Lees_Witte";

            if(message.trim()==""){
                alertify.error('Message cannot be empty');
                return false;
            }else{
                $.post(url,{'message':message,'recepient':recepient},function(success){
                    if(success.data=="success"){
                        $('.message-1').val(" ");
                        $('.notif-1').html('Message successfully sent!');
                    }
                },'json');
            }
            setTimeout(function() {
                $('.notif-1').fadeOut('slow');
            }, 3000);
        });

        $('.send-2').on('click',function(e){
            e.preventDefault();
            var message = $('.message-2').val();
            var url = "<?= base_url().'honorees/send_message'?>";
            var recepient = "Nathan_Fletcher";

            if(message.trim()==""){
                alertify.error('Message cannot be empty');
                return false;
            }else{
                $.post(url,{'message':message,'recepient':recepient},function(success){
                    if(success.data=="success"){
                        $('.message-2').val(" ");
                        $('.notif-2').html('Message successfully sent!');
                    }
                },'json');
            }
            setTimeout(function() {
                $('.notif-2').fadeOut('slow');
            }, 3000);
        });
    });
</script>

