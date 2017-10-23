<section class="content bg-white">
 	<div class="box box-default color-palette-box">
    <div class="box-header with-border">
      <div class="pull-left">
      	 <button class="btn btn-primary btn-sm" onclick="tampil_mod();">Input Pengguna</button>
    <!--   	 <button class="btn btn-success btn-sm" onclick="tampil_mod();">Input Lapak</button> -->
      </div>
      <div class="pull-right" style="padding-left:5px;">
		  <h3 style="margin:0;">
       		SET Pelapak
      	  </h3>
	  </div>
    </div>
    <div class="box-body" style="padding:25px;">
      	<div id="tampil_data">
          	
       	</div>
    </div>
  </div>
</section>

<div class="modal fade" id="modal_input" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">

      <div class="modal-header text-center" style="background-color:#3c8dbc;">
         <i class='fa fa-edit fa-3x' style='padding:20px; border-radius:10px; background-color:#FFFFFF; color:#3c8dbc;'></i>
         <h4 class="modal-title" id="myModalLabel" style="margin-top:10px; color:#FFFFFF;">FORM Input Jenis Kendaraan</h4>

      </div>
          <div class="modal-body">
            <form id="form_input"  method="POST" action="https://bitshop.tarsiustech.com/api/v1/simpan_jenis_kendaraan" >
            
              <div class="box-body">
                <div id='div-jenis_kendaraan' class='validasi form-group'>
                    <label >Sudah Punya Akun ?</label>
                    <input type="text" name="jenis_kendaraan" validasi='required' class="form-control" placeholder='Masukan Jenis Kendaraan' >
                    <span id='ket-jenis_kendaraan' class="help-block ket-validasi"></span>
                </div> 

                <div id='div-beban_minimal' class='validasi form-group'>
                    <label >Beban Minimal</label>
                    <input type="text" name="beban_minimal" validasi='required' class="form-control" placeholder='Masukan Beban Minimal' >
                    <span id='ket-beban_minimal' class="help-block ket-validasi"></span>
                </div> 

                <div id='div-beban_maksimal' class='validasi form-group'>
                    <label >Beban Maksimal</label>
                    <input type="text" name="beban_maksimal" validasi='required' class="form-control" placeholder='Masukan Beban Maksimal' >
                    <span id='ket-beban_maksimal' class="help-block ket-validasi"></span>
                </div> 

                <div id='div-status_aktif' class='validasi form-group'>
                    <label >Status Aktif</label>
                    <select type="text" name="status_aktif" validasi='required' class="form-control">
                    	<option value="1">Aktif</option>
                    	<option value="0">Tidak Aktif</option>
                    </select>
                    <span id='ket-beban_maksimal' class="help-block ket-validasi"></span>
                </div> 

                <!-- <input type="hidden" readonly name="status_aktif" value="1"> -->
              </div>
              <div class="modal-footer" style="padding-bottom:0px;">
                  <label type="button" class="btn btn-default na" onclick="tutup_mod('modal_input');">Batal</label>
                  <button type="submit" class="btn na" id="btn_input" style="background-color:#3c8dbc; color:white;"  >Simpan</button>
              </div>
            </form>
          </div>
    </div>
  </div>
</div>


   
<script type="text/javascript">
	$(document).ready(function(){
		load_data();
		$("#form_input").ajaxForm({
			beforeSend:function(){
				 $("#btn_input").html("<i class='fa fa-spinner fa-pulse fa-fw' style='color: #FFFFFF;'></i> Loading");
			},
			success:function(msg){
				sukses = msg[0].success;
				if(sukses == 1){
					alert("Berhasil Input Jenis Kendaraan");
					$("#form_input").each(function(){this.reset();});
					tutup_mod('modal_input');
					load_data();
				}else{
					alert("Gagal Input Jenis Kendaraan");
				} 
				$("#btn_input").html("Simpan");
			}
		});
	});
	function load_data(){
		$.ajax({
			url : "https://bitshop.tarsiustech.com/api/v1/get_lapak/0",
			type : "GET",
			beforeSend:function(){
				$("#tampil_data").html("<div class='text-center ' style='padding:80px;'><i class='fa fa-spinner fa-pulse fa-4x fa-fw text-red'></i> <br/> <i class='fa bg-danger text-red' style='padding:5px;	margin-top:5px;'>Sedang Memepersiapkan Data Kendaraan ..</i></div>");
			},
			success: function(msg){
				var sukses = msg[0].success;
				if(sukses == 1){
					no = 1;
					isi = "";
				
					$.each(msg[0].pesan, function(i, data){
						url = "https://bitshop.tarsiustech.com/api/v1/edit_lapak/"+data.id_lapak;
						isi += `<tr>
									<td>`+no+`</td>
									<td>`+data.nama_lapak+`</td>
									<td>`+data.jam_buka+`</td>
									<td>`+data.jam_tutup+`</td>
									<td id='`+data.id_jenis_kendaraan+`' align='center'>
										<i title='Perbaharui' class='fa fa-pencil bg-info text-blue' style='padding:5px; border-radius:5px; cursor:pointer' onclick="tampil_mod_edit('`+data.nama_lapak+`','`+url+`')"></i>

										<i title='Hapus' class='fa fa-trash bg-danger text-red' style='padding:5px; border-radius:5px; cursor:pointer' onclick="hapus('`+data.id_lapak+`')"></i>

										<i title='Input Lapak' class='fa fa-cog bg-success text-green' style='padding:5px; border-radius:5px; cursor:pointer' onclick="hapus('`+data.id_lapak+`')"></i>
									</td>
								</tr>`;
					no++;
					});
					var kop_tabel = ["No","Nama Lapak","Jam Buka","Jam Tutup", "Aksi"];
					set_tb(kop_tabel,isi);

				}else{
					alert("Terjadi Kesalahan Service");
				}
			}
		});
	}

	function hapus(id){
	
		var konfir = confirm("Apakah Anda Yakin Untuk Menghapus Jenis Kendaraan ?");
		if(konfir){
			$.ajax({
				url : "https://bitshop.tarsiustech.com/api/v1/hapus_jenis_kendaraan/"+id,
				type:'POST',
				data: {_method: 'delete'},
				beforeSend:function(){
					 $("#"+id).addClass("bg-danger text-red").html("<i class='fa fa-spinner fa-pulse fa-fw'></i>");
				},success:function(msg){
					sukses = msg[0].success;
					// alert(sukses);
					if(sukses == 1){
						alert("Berhasil Hapus Jenis Kendaraan");
						load_data();
					}else{
						alert("Gagal Hapus Jenis Kendaraan");
					}
				}
			});
		}
	}

	function tampil_mod(){
		$("#modal_input").modal("show");
	}

	function tampil_mod_edit(jenis_kendaraan,url){
		$("#modal_input").modal("show");
		$("input[name='jenis_kendaraan']").val(jenis_kendaraan);
		$("#form_input").prop("action",url);
	}

	function tutup_mod(id){
        $("#"+id).modal("hide");
    }
</script>




    