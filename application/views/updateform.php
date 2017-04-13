<!DOCTYPE html>
<html>
<body>

<form action="<?php echo site_url('Home/submitupdated')?>/<?php echo $lists[0]->ID?>" method = "post">

  First name:<br>
  <input type="text" name="firstname" value = <?php echo $lists[0]->firstname?>>
  <br>
  Last name:<br>
  <input type="text" name="lastname" value = <?php echo $lists[0]->lastname?>>
  <input type="submit" value="Submit">
</form>

<p>Note that the form itself is not visible.</p>

<p>Also note that the default width of a text input field is 20 characters.</p>

</body>
</html>
