@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bonjour
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
@endif

<div class="container margin-top">
    <h2>Gestion des Photos</h2>
    <a href="{{ route('create') }}" class="btn btn-app">
        <i class="fa fa-edit"></i> Ajouter
    </a>
    <table>
            <thead>
        <tr>
            <th>Legende</th>
            <th>Description</th>
            <th>Url</th>
            <th>Actions</th>
        </tr>
            </thead>
            <tbody>
                    @foreach ($photos as $photo)
                  <tr class="even pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">{{$photo->legende}}</td>
                    <td class=" ">{{$photo->description}}</td>
                    <td class=" ">{{$photo->url}}</td>

                    <td class="last" style="display: flex;flex-direction: column;justify-content: space-between;">
                        <a href="#" title="Voir"><i class="fa fa-eye"></i></a>
                        <a href="{{route('edit', ['id' => $photo->id])}}" title="Modifier"><i class="fa fa-pencil"></i>Modifier</a>
                        <a href="{{route('delete', ['id' => $photo->id])}}" title="Supprimer"><i style="color:#CF270A" class="fa fa-times"></i>Supprimer</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
    </table>

</div>

@endsection

