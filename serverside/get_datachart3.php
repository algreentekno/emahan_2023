<?php
include "../config/koneksi_li.php";
$kodekota=$_POST['kodekota'];
$tahun=$_POST['tahun'];

?>

<div id="chartdiv11"></div>
<br>
<div id="chartdiv"></div>

<!-- Chart code -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}

</style>
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

//

// Increase contrast by taking evey second color
chart.colors.step = 3;

var data = [

  <?php  
          if($kodekota=='18'){
          $querymenu213 = "SELECT DISTINCT tahun_data,kode_kota from sampah_akses where validasi='1'  group by tahun_data order by tahun_data ASC";
          }else{
            $querymenu213 = "SELECT DISTINCT tahun_data,kode_kota from sampah_akses where validasi='1' and kode_kota='$_POST[kodekota]' group by tahun_data order by tahun_data ASC";
            
          }
          $hasilmenu213 = mysqli_query($koneksi,$querymenu213);
          $jumdddd=mysqli_num_rows($hasilmenu213);
          if($jumdddd>0){
          while ($rdata13=mysqli_fetch_array($hasilmenu213)) {
            if($kodekota=='18'){
            $querymenu212 = "SELECT sum(a.capaian_1) as timbulsampah,sum(a.capaian_2) as penanganansampah,sum(a.capaian_4) as pengurangansampah
            ,round(sum(b.capaian_3),2) as targetpenanganan,round(sum(b.capaian_5),2) as targetpengurangan
            ,round(sum(((a.capaian_2/a.capaian_1)*100)),2) as capaianpenanganan,round(sum(((a.capaian_4/a.capaian_1)*100)),2) as capaianpengurangan
            from sampah_akses a inner join sampah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$rdata13[tahun_data]' and a.validasi='1' group by a.tahun_data";
            }else{
                $querymenu212 = "SELECT sum(a.capaian_1) as timbulsampah,sum(a.capaian_2) as penanganansampah,sum(a.capaian_4) as pengurangansampah
                ,round(sum(b.capaian_3),2) as targetpenanganan,round(sum(b.capaian_5),2) as targetpengurangan
                ,round(sum(((a.capaian_2/a.capaian_1)*100)),2) as capaianpenanganan,round(sum(((a.capaian_4/a.capaian_1)*100)),2) as capaianpengurangan
                from sampah_akses a inner join sampah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$rdata13[tahun_data]' and a.kode_kota='$rdata13[kode_kota]' and a.validasi='1' group by a.kode_kota,a.tahun_data";
                    
            }
            
            $hasilmenu212 = mysqli_query($koneksi,$querymenu212);
            $rdata12=mysqli_fetch_array($hasilmenu212);

            if($kodekota=='18'){
            $querymenu2121 = "SELECT sum(a.capaian_1) as timbulsampah,sum(a.capaian_2) as penanganansampah,sum(a.capaian_4) as pengurangansampah
            ,round(sum(b.capaian_3),2) as targetpenanganan,round(sum(b.capaian_5),2) as targetpengurangan
            ,round(sum(((a.capaian_2/a.capaian_1)*100)),2) as capaianpenanganan,round(sum(((a.capaian_4/a.capaian_1)*100)),2) as capaianpengurangan
            from sampah_akses a inner join sampah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$rdata13[tahun_data]' and a.validasi='1' group by a.tahun_data";
            }else{
                $querymenu2121 = "SELECT sum(a.capaian_1) as timbulsampah,sum(a.capaian_2) as penanganansampah,sum(a.capaian_4) as pengurangansampah
                ,round(sum(b.capaian_3),2) as targetpenanganan,round(sum(b.capaian_5),2) as targetpengurangan
                ,round(sum(((a.capaian_2/a.capaian_1)*100)),2) as capaianpenanganan,round(sum(((a.capaian_4/a.capaian_1)*100)),2) as capaianpengurangan
                from sampah_akses a inner join sampah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$rdata13[tahun_data]' and a.kode_kota='$rdata13[kode_kota]' and a.validasi='1' group by a.kode_kota,a.tahun_data";
                    
            }
            $hasilmenu2121 = mysqli_query($koneksi,$querymenu2121);
            $rdata121=mysqli_fetch_array($hasilmenu2121);
           
          
            
          ?>
             { device: "penanganan", tahun: "<?php echo $rdata13['tahun_data'];?>", value: <?php  echo $rdata12['capaianpenanganan'];?> },
             { device: "pengurangan", tahun: "<?php echo $rdata13['tahun_data'];?>", value: <?php  echo $rdata121['capaianpengurangan'];?> },
             
  <?php
          }
        }else{
          ?>
             { device: "penanganan", tahun: "<?php echo $rdata13['tahun_data'];?>", value:0 },
             { device: "pengurangan", tahun: "<?php echo $rdata13['tahun_data'];?>", value: 0 },
             
          <?php
        }
        ?>
  
 
];

