<div class="content-full bg-gray">
	<div class="container">
		<div class="page-content">
			
<!-- Widget Arsip -->
<div class="block-downloads">
	<div class="head-downloads" style="background-color: aqua;">TARGET DAN CAPAIAN SANITASI</div>
	<div class="row">
		<div class="col-md-2" style="padding-top:10px;text-align:right">Provinsi/Kabupaten/Kota</div>
		<div class="col-md-3">	
			
				<select class="form-control input-sm form-filter" id="kodekota">
				<option value="18">Provinsi Lampung</option>
                <?php  
          $querymenu21 = "SELECT * FROM kota order by Id";
          $hasilmenu21 = mysqli_query($koneksi,$querymenu21);
          while ($rdata1=mysqli_fetch_array($hasilmenu21)) {
          ?>
            <option value="<?php echo $rdata1['kode_kota'];?>"><?php echo $rdata1['nama_kota'];?></option>
          <?php
          }
          ?>
			</select>
			
		</div>
		<div class="col-md-1" style="padding-top:10px;text-align:right">Tahun</div>
		<div class="col-md-2"> 
			
				<select class="form-control input-sm form-filter tahun" id="tahun">
				
				<?php
                 $tahun="2021";
                 $tahunb=date('Y')+1; 
                 for ($i=$tahun; $i<=$tahunb ; $i++){
                ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
                 }
                 ?>
				
			</select>
			
		</div>
	</div>
<br>
<!-- ------------------------------------------------------------------------------------------- -->

<div class="row">
        <div class="col-md-4 col-xl-3">
        <div class="item">
                <div class="stat-box bg-success">
                    <div class="inner">
                        <div class="stat-value">
                        <div id="jumpenduduk">0</div>
                        </div>
                        <p class="stat-title">TOTAL PENDUDUK</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-people"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
        <div class="item">
                <div class="stat-box bg-success">
                    <div class="inner">
                        <div class="stat-value">
                        <div id="jumpendudukdesa">0</div>
                        </div>
                        <p class="stat-title">PENDUDUK PERDESAAN</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-person"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
        <div class="item">
                <div class="stat-box bg-success">
                    <div class="inner">
                        <div class="stat-value">
                        <div id="jumpendudukkota">0</div>
                        </div>
                        <p class="stat-title">PENDUDUK PERKOTAAN</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-person"></i>
                    </div>
                </div>
            </div>
        </div>
        
	</div>

    <div class="row">
        <div class="col-md-4 col-xl-3">
        <div class="item">
                <div class="stat-box bg-danger">
                    <div class="inner">
                        <div class="stat-value">
                        <div id="targetlayak">0 %</div>
                        </div>
                        <p class="stat-title">TARGET LAYAK</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
        <div class="item">
                <div class="stat-box bg-danger">
                    <div class="inner">
                        <div class="stat-value">
                        <div id="targetbelumlayak">0 %</div>
                        </div>
                        <p class="stat-title">TARGET BELUM LAYAK</p>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
        <div class="item">
                <div class="stat-box bg-danger">
                    <div class="inner">
                        <div class="stat-value">
                        <div id="targetaman">0 %</div>
                        </div>
                        <p class="stat-title">TARGET AMAN</p>
                    </div>
                    
                </div>
            </div>
        </div>
	</div>

    
    <div class="row">
        <div class="col-md-4 col-xl-3">
        <div class="item">
                <div class="stat-box bg-warning">
                    <div class="inner">
                        <div class="stat-value">
                        <div id="capaianlayak">0 %</div>
                        </div>
                        <p class="stat-title">CAPAIAN LAYAK</p>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
        <div class="item">
                <div class="stat-box bg-warning">
                    <div class="inner">
                        <div class="stat-value">
                        <div id="capaianblmlayak">0 %</div>
                        </div>
                        <p class="stat-title">CAPAIAN BELUM LAYAK</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
        <div class="item">
                <div class="stat-box bg-warning">
                    <div class="inner">
                        <div class="stat-value">
                        <div id="capaianaman">0 %</div>
                        </div>
                        <p class="stat-title">CAPAIAN AMAN</p>
                    </div>
                    
                </div>
            </div>
        </div>
	</div>
<br>
<div class="hasil-map">


<div id="chartdiv11"></div>
<br>
<div id="chartdiv"></div>

