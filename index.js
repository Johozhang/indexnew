//function rnd(min,max){
//	return parsseInt(Math.random()*(max-min+1)+min);
//}
//var arr =[];
//while(arr.length<7){
//	var r =rnd(1,7);
//	if(arr.indexOf(r) == -1){
//		arr.push();
//	}
//}
//arr.sort(function(a,b){return a-b;});

//随机数

var number = Math.floor(Math.random()*3)+1; 
var result = document.getElementById("msg");
result.innerHTML = number;


var number = Math.floor(Math.random()*9)+1;
var result1 = document.getElementById("msg1");
result1.innerHTML = number;

