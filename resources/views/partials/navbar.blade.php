<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Shin Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $title === "home" ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "about" ? 'active' : '' }} " aria-current="page" href="/about">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "posts" ? 'active' : '' }} " aria-current="page" href="/post">Post</a>
                </li>
            </ul>

        </div>
    </div>
</nav>