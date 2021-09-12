@extends('admin.layout.index')
@section('content')
<div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4 class="">@yield('statistics')</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <table class="table table-hover" style="width:100%" id="areas-table">
                <thead>
                    @yield('thead')
                </thead>
                <tbody>
                    @yield('tbody')
                </tbody>
            </table>
            <span>{{ $items->links('pagination::bootstrap-4') }}</span>
        </div>
    </div>
</div>
@endsection





