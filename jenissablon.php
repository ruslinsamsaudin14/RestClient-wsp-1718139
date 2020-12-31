<hr>
<h1 class="h3 mb-4 text-gray-800 text-center text-primary"><strong>Jenis Sablon</strong></h1>
<hr>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenterJS"><i class="fa fa-table mr-3"></i>Tambah Data</button>
<p>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">id_jenis_sablon</th>
            <th scope="col">nama_jenis_sablon</th>
            <th scope="col">keterangan</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody id="table_jenissablon">

    </tbody>

</table>
<div class="modal fade" id="exampleModalCenterJS" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formustadz">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama jenis sablon</label>
                        <input type="text" class="form-control" name="createNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Keterangan</label>
                        <input type="text" class="form-control" name="createKeterangan" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary addjs" data-dismiss="modal">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCenterJS" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formustadz">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Jenis Sablon</label>
                        <input type="text" class="form-control" name="updateNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Keterangan</label>
                        <input type="text" class="form-control" name="updateKeterangan" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary updatejs" data-dismiss="modal">Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>