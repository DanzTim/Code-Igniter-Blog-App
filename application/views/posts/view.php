<small style="background: #f4f4f4; display: block; padding: 4px">Posted On: <?php echo $post['created_at']; ?></small><br>
<img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'] ?>" alt="Post Image" >
<p><?php echo $post['body']; ?></p>

<hr>
<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-success float-left mr-1">Edit</a>
<?php echo form_open('/posts/delete/'.$post['slug']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
