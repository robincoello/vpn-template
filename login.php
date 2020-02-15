<?php
include "header.php";
?>




<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Login</h1>
    
</div>



<div class="container">
    <div class="row">
    <div class="col-4">
    </div>
    
    <div class="col-4">

        <form method="post" action="my_account.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        
        <a href="new_account.php">New account</a> 
        <a href="forget.php">Forget password</a> 
        <a href="login.php">login</a>

    </div>
</div>
</div>




<?php
include "footer.php";
?>