@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">

                <form method="GET" action="save/{{$edit->id}}">
                    <div class="mb-3">
                        <label for="exampleInputEmail0" class="form-label">Yangi vazifa</label>
                       <textarea name="teacher_vazifa" id="" cols="30" rows="10">{{$edit->teacher_vazifa}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail0" class="form-label">Dars</label>
                        <input type="text" name="lesson" class="form-control" id="exampleInputEmail0" aria-describedby="emailHelp" value="{{$edit->lesson}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection