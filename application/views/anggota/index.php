<div class="content">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card bg-dark shadow-normal">
                        <div class="card-header">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-white">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php  foreach ($anggota as $row) :?>
                                        <tr>
                                            <td>1</td>
                                            <td><?= ucfirst($row->nama) ?></td>
                                            <td><?= ucfirst($row->alamat) ?></td>
                                            <td><?= ucfirst($row->status) ?></td>
                                            <td>
                                                <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                                    <i class="material-icons">remove_red_eye</i>
                                                </button>
                                                <button class="btn btn-danger btn-fab btn-fab-mini btn-round">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                           <h4 class="font-weight-normal text-center mt-3">Tambah Data Anggota</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('anggota/tambah') ?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="alamat" placeholder="Masukan alamat" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <select class="selectpicker form-control" name="status" data-style = "btn-success">
                                        <option value="active">active</option>
                                        <option value="notactive">not active </option>
                                    </select>
                                </div>
                                <button class="btn btn-success pull-right mt-2" type="submit">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>