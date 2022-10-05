<h1>create new product</h1><?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
    <?php foreach($errors as $error): ?>
        <div><?php echo $error?></div>
        <?php endforeach;?>
    </div>
    <?php endif; ?>
    <form action="form.php" method="post" enctype="multipart/form-data"><?php if ($product['image']): ?>/<img src="<?php echo $product['image'] ?>" class="update-image">
    <?php endif; ?>
<div class="mb-3">
    <label>Product Image</label>
    <input type="file" name="image" class="form-control">
</div>
<div class="mb-3">
    <label>Product Title</label>
    <br>
    <input type="text" name="title" value="<?php echo $product ['title']?>">
</div>
<div class="mb-3">
    <label>Product Description</label>
    <textarea class="form-control" name="description"><?php echo $product['description']?></textarea>
</div>
<div class="mb-3">
    <label>Product Price</label>
    <input type="number" step="0.01"  name="price" value="<?php echo $product ['price']?>">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>