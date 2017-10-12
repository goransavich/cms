

    <nav class="nav">
          <a class="nav-link <?php if(Request::url()== url('')): ?> active <?php endif; ?>" href="/">Home</a>
          
          <?php if(Auth::check()): ?>
            <a class="nav-link <?php if(Request::url()== url('posts')): ?> active <?php endif; ?>" href="/posts">Publish a post</a>
            <a class="nav-link ml-auto" title="Logout" href="/logout"><?php echo e(Auth::user()->name); ?></a>
          <?php else: ?>
            <a class="nav-link <?php if(Request::url()== url('login')): ?> active <?php endif; ?> ml-auto" href="/login">Log in</a>
          <?php endif; ?>
         
        </nav>
