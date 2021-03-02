<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- content -->
                        <div class="page-wrapper">

                            <div class="page-body">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Form Edit Obat</h5>
                                            </div>
                                            <div class="card-block">

                                                <form method="POST" action="<?= base_url('obat/edit_obat/') . $obat['id']; ?>">

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nama Obat</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="nm_obat" id="nm_obat" value="<?= $obat['nm_obat']; ?>" class="form-control">
                                                            <?= form_error('nm_obat', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Jenis</label>
                                                        <div class="col-sm-10">
                                                            <select name="jenis" id="jenis" class="form-control">
                                                                <option>Pilih salah satu</option>
                                                                <?php foreach ($jenis as $j) : ?>
                                                                    <?php if ($j == $obat['jenis']) : ?>
                                                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                                                    <?php else : ?>
                                                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Stok</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="stok" id="stok" value="<?= $obat['stok']; ?>" class="form-control">
                                                            <?= form_error('stok', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-success m-b-20 m-r-35 float-right">Simpan</button>
                                                <a href="<?= base_url('obat'); ?>" class="btn btn-secondary m-b-30 m-r-10 float-right">Kembali</a>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end content -->
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>