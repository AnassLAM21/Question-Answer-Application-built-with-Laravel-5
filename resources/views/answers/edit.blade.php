@extends('layouts.app')
@section('content')

<div class="row mt-4">
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
                            <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    @endsection