<div class="grid-12">
<h4>Create a news item</h4>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	<label for="title">Title&nbsp;</label> 
	<input type="input" name="title" /><br />

	<label for="text">Text&nbsp;</label>
	<textarea name="text" rows="20" cols="70"></textarea><br /><br />
	
	&nbsp;<input type="submit" name="submit" value="Create news item" /> 

</form>
</div>

