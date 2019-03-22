<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">CMS-Dashboard</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

           <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            Settings<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/settings">
                                    <i class="fas fa-cog"></i> Show Settings Page
                                </a>
                            </li>
                 
                        </ul>
                    </li>

                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            News<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="/news/create">
                                    <i class="fas fa-plus"></i> Add News
                                </a>
                            </li>
                            <li>
                                <a href="/news">
                                    <i class="fas fa-cog"></i> Show All News
                                </a>
                            </li>

                        </ul>
                    </li>

                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            Categories<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="/category/create">
                                    <i class="fas fa-plus"></i> Add Category
                                </a>
                            </li>
                            <li>
                                <a href="/category">
                                    <i class="fas fa-cog"></i> Show All Category
                                </a>
                            </li>

                        </ul>
                    </li>
                
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                           Welcome {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                              <li>
                                <a href="/">
                                    <i class="fas fa-plus"></i> Account
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('password.change') }}">
                                    <i class="fas fa-cog"></i> Change Password
                                </a>
                            </li>
                           
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
                <div class="col-md-4">
                    <form action="/search" method="get">
                        
                        <div class="form-group">
                            <input type="search" placeholder="what is in your mind ?.." name="search" class="form-control">
                            <span class="form-group-btn">
                                <button type="submit" class="btn btn-success"> Search</button>
                            </span>
                        </div>
                    </form>
                </div>

            
        </div><!-- /.navbar-collapse -->
        </div>
</nav>