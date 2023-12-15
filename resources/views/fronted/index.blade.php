@extends('fronted.layouts.layout')
@section('content')
<link rel='stylesheet' id='elementor-icons-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min192d.css?ver=5.23.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/css/frontend-lite.min8864.css?ver=3.17.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='swiper-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-8-css' href='{{asset('fronted/wp-content/uploads/sites/2/elementor/css/post-86991.css?ver=1699620461')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-11-css' href='{{asset('fronted/wp-content/uploads/sites/2/elementor/css/post-11e12a.css?ver=1699640361')}}' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CBebas+Neue%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3')}}' type='text/css' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<script type='text/javascript' src='{{asset('fronted/wp-includes/js/jquery/jquery.min5aed.js?ver=3.6.4')}}' id='jquery-core-js'></script>
<script type='text/javascript' src='{{asset('fronted/wp-includes/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0')}}' id='jquery-migrate-js'></script>
<link rel="https://api.w.org/" href="{{asset('fronted/wp-json/index.html')}}" />
<link rel="alternate" type="application/json" href="{{asset('fronted/wp-json/wp/v2/pages/11.json')}}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{asset('fronted/wp-includes/wlwmanifest.xml')}}" />
<meta name="generator" content="WordPress 6.2.3" />
<link rel="canonical" href="{{route('fronted.index')}}" />
<link rel='shortlink' href="{{route('fronted.index')}}" />
<link rel="alternate" type="application/json+oembed" href="{{asset('fronted/wp-json/oembed/1.0/embed662e.json?url=https%3A%2F%2Fthemes.pixelwars.org%2Fenergify%2Fdemo-01%2F')}}" />
<link rel="alternate" type="text/xml+oembed" href="{{asset('fronted/wp-json/oembed/1.0/embed777c?url=https%3A%2F%2Fthemes.pixelwars.org%2Fenergify%2Fdemo-01%2F&amp;format=xml')}}" />
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

<body class="home page-template page-template-elementor_header_footer page page-id-11 qodef-qi--no-touch qi-addons-for-elementor-1.6.5 elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-11">
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
														<span class="screen-reader-text">
															netZero														</span>
														<span class="site-title-text">
															netZero														</span>
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
								</a> <!-- .menu-toggle -->
<div class="nav-menu"><ul id="menu-main-menu" class=""><li id="menu-item-847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-11 current_page_item menu-item-847"><a href="{{route('fronted.index')}}" aria-current="page">Home</a></li>
<li id="menu-item-1001" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1001"><a href="{{route('fronted.about')}}">About Us</a></li>
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
				<div data-elementor-type="wp-page" data-elementor-id="11" class="elementor elementor-11">
	<section class="elementor-section elementor-top-section elementor-element elementor-element-1d960571 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle" data-id="1d960571" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f1b85ff" data-id="f1b85ff" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-78a84ba3 elementor-widget-tablet__width-inherit full elementor-widget elementor-widget-prime-slider-general" data-id="78a84ba3" data-element_type="widget" data-widget_type="prime-slider-general.slide">
				<div class="elementor-widget-container">
						<div class="bdt-prime-slider">
				<div class="bdt-prime-slider-skin-slide">

				<div class="bdt-position-relative bdt-visible-toggle" bdt-slideshow="{&quot;animation&quot;:&quot;fade&quot;,&quot;ratio&quot;:&quot;32:17&quot;,&quot;min-height&quot;:&quot;640&quot;,&quot;autoplay&quot;:true,&quot;autoplay-interval&quot;:&quot;5000&quot;,&quot;pause-on-hover&quot;:false,&quot;velocity&quot;:1,&quot;finite&quot;:false}" data-settings="{&quot;id&quot;:&quot;#bdt-78a84ba3&quot;,&quot;animation_status&quot;:&quot;no&quot;}" id="bdt-78a84ba3">



					<ul class="bdt-slideshow-items">
						@if ( !empty($content[0]))
							
						@foreach ($content as $i => $slides)
						
						<?php 
								$string = $slides;
								$pairs = explode('#x#', $string);
								$slide = [];
								foreach ($pairs as $pair) {
									list($key, $value) = explode('=#=', $pair);
									$slide[$key] = $value;
								}
								$imagePath = ($slide["img"]);
								$img = str_replace('\\', '/', $imagePath);
								$counter = count($content);
			
								?>
						<li class="bdt-slideshow-item bdt-flex bdt-flex-middle bdt-flex-center elementor-repeater-item-9f9a850">
																	<div class="bdt-position-cover bdt-animation-kenburns bdt-transform-origin-center-left">
																		
																		
																		<div class="bdt-ps-slide-img" style="background-image: url('{{asset($img)}}');"></div>
																		
																		
																	</div>
												
																	<div class="bdt-overlay-default bdt-position-cover"></div>
												
																	
										<div class="bdt-ps-content-wrapper bdt-position-z-index bdt-position-large">
											
											<div class="bdt-slide-shape" data-bdt-slideshow-parallax="Y: -100,0,100; opacity: 1,1,0"></div>
											<div class="bdt-prime-slider-wrapper">
												<div class="bdt-prime-slider-content">
													<div class="bdt-prime-slider-desc">
														
														<div class="bdt-main-title" data-bdt-slideshow-parallax="x: 100,0,-20; opacity: 1,1,0" data-reveal="reveal-active">
															<h1 class="bdt-title-tag">
																{{$slide['title']}}                                                            </h1>
															</div>
															
															
													</div>
												</div>
											</div>
											
										</div>
			
										<div class="bdt-slide-featured bdt-flex">
											
											<div class="bdt-slider-excerpt" data-bdt-slideshow-parallax="y: 50,0,-10; opacity: 1,1,0" data-reveal="reveal-active">
													
													<div class="flex flex-grow flex-col gap-3"><div class="min-h-[20px] flex items-start overflow-x-auto whitespace-pre-wrap break-words flex-col gap-4"><div class="markdown prose w-full break-words dark:prose-invert light">
														{{$slide['details']}}</div></div></div>
													</div>
													
											<div class="bdt-prime-slider-arrow-button" data-bdt-slideshow-parallax="x: 100,0,-50; opacity: 1,1,0">
												
												
												<a class="bdt-slide-btn" data-reveal="reveal-active" href="{{route('fronted.services')}}" target="_self">
													
													<span class="bdt-prime-slider-button-wrapper">
														
														<span class="bdt-prime-slider-button-text bdt-flex bdt-flex-middle bdt-flex-inline">Details											</span>
			
												</span>
			
											</a>
													</div>
													
												</div>
												
											</li>
											
											@endforeach
											
											@endif
			
			</ul>
                <div class="bdt-navigation-arrows bdt-position-center-right reveal-muted">
                    <a class="bdt-prime-slider-previous" href="#" bdt-slidenav-previous bdt-slideshow-item="previous"></a>
    
                    <a class="bdt-prime-slider-next" href="#" bdt-slidenav-next bdt-slideshow-item="next"></a>
                </div>
                        
                <ul class="bdt-dotnav bdt-dotnav-vertical bdt-margin-bottom-100 bdt-margin-left-100 bdt-position-bottom-left bdt-text-center reveal-muted">
					@if ( !empty($content[0]))
					
					@for ($i = 0; $i < $counter; $i++)
					<li bdt-slideshow-item="{{$i}}" data-label="{{$i+1}}" ><a href="#"></a></li>
					@endfor
						
					@endif
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
				<section class="elementor-section elementor-top-section elementor-element elementor-element-61813b37 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="61813b37" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cf2ce00" data-id="cf2ce00" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-11509f19 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="11509f19" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f3c8d4" data-id="f3c8d4" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-266e5357 elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="266e5357" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-animated-text qodef--animated-by-letter qodef--alignment-left qodef-qi--has-appear qodef--appear-from-right" >
				<h1 class="qodef-m-title">
					<?php
					$header = explode(' ', $services['header'] );
					?>
					@foreach ($header as $item)
					<span class="qodef-e-word-holder">{{$item}}</span>
					@endforeach	
				</h1>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-698042d animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="698042d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.17.0 - 08-11-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">
	{{$services['wordheader']}}</h2>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-630873ed" data-id="630873ed" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-5559b8d9 elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_button" data-id="5559b8d9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_button.default">
				<div class="elementor-widget-container">
			<a class="qodef-shortcode qodef-m  qodef-qi-button qodef-html--link qodef-layout--textual    qodef-icon--right qodef-hover--icon-move-horizontal-short   qodef-text-underline qodef-underline--left " href="{{route('fronted.services')}}" target="_self">
	<span class="qodef-m-text">All Services</span>
		<span class="qodef-m-icon qodef--icon-color-set">
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
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-181891dc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="181891dc" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				
				

