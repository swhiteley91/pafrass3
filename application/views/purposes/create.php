<h2></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('purposes/create') ?>

	<label for="title">Name</label>
	<input type="input" name="name" /><br />
        
	<label for="description">Description</label>
	<textarea name="description"></textarea><br />                 

	<input type="submit" name="submit" value="Add purpose" />

</form>