var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
dateAxis.renderer.grid.template.location = 0;
dateAxis.renderer.minGridDistance = 30;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
function createSeries(field, name, id) {
  var series = chart.series.push(new am4charts.LineSeries());
  series.dataFields.valueY = field;
  series.dataFields.dateX = "tahun";
  series.name = name;
  series.tooltipText = "{tahun}: [b]{valueY}[/]";
  series.strokeWidth = 2;
  
  var bullet = series.bullets.push(new am4charts.CircleBullet());
  bullet.circle.stroke = am4core.color("#fff");
  bullet.circle.strokeWidth = 2;

  // Add data pre-processor
  series.data = data;
  series.events.on("beforedatavalidated", function(ev) {
    var source = ev.target.data;
    var data = [];
    for(var i = 0; i < source.length; i++) {
      var row = source[i];
      if (row.device == id) {
        data.push(row);
      }
    }
    ev.target.data = data;
  });
  
  return series;
}

createSeries("value", "PENANGANAN", "penanganan");
createSeries("value", "PENGURANGAN", "pengurangan");


chart.legend = new am4charts.Legend();
chart.cursor = new am4charts.XYCursor();

// generate some random data, quite different range



}); // end am4core.ready()
</script>

<style>
#chartdiv11 {
  width: 100%;
  height: 500px;
}
</style>


<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv11", am4charts.XYChart);

// some extra padding for range labels
chart.paddingBottom = 50;

chart.cursor = new am4charts.XYCursor();
chart.scrollbarX = new am4core.Scrollbar();

// will use this to store colors of the same items
var colors = {};

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "category";
categoryAxis.renderer.minGridDistance = 60;
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataItems.template.text = "{realName}";
categoryAxis.adapter.add("tooltipText", function(tooltipText, target){
  return categoryAxis.tooltipDataItem.dataContext.realName;
})

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.tooltip.disabled = true;
valueAxis.min = 0;

// single column series for all data
var columnSeries = chart.series.push(new am4charts.ColumnSeries());
columnSeries.columns.template.width = am4core.percent(80);
columnSeries.tooltipText = "{provider}: {realName}, {valueY}";
columnSeries.dataFields.categoryX = "category";
columnSeries.dataFields.valueY = "value";

// second value axis for quantity
var valueAxis2 = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis2.renderer.opposite = true;
valueAxis2.syncWithAxis = valueAxis;
valueAxis2.tooltip.disabled = true;

// quantity line series
var lineSeries = chart.series.push(new am4charts.LineSeries());
lineSeries.tooltipText = "{valueY}";
lineSeries.dataFields.categoryX = "category";
lineSeries.dataFields.valueY = "quantity";
lineSeries.yAxis = valueAxis2;
lineSeries.bullets.push(new am4charts.CircleBullet());
lineSeries.stroke = chart.colors.getIndex(13);
lineSeries.fill = lineSeries.stroke;
lineSeries.strokeWidth = 2;
lineSeries.snapTooltip = true;

