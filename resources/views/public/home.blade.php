		
@extends('public.layouts.parent')

@section('title', "GoMommy® | Mother of all sites")

@section('content')
		<!-- 
		=============================================
			Hero Banner
		============================================== 
		-->
		<div class="hero-banner-three position-relative z-1 pt-130 lg-pt-100 pb-170 xl-pb-130 lg-pb-100">
			<div class="hero-slider-one m0">
				<div class="item m0"><div class="hero-img" style="background-image: url(images/media/img_26.jpg);"></div></div>
				<div class="item m0"><div class="hero-img" style="background-image: url(images/media/img_27.jpg);"></div></div>
				<div class="item m0"><div class="hero-img" style="background-image: url(images/media/img_28.jpg);"></div></div>
			</div>
			<!-- /.hero-slider-one -->
			<div class="container position-relative z-2">
				<div class="row">
					<div class="col-lg-10 m-auto">
						<h1 class="hero-heading text-center text-white font-garamond fw-500 wow fadeInUp"><span>
							<img src="images/lazy.svg" data-src="images/shape/shape_34.svg" alt="" class="lazy-img"> 
							Go Mommy</span> 
							{{-- <br> Home for Your Family --}}
						</h1>
						<p class="fs-24 text-white text-center pt-35 md-pt-20 pb-55 lg-pb-40 wow fadeInUp" data-wow-delay="0.1s">We’ve more than 745,000 themes for all of your needs.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xxl-10 m-auto">
						<div class="search-wrapper-one layout-one position-relative wow fadeInUp" data-wow-delay="0.2s">
							<div class="bg-wrapper">
								<form action="listing_07.html">
									<div class="row gx-0 align-items-center">

										<div class="col-xl-4 col-lg-4">
											<div class="input-box-one border-left">
												<div class="label">I’m looking for...</div>
												<select class="nice-select fw-normal">
													<option value="1">Portfolio Theme</option>
													<option value="1">Housing Theme</option>
													<option value="2">Education Theme</option>
													<option value="3">Entertainment Theme</option>
													<option value="4">Food & Drink Theme</option>
													<option value="6">News Theme</option>
													<option value="7">Blog Theme</option>
												</select>
											</div>
											<!-- /.input-box-one -->
										</div>
										{{-- <div class="col-xl-3 col-lg-4">
											<div class="input-box-one border-left">
												<div class="label">Location</div>
												<select class="nice-select location fw-normal">
													<option value="1">Dhanmondi, Dhaka</option>
													<option value="2">Acapulco, Mexico</option>
													<option value="3">Berlin, Germany</option>
													<option value="4">Cannes, France</option>
													<option value="5">Delhi, India</option>
													<option value="6">Giza, Egypt </option>
													<option value="7">Havana, Cuba</option>
												</select>
											</div>
											<!-- /.input-box-one -->
										</div> --}}
										<div class="col-xl-4 col-lg-4">
											<div class="input-box-one border-left border-lg-0">
												<div class="label">Price Range</div>
												<select class="nice-select fw-normal">
													<option value="1">RS. 1000 - RS. 2000</option>
													<option value="2">RS. 3000 - RS. 5000</option>
													<option value="2">RS. 5000 - RS. 10,000</option>
												</select>
											</div>
											<!-- /.input-box-one -->
										</div>
										<div class="col-xl-4">
											<div class="input-box-one lg-mt-10">
												<button class="fw-500 w-100 tran3s search-btn-three">Search Now</button>
											</div>
											<!-- /.input-box-one -->
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- /.search-wrapper-one -->
					</div>
				</div>
			</div>
            <img src="images/lazy.svg" data-src="images/shape/shape_35.svg" alt="" class="lazy-img shapes shape_01">
            <img src="images/lazy.svg" data-src="images/shape/shape_36.svg" alt="" class="lazy-img shapes shape_02">
		</div>
		<!-- /.hero-banner-three -->


		
		<!-- 
		=============================================
			Category Section One
		============================================== 
		-->
		<div class="category-section-one mt-65">
			<div class="container container-large">
                <div class="position-relative border-bottom pb-65 xl-pb-40 z-1">
                    <h4 class="mb-50 xl-mb-30 text-center text-md-start">Popular Categories.</h4>
                    <div class="wrapper">
                        <ul class="d-flex flex-wrap justify-content-center justify-content-xxl-between style-none">
                            <li>
                                <a href="" class="d-flex align-items-center fw-500 tran3s">
                                    <img src="images/lazy.svg" data-src="images/icon/icon_15.svg" alt="" class="lazy-img invert">
                                    <span>Porfolio</span>
                                </a>
                            </li>
							<li>
                                <a href="" class="d-flex align-items-center fw-500 tran3s">
                                    <img src="images/lazy.svg" data-src="images/icon/icon_19.svg" alt="" class="lazy-img invert">
                                    <span>Housing</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-flex align-items-center fw-500 tran3s">
                                    <img src="images/lazy.svg" data-src="images/icon/icon_16.svg" alt="" class="lazy-img invert">
                                    <span>Education</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-flex align-items-center fw-500 tran3s">
                                    <img src="images/lazy.svg" data-src="images/icon/icon_17.svg" alt="" class="lazy-img invert">
                                    <span>Food & Drink</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-flex align-items-center fw-500 tran3s">
                                    <img src="images/lazy.svg" data-src="images/icon/icon_18.svg" alt="" class="lazy-img invert">
                                    <span>News</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="d-flex align-items-center fw-500 tran3s">
                                    <img src="images/lazy.svg" data-src="images/icon/icon_19.svg" alt="" class="lazy-img invert">
                                    <span>Blog</span>
                                </a>
                            </li>
                            
                            {{-- <li>
                                <a href="listing_01.html" class="d-flex align-items-center fw-500 tran3s">
                                    <img src="images/lazy.svg" data-src="images/icon/icon_20.svg" alt="" class="lazy-img invert">
                                    <span>Medical</span>
                                </a>
                            </li>
                            <li>
                                <a href="listing_01.html" class="d-flex align-items-center fw-500 tran3s">
                                    <img src="images/lazy.svg" data-src="images/icon/icon_21.svg" alt="" class="lazy-img invert">
                                    <span>House</span>
                                </a>
                            </li>
                            <li>
                                <a href="listing_01.html" class="d-flex align-items-center fw-500 tran3s">
                                    <img src="images/lazy.svg" data-src="images/icon/icon_22.svg" alt="" class="lazy-img invert">
                                    <span>Loft</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <!-- /.wrapper -->
                    <div class="section-btn text-center sm-mt-40">
                        <a href="listing_08.html" class="btn-eleven"><span>See all categories</span> <i class="bi bi-chevron-right"></i></a>
                    </div>
                    <!-- /.section-btn -->
                </div>
            </div>
		</div>
		<!-- /.category-section-one -->



        <!--
		=====================================================
			BLock Feature Seven
		=====================================================
		-->
		{{-- <div class="block-feature-seven position-relative z-1 mt-120 xl-mt-100">
			<div class="container container-large">
				<div class="position-relative">
					<div class="text-center mb-30 wow fadeInUp">
						<div class="title-one mb-30 lg-mb-20">
							<h2 class="font-garamond star-shape">How our clients get <em>benefited</em> by us <span class="star-shape"><img src="images/lazy.svg" data-src="images/shape/shape_37.svg" alt="" class="lazy-img"></span></h2>
							<p class="fs-24 mt-xs">“Outstanding service, bought my dream home quickly!”</p>
						</div>
						<!-- /.title-one -->
						<ul class="rating style-none d-flex justify-content-center">
							<li><i class="fa-sharp fa-solid fa-star"></i></li>
							<li><i class="fa-sharp fa-solid fa-star"></i></li>
							<li><i class="fa-sharp fa-solid fa-star"></i></li>
							<li><i class="fa-sharp fa-solid fa-star"></i></li>
							<li><i class="fa-sharp fa-solid fa-star"></i></li>
							<li><span class="color-dark fw-500">4.7</span> (18k Reviews)</li>
						</ul>
					</div>

					<div class="row justify-content-center gx-xxl-5">
						<div class="col-lg-4 col-md-6 mt-30 d-flex wow fadeInUp">
							<div class="card-style-five text-center d-inline-flex flex-column align-items-center tran3s h-100 w-100">
								<img src="images/lazy.svg" data-src="images/icon/icon_23.svg" alt="" class="lazy-img icon">
								<h5 class="mt-35 mb-20">Buy a home</h5>
								<p class="fs-22 mb-50">Explore homy’s 2 million+ homes and uncover your ideal living space.</p>
								<a href="listing_10.html" class="btn-twelve mt-auto">Find Home</a>
							</div>
							<!-- /.card-style-five -->
						</div>
						<div class="col-lg-4 col-md-6 mt-30 d-flex wow fadeInUp" data-wow-delay="0.1s">
							<div class="card-style-five text-center d-inline-flex flex-column align-items-center tran3s h-100 w-100">
								<img src="images/lazy.svg" data-src="images/icon/icon_24.svg" alt="" class="lazy-img icon">
								<h5 class="mt-35 mb-20">Rent a home</h5>
								<p class="fs-22 mb-50">Discover a rental you'll love on homy, thanks to 35+ filters and tailored keywords.</p>
								<a href="listing_10.html" class="btn-twelve mt-auto">Rent Home</a>
							</div>
							<!-- /.card-style-five -->
						</div>
						<div class="col-lg-4 col-md-6 mt-30 d-flex wow fadeInUp" data-wow-delay="0.2s">
							<div class="card-style-five text-center d-inline-flex flex-column align-items-center tran3s h-100 w-100">
								<img src="images/lazy.svg" data-src="images/icon/icon_25.svg" alt="" class="lazy-img icon">
								<h5 class="mt-35 mb-20">Sell property</h5>
								<p class="fs-22 mb-50">List, sell, thrive – with our top-notch real estate agency. It’s super easy & fun.</p>
								<a href="listing_10.html" class="btn-twelve mt-auto">Sell Property</a>
							</div>
							<!-- /.card-style-five -->
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- /.block-feature-seven -->
		



		<!-- 
		=============================================
			Featured Themes Listing Three
		============================================== 
		-->
		<div class="property-listing-three position-relative z-1 mt-170 xl-mt-140 lg-mt-120">
			<div class="container container-large">
				<div class="position-relative">
					<div class="title-one mb-60 lg-mb-40 wow fadeInUp">
						<h2 class="font-garamond star-shape">Featured <em>Themes</em> <span class="star-shape"><img src="images/lazy.svg" data-src="images/shape/shape_37.svg" alt="" class="lazy-img"></span></h2>
						<p class="fs-22 m0">Explore featured themes.</p>
					</div>
					<!-- /.title-one -->

					<div class="row gx-xxl-5">
						<div class="col-lg-8 d-flex">
							<div class="listing-card-three w-100 h-100 position-relative z-1 wow fadeInUp" style="background-image: url(images/listing/img_12.jpg);">
								<div class="w-100 h-100 d-flex flex-column">
									{{-- <div class="tag fw-500 text-uppercase">FOR SELL</div> --}}
									<div class="mt-100 mt-sm-auto wrapper d-flex flex-wrap justify-content-between align-items-center">
										<div class="property-name h-100">
											<h5 class="text-white mb-15">Nova Photographer Portfolio Theme.</h5>
											{{-- <p class="m0 text-white">Mirpur 10, Stadium dhaka 1210</p> --}}
										</div>
										<!-- /.property-name -->
										<div class="property-info h-100">
											<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between pb-5">
												<li class="d-flex align-items-center">
													<div class="fs-16"><span>$2000</span> Price</div>
												</li>
												{{-- <li class="d-flex align-items-center">
													<div class="fs-16"><span>03</span> beds</div>
												</li>
												<li class="d-flex align-items-center">
													<div class="fs-16"><span>01</span> kitchen</div>
												</li>
												<li class="d-flex align-items-center">
													<div class="fs-16"><span>02</span> baths</div>
												</li> --}}
											</ul>
											<div class="d-sm-flex justify-content-between align-items-center mt-10">
												{{-- <ul class="style-none d-flex action-icons">
													<li><a href="#"><i class="fa-light fa-heart"></i></a></li>
													<li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
													<li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
												</ul> --}}
												<a href="listing_details_05.html" class="btn-ten xs-mt-20"><span>Full Details</span> <i class="bi bi-arrow-up-right"></i></a>
											</div>
										</div>
										<!-- /.property-info -->
									</div>
								</div>
							</div>
							<!-- /.listing-card-three -->
						</div>
						<div class="col-lg-4 d-flex">
							<div class="w-100 h-100">
								<div class="row h-100">
									<div class="col-lg-12 col-md-6">
										<div class="listing-card-two w-100 position-relative z-1 md-mt-40 wow fadeInUp" style="background-image: url(images/listing/img_10.jpg);">
											<div class="w-100 h-100 d-flex flex-column">
												{{-- <div class="tag fw-500 text-uppercase">FOR SELL</div> --}}
												<div class="mt-auto d-lg-flex justify-content-between align-items-center">
													<div class="md-mb-20">
														<h5 class="text-white">Astra Theme</h5>
														<p class="m0 text-white">$500 Dollar</p>
													</div>
													<a href="listing_details_05.html" class="btn-four rounded-circle inverse stretched-link"><i class="bi bi-arrow-up-right"></i></a>
												</div>
											</div>
										</div>
										<!-- /.listing-card-two -->
									</div>
									<div class="col-lg-12 col-md-6">
										<div class="listing-card-two w-100 position-relative z-1 mt-40 wow fadeInUp" style="background-image: url(images/listing/img_11.jpg);">
											<div class="w-100 h-100 d-flex flex-column">
												{{-- <div class="tag fw-500 text-uppercase">FOR RENT</div> --}}
												<div class="mt-auto d-lg-flex justify-content-between align-items-center">
													<div class="md-mb-20">
														<h5 class="text-white">Modern Duplex Real Estate Theme</h5>
														<p class="m0 text-white">$1500 Dollar</p>
													</div>
													<a href="listing_details_05.html" class="btn-four rounded-circle inverse stretched-link"><i class="bi bi-arrow-up-right"></i></a>
												</div>
											</div>
										</div>
										<!-- /.listing-card-two -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="section-btn text-center md-mt-60">
						<a href="listing_04.html" class="btn-five md"><span>Explore All</span> <i class="bi bi-arrow-up-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.property-listing-three -->



		<!--
		=====================================================
			New Themes 
		=====================================================
		-->
		<div class="property-listing-four bg-pink-three position-relative z-1 overflow-hidden pt-120 xl-pt-80 pb-110 xl-pb-60 mt-170 xl-mt-140 lg-mt-120">
			<div class="container container-large">
				<div class="position-relative z-1">
					<div class="title-one mb-60 lg-mb-40 wow fadeInUp">
						<h2 class="font-garamond">New <em>Themes</em> <span class="star-shape"><img src="images/lazy.svg" data-src="images/shape/shape_37.svg" alt="" class="lazy-img"></span></h2>
						<p class="fs-22 m0">Explore latest & featured themes for sale.</p>
					</div>
					<!-- /.title-one -->
	
					<div class="listing-slider-one">
						<div class="item">
							<div class="listing-card-one style-three border-30 mb-50">
								<div class="img-gallery p-15">
									<div class="position-relative border-20 overflow-hidden">
										{{-- <div class="tag bg-white text-dark fw-500 border-20">FOR RENT</div> --}}
										<img src="images/listing/img_13.jpg" class="w-100 border-20" alt="...">
										<a href="listing_details_04.html" class="btn-four inverse rounded-circle position-absolute"><i class="bi bi-arrow-up-right"></i></a>
										<div class="img-slider-btn">
											03 <i class="fa-regular fa-image"></i>
											<a href="images/listing/img_large_01.jpg" class="d-block" data-fancybox="img1" data-caption="Blueberry villa"></a>
											<a href="images/listing/img_large_02.jpg" class="d-block" data-fancybox="img1" data-caption="Blueberry villa"></a>
											<a href="images/listing/img_large_03.jpg" class="d-block" data-fancybox="img1" data-caption="Blueberry villa"></a>
										</div>
									</div>
								</div>
								<!-- /.img-gallery -->
								<div class="property-info pe-4 ps-4">
									<a href="listing_details_04.html" class="title tran3s">Hestia News Theme.</a>
									{{-- <div class="address">Mirpur 10, Stadium dhaka 1208</div> --}}
									{{-- <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">1780</strong> sqft</span>
										</li>
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">03</strong> bed</span>
										</li>
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">02</strong> bath</span>
										</li>
									</ul> --}}
									<div class="pl-footer top-border d-flex align-items-center justify-content-between">
										<strong class="price fw-500 color-dark">$200</strong>
										<ul class="style-none d-flex action-icons">
											<li><a href="#"><i class="fa-light fa-heart"></i></a></li>
											<li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
											<li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-one -->
						</div>
						<div class="item">
							<div class="listing-card-one style-three border-30 mb-50">
								<div class="img-gallery p-15">
									<div class="position-relative border-20 overflow-hidden">
										{{-- <div class="tag bg-white text-dark fw-500 border-20">FOR SELL</div> --}}
										<img src="images/listing/img_14.jpg" class="w-100 border-20" alt="...">
										<a href="listing_details_04.html" class="btn-four inverse rounded-circle position-absolute"><i class="bi bi-arrow-up-right"></i></a>
										<div class="img-slider-btn">
											03 <i class="fa-regular fa-image"></i>
											<a href="images/listing/img_large_04.jpg" class="d-block" data-fancybox="img2" data-caption="White House villa"></a>
											<a href="images/listing/img_large_05.jpg" class="d-block" data-fancybox="img2" data-caption="White House villa"></a>
											<a href="images/listing/img_large_06.jpg" class="d-block" data-fancybox="img2" data-caption="White House villa"></a>
										</div>
									</div>
								</div>
								<!-- /.img-gallery -->
								<div class="property-info pe-4 ps-4">
									<a href="listing_details_04.html" class="title tran3s">Go Blogging Theme</a>
									{{-- <div class="address">California link road, ca, usa</div>
									<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">2340</strong> sqft</span>
										</li>
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">04</strong> bed</span>
										</li>
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">03</strong> bath</span>
										</li>
									</ul> --}}
									<div class="pl-footer top-border d-flex align-items-center justify-content-between">
										<strong class="price fw-500 color-dark">$300</strong>
										<ul class="style-none d-flex action-icons">
											<li><a href="#"><i class="fa-light fa-heart"></i></a></li>
											<li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
											<li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-one -->
						</div>
						<div class="item">
							<div class="listing-card-one style-three border-30 mb-50">
								<div class="img-gallery p-15">
									<div class="position-relative border-20 overflow-hidden">
										{{-- <div class="tag bg-white text-dark fw-500 border-20">FOR SELL</div> --}}
										<img src="images/listing/img_15.jpg" class="w-100 border-20" alt="...">
										<a href="listing_details_04.html" class="btn-four inverse rounded-circle position-absolute"><i class="bi bi-arrow-up-right"></i></a>
										<div class="img-slider-btn">
											04 <i class="fa-regular fa-image"></i>
											<a href="images/listing/img_large_01.jpg" class="d-block" data-fancybox="img3" data-caption="Luxury villa in Dal lake."></a>
											<a href="images/listing/img_large_05.jpg" class="d-block" data-fancybox="img3" data-caption="Luxury villa in Dal lake."></a>
											<a href="images/listing/img_large_03.jpg" class="d-block" data-fancybox="img3" data-caption="Luxury villa in Dal lake."></a>
											<a href="images/listing/img_large_02.jpg" class="d-block" data-fancybox="img3" data-caption="Luxury villa in Dal lake."></a>
										</div>
									</div>
								</div>
								<!-- /.img-gallery -->
								<div class="property-info pe-4 ps-4">
									<a href="listing_details_04.html" class="title tran3s">Kadence Theme</a>
									{{-- <div class="address">Mirpur 10, Stadium</div> --}}
									{{-- <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">1857</strong> sqft</span>
										</li>
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">03</strong> bed</span>
										</li>
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">01</strong> bath</span>
										</li>
									</ul> --}}
									<div class="pl-footer top-border d-flex align-items-center justify-content-between">
										<strong class="price fw-500 color-dark">$500</strong>
										<ul class="style-none d-flex action-icons">
											<li><a href="#"><i class="fa-light fa-heart"></i></a></li>
											<li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
											<li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-one -->
						</div>
						<div class="item">
							<div class="listing-card-one style-three border-30 mb-50">
								<div class="img-gallery p-15">
									<div class="position-relative border-20 overflow-hidden">
										{{-- <div class="tag bg-white text-dark fw-500 border-20">FOR SELL</div> --}}
										<img src="images/listing/img_16.jpg" class="w-100 border-20" alt="...">
										<a href="listing_details_04.html" class="btn-four inverse rounded-circle position-absolute"><i class="bi bi-arrow-up-right"></i></a>
										<div class="img-slider-btn">
											04 <i class="fa-regular fa-image"></i>
											<a href="images/listing/img_large_04.jpg" class="d-block" data-fancybox="img4" data-caption="South Sun House"></a>
											<a href="images/listing/img_large_06.jpg" class="d-block" data-fancybox="img4" data-caption="South Sun House"></a>
											<a href="images/listing/img_large_03.jpg" class="d-block" data-fancybox="img4" data-caption="South Sun House"></a>
											<a href="images/listing/img_large_02.jpg" class="d-block" data-fancybox="img4" data-caption="South Sun House"></a>
										</div>
									</div>
								</div>
								<!-- /.img-gallery -->
								<div class="property-info pe-4 ps-4">
									<a href="listing_details_04.html" class="title tran3s">Kubio Theme</a>
									{{-- <div class="address">Mirpur 10, Stadium</div> --}}
									{{-- <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">2450</strong> sqft</span>
										</li>
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">04</strong> bed</span>
										</li>
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">03</strong> bath</span>
										</li>
									</ul> --}}
									<div class="pl-footer top-border d-flex align-items-center justify-content-between">
										<strong class="price fw-500 color-dark">$500</strong>
										<ul class="style-none d-flex action-icons">
											<li><a href="#"><i class="fa-light fa-heart"></i></a></li>
											<li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
											<li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-one -->
						</div>
						<div class="item">
							<div class="listing-card-one style-three border-30 mb-50">
								<div class="img-gallery p-15">
									<div class="position-relative border-20 overflow-hidden">
										{{-- <div class="tag bg-white text-dark fw-500 border-20">FOR SELL</div> --}}
										<img src="images/listing/img_14.jpg" class="w-100 border-20" alt="...">
										<a href="listing_details_04.html" class="btn-four inverse rounded-circle position-absolute"><i class="bi bi-arrow-up-right"></i></a>
										<div class="img-slider-btn">
											03 <i class="fa-regular fa-image"></i>
											<a href="images/listing/img_large_04.jpg" class="d-block" data-fancybox="img5" data-caption="White House villa"></a>
											<a href="images/listing/img_large_05.jpg" class="d-block" data-fancybox="img5" data-caption="White House villa"></a>
											<a href="images/listing/img_large_06.jpg" class="d-block" data-fancybox="img5" data-caption="White House villa"></a>
										</div>
									</div>
								</div>
								<!-- /.img-gallery -->
								<div class="property-info pe-4 ps-4">
									<a href="listing_details_04.html" class="title tran3s">Ace News Theme</a>
									{{-- <div class="address">California link road, ca, usa</div>
									<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">2340</strong> sqft</span>
										</li>
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">04</strong> bed</span>
										</li>
										<li class="d-flex align-items-center">
											<span class="fs-16"><strong class="fw-500 color-dark">03</strong> bath</span>
										</li>
									</ul> --}}
									<div class="pl-footer top-border d-flex align-items-center justify-content-between">
										<strong class="price fw-500 color-dark">$28,100</strong>
										<ul class="style-none d-flex action-icons">
											<li><a href="#"><i class="fa-light fa-heart"></i></a></li>
											<li><a href="#"><i class="fa-light fa-bookmark"></i></a></li>
											<li><a href="#"><i class="fa-light fa-circle-plus"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-one -->
						</div>
					</div>
					<div class="section-btn text-center">
						<a href="listing_04.html" class="btn-eleven fst-italic"><span>See all themes</span></a>
					</div>
					<ul class="slider-arrows slick-arrow-two d-flex justify-content-center style-none md-mt-30">
						<li class="prev_b slick-arrow"><i class="bi bi-arrow-left"></i></li>
						<li class="next_b slick-arrow"><i class="bi bi-arrow-right"></i></li>
					</ul>
				</div>
			</div>
			<img src="images/lazy.svg" data-src="images/shape/shape_38.svg" alt="" class="lazy-img shapes shape_01 wow fadeInDown">
			<img src="images/lazy.svg" data-src="images/shape/shape_39.svg" alt="" class="lazy-img shapes shape_02 wow fadeInUp">
		</div>
		<!-- /.property-listing-four -->



		<!--
		=====================================================
			BLock Feature Eight
		=====================================================
		-->
		{{-- <div class="block-feature-eight position-relative z-1 mt-170 xl-mt-140 lg-mt-120">
			<div class="container container-large">
				<div class="position-relative">
					<div class="row align-items-xl-end">
						<div class="col-xl-7 col-lg-6">
							<div class="pe-xl-5 me-xxl-3 wow fadeInLeft">
								<div class="title-one pe-xl-5">
									<h2 class="font-garamond">Explore & Find your <em>Dream</em> home <span class="star-shape"><img src="images/lazy.svg" data-src="images/shape/shape_37.svg" alt="" class="lazy-img"></span></h2>
								</div>
								<!-- /.title-one -->
	
								<div class="row gx-xl-4 align-items-end">
									<div class="col-7">
										<div class="media-block position-relative z-1">
											<img src="images/lazy.svg" data-src="images/media/img_29.jpg" alt="" class="lazy-img main-img w-100">
											<img src="images/lazy.svg" data-src="images/assets/screen_03.jpg" alt="" class="lazy-img shapes screen_01">
											<img src="images/lazy.svg" data-src="images/shape/shape_40.svg" alt="" class="lazy-img shapes shape_01">
										</div>
										<!-- /.media-block -->
									</div>
									<div class="col-5">
										<div class="media-block position-relative z-1">
											<img src="images/lazy.svg" data-src="images/media/img_30.jpg" alt="" class="lazy-img main-img w-100">
											<img src="images/lazy.svg" data-src="images/assets/screen_04.png" alt="" class="lazy-img shapes screen_02">
										</div>
										<!-- /.media-block -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6">
							<div class="block-two ps-xxl-5 md-mt-100">
								<div class="bg-wrapper wow fadeInRight">
									<p class="fs-24 fst-italic pe-xl-5">“Your premier partner in real estate. Transforming properties into dreams. Let us guide you home with expertise.”</p>
									<div class="counter-wrapper pb-40 mt-45 lg-mt-20 mb-60 lg-mb-20">
										<div class="row">
											<div class="col-6">
												<div class="counter-block-one mt-20">
													<div class="main-count fw-500 color-dark">$<span class="counter">7</span>bil+</div>
													<span>Project Handover</span>
												</div>
												<!-- /.counter-block-one -->
											</div>
											<div class="col-6">
												<div class="counter-block-one mt-20">
													<div class="main-count fw-500 color-dark"><span class="counter">1.9</span>mil+</div>
													<span>Happy Customers</span>
												</div>
												<!-- /.counter-block-one -->
											</div>
										</div>
									</div>
									<ul class="list-style-one fs-22 color-dark style-none">
										<li>Loan &amp; low Interest facility</li>
										<li>100k+ Property Listing  added & updated</li>
										<li>Expert agent consultation</li>
									</ul>
									<div class="mt-70 lg-mt-50">
										<a href="about_us_02.html" class="btn-five md"><span>Learn More</span> <i class="bi bi-arrow-up-right"></i></a>
									</div>
								</div>
								<!-- /.bg-wrapper -->
							</div>
						</div>
					</div>
					<div class="row gx-lg-5 align-items-center mt-120 lg-mt-50">
						<div class="col-lg-3">
							<div class="card-style-three border-20 mt-40 wow fadeInUp">
								<div class="bg-wrapper text-center">
									<h3>07+</h3>
									<p>Years Experience <br>with proud.</p>
								</div>
							</div>
							<!-- /.card-style-three -->
						</div>
						<div class="col-lg-9 ps-xl-5">
							<div class="row gx-xl-5">
								<div class="col-md-4">
									<div class="card-style-four mt-40 wow fadeInUp">
										<div class="icon style-two rounded-circle d-flex align-items-center justify-content-center position-relative">
											<img src="images/lazy.svg" data-src="images/icon/icon_26.svg" alt="" class="lazy-img">
										</div>
										<h5 class="mt-35 mb-15">Property Insurance</h5>
										<p>Elit esse cillum dolo fugiat nulla tur nos ullamo.</p>
									</div>
									<!-- /.card-style-four -->
								</div>
								<div class="col-md-4">
									<div class="card-style-four mt-40 wow fadeInUp">
										<div class="icon style-two rounded-circle d-flex align-items-center justify-content-center position-relative">
											<img src="images/lazy.svg" data-src="images/icon/icon_27.svg" alt="" class="lazy-img">
										</div>
										<h5 class="mt-35 mb-15">Easy Payments</h5>
										<p>quis nostrud exerct ullamo sucirity finibus ne derived.</p>
									</div>
									<!-- /.card-style-four -->
								</div>
								<div class="col-md-4">
									<div class="card-style-four mt-40 wow fadeInUp">
										<div class="icon style-two rounded-circle d-flex align-items-center justify-content-center position-relative">
											<img src="images/lazy.svg" data-src="images/icon/icon_28.svg" alt="" class="lazy-img">
										</div>
										<h5 class="mt-35 mb-15">Quick Process</h5>
										<p>Duis aute irure dolor reprehe de Cicero's voluptat velit.</p>
									</div>
									<!-- /.card-style-four -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- /.block-feature-eight-->



		<!--
		=====================================================
			Fancy Banner Six
		=====================================================
		-->
		{{-- <div class="fancy-banner-six wow fadeInUp mt-160 xl-mt-140 lg-mt-100">
			<div class="container container-large">
				<div class="bg-wrapper position-relative z-1 pt-85 md-pt-50 pb-140 md-pb-100 ps-4 pe-4">
					<div class="row">
						<div class="col-xl-7 col-lg-8 m-auto">
							<div class="title-one text-center pe-xxl-2 ps-xxl-2">
								<h2 class="font-garamond text-white">Where you are, You will find us every <em>where <span>easily</span></em> <span class="star-shape"><img src="images/lazy.svg" data-src="images/shape/shape_37.svg" alt="" class="lazy-img"></span></h2>
							</div>
							<!-- /.title-one -->
						</div>
					</div>
					<div class="map-wrapper position-relative me-auto ms-auto mt-100 xl-mt-50 mb-50">
						<img src="images/lazy.svg" data-src="images/assets/map_01.svg" alt="" class="lazy-img w-100">
						<div class="location-pin">
							<div class="dot-marker rounded-circle"></div>
							<div class="map-info tran3s d-flex">
								<img src="images/lazy.svg" data-src="images/logo/flag_01.png" alt="" class="lazy-img flag">
								<div class="info">
									<h6>United States</h6>
									<span>32 link road, Mega Mall. California, USA</span>
								</div>
								<!-- /.info -->
							</div>
						</div>
						<!-- /.location-pin -->
						<div class="location-pin">
							<div class="dot-marker rounded-circle"></div>
							<div class="map-info tran3s d-flex">
								<img src="images/lazy.svg" data-src="images/logo/flag_02.png" alt="" class="lazy-img flag">
								<div class="info">
									<h6>Brazil</h6>
									<span>32 link road, Mega Mall. California, USA</span>
								</div>
								<!-- /.info -->
							</div>
						</div>
						<!-- /.location-pin -->
						<div class="location-pin">
							<div class="dot-marker rounded-circle"></div>
							<div class="map-info tran3s d-flex">
								<img src="images/lazy.svg" data-src="images/logo/flag_03.png" alt="" class="lazy-img flag">
								<div class="info">
									<h6>Russia</h6>
									<span>32 link road, Mega Mall. California, USA</span>
								</div>
								<!-- /.info -->
							</div>
						</div>
						<!-- /.location-pin -->
						<div class="location-pin">
							<div class="dot-marker rounded-circle"></div>
							<div class="map-info tran3s d-flex">
								<img src="images/lazy.svg" data-src="images/logo/flag_04.png" alt="" class="lazy-img flag">
								<div class="info">
									<h6>Congo</h6>
									<span>32 link road, Mega Mall. California, USA</span>
								</div>
								<!-- /.info -->
							</div>
						</div>
						<!-- /.location-pin -->
						<div class="location-pin">
							<div class="dot-marker rounded-circle"></div>
							<div class="map-info tran3s d-flex">
								<img src="images/lazy.svg" data-src="images/logo/flag_05.png" alt="" class="lazy-img flag">
								<div class="info">
									<h6>India</h6>
									<span>32 link road, Mega Mall. California, USA</span>
								</div>
								<!-- /.info -->
							</div>
						</div>
						<!-- /.location-pin -->
						<div class="location-pin">
							<div class="dot-marker rounded-circle"></div>
							<div class="map-info tran3s d-flex">
								<img src="images/lazy.svg" data-src="images/logo/flag_06.png" alt="" class="lazy-img flag">
								<div class="info">
									<h6>Australia</h6>
									<span>32 link road, Mega Mall. California, USA</span>
								</div>
								<!-- /.info -->
							</div>
						</div>
						<!-- /.location-pin -->
					</div>

					<div class="country-list d-flex flex-wrap">
						<div class="list-block">
							<div class="title">Asia Pacific</div>
							<ul class="style-none d-flex flex-wrap">
								<li>Australia</li>
								<li>Dubai</li>
								<li>India</li>
								<li>Singapore</li>
								<li>Hong Kong</li>
							</ul>
						</div>
						<!-- /.list-block -->
						<div class="list-block">
							<div class="title">South America</div>
							<ul class="style-none">
								<li>United States</li>
								<li>Canada</li>
								<li>Argentina</li>
							</ul>
						</div>
						<!-- /.list-block -->
						<div class="list-block">
							<div class="title">European</div>
							<ul class="style-none d-flex flex-wrap">
								<li>Germany</li>
								<li>France</li>
								<li>Italy</li>
								<li>Netherlands</li>
								<li>Switzerland</li>
								<li>Spain</li>
							</ul>
						</div>
						<!-- /.list-block -->
						<div class="list-block">
							<div class="title">Africa</div>
							<ul class="style-none">
								<li>Morocco</li>
								<li>South Africa</li>
							</ul>
						</div>
						<!-- /.list-block -->
					</div>
					<!-- /.country-list -->
					<div class="text-slide-wrapper">
						<div class="marquee">
						  <p>
							Dubai . America . Canada .
						  </p>
						  <p>
							Dubai . America . Canada .
						  </p>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- /.fancy-banner-six -->




		<!--
		=====================================================
			Feedback Section Four
		=====================================================
		-->
		{{-- <div class="feedback-section-four position-relative overflow-hidden z-1 pt-150 lg-pt-120 pb-110 lg-pb-80">
			<div class="container container-large">
				<div class="position-relative z-1">
					<div class="row">
						<div class="col-xl-6 col-lg-8">
							<div class="title-one pe-xxl-5 mb-75 xl-mb-50 wow fadeInUp">
								<h2 class="font-garamond">Don’t Trust Us, Trust <em>our clients</em> <span class="star-shape"><img src="images/lazy.svg" data-src="images/shape/shape_37.svg" alt="" class="lazy-img"></span></h2>
								<p class="fs-20 m0">Client satisfaction speaks louder than our words. Hear from them.</p>
							</div>
							<!-- /.title-one -->
						</div>
					</div>
	
					<div class="feedback-slider-two">
						<div class="item">
							<div class="feedback-block-four">
								<div class="d-flex align-items-center">
									<img src="images/media/img_01.jpg" alt="" class="rounded-circle avatar">
									<div class="ps-3">
										<h6 class="fs-20 m0">Rashed Kabir</h6>
										<span class="fs-16">Milan, Itlay</span>
									</div>
								</div>
								<blockquote>"Efficient and friendly service, guided us perfectly. Satisfied with our new home. Thank you!"</blockquote>
								<ul class="rating style-none d-flex">
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
								</ul>
								<img src="images/icon/icon_29.svg" alt="" class="icon">
							</div>
							<!-- /.feedback-block-four -->
						</div>
						<div class="item">
							<div class="feedback-block-four">
								<div class="d-flex align-items-center">
									<img src="images/media/img_02.jpg" alt="" class="rounded-circle avatar">
									<div class="ps-3">
										<h6 class="fs-20 m0">Jannat Ferdu.</h6>
										<span class="fs-16">London, Uk</span>
									</div>
								</div>
								<blockquote>"Found our dream home. Great Business with them. Thank you for excellent service."</blockquote>
								<ul class="rating style-none d-flex">
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
								</ul>
								<img src="images/icon/icon_29.svg" alt="" class="icon">
							</div>
							<!-- /.feedback-block-four -->
						</div>
						<div class="item">
							<div class="feedback-block-four">
								<div class="d-flex align-items-center">
									<img src="images/media/img_03.jpg" alt="" class="rounded-circle avatar">
									<div class="ps-3">
										<h6 class="fs-20 m0">Jubayer Hasan</h6>
										<span class="fs-16">Miami, USA</span>
									</div>
								</div>
								<blockquote>"Efficient and friendly service, guided us perfectly. Satisfied with our new home. Thank you!"</blockquote>
								<ul class="rating style-none d-flex">
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
								</ul>
								<img src="images/icon/icon_29.svg" alt="" class="icon">
							</div>
							<!-- /.feedback-block-four -->
						</div>
						<div class="item">
							<div class="feedback-block-four">
								<div class="d-flex align-items-center">
									<img src="images/media/img_02.jpg" alt="" class="rounded-circle avatar">
									<div class="ps-3">
										<h6 class="fs-20 m0">Jannat Ferdu.</h6>
										<span class="fs-16">London, Uk</span>
									</div>
								</div>
								<blockquote>"Found our dream home. Great Business with them. Thank you for excellent service."</blockquote>
								<ul class="rating style-none d-flex">
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
									<li><i class="fa-sharp fa-solid fa-star"></i></li>
								</ul>
								<img src="images/icon/icon_29.svg" alt="" class="icon">
							</div>
							<!-- /.feedback-block-four -->
						</div>
					</div>
					<ul class="slider-arrows slick-arrow-two d-flex justify-content-center style-none md-mt-30">
						<li class="prev_c slick-arrow"><i class="bi bi-arrow-left"></i></li>
						<li class="next_c slick-arrow"><i class="bi bi-arrow-right"></i></li>
					</ul>
					<div class="section-btn text-center md-mt-30">
						<a href="#" class="btn-eleven fst-italic"><span>See all Feedback</span></a>
					</div>
				</div>
			</div>
			<img src="images/lazy.svg" data-src="images/shape/shape_42.svg" alt="" class="lazy-img shapes shape_01 wow fadeInDown" data-wow-delay="0.2s">
			<img src="images/lazy.svg" data-src="images/shape/shape_43.svg" alt="" class="lazy-img shapes shape_02 wow fadeInUp">
		</div> --}}
		<!-- /.feedback-section-four -->



		<!--
		=====================================================
			Partner Section One
		=====================================================
		-->
		{{-- <div class="partner-section-one mt-45">
			<div class="container">
				<h6 class="text-center fs-20 mb-50 lg-mb-30">100+ Company trusted by us.</h6>
			</div>
			<div class="bg-wrapper bg-white">
				<div class="container">
					<div class="partner-logo-one">
						<div class="item"><img src="images/logo/p_logo_07.png" alt=""></div>
						<div class="item"><img src="images/logo/p_logo_08.png" alt=""></div>
						<div class="item"><img src="images/logo/p_logo_09.png" alt=""></div>
						<div class="item"><img src="images/logo/p_logo_10.png" alt=""></div>
						<div class="item"><img src="images/logo/p_logo_11.png" alt=""></div>
						<div class="item"><img src="images/logo/p_logo_12.png" alt=""></div>
						<div class="item"><img src="images/logo/p_logo_09.png" alt=""></div>
					</div>
				</div>
			</div>
		</div> --}}



		<!--
		=====================================================
			Fancy Banner Seven
		=====================================================
		-->
		<div class="fancy-banner-seven mt-110 xl-mt-80 mb-130 xl-mb-100 lg-mb-80">
			<div class="container container-large">
				<div class="bg-wrapper position-relative z-1 pt-85 lg-pt-70 pb-100 xl-pb-80 lg-pb-70">
					<div class="row">
						<div class="col-xl-7 col-lg-8 col-md-10 m-auto text-center">
							<h2 class="font-garamond text-white">Find the right theme for your website.</h2>
							<p class="fs-24 text-white mt-30 mb-45 lg-mb-30"></p>
							<a href="about_us_01.html" class="btn-two"><span>Get Started</span></a>
						</div>
					</div>
					<img src="images/lazy.svg" data-src="images/shape/shape_44.svg" alt="" class="lazy-img shapes shape_01 wow fadeInLeft" data-wow-delay="0.2s">
					<img src="images/lazy.svg" data-src="images/shape/shape_45.svg" alt="" class="lazy-img shapes shape_02 wow fadeInRight">
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-seven -->


@endsection