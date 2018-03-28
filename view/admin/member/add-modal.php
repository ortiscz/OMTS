<!-- The Add user Modal -->
    <div class="modal fade" id="addModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content container-dark-blue">
                <!-- Modal body -->
                <div class="modal-body">
                    <a class="add-close white" data-dismiss="modal" href="javascript:void()">x</a>
                    <div class="continer">
                        <h1 class="modal-title text-center h3 blue mb-4 mt-2">Add new user!</h1>

                        <form class="add-form" action="" method="post">
                            <div class="form-group row">
                                <label for="add-email" class="col-sm-4 col-form-label text-right white">Email address</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="add-email" id="add-email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-password" class="col-sm-4 col-form-label text-right white">Password</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="add-password" id="add-password">
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
                                <label for="add-fname" class="col-sm-4 col-form-label text-right white">First name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="add-fname" id="add-fname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-lname" class="col-sm-4 col-form-label text-right white">Last name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="add-lname" id="add-lname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-city" class="col-sm-4 col-form-label text-right white">City</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="add-city">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-streetnum" class="col-sm-4 col-form-label text-right white">Street number</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="add-streetnum" id="add-streetnum">
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="add-streetname" class="col-sm-4 col-form-label text-right white">Street name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="add-streetname" id="add-streetname">
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="add-state" class="col-sm-4 col-form-label text-right white">State</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="add-state" id="add-state">
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="add-zip" class="col-sm-4 col-form-label text-right white">ZIP</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="add-zip" id="add-zip">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-phone" class="col-sm-4 col-form-label text-right white">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="add-phone" id="add-phone">
                                </div>                                
                            </div>
                            <hr>
                            <h2 class="text-center h6 blue mb-2 blue">Card information</h2>
                            <div class="form-group row">
                                <label for="add-card" class="col-sm-4 col-form-label text-right white">Card number</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="add-card" id="add-card">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-expiration" class="col-sm-4 col-form-label text-right white">Card expiration</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="add-expiration" id="add-expiration" placeholder="MM/YY">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add-ccv" class="col-sm-4 col-form-label text-right white">CCV</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="add-ccv" id="add-ccv" placeholder="123">
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4 mt-4">Submit</button>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>