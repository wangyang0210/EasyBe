"use strict";(self.webpackChunkeasybe=self.webpackChunkeasybe||[]).push([[2315],{9830:function(e,t,n){n.r(t),n.d(t,{default:function(){return o}});var a=n(3707);function o(e,t,n,o,c,l){const d=document.getElementById(e);let i=[],s=!1;for(let e in t)(new Image).src=t[e];for(let e=0;e<n;e++){let a=document.createElement("div");a.className="part";let o=document.createElement("div");o.className="section";let c=document.createElement("img");c.src=t[l],o.appendChild(c),a.style.setProperty("--x",-100/n*e+"vw"),a.appendChild(o),d.appendChild(a),i.push(a)}let r={duration:2.3,ease:a.Power4.easeInOut};window.setInterval((()=>{!function(n){if(!s){function o(t,n){t.appendChild(n),a.gsap.to(t,{...r,y:-1*document.getElementById(e).offsetHeight}).then((function(){t.children[0].remove(),a.gsap.to(t,{duration:0,y:0})}))}function c(t,n){t.prepend(n),a.gsap.to(t,{duration:0,y:-1*document.getElementById(e).offsetHeight}),a.gsap.to(t,{...r,y:0}).then((function(){t.children[1].remove(),s=!1}))}s=!0,l+n<0?l=t.length-1:l+n>=t.length?l=0:l+=n;for(let d in i){let u=i[d],m=document.createElement("div");m.className="section";let p=document.createElement("img");p.src=t[l],m.appendChild(p),(d-Math.max(0,n))%2?c(u,m):o(u,m)}}}(c)}),o)}}}]);