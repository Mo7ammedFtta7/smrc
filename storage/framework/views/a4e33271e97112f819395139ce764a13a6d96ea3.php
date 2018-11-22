    <header class="main-header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" onclick="toggleNav()" id="nav_btn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(trans_url('/')); ?>"><img src="<?php echo e(theme_asset('img/logo/logo.svg')); ?>" alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php echo Menu::menu('main'); ?>

                </ul>
                <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                    <li><a href="https://twitter.com/lavalitecms" target="_blank" class="social-icons"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/lavalite" target="_blank" class="social-icons"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://github.com/lavalite/cms" target="_blank" class="social-icons"><i class="fab fa-github"></i></a></li>
            <?php if(!auth('client.web')->check()): ?>
                    <li><a href="#" data-toggle="modal" data-target="#loginModal" class="btn">Login</a></li>
            <?php else: ?>
                    <li><a href="<?php echo e(trans_url('client')); ?>" class="btn"><?php echo e(users('name', 'client.web')); ?></a></li>
                    <li><a href="<?php echo e(trans_url('client/logout')); ?>" class="btn">Logout</a></li>
            <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php if(!auth('client.web')->check()): ?>
    <a href="<?php echo e(trans_url('client/login')); ?>" class="login_btn btn hidden-md hidden-lg">Login</a>
    <?php else: ?>
    <a href="<?php echo e(trans_url('client')); ?>" class="login_btn btn hidden-md hidden-lg"><?php echo e(users('name', 'client.web')); ?></a>
    <?php endif; ?>
    <a href="https://github.com/lavalite/cms" target="_blank" class="github_btn hidden-md hidden-lg"><i class="fab fa-github"></i></a>
</header>
