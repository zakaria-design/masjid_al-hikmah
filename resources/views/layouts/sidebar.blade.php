
  

    <div id="sidebar">
<div class="d-flex align-items-center mb-4">
    <img src="{{ asset('masjid3.jpg') }}" 
        class="rounded-circle img-fluid" 
        style="width: 40px; height: 40px; object-fit: cover;" 
        alt="hppm">

    <h5 class="ml-2 hide-when-collapse" style="margin-top: 7px;">Al-hikmah</h5>
</div>
        <ul class="nav flex-column">

            <li class="nav-item">
                <a  
                href="{{ route('admin.dashboard.index') }}"
                class="nav-link text-white d-flex align-items-center menu-link 
                {{ request()->routeIs('admin.dashboard.*') ? 'active' : '' }}">
                    <i class="fas fa-home mr-2"></i>
                    <span class="hide-when-collapse" style="opacity: 0.8;">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a 
                href="{{ route('admin.keuangan.index') }}"
                class="nav-link text-white d-flex align-items-center menu-link 
                {{ request()->routeIs('admin.keuangan.*') ? 'active' : '' }}">
                    <i class="fas fa-arrow-circle-left mr-2"></i> 
                    <span class="hide-when-collapse" style="opacity: 0.8;">Input Pemasukan</span>
                </a>
            </li>

            <li class="nav-item">
                <a 
                href="{{ route('admin.pengeluaran.index') }}"
                class="nav-link text-white d-flex align-items-center menu-link 
                {{ request()->routeIs('admin.pengeluaran.*') ? 'active' : '' }}">
                    <i class="fas fa-arrow-circle-right mr-2"></i> 
                    <span class="hide-when-collapse" style="opacity: 0.8;">Input Pengeluaran</span>
                </a>
            </li>

            
        </ul>
    </div>

