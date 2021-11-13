@extends('section.master')
@section('subtitle', 'Movielist-')

@section('style')

    .movielist{
    {{-- position: absolute; --}}
    left:40%;
    right:0;
    display:flex;
    justify-content: center;
    font-size:2rem;
    margin:2rem;


    line-height: 3.5rem;
    }
@endsection


@section('content')
    <div class="contianer movielist">
        <div class="row">
            <ol>
                @foreach ($movies as $movie)

                    <li>
                        {{ $movie }}
                    </li>

                @endforeach

            </ol>
            <hr>
            <ol>
@foreach ($movies as $id)
                    <li>
                        {{-- <a href="{{ route('movie/'.$id)}}"></a> --}}
                        <a href="{{ url('movie/'.$id)}}">{{$id}}</a>
                    </li>
 @endforeach
            </ol>
        </div>
    </div>
@endsection
