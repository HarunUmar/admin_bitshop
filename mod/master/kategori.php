<section class="content bg-white">
 	<div class="box box-default color-palette-box">
    <div class="box-header with-border">
      <div class="pull-left">
      	 <button class="btn btn-primary " onclick="tampil_input_kat();">Input Baru</button>
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
         <h4 class="modal-title" id="label_modal" style="margin-top:10px; color:#FFFFFF;">FORM Input Kategori Pengurusan</h4>

      </div>
          <div class="modal-body">
            <form id="form_inputkat"  method="POST" action="" enctype="multipart/form-data">
            
              <div class="box-body">
                <div class='form-group'>
                    <label >Nama Kategori</label>
                    <input type="text" name="nama_kategori"  class="form-control" placeholder='Masukan Kategori Pengurusan' >
                </div> 

                <div class='form-group'>
                    <label >Pilih Icon</label>
                    <input type='file' name="url_icon"  />

                </div>

                <div class='form-group'>
                    <label >Kategori Layanan ?</label>
                    <select name="layanan" class="form-control">
                    	<option value="1">Ya</option>
                    	<option value="0">Tidak</option>
                    </select> 
                </div>

                <div class='form-group'>
                    <label >Status Aktif</label>
                    <select name="status_aktif" class="form-control">
                    	<option value="1">Aktif</option>
                    	<option value="0">Tidak</option>
                    </select> 
                </div>

              </div>
               <div class="modal-footer" style="padding-bottom:0px;">
                  <label type="button" class="btn btn-default na" onclick="tutup_modal('modal_input_kat');">Batal</label>
                  <button type="submit" class="btn na" id="btn_input_kat" style="background-color:#3c8dbc; color:white;"  >Simpan</button>
                </div>
            </form>
          </div>
    </div>
  </div>
</div>

<!-- <div class="modal fade" id="modal_edit_kat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
</div> -->

   
<script type="text/javascript">
	$(document).ready(function(){
		load_data();
		$("#form_inputkat").ajaxForm({
			beforeSend:function(){
				loading("tombol","btn_input_kat");
			},
			success:function(msg){
				sukses = msg[0].success;
				alert(msg[0].pesan);
				if(sukses == 1){
					tutup_modal('modal_input_kat');
					load_data();
				} 
				$("#btn_input_kat").html("Simpan");
			}
		});
	});

	function load_data(){
		$.ajax({
			url : url("get_kategori/0")	,
			type : "GET",
			beforeSend:function(){
				loading("bodi","tampil_data");
			},
			success: function(msg){
				var sukses = msg[0].success;
				if(sukses == 1){
					no = 1;
					isi = "";
					$.each(msg[0].pesan, function(i, data){
						if(data.layanan == "1"){
							tampil_layanan = "<i title='YA' class='fa fa-check bg-success text-green' style='padding:5px; border-radius:5px; cursor:pointer'></i>";
						}else{
							tampil_layanan = "<i title='TIDAK' class='fa fa-minus bg-danger text-red' style='padding:5px; border-radius:5px; cursor:pointer'></i>";
						}
						isi += `<tr>
									<td>`+no+`</td>
									<td>`+data.nama_kategori+`</td>
									<td>`+data.url_icon+`</td>
									<td align='center'>`+tampil_layanan+`</td>
									<td id='`+data.id_kategori+`' align='center'>

										<i title='Perbaharui' class='fa fa-pencil bg-info text-blue' style='padding:5px; border-radius:5px; cursor:pointer' onclick="tampil_editkat('`+data.id_kategori+`','`+data.nama_kategori+`','`+data.layanan+`','`+data.status_aktif+`')"></i>
										<i title='Hapus' class='fa fa-trash bg-danger text-red' style='padding:5px; border-radius:5px; cursor:pointer' onclick="hapus_kat('`+data.id_kategori+`')"></i>

										<i title='Lihat Gambar' class='fa fa-image bg-success text-green' style='padding:5px; border-radius:5px; cursor:pointer' onclick="lihat_gambar('`+data.url_icon+`')"></i>
									</td>
								</tr>`;
					no++;
					});
					var kop_tabel = ["No","Nama Kategori","Gambar","Layanan ?","Aksi"];
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
				url : url("hapus_kategori/"+id),
				type:'POST',
				data: {_method: 'delete'},
				beforeSend:function(){
					 $("#"+id).addClass("bg-danger text-red").html("<i class='fa fa-spinner fa-pulse fa-fw'></i>");
				},success:function(msg){
					sukses = msg[0].success;
					alert(msg[0].pesan);
					if(sukses == 1){
						load_data();
					}
				}
			});
		}
	}

	function tampil_input_kat(){
		var action_form = url("simpan_kategori");
		$("#form_inputkat").prop("action",action_form);
		$("#label_modal").html("FORM Input Kategori Pengurusan");
		riset_form("form_inputkat");
		tampil_modal("modal_input_kat");
	}

	function tampil_editkat(id,nama_kategori,kategori_layanan,status_aktif){
		riset_form("form_inputkat");
		var action_form = url("edit_kategori/"+id);
		$("#form_inputkat").prop("action",action_form);
		$("#label_modal").html("FORM Edit Kategori Pengurusan");
		$("input[name='nama_kategori']").val(nama_kategori);
		$("select[name='layanan']").val(kategori_layanan);
		$("select[name='status_aktif']").val("1");
		tampil_modal("modal_input_kat");
		
	}

</script>



    