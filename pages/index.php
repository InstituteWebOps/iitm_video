<?php require 'views/header.php'; ?>
<div class="col-sm-4 room_form">
  <h4>
    Enter the Room Name
  </h4>
<form action="join" metho="POST">
  <input type='text' placeholder='Room Name' name="room">
  <input type='submit' value='Join'>
</form>
</div>
  <?php require 'views/footer.php'; ?>
