<?php
include "header.php";
?>


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Bills Details</h1>

</div>




<?php 
include "./modal_bills_send_bill.php"; 
?>


<?php 
include "./modal_bills_registre_payement.php"; 
?>









<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  PDF
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<br>
<br>


<table class="table">
    <tr>
        <td>
            <table class="table" >
                <tr><td>Bill number</td><td>220</td></tr>
                <tr><td>Date</td><td>2020-10-10</td></tr>
                <tr><td>Status</td><td>Pay</td></tr>
                <tr><td>Start date</td><td>2020-01-01</td></tr>
                <tr><td>end date</td><td>2020-03-01</td></tr>
            </table>

        </td>
        <td>
            <table class="table" >
                <tr><td>Cliente name</td><td>Mari Bross</td></tr>
                <tr><td>Address</td><td>209, av Freedom<br>1000 Brussels<br>Belgium</td></tr>
                <tr><td>TVA Number</td><td>BE3020.203.333</td></tr>
                <tr><td>Tel:</td><td>+32659855487</td></tr>
                
            </table>

        </td>
    </tr>
</table>


<table class="table">
    <thead>
        <tr>
            <th>Qte</th>
            <th>Description</th>
            <th>Price U.</th>
            <th>Tax</th>
            <th>Total</th>
        </tr>
    </thead>




    <tr>
        <td>1</td>
        <td>Server vpn spain</td>
        <td>100</td>
        <td>21%</td>
        <td>121,00 EUR</td>
    </tr>
    <tr>
        <td>1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td>1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td>1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>        
        <td colspan="3"></td>
        <td>Sub Total </td>
        <td>100,00 EUR</td>
    </tr>


    <tr>        
        <td colspan="3"></td>
        <td>Tax </td>
        <td>21,00 EUR</td>
    </tr>


    <tr>        
        <td colspan="3"></td>
        <td>Total </td>
        <td>121,00 EUR</td>
    </tr>


</table>
















<?php
include "footer.php";
?>