"use strict";(self.webpackChunkEasyBe=self.webpackChunkEasyBe||[]).push([[4463],{55090:function(e,a,t){t.r(a),t.d(a,{default:function(){return i}});var o=t(19708),s=t(13839);function i(e){(0,s.default)(e),(()=>{if(e.__config.bookList.length){let a=$("#cnblogs_post_body"),t="";$.each(e.__config.bookList,(a=>{let o=e.__config.bookList[a];o.title&&(t+="<h1 class=`iconfont ${list.icon}`>"+o.title+"</h1>"),t+='<div class="book-cards">',$.each(o.books,(a=>{let s='<div class="book-card"> <div class="content-wrapper"> <img src="##cover##" alt="" class="book-card-img"> <div class="card-content"> <div class="book-name" title="##name##">##name##</div> <div class="rate"> <fieldset class="rating book-rate"> ##scoreHtml## </fieldset> <span class="book-voters card-vote"> ##infoHtml## </span> </div> </div> </div> <div class="book-by"> <i class="iconfont icon-book" title="阅读时间" style="display:##readDateStyle##"></i> ##readDate## <i class="iconfont icon-schedule" title="阅读进度" style="display:##readPercentageStyle##"></i> ##readPercentage## </div> </div>',i=o.books[a],r="";void 0!==i.score&&i.score>0?(r+='<i class="iconfont icon-star-full"></i>'.repeat(parseInt(i.score)),i.score>parseInt(i.score)&&(r+='<i class="iconfont icon-star-half"></i>'),r+='<i class="iconfont icon-icon-star"></i>'.repeat(parseInt(5-i.score))):r+='<i class="iconfont icon-icon-star"></i>'.repeat(5);let n="";void 0!==i.formerName&&i.formerName&&(n+='<span title="'+i.formerName+'">原　名：'+i.formerName+"</span><br>"),void 0!==i.author&&i.author&&(n+='<span title="'+i.author+'">作　者：'+i.author+"</span><br>"),void 0!==i.translator&&i.translator&&(n+='<span title="'+i.translator+'">译　者：'+i.translator+"</span><br>"),void 0!==i.press&&i.press&&(n+='<span title="'+i.press+'">出版社：'+i.press+"</span><br>"),void 0!==i.year&&i.year&&(n+='<span title="'+i.year+'">出版年：'+i.year+"</span>");let c=void 0!==i.readDate?i.readDate:"",l=c?"initial;":"none",d=void 0!==i.readPercentage?i.readPercentage:"",p=d?"initial;":"none";s=e.__tools.batchTempReplacement(s,[["cover",void 0!==i.cover?i.cover:""],["name",void 0!==i.name?i.name:""],["readDate",c],["readDateStyle",l],["readPercentage",d],["readPercentageStyle",p],["scoreHtml",r],["infoHtml",n]]),t+=s})),t+="</div>"}));let o=$(".articleSuffix-flg");o.length?o.before(t):a.append(t)}})(),(0,o.Z)(e)}}}]);