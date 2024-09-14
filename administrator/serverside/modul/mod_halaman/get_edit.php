<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from halamanstatis where id_halaman='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
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
<input type="hidden" class="form-control" id="id_halaman1" value="<?php echo $dataout['id_halaman'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Judul Informasi</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="judul1" placeholder="" value="<?php echo $dataout['judul'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Detail Informasi</label>
    <div class="form-control-wrap">
    <textarea class="form-control isi_halaman1" id="instance1" cols="50"><?php echo $dataout['isi_halaman'];?></textarea>
    </div>
</div>

