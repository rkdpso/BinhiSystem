<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content rounded-xl">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add Contract</b></h4>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="contract_add.php">

                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                            <div class="date">
                                <input type="text" class="form-control" id="datepicker_add" name="date" required autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contract_job" class="col-sm-3 control-label">Job Order</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contract_job" name="contract_job" autocomplete="off" style="text-transform:uppercase">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="output" class="col-sm-3 control-label">No. of Output</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="output" name="output" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="workers" class="col-sm-3 control-label">No. of Workers</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="workers" name="workers" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="rate" class="col-sm-3 control-label">Rate</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="rate" name="rate" required autocomplete="off">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline btn-default bg-white border-black rounded-full text-black pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-outline btn-info bg-blue-500 border-blue-400 rounded-full text-black" name="add"><i class="fa fa-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content rounded-xl">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span id="del_conid"></span> - <span id="del_condate"></span></b></h4>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="contract_delete.php">
                    <input type="hidden" id="id" name="id">
                    <div class="text-center">
                        <p>DELETE CONTRACT</p>
                        <h2 id="del_conjob" class="bold"></h2>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline btn-default bg-white border-black rounded-full text-black pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-outline btn-danger bg-red-500 text-white rounded-full" name="delete"><i class="fa fa-trash"></i> Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--Edit-->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content rounded-xl">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Updating... <span id="conno"></span></b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="contract_edit.php">
                    <input type="hidden" id="conid" name="id">

                    <div class="form-group">
                        <label for="datepicker_edit" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                            <div class="date">
                                <input type="text" class="form-control" id="datepicker_edit" name="date" required autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contract_job_edit" class="col-sm-3 control-label">Job Order</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="contract_job_edit" name="contract_job" autocomplete="off" style="text-transform:uppercase">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="output_edit" class="col-sm-3 control-label">No. of Output</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="output_edit" name="output" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="workers_edit" class="col-sm-3 control-label">No. of Workers</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="workers_edit" name="workers" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="rate_edit" class="col-sm-3 control-label">Rate</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="rate_edit" name="rate" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline btn-default bg-white border-black rounded-full text-black pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-outline btn-success bg-green-400 border-green-400 text-black rounded-full" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>