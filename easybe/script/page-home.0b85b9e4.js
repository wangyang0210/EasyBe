"use strict";(self.webpackChunkeasybe=self.webpackChunkeasybe||[]).push([[628],{991:function(t,e,n){function i(t){return(t=>{let e=t.replace(/[\r\n]/g,""),n=$("#digg_count"),i=e.match(/.*posted\s*@\s*([0-9\-:\s]{16}).*阅读\s*\((\d*)\).*评论\s*\((\d*)\).*推荐\s*\((\d*)\).*/)||e.match(/.*posted\s*@\s*([0-9\-:\s]{16}).*阅读\s*\((\d*)\).*评论\s*\((\d*)\).*/)||e.match(/.*posted\s*@\s*([0-9\-:\s]{16}).*/);return{date:void 0===i[1]?"1970-01-01 00:00":i[1],vnum:void 0===i[2]?"0":i[2],cnum:void 0===i[3]?"0":i[3],tnum:void 0===i[4]?n.length?n.text():"0":i[4]}})(t)}n.d(e,{Z:function(){return i}})},565:function(t,e,n){n.r(e),n.d(e,{default:function(){return s}});var i=n(991),o=n(299);function s(){(()=>{$("#homeTopTitle span").text($.__config.info.name),$.__config.animate.infoName.enable&&$("#homeTopTitle span").hover((function(){$("#homeTopTitle span").css("animation","pageTitleText 2s infinite"),$("#homeTopTitle span").css("-webkit-animation","pageTitleText 1s infinite")}),(function(){$("#homeTopTitle span").css("animation","none"),$("#homeTopTitle span").css("-webkit-animation","none")}));let t=$.__config.banner.home.title,e=$("#hitokoto");if($.isArray(t)&&t.length>0){let n=$.__tools.randomNum(0,t.length-1);return e.html(t[n]).css("display","-webkit-box"),$.__tools.setDomHomePosition(),!0}if("string"==typeof t&&""!==t)return e.html(t).css("display","-webkit-box"),$.__tools.setDomHomePosition(),!0;let n=["当你凝视深渊时，深渊也在凝视着你。","有的人25岁就死了，只是到75岁才埋葬"];function i(t){if("success"===t?.status){let n=t?.note||t.data.content,i=t?.content||`《${t.data.origin.title}》 - ${t.data.origin.dynasty} - ${t.data.origin.author}`;e.html(n).css("display","-webkit-box"),$("#hitokotoAuthor").text(i).show()}else{let t=$.__tools.randomNum(0,n.length-1);e.html(n[t]).css("display","-webkit-box")}$.__tools.setDomHomePosition()}"one"===$.__config.banner.home.titleSource&&(0,o.W)("https://api.wangyangyang.vip/").then((t=>i(t))),"jinrishici"===$.__config.banner.home.titleSource&&(0,o.W)("https://v2.jinrishici.com/one.json").then((t=>i(t)))})(),$(".scroll-down").click((function(){let t;t=$("#home").offset().top+10,$.__tools.actScroll(t,500)})),(()=>{let t=$("#main .c_b_p_desc_readmore"),e=$("#main .postTitle");function n(t){let e=(0,i.Z)(t);return'<span class="postMeta"><i class="iconfont icon-schedule"></i>发表于 '+e.date+'<i class="iconfont icon-browse"></i>阅读：'+e.vnum+'<i class="iconfont icon-interactive"></i>评论：'+e.cnum+'<i class="iconfont icon-hot"></i>推荐：'+e.tnum+"</span>"}t.text("阅读全文 »"),$.each(e,(t=>{let i=$(e[t]),o=i.text(),s=i.nextAll(".postDesc:eq(0)").text();i.after(n(s)),/\[置顶\]/.test(o)&&i.append('<span class="postSticky">置顶</span>'),i.find("a").text(o.replace("[置顶]",""))})),e=$("#main .entrylistPosttitle"),$.each(e,(t=>{let i=$(e[t]),o=i.nextAll(".entrylistItemPostDesc:eq(0)").text();i.after(n(o))}))})(),(()=>{let t=$(".c_b_p_desc");$.each(t,(e=>{let n=$(t[e]),i=n.find("img.desc_img");if(i.length>0){let t=i.attr("src");i.hide(),n.css("width","60%"),n.parent("div").css("min-height","150px");let e='<div class="c_b_p_desc_img"><div style="background: url(\''+t+"') center center / contain no-repeat;\"></div></div>";n.after(e)}}))})(),$.__config.animate.homeBanner.enable&&n.e(86).then(n.t.bind(n,255,23)).then((t=>{$(".main-header").circleMagic($.__config.animate.homeBanner.options)}))}}}]);