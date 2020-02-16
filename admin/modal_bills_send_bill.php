
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bill_send_bill">
    Send email    
</button>


<div class="modal fade" id="bill_send_bill" tabindex="-1" role="dialog" aria-labelledby="bill_send_billLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bill_send_billLabel">Send email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Message</label>
                        <textarea class="form-control">Hi, here you are the bill
                            
                        </textarea>
                    </div>
                    
                    
                    
                    
                    
                    <button type="submit" class="btn btn-primary">send email</button>
                </form>




            </div>
            
        </div>
    </div>
</div>