// when data validated, adjust location of data item based on count
lineSeries.events.on("datavalidated", function(){
 lineSeries.dataItems.each(function(dataItem){
   // if count divides by two, location is 0 (on the grid)
   if(dataItem.dataContext.count / 2 == Math.round(dataItem.dataContext.count / 2)){
   dataItem.setLocation("categoryX", 0);
   }
   // otherwise location is 0.5 (middle)
   else{
    dataItem.setLocation("categoryX", 0.5);
   }
 })
})

// fill adapter, here we save color value to colors object so that each time the item has the same name, the same color is used
columnSeries.columns.template.adapter.add("fill", function(fill, target) {
 var name = target.dataItem.dataContext.realName;
 if (!colors[name]) {
   colors[name] = chart.colors.next();
 }
 target.stroke = colors[name];
 return colors[name];
})


var rangeTemplate = categoryAxis.axisRanges.template;
rangeTemplate.tick.disabled = false;
rangeTemplate.tick.location = 0;
rangeTemplate.tick.strokeOpacity = 0.6;
rangeTemplate.tick.length = 60;
rangeTemplate.grid.strokeOpacity = 0.5;
rangeTemplate.label.tooltip = new am4core.Tooltip();
rangeTemplate.label.tooltip.dy = -10;
rangeTemplate.label.cloneTooltip = false;

///// DATA
var chartData = [];
var lineSeriesData = [];

var data =
{
    <?php
    if($kodekota=='18'){
     $querymenu21nama = "SELECT * FROM kota order by Id";
    }else{
        $querymenu21nama = "SELECT * FROM kota where kode_kota='$kodekota' order by Id";
        
    }
     $hasilmenu21nama = mysqli_query($koneksi,$querymenu21nama);
     while ($rdatanama=mysqli_fetch_array($hasilmenu21nama)) {
        if($kodekota=='18'){
        $querymenu212n = "SELECT sum(a.capaian_1) as timbulsampah,sum(a.capaian_2) as penanganansampah,sum(a.capaian_4) as pengurangansampah
        ,round(sum(b.capaian_3),2) as targetpenanganan,round(sum(b.capaian_5),2) as targetpengurangan
        ,round(sum(((a.capaian_2/a.capaian_1)*100)),2) as capaianpenanganan,round(sum(((a.capaian_4/a.capaian_1)*100)),2) as capaianpengurangan
        from sampah_akses a inner join sampah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$tahun' and a.kode_kota='$rdatanama[kode_kota]' and a.validasi='1' group by a.tahun_data";
        }else{
            $querymenu212n = "SELECT sum(a.capaian_1) as timbulsampah,sum(a.capaian_2) as penanganansampah,sum(a.capaian_4) as pengurangansampah
            ,round(sum(b.capaian_3),2) as targetpenanganan,round(sum(b.capaian_5),2) as targetpengurangan
            ,round(sum(((a.capaian_2/a.capaian_1)*100)),2) as capaianpenanganan,round(sum(((a.capaian_4/a.capaian_1)*100)),2) as capaianpengurangan
            from sampah_akses a inner join sampah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$tahun' and a.kode_kota='$rdatanama[kode_kota]' and a.validasi='1' group by a.kode_kota,a.tahun_data";
      
        }
        $hasilmenu212n = mysqli_query($koneksi,$querymenu212n);
        $jumnnnnn=mysqli_num_rows($hasilmenu212n);
        $rdata12n=mysqli_fetch_array($hasilmenu212n);
        if($jumnnnnn>0){
            $amanbar=$rdata12n['capaianpenanganan'];
        }else{
            $amanbar=0; 
        }
        
        if($kodekota=='18'){
        $querymenu2121n = "SELECT sum(a.capaian_1) as timbulsampah,sum(a.capaian_2) as penanganansampah,sum(a.capaian_4) as pengurangansampah
        ,round(sum(b.capaian_3),2) as targetpenanganan,round(sum(b.capaian_5),2) as targetpengurangan
        ,round(sum(((a.capaian_2/a.capaian_1)*100)),2) as capaianpenanganan,round(sum(((a.capaian_4/a.capaian_1)*100)),2) as capaianpengurangan
        from sampah_akses a inner join sampah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$tahun' and a.kode_kota='$rdatanama[kode_kota]' and a.validasi='1' group by a.tahun_data";
        }else{
            $querymenu2121n = "SELECT sum(a.capaian_1) as timbulsampah,sum(a.capaian_2) as penanganansampah,sum(a.capaian_4) as pengurangansampah
            ,round(sum(b.capaian_3),2) as targetpenanganan,round(sum(b.capaian_5),2) as targetpengurangan
            ,round(sum(((a.capaian_2/a.capaian_1)*100)),2) as capaianpenanganan,round(sum(((a.capaian_4/a.capaian_1)*100)),2) as capaianpengurangan
            from sampah_akses a inner join sampah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$tahun' and a.kode_kota='$rdatanama[kode_kota]' and a.validasi='1' group by a.kode_kota,a.tahun_data";
                
        }
        $hasilmenu2121n = mysqli_query($koneksi,$querymenu2121n);
        $jumnnnnnt=mysqli_num_rows($hasilmenu2121n);
        $rdata121n=mysqli_fetch_array($hasilmenu2121n);
        if($jumnnnnnt>0){
            $layakbar=$rdata121n['capaianpengurangan'];
        }else{
            $layakbar=0; 
        }
    ?>
    "<?php echo $rdatanama['nama_kota'];?>": {
   "Penanganan": <?php echo $amanbar;?> ,
   "Pengurangan": <?php echo $layakbar;?> ,
    },
 <?php
     }
     ?>
      
 
}

