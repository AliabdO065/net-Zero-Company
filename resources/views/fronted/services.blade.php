@extends('fronted.layouts.layout')
@section('content')

<link rel='stylesheet' id='elementor-icons-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min192d.css?ver=5.23.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/css/frontend-lite.min8864.css?ver=3.17.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='swiper-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-8-css' href='{{asset('fronted/wp-content/uploads/sites/2/elementor/css/post-86991.css?ver=1699620461')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-1178-css' href='{{asset('fronted/wp-content/uploads/sites/2/elementor/css/post-1178ab3f.css?ver=1699621171')}}' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3')}}' type='text/css' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<script type='text/javascript' src='{{asset('fronted/wp-includes/js/jquery/jquery.min5aed.js?ver=3.6.4')}}' id='jquery-core-js'></script>
<script type='text/javascript' src='{{asset('fronted/wp-includes/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0')}}' id='jquery-migrate-js'></script>
<link rel="https://api.w.org/" href="{{asset('fronted/wp-json/index.html')}}" />
<link rel="alternate" type="application/json" href="{{asset('fronted/wp-json/wp/v2/pages/1178.json')}}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{asset('fronted/wp-includes/wlwmanifest.xml')}}" />
<meta name="generator" content="WordPress 6.2.3" />
<link rel="canonical" href="{{route('fronted.index')}}" />
<link rel='shortlink' href='../index5e52.html?p=1178' />
<link rel="alternate" type="application/json+oembed" href="{{asset('fronted/wp-json/oembed/1.0/embed01b3.json?url=https%3A%2F%2Fthemes.pixelwars.org%2Fenergify%2Fdemo-01%2Fservices%2F')}}" />
<link rel="alternate" type="text/xml+oembed" href="{{asset('fronted/wp-json/oembed/1.0/embed663c?url=https%3A%2F%2Fthemes.pixelwars.org%2Fenergify%2Fdemo-01%2Fservices%2F&amp;format=xml')}}" />
<meta name="generator" content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
<style id="wpforms-css-vars-root">
				:root {
					--wpforms-field-border-radius: 3px;
--wpforms-field-background-color: #ffffff;
--wpforms-field-border-color: rgba( 0, 0, 0, 0.25 );
--wpforms-field-text-color: rgba( 0, 0, 0, 0.7 );
--wpforms-label-color: rgba( 0, 0, 0, 0.85 );
--wpforms-label-sublabel-color: rgba( 0, 0, 0, 0.55 );
--wpforms-label-error-color: #d63637;
--wpforms-button-border-radius: 3px;
--wpforms-button-background-color: #066aab;
--wpforms-button-text-color: #ffffff;
--wpforms-field-size-input-height: 43px;
--wpforms-field-size-input-spacing: 15px;
--wpforms-field-size-font-size: 16px;
--wpforms-field-size-line-height: 19px;
--wpforms-field-size-padding-h: 14px;
--wpforms-field-size-checkbox-size: 16px;
--wpforms-field-size-sublabel-spacing: 5px;
--wpforms-field-size-icon-size: 1;
--wpforms-label-size-font-size: 16px;
--wpforms-label-size-line-height: 19px;
--wpforms-label-size-sublabel-font-size: 14px;
--wpforms-label-size-sublabel-line-height: 17px;
--wpforms-button-size-font-size: 17px;
--wpforms-button-size-height: 41px;
--wpforms-button-size-padding-h: 15px;
--wpforms-button-size-margin-top: 10px;

				}
			</style></head>

