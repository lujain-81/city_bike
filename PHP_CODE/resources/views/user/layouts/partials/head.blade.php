<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $settings->Name }}</title>
    <meta name='robots' content='noindex, nofollow'/>
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
    @yield('first_css')
    <link rel='stylesheet' id='wp-block-library-css' href="{{url('front/wp-includes/css/dist/block-library/style.min.css')}}" media='all'/>
    <link rel="stylesheet" href="{{url('front/css/custom2.css')}}">
    <link rel='stylesheet' id='template-kit-export-css' href="{{url('front/wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min.css?ver=1.0.21')}}" media='all'/>
    <link rel='stylesheet' id='swiper-css' href="{{url('front/wp-content/plugins/qi-addons-for-elementor/assets/plugins/swiper/swiper.min.css?ver=6.4.3')}}" media='all'/>
    <link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css' href="{{url('front/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=6.4.3')}}" media='all'/>
    <link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css' href="{{url('front/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=6.4.3')}}" media='all'/>
    <link rel='stylesheet' id='qi-addons-for-elementor-style-css' href="{{url('front/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=6.4.3')}}" media='all'/>
    <link rel='stylesheet' id='hello-elementor-css' href="{{url('front/wp-content/themes/hello-elementor/style.min.css?ver=2.6.1')}}" media='all'/>
    <link rel='stylesheet' id='hello-elementor-theme-style-css' href="{{url('front/wp-content/themes/hello-elementor/theme.min.css?ver=2.6.1')}}" media='all'/>
    <link rel='stylesheet' id='elementor-icons-css' href="{{url('front/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.16.0')}}" media='all'/>
    <link rel='stylesheet' id='elementor-frontend-css' href="{{url('front/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.7.2')}}" media='all'/>
    <link rel='stylesheet' id='elementor-post-7-css' href="{{url('front/wp-content/uploads/elementor/css/post-7.css?ver=345345345')}}" media='all'/>
    <link rel='stylesheet' id='elementor-pro-css' href="{{url('front/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=444')}}" media='all'/>
    <link rel='stylesheet' id='font-awesome-5-all-css' href="{{url('front/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.444.2')}}" media='all'/>
    <link rel='stylesheet' id='font-awesome-4-shim-css' href="{{url('front/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.7.2')}}" media='all'/>
    <link rel='stylesheet' id='elementor-post-2380-css' href="{{url('front/wp-content/uploads/elementor/css/post-2380.css?ver=1.2.3')}}" media='all'/>
    <link rel='stylesheet' id='elementor-post-53-css' href="{{url('front/wp-content/uploads/elementor/css/post-53.css?ver=16461114849')}}" media='all'/>
    <link rel='stylesheet' id='elementor-post-601-css' href="{{url('front/wp-content/uploads/elementor/css/post-601.css?ver=16641114849')}}" media='all'/>
    <link rel='stylesheet' id='elementor-post-879-css' href='https://www.carlane.hocud.com/wp-content/uploads/elementor/css/post-879.css?ver=16646390326' media='all'/>
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CSaira%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.4.3' media='all'/>
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href="{{url('front/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3')}}" media='all'/>
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href="{{url('front/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3')}}" media='all'/>
    <link rel='stylesheet' id='elementor-icons-fa-regular-css' href="{{url('front/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3')}}" media='all'/>
    <script src="https://www.carlane.hocud.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="https://www.carlane.hocud.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script src="{{url('front/wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min.js?ver=1.0.21')}}" id="template-kit-export-js"></script>
    <script src="{{url('front/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.7.2')}}" id="font-awesome-4-shim-js"></script>
    <link rel="https://api.w.org/" href="https://www.carlane.hocud.com/wp-json/"/>
    <link rel="alternate" type="application/json" href="https://www.carlane.hocud.com/wp-json/wp/v2/pages/2380"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.carlane.hocud.com/xmlrpc.php?rsd"/>
    <meta name="generator" content="WordPress 6.4.3"/>
    <link rel="canonical" href="https://www.carlane.hocud.com/"/>
    <link rel='shortlink' href='https://www.carlane.hocud.com/'/>
    <link rel="alternate" type="application/json+oembed" href="https://www.carlane.hocud.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.carlane.hocud.com%2F"/>
    <link rel="alternate" type="text/xml+oembed" href="https://www.carlane.hocud.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.carlane.hocud.com%2F&#038;format=xml"/>
    <meta name="theme-color" content="#234896">
    <link rel="icon" href="https://www.carlane.hocud.com/wp-content/uploads/2021/10/Fav-150x150.png" sizes="32x32"/>
    <link rel="icon" href="https://www.carlane.hocud.com/wp-content/uploads/2021/10/Fav.png" sizes="192x192"/>
    <link rel="apple-touch-icon" href="https://www.carlane.hocud.com/wp-content/uploads/2021/10/Fav.png"/>
    <meta name="msapplication-TileImage" content="https://www.carlane.hocud.com/wp-content/uploads/2021/10/Fav.png"/>
    <link rel="stylesheet" href="{{url('front/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css')}}">
    <link rel="stylesheet" href="{{url('front/wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css')}}">
    <link rel="stylesheet" href="{{url('front/css/custom.css')}}">

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
                                                        <style>/*! elementor - v3.7.2 - 21-08-2022 */
                            .elementor-widget-image-box .elementor-image-box-content {
                                width: 100%
                            }

                            @media (min-width: 768px) {
                                .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper, .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex
                                }

                                .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
                                    text-align: right;
                                    -webkit-box-orient: horizontal;
                                    -webkit-box-direction: reverse;
                                    -ms-flex-direction: row-reverse;
                                    flex-direction: row-reverse
                                }

                                .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper {
                                    text-align: left;
                                    -webkit-box-orient: horizontal;
                                    -webkit-box-direction: normal;
                                    -ms-flex-direction: row;
                                    flex-direction: row
                                }

                                .elementor-widget-image-box.elementor-position-top .elementor-image-box-img {
                                    margin: auto
                                }

                                .elementor-widget-image-box.elementor-vertical-align-top .elementor-image-box-wrapper {
                                    -webkit-box-align: start;
                                    -ms-flex-align: start;
                                    align-items: flex-start
                                }

                                .elementor-widget-image-box.elementor-vertical-align-middle .elementor-image-box-wrapper {
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center
                                }

                                .elementor-widget-image-box.elementor-vertical-align-bottom .elementor-image-box-wrapper {
                                    -webkit-box-align: end;
                                    -ms-flex-align: end;
                                    align-items: flex-end
                                }
                            }

                            @media (max-width: 767px) {
                                .elementor-widget-image-box .elementor-image-box-img {
                                    margin-left: auto !important;
                                    margin-right: auto !important;
                                    margin-bottom: 15px
                                }
                            }

                            .elementor-widget-image-box .elementor-image-box-img {
                                display: inline-block
                            }

                            .elementor-widget-image-box .elementor-image-box-title a {
                                color: inherit
                            }

                            .elementor-widget-image-box .elementor-image-box-wrapper {
                                text-align: center
                            }

                            .elementor-widget-image-box .elementor-image-box-description {
                                margin: 0
                            }</style>
    @yield('css')
</head>