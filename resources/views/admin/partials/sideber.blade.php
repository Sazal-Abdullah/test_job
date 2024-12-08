
 <!-- Sidebar -->
 {{-- <div class="sidebar">
    <h3 class="text-center my-4">Admin</h3>
    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href=""><i class="fas fa-cogs"></i> Settings</a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div> --}}



<div class=" side-bar col-2 h-100 bg-1 wht text-center overflow-scroll nav-tabs" role="tablist" id="nav-tab"><h1>SAZAL ABDULLAH</h1>
    <div class="s-bar-close position-absolute d-block d-md-none"><i class="fas fa-arrow-left"></i></div>
    <h6 class="ms-2 mt-5 text-start">MENU</h6>
 <button class="w-100 rounded wht nav-link " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"></i>Dashboard</button>
 <button class="w-100 rounded wht nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"></i>E-commerce</bu<i class="far fa-chart-bar me-3"></itton>
 <button class="w-100 rounded wht nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Profile</button>
 <button href="{{route('products.create')}}" class="w-100 rounded wht"><i class="fas fa-funnel-dollar me-3"></i>product</button>

 <button class="w-100 rounded wht"><i class="fas fa-funnel-dollar me-3"></i>Marketing</button>
 <button class="w-100 rounded wht"><i class="fas fa-search-dollar me-3"></i>CRM</button>
 <button class="w-100 rounded wht"><i class="fas fa-comment-dollar me-3"></i>Stocks</button>
 <button class="w-100 rounded wht"><i class="fas fa-calendar me-3"></i>Calendar</button>
 <button class="w-100 rounded wht"><i class="fas fa-id-card me-3"></i>Profile</button>
 <button class="w-100 rounded wht"><i class="fas fa-check-square me-3"></i>Tasks</button>
 <button class="w-100 rounded wht"><i class="fas fa-list-alt me-3"></i>Forms</button>
 <button class="w-100 rounded wht"><i class="fas fa-table me-3"></i>Tables</button>
 <button class="w-100 rounded wht"><i class="fas fa-receipt me-3"></i>Pages</button>
 <h6 class="ms-2 mt-2 text-start">Support</h6>
 <button class="w-100 rounded wht"><i class="fas fa-inbox me-3"></i>Inbox</button>
 <button class="w-100 rounded wht"><i class="fas fa-scroll me-3"></i>Invoice</button>
 <button class="w-100 rounded wht"><i class="fas fa-border-none me-3"></i>Tables</button>
 <button class="w-100 rounded wht"><i class="fas fa-tablet me-3"></i>Pages</button>
</div>



