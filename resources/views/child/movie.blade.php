<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>movies</title>
    <style>
        body{
            position: absolute;
            left:40%;
            right:0;
            /* display: flex; */
            justify-content: center;
            font-size:2rem;
            margin:2rem;
            /* margin:0 2rem 2rem 2rem;
             */

             line-height: 3.5rem;
        }
    </style>
</head>
<body>
    {{-- <h1 style="color:red;font-weight:bolder;">Movies Page name: {{$mName}}</h1>
     --}}
     {{-- <h1>movie page</h1>
         --}}
<ol>
         @foreach ($movies as $movie)

                <li>
                    {{$movie}}
                </li>

         @endforeach

</ol>

</body>
</html>

