<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create');?>
  <div class="form-group">
    <label for="title">Title</label>
    <input name='title' type="title" class="form-control" id="title" placeholder="Title your post here">
  </div>
  <div class="form-group">
    <label for="editor">Text</label>
    <textarea id="editor" name='body' class="form-control" rows="4"></textarea>
  </div>
  <div class="form-group">
    <label for="category_id">Category</label>
    <select name="category_id" class="form-control" id="">
      <?php foreach($categories as $cat): ?>
        <option value="<?php echo $cat['id']?>"><?php echo $cat['name']?></option>
      <?php endforeach ?>
    </select>
  </div>
  <div class="form-group">
    <label for="userfile">Upload image</label>
    <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>