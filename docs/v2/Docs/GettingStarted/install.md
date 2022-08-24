# 安装配置

!> 本文为v2版本的安装配置教程，请核对使用版本！


## 获取需要使用的版本

进入主题仓库：[GitHub](https://github.com/wangyang0210/EasyBe)

切换版本：

![install_05](../../Images/install_06.png)

## 博客设置

### 设置博客皮肤

博客皮肤：```SimpleMemory```

![install_02](../../Images/install_02.png)

### 设置代码高亮

!> 主题已集成代码高亮,建议直接禁用

![install_02](../../Images/install_08.png)

### 设置页面定制CSS代码

CSS代码位置：```/dist/simpleMemory.css``` 拷贝此文件代码至页面定制CSS代码文本框处。

![install_03](../../Images/install_03.png)

### 禁用模板默认CSS

选中页面定制CSS代码文本框下面的禁用模板默认CSS。

### 设置博客侧边栏公告

在侧边栏HTML代码中设置以下代码：

```html
<script type="text/javascript">
    window.cnblogsConfig = {
      info: {
        name: 'userName', // 用户名
        startDate: '2021-01-01', // 入园时间，年-月-日。入园时间查看方法：鼠标停留园龄时间上，会显示入园时间
        avatar: 'http://xxxx.png', // 用户头像
      },
    }
</script>
<script src="https://cdn.jsdelivr.net/gh/wangyang0210/Cnblogs-Theme@v2.1.6/dist/simpleMemory.js" defer></script>
```

详细配置参考相关[文档](https://wangyang0210.github.io/EasyBe/v2/#/Docs/Customization/config) 。


---

> CDN jsdelivr 的 URL 详细规则参考[官方网站](https://www.jsdelivr.com/)。
