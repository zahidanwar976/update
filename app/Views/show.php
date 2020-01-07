<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Show Data</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach ($abc as $value) {
       ?>
        <tr>
          <td><?php echo $value['id']?></td>
          <td><?php echo $value['username']?></td>
          <td><?php echo $value['email']?></td>
          <td><?php echo $value['password']?></td>
          <td><a href="<?= base_url('Mycontroller/delete/' . $value['id']); ?>">Delete</a>/<a href="<?= base_url('Mycontroller/edit/'. $value['id']);?>">Edit</a></td>

        </tr>
       <?php } ?> 
    </tbody>
  </table>
</div>

</body>
</html>
