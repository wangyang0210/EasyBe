/**
 * UPDATES AND DOCS AT: https://github.com/wangyang0210
 * https://www.cnblogs.com/wangyang0210/
 * @author: WangYang, i@oyo.cool
 * @Date 2022-08-25 15:24
 * ----------------------------------------------
 * @describe: 右下角菜单处理
 */
import rtMenuTemp from '../../template/rtMenu.html';

export default function main() {
    $('#blog-news').prepend(rtMenuTemp);
    const rightMenu = $('#rightMenu');

    /**
     * 公共事件
     */
    (() => {
        rightMenu.find('i').on({
            mouseover: function () {
                typeof $(this).attr('banmv') === 'undefined' &&
                    $(this).rotate({
                        animateTo: -60,
                        duration: 250,
                        callback: function () {
                            $(this).rotate({
                                animateTo: 60,
                                duration: 250,
                                callback: function () {
                                    $(this).rotate({
                                        animateTo: -30,
                                        duration: 150,
                                        callback: function () {
                                            $(this).rotate({
                                                animateTo: 30,
                                                duration: 150,
                                                callback: function () {
                                                    $(this).rotate({ animateTo: 0, duration: 100 });
                                                },
                                            });
                                        },
                                    });
                                },
                            });
                        },
                    });
            },
        });

        rightMenu.find('.rightMenuItem').on({
            mouseover: function () {
                $(this).find('.rightMenuSpan').stop().fadeIn(300);
            },
            mouseout: function () {
                $(this).find('.rightMenuSpan').stop().fadeOut(300);
            },
        });
    })();

    /**
     * 上下滚动
     */
    (() => {
        // 点击事件
        $('#toUpDown').click(function () {
            let ac = $(this).attr('data');
            if (ac === 'down') {
                let downScroll;
                if ($.__config.rtMenu.downScrollDom && $($.__config.rtMenu.downScrollDom).length > 0) {
                    downScroll = $($.__config.rtMenu.downScrollDom).offset().top + 10;
                } else {
                    let docHeight = $(document).height();
                    let windowHeight = $(window).height();
                    downScroll = docHeight - windowHeight;
                }

                $.__tools.actScroll(downScroll, 900);
            } else {
                $.__tools.actScroll(0, 900);
            }
        });
        // 滚动事件
        $.__event.scroll.handle.push(() => {
            let toUpDown = $('#toUpDown'),
                toUpDownI = $('#toUpDownI'),
                toUpDownSpan = $('.toUpDownSpan');

            $.__event.scroll.docScroll = $(document).scrollTop(); // 当前滚动位置
            $.__event.scroll.homeScroll = $('#home').offset().top - 40; // 主体滚动

            if ($.__event.scroll.homeScroll <= $.__event.scroll.docScroll) {
                toUpDownI.rotate({ animateTo: 0 });
                toUpDown.attr('data', 'up');
                toUpDownSpan.text('返回顶部');
            } else {
                toUpDownI.rotate({ animateTo: -180 });
                toUpDown.attr('data', 'down');
                toUpDownSpan.text('跳至底部');
            }
        });
    })();

    /**
     * 设置
     */
    (() => {
        // 旋转
        let angle = 0;
        setInterval(function () {
            angle += 7;
            $('#rightMenuSite i').rotate(angle);
        }, 30);

        // 点击事件
        $('#rightMenuSite').click(function () {
            let flg = $(this).attr('clickflg');
            if (flg === 'true') {
                $('#rightMenuSite .rightMenuSpan').text('点击关闭');
                $(this).attr('clickflg', 'false');
            } else {
                $('#rightMenuSite .rightMenuSpan').text('点击开启');
                $(this).attr('clickflg', 'true');
            }
            $('#rightMenu .hideRightMenu').slideToggle(350);
        });
    })();

    /**
     * 二维码
     */
    (() => {
        if ($.__config.rtMenu.qrCode) $('#rightGzh').show().find('.ds-gzh img').attr('src', $.__config.rtMenu.qrCode);
    })();

    /**
     * 打赏
     */
    (() => {
        if ($.__config.rtMenu.reward.alipay || $.__config.rtMenu.reward.wechatpay) {
            $('#rightDashang').show();
            $.__config.rtMenu.reward.alipay &&
                $('#rightDashang .ds-alipay').show().find('img').attr('src', $.__config.rtMenu.reward.alipay);
            $.__config.rtMenu.reward.wechatpay &&
                $('#rightDashang .ds-wecat').show().find('img').attr('src', $.__config.rtMenu.reward.wechatpay);
        }
    })();

    /**
     * 顶踩
     */
    (() => {
        // 顶
        $.__timeIds.diggitTId = window.setInterval(() => {
            let diggit = $('.diggit');
            if (diggit.length > 0) {
                diggit.prepend('<i class="iconfont icon-dianzan"></i>');

                let rightDiggit = $('#rightDiggit');
                let rightMenuSpan = rightDiggit.find('.rightMenuSpan');
                $.__config.articleContent.diggit &&
                    $.__tools
                        .dynamicLoadingJs($.__config.default.mojs)
                        .then(() => {
                            const RADIUS = 28;
                            const circle = new mojs.Shape({
                                left: 0,
                                top: 0,
                                stroke: '#FF9C00',
                                strokeWidth: { [2 * RADIUS]: 0 },
                                fill: 'none',
                                scale: { 0: 1, easing: 'quad.out' },
                                radius: RADIUS,
                                duration: 450,
                            });

                            const burst = new mojs.Burst({
                                left: 0,
                                top: 0,
                                radius: { 0: 50 },
                                easing: mojs.easing.bezier(0.1, 1, 0.3, 1),
                                delay: 300,
                                children: {
                                    duration: 750,
                                    radius: { 0: 'rand(5, 25)' },
                                    shape: ['circle', 'rect', 'polygon'],
                                    fill: [
                                        '#1abc9c',
                                        '#2ecc71',
                                        '#00cec9',
                                        '#3498db',
                                        '#9b59b6',
                                        '#fdcb6e',
                                        '#f1c40f',
                                        '#e67e22',
                                        '#e74c3c',
                                        '#e84393',
                                    ],
                                    degreeShift: 'rand(-90, 90)',
                                    delay: 'stagger(0, 40)',
                                },
                                opacity: 0.6,
                                count: 10,
                            });

                            burst.el.style.zIndex = 999999;
                            const timeline = new mojs.Timeline({ speed: 1.5 });

                            timeline.add(burst, circle);

                            $(document).on('click touchend', '.diggit, #rightDiggit', function (e) {
                                const coords = { x: e.pageX, y: e.pageY };
                                burst.tune(coords);
                                circle.tune(coords);
                                timeline.replay();
                            });
                        })
                        .catch((e) => console.error('rtMenu-mo.js: ', e));

                rightDiggit.attr('onclick', diggit.attr('onclick'));
                rightMenuSpan.text($('#digg_count').text());

                rightDiggit.show().click(function () {
                    clickHdl($(this), rightMenuSpan, $('#digg_count').text());
                });

                $.__tools.clearIntervalTimeId($.__timeIds.diggitTId);
            }
        }, 1000);

        // 踩
        $.__timeIds.buryitTId = window.setInterval(() => {
            let buryit = $('.buryit');
            if (buryit.length > 0) {
                buryit.prepend('<i class="iconfont icon-buzan"></i>');

                let rightBuryit = $('#rightBuryit');
                let rightMenuSpan = rightBuryit.find('.rightMenuSpan');

                rightBuryit.attr('onclick', buryit.attr('onclick'));
                rightMenuSpan.text($('#bury_count').text());

                rightBuryit.show().click(function () {
                    clickHdl($(this), rightMenuSpan, $('#bury_count').text());
                });

                $.__tools.clearIntervalTimeId($.__timeIds.buryitTId);
            }
        }, 1000);

        // 处理顶踩数值更新
        function clickHdl(obj, subObj, cun) {
            if (obj.attr('clickflg') === 'false') {
                obj.attr('clickflg', 'true');
                subObj.text('提交中.');

                setTimeout(() => {
                    subObj.text('提交中..');
                }, 300);
                setTimeout(() => {
                    subObj.text('提交中...');
                }, 600);
                setTimeout(() => {
                    subObj.text('更新中.');
                }, 900);
                setTimeout(() => {
                    subObj.text('更新中..');
                }, 1200);
                setTimeout(() => {
                    subObj.text('更新中...');
                }, 1500);
                setTimeout(() => {
                    subObj.text(cun);
                    obj.attr('clickflg', 'false');
                }, 1800);
            }
        }
    })();

    /**
     * 文章目录
     */
    (() => {
        if ($.__status.pageType !== 'home') {
            let rtaDirectory = $('#rtaDirectory');
            rtaDirectory.show();

            // 点击事件
            rtaDirectory.click(function () {
                let articleDirectory = $('#articleDirectory');
                if (articleDirectory.length) {
                    articleDirectory.is(':hidden') ? articleDirectory.fadeIn(300) : articleDirectory.fadeOut(300);
                }
            });
        }
    })();

    /**
     * 主页
     */
    (() => {
        if ($.__status.pageType !== 'home') {
            let rightMenuHome = $('#rightMenuHome');
            rightMenuHome.show();

            // 点击事件
            rightMenuHome.click(function () {
                window.location.href = $.__status.homeUrl;
            });
        }
    })();

    /**
     * 更新
     */
    (() => {
        if (window.isBlogOwner && window.isLogined && $.__tools.getVersion()) {
            // https://i.cnblogs.com/api/settings PUT
            // https://i.cnblogs.com/settings GET
            $('#update').show();
            $('#update').click(function () {
                window.open(localStorage.getItem('repoUrl'));
            });
            console.log(
                '\n  🎉%c新版本已经发布了,快点击下方链接查看吧~ \n',
                'color: #fefefe;text-shadow: 0 0 0.5em #0ae642, 0 0 0.2em #5c5c5c;'
            );
            console.log(
                '\n' + ' %c ' + localStorage.getItem('version') + ' %c ' + localStorage.getItem('repoUrl') + ' ' + '\n',
                'color: #fadfa3; background: #030307; padding:5px 0;',
                'background: #fadfa3; color:#000;padding:5px 0;'
            );
        }
    })();
}
