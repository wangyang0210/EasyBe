"use strict";(self.webpackChunkeasybe=self.webpackChunkeasybe||[]).push([[244],{7710:function(t,e,s){s.r(e);e.default=new class{constructor(){const t={container:$(".OwO")[0],target:$("textarea")[0],position:"down",width:"383px",maxHeight:"250px",data:$.__config.articleContent.owo.options};this.container=t.container,this.target=t.target,this.init(t)}init(t){this.area=t.target,this.packages=Object.keys(t.data);let e=`\n            <div class="OwO-logo">\n                    <span>\n                        <svg t="1677417166412" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3850" width="200" height="200">\n                            <path d="M933.87 505.928c10.165-233.804-172.811-426.945-406.615-437.111-81.323-5.082-162.646 20.331-233.804 60.993-15.248 10.165-20.331 25.413-10.165 40.662 5.082 10.165 25.413 15.248 35.578 10.165 66.074-40.662 137.232-60.993 208.389-55.909 203.308 5.082 360.87 177.893 350.705 381.201-5.082 203.308-177.893 360.87-381.201 350.705-198.224-5.083-360.87-177.893-350.705-381.201 0-71.158 25.413-142.315 71.158-198.224 5.082-15.248 5.082-30.496-10.165-40.662-10.165-10.165-25.413-5.082-35.578 5.083-50.827 71.158-76.239 147.397-81.323 233.804-10.165 233.804 172.811 426.945 406.615 437.111 233.804 10.165 426.945-172.811 437.111-406.614zM303.617 536.423c-15.248 5.082-20.331 20.331-15.248 35.578 35.578 96.571 127.067 157.564 228.72 157.564 101.653 0 193.142-60.993 223.639-157.563 5.082-15.247 0-30.496-15.248-35.578-15.248-5.082-30.496 5.082-35.578 15.247-25.413 76.239-96.571 127.067-172.811 127.067-81.323 0-152.481-50.828-177.893-127.067-5.082-10.165-20.331-20.331-35.578-15.247zM694.984 363.611c0-30.496-25.413-55.909-55.909-55.909s-50.828 25.413-50.828 55.909c0 30.496 20.331 50.828 50.828 50.828 30.496 0 55.909-20.331 55.909-50.828zM390.023 414.439c30.496 0 50.828-20.331 50.828-50.828s-20.331-55.909-50.828-55.909c-30.496 0-55.909 25.413-55.909 55.909 0 30.496 25.413 50.828 55.909 50.828z" p-id="3851"></path>\n                         </svg>\n                  </span>\n                </div>\n            <div class="OwO-body" style="width: ${t.width}">`;for(let s=0;s<this.packages.length;s++){e+=`<ul class="OwO-items OwO-items-${t.data[this.packages[s]].type}" style="max-height: ${parseInt(t.maxHeight)-53+"px"};">`;let a=t.data[this.packages[s]].container;for(let t=0;t<a.length;t++)e+=`<li class="OwO-item" title="${a[t].text}">${a[t].icon}</li>`;e+="</ul>"}e+='\n                <div class="OwO-bar">\n                    <ul class="OwO-packages">';for(let t=0;t<this.packages.length;t++)e+=`<li><span>${this.packages[t]}</span></li>`;e+="\n                    </ul>\n                </div>\n            </div>\n            ",this.container.innerHTML=e,this.logo=this.container.getElementsByClassName("OwO-logo")[0],this.logo.addEventListener("click",(()=>{this.toggle()})),this.container.getElementsByClassName("OwO-body")[0].addEventListener("click",(t=>{let e=null;if(t.target.classList.contains("OwO-item")?e=t.target:t.target.parentNode.classList.contains("OwO-item")&&(e=t.target.parentNode),e){const t=this.area.selectionEnd;let s=this.area.value;this.area.value=s.slice(0,t)+e.innerHTML+s.slice(t),this.area.focus(),this.toggle()}})),this.packagesEle=this.container.getElementsByClassName("OwO-packages")[0];for(let t=0;t<this.packagesEle.children.length;t++)(e=>{this.packagesEle.children[t].addEventListener("click",(()=>{this.tab(e)}))})(t);this.tab(0)}toggle(){this.container.classList.contains("OwO-open")?this.container.classList.remove("OwO-open"):this.container.classList.add("OwO-open")}tab(t){const e=this.container.getElementsByClassName("OwO-items-show")[0];e&&e.classList.remove("OwO-items-show"),this.container.getElementsByClassName("OwO-items")[t].classList.add("OwO-items-show");const s=this.container.getElementsByClassName("OwO-package-active")[0];s&&s.classList.remove("OwO-package-active"),this.packagesEle.getElementsByTagName("li")[t].classList.add("OwO-package-active")}}}}]);