<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1>Edit game</h1>
                    <form method="POST" action="/games/<?php echo e($game->id); ?>">
                     <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div>
                            <label for="name">Game name</label>
                            <input type="text" name="name" placeholder="Enter game name">
                        </div>
                        <div>
                            <label for="name">Game description</label>
                            <input type="text"  name="description" placeholder="Enter Description">
                        </div>
                        <div>
                        <button type="submit">Create Game</button>
                        </div>
                    </form>
            </div>
        </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>