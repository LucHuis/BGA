<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="/login">AVDL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/games">Games</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/players">players</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/battles">Battles</a>
            </li>



        </ul>

        <?php if(Auth::check()): ?>
            <?php if(Auth::user()->role === 'admin'): ?>
                <a href="/admin">
                    <button type="button" class="btn btn-outline-light mr-sm-2">admin panel</button>
                </a>
            <?php endif; ?>
        <?php endif; ?>

        <?php if(!Auth::check()): ?>
            <a href="<?php echo e(url('/login')); ?>">
                <button type="button" class="btn btn-outline-light mr-sm-2">Sign in</button>
            </a>
        <?php else: ?>
            <a href="/users/<?php echo e(Auth::user()->id); ?>">
                <button type="button" class="btn btn-outline-light mr-sm-2">My profile</button>
            </a>

            <a href="/logout">
                <button type="button" class="btn btn-outline-light mr-sm-2">Sign out</button>
            </a>
        <?php endif; ?>
    </div>
</nav>