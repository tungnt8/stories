@extends('layouts.app')
@section('content')
    <?php
        $statuses = array(
            '<span class="badge badge-light">Not completed</span>',
            '<span class="badge badge-light">Completed</span>h'
        );
        $is_hot = array(
            0 => '<span class="badge badge-danger">No</span>',
            1 => '<span class="badge badge-warning"><i class="zmdi zmdi-fire"></i></span>'
        );
    ?>
    <style>
        .btn-create-story {
            top: -20px;
            right: 0;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{ route('stories.admin_create') }}" class="btn bgm-red btn-float waves-effect btn-create-story"><i class="zmdi zmdi-plus"></i></a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr role="row">
                                    <th class="text-center">No.</th>
                                    <th class="text-left">Feature image</th>
                                    <th class="text-left">Title</th>
                                    <th class="text-left">Author</th>
                                    <th class="number">Categories</th>
                                    <th class="text-left">Hot</th>
                                    <th class="text-left">View count</th>
                                    <th class="text-left">Status</th>
                                    <th class="text-left">Create date</th>
                                    <th class="text-left">Update date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($stories as $key => $story)
                                <tr>
                                    <td class="text-left">{{ $key + 1 }}</td>
                                    <td>
                                        <img class="img-thumbnail" style="width: 70px; height: 70px;" src="{{ $story->feature_image ? $story->feature_image : asset('img/no_image.jpg') }}"/>
                                    </td>
                                    <td class="text-left f-700">
                                        <p>{{ $story->title }}</p>
                                        <p>
                                            <ul class="actions">
                                                <li><a  href="{{ route('stories.admin_chapters_list') }}?story_id={{ $story->id }}"><i class="zmdi zmdi-apps"></i></a></li>
                                                <li><a  href="{{ route('stories.admin_chapters_list') }}?story_id={{ $story->id }}"><i class="zmdi zmdi-plus-square"></i></a></p></li>
                                            </ul>
                                    </td>
                                    <td class="text-left">{{ $story->author }}</td>
                                    <td class="text-left">
                                        @foreach ($story->categories() as $key => $category)
                                            <p><a href="#">{{ $category->title }}</a></p>
                                        @endforeach
                                    </td>
                                    <td class="text-left">{!!  $is_hot[$story->is_hot] !!}</td>
                                    <td class="text-left"><mark>{{ $story->view_count }}</mark></td>
                                    <td class="text-left">{!! $statuses[$story->status] !!}</td>
                                    <td class="text-left">{{ $story->created_at }}</td>
                                    <td class="text-left">{{ $story->updated_at }}</td>
                                    <td class="text-left">

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div style="margin: 10px 0;">
                            {{ $stories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
