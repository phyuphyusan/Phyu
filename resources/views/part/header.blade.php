  
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <img src="{{asset('template/images/3.jpg')}}" width="100">
          <a class="navbar-brand absolute" href="index.html">School Finder system</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="{{asset('course')}}" aria-haspopup="true" aria-expanded="false">Courses</a>
                
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="#">School</a>
                  <a class="dropdown-item" href="#">Languages Center</a>
                  <a class="dropdown-item" href="#">Training Center</a>
                
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="login.html">Login</a> / <a href="register.html">Register</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>
    </header>