<?php
$tahun=date("Y");
?>

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
        
          $querymenu213 = "SELECT DISTINCT tahun_data,kode_kota from air_limbah_akses where validasi='1'  group by tahun_data order by tahun_data ASC";
          
          $hasilmenu213 = mysqli_query($koneksi,$querymenu213);
          $jumdddd=mysqli_num_rows($hasilmenu213);
          if($jumdddd>0){
          while ($rdata13=mysqli_fetch_array($hasilmenu213)) {
            
            $querymenu212 = "SELECT sum(a.jum_penduduk_kk) as jumpendudukkk,sum(a.jumlah_penduduk_jiwa) as jumpenduduk,sum(a.jumlah_penduduk_pedesaan) as jumpendudukdesa,sum(a.jumlah_penduduk_perkotaan) as jumpendudukkota
            ,round(sum(b.capaian_1),2) as targetaman,round(sum((b.capaian_2 + b.capaian_3)/2),2) as targetlayak,round(sum((b.capaian_4 + b.capaian_5 + b.capaian_6)/3),2) as targetbelumlayak
            ,round(sum(((a.capaian_1/a.jum_penduduk_kk)*100)),2) as capaianaman,round(sum((((a.capaian_2 + a.capaian_3)/a.jum_penduduk_kk)*100)),2) as capaianlayak,round(sum((((a.capaian_4 + a.capaian_5 + a.capaian_6)/a.jum_penduduk_kk)*100)),2) as capaianblmlayak
            from air_limbah_akses a inner join air_limbah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$rdata13[tahun_data]' and a.validasi='1' group by a.tahun_data";
            
            
            $hasilmenu212 = mysqli_query($koneksi,$querymenu212);
            $rdata12=mysqli_fetch_array($hasilmenu212);

          
            $querymenu2121 = "SELECT sum(a.jum_penduduk_kk) as jumpendudukkk,sum(a.jumlah_penduduk_jiwa) as jumpenduduk,sum(a.jumlah_penduduk_pedesaan) as jumpendudukdesa,sum(a.jumlah_penduduk_perkotaan) as jumpendudukkota
            ,round(sum(b.capaian_1),2) as targetaman,round(sum((b.capaian_2 + b.capaian_3)/2),2) as targetlayak,round(sum((b.capaian_4 + b.capaian_5 + b.capaian_6)/3),2) as targetbelumlayak
            ,round(sum(((a.capaian_1/a.jum_penduduk_kk)*100)),2) as capaianaman,round(sum((((a.capaian_2 + a.capaian_3)/a.jum_penduduk_kk)*100)),2) as capaianlayak,round(sum((((a.capaian_4 + a.capaian_5 + a.capaian_6)/a.jum_penduduk_kk)*100)),2) as capaianblmlayak
            from air_limbah_akses a inner join air_limbah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$rdata13[tahun_data]' and a.validasi='1' group by a.tahun_data";
            
            $hasilmenu2121 = mysqli_query($koneksi,$querymenu2121);
            $rdata121=mysqli_fetch_array($hasilmenu2121);
           
     
            $querymenu2122 = "SELECT sum(a.jum_penduduk_kk) as jumpendudukkk,sum(a.jumlah_penduduk_jiwa) as jumpenduduk,sum(a.jumlah_penduduk_pedesaan) as jumpendudukdesa,sum(a.jumlah_penduduk_perkotaan) as jumpendudukkota
            ,round(sum(b.capaian_1),2) as targetaman,round(sum((b.capaian_2 + b.capaian_3)/2),2) as targetlayak,round(sum((b.capaian_4 + b.capaian_5 + b.capaian_6)/3),2) as targetbelumlayak
            ,round(sum(((a.capaian_1/a.jum_penduduk_kk)*100)),2) as capaianaman,round(sum((((a.capaian_2 + a.capaian_3)/a.jum_penduduk_kk)*100)),2) as capaianlayak,round(sum((((a.capaian_4 + a.capaian_5 + a.capaian_6)/a.jum_penduduk_kk)*100)),2) as capaianblmlayak
            from air_limbah_akses a inner join air_limbah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$rdata13[tahun_data]'  and a.validasi='1' group by a.tahun_data";
           
            $hasilmenu2122 = mysqli_query($koneksi,$querymenu2122);
            $rdata122=mysqli_fetch_array($hasilmenu2122);
            
          ?>
             { device: "aman", tahun: "<?php echo $rdata13['tahun_data'];?>", value: <?php  echo $rdata12['capaianaman'];?> },
             { device: "layak", tahun: "<?php echo $rdata13['tahun_data'];?>", value: <?php  echo $rdata121['capaianlayak'];?> },
             { device: "belumlayak", tahun: "<?php echo $rdata13['tahun_data'];?>", value: <?php  echo $rdata122['capaianblmlayak'];?> },
  
  <?php
          }
        }else{
          ?>
             { device: "aman", tahun: "<?php echo $rdata13['tahun_data'];?>", value:0 },
             { device: "layak", tahun: "<?php echo $rdata13['tahun_data'];?>", value: 0 },
             { device: "belumlayak", tahun: "<?php echo $rdata13['tahun_data'];?>", value: 0 },
  
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

createSeries("value", "AMAN", "aman");
createSeries("value", "LAYAK", "layak");
createSeries("value", "BELUM LAYAK", "belumlayak");

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
 
     $querymenu21nama = "SELECT * FROM kota order by Id";
     $hasilmenu21nama = mysqli_query($koneksi,$querymenu21nama);
     while ($rdatanama=mysqli_fetch_array($hasilmenu21nama)) {
   
        $querymenu212n = "SELECT round(sum(((a.capaian_1/a.jum_penduduk_kk)*100)),2) as capaianaman,round(sum((((a.capaian_2 + a.capaian_3)/a.jum_penduduk_kk)*100)),2) as capaianlayak,round(sum((((a.capaian_4 + a.capaian_5 + a.capaian_6)/a.jum_penduduk_kk)*100)),2) as capaianblmlayak
        from air_limbah_akses a inner join air_limbah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$tahun' and a.kode_kota='$rdatanama[kode_kota]' and a.validasi='1' group by a.tahun_data";
      
        $hasilmenu212n = mysqli_query($koneksi,$querymenu212n);
        $jumnnnnn=mysqli_num_rows($hasilmenu212n);
        $rdata12n=mysqli_fetch_array($hasilmenu212n);
        if($jumnnnnn>0){
            $amanbar=$rdata12n['capaianaman'];
        }else{
            $amanbar=0; 
        }
        
       
        $querymenu2121n = "SELECT sum(a.jum_penduduk_kk) as jumpendudukkk,sum(a.jumlah_penduduk_jiwa) as jumpenduduk,sum(a.jumlah_penduduk_pedesaan) as jumpendudukdesa,sum(a.jumlah_penduduk_perkotaan) as jumpendudukkota
        ,round(sum(b.capaian_1),2) as targetaman,round(sum((b.capaian_2 + b.capaian_3)/2),2) as targetlayak,round(sum((b.capaian_4 + b.capaian_5 + b.capaian_6)/3),2) as targetbelumlayak
        ,round(sum(((a.capaian_1/a.jum_penduduk_kk)*100)),2) as capaianaman,round(sum((((a.capaian_2 + a.capaian_3)/a.jum_penduduk_kk)*100)),2) as capaianlayak,round(sum((((a.capaian_4 + a.capaian_5 + a.capaian_6)/a.jum_penduduk_kk)*100)),2) as capaianblmlayak
        from air_limbah_akses a inner join air_limbah_akses_target b on a.kode_kota=b.kode_kota where a.tahun_data='$tahun' and a.kode_kota='$rdatanama[kode_kota]' and a.validasi='1' group by a.tahun_data";
        
        $hasilmenu2121n = mysqli_query($koneksi,$querymenu2121n);
        $jumnnnnnt=mysqli_num_rows($hasilmenu2121n);
        $rdata121n=mysqli_fetch_array($hasilmenu2121n);
        if($jumnnnnnt>0){
            $layakbar=$rdata121n['capaianlayak'];
        }else{
            $layakbar=0; 
        }
    ?>
    "<?php echo $rdatanama['nama_kota'];?>": {
   "Layak": <?php echo $layakbar;?> ,
   "Aman": <?php echo $amanbar;?> ,
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



</div>
<!-- HTML -->



<!-- Resources -->


<!-- HTML -->


<!-- -------------------------------------------------------------------------------------------- -->
	</div>
		</div>
		<!-- end content -->
	</div>
<!-- end content -->
</div>
</div>
</div>
