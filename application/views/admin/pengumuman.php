<!-- Card Pengumuman -->
<style type="text/css">
      #tambahkaryawan{
        float: right;
      }  
    </style>

<div class="container">
    <div class="container md-4">
        <a id="tambahkaryawan" href="<?= base_url('admin/Form_pengumuman/add') ?>" class="btn btn-success">Tambah Data </a><hr><br>
    </div>
        <div class="row">
        <!-- my php code which uses x-path to get results from xml query. -->
        <?php foreach ( $posting as $elements) : ?>
            <div class="col-sm-4 ">
                <div class="card-columns-fluid">
                    <div class="card  bg-light" style = "width: 22rem; " >
                         <img class="card-img-top" width="150" height="150"  src=" <?php echo base_url('assets/upload/pengumuman/'). $elements->gambar?> " alt="Card image cap">

                        <div class="card-body">
                            <h5 class="card-title"><b><?php echo $elements->judul ?></b></h5>
                            <p class="card-text"><b><?php echo $elements->sub_judul ?></b></p>
                            <p class="card-text"></p>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-secondary">Full Details</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
        Launch static backdrop modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
            </div>
        </div>
        </div>  
</div>


<script type="text/javascript">
</script>