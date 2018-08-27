@extends('layouts.app')

@section('content')
    <style>
        .img-thumbnail {
            width: 150px;
            height: 150px;
        }
    </style>
    <div class="card">
        <div class="card-body card-padding">
            <div class="row">
                <div class="col-sm-6">
                    <form action="/admin/stories/store" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" name="title" type="text">
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input class="form-control" name="keywords" type="text">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" name="description"></textarea>
                        </div>
                        <div class="m-b-15">
                            <label>Thumbnail</label>
                            <div class="row p-l-15 m-b-15">
                                <img id="thumbnail_preview" class="img-thumbnail" src="" alt="">
                                <input id="thumbnail" class="form-control" type="hidden" name="thumbnail">
                            </div>
                            <div class="row p-l-15">
                                <button
                                    class="btn btn-primary"
                                    id="select_thumbnail"
                                    data-input="thumbnail"
                                    data-preview="thumbnail_preview"
                                >
                                    <i class="zmdi zmdi-attachment"></i> Select an image
                                </button>
                                <button type="button" class="btn btn-danger" id="remove_select"><i class="zmdi zmdi-close-circle"></i> Remove</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Summary</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                        <div class="m-b-15">
                            <label>Feature image</label>
                            <div class="row p-l-15 m-b-15">
                                <img id="feature_image_preview" class="img-thumbnail" src="" alt="">
                                <input id="feature_image" class="form-control" type="hidden" name="feature_image">
                            </div>
                            <div class="row p-l-15">
                                <button
                                    class="btn btn-primary"
                                    id="select_feature_image"
                                    data-input="feature_image"
                                    data-preview="feature_image_preview"
                                >
                                    <i class="zmdi zmdi-attachment"></i> Select an image
                                </button>
                                <button type="button" class="btn btn-danger" id="remove_select_feature"><i class="zmdi zmdi-close-circle"></i> Remove</button>
                            </div>
                        </div>
                        <div class="m-b-15">
                            <p class="m-b-15 f-700">Categories</p>
                            <select class="selectpicker" multiple data-max-options="2" title='Choose some of...' name="categories[]">
                            @foreach($categories as $key => $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="m-b-15 pull-right">
                            <button type="submit" class="btn btn-info"><i class="zmdi zmdi-account-add"></i> Create</button>
                            <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-account-add"></i> Create & Continue</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script>
        $('#select_thumbnail').filemanager('image');
        $('#remove_select').on('click', function () {
            $('#thumbnail_preview').attr('src', '');
            $('#thumbnail').val('');
        });

        $('#select_feature_image').filemanager('image');
        $('#remove_select_feature').on('click', function () {
            $('#feature_image_preview').attr('src', '');
            $('#feature_image').val('');
        });
    </script>
@endsection
