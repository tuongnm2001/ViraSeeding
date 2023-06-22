{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<!-- METADATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="" name="description">
		<meta content="" name="author">
		<meta name="keywords" content=""/>
		
        <!-- CSRF TOKEN -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- TITLE -->
        <title>{{ config('app.name', 'Polly') }}</title>
        
        @include('layouts.header')

	</head>

	<body class="app sidebar-mini">

		<!-- LOADER -->
		<div id="global-loader" >
			<img src="{{URL::asset('img/svgs/loader.svg')}}" alt="loader">           
		</div>
		<!-- END LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				@include('layouts.nav-aside')

				<!-- APP CONTENT -->			
				<div class="app-content main-content">

					<div class="side-app">

						@include('layouts.nav-top')

                        @include('layouts.flash')

						@yield('page-header')

						@yield('content')						

                    </div>                   
                </div>
                <!-- END APP CONTENT -->

                @include('layouts.footer')                

            </div>		
        </div>
		<!-- END PAGE -->
        
		@include('layouts.footer-scripts')        

	</body>

</html> --}}

<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		<title>{{ config('app.name', 'Polly') }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{ asset('/assets/media/logos/vira-favicon.png') }}" />
		
		<!--Sidemenu css -->
		<link href="{{URL::asset('css/sidemenu.css')}}" rel="stylesheet">
		
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{ URL::asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ URL::asset('/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::asset('/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>		
		
		@include('layouts.header')
		
	</head>

	<!--end::Head-->
	<!--begin::Body-->
	<body class="app sidebar-mini" id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" >
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid " id="kt_app_wrapper">

					<!--begin::Sidebar-->

					<!-- LOADER -->
						<div id="global-loader" >
							<img src="{{URL::asset('img/svgs/loader.svg')}}" alt="loader">           
						</div>
					<!-- END LOADER -->

					<!--begin::Main-->
					<div class="page">
						<div  style="padding: 20px 2rem 0 2rem">
							@include('layouts.nav-aside')
							<div class="app-content main-content app-page flex-column flex-column-fluid" id="kt_app_page">
									@include('layouts.nav-top')
									@include('layouts.flash')

									@yield('page-header')
									@yield('content')
							</div>
							@include('layouts.footer')                			
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ URL::asset('/assets/plugins/global/plugins.bundle.js') }}"></script> 
		<script src="{{ URL::asset('/assets/js/scripts.bundle.js') }}"></script> 
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{ URL::asset('/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ URL::asset('/assets/js/custom/apps/user-management/users/list/table.js') }}"></script>
		<script src="{{ URL::asset('/assets/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
		<script src="{{ URL::asset('/assets/js/custom/apps/user-management/users/list/add.js') }}"></script>
		<script src="{{ URL::asset('/assets/js/widgets.bundle.js') }}"></script>
		<script src="{{ URL::asset('/assets/js/custom/widgets.js') }}"></script>
		<script src="{{ URL::asset('/assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ URL::asset('/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ URL::asset('/assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
		<script src="{{ URL::asset('/assets/js/custom/utilities/modals/users-search.js') }}"></script>
		@include('layouts.footer-scripts')        

		
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html><

 