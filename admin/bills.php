<?php
include "header.php";
?>


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Bills</h1>
    
</div>




<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Date</th>
      <th scope="col">Server</th>
      <th scope="col">Price</th>
      <th scope="col">PDF</th>
    </tr>
  </thead>
  <tbody>
<?php 

foreach (array(
    ""=>"", 
    "id"=>"1", 
    "date"=>"2020-02-20", 
    "server"=>"espana", 
    "price"=>"12", 
    "pdf"=>"pdf", 
    
    ) as $key => $value) {
    echo '    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>'; 
}
?>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
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