<?php

			$header = explode(',', $allservices['services'] );
			?>
			@for ($i = 0; $i < count($header); $i++)
				
			<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-77a31540" data-id="77a31540" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-285de4c7 animated-slow elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list" data-id="285de4c7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;300&quot;}" data-widget_type="icon-list.default">
					<div class="elementor-widget-container">
						<ul class="elementor-icon-list-items">
									
							
							
							<li class="elementor-icon-list-item">
												<a href="#">

													<span class="elementor-icon-list-icon">
											<i aria-hidden="true" class="fas fa-plus"></i>	</span>
														<span class="elementor-icon-list-text">{{$header[$i]}} </span>
												</a>
										</li>
										@for ($k = 0; $k < count($header)/3 ; $k++)
							
										@isset($header[$i+1])
									<li class="elementor-icon-list-item">
													<a href="#">
														<span class="elementor-icon-list-icon">
									<i aria-hidden="true" class="fas fa-plus"></i>	</span>
												<span class="elementor-icon-list-text">{{$header[$i+1]}} </span>
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







				<section class="elementor-section elementor-inner-section elementor-element elementor-element-813929 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="813929" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				
				
				
				
							<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-679ec7f2" data-id="679ec7f2" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-3b054cdf animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_counter" data-id="3b054cdf" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;100&quot;}" data-widget_type="qi_addons_for_elementor_counter.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-counter qodef-layout--simple  qodef-digit-stroke-effect" data-start-digit="1" data-end-digit="{{$services['numberclients']}}" data-step-digit="4">
	<div class="qodef-m-digit-wrapper">
		<div class="qodef-m-digit"></div>
	</div>
		<div class="qodef-m-separator qodef-qi-clear">
		<div class="qodef-shortcode qodef-m  qodef-qi-separator qodef-qi-clear qodef-separator--standard ">	<div class="qodef-m-line"></div></div>	</div>
	<div class="qodef-m-content">
			<h3 class="qodef-m-title">
				{{$services['titleclients']}}</h3>
			</div>
</div>
		</div>
				</div>
					</div>
		</div>


		
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-71cc487f" data-id="71cc487f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-477446a8 animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_counter" data-id="477446a8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;100&quot;}" data-widget_type="qi_addons_for_elementor_counter.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-counter qodef-layout--simple  qodef-digit-stroke-effect" data-start-digit="1" data-end-digit="{{$services['numberprojects']}}" data-step-digit="4">
	<div class="qodef-m-digit-wrapper">
		<div class="qodef-m-digit"></div>
	</div>
		<div class="qodef-m-separator qodef-qi-clear">
		<div class="qodef-shortcode qodef-m  qodef-qi-separator qodef-qi-clear qodef-separator--standard ">	<div class="qodef-m-line"></div></div>	</div>
	<div class="qodef-m-content">
			<h3 class="qodef-m-title">
				{{$services['titleprojects']}}	 	</h3>
			</div>
