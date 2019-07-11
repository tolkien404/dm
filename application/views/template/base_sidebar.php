
<div class="site-menubar">
    <div class="site-menubar-body">
        <ul class="site-menu" data-plugin="menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item <?= (current_url() == base_url('admin/Dashboard')) ? ' active' : '' ?>">
                <a class="animsition-link" href="<?php echo site_url('admin/Dashboard') ?>">
                    <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard</span>
                </a>
            </li>
            <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon md-accounts-list" aria-hidden="true"></i>
                    <span class="site-menu-title">Data Anggota</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item  <?= (current_url() == base_url('admin/Users')) ? ' active' : '' ?>">
                        <a class="animsition-link " href="<?php echo site_url('admin/Users') ?>">
                            <span class="site-menu-title">Users</span>
                        </a>
                    </li>
                </ul>
                <ul class="site-menu-sub">
                    <li class="site-menu-item  <?= (current_url() == base_url('admin/Users/post')) ? 'active' : '' ?>">
                        <a class="animsition-link " href="<?php echo site_url('admin/Users/post') ?>">
                            <span class="site-menu-title">Tambah Users</span>
                        </a>
                    </li>
                </ul>
                <ul class="site-menu-sub">
                    <li class="site-menu-item  <?= (current_url() == base_url('admin/Anggota')) ? 'active' : '' ?>">
                        <a class="animsition-link " href="<?php echo site_url('admin/Anggota') ?>">
                            <span class="site-menu-title">Anggota</span>
                        </a>
                    </li>
                </ul>
                <ul class="site-menu-sub">
                    <li class="site-menu-item  <?= (current_url() == base_url('admin/Anggota/post')) ? 'active' : '' ?>">
                        <a class="animsition-link " href="<?php echo site_url('admin/Anggota/post') ?>">
                            <span class="site-menu-title">Tambah Anggota</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon md-collection-text" aria-hidden="true"></i>
                    <span class="site-menu-title">Data Berita</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item  <?= (current_url() == base_url('admin/Berita')) ? 'active' : '' ?>">
                        <a class="animsition-link " href="<?php echo site_url('admin/Berita') ?>">
                            <span class="site-menu-title">Berita</span>
                        </a>
                    </li>
                </ul>
                <ul class="site-menu-sub">
                    <li class="site-menu-item <?= (current_url() == base_url('admin/Berita/post')) ? 'active' : '' ?>">
                        <a class="animsition-link " href="<?php echo site_url('admin/Berita/post') ?>">
                            <span class="site-menu-title">Tambah Berita</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon md-library" aria-hidden="true"></i>
                    <span class="site-menu-title">Data Galeri</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item <?= (current_url() == base_url('admin/Berita')) ? 'active' : '' ?>">
                        <a class="animsition-link " href="<?php echo site_url('admin/Berita') ?>">
                            <span class="site-menu-title">Galeri</span>
                        </a>
                    </li>
                </ul>
                <ul class="site-menu-sub">
                    <li class="site-menu-item <?= (current_url() == base_url('admin/Berita/post')) ? 'active' : '' ?>">
                        <a class="animsition-link " href="<?php echo site_url('admin/Berita/post') ?>">
                            <span class="site-menu-title">Tambah Galeri</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="site-menu-item has-subgt ">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon md-calendar-note" aria-hidden="true"></i>
                    <span class="site-menu-title">Data Acara</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <a class="animsition-link <?= (current_url() == base_url('admin/Berita')) ? 'active' : '' ?>" href="<?php echo site_url('admin/Berita') ?>">
                            <span class="site-menu-title">Acara</span>
                        </a>
                    </li>
                </ul>
                <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <a class="animsition-link <?= (current_url() == base_url('admin/Berita/post')) ? 'active' : '' ?>" href="<?php echo site_url('admin/Berita/post') ?>">
                            <span class="site-menu-title">Tambah Acara</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon md-nature-people" aria-hidden="true"></i>
                    <span class="site-menu-title">Data Kiprah</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <a class="animsition-link <?= (current_url() == base_url('admin/Berita')) ? 'active' : '' ?>" href="<?php echo site_url('admin/Berita') ?>">
                            <span class="site-menu-title">Kiprah</span>
                        </a>
                    </li>
                </ul>
                <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <a class="animsition-link <?= (current_url() == base_url('admin/Berita/post')) ? 'active' : '' ?>" href="<?php echo site_url('admin/Berita/post') ?>">
                            <span class="site-menu-title">Tambah Kiprah</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
