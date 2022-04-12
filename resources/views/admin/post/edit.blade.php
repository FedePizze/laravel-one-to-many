@extends('admin.layouts.bebase')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>Modifica post</h1>

                <form method="POST" action={{route('admin.posts.update', $post->id)}}>

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                      <label for="title">Titolo</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea class="form-control" id="description" rows="10" name="description">{{old('description', $post->description)}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Salva</button>

                </form>

            </div>
        </div>
    </div>
@endsection

