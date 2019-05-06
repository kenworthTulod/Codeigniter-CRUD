
    <!-- modal for create-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Create New Entry</button>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">

                        <h4 class="modal-title">CRUD Create</h4>
                        <br>

                <form action="<?php echo base_url('CRUD_control/submit')?>" method="post" >
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Lastname</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname" required onkeydown="return noSPChar(event)">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Firstname</label>
                                <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname" required onkeydown="return noSPChar(event)">
                                <!--<small id="first_nameHelp" class="form-text text-muted">Please put your name</small>-->
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Gender</label>
                                <div class="radio">
                                    <input type="radio" name="gen_rad" value="Male"> Male
                                    <input type="radio" name="gen_rad" value="Female"> Female
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">User ID</label>
                                <input class="form-control" name="userid" type="number" placeholder="Enter User ID" required onKeyDown="limitText(this.form.userid,this.form.countdown,4);" 
            onKeyUp="limitText(this.form.userid,this.form.countdown,4);" maxlength="4">
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">College</label>
                                <select name="coll" class="form-control">
                                    <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                                    <option value="College of Business">College of Business</option>
                                    <option value="College of Education">College of Education</option>
                                    <option value="College of Nursing">College of Nursing</option>
                                    <option value="College of Law">College of Law</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Contact Number</label>
                                <input class="form-control" name="contactnum" type="number" placeholder="Enter Contact Number" required onKeyDown="limitText(this.form.contactnum,this.form.countdown,11);" 
            onKeyUp="limitText(this.form.contactnum,this.form.countdown,11);" maxlength="11">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Birthdate</label>
                                <input type="date" class="form-control" name="birth">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Message</label>
                                <textarea class="form-control" name="mess" rows="5" placeholder="Enter Message"></textarea>
                                
                            </div>
                            <button type="submit" class="btn btn-primary" value="save">Save</button>

                </form>
                </div>
                <br>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>

        <br>
        <br>

        <table class="table">
        <thead class="thead-dark text-center">
            <tr>
            <th>#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Gender</th>
            <th>User ID</th>
            <th>College</th>
            <th>Contact #</th>
            <th>Birtdate</th>
            <th>Message</th>
            <!--<th>Created At</th>-->
            <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                if($results){
                    foreach ($results as $result) {
                    
            ?>

            <tr>
                <td><?php echo $result->id; ?></td>
                <td><?php echo $result->last_name; ?></td>
                <td><?php echo $result->first_name; ?></td>
                <td><?php echo $result->gender?></td>
                <td><?php echo $result->user_id; ?></td>
                <td><?php echo $result->college?></td>
                <td><?php echo $result->contact_num; ?></td>
                <td><?php echo $result->birthdate; ?></td>
                <td><?php echo $result->message; ?></td>
                <!--<td><?php echo $result->created_at; ?></td>-->
                <td>
                    <a href="<?php echo base_url('CRUD_control/CRUD_edit/'.$result->id); ?>" class="btn btn-info">Edit</a>
                    <a href="<?php echo base_url('CRUD_control/CRUD_delete/'.$result->id); ?>" class="btn btn-danger" onclick="return confirm ('Do you want to delete this record?')">Delete</a>
                </td>
            </tr>
            
            <?php 
                    }
                }
            ?>

        </tbody>

        </table>
    