<body class="page-template page-template-elementor_header_footer page page-id-1178 qodef-qi--no-touch qi-addons-for-elementor-1.6.5 elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-1178">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>    <div id="page" class="hfeed site">
		        <header id="masthead" class="site-header" role="banner">
						<div class="header-wrap" data-parallax-video="">
				<div class="header-wrap-inner">
					<div class="site-branding">
						<div class="site-branding-wrap">
							<div class="site-branding-left">
															</div> <!-- .site-branding-left -->

							<div class="site-branding-center">
																				<h1 class="site-title" style="color: black">

												</h1> <!-- .site-title -->
																			<p class="site-description">
																	</p> <!-- .site-description -->
							</div> <!-- .site-branding-center -->
							<div class="site-branding-right">
															</div> <!-- .site-branding-right -->
						</div> <!-- .site-branding-wrap -->
					</div> <!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation site-navigation" role="navigation">
						<div class="menu-wrap">
							<div class="layout-medium" style="color: black">
                                <a class="menu-toggle">
                                    <span class="lines"></span>
                                    <a href="{{route('fronted.index')}}" rel="home" class="logo-img">
                                        <img src="{{asset('dashboard/assets/logo.png')}}">
                                    </a>
                                </a>
								<div class="nav-menu"><ul id="menu-main-menu" class=""><li id="menu-item-847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-847"><a href="{{route('fronted.index')}}">Home</a></li>
<li id="menu-item-1001" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1001"><a href="{{route('fronted.about')}}">About Us</a></li>
<li id="menu-item-1247" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1178 current_page_item menu-item-1247"><a href="{{route('fronted.services')}}" aria-current="page">Services</a></li>
<li id="menu-item-1729" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1729"><a href="{{route('fronted.projects')}}">Projects</a></li>
<li id="menu-item-6411" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6411"><a href="{{route('fronted.news')}}">News</a></li>
<li id="menu-item-1000" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1000"><a href="{{route('fronted.contact')}}">Contact</a></li>
</ul></div>											<a class="search-toggle toggle-link"></a>

											<div class="search-container">
												<div class="search-box">
													<form class="search-form" method="get" action="https://themes.pixelwars.org/energify/demo-01/">
														<label>
															<span>
																Search for															</span>
															<input type="search" id="search-field" name="s" placeholder="type and hit enter">
														</label>
														<input type="submit" class="search-submit" value="Search">
													</form> <!-- .search-form -->
												</div> <!-- .search-box -->
											</div> <!-- .search-container -->
																	</div> <!-- .layout-medium -->
						</div> <!-- .menu-wrap -->
					</nav> <!-- #site-navigation .main-navigation .site-navigation -->
				</div> <!-- .header-wrap-inner -->
			</div> <!-- .header-wrap -->
        </header> <!-- #masthead .site-header -->		<div data-elementor-type="wp-page" data-elementor-id="1178" class="elementor elementor-1178">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-7e28c20 elementor-section-full_width elementor-section-stretched elementor-section-height-min-height elementor-section-items-top elementor-section-height-default" data-id="7e28c20" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1abe6488" data-id="1abe6488" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-50ce120d elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-prime-slider-general" data-id="50ce120d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="prime-slider-general.default">
				<div class="elementor-widget-container">
					<div class="bdt-prime-slider">
			<div class="bdt-prime-slider-skin-general">
				<div class="bdt-position-relative bdt-visible-toggle" bdt-slideshow="{&quot;animation&quot;:&quot;fade&quot;,&quot;ratio&quot;:&quot;16:5&quot;,&quot;min-height&quot;:480,&quot;autoplay&quot;:true,&quot;autoplay-interval&quot;:7000,&quot;pause-on-hover&quot;:false,&quot;draggable&quot;:true,&quot;velocity&quot;:1,&quot;finite&quot;:false}" data-settings="{&quot;id&quot;:&quot;#bdt-50ce120d&quot;,&quot;animation_status&quot;:&quot;no&quot;}" id="bdt-50ce120d">
					<ul class="bdt-slideshow-items">

			<li class="bdt-slideshow-item bdt-flex bdt-flex-middle bdt-flex-center elementor-repeater-item-2e35a47">
									<div class="bdt-position-cover bdt-animation-kenburns bdt-animation-reverse bdt-transform-origin-center-left">

						<?php
								$imagePath = ($main["img1"]);
								$img1 = str_replace('\\', '/', $imagePath);

								$imagePath = ($main["img2"]);
								$img2 = str_replace('\\', '/', $imagePath);
						?>
		<div class="bdt-ps-slide-img" style="background-image: url('{{asset($img1)}}')"></div>


										</div>


						<div class="bdt-position-z-index bdt-position-large">
			<div class="bdt-prime-slider-wrapper">
				<div class="bdt-prime-slider-content">
					<div class="bdt-prime-slider-desc">

						<div data-bdt-slideshow-parallax="x: 150,0,-30; opacity: 1,1,0">
							<div class="bdt-btn-wrapper">

									</div>
						</div>
					</div>


				</div>
			</div>
		</div>
					</li>


			<li class="bdt-slideshow-item bdt-flex bdt-flex-middle bdt-flex-center elementor-repeater-item-36bf7a5">
									<div class="bdt-position-cover bdt-animation-kenburns bdt-animation-reverse bdt-transform-origin-center-left">


		<div class="bdt-ps-slide-img" style="background-image: url('{{asset($img2)}}')"></div>


										</div>


						<div class="bdt-position-z-index bdt-position-large">
			<div class="bdt-prime-slider-wrapper">
				<div class="bdt-prime-slider-content bdt-prime-slider-content">
					<div class="bdt-prime-slider-desc">




						<div data-bdt-slideshow-parallax="x: 150,0,-30; opacity: 1,1,0">
							<div class="bdt-btn-wrapper">

									</div>
						</div>
					</div>


				</div>
			</div>
		</div>
					</li>


			<li class="bdt-slideshow-item bdt-flex bdt-flex-middle bdt-flex-center elementor-repeater-item-ecf576a">
									<div class="bdt-position-cover bdt-animation-kenburns bdt-animation-reverse bdt-transform-origin-center-left">


		<div class="bdt-ps-slide-img" style="background-image: url('{{asset($img1)}}')"></div>


										</div>


						<div class="bdt-position-z-index bdt-position-large">
			<div class="bdt-prime-slider-wrapper">
				<div class="bdt-prime-slider-content bdt-prime-slider-content bdt-prime-slider-content">
					<div class="bdt-prime-slider-desc">




						<div data-bdt-slideshow-parallax="x: 150,0,-30; opacity: 1,1,0">
							<div class="bdt-btn-wrapper">

									</div>
						</div>
					</div>


				</div>
			</div>
		</div>
					</li>


					</ul>




						</div>
											</div>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3feb1420 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3feb1420" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-766d3ef2" data-id="766d3ef2" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-238c7473 elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="238c7473" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-animated-text qodef--animated-by-letter qodef--alignment-left qodef-qi--has-appear qodef--appear-from-right" >
				<h1 class="qodef-m-title">
					<?php
					$header = explode(' ', $main['header'] );
					?>
					@foreach ($header as $item)
					<span class="qodef-e-word-holder">{{$item}}</span>
					@endforeach
			</h1>
