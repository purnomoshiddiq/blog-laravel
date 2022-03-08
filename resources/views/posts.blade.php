@extends('layouts.main')

@section('content')

@foreach ($posts as $p)
    
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $p["slug"] }}">{{ $p["title"] }}</a>
        </h2>
        
        <h3>By : {{ $p["author"] }}</h3>
        <p>{{ $p["body"] }}</p>
    </article>
    
    
@endforeach
   
@endsection