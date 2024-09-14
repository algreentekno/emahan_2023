<?php
include "config/koneksi_li.php";
if($statekoneksi=='0'){
    echo 99;
}else{
$uname = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,$_POST['password']);

    $passencrypt=md5($password);
    $sql_query = "select * from user where username='".$uname."' and password='".$passencrypt."' and blokir !='Y'";
    $result = mysqli_query($koneksi,$sql_query);
    $jum=mysqli_num_rows($result);
    $ruu=mysqli_fetch_array($result);
   

    if($jum > 0){
        session_start();
        include "timeout.php";
       
            
            $_SESSION['namausershped']     = $ruu['username'];
            $_SESSION['passusershped']     = $ruu['password'];
            $_SESSION['nama_lengkap'] = $ruu['nama_lengkap'];
            $_SESSION['level']     = $ruu['level'];
            $_SESSION['kodekota']	= $ruu['kode_kota'];
            $_SESSION['email']	= $ruu['email'];
            $_SESSION['loginshped'] = 1;

       
        timer();
        echo 1;
    
    }else{
        echo 0;  
    }
}

?>