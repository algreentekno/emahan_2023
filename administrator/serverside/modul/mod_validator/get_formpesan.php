<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from upload_data a inner join kota b on a.kode_kota=b.kode_kota where a.rdm='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$row=mysqli_fetch_array($hasil1);

if($row['jenis_data']=='1'){
    $jnsdata="SPALD";
}elseif($row['jenis_data']=='2'){
    $jnsdata="IPLT";
}
elseif($row['jenis_data']=='3'){
    $jnsdata="SPAM REGIONAL";
}elseif($row['jenis_data']=='4'){
    $jnsdata="SPAM KABUPATEN/KOTA";
}elseif($row['jenis_data']=='5'){
    $jnsdata="SPAM IKK";
}elseif($row['jenis_data']=='6'){
    $jnsdata="SPAM PERDESAAN";
}elseif($row['jenis_data']=='7'){
    $jnsdata="TPA";
}elseif($row['jenis_data']=='8'){
    $jnsdata="TPST-TPS3R";
}elseif($row['jenis_data']=='9'){
    $jnsdata="TPS";
}elseif($row['jenis_data']=='10'){
    $jnsdata="KUMUH < 10 Ha";
}elseif($row['jenis_data']=='11'){
    $jnsdata="KUMUH > 10 Ha";
}elseif($row['jenis_data']=='12'){
    $jnsdata="PERUMAHAN";
}elseif($row['jenis_data']=='13'){
    $jnsdata="RTLH";
}

?>
<script type="text/javascript">

var textArea_id = "instance12";

tinyMCE.init({
    //******bind to textarea 
    selector: "#instance12",
    theme: "modern",width: '100%',height: 50,
    mode: "textareas",
    paste_as_text: true,
    plugins: ['advlist autolink link lists charmap print preview hr anchor pagebreak','searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking','table contextmenu directionality emoticons paste textcolor responsivefilemanager code'],
    force_br_newlines: true,
    paste_remove_spans: true,
    toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
    toolbar2: "| link unlink anchor | forecolor backcolor  | print preview code ",
    menubar: true,
    statusbar: true,
    browser_spellcheck: true,
    forced_root_block: "",
    setup: function (editor) {
        editor.on('init', function() {
           $('#loading_gfx').css('display', 'none'); 
        });
    }
});

if (tinymce.editors.length > 0) {
    tinymce.execCommand('mceFocus', true, textArea_id );       
    tinymce.execCommand('mceRemoveEditor',true, textArea_id);        
    tinymce.execCommand('mceAddEditor',true, textArea_id);
}
</script>
<input type="hidden" id="kodekota" value="<?php echo $row['kode_kota'];?>">
<input type="hidden" id="jenisdata" value="<?php echo $jnsdata;?>">
<input type="hidden" id="rdm" value="<?php echo $_POST['Id'];?>">


<div align="right"><h4>KIRIM PESAN </h4></div><hr>
<div class="form-group">
    
                                                            <label class="form-label" for="full-name-1">Nama Kabupaten</label>
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="kode_kota1" placeholder="" value="<?php echo $row['nama_kota'];?>" readonly> 
</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="form-label" for="full-name-1">Jenis Data</label>
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="jenis_data1" placeholder="" value="<?php echo $jnsdata;?>" readonly> 
</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="form-label" for="full-name-1">Pesan</label>
                                                            <div class="form-control-wrap">
                                                            <textarea class="form-control isi_pesan" id="instance12" cols="10"><?php echo $dataout['isi_berita'];?></textarea>
    
</div>
                                                        </div>
                                                    </div>