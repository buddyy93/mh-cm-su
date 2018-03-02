<div class="container">
    <ol class="breadcrumb">
        <li>List</li>
        <li><a href="<?php echo base_url() . 'manage_kategori_produk/'; ?>">Data</a></li>
        <li class="active">Add</li>
    </ol>
</div>
<div class="container">
    <div class="container" style="background: #f5f5f5;">
        <h3>Tambah Kategori Produk</h3>
        <br>
        <?php echo form_open_multipart('manage_kategori_produk/tambahkategoriproduk/')?>
        <div class="row">
            <div class="col-md-2">
                <label>Nama Kategori Produk</label>
            </div>
            <div class="col-md-10">
                <input name="nama_kategori_id" type="text" class="form-control"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>Nama Kategori Produk EN</label>
            </div>
            <div class="col-md-10">
                <input name="nama_kategori_en" type="text" class="form-control"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>Foto Kategori Produk</label>
            </div>
            <div class="col-md-10">
                <input type="file" name="foto" id="foto">
                <p>note: ukuran gambar 1290x500 pixel. (recommended)</p>
            </div>
        </div>
        <br>
        <div>
            <?php if (isset($results))
            {
                foreach ($results as $result)
                {
                    echo $result;
                }
            }; ?>
        </div>
        <div id="errors">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <?php form_close(); ?></div>
</div>