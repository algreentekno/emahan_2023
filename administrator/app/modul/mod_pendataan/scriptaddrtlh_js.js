<script>  
 $(document).ready(function(){  
      $('.simpan').click(function(){  
        var kode_kota=$("#kode_kota").val();
        var kode_kec=$("#kode_kec").val();
        var kode_kel=$("#kode_kel").val();
        var no_ktp=$("#no_ktp").val();
        var jumlhstring=no_ktp.length;
        var nama_kk=$("#nama_kk").val();
        var no_hp=$("#no_hp").val();
        var jenis_kelamin=$("#jenis_kelamin").val();
        var alamat_rumah=$("#alamat_rumah").val();
        var pekerjaan=$("#pekerjaan").val();
        var penghasilan=$("#penghasilan").val();
        var sts_kepemilikan_rumah=$("#sts_kepemilikan_rumah").val();
        var aset_rumah=$("#aset_rumah").val();
        var sts_kepemilikan_tanah=$("#sts_kepemilikan_tanah").val();
        var jenis_kawasan=$("#jenis_kawasan").val();
        var material_pondasi=$("#material_pondasi").val();
        var material_kolom=$("#material_kolom").val();
        var material_rangka_atap=$("#material_rangka_atap").val();
        var material_plafon=$("#material_plafon").val();
        var material_balok=$("#material_balok").val();
        var sloof=$("#sloof").val();
        var jendela=$("#jendela").val();
        var ventilasi=$("#ventilasi").val();
        var kondisi_lantai=$("#kondisi_lantai").val();
        var material_lantai=$("#material_lantai").val();
        var kondisi_dinding=$("#kondisi_dinding").val();
        var material_dinding=$("#material_dinding").val();
        var kondisi_atap=$("#kondisi_atap").val();
        var material_atap=$("#material_atap").val();
        var luas_rumah=$("#luas_rumah").val();
        var jumlah_penghuni=$("#jumlah_penghuni").val();
        var sumber_air_minum=$("#sumber_air_minum").val();
        var jarak_tinja=$("#jarak_tinja").val();
        var jamban=$("#jamban").val();
        var jenis_kloset=$("#jenis_kloset").val();
        var jenis_tpa_tinja=$("#jenis_tpa_tinja").val();
        var foto=$("#foto").val();
        
       
       

          var formData = new FormData();
          var files = $('#foto')[0].files[0];
          formData.append('file',files);
          formData.append('latitude', $('#latitude').val());
          formData.append('longitude', $('#longitude').val());
          formData.append('kode_kota', $('#kode_kota').val());
          formData.append('kode_kec', $('#kode_kec').val());
          formData.append('kode_kel', $('#kode_kel').val());
          formData.append('no_ktp', $('#no_ktp').val());
          formData.append('nama_kk', $('#nama_kk').val());
          formData.append('no_hp', $('#no_hp').val());
          formData.append('jenis_kelamin', $('#jenis_kelamin').val());
          formData.append('alamat_rumah', $('#alamat_rumah').val());
          formData.append('pekerjaan', $('#pekerjaan').val());
          formData.append('penghasilan', $('#penghasilan').val());
          formData.append('sts_kepemilikan_rumah', $('#sts_kepemilikan_rumah').val());
          formData.append('aset_rumah', $('#aset_rumah').val());
          formData.append('sts_kepemilikan_tanah', $('#sts_kepemilikan_tanah').val());
          formData.append('jenis_kawasan', $('#jenis_kawasan').val());
          formData.append('material_pondasi', $('#material_pondasi').val());
          formData.append('material_kolom', $('#material_kolom').val());
          formData.append('material_rangka_atap', $('#material_rangka_atap').val());
          formData.append('material_plafon', $('#material_plafon').val());
          formData.append('material_balok', $('#material_balok').val());
          formData.append('sloof', $('#sloof').val());
          formData.append('jendela', $('#jendela').val());
          formData.append('ventilasi', $('#ventilasi').val());
          formData.append('kondisi_lantai', $('#kondisi_lantai').val());
          formData.append('material_lantai', $('#material_lantai').val());
          formData.append('kondisi_dinding', $('#kondisi_dinding').val());
          formData.append('material_dinding', $('#material_dinding').val());
          formData.append('kondisi_atap', $('#kondisi_atap').val());
          formData.append('material_atap', $('#material_atap').val());
          formData.append('luas_rumah', $('#luas_rumah').val());
          formData.append('jumlah_penghuni', $('#jumlah_penghuni').val());
          formData.append('sumber_air_minum', $('#sumber_air_minum').val());
          formData.append('jarak_tinja', $('#jarak_tinja').val());
          formData.append('jamban', $('#jamban').val());
          formData.append('jenis_kloset', $('#jenis_kloset').val());
          formData.append('jenis_tpa_tinja', $('#jenis_tpa_tinja').val());
          
          if (kode_kota == ''){
            document.getElementById("kode_kota").focus();
            swal.fire("", "Kabupaten Tidak Boleh Kosong", "error"); 
        

        }else if (kode_kec == ''){
          document.getElementById("kode_kec").focus();
          swal.fire("", "Kecamatan Tidak Boleh Kosong", "error"); 
      

      }else if (kode_kel == ''){
        document.getElementById("kode_kel").focus();
        swal.fire("", "Kelurahan Tidak Boleh Kosong", "error"); 
    

    }else if (no_ktp == ''){
        document.getElementById("no_ktp").focus();
        swal.fire("", "No KTP Tidak Boleh Kosong", "error"); 
    

    }
    else if (jumlhstring < '16'){
        document.getElementById("no_ktp").focus();
        swal.fire("", "Jumlah Digit KTP Kurang Dari 16 Digit", "error"); 
    

    }
    else if (nama_kk == ''){
        document.getElementById("nama_kk").focus();
        swal.fire("", "Nama Kepala Keluarga Tidak Boleh Kosong", "error"); 
    

    }else if (no_hp == ''){
        document.getElementById("no_hp").focus();
        swal.fire("", "Nomor Handphone Tidak Boleh Kosong", "error"); 
    

    }else if (jenis_kelamin == ''){
        document.getElementById("jenis_kelamin").focus();
        swal.fire("", "Jenis Kelamin Tidak Boleh Kosong", "error"); 
    

    }else if (alamat_rumah == ''){
        document.getElementById("alamat_rumah").focus();
        swal.fire("", "Alamat Rumah Tidak Boleh Kosong", "error"); 
    

    }else if (pekerjaan == ''){
        document.getElementById("pekerjaan").focus();
        swal.fire("", "Pekerjaan Tidak Boleh Kosong", "error"); 
    

    }else if (penghasilan == ''){
        document.getElementById("penghasilan").focus();
        swal.fire("", "Penghasilan Tidak Boleh Kosong", "error"); 
    

    }else if (sts_kepemilikan_rumah == ''){
        document.getElementById("sts_kepemilikan_rumah").focus();
        swal.fire("", "Status Kepemilikan Rumah Tidak Boleh Kosong", "error"); 
    

    }else if (aset_rumah == ''){
        document.getElementById("aset_rumah").focus();
        swal.fire("", "Aset Rumah Ditempat Lain Tidak Boleh Kosong", "error"); 
    

    }else if (sts_kepemilikan_tanah == ''){
        document.getElementById("sts_kepemilikan_tanah").focus();
        swal.fire("", "Status Kepemilikan Tanah Tidak Boleh Kosong", "error"); 
    

    }else if (jenis_kawasan == ''){
        document.getElementById("jenis_kawasan").focus();
        swal.fire("", "Jenis Kawasan Tidak Boleh Kosong", "error"); 
    

    }else if (material_pondasi == ''){
        document.getElementById("material_pondasi").focus();
        swal.fire("", "Material Pondasi Tidak Boleh Kosong", "error"); 
    

    }else if (material_kolom == ''){
        document.getElementById("material_kolom").focus();
        swal.fire("", "Material Kolom Tidak Boleh Kosong", "error"); 
    

    }else if (material_rangka_atap == ''){
        document.getElementById("material_rangka_atap").focus();
        swal.fire("", "Material Rangka Atap Tidak Boleh Kosong", "error"); 
    

    }else if (material_plafon == ''){
        document.getElementById("material_plafon").focus();
        swal.fire("", "Material Plafon Tidak Boleh Kosong", "error"); 
    

    }else if (material_balok == ''){
        document.getElementById("material_balok").focus();
        swal.fire("", "Material Balok Tidak Boleh Kosong", "error"); 
    

    }else if (sloof == ''){
        document.getElementById("sloof").focus();
        swal.fire("", "SLOOF Tidak Boleh Kosong", "error"); 
    

    }else if (jendela == ''){
        document.getElementById("jendela").focus();
        swal.fire("", "Jendela Tidak Boleh Kosong", "error"); 
    

    }else if (ventilasi == ''){
        document.getElementById("ventilasi").focus();
        swal.fire("", "Ventilasi Tidak Boleh Kosong", "error"); 
    

    }else if (kondisi_lantai == ''){
        document.getElementById("kondisi_lantai").focus();
        swal.fire("", "Kondisi Lantai Tidak Boleh Kosong", "error"); 
    

    }else if (material_lantai == ''){
        document.getElementById("material_lantai").focus();
        swal.fire("", "Material Lantai Tidak Boleh Kosong", "error"); 
    

    }else if (kondisi_dinding == ''){
        document.getElementById("kondisi_dinding").focus();
        swal.fire("", "Kondisi Dinding Tidak Boleh Kosong", "error"); 
    

    }else if (material_dinding == ''){
        document.getElementById("material_dinding").focus();
        swal.fire("", "Material Dinding Tidak Boleh Kosong", "error"); 
    

    }else if (kondisi_atap == ''){
        document.getElementById("kondisi_atap").focus();
        swal.fire("", "Kondisi Atap Tidak Boleh Kosong", "error"); 
    

    }else if (material_atap == ''){
        document.getElementById("material_atap").focus();
        swal.fire("", "Material Atap Tidak Boleh Kosong", "error"); 
    

    }else if (luas_rumah == ''){
        document.getElementById("luas_rumah").focus();
        swal.fire("", "Luas Rumah Tidak Boleh Kosong", "error"); 
    

    }else if (jumlah_penghuni == ''){
        document.getElementById("jumlah_penghuni").focus();
        swal.fire("", "Jumlah Penghuni Tidak Boleh Kosong", "error"); 
    

    }else if (sumber_air_minum == ''){
        document.getElementById("sumber_air_minum").focus();
        swal.fire("", "Sumber Air Minum Tidak Boleh Kosong", "error"); 
    

    }else if (jarak_tinja == ''){
        document.getElementById("jarak_tinja").focus();
        swal.fire("", "Jarak SAM-TPA Tinja Tidak Boleh Kosong", "error"); 
    

    }else if (jamban == ''){
        document.getElementById("jamban").focus();
        swal.fire("", "Kamar Mandi Dan Jamban Tidak Boleh Kosong", "error"); 
    

    }else if (jenis_kloset == ''){
        document.getElementById("jenis_kloset").focus();
        swal.fire("", "Jenis Kloset Tidak Boleh Kosong", "error"); 
    

    }else if (jenis_tpa_tinja == ''){
        document.getElementById("jenis_tpa_tinja").focus();
        swal.fire("", "Jenis TPA Tinja Tidak Boleh Kosong", "error"); 
    

    }else if (foto == ''){
        document.getElementById("foto").focus();
        swal.fire("", "Foto Rumah Tidak Boleh Kosong", "error"); 
    

    }
    else{   
                $.ajax({  
                     url:"app/modul/mod_pendataan/main_act.php?module=pendataan&act=add",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".simpan").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        if(data=='1'){

                        swal.fire("","Simpan Sukses", "success");
                        $("#kode_kota").val('').trigger('change');
                        $('#no_ktp').val('');
                        $('#nama_kk').val('');
                        $('#no_hp').val('');
                        $('#alamat_rumah').val('');
                        $('#luas_rumah').val('');
                        $('#jumlah_penghuni').val('');
                        $('#foto').val('');
                        $("#kode_kec").val('').trigger('change');
                        $("#kode_kel").val('').trigger('change');
                        $("#jenis_tpa_tinja").val('').trigger('change');
                        $("#jenis_kloset").val('').trigger('change');
                        $("#jamban").val('').trigger('change');
                        $("#jarak_tinja").val('').trigger('change');
                        $("#sumber_air_minum").val('').trigger('change');
                        $("#aset_rumah").val('').trigger('change');
                        $("#kondisi_atap").val('').trigger('change');
                        $("#material_dinding").val('').trigger('change');
                        $("#kondisi_dinding").val('').trigger('change');
                        $("#material_lantai").val('').trigger('change');
                        $("#kondisi_lantai").val('').trigger('change');
                        $("#ventilasi").val('').trigger('change');
                        $("#jendela").val('').trigger('change');
                        $("#sloof").val('').trigger('change');
                        $("#material_balok").val('').trigger('change');
                        $("#material_plafon").val('').trigger('change');
                        $("#material_rangka_atap").val('').trigger('change');
                        $("#material_kolom").val('').trigger('change');
                        $("#material_pondasi").val('').trigger('change');
                        $("#jenis_kawasan").val('').trigger('change');
                        $("#sts_kepemilikan_tanah").val('').trigger('change');
                        $("#aset_rumah").val('').trigger('change');
                        $("#sts_kepemilikan_rumah").val('').trigger('change');
                        $("#penghasilan").val('').trigger('change');
                        $("#pekerjaan").val('').trigger('change');
                        $("#jenis_kelamin").val('').trigger('change');
                        $("#material_atap").val('').trigger('change');

                        }else{

                            swal.fire("", "Simpan Gagal No. KTP Sudah Ada...!!", "error");
                            document.getElementById("no_ktp").focus();
                            
                        }



						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".simpan").html('<em class="icon ni ni-save"></em> Simpan Pendataan');
                     
                       
                       } 
                }); 
                
            }
            
      }) 
	  
	  
 })  
 
 </script>  