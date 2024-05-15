<div class="modal login fade" id="doctorForgetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup-heading">Reset your password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
            </div>

            <div class="modal-body">
                <form id="signup-form" class="form" role="form" method="post" action="subServer/fReset.php">

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="fa fa-align-justify"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="regNo" placeholder="Your Reg. No."  maxlength="6" minlength="6" >
                    </div>


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-key"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" minlength="6"  placeholder="Your new password" >
                    </div>

                    <div class="form-group">
                        <button type="submit" name="fReset" class="btn btn-block btn-primary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>