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
            @if ($errors->any())
            <div class="row">
                <div class="col-sm-4">
                    @foreach ($errors->all() as $error)
                    <div role="alert" class="alert alert-warning alert-icon alert-icon-border alert-dismissible">
                        <div class="icon"><span class="mdi mdi-alert-triangle"></span></div>
                        <div class="message">
                            <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                                <span aria-hidden="true" class="mdi mdi-close"></span>
                            </button>{{ $error }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-sm-4">
                    <form action="/admin/users/store" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label><i class="zmdi zmdi-email"></i> 	&nbsp; 	&nbsp;Email</label>
                            <input class="form-control" name="email" type="text">
                        </div>
                        <div class="form-group">
                            <label><i class="zmdi zmdi-lock"></i> 	&nbsp; 	&nbsp;Password</label>
                            <input class="form-control" name="password" type="password">
                        </div>
                        <div class="form-group">
                            <label><i class="zmdi zmdi-lock"></i> 	&nbsp; 	&nbsp;Re-Password</label>
                            <input class="form-control" name="password_confirmation" type="password">
                        </div>
                        <div class="form-group">
                            <label><i class="zmdi zmdi-account"></i> 	&nbsp; 	&nbsp;Full-name</label>
                            <input class="form-control" name="full_name" type="text">
                        </div>
                        <div class="form-group">
                            <label><i class="zmdi zmdi-face"></i> 	&nbsp; 	&nbsp;Display name</label>
                            <input class="form-control" name="user_name" type="text">
                        </div>
                        <div class="m-b-15">
                            <p class="m-b-15"><i class="zmdi zmdi-accounts"></i> 	&nbsp; 	&nbsp;Role</p>
                            <select class="selectpicker" name="role">
                                <option value="3">Member</option>
                                <option value="2">Editor</option>
                                <option value="4">Moderator</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>
                        <div class="m-b-15">
                            <label><i class="zmdi zmdi-camera"></i> 	&nbsp; 	&nbsp;Avatar</label>
                            <div class="row p-l-15 m-b-15">
                                <img id="holder" class="img-thumbnail" src="" alt="">
                                <input id="thumbnail" class="form-control" type="hidden" name="avatar">
                            </div>
                            <div class="row p-l-15">
                                <button
                                    class="btn btn-primary"
                                    id="select_avatar"
                                    data-input="thumbnail"
                                    data-preview="holder"
                                >
                                    <i class="zmdi zmdi-attachment"></i> Select an image
                                </button>
                                <button class="btn btn-danger" id="remove_select"><i class="zmdi zmdi-close-circle"></i> Remove</button>
                            </div>
                        </div>
                        <div class="m-b-15 pull-right">
                            <button type="submit" class="btn btn-info"><i class="zmdi zmdi-account-add"></i> Create</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script>
        $('#select_avatar').filemanager('image');
        $('#remove_select').on('click', function () {
            $('#holder').attr('src', '');
            $('#thumbnail').val('');
        });
    </script>
@endsection
