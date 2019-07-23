<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="login.style.css">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <!-- Default form login -->
                <form class="text-center border border-light p-5" action="/login" method="post">

                    <p class="h4 mb-4">Sign in</p>

                    <!-- Email -->

                    <div class="form-group ">

                        <label for="email">Email</label>

                        <input type="email" class="form-control" id="email" name="email" required>


                    </div>

                    <!-- Password -->
                    <div class="form-group">

                        <label for="password">Password</label>

                        <input type="password" class="form-control" id="password" name="password" required>


                    </div>


                    <div class="invalid-feedback">

                    </div>
                    <div>
                        <!-- Forgot password -->
                        <a href="/register">Registreren</a>
                        <div>
                            <!-- Forgot password -->


                            <!-- Sign in button -->
                            <button class="btn btn-primary btn-block my-4" type="submit">Login</button>
                        </div>
                    </div>
                </form>
                <!-- Default form login -->

            <div class="col-lg-3"></div>
        </div>
    </div>


    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>