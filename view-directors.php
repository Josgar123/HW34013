<h1>Viewers by Movie</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID </th> 
    <th>Director Name</th>
    <th>Director Age</th> 
    <th>Movies Made</th> 
    </tr>
    
  </thead> 
    <tbody>
      <?php
while ($director = $directors->fetch_assoc()) {
  ?>
  <tr>
    <td> <?php echo $director['director_id'];?> </td>
    <td> <?php echo $director['director_name'];?> </td>
    <td> <?php echo $director['director_age'];?> </td>
    <td> <?php echo $director['movies_made'];?> </td>
  </tr>
  <?php
}
     ?>
    </tbody>
  </table>
</div>
