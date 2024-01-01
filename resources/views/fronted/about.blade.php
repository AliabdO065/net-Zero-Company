@extends('fronted.layouts.layout')
@section('content')

<link rel='stylesheet' id='elementor-icons-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min192d.css?ver=5.23.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/css/frontend-lite.min8864.css?ver=3.17.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='swiper-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-8-css' href='{{asset('fronted/wp-content/uploads/sites/2/elementor/css/post-86991.css?ver=1699620461')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-993-css' href='{{asset('fronted/wp-content/uploads/sites/2/elementor/css/post-99373d9.css?ver=1699620906')}}' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3')}}' type='text/css' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<script type='text/javascript' src='{{asset('fronted/wp-includes/js/jquery/jquery.min5aed.js?ver=3.6.4')}}' id='jquery-core-js'></script>
<script type='text/javascript' src='{{asset('fronted/wp-includes/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0')}}' id='jquery-migrate-js'></script>
<link rel="https://api.w.org/" href="{{asset('fronted/wp-json/index.html')}}" />
<link rel="alternate" type="application/json" href="{{asset('fronted/wp-json/wp/v2/pages/993.json')}}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{asset('fronted/sxmlrpc0db0.php?rsd')}}" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{asset('fronted/wp-includes/wlwmanifest.xml')}}" />
<meta name="generator" content="WordPress 6.2.3" />
<link rel="canonical" href="{{route('fronted.about')}}" />
{{-- <link rel='shortlink' href='../index5aa6.html?p=993' /> --}}
<link rel='shortlink' href='{{route('fronted.index')}}' />
<link rel="alternate" type="application/json+oembed" href="{{asset('fronted/wp-json/oembed/1.0/embede457.json?url=https%3A%2F%2Fthemes.pixelwars.org%2Fenergify%2Fdemo-01%2Fabout%2F')}}" />
<link rel="alternate" type="text/xml+oembed" href="{{asset('fronted/wp-json/oembed/1.0/embedadcd?url=https%3A%2F%2Fthemes.pixelwars.org%2Fenergify%2Fdemo-01%2Fabout%2F&amp;format=xml')}}" />
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

<body class="page-template page-template-elementor_header_footer page page-id-993 qodef-qi--no-touch qi-addons-for-elementor-1.6.5 elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-993">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>    <div id="page" class="hfeed site">
		        <header id="masthead" class="site-header" role="banner">
						<div class="header-wrap" data-parallax-video="">
				<div class="header-wrap-inner">
					<div class="site-branding">
						<div class="site-branding-wrap">
							<div class="site-branding-left">
															</div> <!-- .site-branding-left -->

							<div class="site-branding-center">
																				<h1 class="site-title">
													<a href="{{route('fronted.index')}}" rel="home">

													</a>
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
                            <div class="layout-medium">
                                <a class="menu-toggle">
                                    <span class="lines"></span>
                                    <a href="{{route('fronted.index')}}" rel="home" class="logo-img">
                                        <img class="logo-img" src="{{asset('dashboard/assets/logo.png')}}">
                                    </a>
									<ul class="contact-nav-menu">

                                        <li>
                                            <a href="mailto:{{$contact['directMail']}}">
                                            <i class="fas fa-at"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:{{$contact['directPhone']}}">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </a>
                                <!-- .menu-toggle -->
                                <div class="nav-menu"><ul id="menu-main-menu" class="">
                                        <li id="menu-item-847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-11 current_page_item menu-item-847">
                                            <a href="{{route('fronted.index')}}" aria-current="page">Home</a></li>
                                        <li id="menu-item-1001" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1001 current-menu-item "><a href="{{route('fronted.about')}}">About Us</a></li>
                                        <li id="menu-item-1247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1247"><a href="{{route('fronted.services')}}">Services</a></li>
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
        </header> <!-- #masthead .site-header -->
			<div data-elementor-type="wp-page" data-elementor-id="993" class="elementor elementor-993">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-3e6d302f elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="3e6d302f" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-68bfe26c" data-id="68bfe26c" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>
			
		<?php
		$imagePath = ($main["img"]);
		$backimg = str_replace('\\', '/', $imagePath);
