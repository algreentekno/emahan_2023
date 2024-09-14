<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from berita where id_berita='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<style>
    .tags{
	margin:2px auto;
	padding:0;
	position:absolute;
	left:24px;
	bottom:-12px;
	list-style:none;
	}
    .tags li, .tags a{
	float:left;
	height:24px;
	line-height:24px;
	position:relative;
	font-size:11px;
	}
    .tags a{
	margin-left:20px;
	padding:0 10px 0 12px;
	background:#0089e0;
	color:#fff;
	text-decoration:none;
	-moz-border-radius-bottomright:4px;
	-webkit-border-bottom-right-radius:4px;	
	border-bottom-right-radius:4px;
	-moz-border-radius-topright:4px;
	-webkit-border-top-right-radius:4px;	
	border-top-right-radius:4px;	
	} 
    .tags a:before{
	content:"";
	float:left;
	position:absolute;
	top:0;
	left:-12px;
	width:0;
	height:0;
	border-color:transparent #0089e0 transparent transparent;
	border-style:solid;
	border-width:12px 12px 12px 0;		
	}
    .tags a:after{
	content:"";
	position:absolute;
	top:10px;
	left:0;
	float:left;
	width:4px;
	height:4px;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
	background:#fff;
	-moz-box-shadow:-1px -1px 2px #004977;
	-webkit-box-shadow:-1px -1px 2px #004977;
	box-shadow:-1px -1px 2px #004977;
	}
</style>
<script type="text/javascript">
var BASE_URL = "<?php echo $urlmain;?>"; // use your own base url
var textArea_id = "instance1";

tinyMCE.init({
    //******bind to textarea 
    selector: "#instance1",
    theme: "modern",width: '100%',height: 300,
    mode: "textareas",
    paste_as_text: true,
    plugins: ['advlist image autolink link lists charmap print preview hr anchor pagebreak','searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking','table contextmenu directionality emoticons paste textcolor responsivefilemanager code'],
    force_br_newlines: true,
    paste_remove_spans: true,
    toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
    toolbar2: "| responsivefilemanager | image media | link unlink anchor | forecolor backcolor  | print preview code ",
    menubar: true,
    statusbar: true,
    browser_spellcheck: true,
    forced_root_block: "",
    setup: function (editor) {
        editor.on('init', function() {
           $('#loading_gfx').css('display', 'none'); 
        });
    },

    external_filemanager_path: BASE_URL + "../asset/filemanager/",
   filemanager_title: "Media Gallery",
   external_plugins: { "filemanager": BASE_URL + "../asset/filemanager/plugin.min.js" }
});

if (tinymce.editors.length > 0) {
    tinymce.execCommand('mceFocus', true, textArea_id );       
    tinymce.execCommand('mceRemoveEditor',true, textArea_id);        
    tinymce.execCommand('mceAddEditor',true, textArea_id);
}
</script>
<script>
 $(function(){
  $('#id_kategori1').select2({
    dropdownParent: $('#modaledit')
  });
}); 
</script>
<input type="hidden" class="form-control" id="id_berita1" value="<?php echo $dataout['id_berita'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Judul Informasi</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="judul1" placeholder="" value="<?php echo $dataout['judul'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Video Informasi</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="youtube1" placeholder="" value="<?php echo $dataout['youtube'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Kategori Informasi</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="id_kategori1" data-search="on">
    
    <?php
                                    
                                    $sql= "SELECT * FROM kategori  ORDER BY id_kategori ASC"; 
                                    $hasil = mysqli_query($koneksi,$sql);
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    if ($dataout['id_kategori']==$data['id_kategori']){
                                    ?>

                                    <option value="<?php echo"$data[id_kategori]";?>" selected><?php echo"$data[nama_kategori]";?></option>

                                    <?php 
                                        }else{
                                    ?>
                                     <option value="<?php echo"$data[id_kategori]";?>"><?php echo"$data[nama_kategori]";?></option>
                                    <?php
                                        }
                                    }
                                        ?> 
</select>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Detail Informasi</label>
    <div class="form-control-wrap">
    <textarea class="form-control isi_berita1" id="instance1" cols="50"><?php echo $dataout['isi_berita'];?></textarea>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Gambar</label>
    <div class="col-sm-6 col-lg-4">
                                        <div class="gallery card card-bordered">
                                            <a class="gallery-image popup-image" href="../img_berita/<?php echo $dataout['gambar'];?>">
                                                <img class="w-100 rounded-top" src="../img_berita/<?php echo $dataout['gambar'];?>" alt="">
                                            </a>
                                            
                                        </div>
                                    </div><br>
    <div class="form-control-wrap">
    <input type="file" class="form-control" id="gambar1" value="">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Keterangan Gambar</label>
    <div class="form-control-wrap">
        
        <input type="text" class="form-control" id="alt_gambar1" placeholder="" value="<?php echo $dataout['alt_gambar'];?>">
    </div>
</div>

    <label class="form-label" for="default-01">Tagging</label>
    <div class="form-control-wrap"><br>
    <div class="row col12">
    <ul class="tags">
        <?php 
        $tag=$dataout['tag'];
        $pch=explode(',',$tag);
        for($i = 0; $i < count($pch); $i++){
        ?>
        <li><a href="#"><?php echo $pch[$i];?></a></li>
        <?php
        }
        ?>
        </ul>
    </div>
    </div>
