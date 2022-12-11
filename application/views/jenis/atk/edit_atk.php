<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-info">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-info">
                            Form Edit Jenis Barang
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('jenis') ?>" class="btn btn-danger btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id_jenis' => $jenis['id_jenis']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama_jenis">Nama Jenis</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('nama_jenis', $jenis['nama_jenis']); ?>" name="nama_jenis" id="nama_jenis" type="text" class="form-control" placeholder="Nama Jenis...">
                        <?= form_error('nama_jenis', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="kode_jenis">Kode Jenis</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('kode_jenis', $jenis['kode_jenis']); ?>" name="kode_jenis" id="kode_jenis" type="text" class="form-control" placeholder="Nama Jenis...">
                        <?= form_error('kode_jenis', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>