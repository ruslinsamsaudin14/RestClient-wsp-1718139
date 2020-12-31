<hr>
<h1 class="h3 mb-4 text-gray-800 text-center text-primary"><strong>Barang</strong></h1>
<hr>
<button type="button" class="btn btn-primary btn-lg create" data-toggle="modal" data-target="#exampleModalCenterbrg"><i class="fa fa-table mr-3"></i>Tambah Data</button>
<p>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Jenis_sablon_id</th>
            <th scope="col">jenis_kaos</th>
            <th scope="col">warna_kaos</th>
            <th scope="col">jenis_sablon</th>
            <th scope="col">harga</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody id="table_barang">

    </tbody>
</table>
<div class="modal fade" id="exampleModalCenterbrg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formMsjadz">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Pilih Jenis Sablon</label>
                        <select class="form-control inputbr" name="createJenis">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Kaos</label>
                        <input type="text" class="form-control" name="createJenisKaos" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Warna Kaos</label>
                        <input type="text" class="form-control" name="createWarnaKaos" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Sablon</label>
                        <input type="text" class="form-control" name="createJenisSablon" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">harga</label>
                        <input type="text" class="form-control" name="createHarga" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary addbrg" data-dismiss="modal">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCenterbrg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formMsjadz">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Pilih Jenis Sablon</label>
                        <select class="form-control inputUpbr" name="update_jenis_sablon_id">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Kaos</label>
                        <input type="text" class="form-control" name="updateJenisKaos" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Warna Kaos</label>
                        <input type="text" class="form-control" name="updateWarnaKaos" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Sablon</label>
                        <input type="text" class="form-control" name="updateJenisSablon" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Harga</label>
                        <input type="text" class="form-control" name="updateHarga" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary updatebrg" data-dismiss="modal">Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>