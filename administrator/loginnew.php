<?php
include "setting.php";
?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="app/images/logo_lampung.png">
    <title><?php echo $title;?></title>

    <link rel="shortcut icon" href="desa/logo/smardesadigital__sid__8Xyiepl.png" alt="Smart Digital" />
	
	<link rel="stylesheet" href="app/loginbaru/assets/css/login.css">
	<link rel="stylesheet" href="app/loginbaru/assets/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="app/loginbaru/assets/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.22/dist/sweetalert2.min.css " rel="stylesheet">
  
	
			<link type='text/css' href="app/loginbaru/desa/css/siteman.css" rel='Stylesheet' />
					</head>

</head>

<body style="background: linear-gradient(45deg, orange, yellow);">

<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-8">
            <img src="app/loginbaru/desa/css/images/background.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-4">
            <div class="card-body">
             
              <p class="login-card-description"><a href="index.html">E-Mahan Digital</a></p>
             
				                  <div class="form-group">
                    <label for="username" class="sr-only">Email</label>
                    <input type="text" id="username" autocomplete="off" placeholder="Username"  value=""  class="form-username form-control input-error">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" autocomplete="off" placeholder="*********" id="password"  value=""  class="form-username form-control input-error">
                  </div>
                  <input class="btn btn-block login-btn mb-4 login" type="button" value="Login">
                  <p style="text-align: center;font-size: 12px;color:black;"><a href="#">Lupa Password ?</a></p>
                 
				  				                
            </div>
          </div>
        </div>
      </div>	  
		<div class="credit" style="color: black;">
			Aplikasi E-Mahan Digital<br />
			&copy; 2023 <a href="#" target="_blank" style="color: black;">E-Mahan Digital Dinas PUPR Provinsi Lampung</a>
		</div>
    </div>
  </main>
  <script src="app/loginbaru/code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="app/loginbaru/cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
  <script src="app/loginbaru/stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
</body>
</html>