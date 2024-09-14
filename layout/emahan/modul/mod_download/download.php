<?php
$Encrypted=$_GET['id'];
$decrypttt=Encryption::decode($Encrypted);
$id_kategoridownload=$decrypttt;


 
$querymenu2 = "SELECT * FROM kategori_download WHERE id_kategoridownload='$id_kategoridownload'";
$hasilmenu2 = mysqli_query($koneksi,$querymenu2);
$rdata=mysqli_fetch_array($hasilmenu2);

?>
<div class="content-full bg-gray">
	<div class="container">
		<div class="page-content">
			
<!-- Widget Arsip -->
<div class="block-downloads">
	<div class="head-downloads" style="background-color: aqua;">DOWNLOAD <?php echo strtoupper($rdata['nama_kategori']);?></div>
	
	<div class="table-responsive" style="margin-top: 25px; margin-bottom:10px;">
    <input type="hidden" id="id_kategoridownload" value="<?php echo $id_kategoridownload;?>">
		<table class="table table-bordered tabel-data1 greyGridTable">
			<thead>
            <tr>
					
					
					<th class="text-center uppercase"  width="40%">Judul Data</th>
					<th class="text-center uppercase" width="40%">File</th>
                    <th class="text-center uppercase">Tanggal Posting</th>
					<th class="text-center uppercase"></th>
				</tr>
			</thead>
			<tbody>
								
			</tbody>
					</table>
	</div>
	</div>
		</div>
		<!-- end content -->
	</div>
<!-- end content -->
</div>
</div>
</div>
