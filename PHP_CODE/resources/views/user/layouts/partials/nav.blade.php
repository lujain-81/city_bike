@if(Session::has('flash_message'))
    <div style="background: #39b54a;color: #FFF;padding: 10px; text-align:center;">{{Session::get('flash_message')}}</div>
@endif
<div data-elementor-type="header" data-elementor-id="53" class="elementor elementor-53 elementor-location-header">
    <section
            class="elementor-section elementor-top-section elementor-element elementor-element-0af8d4c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="0af8d4c" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-770c928"
                 data-id="770c928" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-232ed8c elementor-icon-list--layout-inline elementor-align-left elementor-widget__width-initial elementor-mobile-align-center elementor-widget-mobile__width-inherit elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                         data-id="232ed8c" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">

                            <ul class="elementor-icon-list-items elementor-inline-items">
                                <li class="elementor-icon-list-item elementor-inline-item">
														<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-envelope"></i>						</span>
                                    <span class="elementor-icon-list-text">{{ $settings->Email }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7a89be2 elementor-icon-list--layout-inline elementor-align-right elementor-widget__width-initial elementor-mobile-align-center elementor-widget-mobile__width-inherit elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                         data-id="7a89be2" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items elementor-inline-items">

                                <li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-phone-square-alt"></i>						</span>
                                    <span class="elementor-icon-list-text">{{$settings->Phone}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
            class="elementor-section elementor-top-section elementor-element elementor-element-f6eaeba elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="f6eaeba" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-465bed5"
                 data-id="465bed5" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a6fd8c2 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-theme-site-logo elementor-widget-image"
                         data-id="a6fd8c2" data-element_type="widget" data-widget_type="theme-site-logo.default">
                        <div class="elementor-widget-container">

                            <a href="{{route('user.index')}}">
                                <img width="200" height="52" src="{{ url($settings->Logo) }}"
                                     class="attachment-full size-full" alt=""/> </a>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-8c2ec2b elementor-widget__width-initial elementor-nav-menu__align-center elementor-nav-menu--stretch elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                         data-id="8c2ec2b" data-element_type="widget"
                         data-settings="{&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-angle-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}"
                         data-widget_type="nav-menu.default">
                        <div class="elementor-widget-container">

                            <nav migration_allowed="1" migrated="0" role="navigation"
                                 class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-grow">
                                <ul id="menu-1-8c2ec2b" class="elementor-nav-menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3062"><a href="{{route('user.index')}}" class="elementor-item">Home</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3062"><a href="{{ route('user.vehicles') }}" class="elementor-item">Vehicles</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3062"><a href="{{route('user.spots')}}" class="elementor-item">Locations</a></li>
                                    @if(auth('customers')->check())
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3068">
                                        <a class="elementor-item">Welcome {{ auth('customers')->user()->Name }}</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3067">
                                                <a href="{{route('user.account')}}" class="elementor-sub-item">Account</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3077"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="elementor-sub-item">Logout</a></li>
                                        </ul>
                                    </li>
                                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @else
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3068">
                                        <a class="elementor-item">Welcome Guest</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3067">
                                                <a href="{{route('user.login')}}" class="elementor-sub-item">Login</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3077"><a href="{{route('user.register')}}" class="elementor-sub-item">Register</a></li>
                                        </ul>
                                    </li>
                                    @endif
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3062">
                                        <a href="{{route('user.checkout.index')}}" class="elementor-item">
                                            <span class="badgeCart"
                                                  id="cart-counter">{{Cart::count()}}
                                            </span>
                                            &nbsp
                                            <i style="font-size: 18px;" class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-3e74f99 elementor-align-right elementor-widget__width-initial elementor-mobile-align-justify elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-button"
                         data-id="3e74f99" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a href="{{route('user.vehicles')}}" class="elementor-button-link elementor-button elementor-size-sm"
                                   role="button">
						<span class="elementor-button-content-wrapper">
							<span class="elementor-button-icon elementor-align-icon-left">
				<i aria-hidden="true" class="fas fa-car"></i>			</span>
						<span class="elementor-button-text">Book Now</span>
		</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
