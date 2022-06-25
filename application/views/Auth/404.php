<?php $this->load->view('Layout/header.php') ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Page Tidak dI Temukan</p>
            <p class="text-gray-500 mb-0">Page yang Anda Cari Tidak di Temukan</p>
            <a href="<?= base_url('dashboard'); ?>">&larr; Back to Dashboard</a>
        </div>

    </div>
    <!-- /.container-fluid -->
<?php $this->load->view('Layout/footer.php') ?>
