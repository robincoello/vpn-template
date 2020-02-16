<?php
include "header.php";
?>


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Bills</h1>
    
</div>




<table class="table">
  <thead>
    <tr>      
      <th scope="col">ID</th>
      <th scope="col">Date</th>
      <th scope="col">Client</th>
      <th scope="col">Server</th>
      <th scope="col">Price</th>
      <th scope="col">PDF</th>
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
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


<?php
include "footer.php";
?>