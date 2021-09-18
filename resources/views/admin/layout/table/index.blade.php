@extends('admin.layout.index')
@section('content')
<div class="card mb-3">
        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
            <h6 class="mb-0 fw-bold ">@yield('statistics')</h6>
        </div>
        <div class="card-body basic-custome-color">
            <div class="table-responsive">
                <table class="table">
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



