<div class="col-md-12">
    <label for="firstname" class="form-label">{{$label}}</label>
    <input type="text" required name="{{$name}}" class="form-control"   value="{{$item["$name"]}}" id="firstname" placeholder="{{$placeholder}}" value="{{request()->filter ? request()->filter : ''}}" required>
</div>
