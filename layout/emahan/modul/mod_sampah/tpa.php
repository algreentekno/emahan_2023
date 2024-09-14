<div class="content-full bg-gray">
	<div class="container">
		<div class="page-content">
			
<!-- Widget Arsip -->
<div class="block-downloads">
	<div class="head-downloads" style="background-color: aqua;">PERSAMPAHAN - TPA</div>
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
                                                        <th colspan="2">Lokasi</th>
                                                        <th rowspan="2">Nama TPA</th>
                                                        <th rowspan="2">Pengelola</th>
                                                        <th rowspan="2">Sistem Operasional</th>
                                                        <th rowspan="2">Kapasitas Layanan (Ton/Hari)</th>
                                                        <th rowspan="2">Kapsitas Terpakai</th>
                                                        <th rowspan="2">Idle Capacity</th>
                                                        <th rowspan="2">Sampah Masuk (TON/Tahun)</th>
                                                        <th rowspan="2">Sampah Masuk Landfill (TON/Tahun)</th>
                                                        <th rowspan="2">Tahun Dibangun</th>
                                                        <th rowspan="2">Sumber Dana</th>
                                                        <th rowspan="2">Jumlah Truk Yang Dimiliki</th>
                                                        <th rowspan="2">Jumlah ARM Roll</th>
                                                        <th rowspan="2">Jumlah Alat Berat</th>
                                                        
                                                        <th rowspan="2">Titik Kordinat</th>
                                                       
                                                       
                                                    </tr>
                                                    <tr>
                                                      <th>Kecamatan</th>
                                                      <th>Kelurahan/Desa</th>
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
