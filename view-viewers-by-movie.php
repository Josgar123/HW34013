<h1>Viewers by Movie</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID </th> 
    <th>Name</th>
    <th>Description</th> 
     
    </tr>
    
  </thead> 
    <tbody>
      <?php
while ($viewer = $viewers->fetch_assoc()) {
  ?>
  <tr>
    <td> <?php echo $movie['viewer_id'];?> </td>
    <td> <?php echo $movie['viewer_name'];?> </td>
    <td> <?php echo $movie['viewer_description'];?> </td>
   
  </tr>
  <?php
}
     ?>
    </tbody>
  </table>
</div>
