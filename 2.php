<html>
<head>
<meta http-equiv="Content-Type"
content="text/html;charset=UTF-8">
<meta charset="utf-8">
<title>sample</title>
<script language="javascript" type="text/javascript" src="oauth.js"></script>
<script language="javascript" type="text/javascript" src="sha1.js"></script>
<script language="javascript" type="text/javascript" src="dynamic_graph.js"></script>
<link rel="stylesheet" href="style.css"></link>

<!--<script language="javascript" type="text/javascript" src="jquery-latest.js"></script>-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script language="javascript" type="text/javascript" src="jquery.tablesorter.min.js"></script>
<script language="javascript" type="text/javascript" src="mediagroup.js"></script>
</head>
<body>

<?php
include("input_twitter.php");
?>
<div class="btn-group">
<p>配信モード</p>
<u1 class="dropdown-menu" role="menu">
<li data-filename="1.swf">Simple Player</li>
<li data-filename="2.swf">Mix Player</li>
</u1>
</div>
<div><span class="title">編纂インタフェース</span></div>
<div id="content">
<table>
<tr>
<div class="left">
<td valign="top">
<table id="sampleTable" border="5" class="tablesorter">
<caption><span class="title">映像情報流</span></caption>
<thead>
<tr>
<th>ID</th>
<th>映像</th>
<th>価値関数の値</th>
<th>遷移グラフ</th>
</tr>
</thead>
<tbody>
<tr>
<td class="number">1</td>
<td id="td1"class="emphasisstress" onclick="sample(1)">
<a href="javascript:document.ph01.src = '1.swf'; void(0);">
<embed id="1" allowfullscreen="true" bgcolor="#000000" allowscriptaccess="always"
name="1"
autostart="true";
mediagroup="videogroup"
src="1.swf"
type="application/x-shockwave-flash">
</embed></a>
</td>
<td class="number"><p id="show_area1" class="value">0</p></td>
<td><div class="graph">
	<canvas id="canvas1"></canvas></td>
</tr>
<tr>
<td class="number">2</td>
<td id="td2"class="noemphasisstress" onclick="sample(2)">
<a href="javascript:document.ph01.src = '2.swf'; void(0);">
<embed id="2" allowfullscreen="true" bgcolor="#000000" allowscriptaccess="always"
name="2"
autostart="true";
mediagroup="videogroup"
src="2.swf"
type="application/x-shockwave-flash">
</embed></a>
</td>
<td class="number"><p id="show_area2" class="value">0</p></td>
<td><div class="graph">
	<canvas id="canvas2"></canvas></td>
</tr>
<tr>
<td class="number">3</td>
<td id="td3"class="noemphasisstress" onclick="sample(3)">
<a href="javascript:document.ph01.src = '3.swf'; void(0);">
<embed id="3" allowfullscreen="true" bgcolor="#000000" allowscriptaccess="always"
name="3"
autostart="true";
mediagroup="videogroup"
src="3.swf"
type="application/x-shockwave-flash">
</embed></a>
</td>
<td class="number"><p id="show_area3" class="value">0</p></td>
<td><div class="graph">
	<canvas id="canvas3"></canvas></td>
</tr>
<tr>
<td class="number">4</td>
<td id="td4"class="noemphasisstress" onclick="sample(4)">
<a href="javascript:document.ph01.src = '4.swf'; void(0);">
<embed id="4" allowfullscreen="true" bgcolor="#000000" allowscriptaccess="always"
name="4"
autostart="true";
mediagroup="videogroup"
src="4.swf"
type="application/x-shockwave-flash">
</embed></a>
</td>
<td class="number"><p id="show_area4" class="value">0</p></td>
<td><div class="graph">
	<canvas id="canvas4"></canvas></td>
</tr>
</tbody>
</table>
</td>
</div>
<div class="right">
<td valign="top">
<table border="3" class="table_movie">
<caption><span class="title">SNS情報流</span></caption>
<tr>
<th>ツイート</th>
<th>可視化</th>
</tr>
<tr>
<td>
<script>
var hairetu=["2014-10-30 14:57:30","2014-10-30 14:57:30"];
c=0;
setInterval(function(){
    $.ajax({
        type: "POST",
        url: "output_twitter.php",
        dataType: "json",
        data: {
        	at: hairetu[i]
        },
        success: function(data, dataType) 
        {
            
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) 
        {
            alert('Error : ' + errorThrown);
        }
    });
    c++;
},100000);
</script>
</td>
<td><svg></svg></td>
</tr>
</table>
<br>
<table border="2" class="table_movie">
<caption><span class="title">アクチュエーションインタフェース</span></caption>
<tr>
<th>映像情報流</th>
<th>SNS情報流</th>
</tr>
<tr>
<td>
<div style="position: relative;">
	   <embed src="1.swf" name="ph01" id="result_movie" mediagroup="videogroup">
	   <div style="position: absolute; top: 120px; left: 140px;">	      
	   <embed src="2.swf" name="ph01" id="result_movie" mediagroup="videogroup" width="100" height="80">	   
	   </div>
