<div class="col-md-12 mb-4">
    <label for="exampleFormControlTextarea1">{{$label}}</label>
    <textarea class="form-control"
    style="direction: @if(app()->getLocale() == "en") ltr @else rtl @endif"  name="{{$name}}"
    id="exampleFormControlTextarea1"
    rows="3"
    placeholder="{{$placeholder}}"
    type="text"
    >{{$item["$name"]}}</textarea>
</div>
