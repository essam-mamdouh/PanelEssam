<div class="col-md-12 mb-4">
    <label for="fullName">{{$label}}</label>
    <input type="text" required name="{{$name}}"  value="{{$item["$name"]}}" class="form-control" id="fullName" placeholder="{{$placeholder}}" value="{{request()->filter ? request()->filter : ''}}" required>
    <div class="valid-feedback">
        Looks good!
    </div>
    <div class="invalid-feedback">
        Please fill the name
    </div>
</div>
<script>
window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('simple-example');
    var invalid = $('.simple-example .invalid-feedback');

    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
            invalid.css('display', 'block');
        } else {

            invalid.css('display', 'none');

            form.classList.add('was-validated');
        }
      }, false);
    });

    }, false);
    </script>
