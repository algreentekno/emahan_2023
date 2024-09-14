<div class="content-full bg-gray">
	<div class="container">
		<div class="page-content">
			
<!-- Widget Arsip -->
<div class="block-downloads">
	<div class="head-downloads" style="background-color: aqua;">PERUMAHAN</div>
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
                                                      <th rowspan="3">Kota/Kabupaten</th>
                                                      <th rowspan="3">Kecamatan</th>
                                                      <th rowspan="3">Kelurahan</th>
                                                      <th rowspan="3"> Nama Perumahan</th>
                                                      <th rowspan="3">Lokasi</th>
                                                      <th rowspan="3">Jumlah Unit Rumah</th>
                                                      <th rowspan="3">Luas Lahan Perumahan</th>
                                                      <th colspan="2">Nama Pengembang</th>
                                                      <th colspan="9">Prasarana sarana dan utilitas</th>
                                                      <th rowspan="3">Persentase PSU</th>
                                                      
                                                      <th rowspan="3">Kordinat</th>
                                                      
                                                    </tr>
                                                    <tr>
                                                      <th rowspan="2">Swasta</th>
                                                      <th rowspan="2">Pemerintah</th>
                                                      <th colspan="5">Prasarana</th>
                                                      <th colspan="2">Sarana</th>
                                                      <th colspan="2">Utilitas</th>
                                                    </tr>
                                                    <tr>
                                                    <th>Jalan (Dengan Perkerasan)</th>
                                                        <th>Drainase</th>
                                                        <th>Air Limbah</th>
                                                        <th>Persampahan</th>
                                                        <th>Air Minum</th>
                                                        <th>Rumah Ibadah</th>
                                                        <th>RTH/RTP</th>
                                                        <th>Jaringan Listrik</th>
                                                        <th>Jaringan Telepon</th>
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
