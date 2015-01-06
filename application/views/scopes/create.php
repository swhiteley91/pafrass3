<p><a href="../scopes">Go back to scopes</a></p>
<h2>Add new scope</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('scopes/create') ?>

<label for="title">Name</label>
<input type="input" name="name" /><br />

<label for="description">Description</label>
<textarea name="description"></textarea><br />   

<label for="description">Parent</label>
<select name="parent">
    <option value="" selected="selected">no parent</option>
    <?php foreach ($scopes as $scope_item): ?>
        <option value="<?php echo $scope_item['id'];?>"><?php echo $scope_item['name'];?></option>
    <?php endforeach ?>    
</select>

<p><input type="submit" name="submit" value="Add scope" /></p>

</form>

