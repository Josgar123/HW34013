<h1>Viewers</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID</th> 
    <th>Name</th>
    <th>Description</th> 
    
    </tr>
  </thead> 
    <tbody>
      <?php
while ($viewer = $viewers->fetch_assoc()) {
  ?>
  <tr>
    <td> <?php echo $viewer['viewer_id'];?> </td>
    <td> <?php echo $viewer['viewer_name'];?> </td>
    <td> <?php echo $viewer['viewer_description'];?> </td>
    <td>
      <form method="post" action"months-by-viewer.php">
        <input type="hidden" name="cid" value="<?php echo $viewer['viewer_id'];?>"
  <button type="submit" class="btn btn-primary"></button>
</form>
    </td>
  </tr>
  <?php
}
     ?>
    </tbody>
  </table>
</div>
