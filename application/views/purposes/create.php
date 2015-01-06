<p><a href="../purposes">Go back to purposes</a></p>
<h2>Add new purpose</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('purposes/create') ?>

<label for="title">Name</label>
<input type="input" name="name" /><br />

<label for="description">Description</label>
<textarea name="description"></textarea><br />  

<label for="description">Parent</label>
<select name="parent">
    <option value="" selected="selected">no parent</option>
    <?php foreach ($purposes as $purpose_item): ?>
        <option value="<?php echo $purpose_item['id']; ?>"><?php echo $purpose_item['name']; ?></option>
    <?php endforeach ?>    
</select>        

<p><input type="submit" name="submit" value="Add purpose" /></p>

</form>

