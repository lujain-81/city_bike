@extends('user.layouts.master')

@section('body-class')
envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-12 wp-custom-logo qodef-qi--no-touch qi-addons-for-elementor-1.5.4 elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-12
@endsection

@section('content')
<div data-elementor-type="wp-post" data-elementor-id="12" class="elementor elementor-12">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-4ce5521 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4ce5521" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f953524" data-id="f953524" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-95a5244 elementor-widget elementor-widget-qi_addons_for_elementor_section_title" data-id="95a5244" data-element_type="widget" data-widget_type="qi_addons_for_elementor_section_title.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-qi-section-title  qodef-decoration--italic  qodef-link--underline-draw qodef-subtitle-icon--left">
                                <h1 class="qodef-m-title">
                                    <span class="qodef-e-colored">{{$item->Type}}</span> </h1>
                                <h4 class="qodef-m-subtitle">
                                    {{$item->Model}}			</h4>
                                <div class="qodef-m-button qodef-qi-clear">
                                    <a class="qodef-shortcode qodef-m  qodef-qi-button qodef-html--link qodef-layout--filled qodef-type--standard   qodef-icon--left qodef-hover--icon-move-diagonal     " href="#" target="_self">	<span class="qodef-m-text">{{ $item->Price }} SAR /Hour</span>		<span class="qodef-m-icon ">		<span class="qodef-m-icon-inner">			<i aria-hidden="true" class="hm hm-cart"></i>							<i aria-hidden="true" class="hm hm-cart"></i>					</span>	</span></a>	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-0f16456 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0f16456" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div style="width: 40%;" class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fb43e0e" data-id="fb43e0e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-4e62998 elementor-widget elementor-widget-image" data-id="4e62998" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img fetchpriority="high" decoding="async" width="800" height="628" src="{{url($item->Image)}}" class="attachment-large size-large" alt="" style="width: 73%; height: 400px" srcset="{{url($item->Image)}} 800w, {{url($item->Image)}} 300w, {{url($item->Image)}} 768w" sizes="(max-width: 800px) 100vw, 800px" />															</div>
                    </div>
                </div>
            </div>
            <div style="width: 60%;" class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7133150" data-id="7133150" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div style="border-left: 4px solid #d7d7d7;padding: 0;" class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-bffc1e2 elementor-icon-list--layout-inline elementor-align-center elementor-widget__width-inherit elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="bffc1e2" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items elementor-inline-items">
                                <li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-car"></i>						</span>
                                    <span class="elementor-icon-list-text">{{$item->Model}}</span>
                                </li>
                                <li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-users"></i>						</span>
                                    <span class="elementor-icon-list-text">{{ $item->Type }}</span>
                                </li>
                                <li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-door-open"></i>						</span>
                                    <span class="elementor-icon-list-text">{{ $item->CodNumber }}</span>
                                </li>
                                <li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-bolt"></i>						</span>
                                    <span class="elementor-icon-list-text">{{ $item->Price }} SAR</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7a9f8f4 elementor-align-justify elementor-widget elementor-widget-button" data-id="7a9f8f4" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div style="text-align: center;" class="elementor-button-wrapper">
                                <h6>Read QR Code to Book Now</h6>
                              <div class="demo-qr"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-871b0bb elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="871b0bb" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-100d5bd" data-id="100d5bd" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-f93ca1a elementor-widget elementor-widget-qi_addons_for_elementor_section_title" data-id="f93ca1a" data-element_type="widget" data-widget_type="qi_addons_for_elementor_section_title.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-qi-section-title  qodef-decoration--italic  qodef-link--underline-draw qodef-subtitle-icon--left">
                                <!-- <h4 class="qodef-m-subtitle">
                                    Save up to 30%			</h4> -->
                                <h2 class="qodef-m-title">
                                    <span class="qodef-e-colored">How </span> to Book new <span class="qodef-e-colored">Vehicle</span> Appointment.	</h2>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bc2edb5 elementor-widget elementor-widget-qi_addons_for_elementor_pricing_list" data-id="bc2edb5" data-element_type="widget" data-widget_type="qi_addons_for_elementor_pricing_list.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-qi-pricing-list qodef-pricing-line--solid qodef-layout--standard ">
                                <div class="qodef-m-inner">
                                    <div class="qodef-m-item qodef-e elementor-repeater-item-ed96b57 ">
                                        <div class="qodef-e-heading">
                                            <h4 class="qodef-e-heading-title">Login Or Register</h4>
                                            <div class="qodef-e-heading-line" ></div>
                                            <p class="qodef-e-heading-price">Required</p>
                                        </div>
                                    </div>
                                    <div class="qodef-m-item qodef-e elementor-repeater-item-0dcdb6f ">
                                        <div class="qodef-e-heading">
                                            <h4 class="qodef-e-heading-title">Enter Appointment Info</h4>
                                            <div class="qodef-e-heading-line" ></div>
                                            <p class="qodef-e-heading-price">Required</p>
                                        </div>
                                    </div>
                                    <div class="qodef-m-item qodef-e elementor-repeater-item-d4b8e92 ">
                                        <div class="qodef-e-heading">
                                            <h4 class="qodef-e-heading-title">Enter Payment Info</h4>
                                            <div class="qodef-e-heading-line" ></div>
                                            <p class="qodef-e-heading-price">Required</p>
                                        </div>
                                    </div>
                                    <div class="qodef-m-item qodef-e elementor-repeater-item-fb8a524 ">
                                        <div class="qodef-e-heading">
                                            <h4 class="qodef-e-heading-title">Take Your Service</h4>
                                            <div class="qodef-e-heading-line" ></div>
                                            <p class="qodef-e-heading-price">Enjoy!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a32e9a6" data-id="a32e9a6" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-7941be8 elementor-widget elementor-widget-qi_addons_for_elementor_section_title" data-id="7941be8" data-element_type="widget" data-widget_type="qi_addons_for_elementor_section_title.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-qi-section-title  qodef-decoration--italic  qodef-link--underline-draw qodef-subtitle-icon--left">
                                <h2 class="qodef-m-title" id="book-form">
                                    <span class="qodef-e-colored">Book</span> Now	</h2>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-dc6b49d elementor-button-align-stretch elementor-widget elementor-widget-form" id="err-sec" data-id="dc6b49d" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
                        <div class="elementor-widget-container">
                            <style>/*! elementor-pro - v3.7.3 - 31-07-2022 */
                            .elementor-button.elementor-hidden,.elementor-hidden{display:none}.e-form__step{width:100%}.e-form__step:not(.elementor-hidden){display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.e-form__buttons{-ms-flex-wrap:wrap;flex-wrap:wrap}.e-form__buttons,.e-form__buttons__wrapper{display:-webkit-box;display:-ms-flexbox;display:flex}.e-form__indicators{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-ms-flex-wrap:nowrap;flex-wrap:nowrap;font-size:13px;margin-bottom:var(--e-form-steps-indicators-spacing)}.e-form__indicators,.e-form__indicators__indicator{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.e-form__indicators__indicator{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-ms-flex-preferred-size:0;flex-basis:0;padding:0 var(--e-form-steps-divider-gap)}.e-form__indicators__indicator__progress{width:100%;position:relative;background-color:var(--e-form-steps-indicator-progress-background-color);border-radius:var(--e-form-steps-indicator-progress-border-radius);overflow:hidden}.e-form__indicators__indicator__progress__meter{width:var(--e-form-steps-indicator-progress-meter-width,0);height:var(--e-form-steps-indicator-progress-height);line-height:var(--e-form-steps-indicator-progress-height);padding-right:15px;border-radius:var(--e-form-steps-indicator-progress-border-radius);background-color:var(--e-form-steps-indicator-progress-color);color:var(--e-form-steps-indicator-progress-meter-color);text-align:right;-webkit-transition:width .1s linear;-o-transition:width .1s linear;transition:width .1s linear}.e-form__indicators__indicator:first-child{padding-left:0}.e-form__indicators__indicator:last-child{padding-right:0}.e-form__indicators__indicator--state-inactive{color:var(--e-form-steps-indicator-inactive-primary-color,#c2cbd2)}.e-form__indicators__indicator--state-inactive [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-inactive-secondary-color,#fff)}.e-form__indicators__indicator--state-inactive object,.e-form__indicators__indicator--state-inactive svg{fill:var(--e-form-steps-indicator-inactive-primary-color,#c2cbd2)}.e-form__indicators__indicator--state-active{color:var(--e-form-steps-indicator-active-primary-color,#39b54a);border-color:var(--e-form-steps-indicator-active-secondary-color,#fff)}.e-form__indicators__indicator--state-active [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-active-secondary-color,#fff)}.e-form__indicators__indicator--state-active object,.e-form__indicators__indicator--state-active svg{fill:var(--e-form-steps-indicator-active-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed{color:var(--e-form-steps-indicator-completed-secondary-color,#fff)}.e-form__indicators__indicator--state-completed [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-completed-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label{color:var(--e-form-steps-indicator-completed-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none{color:var(--e-form-steps-indicator-completed-primary-color,#39b54a);background-color:initial}.e-form__indicators__indicator--state-completed object,.e-form__indicators__indicator--state-completed svg{fill:var(--e-form-steps-indicator-completed-secondary-color,#fff)}.e-form__indicators__indicator__icon{width:var(--e-form-steps-indicator-padding,30px);height:var(--e-form-steps-indicator-padding,30px);font-size:var(--e-form-steps-indicator-icon-size);border-width:1px;border-style:solid;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;overflow:hidden;margin-bottom:10px}.e-form__indicators__indicator__icon img,.e-form__indicators__indicator__icon object,.e-form__indicators__indicator__icon svg{width:var(--e-form-steps-indicator-icon-size);height:auto}.e-form__indicators__indicator__icon .e-font-icon-svg{height:1em}.e-form__indicators__indicator__number{width:var(--e-form-steps-indicator-padding,30px);height:var(--e-form-steps-indicator-padding,30px);border-width:1px;border-style:solid;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-bottom:10px}.e-form__indicators__indicator--shape-circle{border-radius:50%}.e-form__indicators__indicator--shape-square{border-radius:0}.e-form__indicators__indicator--shape-rounded{border-radius:5px}.e-form__indicators__indicator--shape-none{border:0}.e-form__indicators__indicator__label{text-align:center}.e-form__indicators__indicator__separator{width:100%;height:var(--e-form-steps-divider-width);background-color:#c2cbd2}.e-form__indicators--type-icon,.e-form__indicators--type-icon_text,.e-form__indicators--type-number,.e-form__indicators--type-number_text{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.e-form__indicators--type-icon .e-form__indicators__indicator__separator,.e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,.e-form__indicators--type-number .e-form__indicators__indicator__separator,.e-form__indicators--type-number_text .e-form__indicators__indicator__separator{margin-top:calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2)}.elementor-field-type-hidden{display:none}.elementor-field-type-html{display:inline-block}.elementor-login .elementor-lost-password,.elementor-login .elementor-remember-me{font-size:.85em}.elementor-field-type-recaptcha_v3 .elementor-field-label{display:none}.elementor-field-type-recaptcha_v3 .grecaptcha-badge{z-index:1}.elementor-button .elementor-form-spinner{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.elementor-form .elementor-button>span{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.elementor-form .elementor-button .elementor-button-text{white-space:normal;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0}.elementor-form .elementor-button svg{height:auto}.elementor-form .elementor-button .e-font-icon-svg{height:1em}</style>
                            @if(auth('customers')->check())
                            <form class="" method="post" actiom="{{route('user.vehicle.book', $item->VehicleID)}}"  name="">
                                @csrf
                                @if($errors->any())
                            {!! implode('', $errors->all('<div style="background: #f46969;color: #FFF;padding: 10px; text-align:center;">:message</div>')) !!}
                        @endif
@if(Session::has('flash_message'))
<div style="background: #39b54a;color: #FFF;padding: 10px; text-align:center;">{{Session::get('flash_message')}}</div>
@endif

                            <div class="elementor-form-fields-wrapper elementor-labels-above">
                            <div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-car_type elementor-col-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-car_type" class="elementor-field-label">
                                        Helmet							</label>
                                    <div class="elementor-field elementor-select-wrapper ">

                                        <select name="WithHelmet" id="form-field-car_type" class="elementor-field-textual elementor-size-xs" required="required" aria-required="true">

                                            <option value="0" {{ old('WithHelmet') == 0 ? 'selected' : '' }}>Without Helmet</option>
                                            <option value="1" {{ old('WithHelmet') == 1 ? 'selected' : '' }}>With Helmet</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-car_type elementor-col-100 elementor-field-required elementor-mark-required">
                                    <h3>Appointment Info:</h3>
                                </div>
                                <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-pickupLocation elementor-col-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-pickupLocation" class="elementor-field-label">
                                        Date
                                    </label>
                                    <input min="{{ date('Y-m-d') }}" value="{{old('date')}}"  type="date" name="date" id="date" class="elementor-field elementor-size-xs  elementor-field-textual" required="required" aria-required="true">
                                </div>
                                <div class="timepicker-ui elementor-field-type-date elementor-field-group elementor-column elementor-field-group-pickup_date elementor-col-50 elementor-sm-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-pickup_date" class="elementor-field-label">
                                        Time From							</label>

                                    <input type="text" name="TimeFrom" value="{{old('TimeFrom')}}" id="time-from" class="timepicker-ui-input elementor-field elementor-size-xs  elementor-field-textual elementor-date-field elementor-use-native" required="required" aria-required="true">
                                </div>
                                <div class="timepicker-uit elementor-field-type-date elementor-field-group elementor-column elementor-field-group-dropoff_date elementor-col-50 elementor-sm-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-dropoff_date" class="elementor-field-label">
                                        Time To							</label>

                                    <input type="text" name="TimeTo" value="{{old('TimeTo')}}" id="time-to" class="timepicker-ui-input elementor-field elementor-size-xs  elementor-field-textual elementor-date-field elementor-use-native" required="required" aria-required="true">
                                </div>
                                <div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-car_type elementor-col-100 elementor-field-required elementor-mark-required">
                                    <h3>Payment Info:</h3>
                                </div>
                                <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_40ab81e elementor-col-100 elementor-sm-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-field_40ab81e" class="elementor-field-label">
                                        Card Holder Name							</label>
                                    <input size="1" type="text" value="{{old('card_name')}}" name="card_name" id="form-field-field_40ab81e" class="elementor-field elementor-size-xs  elementor-field-textual" required="required" aria-required="true">
                                </div>
                                <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-phone_number elementor-col-50 elementor-sm-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-phone_number" class="elementor-field-label">
                                        Card Number							</label>
                                    <input size="1" type="number" value="{{old('card_number')}}" name="card_number" id="form-field-phone_number" class="elementor-field elementor-size-xs  elementor-field-textual" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">

                                </div>
                                <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-phone_number elementor-col-50 elementor-sm-100 elementor-field-required elementor-mark-required">
                                    <label for="form-field-phone_number" class="elementor-field-label">
                                        CVV							</label>
                                    <input size="1" type="number" value="{{old('cvv')}}" name="cvv" id="form-field-phone_number" class="elementor-field elementor-size-xs  elementor-field-textual" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">

                                </div>
                                <div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-car_type elementor-col-50 elementor-field-required elementor-mark-required">
                                    <label for="form-field-car_type" class="elementor-field-label">
                                        Expire Month							</label>
                                    <div class="elementor-field elementor-select-wrapper ">
                                        @php
                                        $months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
                                         @endphp
                                        <select name="expire_month" id="form-field-car_type" class="elementor-field-textual elementor-size-xs" required="required" aria-required="true">
                                            @foreach($months as $mon)
                                            <option value="{{ $mon }}" {{ old('expire_month') == $mon ? 'selected' : '' }}>{{ $mon }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-car_type elementor-col-50 elementor-field-required elementor-mark-required">
                                    <label for="form-field-car_type" class="elementor-field-label">
                                        Expire Year							</label>
                                    <div class="elementor-field elementor-select-wrapper ">
                                    @php
                                        $years = ['2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032'];
                                         @endphp
                                        <select name="expire_year" id="form-field-car_type" class="elementor-field-textual elementor-size-xs" required="required" aria-required="true">
                                            @foreach($years as $year)
                                            <option value="{{ $year }}" {{ old('expire_year') == $year ? 'selected' : '' }}>{{$year}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                    <button type="submit" class="elementor-button elementor-size-sm">
						<span >
															<span class=" elementor-button-icon">
																										</span>
																						<span class="elementor-button-text">Book Now</span>
													</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        @else
                        <p>You have to login if you have already an account or just you can create new account</p>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-938b9d2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="938b9d2" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6348662" data-id="6348662" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-bd131ac elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-qi_addons_for_elementor_icon_with_text" data-id="bd131ac" data-element_type="widget" data-widget_type="qi_addons_for_elementor_icon_with_text.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-qi-icon-with-text qodef-layout--before-title qodef-icon-boxed   qodef--icon-pack" >
                                <div class="qodef-m-content">
                                    <h3 class="qodef-m-title">
					<span class="qodef-m-title-inner">
									<span class="qodef-m-icon-wrapper">
						<div class="qodef-m-icon-holder">
	<i aria-hidden="true" class="fas fa-history"></i></div>
					</span>
								<span class="qodef-m-title-text">
					Free cancellation				</span>
			</span>
                                    </h3>
                                    <div class="qodef-m-text"><p>Pellente ornare sem urabitur blandit tempus lacinia quam venenatis nulla metus auctor fringilla odio dui.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-738e4ea elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-qi_addons_for_elementor_icon_with_text" data-id="738e4ea" data-element_type="widget" data-widget_type="qi_addons_for_elementor_icon_with_text.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-qi-icon-with-text qodef-layout--before-title qodef-icon-boxed   qodef--icon-pack" >
                                <div class="qodef-m-content">
                                    <h3 class="qodef-m-title">
					<span class="qodef-m-title-inner">
									<span class="qodef-m-icon-wrapper">
						<div class="qodef-m-icon-holder">
	<i aria-hidden="true" class="fas fa-shield-virus"></i></div>
					</span>
								<span class="qodef-m-title-text">
					Theft Protection				</span>
			</span>
                                    </h3>
                                    <div class="qodef-m-text"><p>Pellente ornare sem urabitur blandit tempus lacinia quam venenatis nulla metus auctor fringilla odio dui.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-3671a5f elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-qi_addons_for_elementor_icon_with_text" data-id="3671a5f" data-element_type="widget" data-widget_type="qi_addons_for_elementor_icon_with_text.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-qi-icon-with-text qodef-layout--before-title qodef-icon-boxed   qodef--icon-pack" >
                                <div class="qodef-m-content">
                                    <h3 class="qodef-m-title">
					<span class="qodef-m-title-inner">
									<span class="qodef-m-icon-wrapper">
						<div class="qodef-m-icon-holder">
	<i aria-hidden="true" class="far fa-compass"></i></div>
					</span>
								<span class="qodef-m-title-text">
					GPS on Every Vehicle				</span>
			</span>
                                    </h3>
                                    <div class="qodef-m-text"><p>Pellente ornare sem urabitur blandit tempus lacinia quam venenatis nulla metus auctor fringilla odio dui.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-77655e6 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-qi_addons_for_elementor_icon_with_text" data-id="77655e6" data-element_type="widget" data-widget_type="qi_addons_for_elementor_icon_with_text.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-qi-icon-with-text qodef-layout--before-title qodef-icon-boxed   qodef--icon-pack" >
                                <div class="qodef-m-content">
                                    <h3 class="qodef-m-title">
					<span class="qodef-m-title-inner">
									<span class="qodef-m-icon-wrapper">
						<div class="qodef-m-icon-holder">
	<i aria-hidden="true" class="far fa-hourglass"></i></div>
					</span>
								<span class="qodef-m-title-text">
					Refueling Policy				</span>
			</span>
                                    </h3>
                                    <div class="qodef-m-text"><p>Pellente ornare sem urabitur blandit tempus lacinia quam venenatis nulla metus auctor fringilla odio dui.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('css')
@include('user.home.style')
<link rel='stylesheet' id='elementor-post-12-css' href="{{url('front/wp-content/uploads/elementor/css/post-12.css?ver=345345345')}}" media='all'/>
<script src="{{url('lib/jquery-3.3.1.slim.min.js')}}"></script>

@endsection
@if($errors->any() || Session::has('flash_message'))
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script>
        $(document).ready(function (){
                $('html, body').animate({
                    scrollTop: $("#err-sec").offset().top
                }, 2000);

        });
    </script>
@endif
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker-ui/2.6.1/timepicker-ui.umd.js" integrity="sha512-E+7ktEwbBMiVhGCpv0rpg1C2vJBAvMwAJtLH7PcFsT+PkoAXgNWpJuWJz8Bw3E+5/NmZbxwC4GzHyKzYR/2g3w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
<script src="{{url('lib/jquery.qrcode.js')}}"></script>
<script src="{{url('lib/qrcode.js')}}"></script>
<script>
  $(".demo-qr").qrcode({

text:"{{route('user.book', $item->VehicleID)}}",
label: 'Book Now'

});
</script>

@endsection
