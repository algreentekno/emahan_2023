<script type="text/javascript">
 $(document).ready(function(){  

$('#btn-form').click(function(){ 
    //validasi form
   
    var template2 = $("#template").val();
   

  
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



    $('#import_excel').submit();  



})
      
 })
 </script>   