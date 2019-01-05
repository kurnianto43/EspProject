 <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><h3>Esp Banjarbaru</h3></a>
                <a class="navbar-brand hidden" href="./"><h3>E</h3></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('beranda') }}"> <i class="menu-icon fa fa-dashboard"></i>Beranda </a>
                    </li>
                    <h3 class="menu-title">Menu</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plug"></i>Kulkas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-circle"></i><a href="{{ route('kulkas.index') }}">Data Instore</a>
                            </li>
                            <li>
                                <i class="fa fa-circle"></i><a href="ui-badges.html">Data Staging</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="{{ route('sukucadang.index') }}"> <i class="menu-icon fa fa-database"></i>Suku Cadang </a>
                    </li>

                    <li class="">
                        <a href="index.html"> <i class="menu-icon fa fa-cogs"></i>Perbaikan </a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Karyawan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-circle"></i><a href="{{ route('kulkas.index') }}">Data Instore</a>
                            </li>
                            <li>
                                <i class="fa fa-circle"></i><a href="ui-badges.html">Data Staging</a>
                            </li>
                        </ul>
                    </li>

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
