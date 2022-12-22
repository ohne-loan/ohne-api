@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit User ({{ $user->name }})
                </div>
                @include('admin.layouts.users.form')
            </div>
        </div>
    </div>
@endsection
