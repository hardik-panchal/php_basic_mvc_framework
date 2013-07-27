<?php if (isset($_SESSION['user']['user_type']) && $_SESSION['user']['user_type'] == 'admin') { ?>
    <div class="row-fluid ">
        <div class="box span12">
    	<div class="box-header well" data-original-title >
    	    <h2><i class="icon-list-alt"></i> List of Import Contacts </h2>
    	</div>
    	<div class="box-content">

    	    <form action="importcontacts" enctype="multipart/form-data" method="POST">
			<input type="file" name="file_upload" /> <br/>
			<input type="submit" name="submit" value="Import" />
	    </form>
    	</div>
        </div>
    </div>
<?php } ?>