</div>
		</div>
				</div>
					</div>
		</div>



				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3f02353c" data-id="3f02353c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-f0726ad animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_counter" data-id="f0726ad" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;100&quot;}" data-widget_type="qi_addons_for_elementor_counter.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-counter qodef-layout--simple  qodef-digit-stroke-effect" data-start-digit="1" data-end-digit="{{$services['numberfeet']}}" data-step-digit="4" data-digit-label="K">
	<div class="qodef-m-digit-wrapper">
		<div class="qodef-m-digit"></div>
	</div>
		<div class="qodef-m-separator qodef-qi-clear">
		<div class="qodef-shortcode qodef-m  qodef-qi-separator qodef-qi-clear qodef-separator--standard ">	<div class="qodef-m-line"></div></div>	</div>
	<div class="qodef-m-content">
			<h3 class="qodef-m-title">
				{{$services['titlefeet']}}	</h3>
			</div>
</div>
		</div>
				</div>
					</div>
		</div>

							</div>
		</section>



					</div>
		</div>
							</div>
		</section>



				<section class="elementor-section elementor-top-section elementor-element elementor-element-4e50cd9 elementor-section-full_width animated-slow elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="4e50cd9" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6e8d40a" data-id="6e8d40a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-8fa3cd5 elementor-widget elementor-widget-qi_addons_for_elementor_text_marquee" data-id="8fa3cd5" data-element_type="widget" data-widget_type="qi_addons_for_elementor_text_marquee.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-text-marquee qodef-layout--default qodef-text-stroke-effect">
	<div class="qodef-m-content">
		<div class="qodef-m-text qodef-text--original">
			<span class="qodef-m-text-item elementor-repeater-item-8193270" >{{$services['title1']}}	</span>
							<span class="qodef-m-text-item elementor-repeater-item-22a3254" >{{$services['title2']}}	</span>
							<span class="qodef-m-text-item elementor-repeater-item-f105cca" >{{$services['title3']}}	</span>
							<span class="qodef-m-text-item elementor-repeater-item-b3fcd12" >{{$services['title4']}}	</span>
					</div>
<div class="qodef-m-text qodef-text--copy">
			<span class="qodef-m-text-item elementor-repeater-item-8193270" >{{$services['title1']}}	</span>
							<span class="qodef-m-text-item elementor-repeater-item-22a3254" >{{$services['title2']}}	</span>
							<span class="qodef-m-text-item elementor-repeater-item-f105cca" >{{$services['title3']}}	</span>
							<span class="qodef-m-text-item elementor-repeater-item-b3fcd12" >{{$services['title4']}}	</span>
					</div>
	</div>
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>


				<section class="elementor-section elementor-top-section elementor-element elementor-element-7ae66fa6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7ae66fa6" data-element_type="section">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-37bef035" data-id="37bef035" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-480ab4d4 elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_button" data-id="480ab4d4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_button.default">
				<div class="elementor-widget-container">
			<a class="qodef-shortcode qodef-m  qodef-qi-button qodef-html--link qodef-layout--textual    qodef-icon--right qodef-hover--icon-move-horizontal-short   qodef-text-underline qodef-underline--left " href="{{route('fronted.about')}}" target="_self">
	<span class="qodef-m-text">About Us</span>
		<span class="qodef-m-icon qodef--icon-color-set">
		<span class="qodef-m-icon-inner">
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="7px" height="7px" viewBox="1.25 1.25 7 7" xml:space="preserve"><polygon fill="#ffffff" points="1.25,1.25 1.25,2.25 6.543,2.25 1.25,7.543 1.958,8.25 7.25,2.957 7.25,8.25 8.25,8.25 8.25,1.25 8.25,1.25 "></polygon></svg>					</span>
	</span>
</a>
		</div>
				</div>
				<div class="elementor-element elementor-element-d5550ac elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="d5550ac" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-animated-text qodef--animated-by-letter qodef--alignment-left qodef-qi--has-appear qodef--appear-from-right" >
				<h1 class="qodef-m-title">
					<?php
					$header = explode(' ', $about['header'] );
					?>
					@foreach ($header as $item)
					<span class="qodef-e-word-holder">{{$item}}</span>
					@endforeach	
			</h1>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-4108f6ad animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="4108f6ad" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{$about['wordheader'] }}</h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5286f656 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5286f656" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2ad77cbe" data-id="2ad77cbe" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-396ba426 animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_cards_slider" data-id="396ba426" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="qi_addons_for_elementor_cards_slider.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-cards-slider qodef-orientation--one-side qodef-navigation--hover-move qodef-orientation--left" data-orientation="left" data-offset="25">
	<div class="qodef-e-inner">
			<div class="qodef-m-card">
				<div class="qodef-m-bundle-item">
											<img decoding="async" src="{{asset($about['img1'])}}" alt="" width="1000" height="1000" />									</div>
			</div>
			<div class="qodef-m-card">
				<div class="qodef-m-bundle-item">
											<img decoding="async" loading="lazy" src="{{asset($about['img2'])}}" alt="" width="1000" height="1000" />									</div>
			</div>
			<div class="qodef-m-card">
				<div class="qodef-m-bundle-item">
											<img decoding="async" loading="lazy" src="{{asset($about['img3'])}}" alt="" width="1000" height="1000" />									</div>
			</div>
	</div>
	<div class="qodef-m-fake-card">
		<img decoding="async" loading="lazy" src="wp-content/uploads/sites/2/2023/07/concept-clean-energy-saving-power-nature-solar-panel-with-wind-turbine-small-tree-lightbulb-1000x1000.jpg" alt="" width="1000" height="1000" />	</div>
	<div class="qodef-m-navigation">
		<div class="qodef-nav qodef--prev"><svg class="qodef-swiper-arrow-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.2 32.3" xml:space="preserve" style="stroke-width: 2;"><line x1="0.5" y1="16" x2="33.5" y2="16"/><line x1="0.3" y1="16.5" x2="16.2" y2="0.7"/><line x1="0" y1="15.4" x2="16.2" y2="31.6"/></svg></div>
		<div class="qodef-nav qodef--next"><svg class="qodef-swiper-arrow-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.2 32.3" xml:space="preserve" style="stroke-width: 2;"><line x1="0" y1="16" x2="33" y2="16"/><line x1="17.3" y1="0.7" x2="33.2" y2="16.5"/><line x1="17.3" y1="31.6" x2="33.5" y2="15.4"/></svg></div>
	</div>
