var adobj=document.getElementById('ad');
var gg=document.getElementById('close');
var adtop=adobj.offsetTop;
var adleft=adobj.offsetLeft;
var ggtop=gg.offsetTop;
var ggleft=gg.offsetLeft;
document.onscroll=function()
{
	adobj.style.top=adtop+document.documentElement.scrollTop+'px';
	adobj.style.left=adleft+document.documentElement.scrollleft+'px';
    gg.style.top=ggtop+document.documentElement.scrollTop+'px';
	gg.style.left=ggleft+document.documentElement.scrollleft+'px';
}
	gg.onclick=function()
	{
		adobj.style.display='none';
		gg.style.display='none';
	}