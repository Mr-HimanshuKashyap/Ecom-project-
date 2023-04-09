

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Add New Product')); ?></div>

                <!-- <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    Welcome to the User Dashboard.
                    <?php echo e(__('You are logged in!')); ?>


                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="container">
<form method="post" action="/admin/home" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="productname" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" id="price" name="price">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input type="text" class="form-control" id="category" name="category">
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Image Upload</label>
    <input type="file" class="form-control" id="imageupload" name="imageupload" multiple="">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ecom\resources\views//createproduct.blade.php ENDPATH**/ ?>