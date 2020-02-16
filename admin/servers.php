<?php
include "header.php";
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Servers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">List <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="servers_c.php">Add new</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php 
$menu = '<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    On line
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="servers_d.php">See</a>
    <a class="dropdown-item" href="servers_e.php">Edit</a>
    <a class="dropdown-item" href="#">Block</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>'; 
?>


<table class="table">
  <thead>
    <tr>      
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">IP</th>      
      <th scope="col">Ubication</th>            
      <th scope="col">Max users</th>            
      <th scope="col">Status</th>            
    </tr>
  </thead>
  <tbody>
      
  
     
    <tr>
      <th scope="row">1</th>
      <td>VPN-es</td>
      <td>123.569.652</td>
      <td>Spain</td>      
      <td>2500</td>            
      <td><?php echo $menu; ?></td>            
    </tr>
    
    
     
    <tr>
      <th scope="row">1</th>
      <td>VPN-es</td>
      <td>123.569.652</td>
      <td>Spain</td>      
      <td>2500</td>     
      <td><?php echo $menu; ?></td>           
    </tr>
    
    
     
    <tr>
      <th scope="row">1</th>
      <td>VPN-es</td>
      <td>123.569.652</td>
      <td>Spain</td>      
      <td>2500</td> 
      <td><?php echo $menu; ?></td>           
    </tr>
    
    
     
    <tr>
      <th scope="row">1</th>
      <td>VPN-es</td>
      <td>123.569.652</td>
      <td>Spain</td>      
      <td>2500</td>            
      <td><?php echo $menu; ?></td> 
    </tr>
    
    
     
    <tr>
      <th scope="row">1</th>
      <td>VPN-es</td>
      <td>123.569.652</td>
      <td>Spain</td>      
      <td>2500</td>    
      <td><?php echo $menu; ?></td> 
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