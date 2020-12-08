@extends('home')

@section('title', 'Home page')

@section('page title')
    @if ($first_name != null)
        <h1>Hello, {{ $first_name }}!</h1>
    @else
        <h1>Welcome!</h1>
    @endif
@endsection

@section('first chapter')
    @parent

    Some other text
@endsection

@section('second chapter')
    <div>
            @for ($i = 5; $i > 0; $i--)
                @if ($i === 1)
                    {{ $i }} 
                @else
                    {{ $i }}, 
                @endif
            @endfor
        <ul>
        @foreach ($some_array as $color)
            <li>{{ $color }}</li>
        @endforeach
        </ul>
    </div>
@endsection