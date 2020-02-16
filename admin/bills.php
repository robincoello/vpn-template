<?php
include "header.php";
?>


<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Bills</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>




<table class="table">
  <thead>
    <tr>      
      <th scope="col">ID</th>
      <th scope="col">Date</th>
      <th scope="col">Client</th>
      <th scope="col">Server</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      
      
    <tr>
      <th scope="row">2</th>
      <td>2020-01-01</td>
      <td>Marie, JACOBS</td>
      <td>Spain</td>
      <td>20.00 EUR</td>
      <td>Pay</td>
      <td><a href="bills_details.php">see</a></td>
    </tr>
    
      
      
    <tr>
      <th scope="row">2</th>
      <td>2020-01-01</td>
      <td>Marie, JACOBS</td>
      <td>Spain</td>
      <td>20.00 EUR</td>
      <td>Pay</td>
      <td><a href="bills_details.php">see</a></td>
    </tr>
    
      
      
    <tr>
      <th scope="row">2</th>
      <td>2020-01-01</td>
      <td>Marie, JACOBS</td>
      <td>Spain</td>
      <td>20.00 EUR</td>
      <td>Pay</td>
      <td><a href="bills_details.php">see</a></td>
    </tr>
    
      
      
    <tr>
      <th scope="row">2</th>
      <td>2020-01-01</td>
      <td>Marie, JACOBS</td>
      <td>Spain</td>
      <td>20.00 EUR</td>
      <td>Pay</td>
      <td><a href="bills_details.php">see</a></td>
    </tr>
    
      
      
    <tr>
      <th scope="row">2</th>
      <td>2020-01-01</td>
      <td>Marie, JACOBS</td>
      <td>Spain</td>
      <td>20.00 EUR</td>
      <td>Pay</td>
      <td><a href="bills_details.php">see</a></td>
    </tr>
    
    

    
    
    
  </tbody>
</table>


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>


<?php
include "footer.php";
?>