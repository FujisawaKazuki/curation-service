var num_arr1 = new Array(0.4,0.35,0.3,0.55,0.5,0.3,0.05,0.3,0.35,0.4,0.3,0.8,0.5,0.3,0.15,0.75,0.25,0.3,0.3,0.5);
var num_arr2 = new Array(0.3,0.1,0.2,0.1,0.1,0.2,0.2,0.3,0.3,0.2,0.2,0.15,0.1,0.2,0.15,0.35,0.3,0.2,0.35,0.25);
var num_arr3 = new Array(0,0,0,0,0,0.05,0,0.05,0.05,0,0,0,0,0.05,0,0,0,0,0,0);
var num_arr4 = new Array(0.4,0.3,0.45,0.3,0.3,0.15,0.45,0.25,0.3,0.25,0.45,0.3,0.25,0.3,0.5,0.65,0.25,0.25,0.25,0.45);
var area1 = document.getElementById("show_area1");
var area2 = document.getElementById("show_area2");
var area3 = document.getElementById("show_area3");
var area4 = document.getElementById("show_area4");
var cn1 = 0;
var cn2 = 0;
var cn3 = 0;
var cn4 = 0;
function changeNum1(){
    area1.innerHTML = num_arr1[cn1];
   cn1 = (cn1<num_arr1.length-1) ? cn1+1 : 0;
}
function changeNum2(){
    area2.innerHTML = num_arr2[cn2];
    cn2 = (cn2<num_arr2.length-1) ? cn2+1 : 0;
}
function changeNum3(){
    area3.innerHTML = num_arr3[cn3];
    cn3 = (cn3<num_arr3.length-1) ? cn3+1 : 0;
}
function changeNum4(){
    area4.innerHTML = num_arr4[cn4];
    cn4 = (cn4<num_arr4.length-1) ? cn4+1 : 0;
}
var change_id1 = setInterval("changeNum1()",10000);
var change_id2 = setInterval("changeNum2()",10000);
var change_id3 = setInterval("changeNum3()",10000);
var change_id4 = setInterval("changeNum4()",10000);