<!-- SIDE MENU BAR -->
    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"  data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
        <div class="app-sidebar-header d-flex flex-stack d-none d-lg-flex pt-6 pb-2" id="kt_app_sidebar_header">
            <!--begin::Logo-->
            <a href="https://www.vira.vn/" class="app-sidebar-logo">
                <img src="{{URL::asset('img/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo">
                <img src="{{URL::asset('img/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Admintro logo">

            </a>
            <!--end::Logo-->

            <!--begin::Sidebar toggle-->
            <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-sm btn-icon bg-light btn-color-gray-700 btn-active-color-primary d-none d-lg-flex rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
                <i class="ki-outline ki-text-align-right rotate-180 fs-1"></i>
            </div>
            <!--end::Sidebar toggle-->
        </div>

        <!--begin::Separator-->
            <div class="app-sidebar-separator separator"></div>
        <!--end::Separator-->

        <!--begin::Navs-->
        <div class="app-sidebar-navs flex-column-fluid py-6 app-sidebar3" id="kt_app_sidebar_navs">
            <div id="kt_app_sidebar_navs_wrappers" class="app-sidebar-wrapper hover-scroll-y " data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header" data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">
                <!--begin::Teams-->
                     <!--begin::Heading Admin Dashboard-->
                        <div class="app-sidebar-menu-secondary menu menu-rounded menu-column">
                        
                        <div class="menu-item mb-2">
                            <li class="side-item side-item-category menu-heading text-uppercase fs-7 fw-bold">{{ __('Admin Dashboard') }}</li>
                        </div>

                        <!--begin:Menu item Dashboard-->
                        <li class="menu-item ">
                            <!--begin:Menu link-->  
                                <a class="menu-link" href="{{route('admin.dashboard') }}">
                                    <span class="menu-icon">
                                        <i class="side-menu__icon fa fa-th-large fs-2"></i>											
                                    </span>
                                    <span class="menu-title">{{ __('Dashboard') }}</span>
                                </a>
                            <!--end:Menu link-->
                        </li>
                    <!--end:Menu item-->
                    <div class="app-sidebar-separator separator"></div>
                    </div>
                <!--end::Teams-->
                <!--begin::Sidebar menu-->
                @role('admin')        
                    <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary">
                        <!--begin::Heading Admin Panel-->
                        <div class="menu-item mb-2">
                            <li class="side-item side-item-category menu-heading text-uppercase fs-7 fw-bold">{{ __('Admin Panel') }}</li>
                        </div>
                        <!--end::Heading-->

                        <!--begin:Menu item TTS Management-->
                            <li data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="side-menu__icon enlarge lead-3 fa fa-magic fs-2"></i>
                                    </span>
                                    <span class="menu-title">{{ __('TTS Management') }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub TTS Dashboard-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.tts.dashboard') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('TTS Dashboard') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Synthesized TTS Results-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.tts.results') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Synthesized TTS Results') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub TTS Configuration-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.tts.configs') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('TTS Configuration') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </li>
                        <!--end:Menu item-->

                        <!--begin:Menu item User Management-->
                            <li data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="side-menu__icon mdi mdi-account-convert fs-2"></i>
                                    </span>
                                    <span class="menu-title">{{ __('User Management') }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub User Dashboard-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item -->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <div class="menu-item ">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.user.dashboard') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">{{ __('User Dashboard') }}</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->      
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub User List-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item -->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.user.list') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('User List') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Activity Monitoring-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.user.activity') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Activity Monitoring') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </li>
                        <!--end:Menu item-->

                        <!--begin:Menu item Finance Management-->
                            <li data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="side-menu__icon enlarge fa fa-google-wallet fs-2"></i>
                                    </span>
                                    <span class="menu-title">{{ __('Finance Management') }}</span>
                                    @if (auth()->user()->unreadNotifications->where('type', 'App\Notifications\PayoutRequestNotification')->count())
                                        <span class="badge badge-light-warning">{{ auth()->user()->unreadNotifications->where('type', 'App\Notifications\PayoutRequestNotification')->count() }}</span>
                                    @else
                                        {{-- <i class="angle fa fa-angle-right"></i> --}}
                                    @endif
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub Finance Dashboard-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.finance.dashboard') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Finance Dashboard') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub All Payments-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.finance.payments') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('All Payments') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub All Subscriptions-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.finance.payments.subscriptions') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('All Subscriptions') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Subscription Plans-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.finance.subscriptions') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Subscription Plans') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Prepaid Plans-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.finance.prepaid') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Prepaid Plans') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Promocodes-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.finance.promocodes') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Promocodes') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Referral System-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.referral.settings') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Referral System') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Referral Payouts-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.referral.payouts') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Referral Payouts') }}</span>
                                                @if ((auth()->user()->unreadNotifications->where('type', 'App\Notifications\PayoutRequestNotification')->count()))
                                                    <span class="badge badge-warning ml-5">{{ auth()->user()->unreadNotifications->where('type', 'App\Notifications\PayoutRequestNotification')->count() }}</span>
                                                @endif
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Payment Settings-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.finance.settings') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Payment Settings') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                            </li>
                        <!--end:Menu item-->

                        <!--begin:Menu item Support Requests-->
                            <li class="menu-item menu-accordion">
                                <!--begin:Menu link-->  
                                    <a class="menu-link" href="{{route('admin.support') }}">
                                        <span class="menu-icon">
                                            <i class="side-menu__icon mdi mdi-account-alert fs-2"></i>											
                                        </span>
                                        <span class="menu-title">{{ __('Support Requests') }}</span>
                                        @if (App\Models\Support::where('status', 'Open')->count())
                                            <span class="badge badge-warning">{{ App\Models\Support::where('status', 'Open')->count() }}</span>
                                        @endif
                                    </a>
                                <!--end:Menu link-->
                            </li>
                        <!--end:Menu item-->
                        
                        <!--begin:Menu item Notifications-->
                            <li data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="side-menu__icon mdi mdi-upload-network fs-2"></i>											
                                    </span>
                                    <span class="menu-title">{{ __('Notifications') }}</span>
                                    @if (auth()->user()->unreadNotifications->where('type', '<>', 'App\Notifications\GeneralNotification')->count())
                                        <span class="badge badge-warning" id="total-notifications-a"></span>
                                    @else
                                        <i class="angle fa fa-angle-down"></i>
                                    @endif
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu sub User Dashboard-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item Mass Notifications -->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <div class="menu-item ">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.notifications') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">{{ __('Mass Notifications') }}</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->      
                                        </div>
                                        <!--end:Menu item-->

                                        <!--begin:Menu item Mass Notifications -->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <div class="menu-item ">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.notifications.system') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">{{ __('System Notifications') }}</span>
                                                    @if ((auth()->user()->unreadNotifications->where('type', '<>', 'App\Notifications\GeneralNotification')->count()))
                                                        <span class="badge badge-warning ml-5" id="total-notifications-b"></span>
                                                    @endif
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->      
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                </div>
                                <!--end:Menu sub-->
                            </li>
                        <!--end:Menu item-->

                        <!--begin:Menu item General Settings-->
                            <li data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="side-menu__icon enlarge fa fa-cogs fs-2"></i>
                                    </span>
                                    <span class="menu-title">{{ __('General Settings') }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub Global Settings-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item -->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.settings.global') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Global Settings') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Appearance-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item -->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.settings.appearance') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Appearance') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Frontend Settings-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.settings.frontend') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Frontend Settings') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Blogs Manager-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.settings.blog') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Blogs Manager') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Auth Settings-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.settings.oauth') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Auth Settings') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Registration Settings-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.settings.registration') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Registration Settings') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub SMTP Settings-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.settings.smtp') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('SMTP Settings') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Invoice Settings-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.settings.invoice') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Invoice Settings') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Database Backup-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.settings.backup') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Database Backup') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Activation-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('admin.settings.activation') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Activation') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                            </li>
                        <!--end:Menu item-->

                        <!--begin::Separator-->
                            <div class="app-sidebar-separator separator"></div>
                        <!--end::Separator-->                      
                    </div>
                @endrole

                @role('user|subscriber')        
                    <hr class="slide-divider d-none">
                @endrole
                <!--begin::Heading User Panel-->
                    <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary">
                        <li class="menu-item mb-2">
                            {{-- <div class="menu-heading text-uppercase fs-7 fw-bold">User Panel</div> --}}
                            <li class=" side-item side-item-category menu-heading text-uppercase fs-7 fw-bold">{{ __('User Panel') }}</li>
                        </li>
                        <!--end::Heading-->

                        <!--begin:Menu item Text-to-Speech-->
                            <li class="menu-item menu-accordion">
                                <!--begin:Menu link-->  
                                    <a class="menu-link" href="{{route('user.tts') }}">
                                        <span class="menu-icon">
                                            <i class="side-menu__icon enlarge lead-3 fa fa-magic fs-2"></i>											
                                        </span>
                                        <span class="menu-title">{{ __('Text-to-Speech') }}</span>
                                    </a>
                                <!--end:Menu link-->
                            </li>
                        <!--end:Menu item-->

                        <!--begin:Menu item All Voices-->
                            <li class="menu-item menu-accordion">
                                <!--begin:Menu link-->  
                                    <a class="menu-link" href="{{route('user.tts.voices') }}">
                                        <span class="menu-icon">
                                            <i class="side-menu__icon mdi mdi-access-point fs-2"></i>											
                                        </span>
                                        <span class="menu-title">{{ __('All Voices') }}</span>
                                    </a>
                                <!--end:Menu link-->
                            </li>
                        <!--end:Menu item-->

                        <!--begin:Menu item My Balance-->
                            <li data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="side-menu__icon enlarge fa fa-google-wallet fs-2"></i>
                                    </span>
                                    <span class="menu-title">{{ __('My Balance') }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub Subscribe Now-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item -->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('user.subscriptions') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Subscribe Now') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub My Subscriptions-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item -->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('user.balance.subscriptions') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('My Subscriptions') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub My Payments-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('user.balance.payments') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('My Payments') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub My Referrals-->
                                @if (config('payment.referral.enabled')  == 'on')
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <div class="menu-item ">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('user.referral') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">{{ __('My Referrals') }}</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->      
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                @endif
                                <!--end:Menu sub-->

                                <!--begin:Menu sub My Balance Dashboard-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('user.balance') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('My Balance Dashboard') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                            </li>
                        <!--end:Menu item-->

                        <!--begin:Menu item Service-->
                            <li data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="side-menu__icon enlarge fa fa-google-wallet fs-2"></i>
                                    </span>
                                    <span class="menu-title">{{ __('Service') }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->

                                <!--begin:Menu sub Get Like Post-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item -->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('user.service.facebook.likepost') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Get Like Post') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub MGet Like Page-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item -->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('user.service.facebook.likepage') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Get Like Page') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Get Follow-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('user.service.facebook.follow') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Get Follow') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Get Share-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('user.service.facebook.share') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Get Share') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub Get Comment-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('user.service.facebook.comment') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Get Comment') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                            </li>
                        <!--end:Menu item-->

                        <!--begin:Menu item My TTS Audio Results-->
                            <li class="menu-item menu-accordion">
                                <!--begin:Menu link-->  
                                    <a class="menu-link" href="{{route('user.tts.results') }}">
                                        <span class="menu-icon">
                                            <i class="side-menu__icon mdi mdi-audiobook fs-2"></i>											
                                        </span>
                                        <span class="menu-title">{{ __('My TTS Audio Results') }}</span>
                                    </a>
                                <!--end:Menu link-->
                            </li>
                        <!--end:Menu item-->

                        <!--begin:Menu item My Profile Settings-->
                            <li data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="side-menu__icon mdi mdi-account-settings-variant fs-2"></i>
                                    </span>
                                    <span class="menu-title">{{ __('My Profile Settings') }}</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub My Profile-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('user.profile') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('My Profile') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->

                                <!--begin:Menu sub  Change Password-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <div class="menu-item ">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('user.password') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ __('Change Password') }}</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->      
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </li>
                        <!--end:Menu item-->

                        <!--begin:Menu item Support Request-->
                            <li class="menu-item menu-accordion">
                                <!--begin:Menu link-->  
                                    <a class="menu-link" href="{{route('user.support') }}">
                                        <span class="menu-icon">
                                            <i class="side-menu__icon mdi mdi-account-alert fs-2"></i>											
                                        </span>
                                        <span class="menu-title">{{ __('Support Request') }}</span>
                                    </a>
                                <!--end:Menu link-->
                            </li>
                        <!--end:Menu item-->

                        <!--begin:Menu item Notifications-->
                            <li class="menu-item menu-accordion">
                                <!--begin:Menu link-->  
                                <a class="menu-link" href="{{route('user.notifications') }}">
                                    <span class="menu-icon">
                                        <i class="side-menu__icon mdi mdi-upload-network fs-2"></i>											
                                    </span>
                                    <span class="menu-title">{{ __('Notifications') }}</span>
                                    @if (auth()->user()->unreadNotifications->where('type', 'App\Notifications\GeneralNotification')->count())
                                        <span class="badge badge-warning">{{ auth()->user()->unreadNotifications->where('type', 'App\Notifications\GeneralNotification')->count() }}</span>
                                    @endif
                                </a>
                                <!--end:Menu link-->
                            </li>
                        <!--end:Menu item-->
                    </div>
                <!--end::Sidebar menu-->

                @role('user')
                    <div class="aside-progress-position">
                        <div class="d-flex">
                            <span class="fs-10 text-muted pl-5">{{ App\Services\HelperService::formatTotalChars(auth()->user()->available_chars) }} of {{ App\Services\HelperService::formatTotalChars(config('tts.free_chars')) }} chars left</span>
                        </div>
                        <div class="progress h-15 mt-1 aside-progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: {{ App\Services\HelperService::getPercentage(auth()->user()->available_chars, config('tts.free_chars')) }}%" role="progressbar" aria-valuenow="{{ auth()->user()->available_chars }}" aria-valuemin="0" aria-valuemax="{{ config('tts.free_chars') }}"></div>
                        </div>
                    </div>
                @endrole

                @role('subscriber')
                    <div class="aside-progress-position">
                        <div class="d-flex">
                            <span class="fs-10 text-muted pl-5">{{ App\Services\HelperService::formatTotalChars(auth()->user()->available_chars) }} of {{ App\Services\HelperService::getTotalCharsFormatted() }} chars left</span>
                        </div>
                        <div class="progress h-15 mt-1 aside-progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: {{ App\Services\HelperService::getPercentage(auth()->user()->available_chars, App\Services\HelperService::getTotalChars()) }}%" role="progressbar" aria-valuenow="{{ auth()->user()->available_chars }}" aria-valuemin="0" aria-valuemax="{{ App\Services\HelperService::getTotalChars() }}"></div>
                        </div>
                    </div>
                @endrole
            </div>
        </div>
        <!--end::Navs-->
    </div>
<!-- END SIDE MENU BAR 


