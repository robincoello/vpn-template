
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bills_registre_payement">
    Registre payement   
</button>


<div class="modal fade" id="bills_registre_payement" tabindex="-1" role="dialog" aria-labelledby="bills_registre_payementLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bills_registre_payementLabel">Registre payement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ammount</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Type</label>
                        <select name="" class="form-control">
                            <option>Paypal</option>
                            <option>Bank</option>
                            <option>Stripe</option>
                        </select>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Commnet</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    
                    
                    
                    
                    
                    <button type="submit" class="btn btn-primary">Registre</button>
                </form>




            </div>
            
        </div>
    </div>
</div>