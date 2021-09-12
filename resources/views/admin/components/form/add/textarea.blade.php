<div class="col-md-12">
    <label for="addnote" class="form-label">{{$label}}</label>
    <textarea class="form-control"
    style="direction: @if(app()->getLocale() == "en") ltr @else rtl @endif"  name="{{$name}}"
    id="addnote"
    rows="3"
    placeholder="{{$placeholder}}"
    type="text">
</textarea>
</div>
