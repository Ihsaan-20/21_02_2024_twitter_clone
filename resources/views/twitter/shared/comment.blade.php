<div class="comment mb-2">
  <div class="row">
    <div class="col-lg-12">
     <form action="{{route('idea.comment.store', $idea->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
        <input type="text" name="comment" class="form-control" placeholder="add your comment" id="comment">
        <button class="btn btn-primary mt-2 mb-2 px-5">-></button>
        <hr>
     </form>
    </div>
  </div>

      @foreach ($idea->comments as $comment )
          <div class="d-flex justify-content-between">
            <div>
              <strong>{{$comment->user->name}}</strong>
              <p>{{$comment->content}}</p>
            </div>
            <div>
              <small class="text-muted">{{$comment->created_at}}</small>
            </div>
          </div>
        @endforeach
        
  </div>