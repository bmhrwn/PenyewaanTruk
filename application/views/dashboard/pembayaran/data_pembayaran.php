<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pembayaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Transaksi</li>
                        <li class="breadcrumb-item active">Data Pembayaran</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Pembayaran DP</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data Pembayaran Akhir</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Data Transaksi</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div style="border: 1px solid #eee;padding:20px" class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                <center>No</center>
                                            </th>
                                            <th>
                                                <center>ID Transaksi</center>
                                            </th>
                                            <th>
                                                <center>Nama Penyewa</center>
                                            </th>
                                            <th>
                                                <center>Tanggal Pemesanan</center>
                                            </th>
                                            <th>
                                                <center>Pembayaran DP</center>
                                            </th>
                                            <th>
                                                <center>Foto Bukti</center>
                                            </th>
                                            <th>
                                                <center>Status</center>
                                            </th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center>

                                                    <span class="badge badge-warning">Belum Diproses</span>

                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Konfirmasi Penyewaan">
                                                        <button onClick="" data-toggle="modal" data-target="#modal_konfirmasi" type="button" class="btn btn-success btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-check"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Penyewa">
                                                        <button onClick="" data-toggle="modal" data-target="#modalUsersDetail" type="button" class="btn btn-primary btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-user"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Pesanan">
                                                        <button onClick="" data-toggle="modal" data-target="#modal_konfirmasi" type="button" class="btn btn-outline-info btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-info"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                        <button onClick="" data-toggle="modal" data-target="#modal_delete" type="button" class="btn btn-outline-danger btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-trash"></i></button>
                                                    </span>
                                                </center>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                <center>No</center>
                                            </th>
                                            <th>
                                                <center>ID Transaksi</center>
                                            </th>
                                            <th>
                                                <center>Nama Penyewa</center>
                                            </th>
                                            <th>
                                                <center>Tanggal Pemesanan</center>
                                            </th>
                                            <th>
                                                <center>Pembayaran DP</center>
                                            </th>
                                            <th>
                                                <center>Foto Bukti</center>
                                            </th>
                                            <th>
                                                <center>Status</center>
                                            </th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" style="border: 1px solid #eee;padding:20px;" id="profile" role="tabpanel" aria-labelledby="profile-tab" >
                            <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                <center>No</center>
                                            </th>
                                            <th>
                                                <center>ID Transaksi</center>
                                            </th>
                                            <th>
                                                <center>Nama Penyewa</center>
                                            </th>
                                            <th>
                                                <center>Tanggal Pemesanan</center>
                                            </th>
                                            <th>
                                                <center>Pembayaran Akhir</center>
                                            </th>
                                            <th>
                                                <center>Foto Bukti</center>
                                            </th>
                                            <th>
                                                <center>Status</center>
                                            </th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center>

                                                    <span class="badge badge-warning">Belum Diproses</span>

                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Konfirmasi Penyewaan">
                                                        <button onClick="" data-toggle="modal" data-target="#modal_konfirmasi" type="button" class="btn btn-success btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-check"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Penyewa">
                                                        <button onClick="" data-toggle="modal" data-target="#modalUsersDetail" type="button" class="btn btn-primary btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-user"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Pesanan">
                                                        <button onClick="" data-toggle="modal" data-target="#modal_konfirmasi" type="button" class="btn btn-outline-info btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-info"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                        <button onClick="" data-toggle="modal" data-target="#modal_delete" type="button" class="btn btn-outline-danger btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-trash"></i></button>
                                                    </span>
                                                </center>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                <center>No</center>
                                            </th>
                                            <th>
                                                <center>ID Transaksi</center>
                                            </th>
                                            <th>
                                                <center>Nama Penyewa</center>
                                            </th>
                                            <th>
                                                <center>Tanggal Pemesanan</center>
                                            </th>
                                            <th>
                                                <center>Pembayaran Akhir</center>
                                            </th>
                                            <th>
                                                <center>Foto Bukti</center>
                                            </th>
                                            <th>
                                                <center>Status</center>
                                            </th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" style="border: 1px solid #eee;padding:20px" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                <center>No</center>
                                            </th>
                                            <th>
                                                <center>ID Transaksi</center>
                                            </th>
                                            <th>
                                                <center>Nama Penyewa</center>
                                            </th>
                                            <th>
                                                <center>Tanggal Pemesanan</center>
                                            </th>
                                            <th>
                                                <center>Total Harga</center>
                                            </th>
                                            <th>
                                                <center>Foto Bukti</center>
                                            </th>
                                            <th>
                                                <center>Status</center>
                                            </th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center></center>
                                            </td>
                                            <td>
                                                <center>

                                                    <span class="badge badge-warning">Belum Diproses</span>

                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Konfirmasi Penyewaan">
                                                        <button onClick="" data-toggle="modal" data-target="#modal_konfirmasi" type="button" class="btn btn-success btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-check"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Penyewa">
                                                        <button onClick="" data-toggle="modal" data-target="#modalUsersDetail" type="button" class="btn btn-primary btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-user"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Pesanan">
                                                        <button onClick="" data-toggle="modal" data-target="#modal_konfirmasi" type="button" class="btn btn-outline-info btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-info"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                        <button onClick="" data-toggle="modal" data-target="#modal_delete" type="button" class="btn btn-outline-danger btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-trash"></i></button>
                                                    </span>
                                                </center>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                <center>No</center>
                                            </th>
                                            <th>
                                                <center>ID Transaksi</center>
                                            </th>
                                            <th>
                                                <center>Nama Penyewa</center>
                                            </th>
                                            <th>
                                                <center>Tanggal Pemesanan</center>
                                            </th>
                                            <th>
                                                <center>Total Harga</center>
                                            </th>
                                            <th>
                                                <center>Foto Bukti</center>
                                            </th>
                                            <th>
                                                <center>Status</center>
                                            </th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<<div class="modal fade" id="modalUsersDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Form Detail Penyewa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>
                                <center>NIK</center>
                            </th>
                            <th>
                                <center>Nama Lengkap</center>
                            </th>
                            <th>
                                <center>Email</center>
                            </th>
                            <th>
                                <center>Alamat</center>
                            </th>
                            <th>
                                <center>No Handphone</center>
                            </th>


                        </tr>
                        <tr>
                            <td id="nik"></td>
                            <td id="nama"></td>
                            <td id="email"></td>
                            <td id="alamat"></td>
                            <td id="hp"></td>


                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>


    <div class="modal fade" id="modal_delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_title">Form Pembatalan Penyewaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    Anda yakin ingin membatalkan penyewaan?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a id="buttondelete" class="btn btn-primary">Hapus Data</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_konfirmasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_titel">Form Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    Apakah anda yakin memproses penyewaan tersebut ?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a type="button" id="button" class="btn btn-primary">Submit</a>
                </div>
            </div>
        </div>
    </div>
    </div>