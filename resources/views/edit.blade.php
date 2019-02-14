@extends('layouts.app')

@section('content')
<main class="container auth">
    <div class="message error">
            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div><br />
        @endif
    </div>
    <form method="POST" action="{{ route('update', ['id' => $photo->id]) }}">
            @csrf
            @method('PUT')
        <input type="text" name="legende" value="{{$photo->legende}}"/>
        <textarea name="description">{{$photo->description}}</textarea>
        <input type="submit" value="Modifier">
    </form>
</main>

@endsection

