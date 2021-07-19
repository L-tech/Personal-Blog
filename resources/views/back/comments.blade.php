<x-main-layout>
    @section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('main') }}/assets/css/forms/theme-checkbox-radio.css">
    <link href="{{ asset('main') }}/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('main') }}/assets/css/apps/contacts.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('main') }}/assets/css/elements/alert.css">
    <style>
        .btn-light { border-color: transparent; }
    </style>

    @endsection
    @section('title')
        Blog Comments
    @endsection
    <div class="widget-content searchable-container list">

        <div class="row">
            @if(session()->has('success_message'))
            <div class="widget-content widget-content-area">
                <div class="alert alert-light-success border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong>{{ session()->get('success_message') }}</div>

            </div>
            @endif
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                <form class="form-inline my-2 my-lg-0">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        <input type="text" class="form-control product-search" id="input-search" placeholder="Search">
                    </div>
                </form>
            </div>

            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                <div class="d-flex justify-content-sm-end justify-content-center">


                    <div class="switch align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list view-list active-view"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>

                    </div>
                </div>

                <!-- Modal -->

            </div>
        </div>

        <div class="searchable-items list">
            <div class="items items-header-section">
                <div class="item-content">
                    <div class="">
                        <div class="n-chk align-self-center text-center">
                            <label class="new-control new-checkbox checkbox-primary">
                              <input type="checkbox" class="new-control-input" id="contact-check-all">
                              <span class="new-control-indicator"></span>
                            </label>
                        </div>
                        <h4>Name</h4>
                    </div>
                    <div class="user-email">
                        <h4>Email</h4>
                    </div>
                    <div class="user-location">
                        <h4 style="margin-left: 0;">Comments</h4>
                    </div>

                    <div class="action-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </div>
                </div>
            </div>
            @if(count($comments))
                @foreach ($comments as $comment)
                    <div class="items">
                        <div class="item-content">
                            <div class="user-profile">
                                <div class="n-chk align-self-center text-center">
                                    <label class="new-control new-checkbox checkbox-primary">
                                    <input type="checkbox" class="new-control-input contact-chkbox">
                                    <span class="new-control-indicator"></span>
                                    </label>
                                </div>

                                <div class="user-meta-info">
                                    <p class="user-name" data-name="{{ $comment->first_name }} {{ $comment->last_name }}">{{ $comment->first_name }} {{ $comment->last_name }}</p>
                                    <p class="user-work" data-occupation="{{ $comment->blog->title }}">{{ $comment->blog->title }}</p>
                                </div>
                            </div>
                            <div class="user-email">
                                <p class="info-title">Email: </p>
                                <p class="usr-email-addr" data-email="{{ $comment->email }}">{{ $comment->email }}</p>
                            </div>
                            <div class="user-location">
                                <p class="info-title">Comment: </p>
                                <p class="usr-location" data-location="{{ $comment->comment }}">{{ $comment->comment }}</p>
                            </div>

                            <div class="action-btn">


                                <a href="javascript:void()" onclick="$(this).parent().find('form').submit()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line></svg></a>
                                        <form action="{{ route('comment.destroy',$comment->id) }}" method="POST">
                                            @METHOD('DELETE')
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else

                <p>No Comment Added yet</p>
            @endif

        </div>

    </div>




@section('js')
    <script src="{{ asset('main') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ asset('main') }}/assets/js/apps/contact.js"></script>
@endsection
</x-back-layout>
