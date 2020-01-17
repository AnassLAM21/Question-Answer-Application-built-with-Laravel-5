<div class="form-group">
    <label for="question-title"> Question Title </label>
<input type="text"  id="question-title" name="title" value="{{ old('title',$question->title) }}" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}">
    @if($errors->has('title'))
        <div class="invalid-feedback">
          <strong> {{ $errors->first('title') }} </strong>
        </div>
    @endif

</div> 


<div class="form-group">
    <label for="question-body"> Question Body </label>
    <textarea id="question-body" name="body" rows="10" class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}"> {{ old('body',$question->body) }} </textarea>

    @if($errors->has('body'))
        <div class="invalid-feedback">
          <strong> {{ $errors->first('body') }} </strong>
        </div>
    @endif

</div> 

<div class="form-groupe">
    <button type="submit" class="btn btn-outline-primary brn-lg"> {{ $buttonText }}  </button>
</div>