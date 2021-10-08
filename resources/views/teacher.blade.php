@extends('layouts.app')

@section('content')
<table class="table table-dark table-hover">
<div class="col-12"><a type="button" href="add_vazifa"class="btn btn-success btn-lg">Vazifa berish</a></div>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Yangi Vazifa</th>
      <th scope="col">Dars</th>
      <th scope="col">Action</A></th>

    </tr>
  </thead>
  <tbody>
  @foreach($teacher as $j)
    <tr>
      <th scope="row">{{$j->id}}</th>
      <td>{{$j->teacher_vazifa}}</td>
      <td>{{$j->lesson}}</td>


      <td>
        <a href="delete?id={{$j->id}}" class="btn btn-outline-danger">Ochirish</a>
        <a href="view?id={{$j->id}}" class="btn btn-outline-warning">Korish</a>
        <a href="edit?id={{$j->id}}" class="btn btn-outline-primary">Ozgartirish</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $teacher->links() }}
@endsection

