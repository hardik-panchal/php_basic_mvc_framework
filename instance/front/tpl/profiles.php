<?php if (isset($_SESSION['user']['user_type']) && $_SESSION['user']['user_type'] == 'admin') { ?>
<div class="row-fluid ">
    <div class="box span12">
        <div class="box-header well" data-original-title >
            <h2><i class="icon-list-alt"></i> Edit Profile </h2>
        </div>

        <div class="box-content">
            <form class="form-horizontal" enctype="multipart/form-data" name="frmPageManagement" action="" method="post">
                <fieldset>
		    <?php include 'messages.php'; ?>
                    <div class="control-group" >
                        <label class="control-label" for="admin_email">Email</label>
                        <div class="controls">
                            <input  class="input-xlarge" name="fields[admin_email]" id="admin_email" type="email" value="<?php echo $admin_email; ?>" required />
                        </div>
                    </div>
		    
		    <div class="control-group" >
                        <label class="control-label" for="admin_email">Password</label>
                        <div class="controls">
                            <input  class="input-xlarge" name="fields[admin_password]" id="admin_password" type="password" value=""/>
                        </div>
                    </div>
		    
		    <div class="control-group" >
                        <label class="control-label" for="admin_email">Confirm Password</label>
                        <div class="controls">
                            <input  class="input-xlarge" name="fields[admin_conf_password]" id="admin_conf_password" type="password" value="" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" id="editPage">Edit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php } ?>