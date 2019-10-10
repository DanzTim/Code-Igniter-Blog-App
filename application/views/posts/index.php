<a href="<?php echo site_url('/posts/create');?>" type="button" class="mb-3 btn btn-success btn-lg">Compose</a>
<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <div class="row">
        <div class="col-md-3">
            <img class="thumb-post" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'] ?>" alt="Post Image" >
        </div>
        <div class="col-md-9">
            <small>Posted on: <?php echo $post['created_at']; ?></small><br>
            <strong>Category: <?php echo $post['name']; ?></strong><br>
            <?php echo word_limiter($post['body'], 60) ?>
            <p><a href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
        </div>
    </div>
<?php endforeach ?>