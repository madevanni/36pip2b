<div class="header_top">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav custom_nav">
                    <li><?php echo anchor('', 'Home'); ?></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil PIP2B <b class="caret"></b></a>
                        <ul class="navbar-nav dropdown-menu">
                            <li><?php echo anchor('profil_pip2b/lokasi', 'Lokasi'); ?></li>
                            <li><?php echo anchor('profil_pip2b/tentang_pip2b', 'Tentang PIP2B'); ?></li>
                            <li><?php echo anchor('profil_pip2b/struktur_organisasi', 'Struktur Organisasi'); ?></li>
                            <li><?php echo anchor('profil_pip2b/visi_misi', 'Visi & Misi'); ?></li>
                            <li><?php echo anchor('profil_pip2b/kegiatan_pip2b', 'Kegiatan PIP2B'); ?></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fasilitas <b class="caret"></b></a>
                        <ul class="navbar-nav dropdown-menu">
                            <li><?php echo anchor('fasilitas/peralatan', 'Peralatan'); ?></li>
                            <li><?php echo anchor('fasilitas/ruangan', 'Ruangan'); ?></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Keciptakaryaan <b class="caret"></b></a>
                        <ul class="navbar-nav dropdown-menu">
                            <li><?php echo anchor('http://ciptakarya.pu.go.id/setditjen/', 'Sekretariat Direktorat Jenderal Ciptakarya'); ?></li>
                            <li><?php echo anchor('http://ciptakarya.pu.go.id/binaprogram/', 'Direktorat Keterpaduan Infrastruktur Permukiman'); ?></li>
                            <li><?php echo anchor('http://ciptakarya.pu.go.id/pbl/', 'Direktorat Bina Penataan Bangunan'); ?></li>
                            <li><?php echo anchor('http://ciptakarya.pu.go.id/bangkim/', 'Direktorat Pengembangan Kawasan Permukiman'); ?></li>
                            <li><?php echo anchor('http://ciptakarya.pu.go.id/plp/', 'Direktorat Pengembangan PLP'); ?></li>
                            <li><?php echo anchor('http://www.ditpam-pu.org/', 'Direktorat Pengembangan Sistem Penyediaan Air Minum'); ?></li>
                            <li><?php echo anchor('http://www.bppspam.com/', 'Badan Pendukung Pengembangan Sistem Penyediaan Air Minum'); ?></li>
                        </ul>
                    </li>
                    <li><?php echo anchor('news', 'News'); ?></li>
                    <li><?php echo anchor('gallery', 'Gallery'); ?></li>
                    <!--<li><a href="#">Forum</a></li>-->
                    <li><?php echo anchor('administrator', 'Login', ['target' => '_blank']); ?></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header_search">
        <button id="searchIcon"><i class="fa fa-search"></i></button>
        <div id="shide">
            <div id="search-hide">
                <form action="http://www.google.com/">
                    <input type="text" size="40" placeholder="Search here ...">
                </form>
                <button class="remove"><span><i class="fa fa-times"></i></span></button>
            </div>
        </div>
    </div>
</div>