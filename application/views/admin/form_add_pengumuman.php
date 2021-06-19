<div class="content">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-info">
                  <h4 class="card-title mt-0">Posting Kegiatan</h4>
                  <p class="card-category"> KARANG TARUNA BUKIT DURI</p>
                </div>
                <div class="card-body">
                  <form id="pengumuman" method="POST" enctype="multipart/form-data" action="#" class="form-horizontal">
                    <div class="form-group">
                      <input type="text" name="judul" id="judul" class="form-control" placeholder="Tulis Judul">
                    </div>

                    <div class="form-group">
                    <input type="text" name="sub_judul" id="sub_judul" class="form-control" placeholder="Tulis Sub Judul">
                    </div>

                    <div class="form-group">
                      <textarea id="cerita"  placeholder="Keterangan" class="form-control" name="keterangan"></textarea>
                    </div>

                    <div class="form-group">
                      <input  type="text" id="tanggal" name="tanggal" placeholder="Tahun" class="form-control">
                    </div>

                    <label>Gambar Kegiatan</label>
                    <input type="file" id="file" onchange="return cekexe()" name="file" class="form-control"><hr>
                    <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                  </form>
              	</div>
              </div>
          </div>
      </div>
  </div>


  <script type="text/javascript">
     function cekexe(){
      const file = document.getElementById('file');
      const path  = file.value ;
      const exe = /(\.jpg|jpeg|png)$/i;
      if(!exe.exec(path)){
        alert("file harus berbentuk gambar");
        file.value = "";
        return ;
      }
    }

        $(function(){
              $("#pengumuman").on('submit',function(e){
                var postData = new FormData(this);
                e.preventDefault();
                if(document.getElementById('judul').value == "" ){
                  alert("Judul Masih Kosong")
                }else if(document.getElementById('sub_judul').value == "" ){
                  alert("Sub Judul Mash kosong")
                }else if(document.getElementById('cerita').value == "" ){
                  alert("keterangan masih kosong")
                }else if(document.getElementById('tanggal').value == "" ){
                  alert("tanggal masih kosong")
                }else if(document.getElementById('file').value == "" ){
                alert("berkas masih kosong")
                }else {
                  $.ajax({
                    url : "<?= base_url('admin/Form_pengumuman/posting') ?>" ,
                    method : "POST" ,
                    data : postData ,
                    processData : false ,
                    contentType : false ,
                    cache : false ,
                    beforeSend : function(){
                      $("#submit").attr("disabled",true);   
                    },
                    complete : function(){
                      $("#submit").attr("disabled",false);    
                    },
                    success : function(e){
                        if(e = "sukses"){
                          alert("berhasil");
                          window.location.href='<?= base_url('admin/Form_pengumuman/add') ?>'
                        }else {
                          alert("gagal")
                        }
                    }
                  })
                }
              })
            })
  </script>