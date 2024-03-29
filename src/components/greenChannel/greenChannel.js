/**
 * UPDATES AND DOCS AT: https://github.com/wangyang0210
 * https://www.cnblogs.com/wangyang0210/
 * @author: WangYang, wangyang.0210@foxmail.com
 * @Date 2022-08-25 15:22
 * ----------------------------------------------
 * @describe: 文章底部信息按钮处理
 */
import '../../style/customBtn.css';

export default function main() {

    /**
     * 好文要顶
     */
    (() => {
        $.__timeIds.greenChannelDiggTId = window.setInterval(() => {
            let greenChannelDigg = $('#green_channel_digg');
            if (greenChannelDigg.length) {
                greenChannelDigg.after('<button class="custom-btn btn-11" onclick="' + greenChannelDigg.attr('onclick') + '">推荐该文' +
                    '<div class="dot"></div></button>');
                $.__tools.clearIntervalTimeId( $.__timeIds.greenChannelDiggTId);
            }
        }, 1000);
    })();

    /**
     * 关注我
     */
    (() => {
        $.__timeIds.greenChannelFollowTId = window.setInterval(() => {
            let greenChannelFollow = $('#green_channel_follow');
            if (greenChannelFollow.length) {
                greenChannelFollow.after('<button class="custom-btn btn-12" onclick="' + greenChannelFollow.attr('onclick') + '"><span>关注博主</span><span>关注博主</span></button>');
                $.__tools.clearIntervalTimeId( $.__timeIds.greenChannelFollowTId);
            }
        }, 1000);
    })();

    /**
     * 打赏博主
     */
    (() => {
        $.__timeIds.greenChannelWechatTId = window.setInterval(() => {
            let greenChannelWechat = $('#green_channel_wechat');
            if (greenChannelWechat.length) {
                greenChannelWechat.after('<button class="custom-btn btn-13" onclick="' + greenChannelWechat.attr('onclick') + '">打赏博主</button>');
                $.__tools.clearIntervalTimeId( $.__timeIds.greenChannelWechatTId);
            }
        }, 1000);
    })();
}
