

    <nav class="nav">
          <a class="nav-link @if(Request::url()== url('')) active @endif" href="/">Home</a>
          
          @if(Auth::check())
            <a class="nav-link @if(Request::url()== url('posts')) active @endif" href="/posts">Publish a post</a>
            <a class="nav-link ml-auto" title="Logout" href="/logout">{{Auth::user()->name}}</a>
          @else
            <a class="nav-link @if(Request::url()== url('login')) active @endif ml-auto" href="/login">Log in</a>
          @endif
         
        </nav>
