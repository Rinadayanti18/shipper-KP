


<nav class="navbar nav-informasi navbar-expand-sm justify-content-center container col-sm-6 mt-5" >
    <div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link  {{ $title === 'SK Pengiriman' ? 'active' : '' }}" href="/skpengiriman">S&K Pengiriman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{ $title === 'SK' ? 'active' : '' }}" href="/sk">S&K</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $title === 'Kebijakan Privasi' ? 'active' : '' }}" href="/kebijakanprivasi">Kebijakan Privasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $title === 'Kebijakan Cookies' ? 'active' : '' }}" href="/kebijakancookies">Kebijakan Cookies</a>
            </li>
        </ul>
    </div>
</nav>