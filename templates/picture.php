<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>js cssͼƬ�л�Ч��(һ)</title>
<meta http-equiv="content-type" content="text/html;charset=gb2312">
<!--���������ӵ�<head>��</head>֮��-->
<style type="text/css">
<!--
span{overflow:hidden;font-size:0;line-height:0;}
.shutter{position:relative;overflow:hidden;height:300px;width:500px;}
.shutter li{position:absolute;left:0;top:0;}
ul,li{list-style:none;margin:0;padding:0}
img{display:block;border:none;}
.shutter-nav{display:inline-block;margin-right:8px;color:#fff;padding:2px 6px;background:#333;border:1px solid #fff;font-family:Tahoma;font-weight:bold;font-size:12px;cursor:pointer;}
.shutter-cur-nav{display:inline-block;margin-right:8px;color:#fff;padding:2px 6px;background:#ff7a00;border:1px solid #fff;font-family:Tahoma;font-weight:bold;font-size:12px;cursor:pointer;}
-->
</style>
<script type="text/javascript">
<!--
var Hongru={};
function H$(id){return document.getElementById(id)}
function H$$(c,p){return p.getElementsByTagName(c)}
Hongru.shutter = function(){
	function init(anchor,options){this.anchor=anchor; this.init(options);}
	init.prototype = {
		init:function(options){ //options������id����ѡ����ͼƬ�б���ǩid��auto����ѡ�����Զ�����ʱ�䣻index����ѡ������ʼ�����е�ͼƬ���
			var wp = H$(options.id), //��ȡͼƬ�б�Ԫ��
			ul = H$$('ul',wp)[0], //��ȡ
			li = this.li = H$$('li',ul);
			this.a = options.auto?options.auto:4; //�Զ����м��
			this.index = options.position?options.position:0; //��ʼ���е�ͼƬ��ţ���0��ʼ��
			this.l = li.length;
			this.cur = 0; //��ǰ��ʾ��ͼƬ���&&z-index����
			this.stN = options.shutterNum?options.shutterNum:5;
			this.dir = options.shutterDir?options.shutterDir:'H';
			this.W = wp.offsetWidth;
			this.H = wp.offsetHeight;
			this.aw = 0;
			this.mask = [];
			this.nav = [];
			ul.style.display = 'none';
			var container = this.container = document.createElement('div'),
				con_a = this._a = document.createElement('a');
			con_a.target = '_blank';
			container.style.cssText = con_a.style.cssText = 'position:absolute;width:'+this.W+'px;height:'+this.H+'px;left:0;top:0';
			container.appendChild(con_a);
			for (var x=0; x<this.stN; x++) {
				var mask = document.createElement('span');
				mask.style.cssText = this.dir == 'H'?'position:absolute;width:'+this.W/this.stN+'px;height:'+this.H+'px;left:'+x*this.W/this.stN+'px;top:0' : 'position:absolute;width:'+this.W+'px;height:'+this.H/this.stN+'px;left:0px;top:'+x*this.H/this.stN+'px';
				this.mask.push(mask);
				con_a.appendChild(mask);
			}
			wp.appendChild(container);
			this.nav_wp = document.createElement('div'); //�Ƚ�һ��div��Ϊ����������ǩ����Ҳ������<ul>��<ol>������������ܻ���ã������ҾͲ�����
			this.nav_wp.style.cssText = 'position:absolute;right:0;bottom:0;padding:8px 0;'; //Ϊ��������ʽ
			for(var i=0;i<this.l;i++){
				/* == ���ƿ����� == */
				var nav = document.createElement('a'); //�����Ҿ�ֱ����a��ǩ��������������������Ļ���Ҳ������li
				nav.className = options.navClass?options.navClass:'shutter-nav'; //������class��Ĭ��Ϊshutter-nav
				this.nav.push[nav];
				nav.innerHTML = i+1;
				nav.onclick = new Function(this.anchor+'.pos('+i+')'); //��onclick�¼���ֱ�ӵ���֮ǰд�õ�pos()����
				this.nav_wp.appendChild(nav);
			}
			wp.appendChild(this.nav_wp);
			this.curC = options.curNavClass?options.curNavClass:'shutter-cur-nav';
			this.pos(this.index); //�任����
		},
		auto:function(){
			this.li.a = setInterval(new Function(this.anchor+'.move(1)'),this.a*1000); 
		},
		move:function(i){//����i������ѡ��1��-1��1�������е���һ�ţ�-1�������е���һ��
			var n = this.cur+i; 
			var m = i==1?n==this.l?0:n:n<0?this.l-1:n; //��һ�Ż���һ�ŵ���ţ�ע����Ԫѡ��������ã�
			this.pos(m); //�任����һ�Ż���һ��
		},
		pos:function(i){
			clearInterval(this.li.a);
			clearInterval(this.li[i].a);
			this.aw = this.dir == 'H'?this.W/this.stN : this.H/this.stN;
			var src = H$$('img',this.li[i])[0].src;
			var _n = i+1>=this.l?0:i+1;
			var src_n = H$$('img',this.li[_n])[0].src;
			this.container.style.backgroundImage = 'url('+src_n+')';
			for(var n=0;n<this.stN;n++){
				this.mask[n].style.cssText = this.dir == 'H'?'position:absolute;width:'+this.W/this.stN+'px;height:'+this.H+'px;left:'+n*this.W/this.stN+'px;top:0' : 'position:absolute;width:'+this.W+'px;height:'+this.H/this.stN+'px;left:0px;top:'+n*this.H/this.stN+'px';
				this.mask[n].style.background = this.dir == 'H' ? 'url('+src+') no-repeat -'+n*this.W/this.stN+'px 0' : 'url('+src+') no-repeat 0 -'+n*this.H/this.stN+'px';
			}
			this.cur = i; //�󶨵�ǰ��ʾͼƬ����ȷ���
			this.li.a = false;
			for(var x=0;x<this.l;x++){
				H$$('a',this.nav_wp)[x].className = x==i?this.curC:'shutter-nav'; //�󶨵�ǰ��������ʽ
				}
			this._a.href = H$$('a',this.li[i])[0].href;
			//this.auto(); //�Զ�����
			this.li[i].a = setInterval(new Function(this.anchor+'.anim('+i+')'), 4*this.stN);
		},
		anim: function (i) {
		var tt = this.dir == 'H' ? parseInt(this.mask[this.stN-1].style.width) : parseInt(this.mask[this.stN-1].style.height);
			if(tt<=5){
				clearInterval(this.li[i].a);
				for(var n=0;n<this.stN;n++){
					this.dir == 'H' ? this.mask[n].style.width = 0 : this.mask[n].style.height = 0;
				}
				if(!this.li.a) {this.auto()}
			}else {
				for(var n=0;n<this.stN;n++){
					this.aw -= 1;
					this.dir == 'H' ? this.mask[n].style.width = this.aw + 'px' : this.mask[n].style.height = this.aw + 'px';
				}
			}
		}
	}
	return {init:init}
}();
//-->
</script>
</head>
<body>
<!--���������ӵ�<body>��</body>֮��-->
<div id="shutter" class="shutter" style="float:left">
	<ul>
		<li><a href="#" target="_blank"><img  src="/get_pic/2010/03/20101101134119592.jpg"></a></li>
		<li><a href="#" target="_blank"><img  src="/get_pic/2010/03/20101101134125911.jpg"></a></li>
		<li><a href="#" target="_blank"><img  src="/get_pic/2010/03/2010110113413229.jpg"></a></li>
		<li><a href="#" target="_blank"><img  src="/get_pic/2010/03/20101101134138963.jpg"></a></li>
		<li><a href="#" target="_blank"><img  src="/get_pic/2010/03/20101101134145649.jpg"></a></li>
	</ul>
</div>
<div id="shutter2" class="shutter" style="float:right">
	<ul>
		<li><a href="#" target="_blank"><img  src="/get_pic/2010/03/20101101134119592.jpg"></a></li>
		<li><a href="#" target="_blank"><img  src="/get_pic/2010/03/20101101134125911.jpg"></a></li>
		<li><a href="#" target="_blank"><img  src="/get_pic/2010/03/2010110113413229.jpg"></a></li>
		<li><a href="#" target="_blank"><img  src="/get_pic/2010/03/20101101134138963.jpg"></a></li>
		<li><a href="#" target="_blank"><img  src="/get_pic/2010/03/20101101134145649.jpg"></a></li>
	</ul>
</div>
<script type="text/javascript">
<!--
var shutterH = new Hongru.shutter.init('shutterH',{
	id:'shutter'
});
var shutterV = new Hongru.shutter.init('shutterV',{
	id:'shutter2',
	auto:2,
	shutterNum:4,
	shutterDir:'V',
	position:3
});
//-->
</script>
</body>
</html>