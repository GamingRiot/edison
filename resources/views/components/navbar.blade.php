<nav class="navbar">
    <div class="content">
        <ul class="menu-list">
            <div class="icon cancel-btn">
                <i class="fas fa-times"></i>
            </div>

            <li><a href="/about">MISSION</a></li>
            <li><a href="ed_2.html">LINE UP</a></li>
            <!-- to stop the same effect on edison like others inline css is used,cause
                                                                                                                                                                                                                                                                                                            of highest priority -->
            <li class="animate__animated animate__fadeIn"><a style=" font-size: 40px; font-weight:800; top:1px"
                    href="ed_2.html">EDISON</a></li>
            <li><a href="tyres,nit (2).html">SERVICES</a></li>

            @auth
                <li><a href="/signout">Log Out</a></li>
            @else
                <li><a href="/login">LOG IN</a></li>
            @endauth

        </ul>
        <div class="icon menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>
