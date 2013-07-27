<?php if (isset($_SESSION['user']['user_type']) && $_SESSION['user']['user_type'] == 'admin') { ?>
    <div class="row-fluid ">
        <div class="box span12">
    	<div class="box-header well" data-original-title >
    	    <h2><i class="icon-list-alt"></i> List of Contacts </h2>
    	</div>
    	<div class="box-content">

    	    <fieldset>
		    <?php if (!empty($contacts)): ?>  
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			    <thead>
				<tr>
				    <th>Email</th>
				    <th>First Name</th>
				    <th>Last Name</th>
				    <th>Skype ID</th>
				    <th>Country</th>
				    <th>Time To Call</th>
				    <th>Action</th> 
				</tr>
			    </thead>   
			    <tbody >

				<?php foreach ($contacts as $each_contact): ?>
	    			<tr id="contact_<?php print $each_contact['id'] ?>">
	    			    <td>
					    <?php print $each_contact['email']; ?>
	    			    </td>
	    			    <td>
					    <?php print $each_contact['first_name']; ?>
	    			    </td>
	    			    <td>
					    <?php print $each_contact['last_name']; ?>
	    			    </td>
				    <td>
					    <?php print $each_contact['skype_id']; ?>
	    			    </td>
	    			    <td>
					    <?php print $each_contact['country']; ?>
	    			    </td>
				    <td>
					    <?php print $each_contact['time_to_call']; ?>
	    			    </td>
	    			    <td>
					<i data-rel="tooltip" onclick="doDeleteContact('<?php print $each_contact['id'] ?>')" title="Click to Delete"  class="icon-trash pointer " style="margin-left:34px;"></i>
	    			    </td>
	    			</tr>
				<?php endforeach; ?>
			    <?php else: ?>
				<tr>
				    <td colspan="7">
					<?php $error = "No Contact exists!"; ?>
					<?php include "messages.php"; ?>
				    </td>
				</tr>

			    </tbody>
			</table>
		    <?php endif; ?> 
    	    </fieldset>
    	</div>
        </div>
    </div>
<?php } ?>