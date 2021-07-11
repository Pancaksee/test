<?=$_SERVER?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="/assets/img/logo.svg" width="40px">SugarcaneMC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?=($_SERVER['DOCUMENT_URI'] == "/")?"active":""?>" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=($_SERVER['DOCUMENT_URI'] == "/team")?"active":""?>" href="/team">Team</a>
                </li>
            </ul>
            <span style="font-size: 25px; margin-right: 10px;">
                <a href="/github"><i class="fab fa-github"></i></a>
                <a href="/discord"><i class="fab fa-discord"></i></a>
                <a href="https://ci.sugarcanemc.org"><i class="fas fa-server"></i></a>
            </span>
        </div>
    </div>
</nav>