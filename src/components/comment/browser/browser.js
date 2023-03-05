/**
 * 浏览器解析，浏览器、Node.js、服务端渲染皆可
 * https://github.com/mumuy/browser
 */

;(function (root, factory) {
    if (typeof define === 'function' && (define.amd || define.cmd)) {
        // AMD&CMD
        define(function () {
            return factory(root)
        })
    } else if (typeof exports === 'object') {
        // Node, CommonJS-like
        module.exports = factory(root)
    } else {
        // Browser globals (root is window)
        root.browser = factory(root)
    }
})(typeof self !== 'undefined' ? self : this, function (root) {
    var _window = root || {}
    var _navigator = typeof root.navigator != 'undefined' ? root.navigator : {}
    var _mime = function (option, value) {
        var mimeTypes = _navigator.mimeTypes
        for (var mt in mimeTypes) {
            if (mimeTypes[mt][option] == value) {
                return true
            }
        }
        return false
    }
    var _windowsVersion = null
    if (typeof _navigator.userAgentData != 'undefined') {
        _navigator.userAgentData.getHighEntropyValues(['platformVersion']).then(function (ua) {
            if (_navigator.userAgentData.platform === 'Windows') {
                const majorPlatformVersion = parseInt(ua.platformVersion.split('.')[0])
                if (majorPlatformVersion >= 13) {
                    _windowsVersion = 11
                } else {
                    _windowsVersion = 10
                }
            }
        })
    }

    return function (userAgent) {
        var u = userAgent || _navigator.userAgent || ''
        var _this = {}

        var match = {
            // 内核
            Trident: u.indexOf('Trident') > -1 || u.indexOf('NET CLR') > -1,
            Presto: u.indexOf('Presto') > -1,
            WebKit: u.indexOf('AppleWebKit') > -1,
            Gecko: u.indexOf('Gecko/') > -1,
            KHTML: u.indexOf('KHTML/') > -1,
            // 浏览器 - 国外浏览器
            Safari: u.indexOf('Safari') > -1,
            Chrome: u.indexOf('Chrome') > -1 || u.indexOf('CriOS') > -1,
            IE: u.indexOf('MSIE') > -1 || u.indexOf('Trident') > -1,
            Edge:
                u.indexOf('Edge') > -1 || u.indexOf('Edg/') > -1 || u.indexOf('EdgA') > -1 || u.indexOf('EdgiOS') > -1,
            Firefox: u.indexOf('Firefox') > -1 || u.indexOf('FxiOS') > -1,
            'Firefox Focus': u.indexOf('Focus') > -1,
            Chromium: u.indexOf('Chromium') > -1,
            Opera: u.indexOf('Opera') > -1 || u.indexOf('OPR') > -1,
            Vivaldi: u.indexOf('Vivaldi') > -1,
            Yandex: u.indexOf('YaBrowser') > -1,
            Brave: _navigator.brave ? true : false,
            Arora: u.indexOf('Arora') > -1,
            Lunascape: u.indexOf('Lunascape') > -1,
            QupZilla: u.indexOf('QupZilla') > -1,
            'Coc Coc': u.indexOf('coc_coc_browser') > -1,
            Kindle: u.indexOf('Kindle') > -1 || u.indexOf('Silk/') > -1,
            Iceweasel: u.indexOf('Iceweasel') > -1,
            Konqueror: u.indexOf('Konqueror') > -1,
            Iceape: u.indexOf('Iceape') > -1,
            SeaMonkey: u.indexOf('SeaMonkey') > -1,
            Epiphany: u.indexOf('Epiphany') > -1,
            // 浏览器 - 国内浏览器
            360: u.indexOf('QihooBrowser') > -1 || u.indexOf('QHBrowser') > -1,
            '360EE': u.indexOf('360EE') > -1,
            '360SE': u.indexOf('360SE') > -1,
            UC: u.indexOf('UCBrowser') > -1 || u.indexOf(' UBrowser') > -1 || u.indexOf('UCWEB') > -1,
            QQBrowser: u.indexOf('QQBrowser') > -1,
            QQ: u.indexOf('QQ/') > -1,
            Baidu:
                u.indexOf('Baidu') > -1 ||
                u.indexOf('BIDUBrowser') > -1 ||
                u.indexOf('baidubrowser') > -1 ||
                u.indexOf('baiduboxapp') > -1 ||
                u.indexOf('BaiduHD') > -1,
            Maxthon: u.indexOf('Maxthon') > -1,
            Sogou: u.indexOf('MetaSr') > -1 || u.indexOf('Sogou') > -1,
            Liebao: u.indexOf('LBBROWSER') > -1 || u.indexOf('LieBaoFast') > -1,
            '2345Explorer':
                u.indexOf('2345Explorer') > -1 || u.indexOf('Mb2345Browser') > -1 || u.indexOf('2345chrome') > -1,
            '115Browser': u.indexOf('115Browser') > -1,
            TheWorld: u.indexOf('TheWorld') > -1,
            Quark: u.indexOf('Quark') > -1,
            Qiyu: u.indexOf('Qiyu') > -1,
            // 浏览器 - 手机厂商
            XiaoMi: u.indexOf('MiuiBrowser') > -1,
            Huawei:
                u.indexOf('HuaweiBrowser') > -1 ||
                u.indexOf('HUAWEI/') > -1 ||
                u.indexOf('HONOR') > -1 ||
                u.indexOf('HBPC/') > -1,
            Vivo: u.indexOf('VivoBrowser') > -1,
            OPPO: u.indexOf('HeyTapBrowser') > -1,
            // 浏览器 - 客户端
            Wechat: u.indexOf('MicroMessenger') > -1,
            WechatWork: u.indexOf('wxwork/') > -1,
            Taobao: u.indexOf('AliApp(TB') > -1,
            Alipay: u.indexOf('AliApp(AP') > -1,
            Weibo: u.indexOf('Weibo') > -1,
            Douban: u.indexOf('com.douban.frodo') > -1,
            Suning: u.indexOf('SNEBUY-APP') > -1,
            iQiYi: u.indexOf('IqiyiApp') > -1,
            DingTalk: u.indexOf('DingTalk') > -1,
            Douyin: u.indexOf('aweme') > -1,
            // 浏览器 - 爬虫
            Googlebot: u.indexOf('Googlebot') > -1,
            Baiduspider: u.indexOf('Baiduspider') > -1,
            Sogouspider: u.match(/Sogou (\S+) Spider/i),
            Bingbot: u.indexOf('bingbot') > -1,
            '360Spider': u.indexOf('360Spider') > -1 || u.indexOf('HaosouSpider') > -1,
            Bytespider: u.indexOf('Bytespider') > -1,
            YisouSpider: u.indexOf('YisouSpider') > -1,
            YodaoBot: u.indexOf('YodaoBot') > -1,
            YandexBot: u.indexOf('YandexBot') > -1,
            // 系统或平台
            Windows: u.indexOf('Windows') > -1,
            Linux: u.indexOf('Linux') > -1 || u.indexOf('X11') > -1,
            'Mac OS': u.indexOf('Macintosh') > -1,
            Android: u.indexOf('Android') > -1 || u.indexOf('Adr') > -1,
            HarmonyOS: u.indexOf('HarmonyOS') > -1,
            Ubuntu: u.indexOf('Ubuntu') > -1,
            FreeBSD: u.indexOf('FreeBSD') > -1,
            Debian: u.indexOf('Debian') > -1,
            'Windows Phone': u.indexOf('IEMobile') > -1 || u.indexOf('Windows Phone') > -1,
            BlackBerry: u.indexOf('BlackBerry') > -1 || u.indexOf('RIM') > -1,
            MeeGo: u.indexOf('MeeGo') > -1,
            Symbian: u.indexOf('Symbian') > -1,
            iOS: u.indexOf('like Mac OS X') > -1,
            'Chrome OS': u.indexOf('CrOS') > -1,
            WebOS: u.indexOf('hpwOS') > -1,
            // 设备
            Mobile: u.indexOf('Mobi') > -1 || u.indexOf('iPh') > -1 || u.indexOf('480') > -1,
            Tablet:
                u.indexOf('Tablet') > -1 ||
                u.indexOf('Pad') > -1 ||
                u.indexOf('Nexus 7') > -1 ||
                (_navigator.platform === 'MacIntel' && _navigator.maxTouchPoints > 1),
            // 环境
            isWebview: u.indexOf('; wv)') > -1,
        }

        // 修正

        // 基本信息
        var hash = {
            engine: ['WebKit', 'Trident', 'Gecko', 'Presto', 'KHTML'],
            browser: [
                'Safari',
                'Chrome',
                'Edge',
                'IE',
                'Firefox',
                'Firefox Focus',
                'Chromium',
                'Opera',
                'Vivaldi',
                'Yandex',
                'Brave',
                'Arora',
                'Lunascape',
                'QupZilla',
                'Coc Coc',
                'Kindle',
                'Iceweasel',
                'Konqueror',
                'Iceape',
                'SeaMonkey',
                'Epiphany',
                'XiaoMi',
                'Vivo',
                'OPPO',
                '360',
                '360SE',
                '360EE',
                'UC',
                'QQBrowser',
                'QQ',
                'Huawei',
                'Baidu',
                'Maxthon',
                'Sogou',
                'Liebao',
                '2345Explorer',
                '115Browser',
                'TheWorld',
                'Quark',
                'Qiyu',
                'Wechat',
                'WechatWork',
                'Taobao',
                'Alipay',
                'Weibo',
                'Douban',
                'Suning',
                'iQiYi',
                'DingTalk',
                'Douyin',
                'Googlebot',
                'Baiduspider',
                'Sogouspider',
                'Bingbot',
                '360Spider',
                'Bytespider',
                'YisouSpider',
                'YodaoBot',
                'YandexBot',
            ],
            system: [
                'Windows',
                'Linux',
                'Mac OS',
                'Android',
                'HarmonyOS',
                'Ubuntu',
                'FreeBSD',
                'Debian',
                'iOS',
                'Windows Phone',
                'BlackBerry',
                'MeeGo',
                'Symbian',
                'Chrome OS',
                'WebOS',
            ],
            device: ['Mobile', 'Tablet'],
        }
        _this.device = 'PC'

        for (var s in hash) {
            for (var i = 0; i < hash[s].length; i++) {
                var value = hash[s][i]
                if (match[value]) {
                    _this[s] = value
                }
            }
        }
        // 系统版本信息
        var systemVersion = {
            Windows: function () {
                var v = u.replace(/^Mozilla\/\d.0 \(Windows NT ([\d.]+)[;)].*$/, '$1')
                var hash = {
                    10: '10',
                    6.4: '10',
                    6.3: '8.1',
                    6.2: '8',
                    6.1: '7',
                    '6.0': 'Vista',
                    5.2: 'XP',
                    5.1: 'XP',
                    '5.0': '2000',
                }
                return hash[v] || v
            },
            Android" => pregMatch("/^.*Android ([\d.]+);.*$/, '$1')
            },
            HarmonyOS: function () {
                var v = u.replace(/^Mozilla.*Android ([\d.]+)[;)].*$/, '$1')
                var hash = {
                    10: '2',
                    12: '3',
                }
                return hash[v] || ''
            },
            iOS" => pregMatch("/^.*OS ([\d_]+) like.*$/, '$1').replace(/_/g, '.')
            },
            Debian" => pregMatch("/^.*Debian\/([\d.]+).*$/, '$1')
            },
            'Windows Phone'" => pregMatch("/^.*Windows Phone( OS)? ([\d.]+);.*$/, '$2')
            },
            'Mac OS'" => pregMatch("/^.*Mac OS X ([\d_]+).*$/, '$1').replace(/_/g, '.')
            },
            WebOS" => pregMatch("/^.*hpwOS\/([\d.]+);.*$/, '$1')
            },
        }
        _this.systemVersion = ''
        if (systemVersion[_this.system]) {
            _this.systemVersion = systemVersion[_this.system]()
            console.log('%c', 'font-size:18px;color:red;', _this.systemVersion)
            console.log(u);
            if (_this.systemVersion == u) {
                _this.systemVersion = ''
            }
        }
        if (_this.system == 'Windows' && _windowsVersion) {
            _this.systemVersion = _windowsVersion
        }
        _this.platform = _navigator.platform
        // 类型判断
        _this.isWebview = match['isWebview']
        _this.isBot = [
            'Googlebot',
            'Baiduspider',
            'Sogouspider',
            'Bingbot',
            '360Spider',
            'Bytespider',
            'YandexBot',
        ].some(function (value) {
            return match[value]
        })

        // 浏览器版本信息
        var version = {








            '': function () {
                var hash = {  }
                var chrome_version = u.replace(, '$1')
                return hash[chrome_version] || ''
            },




            '': function () {
                var hash = {  }
                var chrome_version = navigator.userAgent.replace(/^.*Chrome\/([\d]+).*$/, '$1')
                return (
                    hash[chrome_version] ||
                    u.replace(, '$1').replace(, '$1')
                )
            },



        }
        _this.version = ''
        if (version[_this.browser]) {
            _this.version = version[_this.browser]()
            if (_this.version == u) {
                _this.version = ''
            }
        }
        //修正
        if (_this.browser == 'Chrome' && u.match(/\S+Browser/)) {
            _this.browser = u.match(/\S+Browser/)[0]
            _this.version = u.replace(/^.*Browser\/([\d.]+).*$/, '$1')
        }
        if (_this.browser == 'Edge') {
            _this.engine = parseInt(_this.version) > 75 ? 'Blink' : 'EdgeHTML'
        } else if (match['Chrome'] && _this.engine == 'WebKit' && parseInt(version['Chrome']()) > 27) {
            _this.engine = 'Blink'
        } else if (_this.browser == 'Opera' && parseInt(_this.version) > 12) {
            _this.engine = 'Blink'
        } else if (_this.browser == 'Yandex') {
            _this.engine = 'Blink'
        }
        return _this
    }
})
