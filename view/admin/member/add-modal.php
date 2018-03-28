<!-- The Add user Modal -->
    <div class="modal fade" id="addModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content container-dark-blue">
                <!-- Modal body -->
                <div class="modal-body">
                    <a class="register-close white" data-dismiss="modal" href="javascript:void()">x</a>
                    <div class="continer">
                        <h1 class="modal-title text-center h3 blue mb-4 mt-2">Add new user!</h1>

                        <form class="register-form" action="./scripts/register.php" method="post">
                            <div class="form-group row">
                                <label for="register-email" class="col-sm-4 col-form-label text-right white">Email address</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="register-email" id="register-email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-password" class="col-sm-4 col-form-label text-right white">Password</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-password" id="register-password">
                                </div>
                            </div>
                            <div class="form-check row">
                            	<div class="col-sm-8 offset-sm-4">
								    <input type="checkbox" class="form-check-input" id="isAdmin" name="isAdmin">
								    <label class="form-check-label white" for="isAdmin">User is admin</label>
								</div>
							  </div>
                            <hr>
                            <h2 class="text-center h6 blue mb-2">Detail information</h2>
                            <div class="form-group row">
                                <label for="register-fname" class="col-sm-4 col-form-label text-right white">First name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-fname" id="register-fname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-lname" class="col-sm-4 col-form-label text-right white">Last name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-lname" id="register-lname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-city" class="col-sm-4 col-form-label text-right white">City</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-city">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-streetnum" class="col-sm-4 col-form-label text-right white">Street number</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="register-streetnum" id="register-streetnum">
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="register-streetname" class="col-sm-4 col-form-label text-right white">Street name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-streetname" id="register-streetname">
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="register-state" class="col-sm-4 col-form-label text-right white">State</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-state" id="register-state">
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="register-zip" class="col-sm-4 col-form-label text-right white">ZIP</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="register-zip" id="register-zip">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-phone" class="col-sm-4 col-form-label text-right white">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-phone" id="register-phone">
                                </div>                                
                            </div>
                            <hr>
                            <h2 class="text-center h6 blue mb-2 blue">Card information</h2>
                            <div class="form-group row">
                                <label for="register-card" class="col-sm-4 col-form-label text-right white">Card number</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-card" id="register-card">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-expiration" class="col-sm-4 col-form-label text-right white">Card expiration</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="register-expiration" id="register-expiration" placeholder="MM/YY">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-ccv" class="col-sm-4 col-form-label text-right white">CCV</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="register-ccv" id="register-ccv" placeholder="123">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">Submit</button>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>