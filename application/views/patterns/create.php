<p><a href="../patterns">Go back to patterns</a></p>
<h2>Add new pattern</h2>

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

<label for="description">Parent scope</label>
<select name="parentscope">
    <?php foreach ($scopes as $scope_item): ?>
        <option value="<?php echo $scope_item['id']; ?>"><?php echo $scope_item['name']; ?></option>
    <?php endforeach ?>    
</select>   </br>
<label for="description">Parent purpose</label>
<select name="parentpurpose">
    <?php foreach ($purposes as $purpose_item): ?>
        <option value="<?php echo $purpose_item['id']; ?>"><?php echo $purpose_item['name']; ?></option>
    <?php endforeach ?>    
</select>          

<p><input type="submit" name="submit" value="Add pattern" /></p>

</form>