</div>
		</div>
				</div>
					</div>
		</div>


			<?php

			$allservices = explode(',', $main['services'] );
			?>
			@for ($i = 0; $i < count($allservices); $i++)


				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-15bbccf4" data-id="15bbccf4" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-30894f72 animated-slow elementor-mobile-align-left elementor-align-left elementor-widget__width-initial elementor-tablet-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list" data-id="30894f72" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;300&quot;}" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
			<link rel="stylesheet" href="{{asset('fronted/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css')}}">		<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-plus"></i>						</span>
										<span class="elementor-icon-list-text">{{$allservices[$i]}} </span>
											</a>
									</li>
									@for ($k = 1; $k < count($allservices)/2 ; $k++)

									@isset($allservices[$i+1])
									<li class="elementor-icon-list-item">
										<a href="#">

											<span class="elementor-icon-list-icon">
						<i aria-hidden="true" class="fas fa-plus"></i>						</span>
									<span class="elementor-icon-list-text">{{$allservices[$i+1]}}</span>
										</a>
								</li>
											<?php $i++  ?>
								@endisset
								@endfor

						</ul>
				</div>
				</div>
					</div>
		</div>
		@endfor


							</div>
		</section>




		{{--  --}}
		@if ( !empty($services[0]))
		@for ($i = 0; $i < count($services) ; $i++)

		<?php
				$string = $services[$i];
				$pairs = explode('#x#', $string);
				$slide = [];
				foreach ($pairs as $pair) {
					list($key, $value) = explode('=#=', $pair);
					$slide[$key] = $value;
				}
				if($slide['status']=='disappear') continue;
		?>

		<section class="elementor-section elementor-top-section elementor-element elementor-element-2fbc50d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2fbc50d8" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7e16fdc7" data-id="7e16fdc7" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-75077b56 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="75077b56" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.17.0 - 08-11-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style>
