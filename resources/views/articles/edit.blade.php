@extends('layout')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
@endsection


@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4"> UPDATE article</h1>

        <form action="/articles/{{ $article->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                   <input class="title" type="text" name="title" id="title" value="{{ $article->title }}" >
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>
                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt"  >{{ $article->excerpt }}</textarea>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>
                <div class="control">
                    <textarea name="body" id="body" class="textarea">{{ $article->body }}</textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit" >Submit</button>
                </div>

            </div>

        </form>
    </div>
</div>

@endsection
