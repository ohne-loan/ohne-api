@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Roles
                </div>
                <div class="card-body">
                    @can('create_role')
                        <a href="{{ route('roles.create') }}" class="btn btn-success btn-new"><i class="fa fa-plus"></i></a>
                    @endcan
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Role</th>
                                <th>Permissions</th>
                                @can('edit_role', 'destroy_role')
                                    <th class="th-min-width">Operations</th>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->name}}</td>
                                    <td>
                                        @foreach($role->permissions()->get() as $permission)
                                            <a class="badge badge-primary tag" href="{{ route('permissions.edit', $permission->id) }}"><span>{{$permission->name}} <i class="fa fa-key"></i></span></a>
                                        @endforeach
                                    </td>
                                    <td>
                                        <form class="pull-left" action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                            @can('edit_role')
                                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;"><i class="fa fa-edit"></i></a>
                                            @endcan
                                            @can('destroy_role')
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
                        {{ $roles->links() }}
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
