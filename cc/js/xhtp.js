// JavaScript Document
var imgs=document.getElementById('rot');
var nowf=1
var maxf=5

var time=setInterval(show,800);
window.onload=show;
function show(b)
{ if(Number(b))
 { nowf=b;
 clearInterval(time);
 }
 for (var i=1;i<=maxf;++i)
 { if(i==nowf)
 {
	imgs.src='img/adRotator_'+i+'.jpeg';
	 document.getElementById('fig_'+i).innerHTML=title[i-1];
	  document.getElementById('fig_'+i).className='numberover';
 }
 else
 {
	  document.getElementById('fig_'+i).innerHTML=i;
	  document.getElementById('fig_'+i).className='number';
 
 }}
 ++nowf;
 if(nowf>5)
 { nowf=1;}

}