// process data ant prepare it for the chart
for (var providerName in data) {
 var providerData = data[providerName];

 // add data of one provider to temp array
 var tempArray = [];
 var count = 0;
 // add items
 for (var itemName in providerData) {
   if(itemName != "quantity"){
   count++;
   // we generate unique category for each column (providerName + "_" + itemName) and store realName
   tempArray.push({ category: providerName + "_" + itemName, realName: itemName, value: providerData[itemName], provider: providerName})
   }
 }
 // sort temp array
 tempArray.sort(function(a, b) {
   if (a.value > b.value) {
   return 1;
   }
   else if (a.value < b.value) {
   return -1
   }
   else {
   return 0;
   }
 })

 // add quantity and count to middle data item (line series uses it)
 var lineSeriesDataIndex = Math.floor(count / 2);
 tempArray[lineSeriesDataIndex].quantity = providerData.quantity;
 tempArray[lineSeriesDataIndex].count = count;
 // push to the final data
 am4core.array.each(tempArray, function(item) {
   chartData.push(item);
 })

 // create range (the additional label at the bottom)
 var range = categoryAxis.axisRanges.create();
 range.category = tempArray[0].category;
 range.endCategory = tempArray[tempArray.length - 1].category;
 range.label.text = tempArray[0].provider;
 range.label.dy = 30;
 range.label.truncate = true;
 range.label.fontWeight = "bold";
 range.label.tooltipText = tempArray[0].provider;

 range.label.adapter.add("maxWidth", function(maxWidth, target){
   var range = target.dataItem;
   var startPosition = categoryAxis.categoryToPosition(range.category, 0);
   var endPosition = categoryAxis.categoryToPosition(range.endCategory, 1);
   var startX = categoryAxis.positionToCoordinate(startPosition);
   var endX = categoryAxis.positionToCoordinate(endPosition);
   return endX - startX;
 })
}

chart.data = chartData;


// last tick
var range = categoryAxis.axisRanges.create();
range.category = chart.data[chart.data.length - 1].category;
range.label.disabled = true;
range.tick.location = 1;
range.grid.location = 1;

}); // end am4core.ready()
</script>