<h1>Viewers</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID</th> 
    <th>Name</th>
    <th>Description</th> 
      <th> </th>
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
    <td>
      <form method="post" action"months-by-viewer.php">
        <input type="hidden" name="cid" value="<?php echo $movie['viewer_id'];?">
  <button type="submit" class="btn btn-primary">Months</button>
</form>
    </td>
  </tr>
  <?php
}
     ?>
    </tbody>
  </table>
</div>
