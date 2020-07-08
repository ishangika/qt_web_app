<?php 
$attributes = array('name' => 'login_data');

echo form_open_multipart('login/do_upload', $attributes);
?>
                <div class="form-group">
                    <!-- <input type="hidden" name="id" class="form-control" value="<?php echo $user_detail->id;?>"> -->
                    <input type="hidden" name="id" class="form-control" value="4">
                    <input type="text" name="name" class="form-control" value="<?php echo $user_detail->name;?>">
                </div>
                 <br><br><br><div class="form-group">
                    <input type="text" name="designation" class="form-control" value="<?php echo $user_detail->designation;?>">
                </div><br><br><br><div class="form-group">
                    <input type="text" name="user_name" class="form-control" value="<?php echo $user_detail->user_name;?>">
                </div><br><br><br><div class="form-group">
                    <input type="text" name="department" class="form-control" value="<?php echo $user_detail->department;?>">
                </div><br><br><br><div class="form-group">
                    <input type="text" name="email" class="form-control" value="<?php echo $user_detail->email;?>">
                </div><br><br><br><div class="form-group">
                    <input type="text" name="dob" class="form-control" value="<?php echo $user_detail->dob;?>">
                </div>
                </div>
                 
                 <br><br><br>
                <div class="form-group">
                    <input type="file" name="image">
                </div>
 <br><br><br>
                <div class="form-group">
                    <button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
                </div>
