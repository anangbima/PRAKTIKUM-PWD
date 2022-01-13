<?php $this->extend('admin/layout/_template'); ?>

<?php $this->section('content'); ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <h1 class="m-0 text-dark">Genre</h1>

                    <div>
                        <a class="btn btn-dark" href="<?php echo base_url('tambah-genre'); ?>">Tambah Genre</a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="content">
            <div class="container-fluid pb-5">
                <!-- <div class="shadow-sm bg-white p-3">
                    <div class="row">
                        <div class="col-lg-11 col-sm-12">
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="col-lg-1 col-sm-12">
                            <input type="submit" class="btn btn-dark w-100" value="Cari">
                        </div>
                    </div>
                </div> -->

                <div class="shadow-sm bg-white p-3">
                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th width="40px">No</th>
                                    <th>Genre</th>
                                    <th width="40px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1; 
                                    foreach($genre as $g){ 
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $g['genre_nama']; ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-success me-2" href="<?php echo base_url('edit-genre/'.$g['genre_id']) ?>"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-danger" href="<?php echo base_url('hapus-genre/'.$g['genre_id']) ?>"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    $no++; 
                                    } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

<?php $this->endSection(); ?>