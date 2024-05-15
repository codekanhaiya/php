<div class="modal fade" id="doctorRegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup-heading">Become member With PHP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
            </div>

            <div class="modal-body">
                <form id="signup-form" class="form" role="form" method="post" action="subServer/fSubmit.php">

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-align-justify"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="regNo" maxlength="6" minlength="6" placeholder="Your Reg. No." >
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="mobile" placeholder="Phone Number" maxlength="10" minlength="10" >
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Email" >
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="fas fa-solid fa-graduation-cap"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="designation" placeholder="Designation " >
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-key"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" minlength="6" placeholder="Your password" >
                    </div>

                    <div class="form-group">
                        <span>I'm a</span>
                        <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" />
                        <label for="gender-male">
                            Male
                        </label>
                        <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                        <label for="gender-female">
                            Female
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="fRegister" class="btn btn-block btn-primary">Register</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <span>Already have an account?
                    <a href="#" data-dismiss="modal" data-bs-toggle="modal" data-bs-target="#docterLoginModal">Login</a>
                </span>
            </div>
        </div>
    </div>
</div>