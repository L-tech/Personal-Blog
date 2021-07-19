<x-main-layout>
    @section('css')
    <link href="{{ asset('main') }}/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('main') }}/plugins/editors/quill/quill.snow.css">

    @endsection

    @section('title')
        Edit Blog
    @endsection
    <div class="admin-data-content layout-top-spacing">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 col-12  layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Edit Blog Details</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form id="newForm" method="POST" action="{{ route('blog.update', $post->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-4">
                                <label for="formGroupExampleInput">Blog Title</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Enter Blog Title" value="{{ $post->title }}" required>
                            </div>
                            <div class="form-group mb-2">

                                <label for="formGroupExampleInput">Blog Category</label>
                                <select class="custom-select mb-4" name="category" required>
                                    @foreach ($categories as $item)
                                        <option @if ($post->category_id == $item->id)
                                            selected
                                        @endif
                                        value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach


                                </select>


                            </div>

                            <div class="form-group mb-2">

                                <label for="formGroupExampleInput">Blog Status</label>
                                <select class="custom-select mb-4" name="status">
                                    <option @if ($post->status == 0)
                                        selected @endif value="0">Draft</option>
                                    <option @if ($post->status == 1)
                                        selected @endif value="1">Published</option>
                                </select>


                            </div>
                            <div class="widget-content widget-content-area">
                                <img src="{{ $post->image }}" />
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Change Blog Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="image" accept="image/*">
                                        <input type="hidden" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4> Basic </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div id="editor-container">
                                            {!! $post->body !!}
                                        </div>



                                    </div>
                                </div>
                            </div>


                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@section('js')

<script src="{{ asset('main') }}/plugins/file-upload/file-upload-with-preview.min.js"></script>
<script src="{{ asset('main') }}/plugins/editors/quill/quill.js"></script>
    <script src="{{ asset('main') }}/plugins/editors/quill/custom-quill.js"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')



        $(document).ready(function(){
        $("#newForm").on("submit", function () {
            var delta = quill.root.innerHTML;
            $(this).append("<textarea name='body' style='display:none'>"+delta+"</textarea>");

        });
        });

    </script>

@endsection

</x-main-layout>
