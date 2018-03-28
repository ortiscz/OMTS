<!-- The Add Complex Modal -->
    <div class="modal fade" id="addModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content container-dark-blue">
                <!-- Modal body -->
                <div class="modal-body">
                    <a class="add-close white" data-dismiss="modal" href="javascript:void()">x</a>
                    <div class="continer">
                        <h1 class="modal-title text-center h3 blue mb-4 mt-2">Add new Complex!</h1>

                        <form class="add-form" action="" method="post">   
                            <div class="form-group row">
                                <label for="add-name" class="col-sm-4 col-form-label text-right white">Complex name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="add-name" id="add-name">
                                </div>                                
                            </div>                        
                             <div class="form-group row">
                                <label for="add-streetname" class="col-sm-4 col-form-label text-right white">Street name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="add-streetname" id="add-streetname">
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="add-streetnum" class="col-sm-4 col-form-label text-right white">Street number</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="add-streetnum" id="add-streetnum">
                                </div>                                
                            </div>    
                            <div class="form-group row">
                                <label for="add-city" class="col-sm-4 col-form-label text-right white">City</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="add-city" id="add-city">
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
                            <button type="submit" name="add-complex" class="btn btn-primary btn-block mb-4 mt-4">Submit</button>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>