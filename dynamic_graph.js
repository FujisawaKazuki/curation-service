var	datapos1 = 10;
var	datapos2 = 10;
var	datapos3 = 10;
var	datapos4 = 10;
var lineChartData1 = {
	labels : ["0秒","10秒"],
	bezierCurve: false,
	datasets : [
		{
			fillColor : "rgba(255,255,255,0.2)",
			strokeColor : "red",
			pointColor : "red",
			data : []
		}
	]
};
var lineChartData2 = {
	labels : ["0秒","10秒"],
	bezierCurve: false,
	datasets : [
		{
			fillColor : "rgba(255,255,255,0.2)",
			strokeColor : "blue",
			pointColor : "blue",
			data : []
		}
	]
};
var lineChartData3 = {
	labels : ["0秒","10秒"],
	bezierCurve: false,
	datasets : [
		{
			fillColor : "rgba(255,255,255,0.2)",
			strokeColor : "green",
			pointColor : "green",
			data : []
		}
	]
};
var lineChartData4 = {
	labels : ["0秒","10秒"],
	bezierCurve: false,
	datasets : [
		{
			fillColor : "rgba(255,255,255,0.2)",
			strokeColor : "purple",
			pointColor : "purple",
			data : []
		}
	]
};


window.onload = function(){
	//	初期データセット
	lineChartData1.datasets[0].data[0] =0
	lineChartData2.datasets[0].data[0] =0
	lineChartData3.datasets[0].data[0] =0
	lineChartData4.datasets[0].data[0] =0
	cnt1=0;
	cnt2=0;
	cnt3=0;
	cnt4=0;
	//	チャート生成
	var ctx1 = document.getElementById("canvas1").getContext("2d");
	var ctx2 = document.getElementById("canvas2").getContext("2d");
	var ctx3 = document.getElementById("canvas3").getContext("2d");
	var ctx4 = document.getElementById("canvas4").getContext("2d");
	window.myChart1 = new Chart(ctx1).Line(lineChartData1, {
		responsive : true
	});
	window.myChart2 = new Chart(ctx2).Line(lineChartData2, {
		responsive : true
	});
	window.myChart3 = new Chart(ctx3).Line(lineChartData3, {
		responsive : true
	});
	window.myChart4 = new Chart(ctx4).Line(lineChartData4, {
		responsive : true
	});
	//	１0秒ごとに繰り返し
	setTimeout("mycheck1()",10000);
	setTimeout("mycheck2()",10000);
	setTimeout("mycheck3()",10000);
	setTimeout("mycheck4()",10000);
}
function mycheck1()
{
	myaddData1 = [];
	var arr1 = new Array(0.42,0.38,0.35,0.37,0.36,0.30,0.42,0.33,0.35,0.36,0.36,0.48,0.36,0.28,0.24,0.44,0.44,0.32,0.26,0.40);
	myaddData1[0]= arr1[cnt1];
	if(((datapos1+10)%30)==0){
	window.myChart1.addData(myaddData1,(datapos1+10)+"秒");
	}else{
	window.myChart1.addData(myaddData1,"");	
	}
	datapos1=datapos1+10;
	cnt1++;
	if (cnt1 < 20 )
	{
		setTimeout("mycheck1()",10000);
	}else{
		cnt1=0;
		setTimeout("mycheck1()",10000);
	}
}
function mycheck2()
{
	myaddData2 = [];
	var arr2 = new Array(0.34,0.25,0.35,0.30,0.25,0.27,0.31,0.30,0.28,0.21,0.34,0.23,0.20,0.23,0.35,0.39,0.26,0.23,0.27,0.38);
	myaddData2[0]= arr2[cnt2];
	if(((datapos2+10)%30)==0){
	window.myChart2.addData(myaddData2,(datapos2+10)+"秒");
	}else{
	window.myChart2.addData(myaddData2,"");	
	}
	datapos2=datapos2+10;
	cnt2++;
	if (cnt2 < 20 )
	{
		setTimeout("mycheck2()",10000);
	}else{
		cnt2=0;
		setTimeout("mycheck2()",10000);
	}
}
function mycheck3()
{
	myaddData3 = [];
	var arr3 = new Array(0.17,0.17,0.18,0.17,0.17,0.19,0.17,0.19,0.19,0.17,0.17,0.17,0.18,0.19,0.17,0.17,0.17,0.17,0.17,0.17);
	myaddData3[0]= arr3[cnt3];
	if(((datapos3+10)%30)==0){
	window.myChart3.addData(myaddData3,(datapos3+10)+"秒");
	}else{
	window.myChart3.addData(myaddData3,"");	
	}
	datapos3=datapos3+10;
	cnt3++;
	if (cnt3 < 20 )
	{
		setTimeout("mycheck3()",10000);
	}else{
		cnt3=0;
		setTimeout("mycheck3()",10000);
	}
}
function mycheck4()
{
	myaddData4 = [];
	var arr4 = new Array(0.35,0.23,0.28,0.26,0.18,0.28,0.27,0.22,0.24,0.24,0.28,0.26,0.21,0.24,0.24,0.30,0.19,0.31,0.22,0.27);
	myaddData4[0]= arr4[cnt4];
	if(((datapos4+10)%30)==0){
	window.myChart4.addData(myaddData4,(datapos4+10)+"秒");
	}else{
	window.myChart4.addData(myaddData4,"");	
	}
	datapos4=datapos4+10;
	cnt4++;
	if (cnt4 < 20 )
	{
		setTimeout("mycheck4()",10000);
	}else{
		cnt4=0;
		setTimeout("mycheck4()",10000);
	}
}


