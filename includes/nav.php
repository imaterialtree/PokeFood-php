<nav class="navbar bg-body-tertiary col-2 align-items-start ">
    <div class="container flex-column">
        <a class="navbar-brand" href="#">MyFood</a>
            <ul class="navbar-nav flex-column ">
                <li class="nav-item"><a href="?secao=home" class="nav-link <?php if($_GET['secao']=='home') echo 'active'; ?>">Home</a></li>
                <li class="nav-item"><a href="?secao=cardapio" class="nav-link <?php if($_GET['secao']=='cardapio') echo 'active'; ?>">Cardapio</a></li>
                <li class="nav-item"><a href="?secao=restaurante" class="nav-link <?php if($_GET['secao']=='restaurante') echo 'active'; ?>">Restaurante</a></li>
                <li class="nav-item"><a href="?secao=contato" class="nav-link <?php if($_GET['secao']=='contato') echo 'active'; ?>">Contato</a></li>
                <li class="nav-item"><a href="?secao=a-login" class="nav-link <?php if($_GET['secao']=='a-login') echo 'active'; ?>">Login</a></li>
            </ul>
    </div>
</nav>