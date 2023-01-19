<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="navbar-brand" href="index.php">Home</a>
    </li>
  </ul>
</nav>
<div class="container">
  <h2>Profil</h2>
  <p></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
		<th>Agama</th>
		<th>Status</th>
		<th>Alamat</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Ramadhan Saputra Alpani</td>
        <td>Laki-Laki</td>
        <td>Islam</td>
		<td>Belum Menikah</td>
		<td>Jl.Merawan Sawah Lebar Kota Bengkulu</td>
		
      </tr>
    </tbody>
  </table>
</div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>2023</p>
</div>
 <?php 
    
    if (isset($_GET['page'])) 
    {   
        include $_GET['page']; 
    } 
    else 
    {
        echo "<p></p>";
    }
    
    ?>
</body>
</html>
