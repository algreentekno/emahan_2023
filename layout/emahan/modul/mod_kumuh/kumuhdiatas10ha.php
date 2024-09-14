<div class="content-full bg-gray">
	<div class="container">
		<div class="page-content">
			
<!-- Widget Arsip -->
<div class="block-downloads">
	<div class="head-downloads" style="background-color: aqua;">KAWASAN KUMUH DIATAS 10 Ha</div>
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
                                                      <th rowspan="2">Kota/Kabupaten</th>
                                                      <th rowspan="2">Kecamatan</th>
                                                      <th rowspan="2">Kelurahan/Desa</th>
                                                      <th colspan="3">Target</th>
                                                      <th colspan="3">Luas Penanganan (Ha)</th>
                                                      <th rowspan="2">Total Luas Penanganan</th>
                                                      <th rowspan="2">Luas Kumuh Tahun 2023 (Ha)</th>
                                                      
                                                    </tr>
                                                    <tr>
                                                    <th>No. SK Kumuh</th>
                                                      <th>Lokasi (LK/RT)</th>
                                                      <th>Luas  Kumuh</th>
                                                      <th>2020</th>
                                                      <th>2021</th>
                                                      <th>2022</th>
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