<h2 class="elementor-heading-title elementor-size-default">
	{{$slide['header']}}</h2>
	</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-7acd23ad elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7acd23ad" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-67d651ca" data-id="67d651ca" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6fd2b981 elementor-widget elementor-widget-qi_addons_for_elementor_separator" data-id="6fd2b981" data-element_type="widget" data-widget_type="qi_addons_for_elementor_separator.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-separator qodef-qi-clear qodef-separator--standard ">
	<div class="qodef-m-line"></div>
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-68666021 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="68666021" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-78734e8" data-id="78734e8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-ac33930 animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_parallax_images" data-id="ac33930" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="qi_addons_for_elementor_parallax_images.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-parallax-images qodef-layout--default">
	<div class="qodef-m-images">
		<div class="qodef-e-main-image-holder">
			<div class="qodef-e-main-image-zoom-holder">
									<div class="qodef-e-main-image" data-parallax-main="100">
						<img width="1300" height="1280" src="{{asset($slide['img'])}}" class="attachment-qi_addons_for_elementor_image_size_huge-square size-qi_addons_for_elementor_image_size_huge-square" alt="" decoding="async" loading="lazy" />					</div>
							</div>
		</div>
													<div class="qodef-e-parallax-image qodef-position--bottom-left elementor-repeater-item-93b473e" >
									</div>
						</div>
</div>
		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-10686482" data-id="10686482" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-69b7e1cc animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_accordion" data-id="69b7e1cc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="qi_addons_for_elementor_accordion.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-accordion qodef-qi-clear qodef-behavior--accordion qodef-layout--simple qodef-style--border-between qodef-height--content">
	<h3 class="qodef-e-title-holder">
	<span class="qodef-e-title">{{$slide['title1']}}</span>
	<span class="qodef-e-mark">
		<span class="qodef-icon--plus">
				<span class="qodef-e-icon">
		<i aria-hidden="true" class="fas fa-plus"></i>	</span>
			</span>
		<span class="qodef-icon--minus">
				<span class="qodef-e-icon">
		<i aria-hidden="true" class="fas fa-minus"></i>	</span>
			</span>
	</span>
</h3>
<div class="qodef-e-content">
	<div class="qodef-e-content-inner">
		<p>{{$slide['contenttitle1']}}</p>	</div>
</div>
<h3 class="qodef-e-title-holder">
	<span class="qodef-e-title">{{$slide['title2']}}</span>
	<span class="qodef-e-mark">
		<span class="qodef-icon--plus">
				<span class="qodef-e-icon">
		<i aria-hidden="true" class="fas fa-plus"></i>	</span>
			</span>
		<span class="qodef-icon--minus">
				<span class="qodef-e-icon">
		<i aria-hidden="true" class="fas fa-minus"></i>	</span>
			</span>
	</span>
</h3>
<div class="qodef-e-content">
	<div class="qodef-e-content-inner">
		<p>{{$slide['contenttitle2']}}</p>	</div>
</div>
<h3 class="qodef-e-title-holder">
	<span class="qodef-e-title">{{$slide['title3']}}</span>
	<span class="qodef-e-mark">
		<span class="qodef-icon--plus">
				<span class="qodef-e-icon">
		<i aria-hidden="true" class="fas fa-plus"></i>	</span>
			</span>
		<span class="qodef-icon--minus">
				<span class="qodef-e-icon">
		<i aria-hidden="true" class="fas fa-minus"></i>	</span>
			</span>
	</span>
</h3>
<div class="qodef-e-content">
	<div class="qodef-e-content-inner">
		<p>{{$slide['contenttitle3']}}</p>	</div>
</div>
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>

