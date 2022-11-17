<div class="modal fade" id="addclient">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Client</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
<form action="" method="post">

                        <div class="form-group">
                            <label for="names">Full Names</label>
                            <input id="names" name="names" class="form-control">
                        </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tel">Mobile Number</label>
                            <input type="tel"  pattern="[0-9]{1}[0-9]{9}" value="<?php echo $_POST['tel'] ?? null ?>"  name="tel" class="form-control" id="tel" placeholder="071245678">
                            <small class="text-center">i.e <code>0712345678</code></small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" name="email" type="email" placeholder="email@example.com" id="email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mode">Industry</label>
                    <select id="mode" name="industry" class="form-control">
                        <option>Transport</option>
                        <option>Real Estate</option>
                        <option>Agri-Business</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exp_desc">Notes</label>
                    <textarea class="form-control" name="notes" id="exp_desc"></textarea>
                </div>
                <button type="submit" name="add_client" class="btn btn-success btn-block">Add Client</button>
</form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>