<style>/*! elementor-pro - v3.7.3 - 31-07-2022 */
                            .elementor-slides .swiper-slide-bg {
                                background-size: cover;
                                background-position: 50%;
                                background-repeat: no-repeat;
                                min-width: 100%;
                                min-height: 100%
                            }

                            .elementor-slides .swiper-slide-inner {
                                background-repeat: no-repeat;
                                background-position: 50%;
                                position: absolute;
                                top: 0;
                                left: 0;
                                bottom: 0;
                                right: 0;
                                padding: 50px;
                                margin: auto
                            }

                            .elementor-slides .swiper-slide-inner, .elementor-slides .swiper-slide-inner:hover {
                                color: #fff;
                                display: -webkit-box;
                                display: -ms-flexbox;
                                display: flex
                            }

                            .elementor-slides .swiper-slide-inner .elementor-background-overlay {
                                position: absolute;
                                z-index: 0;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                right: 0
                            }

                            .elementor-slides .swiper-slide-inner .elementor-slide-content {
                                position: relative;
                                z-index: 1;
                                width: 100%
                            }

                            .elementor-slides .swiper-slide-inner .elementor-slide-heading {
                                font-size: 35px;
                                font-weight: 700;
                                line-height: 1
                            }

                            .elementor-slides .swiper-slide-inner .elementor-slide-description {
                                font-size: 17px;
                                line-height: 1.4
                            }

                            .elementor-slides .swiper-slide-inner .elementor-slide-description:not(:last-child), .elementor-slides .swiper-slide-inner .elementor-slide-heading:not(:last-child) {
                                margin-bottom: 30px
                            }

                            .elementor-slides .swiper-slide-inner .elementor-slide-button {
                                border: 2px solid #fff;
                                color: #fff;
                                background: transparent;
                                display: inline-block
                            }

                            .elementor-slides .swiper-slide-inner .elementor-slide-button, .elementor-slides .swiper-slide-inner .elementor-slide-button:hover {
                                background: transparent;
                                color: inherit;
                                text-decoration: none
                            }

                            .elementor--v-position-top .swiper-slide-inner {
                                -webkit-box-align: start;
                                -ms-flex-align: start;
                                align-items: flex-start
                            }

                            .elementor--v-position-bottom .swiper-slide-inner {
                                -webkit-box-align: end;
                                -ms-flex-align: end;
                                align-items: flex-end
                            }

                            .elementor--v-position-middle .swiper-slide-inner {
                                -webkit-box-align: center;
                                -ms-flex-align: center;
                                align-items: center
                            }

                            .elementor--h-position-left .swiper-slide-inner {
                                -webkit-box-pack: start;
                                -ms-flex-pack: start;
                                justify-content: flex-start
                            }

                            .elementor--h-position-right .swiper-slide-inner {
                                -webkit-box-pack: end;
                                -ms-flex-pack: end;
                                justify-content: flex-end
                            }

                            .elementor--h-position-center .swiper-slide-inner {
                                -webkit-box-pack: center;
                                -ms-flex-pack: center;
                                justify-content: center
                            }

                            body.rtl .elementor-widget-slides .elementor-swiper-button-next {
                                left: 10px;
                                right: auto
                            }

                            body.rtl .elementor-widget-slides .elementor-swiper-button-prev {
                                right: 10px;
                                left: auto
                            }

                            .elementor-slides-wrapper div:not(.swiper-slide) > .swiper-slide-inner {
                                display: none
                            }

                            @media (max-width: 767px) {
                                .elementor-slides .swiper-slide-inner {
                                    padding: 30px
                                }

                                .elementor-slides .swiper-slide-inner .elementor-slide-heading {
                                    font-size: 23px;
                                    line-height: 1;
                                    margin-bottom: 15px
                                }

                                .elementor-slides .swiper-slide-inner .elementor-slide-description {
                                    font-size: 13px;
                                    line-height: 1.4;
                                    margin-bottom: 15px
                                }
                            }</style>

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

<style>/*! elementor - v3.7.2 - 21-08-2022 */
                            .elementor-column .elementor-spacer-inner {
                                height: var(--spacer-size)
                            }

                            .e-container {
                                --container-widget-width: 100%
                            }

                            .e-container > .elementor-widget-spacer {
                                width: var(--container-widget-width, var(--spacer-size));
                                -ms-flex-item-align: stretch;
                                align-self: stretch;
                                -ms-flex-negative: 0;
                                flex-shrink: 0
                            }

                            .e-container > .elementor-widget-spacer > .elementor-widget-container, .e-container > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer {
                                height: 100%
                            }

                            .e-container > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer > .elementor-spacer-inner {
                                height: var(--container-widget-height, var(--spacer-size))
                            }</style>