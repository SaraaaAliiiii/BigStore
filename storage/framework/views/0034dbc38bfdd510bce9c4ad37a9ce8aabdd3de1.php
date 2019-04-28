<?php $__env->startSection('content'); ?>
        <a href="/products" class="btn btn-default">Go Back</a> 
         <h1> <?php echo e($product->name); ?> </h1>
        <small>Added on <?php echo e($product->created_at); ?></small>
        <div>
                <?php echo $product->description; ?>

        </div>
        <hr>
        <a href="/products/<?php echo e($product->id); ?>/edit" class="btn btn-default">Edit product </a>
        <?php echo Form::open(['action'=> ['ProductsController@destroy',$product->id], 'method'=> 'POST', 'class' => 'pull-right']); ?>

                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                <?php echo e(Form::submit('Delete', ['class'=>'btn btn-danger'])); ?>

        <?php echo Form::close(); ?>



        <?php $__env->stopSection(); ?>    
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>