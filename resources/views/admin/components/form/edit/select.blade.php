<div class="col-md-12 mb-4">
    <label>{{$label}}</label>
        <select required class="form-control  basic" name="{{$name}}">
            <option selected="selected">Choose...</option>
            @foreach($items as $selectItem)
                <option @if($item[$name] == $selectItem->id) selected @endif
                value="{{$selectItem->id}}">{{$selectItem->name_ar}} / {{$selectItem->name_en}}</option>
            @endforeach
        </select>
</div>

<script>
var ss = $(".basic").select2({
    tags: true,
});
</script>
