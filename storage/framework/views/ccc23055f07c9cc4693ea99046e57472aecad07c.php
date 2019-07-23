<?php $__env->startSection('content'); ?>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1">
                <h1>Welcome</h1>
            </div>
            <div class="col-10 offset-1">
                <ul>
                    <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <?php echo e($player->id); ?>

                            <?php echo e($player->name); ?>



                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </div>
        </div>
    </div>
    </body>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <div class="fixed-bottom bg-light">
        <p >Keep the change</p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>