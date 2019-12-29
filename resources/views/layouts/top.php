<div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index.html"><!-- <img src="/resources/assets/panel/images/logo.png" alt="" /> --><span>Webstrot Admin</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="pull-right p-r-15">
            <ul>
                <li class="header-icon dib"> <span class="user-avatar"><?= Sentinel::getUser()->first_name; ?> <i class="ti-angle-down f-s-10"></i></span>
                    <div class="drop-down dropdown-profile">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Обновить</span>
                            <p class="trial-day">Бесплатный тариф</p>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="#"><i class="ti-user"></i> <span>Профиль</span></a></li>
                                <li><a href="#"><i class="ti-wallet"></i> <span>Мой баланс</span></a></li>
                                <li><a href="#"><i class="ti-write"></i> <span>Тикеты</span></a></li>
                                <li><a href="logout"><i class="ti-power-off"></i> <span>Выйти</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>