<h1>Movies </h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      
    <th>ID </th> 
    <th>Name</th>
    <th>Theater</th> 
    </tr>
    
  </thead> 
    <tbody>
      <?php
while ($movie = $movies->fetch_assoc()) {
  ?>
  <tr>
    <td> <?php echo $movie['movie_id'];?> </td>
    <td> <?php echo $movie['movie_name'];?> </td>
    <td> <?php echo $movie['movie_theater'];?> </td>
  </tr>
  <?php
}
     ?>
    </tbody>
  </table>
</div>
