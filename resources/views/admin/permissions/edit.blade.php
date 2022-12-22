@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Permission ({{ $permission->name }})
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="{{ $permission->id }}">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $permission->name or old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        @if( !$roles->isEmpty() )
                            <div class="form-group row">
                                <label for="roles" class="col-md-4 col-form-label text-md-right">Roles</label>
                                <div class="col-md-6">

                                    <h4>Assign Permission to Roles</h4>
                                    @foreach ($roles as $role)
                                        <div class="checkbox">
                                            <label>
                                                <input {{  $role->hasPermissionTo($permission) ? 'checked'  : ''  }} type="checkbox" name="roles[]" value="{{ $role->id }}">{{ ucwords(strtolower($role->name)) }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endif

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>

                    </form>
                    <a href="{{ route('permissions.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
