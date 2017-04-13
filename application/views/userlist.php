<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>ID</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Action</th>
  </tr>
  <?php foreach($lists as $u): ?>
  <tr>
    <td><?php echo $u->ID?></td>
    <td><?php echo $u->firstname?></td>
    <td><?php echo $u->lastname?></td>
    <td><a href="<?php echo site_url('Home/deluser')?>/<?php echo $u->ID?>"><button>Delete</button></a> <a href="<?php echo site_url('Home/updateuser')?>/<?php echo $u->ID?>"><button>Update</button></a></td>

  </tr>
  <?php endforeach?>
</table>

</body>
</html>