@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">

                <form method="GET" action="baholash/{{$id}}">
                    <div class="mb-3">
                        <label for="exampleInputEmail0" class="form-label">Baho</label>
                        <input type="text" name="student_baho" class="form-control" id="exampleInputEmail0" aria-describedby="emailHelp" max="5">
                    </div>

                    @error('student_baho')
                    <span>Nimadir hato ketti:Etibor bilan toldiring!</span>
                    @enderror

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
