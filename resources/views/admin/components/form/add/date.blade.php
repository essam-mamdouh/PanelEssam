<div class="col-md-12">
            <label for="admitdate" class="form-label">{{$label}}</label>
            <input type="date" name="{{$name}}" class="form-control" placeholder="{{$placeholder}}" id="admitdate" value="{{request()->filter ? request()->filter : ''}}" required>
</div>
