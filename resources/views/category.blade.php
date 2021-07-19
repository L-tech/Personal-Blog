<x-page-layout>

    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">{{ $category->name }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="#/>Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

                    <div class="row gy-4">
                        @foreach ($blogs as $item)
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="{{ url('category') }}/{{ $item->category->slug }}" class="category-badge position-absolute">{{ $item->category->slug }}</a>
                                    <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span>
                                    <a href="{{ url('blog') }}/{{ $item->slug }}">
                                        <div class="inner">
                                            <img style="max-height: 350px;" src="{{ $item->image }}" alt="Ibraham Bello Dauda - {{ $item->title }}" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img style="width: 25px; height: 25px" src="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1625660853/design-40cde4b3-e628-4e5b-ba9e-f72d7d5fc018-min_jqiofv.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">{{ $item->created_at->format('D M Y') }}</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="{{ url('blog') }}/{{ $item->slug }}">{{ $item->title }}</a></h5>
                                    <p class="excerpt mb-0">{!! Str::limit($item->body, 150, ' ...') !!}</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item"><a href="https://www.facebook.com/sharer.php?u={{ url('/') }}/blog/{{ $blog->slug }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="https://twitter.com/share?url={{ url('/') }}/blog/{{ $blog->slug }}&text={{ $blog->title }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="https://www.linkedin.com/shareArticle?url={{ url('/') }}/blog/{{ $blog->slug }}&title={{ $blog->title }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li class="list-inline-item"><a href="https://api.whatsapp.com/send?text={{ $blog->title }} {{ url('/') }}/blog/{{ $blog->slug }}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="{{ url('blog') }}/{{ $item->slug }}"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach




                    </div>

					{{-- <nav>
						<ul class="pagination justify-content-center">
							<li class="page-item active" aria-current="page">
								<span class="page-link">1</span>
							</li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
						</ul>
					</nav> --}}

				</div>
				<div class="col-lg-4">

					<!-- sidebar -->
					<div class="sidebar">
						<!-- widget about -->
						<div class="widget rounded">
							<div class="widget-about data-bg-image text-center" data-bg-image="{{ asset('base') }}/images/map-bg.png">
								<img src="{{ asset('base') }}/images/a.png" alt="Ibrahim Bello Dauda" class="mb-4" />
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
								<img src="{{ asset('base') }}/images/wave.svg" class="wave" alt="Ibrahim Bello Dauda - {{ $item->title }}" />
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

						<!-- widget categories -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Explore Categories</h3>
								<img src="{{ asset('base') }}/images/wave.svg" class="wave" alt="Ibrahim Bello Dauda - {{ $item->title }}" />
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
								<img src="{{ asset('base') }}/images/wave.svg" class="wave" alt="wave" />
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
							<span class="ads-title">- Sponsored Ad -</span>
							<a href="#" class="widget-ads">
								<img src="{{ asset('base') }}/images/ads/ad-360.png" alt="Advertisement" />
							</a>
						</div>


					</div>

				</div>

			</div>

		</div>
	</section>


</x-page-layout>
