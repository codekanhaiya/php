<div class="modal fade" id="patientLoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup-heading">login With PHP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
            </div>

            <div class="modal-body">
                <form id="signup-form" class="form" role="form" method="post" action="subServer/ptLogin.php">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="50" required>
                    </div>

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
                        <input type="password" class="form-control" name="password" minlength="6" placeholder="Your password" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" value="submit" name="ptLog" class="btn btn-block btn-primary">SignIn</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer justify-content-between">
                <span>
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#patientForgetModal">Forget Password</a>
                </span>
                <span> 
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#appointmentModal">Click here </a>to register a new appointment
                </span>
            </div>
        </div>
    </div>
</div>