# 伪静态

!> 伪静态配置主要分为两部分,请务必按着以下方法进行配置

## nginx

> 将以下配置复制到nginx的`server`配置中;

```
location / {
    if (!-e $request_filename) {
      rewrite ^(.*)$ /index.php$1 last;
    }   
  }  
```

## 开启伪静态

> 在后台配置中启用`地址重写`功能

![开启伪静态](https://cdn.jsdelivr.net/gh/wangyang0210/pic/imgs/easybe/rewrite.png)

## 伪静态效果

原地址: https://dev.wangyangyang.vip/index.php/archives/30/
伪静态地址: https://dev.wangyangyang.vip/archives/30/
