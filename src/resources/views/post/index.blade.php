@extends('layouts.app')

@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Добавить пост</a>
    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-8">{{ $post->title }}</div>
            <div class="col-md-2"><a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-secondary">Редактировать</a> </div>
            <div class="col-md-2"><a href="#" class="btn btn-danger" onclick="event.preventDefault();
                                                     document.getElementById('delete-{{ $post->id }}').submit();">Удалить</a> </div>
            <form id="delete-{{ $post->id }}" action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST" class="d-none">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
            </form>
        </div>
        <br>
    @endforeach
    {!! $posts->links() !!}
@endsection
