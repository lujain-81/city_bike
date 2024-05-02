<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Booking &#8211; CarLane</title>
    <meta name='robots' content='noindex, nofollow'/>
    <link rel="alternate" type="application/rss+xml" title="CarLane &raquo; Feed" href="{{url('feed/')}}"/>
    <link rel="alternate" type="application/rss+xml" title="CarLane &raquo; Comments Feed"
          href="{{url('comments/feed/')}}"/>
    <link rel="alternate" type="application/rss+xml" title="CarLane &raquo; Booking Comments Feed"
          href="{{url('template-kit/booking/feed/')}}"/>
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/www.carlane.hocud.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"}
        };
        /*! This file is auto-generated */
        !function (i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {supportTests: e, timestamp: (new Date).valueOf()};
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {
                }
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function (e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case"flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case"emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {willReadFrequently: !0}),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function (e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }

            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function (e) {
                i.addEventListener("DOMContentLoaded", e, {once: !0})
            }), new Promise(function (t) {
                var n = function () {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {
                    }
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {type: "text/javascript"}),
                            a = new Worker(URL.createObjectURL(r), {name: "wpTestEmojiSupports"});
                        return void (a.onmessage = function (e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {
                    }
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function (e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () {
                    n.DOMReady = !0
                }
            }).then(function () {
                return e
            }).then(function () {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <style id='wp-emoji-styles-inline-css'>

        img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
          href="{{url('front/wp-includes/css/dist/block-library/style.min.css?ver=6.4.3')}}" media='all'/>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > .alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex > * {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid > * {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='template-kit-export-css'
          href="{{url('front/wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min.css?ver=1.0.21')}}"
          media='all'/>
    <link rel='stylesheet' id='swiper-css'
          href="{{url('front/wp-content/plugins/qi-addons-for-elementor/assets/plugins/swiper/swiper.min.css?ver=6.4.3')}}"
          media='all'/>
    <link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css'
          href='htt{{url("front/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=6.4.3")}}'
          media='all'/>
    <link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css'
          href='{{url("front/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=6.4.3")}}'
          media='all'/>
    <link rel='stylesheet' id='qi-addons-for-elementor-style-css'
          href='{{url("front/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=6.4.3")}}'
          media='all'/>
    <link rel='stylesheet' id='hello-elementor-css'
          href='{{url("front/wp-content/themes/hello-elementor/style.min.css?ver=2.6.1")}}' media='all'/>
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
          href='{{url("front/wp-content/themes/hello-elementor/theme.min.css?ver=2.6.1")}}' media='all'/>
    <link rel='stylesheet' id='elementor-icons-css'
          href='{{url("front/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.16.0")}}'
          media='all'/>
    <link rel='stylesheet' id='elementor-frontend-css'
          href='{{url("front/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.7.2")}}' media='all'/>
    <link rel='stylesheet' id='elementor-post-7-css'
          href='{{url("front/wp-content/uploads/elementor/css/post-7.css?ver=1661114848")}}' media='all'/>
    <link rel='stylesheet' id='elementor-pro-css'
          href='{{url("front/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.7.3")}}'
          media='all'/>
    <link rel='stylesheet' id='font-awesome-5-all-css'
          href='{{url("front/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.7.2")}}'
          media='all'/>
    <link rel='stylesheet' id='font-awesome-4-shim-css'
          href='{{url("front/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.7.2")}}'
          media='all'/>
    <link rel='stylesheet' id='elementor-post-20-css'
          href='{{url("front/wp-content/uploads/elementor/css/post-20.css?ver=1661239986")}}' media='all'/>
    <link rel='stylesheet' id='elementor-post-879-css'
          href='{{url("front/wp-content/uploads/elementor/css/post-879.css?ver=1666390326")}}' media='all'/>
    <link rel='stylesheet' id='google-fonts-1-css'
          href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CSaira%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.4.3'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
          href="{{url('front/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3')}}"
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
          href="{{url('front/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3')}}"
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
          href="{{url('front/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3')}}"
          media='all'/>
    <script src="{{url('front/wp-includes/js/jquery/jquery.min.js?ver=3.7.1')}}" id="jquery-core-js"></script>
    <script src="{{url('front/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1')}}"
            id="jquery-migrate-js"></script>
    <script
        src="{{url('front/wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min.js?ver=1.0.21')}}"
        id="template-kit-export-js"></script>
    <script src="{{url('front/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.7.2')}}"
            id="font-awesome-4-shim-js"></script>
    <link rel="https://api.w.org/" href="{{url('front/wp-json/')}}"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{url('front/xmlrpc.php?rsd')}}"/>
    <meta name="generator" content="WordPress 6.4.3"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"
            integrity="sha512-J9QfbPuFlqGD2CYVCa6zn8/7PEgZnGpM5qtFOBZgwujjDnG5w5Fjx46YzqvIh/ORstcj7luStvvIHkisQi5SKw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="canonical" href="{{url('template-kit/booking/')}}"/>
    <link rel='shortlink' href='https://www.carlane.hocud.com/?p=20'/>
    <link rel="alternate" type="application/json+oembed"
          href="{{url('front/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.carlane.hocud.com%2Ftemplate-kit%2Fbooking%2F')}}"/>
    <link rel="alternate" type="text/xml+oembed"
          href="{{url('front/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.carlane.hocud.com%2Ftemplate-kit%2Fbooking%2F&#038;format=xml')}}"/>
    <meta name="theme-color" content="#234896">
    <link rel="icon" href="{{url('front/wp-content/uploads/2021/10/Fav-150x150.png')}}" sizes="32x32"/>
    <link rel="icon" href="{{url('front/wp-content/uploads/2021/10/Fav.png')}}" sizes="192x192"/>
    <link rel="apple-touch-icon" href="{{url('front/wp-content/uploads/2021/10/Fav.png')}}"/>
    <meta name="msapplication-TileImage" content="{{url('front/wp-content/uploads/2021/10/Fav.png')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>
</head>
<body
    class="envato_tk_templates-template envato_tk_templates-template-elementor_canvas single single-envato_tk_templates postid-20 wp-custom-logo qodef-qi--no-touch qi-addons-for-elementor-1.5.4 elementor-default elementor-template-canvas elementor-kit-7 elementor-page elementor-page-20">
<div data-elementor-type="wp-post" data-elementor-id="20" class="elementor elementor-20">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-38d93e2 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
        data-id="38d93e2" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0d19885"
                data-id="0d19885" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-4495bae elementor-widget__width-initial elementor-widget elementor-widget-theme-site-logo elementor-widget-image"
                        data-id="4495bae" data-element_type="widget" data-widget_type="theme-site-logo.default">
                        <div class="elementor-widget-container">
                            <style>/*! elementor - v3.7.2 - 21-08-2022 */
                                .elementor-widget-image {
                                    text-align: center
                                }

                                .elementor-widget-image a {
                                    display: inline-block
                                }

                                .elementor-widget-image a img[src$=".svg"] {
                                    width: 48px
                                }

                                .elementor-widget-image img {
                                    vertical-align: middle;
                                    display: inline-block
                                }</style>
                            <a href="https://www.carlane.hocud.com">
                                <img decoding="async" width="200" height="52" src="{{ url($settings->Logo) }}"
                                     class="attachment-full size-full" alt=""/> </a>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-ef52794 elementor-align-right elementor-widget__width-initial elementor-widget elementor-widget-button"
                        data-id="ef52794" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a href="{{url('/')}}" class="elementor-button-link elementor-button elementor-size-sm"
                                   role="button">
						<span class="elementor-button-content-wrapper">
							<span class="elementor-button-icon elementor-align-icon-left">
				<i aria-hidden="true" class="fas fa-long-arrow-alt-left"></i>			</span>
						<span class="elementor-button-text">Back to home</span>
		</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-d024e8c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="d024e8c" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-da0eda6"
                data-id="da0eda6" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-9effe71 elementor-widget elementor-widget-qi_addons_for_elementor_section_title"
                        data-id="9effe71" data-element_type="widget"
                        data-widget_type="qi_addons_for_elementor_section_title.default">
                        <div class="elementor-widget-container">
                            <div
                                class="qodef-shortcode qodef-m  qodef-qi-section-title  qodef-decoration--italic  qodef-link--underline-draw qodef-subtitle-icon--left">
                                <h1 class="qodef-m-title">
                                    <span class="qodef-e-colored">Book</span> Now </h1>
                                <h4 class="qodef-m-subtitle">
                                    {{ $item->Price }} SAR /Hour </h4>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-a038cf8 elementor-button-align-stretch elementor-widget elementor-widget-form"
                        data-id="a038cf8" data-element_type="widget"
                        data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                        data-widget_type="form.default">
                        <div class="elementor-widget-container">
                            <style>/*! elementor-pro - v3.7.3 - 31-07-2022 */
                                .elementor-button.elementor-hidden, .elementor-hidden {
                                    display: none
                                }

                                .e-form__step {
                                    width: 100%
                                }

                                .e-form__step:not(.elementor-hidden) {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -ms-flex-wrap: wrap;
                                    flex-wrap: wrap
                                }

                                .e-form__buttons {
                                    -ms-flex-wrap: wrap;
                                    flex-wrap: wrap
                                }

                                .e-form__buttons, .e-form__buttons__wrapper {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex
                                }

                                .e-form__indicators {
                                    -webkit-box-pack: justify;
                                    -ms-flex-pack: justify;
                                    justify-content: space-between;
                                    -ms-flex-wrap: nowrap;
                                    flex-wrap: nowrap;
                                    font-size: 13px;
                                    margin-bottom: var(--e-form-steps-indicators-spacing)
                                }

                                .e-form__indicators, .e-form__indicators__indicator {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center
                                }

                                .e-form__indicators__indicator {
                                    -webkit-box-orient: vertical;
                                    -webkit-box-direction: normal;
                                    -ms-flex-direction: column;
                                    flex-direction: column;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    -ms-flex-preferred-size: 0;
                                    flex-basis: 0;
                                    padding: 0 var(--e-form-steps-divider-gap)
                                }

                                .e-form__indicators__indicator__progress {
                                    width: 100%;
                                    position: relative;
                                    background-color: var(--e-form-steps-indicator-progress-background-color);
                                    border-radius: var(--e-form-steps-indicator-progress-border-radius);
                                    overflow: hidden
                                }

                                .e-form__indicators__indicator__progress__meter {
                                    width: var(--e-form-steps-indicator-progress-meter-width, 0);
                                    height: var(--e-form-steps-indicator-progress-height);
                                    line-height: var(--e-form-steps-indicator-progress-height);
                                    padding-right: 15px;
                                    border-radius: var(--e-form-steps-indicator-progress-border-radius);
                                    background-color: var(--e-form-steps-indicator-progress-color);
                                    color: var(--e-form-steps-indicator-progress-meter-color);
                                    text-align: right;
                                    -webkit-transition: width .1s linear;
                                    -o-transition: width .1s linear;
                                    transition: width .1s linear
                                }

                                .e-form__indicators__indicator:first-child {
                                    padding-left: 0
                                }

                                .e-form__indicators__indicator:last-child {
                                    padding-right: 0
                                }

                                .e-form__indicators__indicator--state-inactive {
                                    color: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2)
                                }

                                .e-form__indicators__indicator--state-inactive [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                    background-color: var(--e-form-steps-indicator-inactive-secondary-color, #fff)
                                }

                                .e-form__indicators__indicator--state-inactive object, .e-form__indicators__indicator--state-inactive svg {
                                    fill: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2)
                                }

                                .e-form__indicators__indicator--state-active {
                                    color: var(--e-form-steps-indicator-active-primary-color, #39b54a);
                                    border-color: var(--e-form-steps-indicator-active-secondary-color, #fff)
                                }

                                .e-form__indicators__indicator--state-active [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                    background-color: var(--e-form-steps-indicator-active-secondary-color, #fff)
                                }

                                .e-form__indicators__indicator--state-active object, .e-form__indicators__indicator--state-active svg {
                                    fill: var(--e-form-steps-indicator-active-primary-color, #39b54a)
                                }

                                .e-form__indicators__indicator--state-completed {
                                    color: var(--e-form-steps-indicator-completed-secondary-color, #fff)
                                }

                                .e-form__indicators__indicator--state-completed [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                    background-color: var(--e-form-steps-indicator-completed-primary-color, #39b54a)
                                }

                                .e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label {
                                    color: var(--e-form-steps-indicator-completed-primary-color, #39b54a)
                                }

                                .e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none {
                                    color: var(--e-form-steps-indicator-completed-primary-color, #39b54a);
                                    background-color: initial
                                }

                                .e-form__indicators__indicator--state-completed object, .e-form__indicators__indicator--state-completed svg {
                                    fill: var(--e-form-steps-indicator-completed-secondary-color, #fff)
                                }

                                .e-form__indicators__indicator__icon {
                                    width: var(--e-form-steps-indicator-padding, 30px);
                                    height: var(--e-form-steps-indicator-padding, 30px);
                                    font-size: var(--e-form-steps-indicator-icon-size);
                                    border-width: 1px;
                                    border-style: solid;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                    overflow: hidden;
                                    margin-bottom: 10px
                                }

                                .e-form__indicators__indicator__icon img, .e-form__indicators__indicator__icon object, .e-form__indicators__indicator__icon svg {
                                    width: var(--e-form-steps-indicator-icon-size);
                                    height: auto
                                }

                                .e-form__indicators__indicator__icon .e-font-icon-svg {
                                    height: 1em
                                }

                                .e-form__indicators__indicator__number {
                                    width: var(--e-form-steps-indicator-padding, 30px);
                                    height: var(--e-form-steps-indicator-padding, 30px);
                                    border-width: 1px;
                                    border-style: solid;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                    margin-bottom: 10px
                                }

                                .e-form__indicators__indicator--shape-circle {
                                    border-radius: 50%
                                }

                                .e-form__indicators__indicator--shape-square {
                                    border-radius: 0
                                }

                                .e-form__indicators__indicator--shape-rounded {
                                    border-radius: 5px
                                }

                                .e-form__indicators__indicator--shape-none {
                                    border: 0
                                }

                                .e-form__indicators__indicator__label {
                                    text-align: center
                                }

                                .e-form__indicators__indicator__separator {
                                    width: 100%;
                                    height: var(--e-form-steps-divider-width);
                                    background-color: #c2cbd2
                                }

                                .e-form__indicators--type-icon, .e-form__indicators--type-icon_text, .e-form__indicators--type-number, .e-form__indicators--type-number_text {
                                    -webkit-box-align: start;
                                    -ms-flex-align: start;
                                    align-items: flex-start
                                }

                                .e-form__indicators--type-icon .e-form__indicators__indicator__separator, .e-form__indicators--type-icon_text .e-form__indicators__indicator__separator, .e-form__indicators--type-number .e-form__indicators__indicator__separator, .e-form__indicators--type-number_text .e-form__indicators__indicator__separator {
                                    margin-top: calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2)
                                }

                                .elementor-field-type-hidden {
                                    display: none
                                }

                                .elementor-field-type-html {
                                    display: inline-block
                                }

                                .elementor-login .elementor-lost-password, .elementor-login .elementor-remember-me {
                                    font-size: .85em
                                }

                                .elementor-field-type-recaptcha_v3 .elementor-field-label {
                                    display: none
                                }

                                .elementor-field-type-recaptcha_v3 .grecaptcha-badge {
                                    z-index: 1
                                }

                                .elementor-button .elementor-form-spinner {
                                    -webkit-box-ordinal-group: 4;
                                    -ms-flex-order: 3;
                                    order: 3
                                }

                                .elementor-form .elementor-button > span {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center
                                }

                                .elementor-form .elementor-button .elementor-button-text {
                                    white-space: normal;
                                    -webkit-box-flex: 0;
                                    -ms-flex-positive: 0;
                                    flex-grow: 0
                                }

                                .elementor-form .elementor-button svg {
                                    height: auto
                                }

                                .elementor-form .elementor-button .e-font-icon-svg {
                                    height: 1em
                                }</style>
                            <form action="{{route('user.vehicle.book', $item->VehicleID)}}" id="h-form" method="post">
                                @csrf
                                <input type="hidden" name="WithHelmet" id="yWithHelmet" value="{{old('WithHelmet')}}">
                                <input type="hidden" name="date" id="ydate" value="{{old('date')}}">
                                <input type="hidden" name="TimeFrom" id="yTimeFrom" value="{{old('TimeFrom')}}">
                                <input type="hidden" name="TimeTo" id="yTimeTo" value="{{old('TimeTo')}}">
                                <input type="hidden" name="cvv" id="ycvv" value="{{old('cvv')}}">
                                <input type="hidden" name="card_name" id="ycard_name" value="{{old('card_name')}}">
                                <input type="hidden" name="card_number" id="ycard_number"
                                       value="{{old('card_number')}}">
                                <input type="hidden" name="expire_month" id="yexpire_month"
                                       value="{{old('expire_month')}}">
                                <input type="hidden" name="expire_year" id="yexpire_year"
                                       value="{{old('expire_year')}}">
                            </form>
                            <form class="elementor-form" action="{{route('user.vehicle.book', $item->VehicleID)}}"
                                  method="post" name="Booking Form">
                                @csrf
                                @if($errors->any())
                                    {!! implode('', $errors->all('<div style="background: #f46969;color: #FFF;padding: 10px; text-align:center;">:message</div>')) !!}
                                @endif
                                @if(Session::has('flash_message'))
                                    <div
                                        style="background: #39b54a;color: #FFF;padding: 10px; text-align:center;">{{Session::get('flash_message')}}</div>
                                @endif


                                <div class="elementor-form-fields-wrapper elementor-labels-above">
                                    <div
                                        class="elementor-field-type-step elementor-field-group elementor-column elementor-field-group-field_777cd2c elementor-col-100">
                                        <div class="e-field-step elementor-hidden" data-label="Car/Location"
                                             data-previousButton="" data-nextButton="" data-iconUrl=""
                                             data-iconLibrary="fas fa-star" data-icon=""></div>

                                    </div>
                                    <div
                                        class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-car_type elementor-col-100 elementor-field-required elementor-mark-required">
                                        <label for="form-field-car_type" class="elementor-field-label">
                                            Helmet </label>
                                        <div class="elementor-field-subgroup  ">
                            <span class="elementor-field-option">
                                <input type="radio" {{ old('WithHelmet') == 0 ? 'checked' : '' }} value="0"
                                       id="form-field-car_type-0" name="WithHelmet" required="required"
                                       aria-required="true">
                                <label for="form-field-car_type-0">Without Helmet</label></span>
                                            <span class="elementor-field-option">
                                    <input type="radio" {{ old('WithHelmet') == 1 ? 'checked' : '' }} value="1"
                                           id="form-field-car_type-1" name="WithHelmet" required="required"
                                           aria-required="true">
                                <label for="form-field-car_type-1">With Helmet</label></span>
                                        </div>
                                    </div>

                                    <div
                                        class="elementor-field-type-step elementor-field-group elementor-column elementor-field-group-field_67b46b7 elementor-col-100">
                                        <div class="e-field-step elementor-hidden" data-label="Date/Time"
                                             data-previousButton="" data-nextButton="" data-iconUrl=""
                                             data-iconLibrary="fas fa-star" data-icon=""></div>
                                    </div>
                                    <div
                                        class="elementor-field-type-date elementor-field-group elementor-column elementor-field-group-pickup_date elementor-col-100 elementor-field-required elementor-mark-required">
                                        <label for="form-field-pickup_date" class="elementor-field-label">Date</label>
                                        <input min="{{ date('Y-m-d') }}" value="{{old('date')}}" type="date" name="date"
                                               id="xdate"
                                               class="elementor-field elementor-size-xs  elementor-field-textual"
                                               required="required" aria-required="true">
                                    </div>
                                    <div
                                        class="timepicker-ui elementor-field-type-time elementor-field-group elementor-column elementor-field-group-pickup_time elementor-col-50 elementor-field-required elementor-mark-required">
                                        <label for="form-field-pickup_time" class="elementor-field-label">From
                                            Time </label>
                                        <input type="text" name="TimeFrom" id="form-field-pickup_time"
                                               class="timepicker-ui-input elementor-field elementor-size-sm  elementor-field-textual elementor-time-field elementor-use-native"
                                               required="required" aria-required="true">
                                    </div>
                                    <div
                                        class="timepicker-uit elementor-field-type-date elementor-field-group elementor-column elementor-field-group-dropoff_date elementor-col-50 elementor-field-required elementor-mark-required">
                                        <label for="form-field-dropoff_date" class="elementor-field-label">To
                                            Date </label>
                                        <input type="text" name="TimeTo" id="form-field-dropoff_date"
                                               class="timepicker-ui-input elementor-field elementor-size-sm  elementor-field-textual elementor-date-field elementor-use-native"
                                               required="required" aria-required="true">
                                    </div>
                                    <div
                                        class="elementor-field-type-step elementor-field-group elementor-column elementor-field-group-field_a0aa3e9 elementor-col-100">
                                        <div class="e-field-step elementor-hidden" data-label="Contact/Message"
                                             data-previousButton="" data-nextButton="" data-iconUrl=""
                                             data-iconLibrary="fas fa-star" data-icon=""></div>

                                    </div>
                                    <div
                                        class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-car_type elementor-col-100 elementor-field-required elementor-mark-required">
                                        <img src="{{url('card.png')}}" style="height: 156px;margin: 0px auto;" alt="">
                                    </div>
                                    <div
                                        class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_40ab81e elementor-col-100 elementor-sm-100 elementor-field-required elementor-mark-required">
                                        <label for="form-field-field_40ab81e" class="elementor-field-label">
                                            Card Holder Name </label>
                                        <input size="1" type="text" value="{{old('card_name')}}" name="card_name"
                                               id="form-field-field_40ab81e"
                                               class="elementor-field elementor-size-xs  elementor-field-textual"
                                               required="required" aria-required="true">
                                    </div>
                                    <div
                                        class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-phone_number elementor-col-50 elementor-sm-100 elementor-field-required elementor-mark-required">
                                        <label for="form-field-phone_number" class="elementor-field-label">
                                            Card Number </label>
                                        <input size="1" type="number" value="{{old('card_number')}}" name="card_number"
                                               id="form-field-phone_number"
                                               class="elementor-field elementor-size-xs  elementor-field-textual"
                                               required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+"
                                               title="Only numbers and phone characters (#, -, *, etc) are accepted.">

                                    </div>
                                    <div
                                        class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-phone_number elementor-col-50 elementor-sm-100 elementor-field-required elementor-mark-required">
                                        <label for="form-field-phone_number" class="elementor-field-label">
                                            CVV </label>
                                        <input size="1" type="number" value="{{old('cvv')}}" name="cvv"
                                               id="form-field-phone_number"
                                               class="elementor-field elementor-size-xs  elementor-field-textual"
                                               required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+"
                                               title="Only numbers and phone characters (#, -, *, etc) are accepted.">

                                    </div>
                                    <div
                                        class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-car_type elementor-col-50 elementor-field-required elementor-mark-required">
                                        <label for="form-field-car_type" class="elementor-field-label">
                                            Expire Month </label>
                                        <div class="elementor-field elementor-select-wrapper ">
                                            @php
                                                $months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
                                            @endphp
                                            <select name="expire_month" id="form-field-car_type"
                                                    class="elementor-field-textual elementor-size-xs"
                                                    required="required" aria-required="true">
                                                @foreach($months as $mon)
                                                    <option
                                                        value="{{ $mon }}" {{ old('expire_month') == $mon ? 'selected' : '' }}>{{ $mon }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-car_type elementor-col-50 elementor-field-required elementor-mark-required">
                                        <label for="form-field-car_type" class="elementor-field-label">
                                            Expire Year </label>
                                        <div class="elementor-field elementor-select-wrapper ">
                                            @php
                                                $years = ['2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032'];
                                            @endphp
                                            <select name="expire_year" id="form-field-car_type"
                                                    class="elementor-field-textual elementor-size-xs"
                                                    required="required" aria-required="true">
                                                @foreach($years as $year)
                                                    <option
                                                        value="{{ $year }}" {{ old('expire_year') == $year ? 'selected' : '' }}>{{$year}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                        <button type="submit" class="elementor-button elementor-size-sm" id="btn-req">
						<span>
															<span class=" elementor-button-icon">
																										</span>
																						<span
                                                                                            class="elementor-button-text"
                                                                                            id="btn-req">Request Booking</span>
													</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-8406af0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="8406af0" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-54c8589"
                data-id="54c8589" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-6bb484e elementor-widget-mobile__width-inherit elementor-widget elementor-widget-qi_addons_for_elementor_icon_with_text"
                        data-id="6bb484e" data-element_type="widget"
                        data-widget_type="qi_addons_for_elementor_icon_with_text.default">
                        <div class="elementor-widget-container">
                            <div
                                class="qodef-shortcode qodef-m  qodef-qi-icon-with-text qodef-layout--top qodef-icon-boxed   qodef-- qodef-alignment--center">
                                <div class="qodef-m-content">
                                    <h5 class="qodef-m-title">
                                        <span class="qodef-m-title-text">Having Trouble?</span>
                                    </h5>
                                    <div class="qodef-m-text"><p>Call: {{$settings->Phone}}</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-d14801e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="d14801e" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c1fb8ef"
                data-id="c1fb8ef" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-ede952b elementor-align-center elementor-tablet-align-center elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="ede952b" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <link rel="stylesheet"
                                  href="{{url('front/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css')}}">
                            <ul class="elementor-icon-list-items elementor-inline-items">
                                <li class="elementor-icon-list-item elementor-inline-item">
                                    <a href="#">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="far fa-sticky-note"></i>						</span>
                                        <span class="elementor-icon-list-text">Terms & Conditions</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="far fa-copyright"></i>						</span>
                                    <span class="elementor-icon-list-text">2024 Hocud.  All rights reserved.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<link rel='stylesheet' id='flatpickr-css'
      href='{{url("front/wp-content/plugins/elementor/assets/lib/flatpickr/flatpickr.min.css?ver=4.1.4")}}'
      media='all'/>
<link rel='stylesheet' id='elementor-icons-fa-brands-css'
      href='{{url("front/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3")}}'
      media='all'/>
<link rel='stylesheet' id='e-animations-css'
      href='{{url("front/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.7.2")}}'
      media='all'/>
<script src="{{url('front/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2')}}" id="jquery-ui-core-js"></script>
<script id="qi-addons-for-elementor-script-js-extra">
    var qodefQiAddonsGlobal = {
        "vars": {
            "adminBarHeight": 0,
            "iconArrowLeft": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
            "iconArrowRight": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
            "iconClose": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
        }
    };
</script>
<script src="{{url('front/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=6.4.3')}}"
        id="qi-addons-for-elementor-script-js"></script>
<script src="{{url('front/wp-content/plugins/elementor/assets/lib/flatpickr/flatpickr.min.js?ver=4.1.4')}}"
        id="flatpickr-js"></script>
<script src="{{url('front/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.7.2')}}"
        id="elementor-webpack-runtime-js"></script>
<script src="{{url('front/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.7.2')}}"
        id="elementor-frontend-modules-js"></script>
<script src="{{url('front/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2')}}"
        id="elementor-waypoints-js"></script>
<script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false},
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.7.2",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "a11y_improvements": true,
            "additional_custom_breakpoints": true,
            "e_import_export": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true
        },
        "urls": {"assets": "https:\/\/www.carlane.hocud.com\/wp-content\/plugins\/elementor\/assets\/"},
        "settings": {"page": [], "editorPreferences": []},
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 20,
            "title": "Booking%20%E2%80%93%20CarLane",
            "excerpt": "",
            "featuredImage": "https:\/\/www.carlane.hocud.com\/wp-content\/uploads\/2022\/08\/16_Booking.jpg"
        }
    };
</script>
<script src="{{url('front/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.7.2')}}"
        id="elementor-frontend-js"></script>
<script src="https://www.carlane.hocud.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.7.2"
        id="elementor-frontend-js"></script>
<script src="https://www.carlane.hocud.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2"
        id="wp-polyfill-inert-js"></script>
<script src="https://www.carlane.hocud.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0"
        id="regenerator-runtime-js"></script>
<script src="https://www.carlane.hocud.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0"
        id="wp-polyfill-js"></script>
<script src="https://www.carlane.hocud.com/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1"
        id="wp-hooks-js"></script>
<script src="https://www.carlane.hocud.com/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef"
        id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
    wp.i18n.setLocaleData({'text direction\u0004ltr': ['ltr']});
</script>
<script
    src="{{url('front/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=6.4.3')}}"
    id="qi-addons-for-elementor-elementor-js"></script>
<script src="{{url('front/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.7.3')}}"
        id="elementor-pro-webpack-runtime-js"></script>
<script id="elementor-pro-frontend-js-before">
    var ElementorProFrontendConfig = {
        "ajaxurl": "",
        "nonce": "ac5a7f45a6",
        "urls": {
            "assets": "https:\/\/www.carlane.hocud.com\/wp-content\/plugins\/elementor-pro\/assets\/",
            "rest": "https:\/\/www.carlane.hocud.com\/wp-json\/"
        },
        "shareButtonsNetworks": {
            "facebook": {"title": "Facebook", "has_counter": true},
            "twitter": {"title": "Twitter"},
            "linkedin": {"title": "LinkedIn", "has_counter": true},
            "pinterest": {"title": "Pinterest", "has_counter": true},
            "reddit": {"title": "Reddit", "has_counter": true},
            "vk": {"title": "VK", "has_counter": true},
            "odnoklassniki": {"title": "OK", "has_counter": true},
            "tumblr": {"title": "Tumblr"},
            "digg": {"title": "Digg"},
            "skype": {"title": "Skype"},
            "stumbleupon": {"title": "StumbleUpon", "has_counter": true},
            "mix": {"title": "Mix"},
            "telegram": {"title": "Telegram"},
            "pocket": {"title": "Pocket", "has_counter": true},
            "xing": {"title": "XING", "has_counter": true},
            "whatsapp": {"title": "WhatsApp"},
            "email": {"title": "Email"},
            "print": {"title": "Print"}
        },
        "facebook_sdk": {"lang": "en_US", "app_id": ""},
        "lottie": {"defaultAnimationUrl": "https:\/\/www.carlane.hocud.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}
    };
</script>
<script src="{{url('front/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.7.3')}}"
        id="elementor-pro-frontend-js"></script>
<script src="{{url('front/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.7.3')}}"
        id="pro-elements-handlers-js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker-ui/2.6.1/timepicker-ui.umd.js"
        integrity="sha512-E+7ktEwbBMiVhGCpv0rpg1C2vJBAvMwAJtLH7PcFsT+PkoAXgNWpJuWJz8Bw3E+5/NmZbxwC4GzHyKzYR/2g3w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const DOMElement = document.querySelector(".timepicker-ui");
    const options = {clockType: '24h'};
    const newTimepicker = new window.tui.TimepickerUI(DOMElement, options);

    newTimepicker.create();

    const DOMElementT = document.querySelector(".timepicker-uit");
    const optionsT = {clockType: '24h'};
    const newTimepickerT = new window.tui.TimepickerUI(DOMElementT, optionsT);

    newTimepickerT.create();

</script>
<script>

    $('#btn-req').on('click', function (e) {
        e.preventDefault();
        $('#yWithHelmet').val($('.elementor-form input[name=WithHelmet]').val());
        $('#ydate').val($('.elementor-form input[name=date]').val());
        $('#yTimeFrom').val($('.elementor-form input[name=TimeFrom]').val());
        $('#yTimeTo').val($('.elementor-form input[name=TimeTo]').val());
        $('#ycvv').val($('.elementor-form input[name=cvv]').val());
        $('#ycard_name').val($('.elementor-form input[name=card_name]').val());
        $('#ycard_number').val($('.elementor-form input[name=card_number]').val());
        $('#yexpire_month').val($('.elementor-form select[name=expire_month]').val());
        $('#yexpire_year').val($('.elementor-form select[name=expire_year]').val());

        $('#h-form').submit();
    })

</script>
</body>
</html>
