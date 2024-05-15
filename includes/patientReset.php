<div class="modal fade" id="patientForgetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup-heading">Reset your password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
            </div>

            <div class="modal-body">
                <form id="signup-form" class="form" role="form" method="post" action="subServer/ptReset.php">

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-id-card"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="aadhar" placeholder="Aadhar Number" minlength="12" maxlength="12" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-key"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" minlength="6" placeholder="Your new password" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" value="submit" name="ptReset" class="btn btn-block btn-primary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>