?>

				<section class="elementor-section elementor-top-section elementor-element elementor-element-4fd0ab28 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="4fd0ab28" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
				style="background-image: url('{{asset($backimg)}}')">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a8f409f" data-id="6a8f409f" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>
	


				<section class="elementor-section elementor-top-section elementor-element elementor-element-76558779 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="76558779" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-29948742" data-id="29948742" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-2857d570 elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="2857d570" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
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
				<div class="elementor-element elementor-element-780adea5 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="780adea5" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.17.0 - 08-11-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">{{$main['wordheader']}}</h2>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-585cda88" data-id="585cda88" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-132acafc animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_cards_slider" data-id="132acafc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="qi_addons_for_elementor_cards_slider.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-cards-slider qodef-orientation--one-side qodef-navigation--hover-move qodef-orientation--left" data-orientation="left" data-offset="24">
	<div class="qodef-e-inner">
					<div class="qodef-m-card">
				<div class="qodef-m-bundle-item">
											<img decoding="async" src="{{asset($main['img1'])}}" alt="" width="1000" height="1000" />									</div>
			</div>
					<div class="qodef-m-card">
				<div class="qodef-m-bundle-item">
											<img decoding="async" loading="lazy" src="{{asset($main['img2'])}}" alt="" width="1000" height="1000" />									</div>
			</div>
					<div class="qodef-m-card">
				<div class="qodef-m-bundle-item">
											<img decoding="async" loading="lazy" src="{{asset($main['img3'])}}" alt="" width="1000" height="1000" />									</div>
			</div>
			</div>
	<div class="qodef-m-fake-card" style="display: block">
		<img decoding="async" loading="lazy" src="../wp-content/uploads/sites/2/2023/07/3d-render-robot-holding-solar-panel-grassy-glboe-1000x1000.jpg" alt="" width="1000" height="1000" />	</div>
	<div class="qodef-m-navigation">
		<div class="qodef-nav qodef--prev"><svg class="qodef-swiper-arrow-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.2 32.3" xml:space="preserve" style="stroke-width: 2;"><line x1="0.5" y1="16" x2="33.5" y2="16"/><line x1="0.3" y1="16.5" x2="16.2" y2="0.7"/><line x1="0" y1="15.4" x2="16.2" y2="31.6"/></svg></div>
		<div class="qodef-nav qodef--next"><svg class="qodef-swiper-arrow-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.2 32.3" xml:space="preserve" style="stroke-width: 2;"><line x1="0" y1="16" x2="33" y2="16"/><line x1="17.3" y1="0.7" x2="33.2" y2="16.5"/><line x1="17.3" y1="31.6" x2="33.5" y2="15.4"/></svg></div>
	</div>
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2c473a61 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2c473a61" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7687e19a" data-id="7687e19a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-700cceab elementor-widget elementor-widget-text-editor" data-id="700cceab" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.17.0 - 08-11-2023 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
</style>
<p>
	{{$main['details']}}</p>						</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-28c8323 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="28c8323" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-354a12be" data-id="354a12be" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-626ece1 elementor-widget elementor-widget-qi_addons_for_elementor_timeline" data-id="626ece1" data-element_type="widget" data-widget_type="qi_addons_for_elementor_timeline.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-timeline qodef-timeline--horizontal qodef-layout--columns qodef-timeline-layout--horizontal-alternating  qodef-point--standard qodef-qi--has-appear  " data-options="{&quot;colNum&quot;:&quot;3&quot;,&quot;colNum1440&quot;:&quot;3&quot;,&quot;colNum1366&quot;:&quot;3&quot;,&quot;colNum1024&quot;:&quot;3&quot;,&quot;colNum768&quot;:&quot;2&quot;,&quot;colNum680&quot;:&quot;1&quot;,&quot;colNum480&quot;:&quot;1&quot;}">
	<div class="qodef-nav-prev">
		<svg class="qodef-swiper-arrow-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.2 32.3" xml:space="preserve" style="stroke-width: 2;"><line x1="0.5" y1="16" x2="33.5" y2="16"/><line x1="0.3" y1="16.5" x2="16.2" y2="0.7"/><line x1="0" y1="15.4" x2="16.2" y2="31.6"/></svg>	</div>
	<div class="qodef-nav-next">
		<svg class="qodef-swiper-arrow-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.2 32.3" xml:space="preserve" style="stroke-width: 2;"><line x1="0" y1="16" x2="33" y2="16"/><line x1="17.3" y1="0.7" x2="33.2" y2="16.5"/><line x1="17.3" y1="31.6" x2="33.5" y2="15.4"/></svg>	</div>

		<div class="qodef-grid-inner">
	{{-- //////////////////// --}}
	@if ( !empty($history[0]))
	<?php $c=1; ?>
			@foreach ($history as $i => $slides)

						<?php
								$string = $slides;
								$pairs = explode('#x#', $string);
								$slide = [];
								foreach ($pairs as $pair) {
									list($key, $value) = explode('=#=', $pair);
									$slide[$key] = $value;
								}
								if($slide['status'] == 'disappear') continue;

						?>
			<div class="qodef-e qodef-e-item qodef-grid-item elementor-repeater-item-1b6da1d
			<?php if($c % 2 == 0){ echo "qodef-obverse"; $c++ ;} else {echo  "qodef-reverse" ; $c++;} ?>">
	<div class="qodef-e-line-holder">
		<span class="qodef-e-line"></span>
	</div>
	<div class="qodef-e-item-inner">
		<div class="qodef-e-point-holder">
			<div class="qodef-e-point">
							</div>
		</div>
		<div class="qodef-e-top-holder">
			<div class="qodef-e-image">
	<img width="1920" height="1013" src="{{asset($slide['img'])}}" class="attachment-full size-full" alt="" decoding="async" loading="lazy" srcset="{{asset($slide['img'])}}" sizes="(max-width: 1920px) 100vw, 1920px" /></div>
		</div>
		<div class="qodef-e-content-holder">
				<h4 class="qodef-e-title">
					{{$slide['header']}}		</h4>
					<p class="qodef-e-text">
						{{$slide['wordheader']}}			</p>
					<div class="qodef-e-date">
						{{$slide['date']}}	</div>
			</div>
	</div>
	</div>

@endforeach
@endif

	</div>

</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3abfb8b1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3abfb8b1" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-465e1283" data-id="465e1283" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-396617a0 elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="396617a0" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-animated-text qodef--animated-by-letter qodef--alignment-left qodef-qi--has-appear qodef--appear-from-right" >
	</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-510c3f88 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="510c3f88" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<?php
					$string = $services[0];
					$pairs = explode('#x#', $string);
					$slide = [];
					foreach ($pairs as $pair) {
						list($key, $value) = explode('=#=', $pair);
						$slide[$key] = $value;
					}
					$header = explode(' ', $slide['header'] );
				?>
			<h2 class="elementor-heading-title elementor-size-default">{{$slide['header']}}</h2>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-396895a4" data-id="396895a4" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>



<?php $counter = 1 ; ?>
		@if ( !empty($services[1]))
			@foreach ($services as $i => $slides)

						<?php

									if($i == 0 ) continue;
								$string = $slides;
								$pairs = explode('#x#', $string);
								$slide = [];
								foreach ($pairs as $pair) {
									list($key, $value) = explode('=#=', $pair);
									$slide[$key] = $value;
								}
								if($slide['status'] == 'disappear') continue;

						?>
@if ($counter%2==1)
	<?php $counter++ ?>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-733423e8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="733423e8" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">



							<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-11aae89f" data-id="11aae89f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-220a64b9 elementor-widget elementor-widget-qi_addons_for_elementor_parallax_images" data-id="220a64b9" data-element_type="widget" data-widget_type="qi_addons_for_elementor_parallax_images.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-parallax-images qodef-layout--default">
	<div class="qodef-m-images">
		<div class="qodef-e-main-image-holder">
			<div class="qodef-e-main-image-zoom-holder">
									<div class="qodef-e-main-image" data-parallax-main="60">
						<img width="650" height="650" src="{{asset($slide['img'])}}" class="attachment-qi_addons_for_elementor_image_size_square size-qi_addons_for_elementor_image_size_square" alt="" decoding="async" loading="lazy" srcset="{{asset($slide['img'])}}" sizes="(max-width: 650px) 100vw, 650px" />					</div>
							</div>
		</div>
													<div class="qodef-e-parallax-image qodef-position--bottom-left elementor-repeater-item-2f947ea" >
									</div>
						</div>
</div>
		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-732c3c7d" data-id="732c3c7d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-72d1cdf9 elementor-widget elementor-widget-text-editor" data-id="72d1cdf9" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>
								{{$slide['title1']}}
							</p>

							<p>
								{{$slide['title2']}}
							</p>						</div>
				</div>
					</div>
		</div>
							</div>
		</section>



	@else
	<?php $counter++ ?>

			<section class="elementor-section elementor-top-section elementor-element elementor-element-4f69429a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4f69429a" data-element_type="section">
				<div class="elementor-container elementor-column-gap-default">
			<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-59c979af" data-id="59c979af" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-36d861ce elementor-widget elementor-widget-text-editor" data-id="36d861ce" data-element_type="widget" data-widget_type="text-editor.default">
		<div class="elementor-widget-container">
			<p>
				{{$slide['title1']}}
			</p>

			<p>
				{{$slide['title2']}}
			</p>
				</div>
		</div>
			</div>
</div>
		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-22a3ae96" data-id="22a3ae96" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-47c183c9 elementor-widget elementor-widget-qi_addons_for_elementor_parallax_images" data-id="47c183c9" data-element_type="widget" data-widget_type="qi_addons_for_elementor_parallax_images.default">
		<div class="elementor-widget-container">
	<div class="qodef-shortcode qodef-m  qodef-qi-parallax-images qodef-layout--default">
<div class="qodef-m-images">
<div class="qodef-e-main-image-holder">
	<div class="qodef-e-main-image-zoom-holder">
							<div class="qodef-e-main-image" data-parallax-main="60">
				<img width="650" height="650" src="../wp-content/uploads/sites/2/2023/07/modern-container-battery-energy-storage-power-plant-system-accompanied-with-solar-panels-wind-turbine-system-situated-nature-with-mount-st-helens-background-3d-ren-2" class="attachment-qi_addons_for_elementor_image_size_square size-qi_addons_for_elementor_image_size_square" alt="" decoding="async" loading="lazy" srcset="https://themes.pixelwars.org/energify/demo-01/wp-content/uploads/sites/2/2023/07/modern-container-battery-energy-storage-power-plant-system-accompanied-with-solar-panels-wind-turbine-system-situated-nature-with-mount-st-helens-background-3d-rendering-650x650.jpg 650w, https://themes.pixelwars.org/energify/demo-01/wp-content/uploads/sites/2/2023/07/modern-container-battery-energy-storage-power-plant-system-accompanied-with-solar-panels-wind-turbine-system-situated-nature-with-mount-st-helens-background-3d-rendering-150x150.jpg 150w, https://themes.pixelwars.org/energify/demo-01/wp-content/uploads/sites/2/2023/07/modern-container-battery-energy-storage-power-plant-system-accompanied-with-solar-panels-wind-turbine-system-situated-nature-with-mount-st-helens-background-3d-rendering-550x550.jpg 550w, https://themes.pixelwars.org/energify/demo-01/wp-content/uploads/sites/2/2023/07/modern-container-battery-energy-storage-power-plant-system-accompanied-with-solar-panels-wind-turbine-system-situated-nature-with-mount-st-helens-background-3d-rendering-300x300.jpg 300w" sizes="(max-width: 650px) 100vw, 650px" />					</div>
					</div>
</div>
											<div class="qodef-e-parallax-image qodef-position--bottom-left elementor-repeater-item-2f947ea" >
							</div>
				</div>
</div>
</div>
		</div>
		<div class="elementor-element elementor-element-a0423aa elementor-widget elementor-widget-qi_addons_for_elementor_parallax_images" data-id="a0423aa" data-element_type="widget" data-widget_type="qi_addons_for_elementor_parallax_images.default">
		<div class="elementor-widget-container">
	<div class="qodef-shortcode qodef-m  qodef-qi-parallax-images qodef-layout--default">
<div class="qodef-m-images">
<div class="qodef-e-main-image-holder">
	<div class="qodef-e-main-image-zoom-holder">
							<div class="qodef-e-main-image" data-parallax-main="60">
									</div>
					</div>
</div>
											<div class="qodef-e-parallax-image qodef-position--bottom-left elementor-repeater-item-2f947ea" >
							</div>
				</div>
</div>
</div>
		</div>
			</div>
</div>
					</div>
</section>
@endif
@endforeach

@endif



				<section class="elementor-section elementor-top-section elementor-element elementor-element-6d681e0b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6d681e0b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-156d0e65" data-id="156d0e65" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-c557720 elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="c557720" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-animated-text qodef--animated-by-letter qodef--alignment-left qodef-qi--has-appear qodef--appear-from-right" >

				<?php
				$string = $images[0];
				$pairs = explode('#x#', $string);
				$slide = [];
				foreach ($pairs as $pair) {
					list($key, $value) = explode('=#=', $pair);
					$slide[$key] = $value;
				}
				$header = explode(' ', $slide['header'] );
			?>
				<h1 class="qodef-m-title">
					@foreach ($header as $item)
					<span class="qodef-e-word-holder">{{$item}}</span>
					@endforeach
				</h1>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-35fa5d21 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="35fa5d21" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{$slide['wordheader']}}</h2>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-450b673e" style="display: inline-block" data-id="450b673e" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-42c768ca elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="42c768ca" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35c5eaae" data-id="35c5eaae" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-39a2fd70 elementor-widget elementor-widget-qi_addons_for_elementor_image_gallery_masonry" data-id="39a2fd70" data-element_type="widget" data-widget_type="qi_addons_for_elementor_image_gallery_masonry.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-image-gallery-masonry qodef-qi-fslightbox-popup qodef-popup-gallery qodef-image--hover-zoom qodef-image--hover-from-top qodef-qi-grid qodef-layout--qi-masonry qodef-items--fixed qodef-col-num--3   qodef-responsive--predefined">
	<div class="qodef-grid-inner">
			<div class="qodef-qi-grid-masonry-sizer"></div>
@if ( !empty($allimages[0]))

		@foreach ($allimages as $i => $slides)
		<?php
		$string = $slides;
		$pairs = explode('#x#', $string);
		$slide = [];
		foreach ($pairs as $pair) {
			list($key, $value) = explode('=#=', $pair);
			$slide[$key] = $value;
		}
		?>
		
		<div class="qodef-e qodef-image-wrapper qodef-grid-item qodef-item--">
			<div class="qodef-e-inner">
					<a class="qodef-popup-item" itemprop="image" href="{{asset($slide['img'])}}" data-type="image" data-fslightbox="gallery-1">
					<img width="1920" height="954" src="{{asset($slide['img'])}}" class="attachment- size-" alt="" decoding="async" loading="lazy"
					srcset="{{asset($slide['img'])}} 1920w,{{asset($slide['img'])}} 300w, {{asset($slide['img'])}} 1024w,{{asset($slide['img'])}} 768w,
					{{asset($slide['img'])}} 1107w,{{asset($slide['img'])}} 1060w,{{asset($slide['img'])}} 1536w,
					{{asset($slide['img'])}} 550w,{{asset($slide['img'])}} 1006w" sizes="(max-width: 1920px) 100vw, 1920px" /></a>
					</div>
		</div>
@endforeach	
@endif




	</div>
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5107d033 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5107d033" data-element_type="section">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6713faaf" data-id="6713faaf" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-19c0f3ca elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="19c0f3ca" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
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
				<div class="elementor-element elementor-element-4102cc27 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="4102cc27" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{$slide['wordheader']}}</h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6f928aa4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6f928aa4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
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

							<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5a3eecc7" data-id="5a3eecc7" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-19f749bf animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_team_member" data-id="19f749bf" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_team_member.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-team-member qodef-item-layout--info-from-bottom qodef-image--hover-scale">
	<div class="qodef-m-inner">
		<div class="qodef-m-image">
				<div class="qodef-m-media-image">
					<img width="800" height="889" src="{{asset($slide['img'])}}" class="attachment-full size-full" alt="" decoding="async" loading="lazy"
					srcset="{{asset($slide['img'])}} 800w, {{asset($slide['img'])}} 270w, {{asset($slide['img'])}} 768w, {{asset($slide['img'])}} 495w, {{asset($slide['img'])}} 550w, {{asset($slide['img'])}} 450w" sizes="(max-width: 800px) 100vw, 800px" />
					</div>
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

							<?php
							$imagePath = ($contact["img"]);
							$contactimg = str_replace('\\', '/', $imagePath);
					?>


		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5f0a37e6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5f0a37e6" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-75900f2f" data-id="75900f2f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-3eb3472b elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_button" data-id="3eb3472b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_button.default">
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
				<div class="elementor-element elementor-element-45679ee7 elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="45679ee7" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
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
				<div class="elementor-element elementor-element-699be69 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="699be69" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{$contact['wordheader']}}</h2>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5797155f" data-id="5797155f" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6f1f97f7 elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="6f1f97f7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
				style="background-image: url('{{asset($contactimg)}}')">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-23ca2de6" data-id="23ca2de6" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-24e962c6 animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_typeout_text" data-id="24e962c6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="qi_addons_for_elementor_typeout_text.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-typeout-text" data-strings="[&quot;&quot;]">
				<h1 class="qodef-m-text">
					{{$contact['title']}}			<span class="qodef-typeout-holder">
						<span class="qodef-typeout"></span>
					</span>
				</h1>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-138239e2 animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_typeout_text" data-id="138239e2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="qi_addons_for_elementor_typeout_text.default">
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
				<div class="elementor-element elementor-element-45774125 elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_button" data-id="45774125" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_button.default">
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
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2422bff5 elementor-section-stretched elementor-section-height-min-height elementor-section-items-top elementor-section-boxed elementor-section-height-default" data-id="2422bff5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
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

					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-452219c7" data-id="452219c7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6bdbb9d9 elementor-widget elementor-widget-heading" data-id="6bdbb9d9" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default">{{$slide['name']}}  </h5>		</div>
				</div>
				<div class="elementor-element elementor-element-629a4370 elementor-align-left elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="629a4370" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
			<link rel="stylesheet" href="../wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">		<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
								<a href="tel:{{$slide['phone']}}">
											<span class="elementor-icon-list-text">{{$slide['phone']}} </span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="mailto:{{$slide['email']}}">

											<span class="elementor-icon-list-text">{{$slide['email']}} </span>
											</a>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-3e8d0bb elementor-align-left elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3e8d0bb" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="{{$slide['googleMaps']}} ">
											<span class="elementor-icon-list-text">{{$slide['address']}} </span>
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

	<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='e-animations-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/animations/animations.min8864.css?ver=3.17.3')}}' type='text/css' media='all' />

@endsection
