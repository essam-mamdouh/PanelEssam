<div class="col-md-12">
    <label class="form-label">{{$label}}</label>
        <select required class="form-select" name="{{$name}}">
            <option selected="selected">Choose...</option>
            @foreach($items as $selectItem)
            <option value="{{$selectItem->id}}">{{$selectItem->name_en}}</option>
        @endforeach
        </select>
</div>
