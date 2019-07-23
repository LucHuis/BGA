<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Game list</div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Game name</th>
                            <th scope="col">Description</th>
                            <th scope="col"># of players</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $battles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $battle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($battle->name); ?></th>
                                <td><?php echo e($battle->description); ?></td>
                                <td><?php echo e($battle->maxPlayers); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <a href="/battle/create" class="btn btn-primary">Maak een ronde!</a>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>