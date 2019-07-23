<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="/~s1136509/P2_Laravel_Opdracht/loginIndex">AVDL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/~s1136509/P2_Laravel_Opdracht">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/~s1136509/P2_Laravel_Opdracht/games">Games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/~s1136509/P2_Laravel_Opdracht/games/create">Create-game</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/~s1136509/P2_Laravel_Opdracht/about">About</a>
            </li>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/~s1136509/P2_Laravel_Opdracht/battles">Battles</a>
            </li>



        </ul>

        @if(Auth::check())
            @if(Auth::user()->role === 'admin')
                <a href="admin">
                    <button type="button" class="btn btn-outline-light mr-sm-2">admin panel</button>
                </a>
            @endif
        @endif

        @if(!Auth::check())
            <a href="{{ url('/login') }}">
                <button type="button" class="btn btn-outline-light mr-sm-2">Sign in</button>
            </a>
        @else
            <a href="users/{{Auth::user()->id}}">
                <button type="button" class="btn btn-outline-light mr-sm-2">My profile</button>
            </a>

            <a href="logout">
                <button type="button" class="btn btn-outline-light mr-sm-2">Sign out</button>
            </a>
        @endif
    </div>
</nav>