<h1>Months by Viewer</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th> Viewer ID</th> 
    <th>Name</th>
    <th>Description</th> 
    <th>Movie ID</th> 
    <th>Movie Name</th> 
    <th>Runtime</th>   
    </tr>
    
  </thead> 
    <tbody>
      <?php
while ($month = $movies->fetch_assoc()) {
  ?>
  <tr>
    <td> <?php echo $month['viewer_id'];?> </td>
    <td> <?php echo $month['viewer_name'];?> </td>
    <td> <?php echo $month['viewer_description'];?> </td>
    <td> <?php echo $month['movie_id'];?> </td>
    <td> <?php echo $month['movie_name'];?> </td>
    <td> <?php echo $month['runtime'];?> </td>
  </tr>
  <?php
}
     ?>
    </tbody>
  </table>
</div>