{{--  --}}
@isset($services[$i+1])

	<?php
				$string = $services[$i+1];
				$pairs = explode('#x#', $string);
				$slide = [];
				foreach ($pairs as $pair) {
					list($key, $value) = explode('=#=', $pair);
					$slide[$key] = $value;
				}
				if($slide['status']=='disappear') continue; $i++ ;
		?>

				<section class="elementor-section elementor-top-section elementor-element elementor-element-1cbb8f14 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1cbb8f14" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-39a2e09f" data-id="39a2e09f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-332fc016 elementor-widget elementor-widget-heading" data-id="332fc016" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{$slide['header']}}</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-72224467 elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_accordion" data-id="72224467" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="qi_addons_for_elementor_accordion.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-accordion qodef-qi-clear qodef-behavior--accordion qodef-layout--simple qodef-style--border-between qodef-height--content">
	<h3 class="qodef-e-title-holder">
	<span class="qodef-e-title">{{$slide['title1']}}</span>
	<span class="qodef-e-mark">
		<span class="qodef-icon--plus">
				<span class="qodef-e-icon">
		<i aria-hidden="true" class="fas fa-plus"></i>	</span>
			</span>
		<span class="qodef-icon--minus">
				<span class="qodef-e-icon">
		<i aria-hidden="true" class="fas fa-minus"></i>	</span>
			</span>
	</span>
</h3>
<div class="qodef-e-content">
	<div class="qodef-e-content-inner">
		<p>{{$slide['contenttitle1']}}</p>	</div>
</div>
<h3 class="qodef-e-title-holder">
	<span class="qodef-e-title">{{$slide['title2']}}</span>
	<span class="qodef-e-mark">
		<span class="qodef-icon--plus">
				<span class="qodef-e-icon">
		<i aria-hidden="true" class="fas fa-plus"></i>	</span>
			</span>
		<span class="qodef-icon--minus">
				<span class="qodef-e-icon">
		<i aria-hidden="true" class="fas fa-minus"></i>	</span>
			</span>
	</span>
</h3>
<div class="qodef-e-content">
	<div class="qodef-e-content-inner">
		<p>{{$slide['contenttitle2']}}</p>	</div>
</div>
<h3 class="qodef-e-title-holder">
	<span class="qodef-e-title">{{$slide['title3']}}</span>
	<span class="qodef-e-mark">
		<span class="qodef-icon--plus">
				<span class="qodef-e-icon">
		<i aria-hidden="true" class="fas fa-plus"></i>	</span>
			</span>
		<span class="qodef-icon--minus">
				<span class="qodef-e-icon">
		<i aria-hidden="true" class="fas fa-minus"></i>	</span>
			</span>
	</span>
</h3>
<div class="qodef-e-content">
	<div class="qodef-e-content-inner">
		<p>{{$slide['contenttitle3']}}</p>	</div>
</div>
</div>
		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5353353f" data-id="5353353f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-1ced4aed animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_parallax_images" data-id="1ced4aed" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="qi_addons_for_elementor_parallax_images.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-parallax-images qodef-layout--default">
	<div class="qodef-m-images">
		<div class="qodef-e-main-image-holder">
			<div class="qodef-e-main-image-zoom-holder">
									<div class="qodef-e-main-image" data-parallax-main="250">
						<img width="1300" height="1280" src="{{asset($slide['img'])}}" class="attachment-qi_addons_for_elementor_image_size_huge-square size-qi_addons_for_elementor_image_size_huge-square" alt="" decoding="async" loading="lazy" />					</div>
							</div>
		</div>
													<div class="qodef-e-parallax-image qodef-position--bottom-left elementor-repeater-item-93b473e" >
									</div>
						</div>
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
		@endisset
