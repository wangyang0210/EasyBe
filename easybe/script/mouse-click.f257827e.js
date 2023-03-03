"use strict";(self.webpackChunkeasybe=self.webpackChunkeasybe||[]).push([[87],{8802:function(t,i,n){function e(){class t{constructor({origin:t,speed:i,color:n,angle:e,context:s}){this.origin=t,this.position={...this.origin},this.color=n,this.speed=i,this.angle=e,this.context=s,this.renderCount=0}draw(){this.context.fillStyle=this.color,this.context.beginPath(),this.context.arc(this.position.x,this.position.y,2,0,2*Math.PI),this.context.fill()}move(){this.position.x=Math.sin(this.angle)*this.speed+this.position.x,this.position.y=Math.cos(this.angle)*this.speed+this.position.y+.3*this.renderCount,this.renderCount++}}class i{constructor({origin:t,context:i,circleCount:n=10,area:e}){this.origin=t,this.context=i,this.circleCount=n,this.area=e,this.stop=!1,this.circles=[]}randomArray(t){const i=t.length;return t[Math.floor(i*Math.random())]}randomColor(){const t=["8","9","A","B","C","D","E","F"];return"#"+this.randomArray(t)+this.randomArray(t)+this.randomArray(t)+this.randomArray(t)+this.randomArray(t)+this.randomArray(t)}randomRange(t,i){return(i-t)*Math.random()+t}init(){for(let i=0;i<this.circleCount;i++){const i=new t({context:this.context,origin:this.origin,color:this.randomColor(),angle:this.randomRange(Math.PI-1,Math.PI+1),speed:this.randomRange(1,6)});this.circles.push(i)}}move(){this.circles.forEach(((t,i)=>{if(t.position.x>this.area.width||t.position.y>this.area.height)return this.circles.splice(i,1);t.move()})),0==this.circles.length&&(this.stop=!0)}draw(){this.circles.forEach((t=>t.draw()))}}(new class{constructor(){this.computerCanvas=document.createElement("canvas"),this.renderCanvas=document.createElement("canvas"),this.computerContext=this.computerCanvas.getContext("2d"),this.renderContext=this.renderCanvas.getContext("2d"),this.globalWidth=window.innerWidth,this.globalHeight=window.innerHeight,this.booms=[],this.running=!1}handleMouseDown(t){const n=new i({origin:{x:t.clientX,y:t.clientY},context:this.computerContext,area:{width:this.globalWidth,height:this.globalHeight}});n.init(),this.booms.push(n),this.running||this.run()}handlePageHide(){this.booms=[],this.running=!1}init(){const t=this.renderCanvas.style;t.position="fixed",t.top=t.left=0,t.zIndex="999999999999999999999999999999999999999999",t.pointerEvents="none",t.width=this.renderCanvas.width=this.computerCanvas.width=this.globalWidth,t.height=this.renderCanvas.height=this.computerCanvas.height=this.globalHeight,document.body.append(this.renderCanvas),window.addEventListener("mousedown",this.handleMouseDown.bind(this)),window.addEventListener("pagehide",this.handlePageHide.bind(this))}run(){this.running=!0,0!=this.booms.length?(requestAnimationFrame(this.run.bind(this)),this.computerContext.clearRect(0,0,this.globalWidth,this.globalHeight),this.renderContext.clearRect(0,0,this.globalWidth,this.globalHeight),this.booms.forEach(((t,i)=>{if(t.stop)return this.booms.splice(i,1);t.move(),t.draw()})),this.renderContext.drawImage(this.computerCanvas,0,0,this.globalWidth,this.globalHeight)):this.running=!1}}).init()}n.r(i),n.d(i,{default:function(){return e}})}}]);