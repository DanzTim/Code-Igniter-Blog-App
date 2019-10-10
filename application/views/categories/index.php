<a href="<?php echo site_url('/categories/create');?>" type="button" class="mb-3 btn btn-success btn-lg">Create</a>
<ul class="list-group">
<?php foreach($categories as $category) : ?>
    <li class="list-group-item"><a href="<?php echo site_url('/categories/posts/'.$category['id']);?>"><?= $category['name']?></a></li>
<?php endforeach ?>
</ul>