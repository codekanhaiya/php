<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup-heading">Appointment With PHP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
            </div>

            <div class="modal-body">
                <form id="signup-form" class="form" method="post" action="subServer/ptSubmit.php">

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user-md"></i>
                            </span>
                        </div>
                        <select name="doctorsName" class="form-select">
                            <option selected value="">--Select Doctor--</option>
                            <?php

                            include 'subServer/database_connect.php';

                            $sqlQuery = "SELECT * FROM fregister";
                            $resQ = mysqli_query($conn, $sqlQuery);

                            while ($rowQ = mysqli_fetch_array($resQ)) {
                            ?>
                                <option value="<?php echo $rowQ['name']  ?>"><?php echo $rowQ['name']  ?></option>
                            <?php
                            }
                            ?>
                           
                        </select>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="100">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-id-card"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="aadhar" placeholder="Aadhar Number" minlength="12" maxlength="12">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="mobile" placeholder="Phone Number" maxlength="10" minlength="10">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-child"></i>
                            </span>
                        </div>
                        <input type="date" class="form-control" name="age" placeholder="Age">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-key"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Your password" minlength="6">
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
                        <button type="submit" value="submit" name="pRegister" class="btn btn-block btn-primary">Register</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <span>Already have an account?
                    <a href="#" data-dismiss="modal" data-bs-toggle="modal" data-bs-target="#patientLoginModal">Login</a>
                </span>
            </div>
        </div>
    </div>
</div>