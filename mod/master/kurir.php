<section class="content bg-white">
 	<div class="box box-default color-palette-box">
    <div class="box-header with-border">
      <div class="pull-left">
      	 <button class="btn btn-primary " onclick="tampil_mod();">Input Baru</button>
      	 <!-- <button class="btn btn-danger ">Aktifkan Kategori Yang Sudah Ada</button> -->
      </div>
      <div class="pull-right" style="padding-left:5px;">
		  <h3 style="margin:0;">
       		INPUTKategori
      	  </h3>
	  </div>
    </div>
    <div class="box-body" style="padding:25px;">
      	<div id="tampil_data">
          	
       	</div>
    </div>
  </div>
</section>


<div class="modal fade" id="modal_input_kat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">

      <div class="modal-header text-center" style="background-color:#3c8dbc;">
         <i class='fa fa-edit fa-3x' style='padding:20px; border-radius:10px; background-color:#FFFFFF; color:#3c8dbc;'></i>
         <h4 class="modal-title" id="myModalLabel" style="margin-top:10px; color:#FFFFFF;">FORM Input Kategori Pengurusan</h4>

      </div>
          <div class="modal-body">
            <form id="form_inputkat"  method="POST" action="https://bitshop.tarsiustech.com/api/v1/simpan_kategori" enctype="multipart/form-data">
            
              <div class="box-body">
               
                <div id='div-nama_kat' class='validasi form-group'>
                    <label >Nama Kategori</label>
                    <input type="text" name="nama_kategori" validasi='required' class="form-control" placeholder='Masukan Kategori Pengurusan' >
                    <span id='ket-nama_kat' class="help-block ket-validasi"></span>
                </div> 

                <div id='div-url_icon' class='validasi form-group'>
                    <label >Pilih Icon</label>
                    <input type='file'  validasi='required' name="url_icon" onchange='' />
                    <span id='ket-url_icon' class="help-block ket-validasi"></span>

                </div>
                 <input type="hidden" readonly name="status_aktif" value="1">
              </div>
               <div class="modal-footer" style="padding-bottom:0px;">
                  <label type="button" class="btn btn-default na" onclick="tutup_mod('modal_input_kat');">Batal</label>
                  <button type="submit" class="btn na" id="btn_input_kat" style="background-color:#3c8dbc; color:white;"  >Simpan</button>
                </div>
            </form>
          </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_edit_kat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">

      <div class="modal-header text-center" style="background-color:#3c8dbc;">
         <i class='fa fa-edit fa-3x' style='padding:20px; border-radius:10px; background-color:#FFFFFF; color:#3c8dbc;'></i>
         <h4 class="modal-title" id="myModalLabel" style="margin-top:10px; color:#FFFFFF;">FORM Edit Kategori Pengurusan</h4>

      </div>
          <div class="modal-body">
            <form id="form_editkat"  method="POST" action="" enctype="multipart/form-data">
            
              <div class="box-body">
               
                <div id='div-nama_kat' class='validasi form-group'>
                    <label >Nama Kategori</label>
                    <input type="text" name="nama_kategori" validasi='required' class="form-control" placeholder='Masukan Kategori Pengurusan' >
                    <span id='ket-nama_kat' class="help-block ket-validasi"></span>
                </div> 

                <div id='div-url_icon' class='validasi form-group'>
                    <label >Pilih Icon</label>
                    <input type='file'  validasi='required' name="url_icon" onchange='' />
                    <span id='ket-url_icon' class="help-block ket-validasi"></span>

                </div>
                 <input type="hidden" readonly name="status_aktif" value="1">
              </div>
               <div class="modal-footer" style="padding-bottom:0px;">
                  <label type="button" class="btn btn-default na" onclick="tutup_mod('modal_edit_kat');">Batal</label>
                  <button type="submit" class="btn na" id="btn_edit_kat" style="background-color:#3c8dbc; color:white;"  >Simpan</button>
                </div>
            </form>
          </div>
    </div>
  </div>
