<nav id="main-nav" class="main-nav navbar-right" role="navigation">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button><!--//nav-toggle-->
    </div><!--//navbar-header-->
    <div class="navbar-collapse collapse" id="navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active nav-item sr-only"><a class="scrollto" href="#promo">home</a></li>
            <li class="nav-item">
                <?php echo $this->Html->link('opensource', '/pages/opensource'); ?>
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link('technologies', '/pages/technologies'); ?>
            </li>
            <?php if($this->Session->check('Auth.User.id')) :?>
                <li class="nav-item last">
                    <?php echo $this->Html->link('logout', '/users/logout'); ?>
                </li>
            <?php else: ?>
                <li class="nav-item last">
                    <?php echo $this->Html->link('login', '/users/login'); ?>
                </li>
            <?php endif ?>
            ?>
        </ul><!--//nav-->
    </div><!--//navabr-collapse-->
</nav><!--//main-nav-->
