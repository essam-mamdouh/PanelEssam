@extends('admin.layout.index')
@section('content')
<div class="row align-item-center">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">@yield("title")</h6>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="card-body">
                <form class="" enctype="multipart/form-data"
                      method="post" action="{{url("admin/")}}/@yield("action")">
                      @csrf
                      @method("put")
                    <div class="row g-3 align-items-center">
                    @yield("form-groups")
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">@yield("submit-button-title")</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
