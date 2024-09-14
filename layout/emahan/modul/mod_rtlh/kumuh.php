<div class="content-full bg-gray">
	<div class="container">
		<div class="page-content">
			
<!-- Widget Arsip -->
<div class="block-downloads">
	<div class="head-downloads" style="background-color: aqua;">RTLH PADA KAWASAN KUMUH KEWENANGAN PROVINSI</div>
	<div class="row">
		<div class="col-md-1" style="padding-top:10px;text-align:right">Kabupaten</div>
		<div class="col-md-2">	
			
				<select class="form-control input-sm form-filter" id="kodekota">
				<option></option>
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
		<div class="col-md-1" style="padding-top:10px;text-align:right">Kecamatan</div>
		<div class="col-md-2">	
			
				<select class="form-control input-sm form-filter" id="kodekec"></select>
			
		</div>
		<div class="col-md-1" style="padding-top:10px;text-align:right">Kelurahan</div>
		<div class="col-md-2">	
			
				<select class="form-control input-sm form-filter" id="kodekel">
				
				
			</select>
			
		</div>
		<div class="col-md-1" style="padding-top:10px;text-align:right">Tahun</div>
		<div class="col-md-2"> 
			
				<select class="form-control input-sm form-filter" id="tahun">
				<option></option>
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
		<div class="row" style="margin-top: 50px;">
		<div class="col-md-12"> 
		<!-- ----------------------------------------------ISI GRAFIK ------------------ -->
		<div class="hasil-chart">
		<div id="chartdiv3"></div>
		</div>
		
		<!-- ----------------------------------------------ISI GRAFIK ------------------ -->
		</div>
		</div>

	</div>
	
	</div>
		</div>
		<!-- end content -->
	</div>
<!-- end content -->
</div>
</div>
</div>