</div>

   
<script type="text/javascript">
	$(document).ready(function(){
		load_data();
		$("#form_inputkat").ajaxForm({
			beforeSend:function(){
				 $("#btn_input_kat").html("<i class='fa fa-spinner fa-pulse fa-fw' style='color: #FFFFFF;'></i> Loading");
			},
			success:function(msg){
				sukses = msg[0].success;
				if(sukses == 1){
					alert("Berhasil Input Kategori");
					$("#form_input_jp").each(function(){this.reset();});
					tutup_mod('modal_input_kat');
					load_data();
				}else{
					alert("Gagal Input Kategori");
				} 
				$("#btn_input_kat").html("Simpan");
			}
		});

		$("#form_editkat").ajaxForm({
			beforeSend:function(){
				 $("#btn_edit_kat").html("<i class='fa fa-spinner fa-pulse fa-fw' style='color: #FFFFFF;'></i> Loading");
			},
			success:function(msg){
				sukses = msg[0].success;
				if(sukses == 1){
					alert("Berhasil Perbaharui Kategori");
					$("#form_editkat").each(function(){this.reset();});
					tutup_mod('modal_edit_kat');
					load_data();
				}else{
					alert("Gagal Perbaharui Kategori");
				} 
				$("#btn_edit_kat").html("Simpan");
			}
		});
	});
	function load_data(){
		$.ajax({
			url : "https://bitshop.tarsiustech.com/api/v1/get_kategori/0",
			type : "GET",
			beforeSend:function(){
				$("#tampil_data").html("<div class='text-center ' style='padding:80px;'><i class='fa fa-spinner fa-pulse fa-4x fa-fw text-red'></i> <br/> <i class='fa bg-danger text-red' style='padding:5px;	margin-top:5px;'>Sedang Memepersiapkan Data Kategori ..</i></div>");
			},
			success: function(msg){
				var sukses = msg[0].success;
				if(sukses == 1){
					no = 1;
					isi = "";
				
					$.each(msg[0].pesan, function(i, data){
						url = "https:///bitshop.tarsiustech.com/api/v1/edit_kategori/"+data.id_kategori;
						isi += `<tr>
									<td>`+no+`</td>
									<td>`+data.nama_kategori+`</td>
									<td>`+data.url_icon+`</td>
									<td id='`+data.id_kategori+`' align='center'>
										<i title='Perbaharui' class='fa fa-pencil bg-info text-blue' style='padding:5px; border-radius:5px; cursor:pointer' onclick="tampil_mod_editkat('`+data.nama_kategori+`','`+url+`')"></i>

										

										<i title='Hapus' class='fa fa-trash bg-danger text-red' style='padding:5px; border-radius:5px; cursor:pointer' onclick="hapus_kat('`+data.id_kategori+`')"></i>
									</td>
								</tr>`;
					no++;
					});
					var kop_tabel = ["No","Nama Kategori","Gambar","Aksi"];
					set_tb(kop_tabel,isi,"tampil_data");

				}else{
					alert("Terjadi Kesalahan Service");
				}
			}
		});
	
	}

	function hapus_kat(id){
	
		var konfir = confirm("Apakah Anda Yakin Untuk Menghapus Kategori ?");
		if(konfir){
			$.ajax({
				url : "https://bitshop.tarsiustech.com/api/v1/hapus_kategori/"+id,
				type:'POST',
				data: {_method: 'delete'},
				beforeSend:function(){
					 $("#"+id).addClass("bg-danger text-red").html("<i class='fa fa-spinner fa-pulse fa-fw'></i>");
				},success:function(msg){
					sukses = msg[0].success;
					// alert(sukses);
					if(sukses == 1){
						alert("Berhasil Hapus kategori");
						load_data();
					}else{
						alert("Gagal Hapus Kategori");
					}
				}
			});
		}
	}

	function tampil_mod_editkat(nama_kategori,url){
		$("#form_editkat").prop("action",url);
		$("input[name='nama_kategori']").val(nama_kategori);
		$("#modal_edit_kat").modal("show");
		
	}


	function tampil_mod(){
		$("#modal_input_kat").modal("show");
	}

	function tutup_mod(id){
        $("#"+id).modal("hide");
        // reset_validasi();
    }
</script>



    