var num_arr1 = new Array(0.42,0.38,0.35,0.37,0.36,0.30,0.42,0.33,0.35,0.36,0.36,0.48,0.36,0.28,0.24,0.44,0.44,0.32,0.26,0.40);
var num_arr2 = new Array(0.34,0.25,0.35,0.30,0.25,0.27,0.31,0.30,0.28,0.21,0.34,0.23,0.20,0.23,0.35,0.39,0.26,0.23,0.27,0.38);
var num_arr3 = new Array(0.17,0.17,0.18,0.17,0.17,0.19,0.17,0.19,0.19,0.17,0.17,0.17,0.18,0.19,0.17,0.17,0.17,0.17,0.17,0.17);
var num_arr4 = new Array(0.35,0.23,0.28,0.26,0.18,0.28,0.27,0.22,0.24,0.24,0.28,0.26,0.21,0.24,0.24,0.30,0.19,0.31,0.22,0.27);
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