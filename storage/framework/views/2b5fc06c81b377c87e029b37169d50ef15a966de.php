<?php $__env->startSection('content'); ?>
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Game List</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Game</th>
                            <th scope="col">Description</th>
                            <th scope="col">Max # of players</th>

                        </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($game->name); ?></th>
                                <td><?php echo e($game->description); ?></td>
                                <td><?php echo e($game->maxPlayers); ?></td>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
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