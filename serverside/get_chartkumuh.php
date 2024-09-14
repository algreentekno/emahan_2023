<?php
include "../config/koneksi_li.php";
$kodekota=$_POST['kodekota'];
$kodekec=$_POST['kodekec'];
$kodekel=$_POST['kodekel'];
$tahun=$_POST['tahun'];

?>
<div id="chartdiv3"></div>

<style>
#chartdiv3 {
  width: 100%;
  height: 100vh;
}

</style>
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv3", am4charts.XYChart);
chart.padding(40, 40, 40, 40);

var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "network";
categoryAxis.renderer.minGridDistance = 1;
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.disabled = true;

var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
valueAxis.min = 0;



var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.valueX = "MAU";
series.dataFields.categoryY = "network";
series.columns.template.tooltipText = "{categoryY}: [bold]{valueX}[/]";
series.columns.template.fillOpacity = .8;
series.columns.template.tooltipX = am4core.percent(100);
series.columns.template.tooltipY = am4core.percent(50);

var labelBullet = series.bullets.push(new am4charts.LabelBullet())
labelBullet.label.horizontalCenter = "left";
labelBullet.label.dx = 10;
labelBullet.label.text = "{valueX}";
labelBullet.locationX = 1;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function(fill, target){
  return chart.colors.getIndex(target.dataItem.index);
});

categoryAxis.sortBySeries = series;
chart.data = [
    <?php
if($kodekota!='' and $kodekec=='' and $kodekel==''){
    ?>
    <?php
   $querymenu2 = "SELECT * FROM kecamatan where kode_kota='$kodekota' order by kode_kec";
   $hasilmenu2 = mysqli_query($koneksi,$querymenu2);
   while ($rdata=mysqli_fetch_array($hasilmenu2)) {

    $querymenu22 = "SELECT count(*) as jmlh FROM rtlh where kode_kec='$rdata[kode_kec]' and tahun_input_data='$tahun' and jenis_kawasan='KUMUH'";
    $hasilmenu22 = mysqli_query($koneksi,$querymenu22);
    $rdata22=mysqli_fetch_array($hasilmenu22);

  ?>
    {
      "network": "<?php echo $rdata['nama_kecamatan'];?>",
      "MAU": <?php echo $rdata22['jmlh'];?>
    },
    <?php
   }
   ?>
   <?php
}elseif($kodekota!='' and $kodekec!='' and $kodekel==''){
?>
<?php
   $querymenu2 = "SELECT * FROM kelurahan where kode_kota='$kodekota' and kode_kec='$kodekec' order by kode_kel";
   $hasilmenu2 = mysqli_query($koneksi,$querymenu2);
   while ($rdata=mysqli_fetch_array($hasilmenu2)) {

    $querymenu22 = "SELECT count(*) as jmlh FROM rtlh where kode_kel='$rdata[kode_kel]' and tahun_input_data='$tahun' and jenis_kawasan='KUMUH'";
    $hasilmenu22 = mysqli_query($koneksi,$querymenu22);
    $rdata22=mysqli_fetch_array($hasilmenu22);

  ?>
    {
      "network": "<?php echo $rdata['nama_kelurahan'];?>",
      "MAU": <?php echo $rdata22['jmlh'];?>
    },
    <?php
   }
   ?>
<?php
}elseif($kodekota!='' and $kodekec!='' and $kodekel!=''){
?>
<?php


$querymenu223 = "SELECT count(*) as jmlh FROM rtlh where kode_kel='$kodekel' and tahun_input_data='$tahun' and sts_kepemilikan_rumah='MILIK SENDIRI' and jenis_kawasan='KUMUH'";
$hasilmenu223 = mysqli_query($koneksi,$querymenu223);
$rdata223=mysqli_fetch_array($hasilmenu223);

$querymenu224 = "SELECT count(*) as jmlh FROM rtlh where kode_kel='$kodekel' and tahun_input_data='$tahun' and sts_kepemilikan_tanah='MILIK SENDIRI' and jenis_kawasan='KUMUH'";
$hasilmenu224 = mysqli_query($koneksi,$querymenu224);
$rdata224=mysqli_fetch_array($hasilmenu224);

?>
 {
      "network": "Rumah Milik Sendiri",
      "MAU": <?php echo $rdata223['jmlh'];?>
    },
    {
      "network": "Tanah Milik Sendiri",
      "MAU": <?php echo $rdata224['jmlh'];?>
    },
<?php
}
?>
   
  ]

 

}); // end am4core.ready()
</script>