!function(){var t,e,n,o,i,a,r,c,s,l,u={434:function(t,e){"use strict";e.Z={init(){$.__event.scroll={},$.__event.scroll.handle=[],$.__event.scroll.temScroll=0,$.__event.scroll.docScroll=$(document).scrollTop(),$.__event.scroll.homeScroll=$("#home").offset().top-40,$(window).scroll((()=>{$.__event.scroll.docScroll=$(document).scrollTop(),$.__event.scroll.homeScroll=$("#home").offset().top-40,this.handle.scroll(),$.__event.scroll.temScroll=$.__event.scroll.docScroll})),$.__event.resize={},$.__event.resize.handle=[],$(window).resize((()=>{this.handle.resize()}))},handle:{scroll:()=>{for(let t=0;t<$.__event.scroll.handle.length;t++)$.__event.scroll.handle[t]()},resize:()=>{for(let t=0;t<$.__event.resize.handle.length;t++)$.__event.resize.handle[t]();$.__tools.setDomHomePosition()}}}},2865:function(t,e,n){var o={"./article":[330,148,269],"./article.js":[330,148,269],"./books":[2898,148,463],"./books.js":[2898,148,463],"./common/com-article":[3515,148],"./common/com-article.js":[3515,148],"./home":[565,628],"./home.js":[565,628],"./links":[3480,148,583],"./links.js":[3480,148,583]};function i(t){if(!n.o(o,t))return Promise.resolve().then((function(){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}));var e=o[t],i=e[0];return Promise.all(e.slice(1).map(n.e)).then((function(){return n(i)}))}i.keys=function(){return Object.keys(o)},i.id=2865,t.exports=i},5299:function(t,e,n){"use strict";async function o(t="",e="GET",n={}){let o={method:e,mode:"cors",redirect:"follow",referrerPolicy:"no-referrer"};Object.keys(n).length&&(o.body=JSON.stringify(n));return(await fetch(t,o)).json()}n.d(e,{W:function(){return o}})}},f={};function d(t){var e=f[t];if(void 0!==e)return e.exports;var n=f[t]={id:t,loaded:!1,exports:{}};return u[t](n,n.exports,d),n.loaded=!0,n.exports}d.m=u,t="function"==typeof Symbol?Symbol("webpack queues"):"__webpack_queues__",e="function"==typeof Symbol?Symbol("webpack exports"):"__webpack_exports__",n="function"==typeof Symbol?Symbol("webpack error"):"__webpack_error__",o=function(t){t&&!t.d&&(t.d=1,t.forEach((function(t){t.r--})),t.forEach((function(t){t.r--?t.r++:t()})))},d.a=function(i,a,r){var c;r&&((c=[]).d=1),c&&(c.moduleId=i.id);var s,l,u,f=new Set,d=i.exports,p=new Promise((function(t,e){u=e,l=t}));p[e]=d,p[t]=function(t){c&&t(c),f.forEach(t),p.catch((function(){}))},p.moduleId=i.id,i.exports=p,a((function(i){var a;s=function(i){return i.map((function(i){if(null!==i&&"object"==typeof i){if(i[t])return i;if(i.then){var a=[];a.d=0,i.then((function(t){r[e]=t,o(a)}),(function(t){r[n]=t,o(a)}));var r={};return r[t]=function(t){t(a)},r}}var c={};return c[t]=function(){},c[e]=i,c}))}(i);var r=function(){return s.map((function(t){if(t[n])throw t[n];return t[e]}))},l=new Promise((function(e){(a=function(){e(r)}).r=0;var n=function(t){t!==c&&!f.has(t)&&(f.add(t),t&&!t.d&&(a.r++,t.push(a)))};s.map((function(e){e[t](n)}))}));return a.r?l:r()}),(function(t){t?u(p[n]=t):l(d),o(c)})),c&&(c.d=0)},a=Object.getPrototypeOf?function(t){return Object.getPrototypeOf(t)}:function(t){return t.__proto__},d.t=function(t,e){if(1&e&&(t=this(t)),8&e)return t;if("object"==typeof t&&t){if(4&e&&t.__esModule)return t;if(16&e&&"function"==typeof t.then)return t}var n=Object.create(null);d.r(n);var o={};i=i||[null,a({}),a([]),a(a)];for(var r=2&e&&t;"object"==typeof r&&!~i.indexOf(r);r=a(r))Object.getOwnPropertyNames(r).forEach((function(e){o[e]=function(){return t[e]}}));return o.default=function(){return t},d.d(n,o),n},d.d=function(t,e){for(var n in e)d.o(e,n)&&!d.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:e[n]})},d.f={},d.e=function(t){return Promise.all(Object.keys(d.f).reduce((function(e,n){return d.f[n](t,e),e}),[]))},d.u=function(t){return"script/"+{2:"owo",14:"iconfont",18:"nh-banner-animation",77:"background-season",86:"circle-magic",87:"mouse-click",148:"page-common-com-article",170:"mouse-mo",191:"article-code",269:"page-article",289:"com-after",290:"background-particles",297:"gf-blink",315:"banner-images",379:"mouse-mouse",463:"page-books",545:"mouse-bubble",583:"page-links",586:"code-hljs",628:"page-home",663:"background-ribbons",732:"google-fonts",798:"owo-css",910:"com-before",984:"day-night"}[t]+"."+{2:"cab2e5c6",14:"95db844c",18:"a7d54046",77:"74ba14c9",86:"509f7a6e",87:"f257827e",148:"2eec3538",170:"5e7ffdd4",191:"046ce4e0",269:"e4c036b2",289:"89a45d72",290:"ba0b92d3",297:"0ed26fec",315:"ea2dec42",379:"15de047a",463:"026f8221",545:"e5788955",583:"48272f36",586:"bd688a25",628:"ea43b827",663:"951116ff",732:"170906b7",798:"3f64e41f",910:"d2264c6d",984:"46d02bb8"}[t]+".js"},d.miniCssF=function(t){return"style/"+{14:"iconfont",18:"nh-banner-animation",148:"page-common-com-article",290:"background-particles",297:"gf-blink",379:"mouse-mouse",463:"page-books",583:"page-links",732:"google-fonts",798:"owo-css",910:"com-before",984:"day-night"}[t]+"."+{14:"ea5cf129",18:"7ff7a955",148:"f6daeb86",290:"457e1a14",297:"0cc7f6e2",379:"6f5882cf",463:"544fc434",583:"828ed532",732:"66c39700",798:"527abd48",910:"c9da3625",984:"c002fab2"}[t]+".css"},d.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(t){if("object"==typeof window)return window}}(),d.hmd=function(t){return(t=Object.create(t)).children||(t.children=[]),Object.defineProperty(t,"exports",{enumerable:!0,set:function(){throw new Error("ES Modules may not assign module.exports or exports.*, Use ESM export syntax, instead: "+t.id)}}),t},d.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r={},c="easybe:",d.l=function(t,e,n,o){if(r[t])r[t].push(e);else{var i,a;if(void 0!==n)for(var s=document.getElementsByTagName("script"),l=0;l<s.length;l++){var u=s[l];if(u.getAttribute("src")==t||u.getAttribute("data-webpack")==c+n){i=u;break}}i||(a=!0,(i=document.createElement("script")).charset="utf-8",i.timeout=120,d.nc&&i.setAttribute("nonce",d.nc),i.setAttribute("data-webpack",c+n),i.src=t),r[t]=[e];var f=function(e,n){i.onerror=i.onload=null,clearTimeout(p);var o=r[t];if(delete r[t],i.parentNode&&i.parentNode.removeChild(i),o&&o.forEach((function(t){return t(n)})),e)return e(n)},p=setTimeout(f.bind(null,void 0,{type:"timeout",target:i}),12e4);i.onerror=f.bind(null,i.onerror),i.onload=f.bind(null,i.onload),a&&document.head.appendChild(i)}},d.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},function(){var t;d.g.importScripts&&(t=d.g.location+"");var e=d.g.document;if(!t&&e&&(e.currentScript&&(t=e.currentScript.src),!t)){var n=e.getElementsByTagName("script");n.length&&(t=n[n.length-1].src)}if(!t)throw new Error("Automatic publicPath is not supported in this browser");t=t.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),d.p=t}(),s=function(t){return new Promise((function(e,n){var o=d.miniCssF(t),i=d.p+o;if(function(t,e){for(var n=document.getElementsByTagName("link"),o=0;o<n.length;o++){var i=(r=n[o]).getAttribute("data-href")||r.getAttribute("href");if("stylesheet"===r.rel&&(i===t||i===e))return r}var a=document.getElementsByTagName("style");for(o=0;o<a.length;o++){var r;if((i=(r=a[o]).getAttribute("data-href"))===t||i===e)return r}}(o,i))return e();!function(t,e,n,o){var i=document.createElement("link");i.rel="stylesheet",i.type="text/css",i.onerror=i.onload=function(a){if(i.onerror=i.onload=null,"load"===a.type)n();else{var r=a&&("load"===a.type?"missing":a.type),c=a&&a.target&&a.target.href||e,s=new Error("Loading CSS chunk "+t+" failed.\n("+c+")");s.code="CSS_CHUNK_LOAD_FAILED",s.type=r,s.request=c,i.parentNode.removeChild(i),o(s)}},i.href=e,document.head.appendChild(i)}(t,i,e,n)}))},l={179:0},d.f.miniCss=function(t,e){l[t]?e.push(l[t]):0!==l[t]&&{14:1,18:1,148:1,290:1,297:1,379:1,463:1,583:1,732:1,798:1,910:1,984:1}[t]&&e.push(l[t]=s(t).then((function(){l[t]=0}),(function(e){throw delete l[t],e})))},function(){var t={179:0};d.f.j=function(e,n){var o=d.o(t,e)?t[e]:void 0;if(0!==o)if(o)n.push(o[2]);else{var i=new Promise((function(n,i){o=t[e]=[n,i]}));n.push(o[2]=i);var a=d.p+d.u(e),r=new Error;d.l(a,(function(n){if(d.o(t,e)&&(0!==(o=t[e])&&(t[e]=void 0),o)){var i=n&&("load"===n.type?"missing":n.type),a=n&&n.target&&n.target.src;r.message="Loading chunk "+e+" failed.\n("+i+": "+a+")",r.name="ChunkLoadError",r.type=i,r.request=a,o[1](r)}}),"chunk-"+e,e)}};var e=function(e,n){var o,i,a=n[0],r=n[1],c=n[2],s=0;if(a.some((function(e){return 0!==t[e]}))){for(o in r)d.o(r,o)&&(d.m[o]=r[o]);if(c)c(d)}for(e&&e(n);s<a.length;s++)i=a[s],d.o(t,i)&&t[i]&&t[i][0](),t[i]=0},n=self.webpackChunkeasybe=self.webpackChunkeasybe||[];n.forEach(e.bind(null,0)),n.push=e.bind(null,n.push.bind(n))}(),function(){"use strict";var t=JSON.parse('{"info":{"name":"","job":"","posting":"","proverb":"","connect":"","rss":"","startDate":"","avatar":"","blogIcon":""},"sidebar":{"navList":[],"customList":{},"infoBackground":"","titleMsg":"欢迎访问本博客~","blogStatus":true,"submenu":{"latestPosts":false,"myTags":false,"postsClassify":false,"readRank":false,"recommendRank":false,"latestComment":false,"commentsRank":false,"postsArchive":false,"customList":false}},"banner":{"text":false,"home":{"background":[],"title":[],"titleSource":"jinrishici"},"article":{"background":[]}},"loading":{"rebound":{"tension":16,"friction":5},"spinner":{"id":"spinner","radius":90,"sides":3,"depth":4,"colors":{"background":"#f0f0f0","stroke":"#272633","base":null,"child":"#272633"},"alwaysForward":true,"restAt":0.5,"renderBase":false}},"fontIconExtend":"","progressBar":{"id":"top-progress-bar","color":"#77b6ff","height":"2px","duration":0.2},"title":{"onblur":"(oﾟvﾟ)ノ Hi","onblurTime":500,"focus":"(*´∇｀*) 欢迎回来！","focusTime":1000},"footer":{"text":{"left":"","right":"","iconFont":{"icon":"icon-xinlv","color":"red","fontSize":"16px"}},"style":2,"aplayer":{"enable":false,"options":{"id":"3778678","server":"netease","type":"playlist","auto":"netease","fixed":"true","mini":"true","autoplay":"false","theme":"#2980b9","loop":"all","order":"random","preload":"auto","volume":"0.7","mutex":"true","lrcType":"0","listFolded":"true","listMaxHeight":"340px","storageHame":"metingjs"}}},"links":{"footer":[],"page":[]},"umami":{"url":"","shareId":""},"beian":{"info":""},"gonganbeian":{"info":"","link":""},"rtMenu":{"qrCode":"","reward":{"alipay":"","wechatpay":""},"downScrollDom":""},"switchDayNight":{"enable":true,"nightMode":false,"auto":{"enable":false,"dayHour":5,"nightHour":19}},"animate":{"bannerImages":{"enable":false,"options":{"itemNum":5,"current":0,"sort":1,"time":30000}},"homeBanner":{"enable":false,"options":{"radius":15,"density":0.2,"color":"rgba(255,255,255, .2)","clearOffset":0.3}},"articleTitle":{"enable":true},"articleBanner":{"enable":false},"background":{"ribbons":{"enable":false,"options":{"colorSaturation":"60%","colorBrightness":"50%","colorAlpha":0.5,"colorCycleSpeed":5,"verticalPosition":"random","horizontalSpeed":200,"ribbonCount":3,"strokeSize":0,"parallaxAmount":-0.2,"animateSections":true}},"particles":{"enable":false,"options":{}},"season":{"enable":false,"options":{"img":"","size":40}}},"mouse":{"bubble":{"enable":false,"options":{"live":30,"colors":["149, 197, 252","224, 199, 252"],"quantity":15,"size":5}},"mouse":{"enable":false,"options":{"size":8,"sizeF":36}},"mo":{"enable":false,"options":{"radius":{"0":100},"count":5,"children":{"shape":"polygon","fill":{"cyan":"yellow"},"radius":20,"rotate":{"360":0},"duration":2000}}},"click":{"enable":false,"options":{}}},"infoName":{"enable":false},"avatar":{"enable":false}},"code":{"type":"","options":{"hljs":{"theme":"atom-one-dark-reasonable","languages":[]},"maxHeight":"","line":false,"macStyle":true}},"articleSuffix":{"imgUrl":"","aboutHtml":"","copyrightHtml":"","supportHtml":"","copyText":{"enable":false,"length":30,"copyright":""}},"articleDirectory":{"position":"right","minBodyWeight":900,"autoWidthScroll":false},"consoleList":[],"bookList":[],"memorialDays":["12-13"],"articleContent":{"link":false,"iconfont":false,"iconfontArr":["hebaodan","bingtanghulu","kesong","qianceng","fengmi","feiyuguantou","shengjian","youtiao","yuzijiang","zhutongfan","doujiang","sanmingzhi","paofu","shanbei","dangaojuan","futejia","huangyou","xiangchang","banji","danta","qingning","lajiao","shizi","mojituo","pijiu","putaojiu","kouxiangtang","xiangcaobingqilin","jiaozi","tilamisu","huoguo","hongshu","bingkuai","mianhuatang","paobing","meishikafei","mantou","qishui","ganlan","jiroujuan","guodong","baozi","pingguo","chengzi","qingjiao","jidan","xihongshi","mangguo","baocai","niunai","mianbao","huluobu","zhangyu","pangxie","longxia","yangcong","rou","jitui","huage","xianyu","mogu","qiezi","xilanhua","ningmeng","liulian","banli","sanwenyu","tudou","xigua","nangua","huolongguo","fantuan","zhusun","shuiluobu","shanzhu","lanmei","shiliu","yezi","tiangua","mihoutao","boluo","kaixinguo","hetao","xiaweiyiguo","huasheng","bigenguo","kuihuazi","songzi","xiguazi","badanmu","yaoguo","danhuangsu","dangao","binggan","buding","tangguo","qiaokeli","hongzao","candou","putaogan","manyuemei","taozi","xiangjiao","caomei","niuyouguo","hamigua","chelizi","li","bale","kafei1","shutiao","zhenzhunaicha","xuegao","nailao","kele","tiantong","hanbao","xiezishousi","baomihua","regou","makalong","tianfuluo","juzi","baixiangguo","putao","shaomai","yumi","pipa","yangtao","youzi","lianwu","wuhuaguo","paomian","wandou","huanggua","suantou","tiantianquan","shupian","huafubing","bangbangtang","shousi","lizhi","doufu","mocha","boluomi","zhouzi","bingsha","suannai","pisa","haixing","haizhe","tongluoshao","nuomici","kuangquanshui","roujiamo","cha","zhangyuxiaowanzi","chengzhi","yuancaitou","baicai"],"roughNotation":{"enable":false,"underline":{"type":"underline","color":"blue"},"circle":{"type":"circle","color":"red"},"box":{"type":"box","color":"orange"},"highlight":{"type":"highlight","color":"yellow","iterations":1,"multiline":true},"bracket":{"type":"bracket","color":"red","padding":[2,10],"brackets":["left","right"],"strokeWidth":3},"strikeThrough":{"type":"strike-through","color":"red"},"crossedOff":{"type":"crossed-off","color":"red"}},"diggit":false,"commentTyping":{"enable":false,"options":{"colorful":true,"shake":false}},"owo":false},"comment":{"emoticon":{"颜文字":{"type":"emoticon","container":[{"icon":"OωO","text":"哦吼"},{"icon":"|´・ω・)ノ","text":"Hi"},{"icon":"ヾ(≧∇≦*)ゝ","text":"开心"},{"icon":"(☆ω☆)","text":"星星眼"},{"icon":"（╯‵□′）╯︵┴─┴","text":"掀桌"},{"icon":"￣﹃￣","text":"流口水"},{"icon":"(/ω＼)","text":"捂脸"},{"icon":"∠( ᐛ 」∠)＿","text":"给跪"},{"icon":"(๑•̀ㅁ•́ฅ)","text":"Hi"},{"icon":"→_→","text":"斜眼"},{"icon":"୧(๑•̀⌄•́๑)૭","text":"加油"},{"icon":"٩(ˊᗜˋ*)و","text":"有木有WiFi"},{"icon":"(ノ°ο°)ノ","text":"前方高能预警"},{"icon":"(´இ皿இ｀)","text":"我从未见过如此厚颜无耻之人"},{"icon":"⌇●﹏●⌇","text":"吓死宝宝惹"},{"icon":"(ฅ´ω`ฅ)","text":"已阅留爪"},{"icon":"(╯°A°)╯︵○○○","text":"去吧大师球"},{"icon":"φ(￣∇￣o)","text":"太萌惹"},{"icon":"ヾ(´･ ･｀｡)ノ\\"","text":"咦咦咦"},{"icon":"( ง ᵒ̌皿ᵒ̌)ง⁼³₌₃","text":"气呼呼"},{"icon":"(ó﹏ò｡)","text":"我受到了惊吓"},{"icon":"Σ(っ °Д °;)っ","text":"什么鬼"},{"icon":"( ,,´･ω･)ﾉ\\"(´っω･｀｡)","text":"摸摸头"},{"icon":"╮(╯▽╰)╭ ","text":"无奈"},{"icon":"o(*////▽////*)q ","text":"脸红"},{"icon":"＞﹏＜","text":""},{"icon":"( ๑´•ω•) \\"(ㆆᴗㆆ)","text":""},{"icon":"(｡•ˇ‸ˇ•｡)","text":""}]},"Emoji":{"type":"emoji","container":[{"icon":"😀","text":""},{"icon":"😁","text":""},{"icon":"😂","text":""},{"icon":"🤣","text":""},{"icon":"😃","text":""},{"icon":"😄","text":""},{"icon":"😅","text":""},{"icon":"😆","text":""},{"icon":"😉","text":""},{"icon":"😊","text":""},{"icon":"😋","text":""},{"icon":"😎","text":""},{"icon":"😍","text":""},{"icon":"😘","text":""},{"icon":"🥰","text":""},{"icon":"😗","text":""},{"icon":"😙","text":""},{"icon":"🥲","text":""},{"icon":"😚","text":""},{"icon":"🙂","text":""},{"icon":"🤗","text":""},{"icon":"🤩","text":""},{"icon":"🤔","text":""},{"icon":"🫡","text":""},{"icon":"🤨","text":""},{"icon":"😐","text":""},{"icon":"😑","text":""},{"icon":"😶","text":""},{"icon":"🫥","text":""},{"icon":"😶‍🌫️","text":""},{"icon":"🙄","text":""},{"icon":"😏","text":""},{"icon":"😣","text":""},{"icon":"😥","text":""},{"icon":"😮","text":""},{"icon":"🤐","text":""},{"icon":"😯","text":""},{"icon":"😪","text":""},{"icon":"😪","text":""},{"icon":"😫","text":""},{"icon":"🥱","text":""},{"icon":"😴","text":""},{"icon":"😌","text":""},{"icon":"😛","text":""},{"icon":"😜","text":""},{"icon":"😝","text":""},{"icon":"🤤","text":""},{"icon":"😒","text":""},{"icon":"😓","text":""},{"icon":"😔","text":""},{"icon":"😕","text":""},{"icon":"🫤","text":""},{"icon":"🙃","text":""},{"icon":"🫠","text":""},{"icon":"🤑","text":""},{"icon":"😲","text":""},{"icon":"☹️","text":""},{"icon":"🙁","text":""},{"icon":"😖","text":""},{"icon":"😞","text":""},{"icon":"😟","text":""},{"icon":"😤","text":""},{"icon":"😢","text":""},{"icon":"😭","text":""},{"icon":"😦","text":""},{"icon":"😧","text":""},{"icon":"😨","text":""},{"icon":"😩","text":""},{"icon":"🤯","text":""},{"icon":"😬","text":""},{"icon":"😮‍💨","text":""},{"icon":"😰","text":""},{"icon":"😱","text":""},{"icon":"🥵","text":""},{"icon":"🥶","text":""},{"icon":"😳","text":""},{"icon":"🤪","text":""},{"icon":"😵","text":""},{"icon":"😵‍💫","text":""},{"icon":"🥴","text":""},{"icon":"😠","text":""},{"icon":"😡","text":""},{"icon":"🤬","text":""},{"icon":"😷","text":""},{"icon":"🤒","text":""},{"icon":"🤢","text":""},{"icon":"🤕","text":""},{"icon":"🤮","text":""},{"icon":"🤧","text":""},{"icon":"😇","text":""},{"icon":"🤡","text":""},{"icon":"🤠","text":""},{"icon":"🥹","text":""},{"icon":"🥺","text":""},{"icon":"🥸","text":""},{"icon":"🥳","text":""},{"icon":"🤥","text":""},{"icon":"🤫","text":""},{"icon":"🤭","text":""},{"icon":"🫢","text":""},{"icon":"🫣","text":""},{"icon":"🧐","text":""},{"icon":"🤓","text":""},{"icon":"😈","text":""},{"icon":"👿","text":""},{"icon":"👹","text":""},{"icon":"👺","text":""},{"icon":"💀","text":""},{"icon":"💩","text":""},{"icon":"🤖","text":""},{"icon":"👾","text":""},{"icon":"👽","text":""},{"icon":"👻","text":""},{"icon":"☠️","text":""},{"icon":"😺","text":""},{"icon":"🙀","text":""},{"icon":"😸","text":""},{"icon":"😿","text":""},{"icon":"😹","text":""},{"icon":"😾","text":""},{"icon":"🙈","text":""},{"icon":"😻","text":""},{"icon":"😼","text":""},{"icon":"🙉","text":""},{"icon":"😽","text":""},{"icon":"🙊","text":""},{"icon":"🐯","text":""},{"icon":"🐗","text":""},{"icon":"🦁","text":""}]}}},"hooks":{},"default":{"version":"v2.1.7","jquery":"https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/jquery/3.6.0/jquery.min.js","iconfont":"https://at.alicdn.com/t/c/font_3628204_t6n3fw8b1zn.js","avatar":"https://www.wangyangyang.vip/usr/uploads/imgs/o_221114123823_default_avatar.webp","mojs":"https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-y/mo-js/0.288.2/mo.min.js","moment":"https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-y/moment.js/2.29.1/moment.min.js","gsap":"https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-y/gsap/3.9.1/gsap.min.js","highlight":"https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-y/highlight.js/11.4.0/highlight.min.js","hljscss":"https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-y/highlight.js/11.4.0/styles/","fancybox":"https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-y/fancybox/3.5.7/jquery.fancybox.min.js","fancyboxcss":"https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-y/fancybox/3.5.7/jquery.fancybox.min.css","bootstrap":"https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/bootstrap/5.0.0-beta3/js/bootstrap.min.js","clipboard":"https://lf9-cdn-tos.bytecdntp.com/cdn/expire-1-y/clipboard.js/2.0.10/clipboard.min.js","optiscroll":"https://npm.elemecdn.com/optiscroll@3.2.1/dist/optiscroll.min.js","optiscrollcss":"https://npm.elemecdn.com/optiscroll@3.2.1/dist/optiscroll.css","snapsvg":"https://npm.elemecdn.com/snapsvg-cjs@0.0.6/dist/snap.svg.js","toprogress":"https://npm.elemecdn.com/toprogress@0.1.3/ToProgress.min.js","jqueryrotate":"https://cdn.jsdelivr.net/gh/wilq32-pwitkowski/jqueryrotate@master/jQueryRotateCompressed.js","aplayer":"https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/aplayer/1.10.1/APlayer.min.js","aplayercss":"https://lf9-cdn-tos.bytecdntp.com/cdn/expire-1-y/aplayer/1.10.1/APlayer.min.css","meting":"https://cdn.staticfile.org/meting/2.0.1/Meting.min.js","roughNotation":"https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-y/rough-notation/0.5.1/rough-notation.iife.min.js"}}');let e={url:"",user:"",pageType:"",articleId:""};e.url=window.location.href;let n=e.url.split("/");e.homeUrl=[n[0],n[1],n[2]].join("/");let o=$("#topics").length;e.user=o?$("title").text().split("- ")[1]:$("title").text(),e.pageType=o?$("#bookListFlg").length?"books":$("#linkListFlg").length?"links":"article":"home",o&&(e.articleId=n[n.length-2]);var i=e,a=d(5299);function r(t,e){const n=t.split("."),o=e.split(".");let i=0;for(;i<n.length||i<o.length;){let t=0,e=0;if(i<n.length&&(t=parseInt(n[i])),i<o.length&&(e=parseInt(o[i])),t>e)return 1;if(t<e)return-1;i++}return 0}var c={getTodayStart:function(){return moment().startOf("day").format("x")},getTodayEnd:function(){return moment().endOf("day").format("x")},getYesterdayStart:function(){return moment().subtract(1,"days").startOf("day").format("x")},getYesterdayEnd:function(){return moment().subtract(1,"days").endOf("day").format("x")},getTodayDate:function(){return moment().format("MM-DD")},articleInfo:function(t,e){let n=1===e?"icon-marketing_fill":"icon-label-fill",o=1===e?"article-tag-class-color":"article-tag-color";$.each(t,(e=>{let i=$(t[e]);i.prepend('<span class="iconfont '+n+'"></span>'),$("#articleInfo").append('<a href="'+i.attr("href")+'" target="_blank"><span class="article-info-tag '+o+'">'+i.text()+"</span></a>")}))},tempReplacement:function(t,e,n){let o=new RegExp("##"+e+"##","g");return t.replace(o,n)},batchTempReplacement:function(t,e){let n=t;return $.each(e,(function(t){let o=e[t],i=new RegExp("##"+o[0]+"##","g");n=n.replace(i,o[1])})),n},dynamicLoadingCss:function(t){$("head").append("<link>"),$("head").children(":last").attr({rel:"stylesheet",type:"text/css",href:t})},dynamicLoadingJs:function(t){return new Promise(((e,n)=>{$.ajax({type:"GET",dataType:"script",cache:!0,url:t,success:function(t){e(t)},error:function(t){n(t)}})}))},htmlFiltrationScript:function(t){let e=new RegExp("<script.*<\/script>","ig");return t.replace(e,"")},clearIntervalTimeId:function(t){null!=t&&window.clearInterval(t)},actScroll:function(t,e){$("html,body").stop().animate({scrollTop:t},e)},getScrollPercent:function(){return($(window).scrollTop()/($(document).height()-$(window).height())*100).toFixed(0)},randomNum:function(t,e){switch(arguments.length){case 1:return parseInt(Math.random()*t+1);case 2:return parseInt(Math.random()*(e-t+1)+t);default:return 0}},setDomHomePosition:function(){$("#home").css("margin-top",$(".main-header").outerHeight()+"px")},getRunDate:function(t){let e=t.split("-"),n=new Date;n.setUTCFullYear(e[0],e[1]-1,e[2]),n.setUTCHours(0,0,0,0);let o=n,i=((new Date).getTime()-o.getTime())/864e5,a=Math.floor(i),r=-24*(a-i),c=Math.floor(r),s=-60*(c-r),l=Math.floor(-60*(c-r));return{daysold:a,hrsold:c,minsold:l,seconds:Math.floor(-60*(l-s)).toString()}},setCookie:function(t,e,n){let o=new Date;o.setTime(o.getTime()+1e3*n),document.cookie=t+"="+escape(e)+"; expires="+o.toGMTString()+"; path=/"},getCookie:function(t){let e,n=new RegExp("(^| )"+t+"=([^;]*)(;|$)");return e=document.cookie.match(n),e?unescape(e[2]):null},randomString:function(t){t=t||32;let e="ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678",n=e.length,o="";for(let i=0;i<t;i++)o+=e.charAt(Math.floor(Math.random()*n));return o},minToTime:function(t){let e=parseInt(t),n=parseInt(60*(t-e));return n=1===(""+n).length?"0"+n:n,`${e}:${n}`},compareVersion:r,getVersion:function(){return(0,a.W)("https://api.github.com/repos/wangyang0210/easybe/releases/latest").then((t=>{localStorage.setItem("version",t.tag_name),localStorage.setItem("repoUrl",t.html_url)})),r(localStorage.getItem("version"),$.__config.default.version)}},s=d(434);$(document).ready((function(){$.__config=$.extend(!0,t,window?.cnblogsConfig||{}),$.__status=i,$.__tools=c,$.__timeIds={},$.__event={},$.__config.info.name||=$.__status.user,$.__tools.dynamicLoadingJs($.__config.default.moment).then((t=>{d(2865)(`./${$.__status.pageType}`).then((t=>{const e=t.default;d.e(910).then(d.bind(d,6361)).then((t=>{(0,t.default)(),e(),d.e(289).then(d.bind(d,4284)).then((t=>{(0,t.default)(),$.__tools.setDomHomePosition(),s.Z.handle.scroll(),s.Z.handle.resize()}))}))}))})).catch((t=>console.error("moment.js",t)))}))}()}();