</div>
		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3449bb39" data-id="3449bb39" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-5b74855f animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_tabs_horizontal" data-id="5b74855f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="qi_addons_for_elementor_tabs_horizontal.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-tabs-horizontal qodef-qi-clear qodef-layout--simple qodef-title-hover--underline-draw qodef-title-underline-from-left">
				<ul class="qodef-tabs-horizontal-navigation">
					<li>
				<h3 class="qodef-tab-title">
					<a href="#qodef-tab-de6d4f0">
						<span class="q-text">
							{{($about['thistory'])}}			</span>
					</a>
				</h3>
			</li>
			<li>
				<h3 class="qodef-tab-title">
					<a href="#qodef-tab-0927390">
						<span class="q-text">
							{{($about['tmission'])}}				</span>
					</a>
				</h3>
			</li>
			<li>
				<h3 class="qodef-tab-title">
					<a href="#qodef-tab-b0d90cc">
						<span class="q-text">
							{{($about['tvision'])}}				</span>
					</a>
				</h3>
			</li>
				</ul>
	<div class="qodef-tabs-horizontal-content" id="qodef-tab-de6d4f0">
	<p>{{($about['history'])}}</p></div>
<div class="qodef-tabs-horizontal-content" id="qodef-tab-0927390">
	<p>{{($about['mission'])}}</p></div>
<div class="qodef-tabs-horizontal-content" id="qodef-tab-b0d90cc">
	<p>{{($about['vision'])}}</p></div>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-7a55bc32 animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_progress_bar_horizontal" data-id="7a55bc32" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_progress_bar_horizontal.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-progress-bar-horizontal qodef-percentage--fixed-above " data-active-line-color="#203556" data-active-line-width="1" data-inactive-line-color="#ececec" data-inactive-line-width="4"  data-number="95" data-percentage-type="fixed-above" data-gradient-fill="no" data-rand-id="1130708599" data-gradient-start="#D9E7FA" data-gradient-end="#FCC4AF" data-text-color="#203556" >
	<div class="qodef-m-inner">
		<div class="qodef-m-content">
							<h5 class="qodef-m-title">
								{{($about['row1'])}}			</h5>
						<div class="qodef-m-value">
				<div class="qodef-m-value-inner">
					{{($about['p1'])}}<span class="qodef-m-percentage">%</span>
				</div>
			</div>
		</div>
		<div class="qodef-m-canvas"></div>
	</div>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-397ddd85 animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_progress_bar_horizontal" data-id="397ddd85" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_progress_bar_horizontal.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-progress-bar-horizontal qodef-percentage--fixed-above " data-active-line-color="#203556" data-active-line-width="1" data-inactive-line-color="#ececec" data-inactive-line-width="4"  data-number="85" data-percentage-type="fixed-above" data-gradient-fill="no" data-rand-id="231564482" data-gradient-start="#D9E7FA" data-gradient-end="#FCC4AF" data-text-color="#203556" >
	<div class="qodef-m-inner">
		<div class="qodef-m-content">
							<h5 class="qodef-m-title">
								{{($about['row2'])}}				</h5>
						<div class="qodef-m-value">
				<div class="qodef-m-value-inner">{{($about['p2'])}}<span class="qodef-m-percentage">%</span>
				</div>
			</div>
		</div>
		<div class="qodef-m-canvas"></div>
	</div>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-4db87967 animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_progress_bar_horizontal" data-id="4db87967" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_progress_bar_horizontal.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-progress-bar-horizontal qodef-percentage--fixed-above " data-active-line-color="#203556" data-active-line-width="1" data-inactive-line-color="#ececec" data-inactive-line-width="4"  data-number="75" data-percentage-type="fixed-above" data-gradient-fill="no" data-rand-id="1920899325" data-gradient-start="#D9E7FA" data-gradient-end="#FCC4AF" data-text-color="#203556" >
	<div class="qodef-m-inner">
		<div class="qodef-m-content">
							<h5 class="qodef-m-title">
								{{($about['row3'])}}				</h5>
						<div class="qodef-m-value">
				<div class="qodef-m-value-inner">
					{{($about['p3'])}}<span class="qodef-m-percentage">%</span>
				</div>
			</div>
		</div>
		<div class="qodef-m-canvas"></div>
	</div>
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5962a50 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5962a50" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6b1d04e8" data-id="6b1d04e8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6f449497 elementor-widget elementor-widget-qi_addons_for_elementor_process" data-id="6f449497" data-element_type="widget" data-widget_type="qi_addons_for_elementor_process.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-process  qodef-qi--has-appear qodef-qi-grid qodef-layout--qi-columns  qodef-col-num--4  qodef-item-layout--horizontal qodef-responsive--predefined">
	<div class="qodef-grid-inner">



<?php 
$counter = 1;
?>
	@if ( !empty($category[0]))

