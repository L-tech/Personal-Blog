<x-main-layout>
    @section('title')
        Dashboard
    @endsection
    <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-one">
                <div class="widget-heading">
                    <h6 class="">Statistics</h6>
                </div>
                <div class="w-chart">

                    <div class="w-chart-section total-visits-content">
                        <div class="w-detail">
                            <p class="w-title">Total Views</p>
                            <p class="w-stats">{{ number_format($blog_views) }}</p>
                        </div>
                        <div class="w-chart-render-one">
                            <div id="total-users"></div>
                        </div>
                    </div>


                    <div class="w-chart-section paid-visits-content">
                        <div class="w-detail">
                            <p class="w-title">Comments</p>
                            <p class="w-stats">{{ number_format($blog_comments) }}</p>
                        </div>
                        <div class="w-chart-render-one">
                            <div id="paid-visits"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-card-four">
                <div class="widget-content">
                    <div class="w-header">
                        <div class="w-info">
                            <h6 class="value">Blog Count</h6>
                        </div>
                        <div class="task-action">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-content">

                        <div class="w-info">
                            <p class="value">{{ number_format($blog_count) }} <span>blog posts</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></p>
                            <!-- <p class="">Expenses</p> -->
                        </div>

                    </div>

                    <div class="w-progress-stats">
                        <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 100%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="">
                            <div class="w-icon">
                                <p>100%</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-card-one">
                @if($latest_blog)
                <div class="widget-content">

                    <div class="media">
                        <div class="w-img">
                            <img src="{{ $latest_blog->image }}" alt="avatar">
                        </div>
                        <div class="media-body">
                            <h6>{{ $latest_blog->title }}</h6>
                            <p class="meta-date-time">{{ $latest_blog->category->name }}</p>
                        </div>
                    </div>

                    <p>{!! Str::limit($latest_blog->body, 150, ' ...') !!}</p>

                    <div class="w-action">
                        <div class="card-like">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                            <span>{{ $latest_blog->views }} Views</span>
                        </div>

                        <div class="read-more">
                            <a href="../blog/{{ $latest_blog->slug }}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg></a>
                        </div>
                    </div>
                </div>
                @endif
            </div>

        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-three">
                <div class="widget-heading">
                    <div class="">
                        <h5 class="">Unique Visitors</h5>
                    </div>

                    <div class="dropdown ">
                        <a class="dropdown-toggle" href="#" role="button" id="uniqueVisitors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="uniqueVisitors">
                            <a class="dropdown-item" href="javascript:void(0);">View</a>
                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                        </div>
                    </div>
                </div>

                <div class="widget-content">
                    <div id="uniqueVisits"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget-four">
                <div class="widget-heading">
                    <h5 class="">Visitors by Browser</h5>
                </div>
                <div class="widget-content">
                    <div class="vistorsBrowser">
                        <div class="browser-list">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chrome"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line></svg>
                            </div>
                            <div class="w-browser-details">
                                <div class="w-browser-info">
                                    <h6>Chrome</h6>
                                    <p class="browser-count">65%</p>
                                </div>
                                <div class="w-browser-stats">
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="browser-list">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                            </div>
                            <div class="w-browser-details">

                                <div class="w-browser-info">
                                    <h6>Safari</h6>
                                    <p class="browser-count">25%</p>
                                </div>

                                <div class="w-browser-stats">
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="browser-list">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                            </div>
                            <div class="w-browser-details">

                                <div class="w-browser-info">
                                    <h6>Others</h6>
                                    <p class="browser-count">15%</p>
                                </div>

                                <div class="w-browser-stats">
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-activity-five">

                <div class="widget-heading">
                    <h5 class="">IBD Blog</h5>

                    <div class="task-action">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                <a class="dropdown-item" href="javascript:void(0);">Mark as Read</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget-content">

                    <div class="w-shadow-top"></div>

                    <div class="mt-container mx-auto">
                        <div class="timeline-line">

                        @if(count($recent_blogs))
                        @foreach ($recent_blogs as $post)
                            <div class="item-timeline timeline-new">
                                <div class="t-dot">
                                    <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                </div>
                                <div class="t-content">
                                    <div class="t-uppercontent">
                                        <h5>{{ $post->title }} | {{ $post->category->name }}</h5>
                                    </div>
                                    <p>{{ $post->created_at->format('D,M y') }}</p>
                                </div>
                            </div>
                        @endforeach
                        @else

                    <p>No Blog Uploaded yet</p>
            @endif


                        </div>
                    </div>

                    <div class="w-shadow-bottom"></div>
                </div>
            </div>
        </div>


    </div>

</x-main-layout>
