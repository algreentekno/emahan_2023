<?php
// KATEGORI BERITA////////////////////////////////////////////////////////////////////////////////////
class Paging3{
function cariPosisi($batas){
if(empty($_GET['halkategori'])){
	$posisi=0;
	$_GET['halkategori']=1;
}
else{
	$posisi = ($_GET['halkategori']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<li class='page-item'><a href=halkategori-$_GET[id]-1><span><<</span></a></li>
                    <li class='page-item'><a href=halkategori-$_GET[id]-$prev><span><</span></a></li>";
}
else{ 
$link_halaman .= "<li class='page-item'><a href='#'><span><<</span></a></li>
<li class='page-item'><a href='#'><span><</span></a></li>";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? "<li class='page-item'><a href='#'><span>...</span></a></li>" : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<li class='page-item'><a href=halkategori-$_GET[id]-$i><span>$i</span></a></li>";
  }
	 $angka .= " <li class='page-item active'><a href='#' class='current'><span>$halaman_aktif</span></a></li>";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<li class='page-item'><a href=halkategori-$_GET[id]-$i><span>$i</span></a></li>";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? "<li class='page-item'><span>...</span></li> <li class='page-item'><a href=halkategori-$_GET[id]-$jmlhalaman><span>$jmlhalaman</span></a></li>" : " ");
$link_halaman .= "$angka";

// Link ke halaman berikutnya (Lanjut) dan terakhir (Akhir) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <li class='page-item'><a href=halkategori-$_GET[id]-$next><span>></span></a></li>
                     <li class='page-item'><a href=halkategori-$_GET[id]-$jmlhalaman><span>>></span></a></li>";
}
else{
	$link_halaman .= "<li class='page-item'><a href='#'><span>></span></a></li>
	<li class='page-item'><a href='#'><span>>></span></a></li>";
}
return $link_halaman;
}
}

// KATEGORI BERITA////////////////////////////////////////////////////////////////////////////////////
class Paging4{
	function cariPosisi($batas){
	if(empty($_GET['halalbum'])){
		$posisi=0;
		$_GET['halalbum']=1;
	}
	else{
		$posisi = ($_GET['halalbum']-1) * $batas;
	}
	return $posisi;
	}
	
	// Fungsi untuk menghitung total halaman
	function jumlahHalaman($jmldata, $batas){
	$jmlhalaman = ceil($jmldata/$batas);
	return $jmlhalaman;
	}
	
	// Fungsi untuk link halaman 1,2,3 
	function navHalaman($halaman_aktif, $jmlhalaman){
	$link_halaman = "";
	
	// Link ke halaman pertama (first) dan sebelumnya (prev)
	if($halaman_aktif > 1){
		$prev = $halaman_aktif-1;
		$link_halaman .= "<li class='page-item'><a href=halalbum-1><span><<</span></a></li>
						<li class='page-item'><a href=halalbum-$prev><span><</span></a></li>";
	}
	else{ 
	$link_halaman .= "<li class='page-item'><a href='#'><span><<</span></a></li>
	<li class='page-item'><a href='#'><span><</span></a></li>";
	}
	
	// Link halaman 1,2,3, ...
	$angka = ($halaman_aktif > 3 ? "<li class='page-item'><a href='#'><span>...</span></a></li>" : " "); 
	for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
	  if ($i < 1)
		  continue;
		  $angka .= "<li class='page-item'><a href=halalbum-$i><span>$i</span></a></li>";
	  }
		 $angka .= " <li class='page-item active'><a href='#' class='current'><span>$halaman_aktif</span></a></li>";
		  
		for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
		if($i > $jmlhalaman)
		  break;
		  $angka .= "<li class='page-item'><a href=halalbum-$i><span>$i</span></a></li>";
		}
		  $angka .= ($halaman_aktif+2<$jmlhalaman ? "<li class='page-item'><span>...</span></li> <li class='page-item'><a href=halalbum-$jmlhalaman><span>$jmlhalaman</span></a></li>" : " ");
	$link_halaman .= "$angka";
	
	// Link ke halaman berikutnya (Lanjut) dan terakhir (Akhir) 
	if($halaman_aktif < $jmlhalaman){
		$next = $halaman_aktif+1;
		$link_halaman .= " <li class='page-item'><a href=halalbum-$next><span>></span></a></li>
						 <li class='page-item'><a href=halalbum-$jmlhalaman><span>>></span></a></li>";
	}
	else{
		$link_halaman .= "<li class='page-item'><a href='#'><span>></span></a></li>
		<li class='page-item'><a href='#'><span>>></span></a></li>";
	}
	return $link_halaman;
	}
	}

	class Paging5{
		function cariPosisi($batas){
		if(empty($_GET['halgaleri'])){
			$posisi=0;
			$_GET['halgaleri']=1;
		}
		else{
			$posisi = ($_GET['halgaleri']-1) * $batas;
		}
		return $posisi;
		}
		
		// Fungsi untuk menghitung total halaman
		function jumlahHalaman($jmldata, $batas){
		$jmlhalaman = ceil($jmldata/$batas);
		return $jmlhalaman;
		}
		
		// Fungsi untuk link halaman 1,2,3 
		function navHalaman($halaman_aktif, $jmlhalaman){
		$link_halaman = "";
		
		// Link ke halaman pertama (first) dan sebelumnya (prev)
		if($halaman_aktif > 1){
			$prev = $halaman_aktif-1;
			$link_halaman .= "<li class='page-item'><a href=halgaleri-$_GET[id]-1><span><<</span></a></li>
							<li class='page-item'><a href=halgaleri-$_GET[id]-$prev><span><</span></a></li>";
		}
		else{ 
		$link_halaman .= "<li class='page-item'><a href='#'><span><<</span></a></li>
		<li class='page-item'><a href='#'><span><</span></a></li>";
		}
		
		// Link halaman 1,2,3, ...
		$angka = ($halaman_aktif > 3 ? "<li class='page-item'><a href='#'><span>...</span></a></li>" : " "); 
		for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
		  if ($i < 1)
			  continue;
			  $angka .= "<li class='page-item'><a href=halgaleri-$_GET[id]-$i><span>$i</span></a></li>";
		  }
			 $angka .= " <li class='page-item active'><a href='#' class='current'><span>$halaman_aktif</span></a></li>";
			  
			for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
			if($i > $jmlhalaman)
			  break;
			  $angka .= "<li class='page-item'><a href=halgaleri-$_GET[id]-$i><span>$i</span></a></li>";
			}
			  $angka .= ($halaman_aktif+2<$jmlhalaman ? "<li class='page-item'><span>...</span></li> <li class='page-item'><a href=halgaleri-$_GET[id]-$jmlhalaman><span>$jmlhalaman</span></a></li>" : " ");
		$link_halaman .= "$angka";
		
		// Link ke halaman berikutnya (Lanjut) dan terakhir (Akhir) 
		if($halaman_aktif < $jmlhalaman){
			$next = $halaman_aktif+1;
			$link_halaman .= " <li class='page-item'><a href=halgaleri-$_GET[id]-$next><span>></span></a></li>
							 <li class='page-item'><a href=halgaleri-$_GET[id]-$jmlhalaman><span>>></span></a></li>";
		}
		else{
			$link_halaman .= "<li class='page-item'><a href='#'><span>></span></a></li>
			<li class='page-item'><a href='#'><span>>></span></a></li>";
		}
		return $link_halaman;
		}
		}
?>
