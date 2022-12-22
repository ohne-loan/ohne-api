@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    Users
                </div>
                <div class="card-body">
                    @can('create_user')
                        <a href="{{ route('users.create') }}" class="btn btn-success btn-new"><i class="fa fa-plus"></i></a>
                    @endcan
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date/Time added</th>
                                <th>User roles</th>
                                @can('edit_user', 'destroy_user')
                                    <th class="th-min-width">Operations</th>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at->format('F d, Y h:ia')}}</td>
                                    <td>
                                        @foreach($user->roles->all() as $role)
                                            <a class="badge badge-primary tag" href="{{ route('roles.edit', $role->id) }}"><span>{{$role->name}} <i class="fa fa-tag"></i></span></a>
                                        @endforeach
                                    </td>
                                    <td>
                                        <form class="pull-left" action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            @can('edit_user')
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;"><i class="fa fa-edit"></i></a>
                                            @endcan
                                            @can('destroy_user')
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger" type="submit" value="submit"><i class="fa fa-trash"></i></button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-pagination">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <link href="{{ asset('css/pagination.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tag.css') }}" rel="stylesheet" />
@endsection