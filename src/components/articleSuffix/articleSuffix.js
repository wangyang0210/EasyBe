/**
 * UPDATES AND DOCS AT: https://github.com/wangyang0210
 * https://www.cnblogs.com/wangyang0210/
 * @author: WangYang, wangyang.0210@foxmail.com
 * @Date 2022-08-25 15:31
 * ----------------------------------------------
 * @describe: 文章后缀处理
 */
import "../../style/articleSuffix.css";
import suffixTemp from '../../template/articleSuffix.html';
import defaultAvatarImg from './../../images/webp/default_avatar.webp';

export default function main(_) {

    // 图片
    let imgUrl  = _.__config.articleSuffix.imgUrl ? _.__config.articleSuffix.imgUrl :
        (_.__config.info.avatar ? _.__config.info.avatar : defaultAvatarImg);

    // 本文作者 & 本文链接
    let articleAuthor = $('#articleAuthor');
    let articleSource = $('#articleSource');
    let author  = articleAuthor.length ? articleAuthor.val() : _.__config.info.name,
        source  = articleSource.length ? articleSource.val() : _.__status.url,
        homeUrl = articleSource.length ? articleSource.val() : _.__status.homeUrl,
        origin  = articleAuthor.length || articleSource.length ? '原' : '本';

    // 关于博主
    let aboutHtml = _.__config.articleSuffix.aboutHtml ? _.__config.articleSuffix.aboutHtml : '评论和私信会在第一时间回复。或者直接通过侧边栏联系我。';

    // 版权声明
    let copyrightHtml = _.__config.articleSuffix.copyrightHtml ? _.__config.articleSuffix.copyrightHtml :
        '本博客所有文章除特别声明外，均采用 <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/" alt="BY-NC-SA" title="BY-NC-SA" target="_blank">BY-NC-SA</a> 许可协议。转载请注明出处！';

    let re = [
        ['origin', origin],
        ['imgUrl', imgUrl],
        ['homeUrl', homeUrl],
        ['author', author],
        ['source', source],
        ['aboutHtml', aboutHtml],
        ['copyrightHtml', copyrightHtml],
    ];
    let suffixHtml = _.__tools.batchTempReplacement(suffixTemp, re);

    $("#cnblogs_post_body").append(suffixHtml);
}
