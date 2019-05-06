    
    <div class="container">
        

    <h2>CRUD Create</h2>
    <br>

    <a href="<?php echo base_url('CRUD_control'); ?>" class="btn btn-primary">Back</a>
    <br>
    <br>
    <br>

    <form action="<?php echo base_url('CRUD_control/submit')?>" method="post" >
                
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname" required onkeypress="return noSpace(event)">
                </div>
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname" required>
                    <!--<small id="first_nameHelp" class="form-text text-muted">Please put your name</small>-->
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <div class="radio">
                        <input type="radio" name="gen_rad" value="Male"> Male
                        <input type="radio" name="gen_rad" value="Female"> Female
                    </div>
                </div>
                <div class="form-group">
                    <label>User ID</label>
                    <input class="form-control" name="userid" type="number" placeholder="Enter User ID" required onKeyDown="limitText(this.form.userid,this.form.countdown,4);" 
onKeyUp="limitText(this.form.userid,this.form.countdown,4);" maxlength="4">
                </div>
                
                <div class="form-group">
                    <label>College</label>
                    <select name="coll" class="form-control">
                        <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                        <option value="College of Business">College of Business</option>
                        <option value="College of Education">College of Education</option>
                        <option value="College of Nursing">College of Nursing</option>
                        <option value="College of Law">College of Law</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Contact Number</label>
                    <input class="form-control" name="contactnum" type="number" placeholder="Enter Contact Number" required onKeyDown="limitText(this.form.contactnum,this.form.countdown,11);" 
onKeyUp="limitText(this.form.contactnum,this.form.countdown,11);" maxlength="11">
                </div>
                <div class="form-group">
                    <label>Birthdate</label>
                    <input type="date" class="form-control" name="birth">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="mess" rows="5" placeholder="Enter Message"></textarea>
                    
                </div>
                <button type="submit" class="btn btn-primary" value="save">Save</button>

    </form>
    </div>