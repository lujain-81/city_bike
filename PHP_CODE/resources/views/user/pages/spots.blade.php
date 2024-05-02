@extends('user.layouts.master')

@section('body-class')
envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-1131 wp-custom-logo qodef-qi--no-touch qi-addons-for-elementor-1.5.4 elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-1131
@endsection

@section('content')
<div data-elementor-type="wp-post" data-elementor-id="1131" class="elementor elementor-1131">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-2335a06 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2335a06" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e3c4b8b" data-id="e3c4b8b" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-156a5da elementor-widget elementor-widget-qi_addons_for_elementor_section_title" data-id="156a5da" data-element_type="widget" data-widget_type="qi_addons_for_elementor_section_title.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-qi-section-title  qodef-decoration--italic  qodef-link--underline-draw qodef-subtitle-icon--left">
                                <h1 class="qodef-m-subtitle">
                                    Our Locations			</h1>
                                <h2 class="qodef-m-title">
                                    Our Extensive <span class="qodef-e-colored">Coverage</span>	</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-0a604dc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0a604dc" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b3035fe" data-id="b3035fe" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    @foreach($items as $k => $item)
                    <div class="elementor-element elementor-element-e857995 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-qi_addons_for_elementor_icon_with_text" data-id="e857995" data-element_type="widget" data-widget_type="qi_addons_for_elementor_icon_with_text.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-qi-icon-with-text qodef-layout--top qodef-icon-boxed   qodef--icon-pack qodef-alignment--left" >
                                <div class="qodef-m-icon-wrapper">
                                    <div class="qodef-m-icon-holder">
                                        <i aria-hidden="true" class="fas fa-map-marker-alt"></i>	</div>
                                </div>
                                <div class="qodef-m-content">
                                    <h3 class="qodef-m-title">
                                        <span class="qodef-m-title-text">{{ $item->Location }}</span>
                                    </h3>
                                    <!-- <div class="qodef-m-text"><p>121 King Street, New York 3000, USA</p></div> -->
                                    <div class="qodef-m-button qodef-qi-clear">
                                        <a class="qodef-shortcode qodef-m  qodef-qi-button qodef-html--link qodef-layout--textual qodef-type--standard   qodef-icon--right qodef-hover--icon-move-horizontal-short   qodef-text-underline qodef-underline--center " href="#" target="_self">	<span class="qodef-m-text">Book Now</span>		<span class="qodef-m-icon ">		<span class="qodef-m-icon-inner">			<i aria-hidden="true" class="fas fa-chevron-right"></i>					</span>	</span></a>	</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-c8ea663 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="c8ea663" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4bba410" data-id="4bba410" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-fdda943 elementor-widget elementor-widget-hotspot" data-id="fdda943" data-element_type="widget" data-settings="{&quot;hotspot&quot;:[{&quot;_id&quot;:&quot;72c9c06&quot;,&quot;hotspot_label&quot;:&quot;USA&quot;,&quot;hotspot_icon&quot;:{&quot;value&quot;:&quot;fas fa-map-marker-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;hotspot_icon_spacing&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;hotspot_custom_size&quot;:&quot;&quot;,&quot;hotspot_tooltip_content&quot;:&quot;&lt;p&gt;New York, USA&lt;\/p&gt;&quot;,&quot;hotspot_offset_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:18,&quot;sizes&quot;:[]},&quot;hotspot_offset_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:39,&quot;sizes&quot;:[]},&quot;hotspot_tooltip_position&quot;:&quot;&quot;,&quot;hotspot_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;hotspot_icon_position&quot;:&quot;start&quot;,&quot;hotspot_width&quot;:null,&quot;hotspot_height&quot;:null,&quot;hotspot_horizontal&quot;:&quot;left&quot;,&quot;hotspot_vertical&quot;:&quot;top&quot;,&quot;hotspot_position&quot;:null,&quot;hotspot_tooltip_width&quot;:null,&quot;hotspot_tooltip_text_wrap&quot;:null},{&quot;hotspot_label&quot;:&quot;UK&quot;,&quot;hotspot_icon&quot;:{&quot;value&quot;:&quot;fas fa-map-marker-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;hotspot_icon_spacing&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;hotspot_custom_size&quot;:&quot;&quot;,&quot;hotspot_tooltip_content&quot;:&quot;&lt;p&gt;London, UK&lt;\/p&gt;&quot;,&quot;hotspot_offset_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:45,&quot;sizes&quot;:[]},&quot;hotspot_offset_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:31,&quot;sizes&quot;:[]},&quot;hotspot_tooltip_position&quot;:&quot;&quot;,&quot;_id&quot;:&quot;46c9fba&quot;,&quot;hotspot_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;hotspot_icon_position&quot;:&quot;start&quot;,&quot;hotspot_width&quot;:null,&quot;hotspot_height&quot;:null,&quot;hotspot_horizontal&quot;:&quot;left&quot;,&quot;hotspot_vertical&quot;:&quot;top&quot;,&quot;hotspot_position&quot;:null,&quot;hotspot_tooltip_width&quot;:null,&quot;hotspot_tooltip_text_wrap&quot;:null},{&quot;hotspot_label&quot;:&quot;Brazil&quot;,&quot;hotspot_icon&quot;:{&quot;value&quot;:&quot;fas fa-map-marker-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;hotspot_icon_spacing&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;hotspot_custom_size&quot;:&quot;&quot;,&quot;hotspot_tooltip_content&quot;:&quot;&lt;p&gt;Brasilia, Brazil&lt;\/p&gt;&quot;,&quot;hotspot_offset_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:33,&quot;sizes&quot;:[]},&quot;hotspot_offset_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:68,&quot;sizes&quot;:[]},&quot;hotspot_tooltip_position&quot;:&quot;&quot;,&quot;_id&quot;:&quot;d39af0b&quot;,&quot;hotspot_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;hotspot_icon_position&quot;:&quot;start&quot;,&quot;hotspot_width&quot;:null,&quot;hotspot_height&quot;:null,&quot;hotspot_horizontal&quot;:&quot;left&quot;,&quot;hotspot_vertical&quot;:&quot;top&quot;,&quot;hotspot_position&quot;:null,&quot;hotspot_tooltip_width&quot;:null,&quot;hotspot_tooltip_text_wrap&quot;:null},{&quot;hotspot_label&quot;:&quot;South Africa&quot;,&quot;hotspot_icon&quot;:{&quot;value&quot;:&quot;fas fa-map-marker-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;hotspot_icon_spacing&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;hotspot_custom_size&quot;:&quot;&quot;,&quot;hotspot_tooltip_content&quot;:&quot;&lt;p&gt;Cape Town, South Africa&lt;\/p&gt;&quot;,&quot;hotspot_offset_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:53,&quot;sizes&quot;:[]},&quot;hotspot_offset_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:44,&quot;sizes&quot;:[]},&quot;hotspot_offset_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:76,&quot;sizes&quot;:[]},&quot;hotspot_offset_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:89,&quot;sizes&quot;:[]},&quot;hotspot_tooltip_position&quot;:&quot;&quot;,&quot;_id&quot;:&quot;6d652e5&quot;,&quot;hotspot_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;hotspot_icon_position&quot;:&quot;start&quot;,&quot;hotspot_width&quot;:null,&quot;hotspot_height&quot;:null,&quot;hotspot_horizontal&quot;:&quot;left&quot;,&quot;hotspot_vertical&quot;:&quot;top&quot;,&quot;hotspot_position&quot;:null,&quot;hotspot_tooltip_width&quot;:null,&quot;hotspot_tooltip_text_wrap&quot;:null},{&quot;hotspot_label&quot;:&quot;Bangladesh&quot;,&quot;hotspot_icon&quot;:{&quot;value&quot;:&quot;fas fa-map-marker-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;hotspot_icon_spacing&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;hotspot_custom_size&quot;:&quot;&quot;,&quot;hotspot_tooltip_content&quot;:&quot;&lt;p&gt;Dhaka, Bangladesh&lt;\/p&gt;&quot;,&quot;hotspot_offset_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:72,&quot;sizes&quot;:[]},&quot;hotspot_offset_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;hotspot_tooltip_position&quot;:&quot;&quot;,&quot;_id&quot;:&quot;236b2cc&quot;,&quot;hotspot_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;hotspot_icon_position&quot;:&quot;start&quot;,&quot;hotspot_width&quot;:null,&quot;hotspot_height&quot;:null,&quot;hotspot_horizontal&quot;:&quot;left&quot;,&quot;hotspot_vertical&quot;:&quot;top&quot;,&quot;hotspot_position&quot;:null,&quot;hotspot_tooltip_width&quot;:null,&quot;hotspot_tooltip_text_wrap&quot;:null},{&quot;hotspot_label&quot;:&quot;Russia&quot;,&quot;hotspot_icon&quot;:{&quot;value&quot;:&quot;fas fa-map-marker-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;hotspot_icon_spacing&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;hotspot_custom_size&quot;:&quot;&quot;,&quot;hotspot_tooltip_content&quot;:&quot;&lt;p&gt;Moscow, Russia&lt;\/p&gt;&quot;,&quot;hotspot_offset_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:76,&quot;sizes&quot;:[]},&quot;hotspot_offset_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:33,&quot;sizes&quot;:[]},&quot;hotspot_offset_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:26,&quot;sizes&quot;:[]},&quot;hotspot_tooltip_position&quot;:&quot;&quot;,&quot;_id&quot;:&quot;c2a94d1&quot;,&quot;hotspot_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;hotspot_icon_position&quot;:&quot;start&quot;,&quot;hotspot_width&quot;:null,&quot;hotspot_height&quot;:null,&quot;hotspot_horizontal&quot;:&quot;left&quot;,&quot;hotspot_vertical&quot;:&quot;top&quot;,&quot;hotspot_position&quot;:null,&quot;hotspot_tooltip_width&quot;:null,&quot;hotspot_tooltip_text_wrap&quot;:null},{&quot;hotspot_label&quot;:&quot;Australia&quot;,&quot;hotspot_icon&quot;:{&quot;value&quot;:&quot;fas fa-map-marker-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;hotspot_icon_spacing&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;hotspot_custom_size&quot;:&quot;&quot;,&quot;hotspot_tooltip_content&quot;:&quot;&lt;p&gt;Sydney, Australia&lt;\/p&gt;&quot;,&quot;hotspot_offset_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:85,&quot;sizes&quot;:[]},&quot;hotspot_offset_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:88,&quot;sizes&quot;:[]},&quot;hotspot_offset_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:75,&quot;sizes&quot;:[]},&quot;hotspot_offset_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:85,&quot;sizes&quot;:[]},&quot;hotspot_tooltip_position&quot;:&quot;&quot;,&quot;_id&quot;:&quot;8e24f56&quot;,&quot;hotspot_link&quot;:{&quot;url&quot;:&quot;&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;hotspot_icon_position&quot;:&quot;start&quot;,&quot;hotspot_width&quot;:null,&quot;hotspot_height&quot;:null,&quot;hotspot_horizontal&quot;:&quot;left&quot;,&quot;hotspot_vertical&quot;:&quot;top&quot;,&quot;hotspot_position&quot;:null,&quot;hotspot_tooltip_width&quot;:null,&quot;hotspot_tooltip_text_wrap&quot;:null}],&quot;hotspot_sequenced_animation&quot;:&quot;yes&quot;,&quot;hotspot_sequenced_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:400,&quot;sizes&quot;:[]},&quot;tooltip_trigger&quot;:&quot;mouseenter&quot;,&quot;tooltip_position&quot;:&quot;bottom&quot;,&quot;tooltip_animation&quot;:&quot;e-hotspot--fade-in-out&quot;}" data-widget_type="hotspot.default">
                        <div class="elementor-widget-container">
                            <link rel="stylesheet" href="wp-content/plugins/elementor-pro/assets/css/widget-hotspot.min.css"><img fetchpriority="high" decoding="async" width="2000" height="1176" src="https://www.carlane.hocud.com/wp-content/uploads/2022/08/free-blank-map-of-asia.png" class="attachment-full size-full" alt="" srcset="https://www.carlane.hocud.com/wp-content/uploads/2022/08/free-blank-map-of-asia.png 2000w, https://www.carlane.hocud.com/wp-content/uploads/2022/08/free-blank-map-of-asia-300x176.png 300w, https://www.carlane.hocud.com/wp-content/uploads/2022/08/free-blank-map-of-asia-1024x602.png 1024w, https://www.carlane.hocud.com/wp-content/uploads/2022/08/free-blank-map-of-asia-768x452.png 768w, https://www.carlane.hocud.com/wp-content/uploads/2022/08/free-blank-map-of-asia-1536x903.png 1536w, https://www.carlane.hocud.com/wp-content/uploads/2022/08/free-blank-map-of-asia-800x470.png 800w" sizes="(max-width: 2000px) 100vw, 2000px" />
                            <div class="e-hotspot elementor-repeater-item-72c9c06 e-hotspot--sequenced e-hotspot--position-left e-hotspot--position-top  ">

                                <div class="e-hotspot__button e-hotspot--expand">
                                    <div class="e-hotspot__icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="e-hotspot__label">USA</div>
                                </div>

                                <div class="e-hotspot__tooltip  e-hotspot--tooltip-position e-hotspot--fade-in-out " >
                                    <p>New York, USA</p>					</div>

                            </div>


                            <div class="e-hotspot elementor-repeater-item-46c9fba e-hotspot--sequenced e-hotspot--position-left e-hotspot--position-top  ">

                                <div class="e-hotspot__button e-hotspot--expand">
                                    <div class="e-hotspot__icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="e-hotspot__label">UK</div>
                                </div>

                                <div class="e-hotspot__tooltip  e-hotspot--tooltip-position e-hotspot--fade-in-out " >
                                    <p>London, UK</p>					</div>

                            </div>


                            <div class="e-hotspot elementor-repeater-item-d39af0b e-hotspot--sequenced e-hotspot--position-left e-hotspot--position-top  ">

                                <div class="e-hotspot__button e-hotspot--expand">
                                    <div class="e-hotspot__icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="e-hotspot__label">Brazil</div>
                                </div>

                                <div class="e-hotspot__tooltip  e-hotspot--tooltip-position e-hotspot--fade-in-out " >
                                    <p>Brasilia, Brazil</p>					</div>

                            </div>


                            <div class="e-hotspot elementor-repeater-item-6d652e5 e-hotspot--sequenced e-hotspot--position-left e-hotspot--position-top  ">

                                <div class="e-hotspot__button e-hotspot--expand">
                                    <div class="e-hotspot__icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="e-hotspot__label">South Africa</div>
                                </div>

                                <div class="e-hotspot__tooltip  e-hotspot--tooltip-position e-hotspot--fade-in-out " >
                                    <p>Cape Town, South Africa</p>					</div>

                            </div>


                            <div class="e-hotspot elementor-repeater-item-236b2cc e-hotspot--sequenced e-hotspot--position-left e-hotspot--position-top  ">

                                <div class="e-hotspot__button e-hotspot--expand">
                                    <div class="e-hotspot__icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="e-hotspot__label">Bangladesh</div>
                                </div>

                                <div class="e-hotspot__tooltip  e-hotspot--tooltip-position e-hotspot--fade-in-out " >
                                    <p>Dhaka, Bangladesh</p>					</div>

                            </div>


                            <div class="e-hotspot elementor-repeater-item-c2a94d1 e-hotspot--sequenced e-hotspot--position-left e-hotspot--position-top  ">

                                <div class="e-hotspot__button e-hotspot--expand">
                                    <div class="e-hotspot__icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="e-hotspot__label">Russia</div>
                                </div>

                                <div class="e-hotspot__tooltip  e-hotspot--tooltip-position e-hotspot--fade-in-out " >
                                    <p>Moscow, Russia</p>					</div>

                            </div>


                            <div class="e-hotspot elementor-repeater-item-8e24f56 e-hotspot--sequenced e-hotspot--position-left e-hotspot--position-top  ">

                                <div class="e-hotspot__button e-hotspot--expand">
                                    <div class="e-hotspot__icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="e-hotspot__label">Australia</div>
                                </div>

                                <div class="e-hotspot__tooltip  e-hotspot--tooltip-position e-hotspot--fade-in-out " >
                                    <p>Sydney, Australia</p>					</div>

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
<link rel='stylesheet' id='elementor-post-1131-css' href="{{url('front/wp-content/uploads/elementor/css/post-1131.css?ver=1661241040')}}" media='all' />
<link rel="stylesheet" href="{{url('front/wp-content/plugins/elementor-pro/assets/css/widget-hotspot.min.css')}}">
@endsection
