@extends('admin.layout.index')
@section('content')
    <div style="margin: auto;" class="col-lg-12 table-container">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield("title")</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="" enctype="multipart/form-data"
                      method="post" action="{{url("admin/")}}/@yield("action")">
                    @csrf
                    @yield("form-groups")
                    <button type="submit" class="btn btn-outline-primary mb-2">@yield("submit-button-title")</button>
                </form>
            </div>
        </div>
    </div>
@endsection
