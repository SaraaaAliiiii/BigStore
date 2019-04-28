<?php $__env->startSection('content'); ?>
    <h1>Edit Product</h1>
    <?php echo Form::open(['action'=>['ProductsController@update',$product->id],'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('name','Name')); ?>

            <?php echo e(Form::text('name',$product->name,['class' => 'form-control','placeholder'=> 'item name'])); ?>

        </div>
        <div class="form-group">
                <?php echo e(Form::label('price','Price')); ?>

                <?php echo e(Form::text('price',$product->price,['class' => 'form-control','placeholder'=> 'item price'])); ?>

        </div>
        <div class = 'form-group'>
                <?php echo e(Form::label('description','Description')); ?>

                <?php echo e(Form::textarea('description',$product->description,['id'=> 'article-ckeditor','class' => 'form-control','placeholder'=> 'item description'])); ?>

        </div>
        <?php echo e(Form::hidden('_method','PUT')); ?>

        <?php echo e(Form::submit('Update', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>    
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>