@foreach ($category as $i => $slides)
<?php 
$string = $slides;
$pairs = explode('#x#', $string);
$slide = [];
foreach ($pairs as $pair) {
	list($key, $value) = explode('=#=', $pair);
	$slide[$key] = $value;
}
if($slide['status']=='disappear') continue;
?>

				<div class="qodef-e qodef-process-item qodef-grid-item elementor-repeater-item-e90ae08">
			<div class="qodef-e-inner">
				<div class="qodef-e-content">
					<div class="qodef-e-icon-holder">
			<div class="qodef-e-icon">
							<span class="qodef-e-item-icon-text">
						<i aria-hidden="true" class="{{$slide['icon']}}"></i>			</span>
					<div class="qodef-e-number">
						{{$counter++}}		</div>
					</div>
			<div class="qodef-e-line">
				<div class="qodef-e-line-inner"></div>
			</div>
		</div>
						<h3 class="qodef-e-title">
							{{$slide['title']}}</h3>
						<p class="qodef-e-text">
							{{$slide['details']}} 	</p>
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
				<section class="elementor-section elementor-top-section elementor-element elementor-element-354be38f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="354be38f" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35a4704f" data-id="35a4704f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-2a6fe01 elementor-widget elementor-widget-qi_addons_for_elementor_image_slider" data-id="2a6fe01" data-element_type="widget" data-widget_type="qi_addons_for_elementor_image_slider.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-image-slider qodef-qi-fslightbox-popup qodef-popup-gallery qodef-image--hover-zoom-out  qodef--centered-zoom qodef-col-num--4 qodef-qi-grid qodef-qi-swiper-container  qodef-navigation--inside      qodef-navigation--hover-move" data-options="{&quot;direction&quot;:&quot;horizontal&quot;,&quot;slidesPerView&quot;:&quot;4&quot;,&quot;spaceBetween&quot;:30,&quot;spaceBetweenTablet&quot;:30,&quot;spaceBetweenMobile&quot;:30,&quot;effect&quot;:&quot;&quot;,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;centeredSlides&quot;:true,&quot;speed&quot;:&quot;3000&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;outsideNavigation&quot;:&quot;no&quot;,&quot;outsidePagination&quot;:&quot;no&quot;,&quot;unique&quot;:560,&quot;partialValue&quot;:0,&quot;disablePartialValue&quot;:&quot;&quot;}">
	<div class="swiper-wrapper">
		
<div class="qodef-e swiper-slide">
	<div class="qodef-e-inner">
		<div class="qodef-e-inner-holder">
							<a class="qodef-popup-item" itemprop="image" href="{{asset($images['img1'])}}" data-type="image" data-fslightbox="gallery-560">
							<img width="1920" height="1920" src="{{asset($images['img1'])}}" class="attachment-full size-full" alt="" decoding="async" loading="lazy" 
							srcset="{{asset($images['img1'])}}" sizes="(max-width: 1920px) 100vw, 1920px" />							</a>
					</div>{{asset($images['img1'])}}
	</div>
	</div>

<div class="qodef-e swiper-slide">
	<div class="qodef-e-inner">
		<div class="qodef-e-inner-holder">
							<a class="qodef-popup-item" itemprop="image" href="{{asset($images['img2'])}}" data-type="image" data-fslightbox="gallery-560">
							<img width="1920" height="1282" src="{{asset($images['img2'])}}" class="attachment-full size-full" alt="" decoding="async" loading="lazy" 
							srcset="{{asset($images['img2'])}}" sizes="(max-width: 1920px) 100vw, 1920px" />							</a>
					</div>
	</div>
	</div>

<div class="qodef-e swiper-slide">
	<div class="qodef-e-inner">
		<div class="qodef-e-inner-holder">
							<a class="qodef-popup-item" itemprop="image" href="{{asset($images['img3'])}}" data-type="image" data-fslightbox="gallery-560">
							<img width="1920" height="1147" src="{{asset($images['img3'])}}" class="attachment-full size-full" alt="" decoding="async" loading="lazy" 
							srcset="{{asset($images['img3'])}}" sizes="(max-width: 1920px) 100vw, 1920px" />							</a>
					</div>
	</div>
	</div>

<div class="qodef-e swiper-slide">
	<div class="qodef-e-inner">
		<div class="qodef-e-inner-holder">
							<a class="qodef-popup-item" itemprop="image" href="{{asset($images['img4'])}}" data-type="image" data-fslightbox="gallery-560">
							<img width="1920" height="1055" src="{{asset($images['img4'])}}" class="attachment-full size-full" alt="" decoding="async" loading="lazy"
							srcset="{{asset($images['img4'])}}" sizes="(max-width: 1920px) 100vw, 1920px" />							</a>
					</div>
	</div>
	</div>

<div class="qodef-e swiper-slide">
	<div class="qodef-e-inner">
		<div class="qodef-e-inner-holder">
							<a class="qodef-popup-item" itemprop="image" href="{{asset($images['img5'])}}" data-type="image" data-fslightbox="gallery-560">
							<img width="1920" height="979" src="{{asset($images['img5'])}}" class="attachment-full size-full" alt="" decoding="async" loading="lazy"
							srcset="{{asset($images['img5'])}} 981w" sizes="(max-width: 1920px) 100vw, 1920px" />							</a>
					</div>
	</div>
	</div>

