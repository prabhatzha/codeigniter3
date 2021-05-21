<div class="container my-4">
<h3>ContactUs Page</h3>
    <br>
<form class="needs-validation" novalidate>
<div class="form-row">
 <div class="col-md-6 mb-3">
   <label for="name">Full Name</label>
   <input type="text" class="form-control" id="name"  name="name"  required>
   <div class="valid-feedback">
     Looks good!
   </div>
 </div>
 <div class="col-md-6 mb-3">
   <label for="validationCustom02">Email id</label>
   <input type="email" class="form-control" id="email" name="email"  required>
   <div class="valid-feedback">
     Looks good!
   </div>
 </div>
</div>

<div class="form-group">
 <div class="form-check">
   <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
   <label class="form-check-label" for="invalidCheck">
     Agree to terms and conditions
   </label>
   <div class="invalid-feedback">
     You must agree before submitting.
   </div>
 </div>
</div>
<button class="btn btn-primary" type="submit" name="submit" id="submit">Submit form</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
'use strict';
window.addEventListener('load', function() {
 // Fetch all the forms we want to apply custom Bootstrap validation styles to
 var forms = document.getElementsByClassName('needs-validation');
 // Loop over them and prevent submission
 var validation = Array.prototype.filter.call(forms, function(form) {
   form.addEventListener('submit', function(event) {
     if (form.checkValidity() === false) {
       event.preventDefault();
       event.stopPropagation();
     }
     form.classList.add('was-validated');
   }, false);
 });
}, false);
})();
</script>
</div>