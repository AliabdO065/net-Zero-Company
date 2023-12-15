@extends('fronted.layouts.layout')
@section('content')
<link rel='stylesheet' id='swiper-css' href='{{asset('fronted/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5')}}' type='text/css' media='all' />
<script type='text/javascript' src='{{asset('fronted/wp-includes/js/jquery/jquery.min5aed.js?ver=3.6.4')}}' id='jquery-core-js'></script>
<script type='text/javascript' src='{{asset('fronted/wp-includes/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0')}}' id='jquery-migrate-js'></script>
<link rel="https://api.w.org/" href="{{asset('fronted/wp-json/index.html')}}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{asset('fronted/xmlrpc0db0.php?rsd')}}" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{asset('fronted/wp-includes/wlwmanifest.xml')}}" />
<link style="{{asset('dashboard/assets/stylesheets/custom.css')}}">
<meta name="generator" content="WordPress 6.2.3" />
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

<body class="blog qodef-qi--no-touch qi-addons-for-elementor-1.6.5 elementor-default elementor-kit-8">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>    <div id="page" class="hfeed site">
		        <header id="masthead" class="site-header" role="banner">
						<div class="header-wrap" data-parallax-video="">
				<div class="header-wrap-inner">
					<div class="site-branding">
						<div class="site-branding-wrap">
							<div class="site-branding-left">
															</div> <!-- .site-branding-left -->

							<div class="site-branding-center">
                                <a class="menu-toggle">
                                    <span class="lines"></span>

                                </a> <!-- .site-title -->

																			<p class="site-description">
																	</p> <!-- .site-description -->
							</div> <!-- .site-branding-center -->

                                <a href="{{route('fronted.index')}}" rel="home" class="logo-img">
                                    <img class="logo-img" src="{{asset('dashboard/assets/logo.png')}}">
                                </a>

							<div class="site-branding-right">
															</div> <!-- .site-branding-right -->
						</div> <!-- .site-branding-wrap -->
					</div> <!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation site-navigation" role="navigation">
						<div class="menu-wrap">
							<div class="layout-medium" style="color: black">

