<h2></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('patterns/create') ?>

	<label for="title">Name</label>
	<input type="input" name="name" /><br />
        
	<label for="description">Description</label>
	<textarea name="description"></textarea><br />        

	<label for="problem">Problem</label>
	<textarea name="problem"></textarea><br />  
        
	<label for="solution">Solution</label>
	<textarea name="solution"></textarea><br />  
        
	<label for="consequences">Consequences</label>
	<textarea name="consequences"></textarea><br />          

	<input type="submit" name="submit" value="Add pattern" />

</form>

