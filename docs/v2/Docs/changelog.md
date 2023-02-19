# todo
- 头像优化展示
- 优化评论问题
- 新增文章置顶
- 新增配置浏览器信息,IP地址等[https://github.com/hakula139/UserAgent-for-Typecho | https://doge.uk/coding/useragent-modify.html]
- 文章加密输入密码优化
- 插件部署的文档
- owo表情相关文档 | 表情速查https://emotion.xiaokang.me/#/emotion/bilibili2233
- 我的标签页面（更多）| https://www.cnblogs.com/wangyang0210/tag/
- 随笔分类页面（更多）
- 随笔档案页面（更多）

# 2023.2.9 - v2.1.8
- 新增头像缓存插件,来自[GravatarCache](https://github.com/asdi998/GravatarCache) [todo]
- 新增评论表情,来自[DIYgod/OwO](https://github.com/DIYgod/OwO) [todo]
- 新增评论回复邮件提醒 | https://github.com/uniartisan/CommentToMail [todo]
- 新增评论打字特效,来自[activate-power-mode](https://github.com/disjukr/activate-power-mode)
- 新增文章点赞特效
- 新增文章踩功能
- 新增推荐排行列表
- 新增后台配置,用于备份主题配置和恢复主题配置
- 新增后台配置,展示文章评论排行、文章阅读排行、文章推荐排行的数量
- 新增文章底部增加声援博主信息
- 新增文档增加伪静态配置教程
- 修复博客状态显示功能
- 优化后台配置增加jquery CDN 配置
- 优化直接私信功能
- 优化增加默认全局配置
- 优化点赞/推荐功能
- 优化默认展示网站名称
- 优化自动配置侧边栏底部导航
- 优化评论关闭样式
- 删除微博分享，收藏本文按钮
- 删除博客园相关的关注模块

# 2023.2.7 - v2.1.7
- 新增配置`roughNotation`，配置手绘风格的图画
- 新增控制台版本更新提示
- 新增配置`articleContent.iconfontArr`,配置iconfont图标
- 新增配置`default`，外部静态资源使用字节跳动和elementCDN引入
- 新增配置`footer.aplayer`来设置音乐播放器
- 新增配置`sidebar.blogStatus`,设置是否显示博客状态
- 修复h1-h6 出现特殊字符是不是渲染不了
- 修复默认输出的github仓库信息
- 修复particles图片引用错误
- 修复导航选中样式丢失问题
- 优化友联页面限制最多支持12个汉+字,超出会自动省略
- 优化simple-memory.css压缩输出
- 优化重写文档内容,增加相应图片示例
- 优化代码和打包流程

# 2022.10.24 - v2.1.6
- 新增备案信息配置项
- 优化iconfont使用CDN资源
- 优化谷歌字体适用CDN资源
- 优化使用fetch代替request
- 优化编译统一使用webpack

# 2022.10.05 - v2.1.5
- 优化bubble优先级调整
- 优化season优先级调整
- 优化mo.js优先级调整
- 优化文章内容Id适配
- 优化mo.js移动端样式适配

# 2022.09.12 - v2.1.4
* 代码优化
* npm依赖优化升级
* 谷歌字体本地化
* gulp开启gzip压缩
* 今日诗词API调整
* 资源文件按需加载
* 背景特效配置聚合 | 新增特效
* 新增`season`背景特效
* 背景特效`backgroundMouse`改为`particles`
* 鼠标特效配置聚合 | 新增特效
* 引入`mo.js`,自定义鼠标点击特效
* 新增`bubble`鼠标移动效果
* 新增配置`articleContent.iconfont`文章标题前ICON
* 修复移动端展示问题
* 修复日夜模式切换问题
* 脚注显示优化
* 文档更新


# 2022.09.01 - v2.1.3
* 首次评论不展示
* 修复六级标题没生成目录
* 新增配置`banner.text`控制banner文本是否可选
* 修复文章imgbox会包含底部头像
* 优化表格展示
* 滚动条优化

# 2022.09.01 - v2.1.2
* 依赖升级
* 自动发布npm
* CDN可使用[unpkg](https://www.unpkg.com/)

# 2022.08.30 - v2.1.1
* webpack配置调整
* 代码高亮展示优化
* 隐藏滚动条
* 打赏关注显示优化

# 2022.08.24 - v2.1.0
* 修复配置参数position
* 修复侧边栏无法搜索
* 文章阅读排行
* 文章评论排行
* 文章微博分享
* 文章点赞推荐
* 文章打赏功能
* 新增配置`articleSuffix.copyText`,复制时增加版权信息
* 评论优化
* 文档更新

# 2022.08.23 - v2.0.0
* v2版本完成
* 文档更新
