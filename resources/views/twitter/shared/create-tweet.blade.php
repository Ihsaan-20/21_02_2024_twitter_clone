<div class="card-body">
    <form action="{{route('twitter.store')}}" enctype="multipart/form-data" method="POST">
      @csrf
      <div class="form-group">
        <label for="postTextarea">Share your idea</label>
        <textarea class="form-control" id="postTextarea" name="content"  placeholder="share you idea..." rows="3">{{ old('content') }}</textarea>
        <span class="text-danger">
          @error('content')
            {{$message}}
          @enderror
        </span>
      </div>
      <button type="submit" class="btn btn-primary px-5">Post</button>
    </form>
  </div>