/**
 * UPDATES AND DOCS AT: https://github.com/wangyang0210
 * https://www.cnblogs.com/wangyang0210/
 * @author: WangYang, wangyang.0210@foxmail.com
 * @Date 2022-08-25 15:20
 * ----------------------------------------------
 * @describe: 评论处理
 */

export default function main() {
    // 评论打字特效
    if ($.__config.articleContent.commentTyping.enable) {
        const POWERMODE = require('./commentTyping/commentTyping')
        POWERMODE.colorful = $.__config.articleContent.commentTyping.options.colorful
        POWERMODE.shake = $.__config.articleContent.commentTyping.options.shake
        document.body.addEventListener('input', POWERMODE)
    }

    // 表情
    if ($.__config.articleContent.owo.enable) {
        import(/* webpackChunkName: "owo-css" */ '../../style/owo.scss')
        import(/* webpackChunkName: "owo-js" */ './owo/owo')
    }
    let setComment = () => {
        let feedbackItem = $('.feedbackItem')
        if (feedbackItem.length > 0) {
            $(feedbackItem[0]).css('padding-top', '0')
            $(feedbackItem[feedbackItem.length - 1]).css('padding-bottom', '0')
            $.__config.animate.avatar.enable && $('.feedbackAvatar').addClass('img-rounded')
        }
    }

    setComment()

    $(document).ajaxSuccess(function (event, xhr, settings) {
        if (settings.url.includes('archive')) setComment()
    })
}