@endfor
@endif



















				<section class="elementor-section elementor-top-section elementor-element elementor-element-5402a2bc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5402a2bc" data-element_type="section">
							<div class="elementor-background-overlay"></div>




							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c21f09b" data-id="c21f09b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-425f3a02 elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="425f3a02" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-animated-text qodef--animated-by-letter qodef--alignment-left qodef-qi--has-appear qodef--appear-from-right" >
		<h1 class="qodef-m-title">

			<?php
			$string = $masters[0];
			$pairs = explode('#x#', $string);
			$slide = [];
			foreach ($pairs as $pair) {
				list($key, $value) = explode('=#=', $pair);
				$slide[$key] = $value;
			}
			$header = explode(' ', $slide['header'] );
		?>
		@foreach ($header as $item)
		<span class="qodef-e-word-holder">{{$item}}</span>
		@endforeach
	</h1>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-5e708c18 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="5e708c18" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default"> {{ $slide['wordheader']}} </h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5a566b2c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5a566b2c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">

				@if ( !empty($masters[1]))
				@foreach ($masters as $i => $slides)

				<?php
						if($i == 0 ) continue;
						$string = $slides;
						$pairs = explode('#x#', $string);
						$slide = [];
						foreach ($pairs as $pair) {
							list($key, $value) = explode('=#=', $pair);
							$slide[$key] = $value;
						}
						if($slide['status']=='disappear') continue;
				?>

							<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7a6d2cec" data-id="7a6d2cec" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4bd0cdcd animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_team_member" data-id="4bd0cdcd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_team_member.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-team-member qodef-item-layout--info-from-bottom qodef-image--hover-scale">
	<div class="qodef-m-inner">
		<div class="qodef-m-image">
			<div class="qodef-m-media-image">
	<img width="800" height="889" src="{{asset($slide['img'])}}" class="attachment-full size-full" alt="" decoding="async" loading="lazy"
	srcset="{{asset($slide['img'])}} 800w, {{asset($slide['img'])}} 270w, {{asset($slide['img'])}} 768w, {{asset($slide['img'])}} 495w, {{asset($slide['img'])}} 550w, {{asset($slide['img'])}} 450w" sizes="(max-width: 800px) 100vw, 800px" />	</div>
	</div>
		<div class="qodef-m-content">
				<h4 itemprop="name" class="qodef-m-title">
					{{$slide['name']}}	</h4>
					<p class="qodef-m-role">{{$slide['position']}}</p>
					<div class="qodef-m-social-icons">
						<a class="qodef-e-social-icon-link" itemprop="url" href="{{$slide['facebook']}}" target="_blank">
							<span class="qodef-e-social-icon">
				<i aria-hidden="true" class="fab fa-facebook-f"></i>				</span>
								</a>
									<a class="qodef-e-social-icon-link" itemprop="url" href="{{$slide['twitter']}}" target="_blank">
							<span class="qodef-e-social-icon">
				<i aria-hidden="true" class="fab fa-twitter"></i>				</span>
								</a>
									<a class="qodef-e-social-icon-link" itemprop="url" href="{{$slide['insta']}}" target="_blank">
							<span class="qodef-e-social-icon">
				<i aria-hidden="true" class="fab fa-instagram"></i>				</span>
								</a>
									<a class="qodef-e-social-icon-link" itemprop="url" href="{{$slide['gmail']}}" target="_blank">
							<span class="qodef-e-social-icon">
				<i aria-hidden="true" class="far fa-envelope"></i>				</span>
								</a>
					</div>
		</div>
	</div>
</div>
		</div>
				</div>
					</div>
		</div>
		@endforeach

		@endif
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-ed6ce2b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ed6ce2b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-681e217e" data-id="681e217e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-2ee69ec7 elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_button" data-id="2ee69ec7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_button.default">
				<div class="elementor-widget-container">
			<a class="qodef-shortcode qodef-m  qodef-qi-button qodef-html--link qodef-layout--textual    qodef-icon--right qodef-hover--icon-move-horizontal-short   qodef-text-underline qodef-underline--left " href="{{route('fronted.contact')}}" target="_self">
	<span class="qodef-m-text">Contact Us</span>
		<span class="qodef-m-icon qodef--icon-color-set">
		<span class="qodef-m-icon-inner">
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="7px" height="7px" viewBox="1.25 1.25 7 7" xml:space="preserve"><polygon fill="#ffffff" points="1.25,1.25 1.25,2.25 6.543,2.25 1.25,7.543 1.958,8.25 7.25,2.957 7.25,8.25 8.25,8.25 8.25,1.25 8.25,1.25 "></polygon></svg>					</span>
	</span>
