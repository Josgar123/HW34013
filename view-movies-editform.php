<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMovieModal<?php echo $movie['movie_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editMovieModal<?php echo $movie['movie_id']; ?>" tabindex="-1" aria-labelledby="editMovieModal<?php echo $movie['movie_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editMovieModal<?php echo $movie['movie_id']?>;">Edit Movie</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post" action="">
            <div class="mb-3">
              <label for="mName<?php echo $movie['movie_id']; ?>" class="form-label">Movie Name</label>
              <input type="text" class="form-control" id="mName<?php echo $movie['movie_id']; ?>" name="mName" value="<?php echo $movie['movie_name']; ?>">
            </div>
            <div class="mb-3">
              <label for="mRuntime<?php echo $movie['movie_id']; ?>" class="form-label">Movie Runtime</label>
              <input type="text" class="form-control" id="mRuntime<?php echo $movie['movie_id']; ?>" name="mRuntime" value=<?php echo $movie['runtime']; ?>>
            </div>
           <div class="mb-3">
              <label for="mYear<?php echo $movie['movie_id']; ?>" class="form-label">Movie Year</label>
              <input type="text" class="form-control" id="mYear<?php echo $movie['movie_id']; ?>" name="mYear" value=<?php echo $movie['year']; ?>>
            </div>
           <div class="mb-3">
              <label for="mGenre<?php echo $movie['movie_id']; ?>" class="form-label">Movie Genre</label>
              <input type="text" class="form-control" id="mGenre<?php echo $movie['movie_id']; ?>" name="mGenre" value=<?php echo $movie['genre']; ?>>
            </div>
            <input type="hidden" name="mid" value=<?php echo $movie['movie_id']; ?>>
            <input type="hidden" name="actionType" value="Edit">
            <button type="submit" class="btn btn-primary">Save</button>
       </form>
        
      </div>
    </div>
  </div>
</div>
