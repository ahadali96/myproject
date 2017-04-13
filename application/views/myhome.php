<!DOCTYPE html>
<html>
<body>

<form action="<?php echo site_url('Home/submit')?>" method = "post">

  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname">
  <input type="submit" value="Submit">
</form>

<p>Note that the form itself is not visible.</p>

<p>Also note that the default width of a text input field is 20 characters.</p>

</body>
</html>

