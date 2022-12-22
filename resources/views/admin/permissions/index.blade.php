@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Permissions
                </div>
                <div class="card-body">
                    @can('create_permission')
                        <a href="{{ route('permissions.create') }}" class="btn btn-success btn-new"><i class="fa fa-plus"></i></a>
                    @endcan
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 80%">Permission</th>
                                @can('edit_permission', 'destroy_permission')
                                    <th class="th-min-width">Operations</th>
                                @endcan
                            </thead>
                            <tbody>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td>{{$permission->name}}</td>
                                    <td>
                                        <form class="pull-left" action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
                                            @can('edit_permission')
                                                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;"><i class="fa fa-edit"></i></a>
                                            @endcan
                                            @can('destroy_permission')
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
                        {{ $permissions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <link href="{{ asset('css/pagination.css') }}" rel="stylesheet" />
@endsection