<div class="qodef-e swiper-slide">
	<div class="qodef-e-inner">
		<div class="qodef-e-inner-holder">
							<a class="qodef-popup-item" itemprop="image" href="{{asset($images['img6'])}}" data-type="image" data-fslightbox="gallery-560">
							<img width="1920" height="1280" src="{{asset($images['img6'])}}" class="attachment-full size-full" alt="" decoding="async" loading="lazy" 
							srcset="{{asset($images['img6'])}}" sizes="(max-width: 1920px) 100vw, 1920px" />							</a>
					</div>
	</div>
	</div>
	</div>
		<div class="swiper-button-prev"><svg class="qodef-swiper-arrow-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.2 32.3" xml:space="preserve" style="stroke-width: 2;"><line x1="0.5" y1="16" x2="33.5" y2="16"/><line x1="0.3" y1="16.5" x2="16.2" y2="0.7"/><line x1="0" y1="15.4" x2="16.2" y2="31.6"/></svg></div>
	<div class="swiper-button-next"><svg class="qodef-swiper-arrow-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.2 32.3" xml:space="preserve" style="stroke-width: 2;"><line x1="0" y1="16" x2="33" y2="16"/><line x1="17.3" y1="0.7" x2="33.2" y2="16.5"/><line x1="17.3" y1="31.6" x2="33.5" y2="15.4"/></svg></div>
</div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2b9641c7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2b9641c7" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4a4ef600" data-id="4a4ef600" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-84c41f7 elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_button" data-id="84c41f7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_button.default">
				<div class="elementor-widget-container">
			<a class="qodef-shortcode qodef-m  qodef-qi-button qodef-html--link qodef-layout--textual    qodef-icon--right qodef-hover--icon-move-horizontal-short   qodef-text-underline qodef-underline--left " href="{{route('fronted.projects')}}" target="_self">
	<span class="qodef-m-text">Latest Projects</span>
		<span class="qodef-m-icon qodef--icon-color-set">
		<span class="qodef-m-icon-inner">
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="7px" height="7px" viewBox="1.25 1.25 7 7" xml:space="preserve"><polygon fill="#ffffff" points="1.25,1.25 1.25,2.25 6.543,2.25 1.25,7.543 1.958,8.25 7.25,2.957 7.25,8.25 8.25,8.25 8.25,1.25 8.25,1.25 "></polygon></svg>					</span>
	</span>
</a>
		</div>
				</div>
				<div class="elementor-element elementor-element-47429b65 elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="47429b65" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-animated-text qodef--animated-by-letter qodef--alignment-left qodef-qi--has-appear qodef--appear-from-right" >
		<h1 class="qodef-m-title">
			<?php
					$header = explode(' ', $control['headerprojects'] );
					?>
					@foreach ($header as $item)
					<span class="qodef-e-word-holder">{{$item}}</span>
					@endforeach	
		</h1>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-3108a487 elementor-invisible elementor-widget elementor-widget-heading" data-id="3108a487" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{$control['wordheaderprojects']}}</h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2aa4b017 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2aa4b017" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4f3b4dbe" data-id="4f3b4dbe" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-561006 animated-slow elementor-invisible elementor-widget elementor-widget-prime-slider-blog" data-id="561006" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="prime-slider-blog.zinest">
				<div class="elementor-widget-container">
			        <div class="bdt-prime-slider">
            <div class="bdt-prime-slider-skin-zinest">
                <div class="bdt-position-relative bdt-visible-toggle" data-settings="{&quot;id&quot;:&quot;#bdt-561006&quot;,&quot;animation_status&quot;:&quot;no&quot;}" id="bdt-561006" bdt-slideshow="{&quot;animation&quot;:&quot;fade&quot;,&quot;ratio&quot;:false,&quot;min-height&quot;:false,&quot;autoplay&quot;:true,&quot;autoplay-interval&quot;:7000,&quot;pause-on-hover&quot;:false,&quot;velocity&quot;:1,&quot;finite&quot;:false}">
                    <ul class="bdt-slideshow-items" style="min-height:72vh">

						

						@if ( !empty($projects[0]))
						@foreach ($projects as $i => $item)
						<?php 
						$string = $item;
						$pairs = explode('#x#', $string);
						$slide = [];
						foreach ($pairs as $pair) {
							list($key, $value) = explode('=#=', $pair);
							$slide[$key] = $value;
						}
						if($slide['status']== 'disappear')  continue;
						$imagePath = ($slide["img"]);
						$img = str_replace('\\', '/', $imagePath);
				?>
            <li class="bdt-slideshow-item bdt-flex bdt-flex-middle elementor-repeater-item-3178">

                
                    <div class="bdt-ps-slide-img" style="background-image: url('{{asset($img)}}')"></div>

                    
                                    <div class="bdt-overlay-default bdt-position-cover"></div>
                
                
        <div class="bdt-container">
            <div class="bdt-prime-slider-wrapper">
                <div class="bdt-prime-slider-content">
                    <div class="bdt-prime-slider-desc">

                        
                                                    <div class="bdt-main-title" data-reveal="reveal-active">
                                <h1 class="bdt-title-tag" data-bdt-slideshow-parallax="y: 80,0,-80; opacity: 1,1,0">

                                    <a href="{{route('fronted.projectDetails',$i)}}">

                                        <span class="frist-word">{{$slide['name']}}</span>                                     </a>


                                </h1>
                            </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>

        
                
            </li>
	
@endforeach
	
