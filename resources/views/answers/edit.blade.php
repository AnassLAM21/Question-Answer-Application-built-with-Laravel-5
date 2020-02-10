@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h1>Editing answer for question: <strong>{{ $question->title }}</strong></h1>
                    </div>
                    <hr>
                    <form action="{{ route('questions.answers.update', [$question->id, $answer->id]) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="7" name="body">{{ old('body', $answer->body) }}</textarea>
                            @if ($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
=======

<div class="container">
<div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Editing answer for question : <strong> {{  $question->title }}</strong></h3>
                    <hr>
                    <form action="{{ route('questions.answers.update',[$question->id,$answer->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <textarea class="form-control" {{ $errors->has('body') ? 'is-invalid' : '' }} rows="10"  name='body'> {{ old('body',$answer->body) }} </textarea>
                            @if($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong> {{ $errors->first}} </strong>
                                </div>

                            @endif
                        </div>
                        <div class="form-groupe">
>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62
                            <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </div>
</div>
@endsection
=======
</div>
 @endsection
>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62
