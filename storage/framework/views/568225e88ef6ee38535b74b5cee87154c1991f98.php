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
                    <div>
                        <label for="description">Game description</label>
                        <input type="text"  name="description" placeholder="Enter Description">
                    </div>
                    <div>
                        <button type="submit">Create Game</button>
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