</div>
</td>
<td>
<div id="JS">
</div>
</td>
</tr>
</table>
</td>
<div>
</tr>
</table>
</div>

<!--<script language="javascript" type="text/javascript" src="jquery.min.js"></script>-->
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>-->
<script language="javascript" type="text/javascript" src="jquery.jqplot.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.jqplot.min.css" />
<!--<script type="text/javascript" async="" src="./ga.js"></script>-->
<script src="./d3.v3.min.js"></script>
<script src="./d3.layout.cloud.js"></script>
<script src="Chart.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.css">
<script language="javascript" type="text/javascript" src="dynamic_number.js"></script>

<!--<script>
window.onload = function(){
var items = document.querySelectorAll('*[data-filename]');//配列としてすべて取得
var result_movie = document.querySelector("#result_movie");
for (var i = 0; i < items.length; ++i) {
	items[i].addEventListener('click',function(){
	result_movie.src = this.getAttribute('data-filename');
	});
	}
};
</script>-->

<script>
var array=["./1.csv","./2.csv","./3.csv","./4.csv","./5.csv","./6.csv","./7.csv","./8.csv","./9.csv"];
k=0;
setInterval(function(){	
d3.select('svg').append('text')
.attr({
	x:50,
	y:50,
	fill:"black",
	"font-size":20
})
//.text('Loading...')

//csvファイルを読み込んでデータを出力するメソッド	
d3.csv(array[k], function(data){
	//alert("abc"+array[k]);
	var h = 300;
	var w = 500;
	var random = d3.random.irwinHall(2)//アーウィンホール分布
	var countMax = d3.max(data, function(d){ return d.count} );
	var sizeScale = d3.scale.linear().domain([0, countMax]).range([10, 50])
	var colorScale = d3.scale.category20();
	var words = data.map(function(d) {
		return {
			text: d.word,
			size: sizeScale(d.count) //頻出カウントを文字サイズに反映
			};
		});	 
	d3.layout.cloud().size([w, h])
		.words(words)
//		.rotate(function() { return Math.round(1-random()) *90; }) //ランダムに文字を90度回転
		.rotate(function() { return 0; } )
		.font("Impact")
		.fontSize(function(d) { return d.size; })
		.on("end", draw) //描画関数の読み込み
		.start();

	//wordcloud 描画
	function draw(words) {
		d3.selectAll('text').remove();
		d3.select("svg")
		.attr({
			"width": w,
			"height": h
		})
		.append("g")
		.attr("transform", "translate(250,150)")
		.selectAll("text")
		.data(words)
		.enter().append("text")
		.style({
			"font-family": "Impact",
			"font-size":function(d) { return d.size + "px"; },
			"fill": function(d, i) { return colorScale(i); }
		})
		.attr({
			"text-anchor":"middle",
			"transform": function(d) {
				return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
			}
		})
		.text(function(d) { return d.text; });
	}	
});
k++;
},10000);
</script>


<script>
function sample(num){
for(i=1;i<=4;i++){
document.getElementById("td"+i).className = "noemphasisstress";
}
document.getElementById("td"+num).className = "emphasisstress";
}
</script>


<script type="text/javascript">
setInterval(function(){
	$("#sampleTable").tablesorter({
		sortList:[[2,1]]
	});
    },10000);
</script>


<style type="text/css">
div#test {
  	width: 100%;
}
div#test div.sur{
  	width:100%;
  	border-style: solid;
  	border-width: 1px;
  	border-color: #000080;
}
div#test div.sur:hover {
  	background-color: #f5fce8;
}
</style>


<style type="text/css">
.table_movie{
border-collapse: collapse;/*collapse:隣接するセルのボーダーを重ねて表示,separate:隣接するセルのボーダーを間隔をあけて表示*/
border-top: 5px solid #999;
border-bottom: 5px solid #999;
border-left: 5px solid #999;
border-right: 5px solid #999;
}
.table_movie th{
text-align: left;
vertical-align: top;
color: #fff;
background-color: #555;
border-left: 5px solid #ff6633;
border-top: 1px solid #fff;
}
</style>


<style type="text/css">
.title{
font-size:150%;
font-weight:bolder;
}
</style>

<style type="text/css">
.number{
font-size:120%;
font-weight:bolder;
}
</style>

<style type="text/css">
.graph{
width:100%;
height:100%;
}
</style>

<style type="text/css">
.emphasisstress{
border-collapse: collapse;/*collapse:隣接するセルのボーダーを重ねて表示,separate:隣接するセルのボーダーを間隔をあけて表示*/
border-top: 3px solid #ff0000;
border-bottom: 3px solid #ff0000;
border-left: 3px solid #ff0000;
border-right: 3px solid #ff0000;
}
.noemphasisstress{
border-collapse: collapse;
border: 3px solid #ffffff;
}
</style>

<style type="text/css">
div#content{
position: fixed !important;
position: absolute;
width: 100%;
height: 100%;
}
div#content div.right{
height:100%;
float: right;
float: clear;
}
div#content div.left{
height:100%;
float: left;
float: clear;
}
</style>


</body>
</html>