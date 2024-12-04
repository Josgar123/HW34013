<h1>Movies with Viewers</h1>
<div class="card-group">

      <?php
while ($movie = $movies->fetch_assoc()) {
  ?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"> <?php echo $movie['movie_name'];?> </h5>
      <p class="card-text">
      <ul class="list-group">
        <?php
  $viewers = selectViewersByMovies($movie['movie_id']);
  while ($viewer = $courses->fetch_assoc()) {
    ?>
    <li class="list-group-item"><?php echo $movie['viewer_name'];?> - <?php echo $movie['viewer_id'];?> - <?php echo $movie['viewer_description'];?></li>
      
    <?php
    }
    ?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Movie Name: <?php echo $movie['movie_name'];?> </small></p>
    </div>
  </div>
 
  <?php
}
  ?>
 </div>
