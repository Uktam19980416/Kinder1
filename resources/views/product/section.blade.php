@extends('layouts.code')

@section('content')

<div class="container text-center mt-5 jumbotron bg-light">
    <img src="/uploads/news/{{ $section->images }}" width="700" height="400" style="border-radius: 10px;"><br><br>
        <div class="text-center"><h4>{{ $section->title }}</h4>
            <div class="text-center">{{ $section->desrciption }}</div>
        </div>
</div>
<br>
@endsection
