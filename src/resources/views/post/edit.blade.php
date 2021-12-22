@extends('layouts.app')

@section('content')

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Создание поста') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ $post ? route('posts.update', ['post' => $post]) : route('posts.store') }}">
                            @if ($post)
                                <input type="hidden" name="_method" value="PUT">
                                @endif
                            @csrf
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Заголовок') }}</label>

                                <div class="col-md-6">
                                    <input id="title" class="form-control" name="title" value="{{ $post ? $post->title : '' }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Контент') }}</label>

                                <div class="col-md-6">
                                    <textarea name="content" id="content" class="form-control">{{ $post ? $post->content: '' }}</textarea>
                                </div>
                            </div>
                            <input id="author" type="hidden" name="author" value="{{ Auth::id() }}">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
