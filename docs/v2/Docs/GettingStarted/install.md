# 安装配置

!> 本文为 v2 版本的安装配置教程，请核对使用版本！<br /> 博客请务必开启伪静态,具体可参考[配置文件](https://wangyang0210.github.io/EasyBe/v2/#/Docs/Customization/rewrite)

## 获取需要使用的版本

进入主题仓库：[GitHub](https://github.com/wangyang0210/EasyBe)

> 选择最新版本将`easybe`目录上传到`typecho`的主题目录下,然后进入到后台进行主题的配置;

![statistical_01](https://cdn.jsdelivr.net/gh/wangyang0210/pic/imgs/install_01.gif)

## 博客设置

> MySQL 需要 DDL 权限，请注意给予对应的权限；

### JQuery CDN

```
//lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/jquery/3.6.0/jquery.min.js
```

### EasyBe JS CDN

!> 国内推荐使用自身站点资源或者国内的 npm 地址

```
//<域名>/usr/themes/easybe/simple-memory.js
```

### 全局配置

```html
<script type="text/javascript">
  window.cnblogsConfig = {
    info: {
      name: "userName", // 用户名
      startDate: "2021-01-01", // 站点建立时间
      avatar: "http://xxxx.png", // 用户头像
    },
  };
</script>
```

详细配置参考相关[文档](https://wangyang0210.github.io/EasyBe/v2/#/Docs/Customization/config) 。

---

> CDN`jsdelivr` 的 URL, 详细规则参考[官方网站](https://www.jsdelivr.com/) <br />

!> 版本 >= 2.1.2 支持 npm 包 CDN 加速

> CDN`unpkg`的 URL, 详细规则参考[官方网站](https://www.unpkg.com/)
