<?php $__env->startSection('content'); ?>
    <div class="title m-b-md">
        About
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <div class="fixed-bottom bg-light">
        <p >Keep the change</p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>