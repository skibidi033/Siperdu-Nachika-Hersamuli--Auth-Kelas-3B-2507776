  <!-- ==========================================
         START: Sidebar Component
         Highly polished, dark-green sticky navigation
         ========================================== -->
  <div class="sidebar-wrapper" id="sidebar">
    <!-- Brand Logo / Identity -->
    <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
      <i class="bi bi-asterisk"></i>
      <span>Admin SiPerdu</span>
    </a>

    <!-- Navigation Menu -->
    <div class="flex-grow-1 overflow-y-auto">
      <!-- Group: Menu -->
      <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">Menu</div>
        <!-- dashboard -->
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item">
            <a href="{{ route('admin.dashboard') }}" class="sidebar-menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" id="menu-overview" title="Overview">
              <i class="bi bi-grid-fill"></i>
              <span>Dashboard</span>
            </a>
          </li>
        </ul>

        <!-- data buku -->
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item">
            <a href="{{ route('admin.buku.index') }}"
              class="sidebar-menu-link {{ request()->routeIs('admin.buku.*') ? 'active' : '' }}"
              id="menu-buku" title="Data Buku">
                <i class="bi bi-book"></i>
                <span>Data Buku</span>
            </a>
          </li>
        </ul>

      </div>
    </div>

    <!-- Sidebar Profile Card (Dynamic Footer) -->
  <div class="sidebar-profile-info">
  <div class="sidebar-profile-name">{{ Auth::user()->name }}</div>
  <div class="sidebar-profile-email">{{ Auth::user()->email }}</div>
</div>
  <!-- ==========================================
         END: Sidebar Component
         ========================================== -->
