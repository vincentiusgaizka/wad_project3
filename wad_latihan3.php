    <?php
    $conn= mysqli_connect("localhost","root","","wad_project3");
    $result= mysqli_query ($conn,"SELECT* FROM students");
    // $data=mysqli_fetch_object($result);
    // var_dump($data->name);
    ?>
  <!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body> 

  <table>
  <tr>
    <th>nomor</th>
    <th>nim</th>
    <th>nama</th>
    <th>alamat</th> 
  </tr>
  <?php while ($data=mysqli_fetch_object($result)) { ?>
  <tr>
    <td> <?php echo $data->id ?></td>
    <td><?php echo $data->nim ?></td>
    <td><?php echo $data->name ?></td>
    <td><?php echo $data->address ?></td>
  </tr>
    <?php } ?>
</table>

</body>
</html>