</a>
		</div>
				</div>
				<div class="elementor-element elementor-element-4be76aab elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="4be76aab" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-animated-text qodef--animated-by-letter qodef--alignment-left qodef-qi--has-appear qodef--appear-from-right" >
				<?php
				$header = explode(' ', $contact['header'] );
				?>
				<h1 class="qodef-m-title">
			@foreach ($header as $item)
			<span class="qodef-e-word-holder">{{$item}}</span>
			@endforeach

	</h1>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-78af0880 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="78af0880" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{$contact['wordheader']}}</h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6d932598 elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="6d932598" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-408111df" data-id="408111df" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-3ba3f4e7 animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_typeout_text" data-id="3ba3f4e7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="qi_addons_for_elementor_typeout_text.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-typeout-text" data-strings="[&quot;&quot;]">
	<h1 class="qodef-m-text">
		{{$contact['title']}}						<span class="qodef-typeout-holder">
			<span class="qodef-typeout"></span>
		</span>
	</h1>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-2630dd88 animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_typeout_text" data-id="2630dd88" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="qi_addons_for_elementor_typeout_text.default">
				<div class="elementor-widget-container">
					<?php
					$header = explode(',', $contact['words']);
					// echo($contact['words']);die;
					?>
					<div class="qodef-shortcode qodef-m  qodef-qi-typeout-text"
			data-strings="[
						@for ($i = 0; $i < count($header); $i++)
						&quot;{{$header[$i]}}&quot;,&quot;{{$header[$i]}}&quot;
		                @endfor
					]">
	<h2 class="qodef-m-text">
		{{$contact['wordtitle']}}				<span class="qodef-typeout-holder">
			<span class="qodef-typeout"></span>
		</span>
	</h2>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-ab6d2ca elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_button" data-id="ab6d2ca" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_button.default">
				<div class="elementor-widget-container">
			<a class="qodef-shortcode qodef-m  qodef-qi-button qodef-html--link qodef-layout--outlined qodef-type--icon-boxed   qodef-icon--right qodef-hover--icon-move-horizontal-short   qodef-text-underline qodef-underline--left " href="{{route('fronted.contact')}}" target="_self">
	<span class="qodef-m-text">Let&#039;s Talk</span>
		<span class="qodef-m-icon ">
		<span class="qodef-m-icon-inner">
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="7px" height="7px" viewBox="1.25 1.25 7 7" xml:space="preserve"><polygon fill="#ffffff" points="1.25,1.25 1.25,2.25 6.543,2.25 1.25,7.543 1.958,8.25 7.25,2.957 7.25,8.25 8.25,8.25 8.25,1.25 8.25,1.25 "></polygon></svg>					</span>
	</span>
</a>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-076cd1a elementor-section-stretched elementor-section-height-min-height elementor-section-items-top elementor-section-boxed elementor-section-height-default" data-id="076cd1a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">


								@if ( !empty($footer[0]))
								@foreach ($footer as $item)
								<?php
								$string = $item;
								$pairs = explode('#x#', $string);
								$slide = [];
								foreach ($pairs as $pair) {
									list($key, $value) = explode('=#=', $pair);
									$slide[$key] = $value;
								}
								if($slide['status']== 'disappear')  continue;
						?>


				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9a7d979" data-id="9a7d979" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-a35e6c0 elementor-widget elementor-widget-heading" data-id="a35e6c0" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default">{{$slide['name']}}</h5>		</div>
				</div>
				<div class="elementor-element elementor-element-033035d elementor-align-left elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="033035d" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">{{$slide['phone']}}</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">{{$slide['email']}}</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-638cbd9 elementor-align-left elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="638cbd9" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">{{$slide['address']}}</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>

		@endforeach
		@endif
							</div>
		</section>
							</div>
		        <footer id="colophon" class="site-footer" role="contentinfo">
									<div class="site-info">

<p>©  {{now()->year}} Netzero Company</p>
						</div> <!-- .site-info -->
							</footer> <!-- #colophon .site-footer -->
	</div>

    <link rel='stylesheet' id='ps-general-css' href='{{asset('fronted/wp-content/plugins/bdthemes-prime-slider-lite/assets/css/ps-general651e.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='e-animations-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/animations/animations.min8864.css')}}' type='text/css'>
@endsection
