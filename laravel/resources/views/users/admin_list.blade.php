@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @if (session('success'))
                        <div role="alert" class="alert alert-success alert-icon alert-dismissible">
                            <div class="icon"><span class="mdi mdi-check"></span></div>
                            <div class="message">
                                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Success!</strong> {{ session('success') }}
                            </div>
                        </div>
                    @endif
                    @if (session('fail'))
                        <div role="alert" class="alert alert-danger alert-icon alert-dismissible">
                            <div class="icon"><span class="mdi mdi-close-circle-o"></span></div>
                            <div class="message">
                                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Fail!</strong> {{ session('fail') }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr role="row">
                                    <th class="center">No.</th>
                                    <th class="number">Avatar</th>
                                    <th class="sorting">User name</th>
                                    <th class="number">Full name</th>
                                    <th class="sorting_asc">Email</th>
                                    <th>Role</th>
                                    <th>Create date</th>
                                    <th>Update date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key => $user)
                                <tr>
                                    <td class="center">{{ $key + 1 }}</td>
                                    <td><img class="img-thumbnail lgi-img" style="width: 50px; height: 50px;" src="{{ $user->avatar }}"/></td>
                                    <td class="sorting_1">{{ $user->user_name }}</td>
                                    <td class="number">{{ $user->full_name }}</td>
                                    <td class="number">{{ $user->email }}</td>
                                    <td class="number">{{ $user->role }}</td>
                                    <td class="number">{{ $user->modified_at }}</td>
                                    <td class="center">{{ $user->created_at }}</td>
                                    <td class="action"></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div style="margin: 10px 0;">
                        {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
