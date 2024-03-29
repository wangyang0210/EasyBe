# 友链

样式参考：[友联样式](https://www.wangyangyang.vip/index.php/archives/27/)

## 配置方式

### 标识页面为友链页面

首先需要创建一个文章,在文章内容众加入以下代码，来标识该页面为友链页面：

```html
<input id="linkListFlg" type="hidden" />
```

### 配置友链数据

```javascript
window.cnblogsConfig = {
  links: {
            page: [
                {
                   title: '友情链接', // 标题
                   icon: 'icon-lianjie', // iconfont
                   style: 'color: #a78bfa;', 
                   links: [
                       {
                            name: '思索', // 昵称
                            introduction: 'IT技术类博客', // 简介
                            avatar: 'https://pic.cnblogs.com/face/1334215/20180504110551.png', // 头像
                            url: 'https://cnblogs.com/wangyang0210' // 友链地址
                       },
                       {
                            name: '王洋', // 昵称
                            introduction: 'IT技术类博客', // 简介
                            avatar: 'https://pic.cnblogs.com/face/1334215/20180504110551.png', // 头像
                            url: 'https://www.wangyangyang.vip' // 友链地址
                       },
                   ]
                },
                {
                   title: '网站',
                   icon: 'icon-website',
                   style: 'color: #a78bfa;',
                   links: [
                       {
                            name: '测试', // 昵称
                            introduction: 'IT技术类博客', // 简介
                            avatar: 'https://pic.cnblogs.com/face/1334215/20180504110551.png', // 头像
                            url: 'https://cnblogs.com/wangyang0210' // 友链地址
                       },
                       {
                            name: 'helloWorld', // 昵称
                            introduction: 'IT技术类博客', // 简介
                            avatar: 'https://pic.cnblogs.com/face/1334215/20180504110551.png', // 头像
                            url: 'https://cnblogs.com/wangyang0210' // 友链地址
                       },
                   ]
                },
            ],
    },
}
```

此配置可以单独出来。例如：

```javascript

//  正常配置
window.cnblogsConfig = {
    links: {},
};

// 友链配置
window.cnblogsConfig.links.page = [
    {
        title: '友情链接',
        icon: 'icon-lianjie',
        style: 'color: #a78bfa;',
        links: [
            {
                name: '思索', // 昵称
                introduction: 'IT技术类博客', // 简介
                avatar: 'https://pic.cnblogs.com/face/1334215/20180504110551.png', // 头像
                url: 'https://cnblogs.com/wangyang0210' // 友链地址
            },
            {
                name: '王洋', // 昵称
                introduction: 'IT技术类博客', // 简介
                avatar: 'https://pic.cnblogs.com/face/1334215/20180504110551.png', // 头像
                url: 'https://www.wangyangyang.vip' // 友链地址
            },
        ]
    },
    {
        title: '网站',
        icon: 'icon-website',
        style: 'color: #a78bfa;',
        links: [
            {
                name: '测试', // 昵称
                introduction: 'IT技术类博客', // 简介
                avatar: 'https://pic.cnblogs.com/face/1334215/20180504110551.png', // 头像
                url: 'https://cnblogs.com/wangyang0210' // 友链地址
            },
            {
                name: 'helloWorld', // 昵称
                introduction: 'IT技术类博客', // 简介
                avatar: 'https://pic.cnblogs.com/face/1334215/20180504110551.png', // 头像
                url: 'https://cnblogs.com/wangyang0210' // 友链地址
            },
        ]
    },
];
```

?> 请按照此格式配置。

|**Key**|**Description**|
|:-----:|:-----:|
|**name**|昵称|
|**introduction**|简介|
|**avatar**|头像|
|**url**|友链地址|
