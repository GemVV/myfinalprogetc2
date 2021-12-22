@extends('layouts.app')

@section('content')
@foreach ($posts as $post)
<h4>{{$post->title}}</h4>
    <p>{{$post->content}}</p>
@endforeach
<div class="d-flex justify-content-center">
{!! $posts->links() !!}
</div>
@endsection