@endif
            



        </ul>

        
                    <div class="bdt-navigation-arrows bdt-position-bottom-right reveal-muted">
                <a class="bdt-prime-slider-previous" href="#" bdt-slidenav-previous bdt-slideshow-item="previous"></a>
                <a class="bdt-prime-slider-next" href="#" bdt-slidenav-next bdt-slideshow-item="next"></a>
            </div>
        
    
        </div>

        
                    <div class="bdt-ps-blog-container bdt-ps-blog-featured bdt-position-bottom bdt-flex bdt-flex-middle reveal-muted">
                <div class="bdt-child-width-1-3 bdt-grid bdt-grid-medium bdt-flex bdt-flex-middle" bdt-grid>
					@if ( !empty($projects[0]))
					@foreach ($projects as $i=> $item)
					<?php 
												$string = $item;
												$pairs = explode('#x#', $string);
												$slide = [];
												foreach ($pairs as $pair) {
													list($key, $value) = explode('=#=', $pair);
													$slide[$key] = $value;
												}
												if($slide['status']== 'disappear')  continue;
												$imagePath = ($slide["img"]);
												$img = str_replace('\\', '/', $imagePath);
												if($i == count($projects)/2) break;
												?>
												<div>
                            <div class="bdt-ps-featured bdt-position-relative bdt-grid-small bdt-flex bdt-flex-middle">
                                <div class="bdt-width-1-1 bdt-width-1-2@m">
                                    <div class="bdt-ps-featured-thumbnav">
                                        <a href="{{route('fronted.projectDetails',$i)}}">
                                            
        <img decoding="async" src="{{asset($img)}}" alt="SunPower Solutions">

                                            </a>
                                    </div>
                                </div>
                                <div class="bdt-width-1-1 bdt-width-1-2@m bdt-visible@m">
                                    <div class="bdt-ps-content">
                                        <div class="bdt-ps-title">
                                            <a href="{{route('fronted.projectDetails',$i)}}">
                                                <span class="frist-word">{{$slide['name']}}</span>                                            </a>
                                        </div>
                                        <div class="bdt-ps-desc">
                                                    <div class="bdt-blog-text" data-reveal="reveal-active">
            <p>{{$slide['category']}}</p>
        </div>
                                                </div>
                                    </div>
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
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6414c2ff elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6414c2ff" data-element_type="section">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-459237dc" data-id="459237dc" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-5acdb elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_button" data-id="5acdb" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_button.default">
				<div class="elementor-widget-container">
			<a class="qodef-shortcode qodef-m  qodef-qi-button qodef-html--link qodef-layout--textual    qodef-icon--right qodef-hover--icon-move-horizontal-short   qodef-text-underline qodef-underline--left " href="{{route('fronted.news')}}" target="_self">
	<span class="qodef-m-text">Latest News</span>
		<span class="qodef-m-icon qodef--icon-color-set">
		<span class="qodef-m-icon-inner">
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="7px" height="7px" viewBox="1.25 1.25 7 7" xml:space="preserve"><polygon fill="#ffffff" points="1.25,1.25 1.25,2.25 6.543,2.25 1.25,7.543 1.958,8.25 7.25,2.957 7.25,8.25 8.25,8.25 8.25,1.25 8.25,1.25 "></polygon></svg>					</span>
	</span>
</a>
		</div>
				</div>
				<div class="elementor-element elementor-element-454d147c elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="454d147c" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-animated-text qodef--animated-by-letter qodef--alignment-left qodef-qi--has-appear qodef--appear-from-right" >
		<h1 class="qodef-m-title">
			<?php
			$header = explode(' ', $control['headernews'] );
			?>
			@foreach ($header as $item)
			<span class="qodef-e-word-holder">{{$item}}</span>
			@endforeach		</h1>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-c2e91d4 elementor-invisible elementor-widget elementor-widget-heading" data-id="c2e91d4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{ $control['wordheadernews']}}</h2></div>
				</div>
					</div>
		</div>
							</div>
		</section>




				<section class="elementor-section elementor-top-section elementor-element elementor-element-4f677096 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="4f677096" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2699b288" data-id="2699b288" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-1f168823 elementor-widget elementor-widget-qi_addons_for_elementor_blog_slider" data-id="1f168823" data-element_type="widget" data-widget_type="qi_addons_for_elementor_blog_slider.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-addons-blog-slider qodef--list qodef-item-layout--standard qodef-info-no-icons qodef-title--hover-underline qodef-image--hover-zoom-out  qodef-qi-grid qodef-qi-swiper-container qodef-item-layout--standard qodef-navigation--outside  qodef-pagination--outside    qodef-navigation--hover-move" data-options="{&quot;direction&quot;:&quot;horizontal&quot;,&quot;slidesPerView&quot;:&quot;3&quot;,&quot;spaceBetween&quot;:30,&quot;spaceBetweenTablet&quot;:30,&quot;spaceBetweenMobile&quot;:30,&quot;effect&quot;:&quot;&quot;,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;centeredSlides&quot;:false,&quot;speed&quot;:&quot;&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;outsideNavigation&quot;:&quot;yes&quot;,&quot;outsidePagination&quot;:&quot;yes&quot;,&quot;unique&quot;:&quot;1&quot;,&quot;partialValue&quot;:0,&quot;disablePartialValue&quot;:&quot;&quot;}">
	<div class="swiper-wrapper">
		
		@if ( !empty($news[0]))

		@foreach ($news as $i => $slides)
										
		<?php 
				$string = $slides;
				$pairs = explode('#x#', $string);
				$slide = [];
				foreach ($pairs as $pair) {
					list($key, $value) = explode('=#=', $pair);
					$slide[$key] = $value;
				}
				if($slide['status']=='disappear') continue;
		?>


		<article class="qodef-e qodef-blog-item swiper-slide qodef-item--landscape post-5656 post type-post status-publish format-standard has-post-thumbnail hentry category-news is-cat-link-borders-light is-cat-link-rounded">
				<div class="qodef-e-inner">
					<div class="qodef-e-media">
										<div class="qodef-e-media-image">
										<a itemprop="url" href="{{route('fronted.newsDetails',$i)}}">
											<img width="1300" height="650" src="{{asset($slide['img'])}}" class="attachment-qi_addons_for_elementor_image_size_landscape size-qi_addons_for_elementor_image_size_landscape" alt="" decoding="async" loading="lazy" />		</a>
											</div>
								</div>
										<div class="qodef-e-content">
															<div class="qodef-e-info qodef-info--top">
													<div itemprop="dateCreated" class="qodef-e-info-item qodef-e-info-date entry-date published updated">
									<a itemprop="url" href="{{route('fronted.newsDetails',$i)}}">
												{{$slide['date']}}	</a>
								</div>
								<div class="qodef-e-info-item qodef-e-info-category">
									@if ($slide['category']=='NEWS')
									</span> <a href="{{route('fronted.onlynews')}}" rel="category tag">{{$slide['category']}}</a>				</span> <!-- .cat-links -->
									@else
								</span> <a href="{{route('fronted.onlyinsight')}}" rel="category tag">{{$slide['category']}}</a>				</span> <!-- .cat-links -->
									@endif

									</div>
												</div>
														<div class="qodef-e-text">
												<h2 itemprop="name" class="qodef-e-title entry-title">
									<a itemprop="url" class="qodef-e-title-link" href="{{route('fronted.newsDetails',$i)}}">
										{{$slide['title']}}	</a>
								</h2>
											</div>
													</div>
				</div>

        </article>
	
