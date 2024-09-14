<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from upload_data where rdm='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
$rdm=$dataout['rdm'];
?>
<?php
if($dataout['jenis_data']=='1'){
?>
<script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_spald.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/editspald.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
                        columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [5, "tahun_pembangunan"], 
                            [6, "jum_sambungan_rencana"], 
                            [7, "jum_sambungan_realisasi"], 
                            [8, "jumlah_pemanfaat"], 
                            [9, "jenis_sarpras"], 
                            [10, "status"], 
                            [11, "kondisi_infrastruktur"], 
                            [12, "sumber_dana"], 
                            [13, "latitude"], 
                            [14, "longitude"]
                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
        <h4>EDIT DATA SPALD</h4>
<div class="table-responsive">
                                            <table width="100%" class="nowrap greyGridTable" id="lookup2" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    <th width="12%">No. Urut</th>
                                                      <th width="12%">Kota/Kabupaten</th>
                                                      <th width="9%">Kecamatan</th>
                                                      <th width="17%">Kelurahan/Desa</th>
                                                      <th width="12%">Nama SPALDS</th>
                                                      <th width="14%">Tahun Pembangunan</th>
                                                      <th>Rencana</th>
                                                      <th>Realisasi</th>
                                                      <th width="0%">Jumlah Pemanfaat (Rumah)</th>
                                                      <th width="0%">Jenis Sarpas</th>
                                                      <th width="0%">Status</th>
                                                      <th width="0%">Kondisi Infrastruktur</th>
                                                      <th width="0%">Sumber Dana Pembangunan</th>
                                                      <th width="0%">Latitude</th>
                                                      <th width="0%">Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div> 
<?php
}elseif($dataout['jenis_data']=='2'){
?>
<script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_iplt.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/editiplt.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
                        columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [5, "pengelola"], 
                            [6, "kapasitas_rencana"], 
                            [7, "kapasitas_realisasi"], 
                            [8, "jum_tersedia"], 
                            [9, "jum_terlayani"], 
                            [10, "sistem_unit"], 
                            [11, "status_operasional"], 
                            [12, "tahun_pembangunan"], 
                            [13, "sumber_dana"], 
                            [14, "tahun_optimalisasi"],
                            [15, "sumber_dana_optimalisasi"],
                            [16, "jum_mobil_sedot_tinja"],
                            [17, "status_kondisi_mobil"],
                            [18, "mou_pengangkut"],
                            [19, "latitude"],
                            [20, "longitude"]
                            

                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
        <h4>EDIT DATA IPLT</h4>
<div class="table-responsive">
                                            <table width="100%" id="lookup2" class="nowrap greyGridTable" data-export-title="Export">
                                                <thead>
                                                    <tr>
                                                    <th width="4%">No. Urut</th>
                                                      <th width="4%">Kota/Kabupaten</th>
                                                      <th width="12%">Kecamatan</th>
                                                      <th width="11%">Kelurahan/Desa</th>
                                                      <th width="19%">Nama IPLT</th>
                                                      <th width="3%">Pengelola</th>
                                                      <th width="3%">Kapasitas Rencana <br>(M3/Hari)</th>
                                                      <th width="3%">Kapasitas Realisasi <br>(M3/Hari)</th>
                                                      <th width="3%">Jumlah Tersedia Rumah/KK</th>
                                                      <th width="3%">Jumlah Terlayani Rumah/KK</th>
                                                      <th width="2%">Sistem Dan Unit IPLT</th>
                                                      <th width="3%">Status Operasional</th>
                                                      <th width="4%">Tahun Pembangunan</th>
                                                      <th width="2%">Sumber Dana</th>
                                                      <th width="3%">Tahun Optimalisasi</th>
                                                      <th width="2%">Sumber Dana</th>
                                                      <th width="2%">Jumlah Mobil Sedot Tinja Milik Pemda</th>
                                                      <th width="2%">Status Kondisi Mobil</th>
                                                      <th width="4%">MOU Pengangkutan Dengan Swasta</th>
                                                      <th width="2%">Latitude</th>
                                                      <th width="2%">Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
<?php
}
elseif($dataout['jenis_data']=='3'){
    ?>
    <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_spamreg.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/editspamreg.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
                        columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [5, "nama_pengelola"], 
                            [6, "tahun_pembangunan"], 
                            [7, "jum_layanan"], 
                            [8, "jum_pemanfaat"], 
                            [9, "kapasitas_prod"], 
                            [10, "kapasitas_terpakai"], 
                            [11, "idle_capacity"], 
                            [12, "daerah_layanan"], 
                            [13, "nama_sumber_air"], 
                            [14, "lokasi_unit_prod"],
                            [15, "status"],
                            [16, "latitude"],
                            [17, "longitude"]
                           
                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
        <h4>EDIT DATA SPAM REGIONAL</h4>
    <div class="table-responsive">
                                            <table width="100%" id="lookup2" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                        <th>No. Urut</th>
                                                        <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>Nama SPAM</th>
                                                        <th>Nama Pengelola</th>
                                                        <th>Tahun Pembangunan</th>
                                                        <th>Jumlah Layanan</th>
                                                        <th>Jumlah Pemanfaat</th>
                                                        <th>Kapasitas Produksi(Liter/Detik)</th>
                                                        <th>Kapasitas Terpakai(Liter/Detik)</th>
                                                        <th>Idle Capacity</th>
                                                        <th>Daerah Layanan (Kab/Kota)</th>
                                                        <th>Nama Sumber Air</th>
                                                        <th>Lokasi Unit Produksi</th>
                                                        <th>Status</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
    <?php
    }
    elseif($dataout['jenis_data']=='4'){
        ?>
        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_spamkab.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/editspamkab.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
                        columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [5, "nama_pengelola"], 
                            [6, "tahun_pembangunan"], 
                            [7, "jum_layanan"],
                            [8, "kapasitas_prod"], 
                            [9, "kapasitas_terpakai"], 
                            [10, "idle_capacity"], 
                            [11, "daerah_layanan"], 
                            [12, "nama_sumber_air"], 
                            [13, "lokasi_unit_prod"],
                            [14, "status"],
                            [15, "latitude"],
                            [16, "longitude"]
                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
        <h4>EDIT DATA SPAM KABUPATEN/KOTA</h4>
<div class="table-responsive">
                                            <table width="100%" id="lookup2" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    <th>No. Urut</th>
                                                        <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>Nama SPAM</th>
                                                        <th>Nama Pengelola</th>
                                                        <th>Tahun Pembangunan</th>
                                                        <th>Jumlah Layanan</th>
                                                        <th>Kapasitas Produksi(Liter/Detik)</th>
                                                        <th>Kapasitas Terpakai(Liter/Detik)</th>
                                                        <th>Idle Capacity</th>
                                                        <th>Daerah Layanan (Kab/Kota)</th>
                                                        <th>Nama Sumber Air</th>
                                                        <th>Lokasi Unit Produksi</th>
                                                        <th>Status</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
        <?php
        }
        elseif($dataout['jenis_data']=='5'){
            ?>
                <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_spamikk.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/editspamikk.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
                        columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [5, "nama_pengelola"], 
                            [6, "tahun_pembangunan"], 
                            [7, "jum_layanan"], 
                            [8, "jum_layananaktif"], 
                            [9, "kapasitas_prod"], 
                            [10, "kapasitas_terpakai"], 
                            [11, "idle_capacity"], 
                            [12, "daerah_layanan"], 
                            [13, "nama_sumber_air"], 
                            [14, "lokasi_unit_prod"],
                            [15, "status"],
                            [16, "latitude"],
                            [17, "longitude"]
                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
        <h4>EDIT DATA SPAM IKK</h4>
<div class="table-responsive">
                                        <table width="100%" id="lookup2" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    <th>No. Urut</th>
                                                        <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>Nama SPAM</th>
                                                        <th>Nama Pengelola</th>
                                                        <th>Tahun Pembangunan</th>
                                                        <th>Jum Layanan SR Terpasang (UNIT)</th>
                                                        <th>Jum Layanan SR Aktif (UNIT)</th>
                                                        <th>Kapasitas Produksi(Liter/Detik)</th>
                                                        <th>Kapasitas Terpakai(Liter/Detik)</th>
                                                        <th>Idle Capacity</th>
                                                        <th>Daerah Layanan (Kab/Kota)</th>
                                                        <th>Nama Sumber Air</th>
                                                        <th>Lokasi Unit Produksi</th>
                                                        <th>Status</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
            <?php
            }
            elseif($dataout['jenis_data']=='6'){
                ?>
                 
                        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_spampedesaan.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/editspampedesaan.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
                        columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [5, "nama_pengelola"], 
                            [6, "no_hp_pengelola"], 
                            [7, "pengelola"], 
                            [8, "tahun_pembangunan"], 
                            [9, "sumber_dana"], 
                            [10, "jum_layanan"], 
                            [11, "kapasitas_prod"], 
                            [12, "kapasitas_terpakai"], 
                            [13, "idle_capacity"], 
                            [14, "daerah_layanan"],
                            [15, "nama_sumber_air"],
                            [16, "lokasi_unit_prod"],
                            [17, "status"],
                            [18, "latitude"],
                            [19, "longitude"]


                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
        <h4>EDIT DATA SPAM PEDASAAN</h4>
<div class="table-responsive">
                                        <table width="100%" id="lookup2" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    <th>No. Urut</th>
                                                        <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>Nama SPAM</th>
                                                        <th>Pengelola</th>
                                                        <th>Nama Pengelola</th>
                                                        <th>No. HP Pengelola</th>
                                                        <th>Tahun Pembangunan</th>
                                                        <th>Sumber Dana</th>
                                                        <th>Jumlah Layanan</th>
                                                        <th>Kapasitas Produksi(Liter/Detik)</th>
                                                        <th>Kapasitas Terpakai(Liter/Detik)</th>
                                                        <th>Idle Capacity</th>
                                                        <th>Daerah Layanan (Kab/Kota)</th>
                                                        <th>Nama Sumber Air</th>
                                                        <th>Lokasi Unit Produksi</th>
                                                        <th>Status</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                <?php
                }
                elseif($dataout['jenis_data']=='7'){
                    ?>
                     
        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_tpa.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/edittpa.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
                        columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [5, "pengelola"], 
                            [6, "sistem_operasional"], 
                            [7, "kapasitas_layanan"], 
                            [8, "kapasitas_terpakai"], 
                            [9, "idle_capacity"], 
                            [10, "sampah_masuk"], 
                            [11, "sampah_masuk_landfill"], 
                            [12, "tahun_dibangun"], 
                            [13, "sumber_dana"], 
                            [14, "jum_truk"],
                            [15, "jum_armroll"],
                            [16, "jum_alatberat"],
                            [17, "latitude"],
                            [18, "longitude"]

                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
        <h4>EDIT DATA TPA</h4>
                    <div class="table-responsive">
                                            <table width="100%" id="lookup2" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    <th>No. Urut</th>
                                                      <th>Kota/Kabupaten</th>
                                                      <th>Kecamatan</th>
                                                      <th>Kelurahan/Desa</th>
                                                      <th>Nama TPA</th>
                                                      <th>Pengelola</th>
                                                      <th>Sistem Operasional</th>
                                                      <th>Kapasitas Layanan (Ton/Hari)</th>
                                                      <th>Kapsitas Terpakai</th>
                                                      <th>Idle Capacity</th>
                                                      <th>Sampah Masuk (TON/Tahun)</th>
                                                      <th>Sampah Masuk Landfill (TON/Tahun)</th>
                                                      <th>Tahun Dibangun</th>
                                                      <th>Sumber Dana</th>
                                                      <th>Jumlah Truk Yang Dimiliki</th>
                                                      <th>Jumlah ARM Roll</th>
                                                      <th>Jumlah Alat Berat</th>
                                                      <th>Latitude</th>
                                                      <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                    <?php
                    }
                    elseif($dataout['jenis_data']=='8'){
                        ?>
                
        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_tpst.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/edittpst.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
                        columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [5, "jenis"], 
                            [6, "lokasi"], 
                            [7, "aktifitas"], 
                            [8, "sampah_masuk"], 
                            [9, "sampah_terkelola"], 
                            [10, "tahun_pembangunan"], 
                            [11, "sumber_dana"], 
                            [12, "status"], 
                            [13, "sarana_prasarana"], 
                            [14, "jum_sarpras"],
                            [15, "latitude"],
                            [16, "longitude"]


                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
        <h4>EDIT DATA TPST</h4>
<div class="table-responsive">
                                            <table width="100%" id="lookup2" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    <th>No. Urut</th>
                                                    <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>Nama TPST/TPS3R</th>
                                                        <th>Jenis</th>
                                                        <th>Lokasi</th>
                                                        <th>Aktifitas Pengolahan Sampah</th>
                                                        <th>Sampah Masuk (TON/Tahun)</th>
                                                        <th>Sampah Terkelola (TON/Tahun)</th>
                                                        <th>Tahun Dibangun</th>
                                                        <th>Sumber Dana</th>
                                                        <th>Status Operasional</th>
                                                        <th>Sarana Dan Prasarana</th>
                                                        <th>Jumlah Sarpras</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                        <?php
                        }
                        elseif($dataout['jenis_data']=='9'){
                            ?>
                         
        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_tps.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/edittps.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
                        columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [5, "latitude"],
                            [6, "longitude"]
                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
        <h4>EDIT DATA TPS</h4>
                            <div class="table-responsive">
                                            <table width="100%" id="lookup2" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    <th>No.Urut</th>
                                                        <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>Nama TPS</th>
                                                        <th>Latitude</th>
                                                        <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                            <?php
                            }
                            elseif($dataout['jenis_data']=='10'){
                                ?>
                                
            <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_kumuhdibawah10.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/editkumuhdibawah10.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
                        columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [6, "luas_kumuh"], 
                            [7, "luas_penanganan_2020"], 
                            [8, "luas_penanganan_2021"], 
                            [9, "luas_penanganan_2022"], 
                            [10, "total_luas_penanganan"], 
                            [11, "luas_kumuh_2023"]
                            
                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
        <h4>EDIT DATA KUMUH DIBAWAH 10 Ha</h4>
    <div class="table-responsive">
                                          <table width="100%" id="lookup2" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                              <tr>
                                              <th>No. Urut</th>
                                                <th>Kota/Kabupaten</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan/Desa</th>
                                                <th>No. SK Kumuh</th>
                                                <th>Lokasi (LK/RT)</th>
                                                <th>Target Luas  Kumuh</th>
                                                <th>Luas Penanganan (Ha) 2020</th>
                                                <th>Luas Penanganan (Ha) 2021</th>
                                                <th>Luas Penanganan (Ha) 2022</th>
                                                <th>Total Luas Penanganan</th>
                                                <th>Luas Kumuh Tahun 2023 (Ha)</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                <?php
                                }
                                elseif($dataout['jenis_data']=='11'){
                                    ?>
                                    
        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_kumuhdiatas10.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/editkumuhdiatas10.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
    columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [6, "luas_kumuh"], 
                            [7, "luas_penanganan_2020"], 
                            [8, "luas_penanganan_2021"], 
                            [9, "luas_penanganan_2022"], 
                            [10, "total_luas_penanganan"], 
                            [11, "luas_kumuh_2023"]
                            
                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
        <h4>EDIT DATA KUMUH DIATAS 10 Ha</h4>
                                     <div class="table-responsive">
                                          <table width="100%" id="lookup2" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                              <tr>
                                              <th>No. Urut</th>
                                                <th>Kota/Kabupaten</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan/Desa</th>
                                                <th>No. SK Kumuh</th>
                                                <th>Lokasi (LK/RT)</th>
                                                <th>Target Luas  Kumuh</th>
                                                <th>Luas Penanganan (Ha) 2020</th>
                                                <th>Luas Penanganan (Ha) 2021</th>
                                                <th>Luas Penanganan (Ha) 2022</th>
                                                <th>Total Luas Penanganan</th>
                                                <th>Luas Kumuh Tahun 2023 (Ha)</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                    <?php
                                    }
                                    elseif($dataout['jenis_data']=='12'){
                                        ?>
                                         
        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_perumahan.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/editperumahan.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
                        columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [5, "lokasi"], 
                            [6, "jum_unit_rumah"], 
                            [7, "luas_lahan_perumahan"], 
                            [8, "nama_pengembang"], 
                            [9, "pengembang"], 
                            [10, "jalan"], 
                            [11, "drainase"], 
                            [12, "air_limbah"], 
                            [13, "persampahan"], 
                            [14, "air_minum"],
                            [15, "rumah_ibadah"],
                            [16, "ruang_terbuka_hijau"],
                            [17, "jaringan_listrik"],
                            [18, "jaringan_telpon"],
                            [19, "persentase_psu"],
                            [20, "latitude"],
                            [21, "longitude"]

                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
<h4>EDIT DATA PERUMAHAN</h4>
<div class="table-responsive">
                                            <table width="100%" id="lookup2" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    <th>No. Urut</th>
                                                      <th>Kota/Kabupaten</th>
                                                      <th>Kecamatan</th>
                                                      <th>Kelurahan</th>
                                                      <th> Nama Perumahan</th>
                                                      <th>Lokasi</th>
                                                      <th>Jumlah Unit Rumah</th>
                                                      <th>Luas Lahan Perumahan</th>
                                                      <th>Nama Pengembang</th>
                                                      <th>Pengembang</th>
                                                       <th>Jalan (Dengan Perkerasan)</th>
                                                        <th>Drainase</th>
                                                        <th>Air Limbah</th>
                                                        <th>Persampahan</th>
                                                        <th>Air Minum</th>
                                                        <th>Rumah Ibadah</th>
                                                        <th>RTH/RTP</th>
                                                        <th>Jaringan Listrik</th>
                                                        <th>Jaringan Telepon</th>
                                                      <th>Persentase PSU</th>
                                                      <th>Latitude</th>
                                                      <th>Longitude</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php
                                        }
                                        elseif($dataout['jenis_data']=='13'){
                                            ?>
                                             
        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var rdm='<?php echo $rdm;?>';
                var dataTable = $("#lookup2").DataTable({
					
                    processing: true,
                    serverSide: true,
					
                    ajax: {
						url :"serverside/modul/mod_operator/get_rtlh.php", // json datasource
     type: 'POST',
     data: {rdm:rdm}
                    },
                });
 
                $("#lookup2").on("draw.dt", function () {
                    $("#lookup2").Tabledit({
                        url: "serverside/modul/mod_operator/editrtlh.php",
                        dataType: "json",
                        deleteButton: false,
                        saveButton: true,
						
                        buttons: {
        edit: {
            class: 'btn btn-icon btn-lg btn-primary',
            html: '<em class="icon ni ni-edit"></em>',
            action: 'edit'
        },
        save: {
            class: 'btn btn-icon btn-sm btn-success mt-1',
            html: '<em class="icon ni ni-save"></em>',
            action: 'save'
        }
    },
                        columns: {
                            identifier: [0, "nomor_urut"],
                            editable: [
                            [5, "total_rumah"], 
                            [6, "rtlh"], 
                            [7, "program"], 
                            [8, "sumber_dana"], 
                            [9, "jum_penanganan_2020"], 
                            [10, "jum_penanganan_2021"], 
                            [11, "jum_penanganan_2022"], 
                            [12, "total_penanganan"], 
                            [13, "capaian"], 
                            [14, "jum_rtlh"],
                            [15, "persentase_rtlh"],
                            [16, "rtlh_2023"]
                           


                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "edit") {
                                swal.fire({
  
  icon: 'success',
  html: 'Data Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})

                                $("#lookup2").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
        <h4>EDIT DATA RTLH</h4>
<div class="table-responsive">
                                            <table width="100%" id="lookup2" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    <th>No. Urut</th>
                                                      <th>Kota/Kabupaten</th>
                                                      <th>Kecamatan</th>
                                                      <th>Desa/Kelurahan</th>
                                                      <th>Kode Desa/Kelurahan</th>
                                                    <th>Total Rumah</th>
                                                        <th>RTLH</th>
                                                        <th>Program/Kegiatan</th>
                                                        <th>Sumber Dana</th>
                                                        <th>Jumlah Penanganan RTLH(Rumah) 2020</th>
                                                        <th>Jumlah Penanganan RTLH(Rumah) 2021</th>
                                                        <th>Jumlah Penanganan RTLH(Rumah) 2022</th>
                                                      <th>Total Penanganan(Rumah)</th>
                                                      <th>Capaian (%)</th>
                                                      <th>Jumlah Rumah Layak Huni</th>
                                                      <th>Persentase Rumah Layak Huni</th>
                                                      <th>Data RTLH 2023</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                            <?php
                                            }
                                            ?>

