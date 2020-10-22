var countDown = new Date("February 2,2020 13:00:00").getTime();
var x = setInterval(function(){


	var now= new Date().getTime();
	
	var distance = countDown - now;
	//var days = Math.floor(distance/(1000*3600*24));
	var hours = Math.floor((distance%(1000*3600*24))/(1000*3600));
	var minutes = Math.floor((distance%(1000*3600)/(1000*60)));
	var secs = Math.floor((distance%(1000*60))/1000);

	document.getElementById("timer").innerHTML = "Time Left: "+hours+"h  "+minutes+"mins  "+secs+"s";

	if(distance<0)
		{clearInterval(x);
		document.getElementById("timer").innerHTML = "Time UP";
	}
	},1000);