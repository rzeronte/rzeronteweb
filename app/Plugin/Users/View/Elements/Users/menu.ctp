<nav id="main-nav" class="main-nav navbar-right" role="navigation">

    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button><!--//nav-toggle-->
    </div>

    <div class="navbar-collapse collapse" id="navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active nav-item sr-only"><a class="scrollto" href="#promo">home</a></li>
            <li class="nav-item">
                <?php echo $this->Html->link('my account', '/users/edit'); ?>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link('my data', '#'); ?>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link('change password', '/users/change_password'); ?>
            </li>
            <li class="nav-item last">
                <?php echo $this->Html->link('logout', '/users/logout'); ?>
            </li>

        </ul>
    </div>

</nav>
