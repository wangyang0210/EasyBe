# 版本切换

!> 注意：任何版本的切换，最好都更新一下对应版本的 css 样式，不然可能会发生兼容性问题！

## v2.\*.\* 之间切换版本

### 使用 jsdelivr 加载资源

只需要更改 simple-memory.js 文件引入的版本。

例如：

```html
<script
    rel="preload"
    src="https://cdn.jsdelivr.net/gh/wangyang0210/EasyBe@v2.1.6/easybe/simple-memory.js"
    defer></script>
```

变为

```html
<script
    rel="preload"
    src="https://cdn.jsdelivr.net/gh/wangyang0210/EasyBe@v2.1.7/easybe/simple-memory.js"
    defer></script>
```

版本变更： `v2.1.6` >>> `v2.1.7`

### 使用自己的云资源

如果你的资源是托管到自己的云资源上或 CDN 加速节点节点上。

#### 随机参方式更新加载资源

> 减少浏览器缓存造成的不生效或生效慢问题 | 推荐这种方式来更新加载资源。

例如：

```html
<script
    rel="preload"
    src="https://www.wangyangyang.vip/dist/simple-memory.js"
    defer></script>
```

变为

```html
<script
    rel="preload"
    src="https://www.wangyangyang.vip/dist/simple-memory.js?_12322"
    defer></script>
```
