@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    New Role
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('roles.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        @if( !$permissions->isEmpty() )
                            <div class="form-group row">
                                <label for="roles" class="col-md-4 col-form-label text-md-right">Permissions</label>
                                <div class="col-md-6">

                                    <h4>Assign Permission to Roles</h4>
                                    @foreach ($permissions as $permission)
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}">{{ ucwords(strtolower($permission->name)) }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endif

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>

                    </form>
                    <a href="{{ route('roles.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
