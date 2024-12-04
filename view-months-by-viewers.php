<h1>Months by Viewer</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID </th> 
    <th>Name</th>
    <th>Description</th> 
    <th>Month</th> 
    <th>Year</th> 
    <th>Day/ Time</th>   
    </tr>
    
  </thead> 
    <tbody>
      <?php
while ($month = $months->fetch_assoc()) {
  ?>
  <tr>
    <td> <?php echo $month['viewer_id'];?> </td>
    <td> <?php echo $month['viewer_name'];?> </td>
    <td> <?php echo $month['viewer_description'];?> </td>
  </tr>
  <?php
}
     ?>
    </tbody>
  </table>
</div>
