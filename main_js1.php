<?php
if($_GET['module']=='home'){
  $year=date('Y');
  include "config/koneksi_li.php";
    ?>
<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}

</style>
<style>
#chartdiv2 {
  width: 100%;
  height: 500px;
}

</style>
<style>
#chartdiv3 {
  width: 100%;
  height: 500px;
}

</style>

<!-- Resources -->


<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.XYChart);
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
   $querymenu2 = "SELECT * FROM kota order by kode_kota";
   $hasilmenu2 = mysqli_query($koneksi,$querymenu2);
   while ($rdata=mysqli_fetch_array($hasilmenu2)) {

    $querymenu22 = "SELECT count(*) as jmlh FROM rtlh where kode_kota='$rdata[kode_kota]'";
    $hasilmenu22 = mysqli_query($koneksi,$querymenu22);
    $rdata22=mysqli_fetch_array($hasilmenu22);

    $querymenu22k = "SELECT count(*) as jmlhk FROM rtlh where kode_kota='$rdata[kode_kota]' and sts_penanganan='Y'";
    $hasilmenu22k = mysqli_query($koneksi,$querymenu22k);
    $rdata22k=mysqli_fetch_array($hasilmenu22k);

    $jmlht1=$rdata22['jmlh']-$rdata22k['jmlhk'];

    if($jmlht1=='0'){
      $jmlht=$rdata22['jmlh'];
    }else{
      $jmlht=$jmlht1;
    }

  ?>
    {
      "network": "<?php echo $rdata['nama_kota'];?>",
      "MAU": <?php echo $jmlht;?>
    },
    <?php
   }
   ?>
    
  ]

 

}); // end am4core.ready()
</script>
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv2", am4charts.XYChart);
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
   $querymenu25 = "SELECT * FROM kota order by kode_kota";
   $hasilmenu25 = mysqli_query($koneksi,$querymenu25);
   while ($rdata25=mysqli_fetch_array($hasilmenu25)) {

    $querymenu225 = "SELECT count(*) as jmlh FROM rtlh where kode_kota='$rdata25[kode_kota]' and sts_penanganan='Y'";
    $hasilmenu225 = mysqli_query($koneksi,$querymenu225);
    $rdata225=mysqli_fetch_array($hasilmenu225);
    if ($rdata225['jmlh']=='0'){ 
      $tttt='0';}
      else{
        $tttt=$rdata225['jmlh'];
      }

  ?>
    {
      "network": "<?php echo $rdata25['nama_kota'];?>",
      "MAU": <?php echo $tttt;?>
    },
    <?php
   }
   ?>
  ]

 

}); // end am4core.ready()
</script>
<!-- HTML -->
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
   $querymenu25 = "SELECT * FROM kota order by kode_kota";
   $hasilmenu25 = mysqli_query($koneksi,$querymenu25);
   while ($rdata25=mysqli_fetch_array($hasilmenu25)) {

    $querymenu225 = "SELECT count(*) as jmlh FROM rtlh where kode_kota='$rdata25[kode_kota]' and jenis_kawasan='KUMUH'";
    $hasilmenu225 = mysqli_query($koneksi,$querymenu225);
    $rdata225=mysqli_fetch_array($hasilmenu225);
    if ($rdata225['jmlh']=='0'){ 
      $tttt='0';}
      else{
        $tttt=$rdata225['jmlh'];
      }

  ?>
    {
      "network": "<?php echo $rdata25['nama_kota'];?>",
      "MAU": <?php echo $tttt;?>
    },
    <?php
   }
   ?>
  ]

 

}); // end am4core.ready()
</script>

<?php
}
?>    