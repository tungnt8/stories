@extends('layouts.app')
@section('content')
    <?php
    $statuses = array(
        '<span class="badge badge-light">Not completed</span>',
        '<span class="badge badge-light">Completed</span>h'
    );
    $is_hot = array(
        0 => '<span class="badge badge-light">No</span>',
        1 => '<span class="badge badge-warning">Yes</span>'
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
                    <p class="p-15 f-20"><span class="f-700">Title:</span> {{ $story->title }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a class="btn bgm-red btn-float waves-effect btn-create-story"><i class="zmdi zmdi-plus"></i></a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr role="row">
                                <th class="text-center">No.</th>
                                <th class="text-left">Title</th>
                                <th class="text-left">View count</th>
                                <th class="text-left">Status</th>
                                <th class="text-left">Create date</th>
                                <th class="text-left">Update date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($chapters as $key => $chapter)
                                <tr>
                                    <td class="text-left">{{ $key + 1 }}</td>
                                    <td class="text-left f-700">
                                        <p>{{ $chapter->title }}</p>
                                    </td>
                                    <td class="text-left"><mark>{{ $chapter->view_count }}</mark></td>
                                    <td class="text-left">{!! $statuses[$chapter->status] !!}</td>
                                    <td class="text-left">{{ $chapter->created_at }}</td>
                                    <td class="text-left">{{ $chapter->updated_at }}</td>
                                    <td class="text-left">
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div style="margin: 10px 0;">
                            {{ $chapters->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
