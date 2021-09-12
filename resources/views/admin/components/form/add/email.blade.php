<div class="col-md-12 mb-4">
    <label for="e_mail">{{$label}}</label>
    <input type="email" class="form-control" name="{{$name}}" id="e_mail" placeholder="{{$placeholder}}" required>
    <div class="valid-feedback">
        Looks good!
    </div>
    <div class="invalid-feedback">
        Please fill the Email
    </div>
</div>

<script>
window.addEventListener('load', function() {

var forms = document.getElementsByClassName('email');
var invalid = $('.email .invalid-feedback');


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
