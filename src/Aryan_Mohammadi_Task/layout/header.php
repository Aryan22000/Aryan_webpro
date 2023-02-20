<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $title ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
<style>
  .nav-link,.navbar-brand {
    color: white;
}
.table a{
  color : black;
}
    </style>
</head>
<body>
  <div class="container" >
    <div class="row">
  <nav class="navbar navbar-expand-lg" style="background-color: rgb(65, 7, 109);" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aryan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.php">Home</a>
        </li>
          <a class="nav-link" href="ex1.php">exercise1 </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="variable.php">exercise 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="controlflow.php">exercise 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="array.php">exercise 5</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div> 
  <div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">
    <div class="col-sm-3" style="background-color: rgba(228, 235, 194, 0.353);">
      <h3>List of Tasks</h3>
      <div class="list-group">
        <p>Database: </p>
  <!-- <a href="../Variables-chapter3/index.php" class="list-group-item list-group-item-action">Variable</a> -->
  <a href="../crud1/create.php" class="list-group-item list-group-item-action list-group-item-primary">create</a>
  <a href="../crud1/db.php" class="list-group-item list-group-item-action list-group-item-secondary">db</a>
  <a href="..//crud1/updatesingle.php" class="list-group-item list-group-item-action list-group-item-success">update/delete</a>
  <a href="../crud1/read.php" class="list-group-item list-group-item-action list-group-item-danger">read</a>
  <!-- <a href="../tommi-project/index.php" class="list-group-item list-group-item-action list-group-item-warning">Tommi project</a> -->
  <!-- <a href="../layout/index.php" class="list-group-item list-group-item-action list-group-item-info">layout</a> -->
      </div>
    </div>
    <div class="col-sm-9">