(self.webpackChunkeasybe=self.webpackChunkeasybe||[]).push([[8086],{3255:function(){var e;(e=jQuery).fn.circleMagic=function(t){var o,a,n,r,i=!0,s=[],l=e.extend({color:"rgba(255,255,255,.5)",radius:10,density:.3,clearOffset:.2},t),d=this[0];function h(){i=!(document.body.scrollTop>a)}function c(){o=d.clientWidth,a=d.clientHeight,d.height=a+"px",n.width=o,n.height=a}function f(){if(i)for(var e in r.clearRect(0,0,o,a),s)s[e].draw();requestAnimationFrame(f)}function p(){var e=this;function t(){e.pos.x=Math.random()*o,e.pos.y=a+100*Math.random(),e.alpha=.1+Math.random()*l.clearOffset,e.scale=.1+.3*Math.random(),e.speed=Math.random(),"random"===l.color?e.color="rgba("+Math.floor(255*Math.random())+", "+Math.floor(255*Math.random())+", "+Math.floor(255*Math.random())+", "+Math.random().toPrecision(2)+")":e.color=l.color}e.pos={},t(),this.draw=function(){e.alpha<=0&&t(),e.pos.y-=e.speed,e.alpha-=5e-4,r.beginPath(),r.arc(e.pos.x,e.pos.y,e.scale*l.radius,0,2*Math.PI,!1),r.fillStyle=e.color,r.fill(),r.closePath()}}!function(){var e;o=d.offsetWidth,a=d.offsetHeight,(e=document.createElement("canvas")).id="homeTopCanvas",d.appendChild(e),e.parentElement.style.overflow="hidden",(n=document.getElementById("homeTopCanvas")).width=o,n.height=a,n.style.position="absolute",n.style.left="0",n.style.bottom="0",n.style.zIndex="1",r=n.getContext("2d");for(var t=0;t<o*l.density;t++){var i=new p;s.push(i)}f()}(),window.addEventListener("scroll",h,!1),window.addEventListener("resize",c,!1)}}}]);