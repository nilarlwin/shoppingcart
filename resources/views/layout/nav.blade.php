<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/"><i class="fas fa-home"></i> ShopKeeper</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    <!--
      <li class="active"><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
      !-->
    </ul>
    <!--
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>!-->
    <ul class="nav navbar-nav navbar-right">
      <!-- 
       <li><a href="#"><i class="fas fa-align-left"></i> Category</a></li>
      <li><a href="#"><i class="fab fa-canadian-maple-leaf"></i> Brand</a></li>
      !-->
      <li><a href="{{ route('cart.index') }}"><i class="fas fa-cart-arrow-down"></i> Cart
      <span class="badge badge-pill badge-light">
      @if(session()->has('count'))
      {{ session()->get('count') }}
      @else 0
      @endif
      </span>
      </a></li>
      <!--
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-users"></i> Products <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Create</a></li>
          <li><a href="#">View All Products</a></li>
          <li><a href="#">Edit</a></li>
        </ul>
      </li>
      !-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-users"></i> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/login">Login</a></li>
          <!--<li><a href="#">Register</a></li>
          <li class="divider"></li>
          <li><a href="#">Logout</a></li>!-->
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>