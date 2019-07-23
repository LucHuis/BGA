<?php $__env->startSection('content'); ?>
    <br>
    <div class="row">
        <div class="col-sm-3 offset-1">
            <ul class="list-group" style=" font-weight: bold">
                <li class="list-group-item active">PROFILE</li>
                <li class="list-group-item" style="text-align: center"><i class="fas fa-user"
                                                                          style="font-size: 250px"></i></li>
                <li class="list-group-item">Name: <?php echo e($user->name); ?></li>
                <li class="list-group-item">personal code:</li>
                <li class="list-group-item">Current score: <?php echo e($user->overwinningen); ?></li>

                <li class="list-group-item">Game Status: <?php echo e($user->game_status); ?></li>
                <?php if(Auth::check()): ?>
                    <?php if(Auth::user()->id == $user->id): ?>
                        <li class="list-group-item">
                            <a href="/users/<?php echo e($user->id); ?>/edit">
                                <button type="button" class="btn btn-primary btn-block">edit profile</button>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

            </ul>
        </div>
        <div class="col-sm-7">
            <div class="card">
                <div class="card-header">
                    Stats:
                </div>
                <div class="card-body">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
                    <div class="container">
                        <canvas id="myChart" width="200" height="50"></canvas>
                    </div>
                    <script>

                        var ctx = document.getElementById("myChart").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ["Played", " Won", " Lost"],
                                datasets: [{
                                    label: [' Games Played', ' Won', ' Lost'],
                                    data: [12, 23, 16],
                                    backgroundColor: [
                                        'rgba(20, 188, 255, 0.2)',
                                        'rgb(66, 244, 116 ,0.4)',
                                        'rgba(255, 48, 65,0.2)'
                                    ],
                                    borderColor: [
                                        'rgb(20, 188, 255)',
                                        'rgb(0, 198, 55)',
                                        'rgb(255, 48, 65)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>


        <div id='app'>
            <test></test>
        </div>
        <script src="/js/app.js"></script>












<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>