<div class="container text-center">
    <?php if($this->Session->check('Auth.User.id')) :?>
        <h3>Welcome!</h3>
        <p class="intro">No projects avaible for this account.</p>

    <?php else: ?>
        <h2 class="title">rZ<span class="highlight">eronte</span></h2>
        <p class="intro">
            web developer and technological mercenary
            <br/><br/>
            only for private access <span class="oscuro">no register avaible</span></p>
        <div class="btns">
                <?php echo $this->Html->link('login', array('controller' => 'users','action' => 'login'), array('class' => 'btn btn-cta-primary')); ?>
        </div>
    <?php endif ?>
    <ul class="meta list-inline">
        <li><a href="http://www.getoutofhere.com/">if you have arrived by accident please go out of here >;)</a></li>
    </ul>
</div>
