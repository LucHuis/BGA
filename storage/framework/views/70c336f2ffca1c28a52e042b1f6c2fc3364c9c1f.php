<?php $__env->startSection('content'); ?>
    <div class="content">


        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h1>Add Game</h1>
                    <form method="POST" action="/games">
                        <?php echo csrf_field(); ?>

                        <div>
                            <label for="name">Game name</label>
                            <input type="text" required name="name" placeholder="Enter gamename">
                        </div>
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action active">
                                Select a game!
                            </a>

                            <?php $__currentLoopData = $battles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $battle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="/battle/battle" class="list-group-item list-group-item-action"><?php echo e($battle->name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>



                        <div class="alert-danger">
                            <ul class="list-group">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item-danger"><?php echo e($errors); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>