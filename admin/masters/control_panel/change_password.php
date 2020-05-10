
        <div class="col-sm-12">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-">Change Password</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                    CHANGE PASSWORD FOR ADMIN & USER
                    </div>
                    <div class="card-body">
                     <form>
                        <!-- company name -->
                        <div class="form-group row">
                            <label for="currentPassword" class="col-sm-2 col-form-label">Current Password<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="password" name="currentPassword" class="form-control" id="currentPassword" placeholder="Current Password">
                                <span class="text-danger"><small id="currentPasswordErr"></small></span>
                            </div>
                        </div>
                            <!-- company address -->
                        <div class="form-group row">
                            <label for="companyAddress" class="col-sm-2 col-form-label">New Password<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="password" name="newPassword" class="form-control" id="newPassword" placeholder="New Password">
                                <span class="text-danger"><small id="NewPasswordErr"></small></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="companyAddress" class="col-sm-2 col-form-label">Confirm Password<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                                <span class="text-danger"><small id="confirmPasswordErr"></small></span>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="companyAddress" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="submitBtnChangePassword" value="Change Password" class="btn btn-success">
                                <input type="submit" id="clear" value="Clear" class="btn btn-warning">
                                <input type="submit" id="submitBtnChangePassword" value="Change User Password" class="btn btn-info">
                           </div>
                        </div>
                       </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
     </div>



