// JavaScript Document
//var endTime=new Date('2017-11-10 18:51:00'),ebdSeconds= endTime.getTime();
var endt=new Date(2022,8,12, 23,59,00);
var ends= endt.getTime();
var d=h=m=s=0;
function skill()
{
	var nowt=new Date();
	var rs=parseInt((ends-nowt.getTime())/1000);
	if (rs>0)
	{
		d=parseInt (rs/86400);
		h=parseInt ((rs/3600)%24);
		m=parseInt ((rs/60)%60);
		s=parseInt (rs % 60);
		
		d=d<10? '0'+d:d;
		h=h<10? '0'+h:h;
		m=m<10? '0'+m:m;
		s=s<10? '0'+s:s;
	}
	else
	{
		clearInterval(dd);
		d=h=m=s='00';
	}
	document.getElementById('b').innerHTML=d +'天';
	document.getElementById('c').innerHTML=h +'时';
	document.getElementById('d').innerHTML=m +'分';
	document.getElementById('e').innerHTML=s +'秒';
  }
	var dd=setInterval(skill,1000);
	
	
	