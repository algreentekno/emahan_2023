<div class="content-full bg-gray">
	<div class="container">
		<div class="page-content">
			
<!-- Widget Arsip -->
<div class="block-downloads">
	<div class="head-downloads" style="background-color: aqua;">AIR LIMBAH DOMESTIK - IPLT</div>
	<div class="row">
		<div class="col-md-2" style="padding-top:10px;text-align:right">Provinsi/Kabupaten/Kota</div>
		<div class="col-md-3">	
			
				<select class="form-control input-sm form-filter" id="kodekota">
				<option value="18">Provinsi Lampung</option>
                <?php  
          $querymenu21 = "SELECT * FROM kota order by Id";
          $hasilmenu21 = mysqli_query($koneksi,$querymenu21);
          while ($rdata1=mysqli_fetch_array($hasilmenu21)) {
          ?>
            <option value="<?php echo $rdata1['kode_kota'];?>"><?php echo $rdata1['nama_kota'];?></option>
          <?php
          }
          ?>
			</select>
			
		</div>
		<div class="col-md-1" style="padding-top:10px;text-align:right">Tahun</div>
		<div class="col-md-2"> 
			
				<select class="form-control input-sm form-filter" id="tahun">
				
				<?php
                 $tahun="2021";
                 $tahunb=date('Y')+1; 
                 for ($i=$tahun; $i<=$tahunb ; $i++){
                ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
                 }
                 ?>
				
			</select>
			
		</div>
	</div>
	<div class="table-responsive" style="margin-top: 25px; margin-bottom:10px;">
		<table class="table table-bordered tabel-data1 greyGridTable">
			<thead>
            <tr>
                                                   
                                                   <th width="4%" rowspan="3">Kota/Kabupaten</th>
                                                   <th colspan="2">Lokasi IPLT</th>
                                                   <th width="19%" rowspan="3">Nama IPLT</th>
                                                   <th width="3%" rowspan="3">Pengelola</th>
                                                   <th width="3%" rowspan="3">Kapasitas Rencana <br>(M3/Hari)</th>
                                                   <th width="3%" rowspan="3">Kapasitas Realisasi <br>(M3/Hari)</th>
                                                   <th colspan="2">Akses</th>
                                                   <th width="2%" rowspan="3">Sistem Dan Unit IPLT</th>
                                                   <th width="3%" rowspan="3">Status Operasional</th>
                                                   <th width="4%" rowspan="3">Tahun Pembangunan</th>
                                                   <th width="2%" rowspan="3">Sumber Dana</th>
                                                   <th width="3%" rowspan="3">Tahun Optimalisasi</th>
                                                   <th width="2%" rowspan="3">Sumber Dana</th>
                                                   <th width="2%" rowspan="3">Jumlah Mobil Sedot Tinja Milik Pemda</th>
                                                   <th width="2%" rowspan="3">Status Kondisi Mobil</th>
                                                   <th width="4%" rowspan="3">MOU Pengangkutan Dengan Swasta</th>
                                                   <th width="2%" rowspan="3">Titik Kordinat</th>
                                                  
                                                   
                                               </tr>
                                               <tr>
                                                 <th width="12%" rowspan="2">Kecamatan</th>
                                                 <th width="11%" rowspan="2">Kelurahan/Desa</th>
                                                 <th width="3%">Jumlah Tersedia</th>
                                                 <th width="3%">Jumlah Terlayani</th>
                                               </tr>
                                               <tr>
                                                 <th>Rumah/KK</th>
                                                 <th>Rumah/KK</th>
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
