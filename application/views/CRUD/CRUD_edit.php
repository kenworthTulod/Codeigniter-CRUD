    <div class="container">

    
    
    <h2>CRUD Edit</h2>
    <br>

    <a href="<?php echo base_url('CRUD_control'); ?>" class="btn btn-primary">Back</a>
    <br>
    <br>
    <br>

    <form action="<?php echo base_url('CRUD_control/update')?>/<?php echo $row->id?>" method="post" >
                <!--<input type="hidden" name="txt_hidden" value="<?php echo $result->id; ?>">-->
                
                <div class="form-group">
                    <label class="font-weight-bold">Lastname</label>
                    <input type="text" class="form-control" name="lastname" value="<?php echo $row->last_name; ?>" required onkeypress="return noSpace(event)">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname" value="<?php echo $row->first_name; ?>" required>
                    <!--<small id="first_nameHelp" class="form-text text-muted">Please put your name</small>-->
                </div>
                <div class="form-group"> 
                    <label class="font-weight-bold">Gender</label>
                    <div class="radio">
                        <input type="radio" name="gen_rad" value="<?php echo $row->gender; ?>"> Male
                        <input type="radio" name="gen_rad" value="<?php echo $row->gender; ?>"> Female
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">User ID</label>
                    <input type="number" class="form-control" name="userid" placeholder="Enter User ID" value="<?php echo $row->user_id; ?>" required onKeyDown="limitText(this.form.userid,this.form.countdown,4);" 
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
                    <input type="number" maxlength="10" class="form-control" name="contactnum" placeholder="Enter Contact Number" value="<?php echo $row->contact_num; ?>" onKeyDown="limitText(this.form.contactnum,this.form.countdown,11);" 
onKeyUp="limitText(this.form.contactnum,this.form.countdown,11);" maxlength="11">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Birthdate</label>
                    <input type="date" class="form-control" name="birth" value="<?php echo $row->birthdate; ?>">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Message</label>
                    <textarea class="form-control" name="mess" rows="5"><?php echo $row->message; ?></textarea>

                    <!--<input type="text"class="form-control" name="mess" rows="5" value="<?php echo $row->message; ?>"></input>-->
                </div>
                <button type="submit" class="btn btn-primary" value="save">Update</button>

    </form>
    </div>