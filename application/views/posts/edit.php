<?php echo validation_errors(); ?>
<?php echo form_open('posts/update')?>
  <input type="hidden" name="id" value="<?php echo implode(" ", $post);?>">
  <div class="form-group">
    <label for="title">Title</label>
    <input name='title' type="title" class="form-control" id="title" placeholder="Title your post here" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label for="category_id">Category</label>
    <select name="category_id" class="form-control" id="category_id">
      <?php foreach($categories as $cat): ?>
        <option value="<?php echo $cat['id']?>"><?php echo $cat['name']?></option>
      <?php endforeach ?>
    </select>
  </div>
  <div class="form-group">
    <label for="editor">Text</label>
    <textarea name='body' class="form-control" id="editor" rows="4"><?php echo $post['body']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>