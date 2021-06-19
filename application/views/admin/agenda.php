<div class="container rounded bg-light">
    <h3>Agenda</h3>
    <div class="form-group">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Agenda
        </button>
    </div>
    <table id="table_id" class="table table-striped bg-light table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Agenda</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($agenda as $p) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $p->agenda ?></td>
                    <td><?= $p->tanggal ?></td>
                    <td><?= $p->jam ?></td>
                    <td>
                        <a class="btn btn-sm btn-danger" onclick="return confirm('hapus ?')" href="<?= base_url('admin/Agenda/delete/' . $p->id) ?>">delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" id="addAgenda">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" id="tanggal" name="tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jam</label>
                        <input type="text" id="jam" name="jam" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Agenda</label>
                        <textarea class="form-control" id="agenda" name="agenda"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(function() {
        $("#addAgenda").on('submit', function(e) {
            e.preventDefault();
            var tgl, jam, agenda;
            tgl = document.getElementById("tanggal").value;
            jam = document.getElementById("jam").value;
            agenda = document.getElementById("agenda").value;
            if (tgl == "") {
                alert('tanggal kosong');
            } else if (jam == "") {
                alert('jam kosong');
            } else if (agenda == "") {
                alert('agenda kosong')
            } else {
                $.ajax({
                    url: "<?= base_url('admin/Agenda/add') ?>",
                    data: new FormData(this),
                    method: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(e) {
                        alert(e);
                        window.location.href = "<?= base_url('admin/Agenda') ?>"
                    }
                })
            }
        })

    })
</script>