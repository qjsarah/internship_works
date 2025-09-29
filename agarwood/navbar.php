<style>
.desktop {
    display: block !important;
}
.mobile {
    display: none !important;
}
.search-wrapper {
  display: flex;
  align-items: center;
  background: white;
  border-radius: 25px;
  overflow: hidden;
}
.search-input {
  border: none;
  outline: none;

}
.search-btn {
  padding: 10px 10px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
@media (max-width: 1400px) {
  .search-input {
    width: 270px !important;
  }
  .login-btn {
    padding: 8px 20px !important;
    font-size: 1.2rem !important;
  }
}
@media (max-width: 1200px) {
  .search-input {
    width: 200px !important;
  }
  .nav-bg {
    padding-left: 50px !important; 
    padding-right: 50px !important;
  }
  .login-btn {
    padding: 8px 20px !important;
    font-size: 1.2rem !important;
  }
}
@media (max-width: 993px) {
    .mobile {
        display: block !important;
    }
    .absolute-style {
        position: static !important;
    }
    .desktop {
        display: none !important;
    }   
    .search-input {
        width: 700px !important;
    }
    .container-lg {
        --bs-gutter-x: 0;
    }
    .nav-section {
        padding-bottom: 0 !important;
    }
    .login-btn {
        padding: 8px 50px !important;
        font-size: 1.2rem !important;
    }
    .top-nav {
        display: block !important;
    }
    .top-nav div {
        display: flex !important;
        justify-content: center ;
        align-items: center !important;
    }
}
</style>
<section class="bg-warning text-primary position-relative pb-4 nav-section">
    <div class="container-lg d-flex justify-content-between align-items-center py-3 top-nav">
        <div>
            <img src=" images/nav-logo.png" alt="" class="" style="width: 150px; height: auto;">
        </div>
        <div class="d-flex gap-5 align-items-center">
            <div class="d-flex gap-3 align-items-center">
                <div class="bg-light p-2 rounded-pill justify-content-center align-items-center my-auto" style="box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2); width: 60px; height: 60px;">
                    <img src="images/con1.png" alt="">
                </div>
                <p class="fs-5 my-auto">Phone Number <br> <span class="fs-4">0912.345.6789</span></p>
            </div>
            <div class="d-flex gap-3 align-items-center me-5">
                <div class="bg-light p-2 rounded-pill justify-content-center align-items-center my-auto" style="box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2); width: 60px; height: 60px;">
                    <img src="images/ema1.png" alt="" class="mt-1">
                </div>
                <p class="fs-5 my-auto">Email Address <br> <span class="fs-4">sample@gmail.com</span></p>
            </div>
            <button class="btn btn-primary rounded-pill fw-bold fs-3 px-5 login-btn desktop">Log in</button>
        </div>
    </div>

    <div class="container-lg">
        <div class="position-absolute absolute-style" style="bottom: -20%;">
            <div class="bg-primary rounded-3 w-auto nav-bg" style="padding-left: 100px; padding-right: 100px;">
                <nav class="navbar navbar-expand-lg">
                    <!-- Search -->
                    <form class="d-flex me-3 my-auto" role="search">
                        <div class="input-group">
                            <div class="search-wrapper">
                                <input type="text" class="search-input form-control form-control-sm" placeholder="Search" style="width: 450px;">
                                <button class="search-btn btn btn-primary btn-sm cursor-pointer m-1" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>                
                    <!-- Navbar Links -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mb-2 mb-lg-0 fs-5 text-end">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Abstract</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Testimonials</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                        <li class="nav-item mobile"><a href="#" class="nav-link fw-bold">Log in</a></li>
                    </ul>
                </div>
                </nav>
            </div>
        </div>  
    </div>
</section>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
