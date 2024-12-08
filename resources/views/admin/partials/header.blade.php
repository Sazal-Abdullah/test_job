{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </li>

        </ul>
    </div>
</nav> --}}


<div class="nbar w-100 d-flex align-items-center bg-1">
    <div class="nbar-l  w-25 h-75 d-flex align-items-center justify-content-around">
        <i class="fas fa-bars cancle-btn wht  text-center align-content-center"></i>
        <input type="text" class="form-control bg-transparent text-light h-100 border-0" placeholder="Search here something..." value="search here..">
    </div>
    <div class="nbar-r h-75 w-75 wht d-flex justify-content-end align-items-center gap-3 ">
        <i class="fas fa-adjust text-center theme align-content-center position-relative">
            <div class="noti h-25 w-25 bg-danger rounded-circle position-absolute translate-middle top-0 end-0"></div>
        </i>
        <i class="fas fa-bell  text-center align-content-center position-relative">
            <div class="noti h-25 w-25 bg-danger rounded-circle position-absolute translate-middle top-0 end-0"></div>
        </i>
        <i class="fas fa-comment-dots  text-center align-content-center"></i>
        <div class="profile mw-25 h-75 d-flex align-items-center">
            <div class="profile-namer d-none d-md-flex gap-2 me-2">
                <span class="d-block fs-6">SAZAL ABDULLAH <br> </span>
                <span class="text-secondary">WEB <br> DEVELOPER</span>
            </div>
            <div class="profile-pic rounded-circle p-0 me-2">
                 <img src="https://i.pinimg.com/736x/5c/91/7a/5c917a46cdce453fe8c3d11b0d5618db.jpg" alt="" class="h-100 w-100 img-fluid rounded-circle m-0 p-0">
            </div>
            <div class="dropdown">
                <button class="btn text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu bg-dark text-primary">
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Convienence</a></li>
                  <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Log-Out</a></li>
                </ul>
              </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-dark">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Log Out</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body bg-dark d-flex flex-column gap-3">
                 <input type="text" class="form-control bg-dark border text-light" value="SAZAL ABDULLAH@gmail.com">
                 <input type="password" class="form-control bg-dark text-light" value="123456543">
                 <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Remember Login Info
                  </label>
                </div>
              </div>
              <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
                <button type="button" class="btn btn-primary">Log-Out</button>
              </div>
            </div>
          </div>
        </div>
    </div>

</div>
