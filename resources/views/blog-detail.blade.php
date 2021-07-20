<x-page-layout>
    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">{{ $blog->title }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Articles</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="main-content mt-3">
		<div class="container-xl">



			<div class="row gy-4">

				<div class="col-lg-8">
					<!-- post single -->
                    <div class="post post-single">
						<!-- post header -->
						<div class="post-header">
							<h1 class="title mt-0 mb-3">{{ $blog->title }}</h1>
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="#"><img style="width: 25px; height: 25px" src="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1625660853/design-40cde4b3-e628-4e5b-ba9e-f72d7d5fc018-min_jqiofv.png" class="author" alt="author"/>Ibrahim Bello Dauda</a></li>
								<li class="list-inline-item"><a href="{{ url('category') }}/{{ $blog->category->slug }}">{{ $blog->category->name }}</a></li>
								<li class="list-inline-item">{{ $blog->created_at->format('D M Y') }}</li>
							</ul>
						</div>
						<!-- featured image -->
						<div class="featured-image">
							<img src="{{ $blog->image }}" alt="Ibrahim Bello Dauda - {{ $blog->title }}" />
						</div>
						<!-- post content -->
						<div class="post-content clearfix">
							{!! $blog->body !!}
						</div>
						<!-- post bottom section -->
						<div class="post-bottom">
							<div class="row d-flex align-items-center">
								<div class="col-md-6 col-12 text-center text-md-start">
									<!-- tags -->
									<a href="{{ url('category') }}/{{ $blog->category->slug }}" class="tag">#{{ $blog->category->name }}</a>
								</div>
								<div class="col-md-6 col-12">
									<!-- social icons -->
									<ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
										        <li class="list-inline-item"><a href="https://www.facebook.com/sharer.php?u={{ url('/') }}/blog/{{ $blog->slug }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="https://twitter.com/share?url={{ url('/') }}/blog/{{ $blog->slug }}&text={{ $blog->title }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="https://www.linkedin.com/shareArticle?url={{ url('/') }}/blog/{{ $blog->slug }}&title={{ $blog->title }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li class="list-inline-item"><a href="https://api.whatsapp.com/send?text={{ $blog->title }} {{ url('/') }}/blog/{{ $blog->slug }}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

                    </div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Comments ({{ count($comments) }})</h3>
						<img src="{{ asset('base') }}/images/wave.svg" class="wave" alt="wave" />
					</div>
					<!-- post comments -->
					<div class="comments bordered padding-30 rounded">

						<ul class="comments">
							<!-- comment item -->
                            @if(count($comments))
                                @foreach ($comments as $item)
                                    <li class="comment rounded">
                                        <div class="thumb">
                                            <img src="https://ui-avatars.com/api/?background=random&color=fff&rounded=true&name={{ $item->first_name }}+{{ $item->last_name }}" alt="Ibrahim Bello Dauda" />
                                        </div>
                                        <div class="details">
                                            <h4 class="name"><a href="#">{{ $item->first_name }} {{ $item->last_name }}</a></h4>
                                            <span class="date">{{ $item->created_at->format('D M Y') }}</span>
                                            <p>{{ $item->comment }}</p>
                                            <a href="#" class="btn btn-default btn-sm">Reply</a>
                                        </div>
                                    </li>

                                @endforeach
                            @else
                            <p>No Comment on this blog post</p>

                            @endif

						</ul>
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Leave Comment</h3>
						<img src="{{ asset('base') }}/images/wave.svg" class="wave" alt="wave" />
					</div>
					<!-- comment form -->
					<div class="comment-form rounded bordered padding-30">

						<form id="comment-form" class="comment-form" method="post" action="{{ route('comment.store') }}">
                            @csrf
							<div class="messages"></div>

							<div class="row">


                                <div class="column col-md-6">
									<!-- Email input -->
									<div class="form-group">
										<input type="text" class="form-control" id="InputName" name="first_name" placeholder="Your First name" required="required">
									</div>
								</div>
                                <div class="column col-md-6">
									<!-- Email input -->
									<div class="form-group">
										<input type="text" class="form-control" id="InputName2" name="last_name" placeholder="Your Last name" required="required">
									</div>
								</div>
								<div class="column col-md-12">
									<!-- Email input -->
									<div class="form-group">
										<input type="email" class="form-control" name="email" id="InputEmail" placeholder="Email address" required="required">
									</div>
								</div>


                                <div class="column col-md-12">
									<!-- Comment textarea -->
									<div class="form-group">
										<textarea name="comment" id="InputComment" class="form-control" rows="4" placeholder="Your comment here..." required="required"></textarea>
									</div>
								</div>

							</div>
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
							<button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button><!-- Submit Button -->

						</form>
					</div>
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
								<img src="{{ asset('base') }}/images/wave.svg" class="wave" alt="Ibrahim Bello Dauda" />
							</div>
							<div class="widget-content">
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
