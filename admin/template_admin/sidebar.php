<div class="sidebar border-right bg-light fixed-left">
    <div id="side-btn">
        <i id="icon" class="fa fa-bars"></i>
    </div>
    <div class="wrap-content">
        <div class="head my-5 text-center">
            <h4 class="text-secondary">Admin Page</h4>
        </div>
        <ul class="list text-left">
            <h5 class="ml-3 mb-4">Halaman</h5>
            <li class="list-item"><a href="<?= url ?>admin/index.php"><i class="fa fa-dashboard "></i>Dashboard</a></li>

            <li class="list-item"><a href="<?= url ?>admin/transaksi.php"><i class="fa fa-money "></i>Transaksi</a></li>
            <li class="list-item"><a href="<?= url ?>admin/pengguna.php"><i class="fa fa-user "></i>Pengguna</a></li>
        </ul>
        <hr>
        <ul class="list text-left ">
            <li class="list-item"><a href="<?= url ?>user/keluar.php"><i class="fa fa-sign-out "></i>Keluar</a></li>
        </ul>
    </div>
</div>