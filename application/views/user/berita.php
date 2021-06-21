<!-- Card Pengumuman -->
<style type="text/css">
      #tambahkaryawan{
        float: right;
      }  
    </style>

<div class="container">
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
                            <a href="detail_pengumuman" data-judul="<?= $elements->judul?>" class="btn btn-secondary" data-toggle="modal" data-target="#detail_pengumuman">Detail Pengumuman </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="detail_pengumuman" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
       
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><?= $elements->judul?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1 id="judul"></h1>
                <?= $elements->cerita?>
                <hr>
                <p2>Di Post Oleh: <?= $elements->post_oleh?></p2>
                <p>Tanggal : <?= $elements->tahun?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
           
        </div>
        </div>  
</div>


<script type="text/javascript">
	$('.click').on('click',function(e){
              document.getElementById("judul").value = $(this).attr('data-judul');
              $('#detail_pengumuman').modal('hide');
        	})
</script>