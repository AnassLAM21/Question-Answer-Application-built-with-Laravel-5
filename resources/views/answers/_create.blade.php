<div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Your Answer</h3>
                    <hr>
                    <form action="{{ route('questions.answers.store',$question->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" {{ $errors->has('body') ? 'is-invalid' : '' }} rows="10"  name="body"></textarea>
                            @if($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong> {{ $errors->first}} </strong>
                                </div>

                            @endif
                        </div>
                        <div class="form-groupe">
                            <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>