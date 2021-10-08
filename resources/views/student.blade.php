@extends('layouts.app')

@section('content')
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Oquvchini ismi</th>
      <th scope="col">Vazifa</th>
      <th scope="col">Baho</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($student as $j)
    <tr>
      <th scope="row">{{$j->id}}</th>
      <td>{{$j->student_name}}</td>
      <td>{{$j->student_vazifa}}</td>
      <td>
          @if($j->student_baho>0)
            {{ $j->student_baho }}
            @else
            Baho qoyilmagan
            @endif

      </td>


      <td>
        <a href="delete_baho?id={{$j->id}}" class="btn btn-outline-danger">Ochirish</a>
        <a href="add_baho?id={{$j->id}}" class="btn btn-outline-info">Baholash</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection

