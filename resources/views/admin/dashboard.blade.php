@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                {!! $chart->container() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src=//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js charset=utf-8></script>
@endsection

{!! $chart->script() !!}
