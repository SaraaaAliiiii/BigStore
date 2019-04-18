 

<?php $__env->startSection('content'); ?>
   
    <h1>Products</h1>
    <?php if(count($products)>0): ?>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class ="well">
                <h3><a href= "/products/<?php echo e($product->id); ?>"><?php echo e($product->name); ?></a></h3>
                <small>Added on <?php echo e($product->created_at); ?></small>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <p>No products found.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>