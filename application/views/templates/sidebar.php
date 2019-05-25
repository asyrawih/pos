
<div class="wrapper ">
    <div class="sidebar" data-background-color="dark" data-color="orange" data-image="<?= base_url() ?>assets/img/sidebar-1.jpg">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo">
            <a class="simple-text logo-mini" href="http://www.creative-tim.com">
                KASIR
            </a>
            <a class="simple-text logo-normal" href="http://www.creative-tim.com">

            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active  ">
                    <a class="nav-link" href="<?=  base_url() ?>">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('anggota') ?>">
                        <i class="material-icons">person</i>
                        <p>Anggota</p>
                    </a>
                </li>
                <li class="nav-item active  ">
                    <a class="nav-link" href="#0">
                        <i class="material-icons">library_books</i>
                        <p>Unit</p>
                    </a>
                </li>
                <li class="nav-item active  ">
                    <a class="nav-link" href="<?= base_url('barang')?>">
                        <i class="material-icons">store</i>
                        <p>Barang</p>
                    </a>
                </li>
                <li class="nav-item active  ">
                    <a class="nav-link" href="#0">
                        <i class="material-icons">dashboard</i>
                        <p>kategori</p>
                    </a>
                </li>
                <li class="nav-item active  ">
                    <a class="nav-link" href="#0">
                        <i class="material-icons">add_shopping_cart</i>
                        <p>transaksi</p>
                    </a>
                </li>
                <!-- your sidebar here -->
            </ul>
        </div>
    </div>