<div class="content-main-div">
<div class="fixed-div-main">
<div class="content-div">


<div id="stylized" class="myform"> 
<h1>Root Cause Category</h1>
<form action="<?php site_url('ims_admin/env_rootcause');?>" method="post">
<label>Root Cause</label><input type="text" name="root_cause" value=""/><?php echo form_error('root_cause');?>
<label>Incident Type</label><select name="incident_type">
<option value="">Select</option>
<?php 
$incident_types = get_incident_types();
if(isset($incident_types))
{
	foreach($incident_types as $type)
	{
		echo '<option value="'.$type->id.'">'.$type->incident_type.'</option>';
	}
}
?>
</select><?php echo form_error('incident_type');?>
<label>Description/Comments</label><textarea name="comment"></textarea><?php echo form_error('comment');?>
<label>Created By</label><input type="text" name="created_by" value=""/><?php echo form_error('created_by');?>
<input type="submit" value="Submit" />
</form>
</div>



