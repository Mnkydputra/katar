<div class="container rounded bg-light">
    <h3>Agenda</h3>
    <table id="table_id" class="table table-striped bg-light table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Agenda</th>
                <th>Tanggal</th>
                <th>Jam</th>
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
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
