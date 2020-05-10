    @php
        $avatar_background = ["bg-pink", "bg-blue", "bg-green", "bg-red"];
        $random_background = $avatar_background[rand(0, count($avatar_background) - 1)];
    @endphp
    
    <aside class="sidebar">
        <div class="sidebar-header">
            <h4 class="sidebar-header-text">Haminsiki</h4>
        </div>
        <div class="sidebar-body">
            <div class="user-profile">
                <div class="user-avatar {{ $random_background }}">
                    <h4 class="user-avatar-letter">{{ substr(explode(" ", $user->nama)[count(explode(" ", $user->nama)) - 1], 0, 1) }}</h4>
                </div>
                <div class="user-identity">
                    <h4 class="username">{{ explode(" ", $user->nama)[count(explode(" ", $user->nama)) - 1] }}</h4>
                    <h5 class="user-role">
                        <span>
                            @if ($user->user_role == 1)
                                @lang('Dashboard.menu.admsimp')
                            @elseif ($user->user_role == 2)
                                @lang('Dashboard.menu.admpinj')
                            @elseif ($user->user_role == 3)
                                @lang('Dashboard.menu.adm')
                            @endif
                        </span>
                    </h5>
                </div>
            </div>
            <div class="sidebar-nav">
                <div class="nav-header">
                    <h4 class="nav-header-text">@lang("Dashboard.menu.nav")</h4>
                </div>
                <div class="nav-body">
                    <ul>
                        <li><a href="/" class="nav-list-item {{ Request::is('/') ? 'active' : '' }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                        <li class="nav-list-item dropdown {{ Request::is('master/*') ? 'active' : '' }}">
                            <i class="fa fa-tasks"></i>Master Data
                            <i class="fa fa-angle-left right"></i>
                            <ul class="dropdown-item">
                                <li>
                                    <a href="/master/user" class="dropdown-list-item {{ Request::is('master/user', 'master/user/*') ? 'active' : '' }}">
                                        <i class="fa fa-user-secret"></i>User
                                    </a>
                                </li>
                                <li>
                                    <a href="/master/anggota" class="dropdown-list-item {{ Request::is('master/anggota', 'master/anggota/*') ? 'active' : '' }}">
                                        <i class="fa fa-users"></i>Anggota
                                    </a>
                                </li>
                                <li>
                                    <a href="/master/bunga-simpanan" class="dropdown-list-item {{ Request::is('master/bunga-simpanan', 'master/bunga-simpanan/*') ? 'active' : '' }}">
                                        <i class="fa fa-percent"></i>Bunga Simpanan
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-list-item dropdown {{ Request::is('transaksi/*') ? 'active' : '' }}">
                            <i class="fa fa-refresh"></i>Transaksi
                            <i class="fa fa-angle-left right"></i>
                            <ul class="dropdown-item">
                                <li>
                                    <a href="/transaksi/simpanan" class="dropdown-list-item {{ Request::is('transaksi/simpanan', 'transaksi/simpanan/*') ? 'active' : '' }}">
                                        <i class="fa fa-credit-card"></i>Simpanan
                                    </a>
                                </li>
                                <li>
                                    <a href="/transaksi/proses-bunga-simpanan" class="dropdown-list-item {{ Request::is('transaksi/proses-bunga-simpanan', 'transaksi/proses-bunga-simpanan/*') ? 'active' : '' }}">
                                        <i class="fa fa-hourglass-half"></i>Proses Bunga S.
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-list-item dropdown {{ Request::is('report/*') ? 'active' : '' }}">
                            <i class="fa fa-list-alt"></i>Report
                            <i class="fa fa-angle-left right"></i>
                            <ul class="dropdown-item">
                                <li>
                                    <a href="/report/nasabah" class="dropdown-list-item {{ Request::is('report/nasabah', 'report/nasabah/*') ? 'active' : '' }}">
                                        <i class="fa fa-file-text"></i>Report Nasabah
                                    </a>
                                </li>
                                <li>
                                    <a href="/report/harian" class="dropdown-list-item {{ Request::is('report/harian', 'report/harian/*') ? 'active' : '' }}">
                                        <i class="fa fa-file-text"></i>Report Harian
                                    </a>
                                </li>
                                <li>
                                    <a href="/report/mingguan" class="dropdown-list-item {{ Request::is('report/mingguan', 'report/mingguan/*') ? 'active' : '' }}">
                                        <i class="fa fa-file-text"></i>Report Mingguan
                                    </a>
                                </li>
                                <li>
                                    <a href="/report/bulanan" class="dropdown-list-item {{ Request::is('report/bulanan', 'report/bulanan/*') ? 'active' : '' }}">
                                        <i class="fa fa-file-text"></i>Report Bulanan
                                    </a>
                                </li>
                                <li>
                                    <a href="/report/tahunan" class="dropdown-list-item {{ Request::is('report/tahunan', 'report/tahunan/*') ? 'active' : '' }}">
                                        <i class="fa fa-file-text"></i>Report Tahunan
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
<<<<<<< Updated upstream
                                <div class="nav-header">
=======
                <div class="nav-header">
>>>>>>> Stashed changes
                    <h4 class="nav-header-text">@lang("Dashboard.menu.set")</h4>
                </div>
                <div class="nav-body">
                    <ul>
<<<<<<< Updated upstream
                            <li class="nav-list-item dropdown {{ Request::is('master/*') ? 'active' : '' }}">
=======
                            <li class="nav-list-item dropdown {{ Request::is('/*') ? 'active' : '' }}">
>>>>>>> Stashed changes
                                <i class="fa fa-tasks"></i>@lang("Dashboard.menu.lang")
                                <i class="fa fa-angle-left right"></i>
                                <ul class="dropdown-item">
                                    <li>
<<<<<<< Updated upstream
                                        <a href="{{ url('locale/id') }}" class="dropdown-list-item">
=======
                                        <a href="{{ url('locale/id') }}" class="dropdown-list-item {{ Request::is('/*') ? 'active' : ''}}" >
>>>>>>> Stashed changes
                                            <i class="fa fa-user-secret"></i>Indonesia - ID
                                        </a>
                                    </li>
                                    <li>
<<<<<<< Updated upstream
                                        <a href="{{ url('locale/en') }}" class="dropdown-list-item">
=======
                                        <a href="{{ url('locale/en') }}" class="dropdown-list-item {{ Request::is('/*') ? 'active' : ''}}">
>>>>>>> Stashed changes
                                            <i class="fa fa-users"></i>English - EN
                                        </a>
                                    </li>
                                    <li>
<<<<<<< Updated upstream
                                        <a href="{{ url('locale/gr') }}" class="dropdown-list-item {{ Request::is('master/bunga-simpanan', 'master/bunga-simpanan/*') ? 'active' : '' }}">
=======
                                        <a href="{{ url('locale/gr') }}" class="dropdown-list-item {{ Request::is('/*') ? 'active' : '' }}">
>>>>>>> Stashed changes
                                            <i class="fa fa-percent"></i>German - GR
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
