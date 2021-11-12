@extends('section.master')

@section('subtitle','Admin-')

@section('style')
.container{
    padding:2rem 0 2rem 0;
}
form{
    margin-top:2rem;
}
@endsection


@section('content')
<div class="container text-center">

    <div class="row">
        <div class="col"></div>
        <div class="col-5 col-lg-3 col-sm-4"><h1>Admin Page</h1></div>
        <div class="col"></div>
    </div>

    <div class="row">
        <div class="col"></div>

        <div class="col-5 col-sm-5 col-md-5 col-lg-3 ">
            <form method="post" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-9"><input required type="text" class="mb-4 form-control" placeholder="Enter Phone"></div>
                    <div class="col-3"><button type="submit" class=" mb-4 btn btn-outline-dark">Verify</button></div>
                </div>



                <input  type="text" class="mb-4 form-control" placeholder="Verify Code">
                <button type="submit" name="submit"  class="col-12 btn btn-success">Login</button>


            </form>
        </div>

        <div class="col"></div>


    </div>
</div>


@endsection


@section('script')
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
@endsection

