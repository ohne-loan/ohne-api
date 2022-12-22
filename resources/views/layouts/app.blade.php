<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
    <div id="app">
        @include('layouts.navbar') {{-- Including navbar file --}}
        @auth
            <div id="overlay"></div>
            <div id="sidebar">
                @include('layouts.sidebar')
            </div>
        @endauth
        <div id="content">
            <main class="col-sm-12">
                @include('layouts.message') {{-- Including flash message file --}}
                @include('admin.errors.list') {{-- Including error file --}}
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Scripts -->
    @include('layouts.scripts')
</body>
</html>
