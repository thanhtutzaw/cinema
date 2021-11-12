@extends('section.master')
@section('subtitle','Login-')

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
        <div class="col-5 col-lg-3 col-sm-4"><h1>Login</h1></div>
        <div class="col"></div>
    </div>

    <div class="row">
        <div class="col"></div>

        <div class="col-5 col-sm-5 col-md-5 col-lg-3 ">
            <form>
                <div class="row">
                    <div class="col-9"><input type="text" class="mb-4 form-control" placeholder="Enter Phone"></div>
                    <div class="col-3"><button class=" mb-4 form-control-sm btn-outline-dark">Verify</button></div>
                </div>



                <input type="text" class="mb-4 form-control" placeholder="Verify Code">
                <button class="form-control btn-success">Login</button>
            </form>
        </div>

        <div class="col"></div>


    </div>

</div>


@endsection
