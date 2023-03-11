var nr1gd = document.getElementById('nr1-more');
var nr3gd = document.getElementsByClassName('nr3-more')[0];
var dbsy = document.getElementById('db-sy');
var nr1p = document.getElementById('nr1-p');
var dhtsy = document.getElementById('dht-sy');
nr1gd.onclick = function() {
	alert('不要乱点好吧，伙计!');
	nr1gd.innerHTML = '不要乱点';
};
nr3gd.onclick = function() {
	alert('不要乱点了伙计!!!   按钮被我杀了，防止你再乱点...');
	nr3gd.style.display = 'none'
};
dbsy.onclick = function() {
	alert('这里就是首页');
};
dhtsy.onclick = function() {
	alert('这里就是首页');
};
var ff = document.getElementsByClassName('g');
nr1gd.onclick = function() {
	alert('登录成功!');
	
};
