<select class="form-select" id="mid" name="mid">
<?php
while ($movieItem = $movieList-> fetch_assoc()) {
  ?>
   <option value="<?php echo movieItem['movie_id'];?>"><?php echo movieItem['movie_name'];?> </option>
  <?php
}
?>
</select>