<div class="nav-menu"><ul id="menu-main-menu" class=""><li id="menu-item-847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-847"><a href="{{route('fronted.index')}}">Home</a></li>
<li id="menu-item-1001" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1001"><a href="{{route('fronted.index')}}">About Us</a></li>
<li id="menu-item-1247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1247"><a href="{{route('fronted.services')}}">Services</a></li>
<li id="menu-item-1729" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1729"><a href="{{route('fronted.projects')}}">Projects</a></li>
<li id="menu-item-6411" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5622 current_page_item current_page_parent menu-item-6411"><a href="{{route('fronted.news')}}" aria-current="page">News</a></li>
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
<div id="main" class="site-main">
	<div class="layout-medium">
		<div id="primary" class="content-area ">
			<div id="content" class="site-content" role="main">
								<div class="post-header post-header-classic archive-header">
										<header class="entry-header" >
											{{-- ////////////////////////////////////////////////modify --}}
						<h1 style="margin-top: 100px;" class="entry-title">
							<span class="cat-title">
								<?php

									if($word == 'INSIGHTS'){
										echo'INSIGHTS';
									}else {
										echo'News';
									}

									?>
							</span> <!-- .cat-title -->						</h1> <!-- .entry-title -->
					</header> <!-- .entry-header -->
				</div> <!-- .post-header .post-header-classic .archive-header -->
							<div class="blog-grid-wrap">
					<div class="blog-stream blog-grid blog-small masonry " data-layout="masonry" data-item-width="360">
			@if (!empty($content[0]))
			@foreach ($content as $i => $slides)

					<?php
							$string = $slides;
							$pairs = explode('#x#', $string);
							$slide = [];
							foreach ($pairs as $pair) {
								list($key, $value) = explode('=#=', $pair);
								$slide[$key] = $value;
							}
							if($word == 'NEWS'){
								if($slide['category']=='INSIGHTS')  continue;
							}elseif ($word == 'INSIGHTS') {
								if($slide['category']=='NEWS')  continue;
							}
							if($slide['status']=='disappear')  continue;
					?>
			<article id="post-5656" class="post-5656 post type-post status-publish format-standard has-post-thumbnail hentry category-news is-cat-link-borders-light is-cat-link-rounded">
									<div class="hentry-wrap">
													<div class="featured-image">
									<a href="{{route('fronted.newsDetails',$i)}}">
										<img width="550" height="271" src="{{route('fronted.newsDetails',$i)}}"
										 class="attachment-energify_image_size_2 size-energify_image_size_2 wp-post-image" alt="" decoding="async"
										  srcset="{{asset($slide['img'])}}" sizes="(max-width: 550px) 100vw, 550px" />					</a>
								</div> <!-- .featured-image -->
																			<div class="hentry-middle">
																	<header class="entry-header">
																																<h2 class="entry-title">
																			<a href="{{route('fronted.newsDetails',$i)}}">{{$slide['title']}}</a>
																		</h2>
																							<div class="entry-meta below-title">
														<span class="cat-links">
									<span class="prefix">
										in
									@if ($slide['category']=='NEWS')
									</span> <a href="{{route('fronted.onlynews')}}" rel="category tag">{{$slide['category']}}</a>				</span> <!-- .cat-links -->
									@else
								</span> <a href="{{route('fronted.onlyinsight')}}" rel="category tag">{{$slide['category']}}</a>				</span> <!-- .cat-links -->
									@endif
										<span class="posted-on">
								<span class="prefix">
									on				</span>
								<a href="{{route('fronted.newsDetails',$i)}}" rel="bookmark">
									<time class="entry-date published" datetime="2023-05-18T11:27:25+00:00">
										{{$slide['date']}}					</time>
									<time class="updated" datetime="2023-07-21T10:06:29+00:00">
										{{$slide['date']}}					</time>
								</a>
							</span> <!-- .posted-on -->
									<span class="entry-share">
								<span class="entry-share-text">Share</span> <!-- .entry-share-text -->

								<span class="entry-share-wrap">
									<span class="entry-share-inner-wrap">
										<a class="share-facebook" rel="nofollow" target="_blank" href="https://www.facebook.com/sharer.php?u=https://themes.pixelwars.org/energify/demo-01/architectural-heritage/&amp;t=Solar%20Energy%20Surpasses%20Milestone" title="Share this post on Facebook">Facebook</a>

										<a class="share-twitter" rel="nofollow" target="_blank" href="https://twitter.com/intent/tweet?text=Currently%20reading:%20'Solar%20Energy%20Surpasses%20Milestone'%20on%20https://themes.pixelwars.org/energify/demo-01/architectural-heritage/" title="Tweet this post to your followers">Twitter</a>

										<a class="share-pinterest" rel="nofollow" target="_blank" href="https://pinterest.com/pin/create/button/?url=https://themes.pixelwars.org/energify/demo-01/architectural-heritage/&amp;media=https://themes.pixelwars.org/energify/demo-01/wp-content/uploads/sites/2/2023/07/solar-container-unit-3d-rendering-concept-white-industrial-battery-energy-storage-container-with-mounted-black-solar-panels-situated-fresh-green-grass-late-sunny-weather.jpg&amp;description=Solar%20Energy%20Surpasses%20Milestone" title="Pin it">Pinterest</a>

										<a class="share-mail" rel="nofollow" target="_blank" href="mailto:?subject=I%20wanted%20you%20to%20see%20this%20post&#038;body=Check%20out%20this%20post:%20Solar%20Energy%20Surpasses%20Milestone%20-%20https://themes.pixelwars.org/energify/demo-01/architectural-heritage/" title="Email this post to a friend">Email</a>
									</span> <!-- .entry-share-inner-wrap -->
								</span> <!-- .entry-share-wrap -->
							</span> <!-- .entry-share -->
											</div> <!-- .entry-meta .below-title -->
																					</header> <!-- .entry-header -->
																	<div class="entry-content">
																		<p>{{$slide['wordtitle']}}&#8230; </p>
						<p class="more"><a class="more-link" href="{{route('fronted.newsDetails',$i)}}">Read More</a></p>
																	</div> <!-- .entry-content -->
																													</div> <!-- .hentry-middle -->
															</div> <!-- .hentry-wrap -->
				</article>

			@endforeach
					@endif




														</div> <!-- .blog-stream .blog-grid .blog-small .masonry -->
				</div> <!-- .blog-grid-wrap -->
							</div> <!-- #content .site-content -->
		</div> <!-- #primary .content-area -->
			</div> <!-- .layout-medium -->
</div> <!-- #main .site-main -->

        <footer id="colophon" class="site-footer" role="contentinfo">
									<div class="site-info">

<p>©2  {{now()->year}} Netzero Company</p>
						</div> <!-- .site-info -->
							</footer> <!-- #colophon .site-footer -->
	</div>

@endsection
