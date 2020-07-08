@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
  <h1>Oke</h1>
  <a href="/items/create" class="btn btn-primary">
    Create New Item
  </a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th>Name</th>
        <th>Description</th>
        <th style="width: 40px">Price</th>
        <th style="width: 40px">Stock</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $key => $item)
      <tr>
      <td>{{ $key+1 }}</td>
      <td>{{ $item->name }}</td>
      <td>{{ $item->description }}</td>
      <td>{{ $item->price }}</td>
      <td>{{ $item->stock }}</td>
      <td>
        <a href="/items/{{$item->id}}" class="btn btn-sm btn-info">show</a>
        <a href="/items/{{$item->id}}/edit" class="btn btn-sm btn-default">edit</a>
        <form action="/items/{{$item->id}}" method="post" style="display: inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
        </form>
      </td>
      </tr>
          
      @endforeach
    </tbody>

  </table>
</div>
@endsection