@extends('layouts.admin')



@section('title')
 - Projects
@endsection



@section('content')

  <h1 class="text-center mb-5">Admin - Projects</h1>

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Creator</th>
          <th scope="col">Objective</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($projects as $project)
        <tr>
          <td>{{$project->id}}</td>
          <td>{{$project->name}}</td>
          <td>{{$project->creator}}</td>
          <td>{{$project->objective}}</td>
          <td>{{$project->description}}</td>
          <td>

          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" class="text-center"><h6 class="my-2">Tabella vuota</h6></td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

@endsection
