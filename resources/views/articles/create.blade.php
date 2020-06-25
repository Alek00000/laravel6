@extends('layout')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
@endsection


@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4"> New article</h1>

        <form action="/articles" method="POST">
            @csrf
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                   <input class="input " type="text" name="title" id="title" required>

                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>
                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt" ></textarea>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>
                <div class="control">
                    <textarea name="body" id="body" class="textarea"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Tags</label>
                <div class="select is-multiple control">
                    <select name="tags[]" multiple>
                    @error('tags')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
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
