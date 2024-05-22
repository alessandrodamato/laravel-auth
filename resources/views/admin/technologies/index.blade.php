@extends('layouts.admin')



@section('title')
 - Technologies
@endsection



@section('content')

  <h1 class="text-center my-5">Admin - Technologies</h1>

  <div class="container">

  @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      {{$errors->all()[0]}}
    </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger" role="alert">
      {{session('error')}}
    </div>
  @endif

  @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
  @endif

    <div class="row">
      <div class="col d-flex justify-content-center">
        <table class="table w-50 crud-table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th class="text-center" scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($data as $item)
            <tr>
              <td>
                <form action="{{route('admin.technologies.update', $item)}}" method="POST" id="form-edit-{{$item->id}}">
                  @csrf
                  @method('PUT')
                  <input class="w-100" type="text" value="{{$item->name}}" name="name">
                </form>
              </td>
              <td class="text-center">
                <button type="submit" onclick="editSubmit({{$item->id}})" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></button>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center"><h6 class="my-2">Tabella vuota</h6></td>
            </tr>
            @endforelse
            <tr>
              <form class="d-inline-block" action="{{route('admin.technologies.store')}}" method="POST">
                @csrf
                <td><input class="w-100" type="text" placeholder="Aggiungi" name="name"></td>
                <td class="text-center">
                  <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                </td>
              </form>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    function editSubmit(id){
      const form = document.getElementById(`form-edit-${id}`);
      form.submit();
    }
  </script>

@endsection