@endforeach
	
@endif
	</div>
	</div>
		<div class="swiper-button-prev swiper-button-outside swiper-button-prev-1"><svg class="qodef-swiper-arrow-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.2 32.3" xml:space="preserve" style="stroke-width: 2;"><line x1="0.5" y1="16" x2="33.5" y2="16"/><line x1="0.3" y1="16.5" x2="16.2" y2="0.7"/><line x1="0" y1="15.4" x2="16.2" y2="31.6"/></svg></div>
	<div class="swiper-button-next swiper-button-outside swiper-button-next-1"><svg class="qodef-swiper-arrow-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.2 32.3" xml:space="preserve" style="stroke-width: 2;"><line x1="0" y1="16" x2="33" y2="16"/><line x1="17.3" y1="0.7" x2="33.2" y2="16.5"/><line x1="17.3" y1="31.6" x2="33.5" y2="15.4"/></svg></div>
		<div class="swiper-pagination qodef-swiper-pagination-outside swiper-pagination-1"></div>
		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-619c4170 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="619c4170" data-element_type="section">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-63d2c484" data-id="63d2c484" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-16e31529 elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="16e31529" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
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
				<div class="elementor-element elementor-element-3e8649d0 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="3e8649d0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{$slide['wordheader']}}</h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-69d2ad7f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="69d2ad7f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
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
					
							<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-33ebd0d5" data-id="33ebd0d5" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6f62ba7a animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_team_member" data-id="6f62ba7a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_team_member.default">
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
				<section class="elementor-section elementor-top-section elementor-element elementor-element-66b60006 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="66b60006" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2355597b" data-id="2355597b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-660d13f6 elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_button" data-id="660d13f6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_button.default">
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
				<div class="elementor-element elementor-element-6fe31217 elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_animated_text" data-id="6fe31217" data-element_type="widget" data-widget_type="qi_addons_for_elementor_animated_text.default">
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
				<div class="elementor-element elementor-element-4b33e6f animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="4b33e6f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{$contact['wordheader']}}</h2>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-7c2926ed elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="7c2926ed" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-513b5679" data-id="513b5679" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-785ea0b9 animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_typeout_text" data-id="785ea0b9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="qi_addons_for_elementor_typeout_text.default">
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
				<div class="elementor-element elementor-element-fe910b animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_typeout_text" data-id="fe910b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="qi_addons_for_elementor_typeout_text.default">
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
				<div class="elementor-element elementor-element-14e8d154 elementor-widget__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-qi_addons_for_elementor_button" data-id="14e8d154" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="qi_addons_for_elementor_button.default">
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
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3fbae2fc elementor-section-stretched elementor-section-height-min-height elementor-section-items-top elementor-section-boxed elementor-section-height-default" data-id="3fbae2fc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					{{-- //item --}}


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
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5e8aa8de" data-id="5e8aa8de" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-59fc5c31 elementor-widget elementor-widget-heading" data-id="59fc5c31" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
						<h5 class="elementor-heading-title elementor-size-default">{{$slide['name']}} </h5>		</div>
							</div>
							<div class="elementor-element elementor-element-5bc00a2 elementor-align-left elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="5bc00a2" data-element_type="widget" data-widget_type="icon-list.default">
							<div class="elementor-widget-container">
								<ul class="elementor-icon-list-items">
										<li class="elementor-icon-list-item">
														<a href="#">

														<span class="elementor-icon-list-text">{{$slide['phone']}}</span>
														</a>
												</li>
											<li class="elementor-icon-list-item">
														<a href="#">

														<span class="elementor-icon-list-text">{{$slide['email']}} </span>
														</a>
												</li>
									</ul>
							</div>
							</div>
						<div class="elementor-element elementor-element-3db30ef3 elementor-align-left elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3db30ef3" data-element_type="widget" data-widget_type="icon-list.default">
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
							
<p> © {{now()->year}} Netzero Company</p>
						</div> <!-- .site-info -->
							</footer> <!-- #colophon .site-footer -->
	</div>
    
<link rel='stylesheet' id='ps-general-css' href='{{asset('fronted/wp-content/plugins/bdthemes-prime-slider-lite/assets/css/ps-general651e.css?ver=3.10.6')}}' type='text/css' media='all' />
<link rel='stylesheet' id='ps-blog-css' href='{{asset('fronted/wp-content/plugins/bdthemes-prime-slider-lite/assets/css/ps-blog651e.css?ver=3.10.6')}}' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelement-css' href='{{asset('fronted/wp-includes/js/mediaelement/mediaelementplayer-legacy.min1f61.css?ver=4.2.17')}}' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css' href='{{asset('fronted/wp-includes/js/mediaelement/wp-mediaelement.min18cf.css?ver=6.2.3')}}' type='text/css' media='all' />
<link rel='stylesheet' id='e-animations-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/animations/animations.min8864.css?ver=3.17.3')}}' type='text/css' media='all' />
@endsection
