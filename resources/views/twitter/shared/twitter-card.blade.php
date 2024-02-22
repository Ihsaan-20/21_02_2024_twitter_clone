<div class="card mb-3 shadow">
  <div class="card-body">
      <div class="row">
        <div class="col-md-2">
          <img src="https://via.placeholder.com/50" alt="Profile Picture" class="rounded-circle">
          <p class="text-muted">1 hour ago</p>
        </div>
        <div class="col-md-7">
          <h5 class="card-title">{{$idea->user->name}}</h5>
          <p class="card-text">{{$idea->content}}</p>

        </div>
    
        <div class="col-md-3 text-right">
          <a href="{{ route('idea.edit', $idea->id)}}" class="btn btn-primary btn-sm mb-2">Edit</a>
          <a href="{{ route('idea.show', $idea->id)}}" class="btn btn-warning btn-sm mb-2">View</a>
          <form action="{{route('idea.destroy', $idea->id)}}" method="POST" class="d-inline-block">
            @csrf
            @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm mb-2">X</button>
          </form>
        </div>

        
    </div>
    <!-- likes Section -->
    <div>
      <span class="text-muted mr-2">Likes 0</span>
      <span class="text-muted mr-2">Comments 0</span>
    </div>
    <hr>
      <!-- Comments Section -->
      <div class="comments">
          @include('twitter.shared.comment')
      </div>
  </div>
</div>
