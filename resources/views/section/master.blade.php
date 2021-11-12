<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('subtitle') Cinema</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

        ul{
            list-style: none;
            display: flex;
            margin-right: 2rem;
        }
        li,a{
            color:white !important;
            text-decoration: none;
            padding-right:2rem;
        }
        @yield('style');
    </style>
</head>

<body>
        <nav class=" navbar navbar-primary bg-primary text-light ">
            <div class="container-fluid">
                <a class="text-light navbar-brand">Logo</a>
                <form class="d-flex input-group w-auto mx-auto">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('movie')}}">Movie</a></li>
                        <li><a href="{{url('admin')}}">Admin</a></li>
                        <li><a href="{{url('login')}}">Login</a></li>
                    </ul>
                </form>
            </div>
        </nav>


    @yield('content')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script>
        @yield('script');
    </script>
</body>

</html>
