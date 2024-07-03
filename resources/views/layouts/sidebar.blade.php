<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Metode WP</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  
  <!-- Nav Item - Kriteria -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('kriterias.index') }}">
      <i class="fas fa-fw fa-cog"></i>
      <span>Kriteria</span>
    </a>
  </li>

  <!-- Nav Item - Alternatif -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('alternatifs.index') }}">
      <i class="fas fa-fw fa-cogs"></i>
      <span>Alternatif</span>
    </a>
  </li>

  <!-- Nav Item - Perhitungan -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('perhitungan') }}">
      <i class="fas fa-fw fa-calculator"></i>
      <span>Perhitungan</span>
    </a>
  </li>
  
  <!-- Nav Item - Vektor S -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('vektor') }}">
      <i class="fas fa-fw fa-ruler-combined"></i>
      <span>Vektor S</span>
    </a>
  </li>
  
  <!-- Nav Item - Perangkingan -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('perangkingan') }}">
      <i class="fas fa-fw fa-trophy"></i>
      <span>Perangkingan</span>
    </a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
</ul>
