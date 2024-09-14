<?php
include "setting.php";
?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
   
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="app/images/logo_lampung.png">
    <!-- Page Title  -->
    <title><?php echo $title;?></title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="app/assets/css/dashlite.css?ver=3.2.0">
    <link id="skin-default" rel="stylesheet" href="app/assets/css/theme.css?ver=3.2.0">
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.22/dist/sweetalert2.min.css " rel="stylesheet">
    
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5 center">
                                    <a href="login" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="app/images/logo_lampung.png" srcset="./images/logo2x.png 2x" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="app/images/logo_lampung.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title center">SICITRA CERDAS</h5>
                                       
                                    </div>
                                </div><!-- .nk-block-head -->
                              
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="email-address">Username</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="#"></a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input autocomplete="off" type="text" class="form-control form-control-lg"  id="username">
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="#">Lupa Password?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input  type="password" class="form-control form-control-lg"  id="password" >
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block login">Login</button>
                                    </div>
                              
                               
                               
                            
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">
                               
                                <div class="mt-1">
                                    <p>&copy; 2023 Dinas PUPR Cipta Karya Provinsi Lampung.</p>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="app/images/slides/3.png" srcset="./images/slides/promo-a2x.png 2x" alt="">
                                            </div>
                                           
                                        </div>
                                    </div><!-- .slider-item -->
                                    
                                    
                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="app/assets/js/bundle.js?ver=3.2.0"></script>
    <script src="app/assets/js/scripts.js?ver=3.2.0"></script>
    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.22/dist/sweetalert2.all.min.js "></script>
    <script>

$(document).ready(function(){
    $(".login").click(function(){

       
      var username = $("#username").val().trim();
      var password = $("#password").val().trim();

        if(username==""){
            document.getElementById("username").focus();
            swal.fire({
  
  icon: 'error',
  html: 'Username tidak boleh kosong',
  showConfirmButton: false,
  timer: 1500
})

return false

};

if(password==""){
    document.getElementById("password").focus();

    swal.fire({
 
  icon: 'error',
  html: 'Password tidak boleh kosong',
  showConfirmButton: false,
  timer: 1500
})

return false
};

        $.ajax({
          url:'loginapp',
                type:'post',
                data:{username:username,password:password},
            success: function(response)
            {
                if(response == 1){
                  window.location = "dashboard";
                  }else if(response == 0){

                    swal.fire({
 
 icon: 'error',
 html: 'Periksa kembali user dan password anda',
 showConfirmButton: false,
 timer: 1500
})
            }else if(response == 99){
                swal.fire({
 
 icon: 'error',
 html: 'Jaringan tidak terhubung',
 showConfirmButton: false,
 timer: 1500
})
            }
            }
        });
        return false;
    });
});

    </script>


</html>