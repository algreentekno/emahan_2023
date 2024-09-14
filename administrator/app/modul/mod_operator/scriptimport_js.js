<script type="text/javascript">
 $(document).ready(function(){  

$('#btn-form').click(function(){ 
    //validasi form
    var jenisdata2 = $("#jenisdata").val();
    var keterangan2 = $("#keterangan").val();
    var template2 = $("#template").val();
    var beritaacara2 = $("#beritaacara").val();

    if(jenisdata2==""){
        document.getElementById("jenisdata").focus();
        swal.fire({

icon: 'error',
html: 'Jenis Data tidak boleh kosong',
showConfirmButton: false,
timer: 1500
})
return false
};

if(keterangan2==""){
    document.getElementById("keterangan").focus();
    swal.fire({

icon: 'error',
html: 'Keterangan Data tidak boleh kosong',
showConfirmButton: false,
timer: 1500
})
return false
};

if(template2==""){
    document.getElementById("template").focus();
    swal.fire({

icon: 'error',
html: 'Template Data tidak boleh kosong',
showConfirmButton: false,
timer: 1500
})
return false
};

if(beritaacara2==""){
    document.getElementById("beritaacara").focus();
    swal.fire({

icon: 'error',
html: 'Berita Acara Data tidak boleh kosong',
showConfirmButton: false,
timer: 1500
})
return false
};

    $('#import_excel').submit();  



})
      
 })
 </script>   