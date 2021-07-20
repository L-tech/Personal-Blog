<x-page-layout>
    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">IBD Articles</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Articles</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section id="hero" style="margin-top: 2.5%">

		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">
                    @if($latest_blog)
					<!-- featured post large -->
					<div class="post featured-post-lg">
						<div class="details clearfix">
							<a href="{{ url('category') }}/{{ $latest_blog->category->slug }}" class="category-badge">{{ $latest_blog->category->name }}</a>
							<h2 class="post-title"><a href="{{ url('category') }}/{{ $latest_blog->category->slug }}">{{ $latest_blog->title }}</a></h2>
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="#">Ibrahim Bello Dauda</a></li>
								<li class="list-inline-item">{{ $latest_blog->created_at->format('D M Y') }}</li>
							</ul>
						</div>
						<a href="{{ url('blog') }}/{{ $latest_blog->slug }}">
							<div class="thumb rounded">
								<div class="inner data-bg-image" data-bg-image="{{ $latest_blog->image }}"></div>
							</div>
						</a>
					</div>
                    @endif

				</div>

				<div class="col-lg-4">

					<!-- post tabs -->
					<div class="post-tabs rounded bordered">
						<!-- tab navs -->
						<ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
							<li class="nav-item" role="presentation"><button aria-controls="popular" aria-selected="true" class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">Popular</button></li>
							<li class="nav-item" role="presentation"><button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">Recent</button></li>
						</ul>
						<!-- tab contents -->
						<div class="tab-content" id="postsTabContent">
							<!-- loader -->
							<div class="lds-dual-ring"></div>
							<!-- popular posts -->
							<div aria-labelledby="popular-tab" class="tab-pane fade show active" id="popular" role="tabpanel">
								<!-- post -->

								@foreach ($top_blogs as $item)
                                <div class="post post-list-sm circle">
									<div class="thumb circle">
										<span class="number">{{ $item->views }}</span>
										<a href="{{ url('blog') }}/{{ $item->slug }}">
											<div class="inner">
												<img src="{{ $item->image }}" alt="Ibrahim Bello Dauda - {{ $item->title }}" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="{{ url('blog') }}/{{ $item->slug }}">{{ $item->title }}</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">{{ $item->created_at->format('D M Y') }}</li>
										</ul>
									</div>
								</div>
                                @endforeach

							</div>
							<!-- recent posts -->
							<div aria-labelledby="recent-tab" class="tab-pane fade" id="recent" role="tabpanel">
								<!-- post -->
								@foreach ($recent_blogs as $item)
                                <div class="post post-list-sm circle">
									<div class="thumb circle">
										<span class="number">{{ $item->views }}</span>
										<a href="{{ url('blog') }}/{{ $item->slug }}">
											<div class="inner">
												<img src="{{ $item->image }}" alt="Ibrahim Bello Dauda - {{ $item->title }}" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="{{ url('blog') }}/{{ $item->slug }}">{{ $item->title }}</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">{{ $item->created_at->format('D M Y') }}</li>
										</ul>
									</div>
								</div>
                                @endforeach

							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Editor’s Pick</h3>
						<img src="{{ asset('base') }}/images/wave.svg" class="wave" alt="Ibrahim Bello Dauda" />
					</div>

					<div class="padding-30 rounded bordered">
						<div class="row gy-5">
                            @foreach ($editors_pick as $item)
                                <div class="@if ($loop->first)
                                    col-sm-12
                                    @else
                                    col-sm-6
                                    @endif
                                    ">
                                    <!-- post -->
                                    <div class="@if ($loop->first)
                                        post
                                        @else
                                        post post-list-sm square
                                        @endif
                                        ">
                                        <div class="thumb rounded">
                                            @if ($loop->first)
                                            <a href="{{ url('category') }}/{{ $item->category->slug }}" class="category-badge position-absolute">{{ $item->category->name }}</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            @endif
                                            <a href="{{ url('blog') }}/{{ $item->slug }}">
                                                <div class="inner">
                                                    <img src="{{ $item->image }}" alt="Ibrahim Bello Dauda - {{ $item->title }}" />
                                                </div>
                                            </a>
                                        </div>
                                        @if ($loop->first)
                                            <ul class="meta list-inline mt-4 mb-0">
                                                <li class="list-inline-item"><a href="#"><img style="width: 25px; height: 25px" src="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1625660853/design-40cde4b3-e628-4e5b-ba9e-f72d7d5fc018-min_jqiofv.png" class="author" alt="Ibrahim Bello Dauda - {{ $item->title }}"/>Ibrahim Bello Dauda</a></li>
                                                <li class="list-inline-item">{{ $item->created_at->format('D M Y') }}</li>
                                            </ul>
                                            <h5 class="post-title mb-3 mt-3"><a href="{{ url('blog') }}/{{ $item->slug }}">{{ $item->title }}</a></h5>
                                            <p class="excerpt mb-0">{!! Str::limit($item->body, 150, ' ...') !!}</p>
                                        @else
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="{{ url('blog') }}/{{ $item->slug }}">{{ $item->title }}</a></h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">{{ $item->created_at->format('D M Y') }}</li>
                                            </ul>
                                        </div>

                                        @endif
                                    </div>
                                </div>
                            @endforeach


						</div>
					</div>

					<div class="spacer" data-height="50"></div>



					<div class="spacer" data-height="50"></div>


					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Trending</h3>
						<img src="{{ asset('base') }}/images/wave.svg" class="wave" alt="Ibrahim Bello Dauda" />
						<div class="slick-arrows-top">
							<button type="button" data-role="none" class="carousel-topNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
							<button type="button" data-role="none" class="carousel-topNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
						</div>
					</div>

					<div class="row post-carousel-twoCol post-carousel">
						@foreach ($trending_post as $item)

                        <!-- post -->
						<div class="post post-over-content col-md-6">
							<div class="details clearfix">
								<a href="{{ url('category') }}/{{ $item->category->slug }}" class="category-badge">{{ $item->category->name }}</a>
								<h4 class="post-title"><a href="{{ url('blog') }}/{{ $item->slug }}">{{ $item->title }}</a></h4>
								<ul class="meta list-inline mb-0">
									<li class="list-inline-item"><a href="#">Ibrahim Bello Dauda</a></li>
									<li class="list-inline-item">{{ $item->created_at->format('D M Y') }}</li>
								</ul>
							</div>
							<a href="{{ url('blog') }}/{{ $item->slug }}">
								<div class="thumb rounded">
									<div class="inner">
										<img style="max-height: 350px;" src="{{ $item->image }}" alt="Ibrahim Bello Dauda - {{ $item->title }}" />
									</div>
								</div>
							</a>
						</div>
						@endforeach
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Latest Posts</h3>
						<img src="{{ asset('base') }}/images/wave.svg" class="wave" alt="Ibrahim Bello Dauda" />
					</div>

					<div class="padding-30 rounded bordered">

						<div class="row">
                        @foreach ($blogs as $item)
                        <div class="col-md-12 col-sm-6">
                            <!-- post -->
                            <div class="post post-list clearfix">
                                <div class="thumb rounded">
                                    <span class="post-format-sm">
                                        <i class="icon-picture"></i>
                                    </span>
                                    <a href="{{ url('blog') }}/{{ $item->slug }}">
                                        <div class="inner">
                                            <img src="{{ $item->image }}" alt="Ibrahim Bello Dauda - {{ $item->title }}" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-3">
                                        <li class="list-inline-item"><a href="#"><img style="width: 25px; height: 25px" src="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1625660853/design-40cde4b3-e628-4e5b-ba9e-f72d7d5fc018-min_jqiofv.png" class="author" alt="Ibrahim Bello Dauda - {{ $item->title }}"/>Ibrahim Bello Dauda</a></li>
                                        <li class="list-inline-item"><a href="{{ url('category') }}/{{ $item->category->slug }}">{{ $item->category->name }}</a></li>
                                        <li class="list-inline-item">{{ $item->created_at->format('D M Y') }}</li>
                                    </ul>
                                    <h5 class="post-title"><a href="{{ url('blog') }}/{{ $item->slug }}">{{ $item->title }}</a></h5>
                                    <p class="excerpt mb-0">{!! Str::limit($item->body, 150, ' ...') !!}</p>
                                    <div class="post-bottom clearfix d-flex align-items-center">
                                        <div class="social-share me-auto">
                                            <button class="toggle-button icon-share"></button>
                                            <ul class="icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item"><a href="https://www.facebook.com/sharer.php?u={{ url('/') }}/blog/{{ $item->slug }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="https://twitter.com/share?url={{ url('/') }}/blog/{{ $item->slug }}&text={{ $item->title }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="https://www.linkedin.com/shareArticle?url={{ url('/') }}/blog/{{ $item->slug }}&title={{ $item->title }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li class="list-inline-item"><a href="https://api.whatsapp.com/send?text={{ $item->title }} {{ url('/') }}/blog/{{ $item->slug }}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="more-button float-end">
                                            <a href="{{ url('blog') }}/{{ $item->slug }}"><span class="icon-options"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach




						</div
						>
						<!-- load more button -->
						<div class="text-center">
							<button class="btn btn-simple">Load More</button>
						</div>

					</div>

				</div>
				<div class="col-lg-4">

					<!-- sidebar -->
					<div class="sidebar">
						<!-- widget about -->
						<div class="widget rounded">
							<div class="widget-about data-bg-image text-center" data-bg-image="{{ asset('base') }}/images/map-bg.png">
								<img src="{{ asset('base') }}/images/a.png" alt="logo" class="mb-4" />
								<p class="mb-4">Hello, I’m an accomplished accountant & administator with keen interest to advance the cause of philosophy & critical thinking, leadership & Development.</p>
								<ul class="social-icons list-unstyled list-inline mb-0">
									<li class="list-inline-item"><a href="https://web.facebook.com/dribrahimbdauda" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/el_dauda" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/dr-ibrahim-bello-d-53073268/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCe_yLoXVHAEoSL4PTtke-Dg" target="_blank"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>

						<!-- widget popular posts -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Popular Posts</h3>
								<img src="{{ asset('base') }}/images/wave.svg" class="wave" alt="Ibrahim Bello Dauda" />
							</div>
							<div class="widget-content">
								<!-- post -->
                                @foreach ($top_blogs as $item)
                                <div class="post post-list-sm circle">
									<div class="thumb circle">
										<span class="number">{{ $item->views }}</span>
										<a href="blog/{{ $item->slug }}">
											<div class="inner">
												<img src="{{ $item->image }}" alt="Ibrahim Bello Dauda - {{ $item->title }}" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="blog/{{ $item->slug }}">{{ $item->title }}</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">{{ $item->created_at->format('D M Y') }}</li>
										</ul>
									</div>
								</div>
                                @endforeach


							</div>
						</div>

						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Explore Categories</h3>
								<img src="{{ asset('base') }}/images/wave.svg" class="wave" alt="Ibrahim Bello Dauda" />
							</div>
							<div class="widget-content">
								<ul class="list">
                                    @foreach ($categories as $item)
                                        <li><a href="category/{{ $item->slug }}">{{ $item->name }}</a><span>({{ $item->blogCount() }})</span></li>
                                    @endforeach

								</ul>
							</div>

						</div>

						<!-- widget newsletter -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Newsletter</h3>
								<img src="{{ asset('base') }}/images/wave.svg" class="wave" alt="Ibrahim Bello Dauda" />
							</div>
							<div class="widget-content">
								<span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>
								<form>
									<div class="mb-2">
										<input class="form-control w-100 text-center" placeholder="Email address…" type="email">
									</div>
									<button class="btn btn-default btn-full" type="submit">Sign Up</button>
								</form>
								<span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="#">Privacy Policy</a></span>
							</div>
						</div>

						<!-- widget advertisement -->
						<div class="widget no-container rounded text-md-center">
							<span class="ads-title">- IBD Quotes -</span>
							<a href="#" class="widget-ads">
								<img src="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1625660853/IMG_3235-min-scaled_jqpfeo.jpg" alt="Ibrahim Bello Dauda" />
							</a>
						</div>




					</div>

				</div>

			</div>

		</div>
	</section>
</x-page-layout>
