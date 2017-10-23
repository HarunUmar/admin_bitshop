<section class="content bg-white">
 	<div class="box box-default color-palette-box">
    <div class="box-header with-border">
      <div class="pull-left">
      	 <button class="btn btn-primary " onclick="tampil_mod('ket_pengguna','id_pengguna','ket_jenis_kendaraan','id_jenis_kendaraan');">Input Baru</button>
      	 <!-- <button class="btn btn-danger ">Aktifkan Kategori Yang Sudah Ada</button> -->
      </div>
      <div class="pull-right" style="padding-left:5px;">
		  <h3 style="margin:0;">
       		INPUTKurir
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
         <h4 class="modal-title" id="myModalLabel" style="margin-top:10px; color:#FFFFFF;">FORM Input Kurir</h4>

      </div>
          <div class="modal-body">
            <form id="form_inputkat"  method="POST" action="https://bitshop.tarsiustech.com/api/v1/simpan_kurir" enctype="multipart/form-data">
            
              <div class="box-body">
               
              
				<div class="editx">
				<label>Pilih Kurir</label> <label class="label label-warning" id='ket_pengguna'></label>
                    <select class="validasi form-control " style="width:100%;" id="id_pengguna" name="id_pengguna">
                        <option selected="selected" >-- Pilih Kurir --</option>
                    </select>
					  </div>
				
                
				 <div id='div-nama_kat' class='validasi form-group'>
                    <label >No Polisi</label>
                    <input type="text" name="no_polisi" validasi='required' class="form-control" placeholder='Masukan Nomor Polisi' >
                    <span id='ket-nomor_polisi' class="help-block ket-validasi"></span>
                </div> 
 
				 <div id='div-nama_kat' class='validasi form-group'>
				<label>Jenis Kendaraan</label> <label class="label label-warning" id='ket_jenis_kendaraan'></label>
                    <select class="validasi form-control " style="width:100%;" id="id_jenis_kendaraan" name="id_jenis_kendaraan">
                        <option selected="selected" >-- Jenis Kendaraan --</option>
                    </select>
					</div>
					
                <div id='div-url_icon' class='validasi form-group'>
                    <label >Gambar Kendaraan</label>
                    <input type='file'  validasi='required' name="url_foto_kendaraan" onchange='' />
                    <span id='ket-url_foto_kendaraan' class="help-block ket-validasi"></span>

                </div>
                
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
         <h4 class="modal-title" id="myModalLabel" style="margin-top:10px; color:#FFFFFF;">FORM Edit Kurir Pengurusan</h4>

      </div>
          <div class="modal-body">
            <form id="form_editkat"  method="POST" action="" enctype="multipart/form-data">
            
              <div class="box-body">
               
				
				<label>Pilih Kurir</label> <label class="label label-warning" id='edit_ket_pengguna'></label>
                    <select class="validasi form-control " style="width:100%;" id="edit_id_pengguna" name="id_pengguna">
                        <option selected="selected" >-- Pilih Kurir --</option>
                    </select>
					  
				
                
				 <div id='div-nama_kat' class='validasi form-group'>
                    <label >No Polisi</label>
                    <input type="text" name="no_polisi" validasi='required' class="form-control" placeholder='Masukan Nomor Polisi' >
                    <span id='ket-nomor_polisi' class="help-block ket-validasi"></span>
                </div> 
 
				 <div id='div-nama_kat' class='validasi form-group'>
				<label>Jenis Kendaraan</label> <label class="label label-warning" id='edit_ket_jenis_kendaraan'></label>
                    <select class="validasi form-control " style="width:100%;" id="edit_id_jenis_kendaraan" name="id_jenis_kendaraan">
                        <option selected="selected" >-- Jenis Kendaraan --</option>
                    </select>
					</div>
					
                <div id='div-url_icon' class='validasi form-group'>
                    <label >Gambar Kendaraan</label>
                    <input type='file'  validasi='required' name="url_foto_kendaraan" onchange='' />
                    <span id='ket-url_foto_kendaraan' class="help-block ket-validasi"></span>

                </div>
               
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
					alert("Berhasil Input Kurir");
					$("#form_input_jp").each(function(){this.reset();});
					tutup_mod('modal_input_kat');
					load_data();
				}else{
					alert("Gagal Input Kurir");
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
					alert("Berhasil Perbaharui Kurir");
					$("#form_editkat").each(function(){this.reset();});
					tutup_mod('modal_edit_kat');
					load_data();
				}else{
					alert("Gagal Perbaharui Kurir");
				} 
				$("#btn_edit_kat").html("Simpan");
			}
		});
	});
	function load_data(){
		$.ajax({
			url : "https://bitshop.tarsiustech.com/api/v1/get_kurir/0",
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
						url = "https://bitshop.tarsiustech.com/api/v1/edit_kurir/"+data.id_kurir;
						isi += `<tr>
									<td>`+no+`</td>
									<td>`+data.nama+`</td>
									<td>`+data.no_polisi+`</td>
									<td>`+data.jenis_kendaraan+`</td>
									<td>`+data.url_foto_kendaraan+`</td>
									
									<td id='`+data.id_kategori+`' align='center'>
										<i title='Perbaharui' class='fa fa-pencil bg-info text-blue' style='padding:5px; border-radius:5px; cursor:pointer' onclick="tampil_mod_editkat('`+data.no_polisi+`','`+data.id_pengguna+`','`+data.nama+`','`+data.id_jenis_kendaraan+`','`+data.jenis_kendaraan+`','`+url+`','edit_ket_pengguna','edit_id_pengguna','edit_ket_jenis_kendaraan','edit_id_jenis_kendaraan')"></i>

										

										<i title='Hapus' class='fa fa-trash bg-danger text-red' style='padding:5px; border-radius:5px; cursor:pointer' onclick="hapus_kat('`+data.id_kurir+`')"></i>
										<i title='Lihat Gambar' class='fa fa-image bg-success text-green' style='padding:5px; border-radius:5px; cursor:pointer' onclick="lihat_gambar('`+data.url_foto_kendaraan+`')"></i>
									</td>
								</tr>`;
					no++;
					});
					var kop_tabel = ["No","Nama Kurir","No Polisi","Jenis Kendaraan","Gambar","Aksi"];
					set_tb(kop_tabel,isi,"tampil_data");

				}else{
					alert("Terjadi Kesalahan Service");
				}
			}
		});
	
	}

	function hapus_kat(id){
	
		var konfir = confirm("Apakah Anda Yakin Untuk Menghapus Kurir ?");
		if(konfir){
			$.ajax({
				url : "https://bitshop.tarsiustech.com/api/v1/hapus_kurir/"+id,
				type:'POST',
				data: {_method: 'delete'},
				beforeSend:function(){
					 $("#"+id).addClass("bg-danger text-red").html("<i class='fa fa-spinner fa-pulse fa-fw'></i>");
				},success:function(msg){
					sukses = msg[0].success;
					// alert(sukses);
					if(sukses == 1){
						alert("Berhasil Hapus kurir");
						load_data();
					}else{
						alert("Gagal Hapus kurir");
					}
				}
			});
		}
	}

	
	 function load_pengguna(atas,bawah){
    $.ajax({
      url : "https://bitshop.tarsiustech.com/api/v1/level_pengguna/3/0",
      type : "GET",
      beforeSend:function(){
        $("#"+atas).html("<i class='fa fa-spinner fa-pulse fa-1x fa-fw'></i> Loading ..</i>");
      },
      success: function(msg){
        var sukses = msg[0].success;
        if(sukses == 1){
             var isi = '';
          $.each(msg[0].pesan, function(i, data){
            isi += `<option value='`+data.id_pengguna+`'>`+data.nama+`</option>`;
          });
          $("#"+bawah).html(isi);
        }else{
          alert("Terjadi Kesalahan Service");
        }
        $("#"+atas).html("");
      }

    });
  }
  
   function load_jenis_kendaraan(atasx,bawahx){
    $.ajax({
      url : "https://bitshop.tarsiustech.com/api/v1/get_jenis_kendaraan/0",
      type : "GET",
      beforeSend:function(){
        $("#"+atasx).html("<i class='fa fa-spinner fa-pulse fa-1x fa-fw'></i> Loading ..</i>");
      },
      success: function(msg){
        var sukses = msg[0].success;
        if(sukses == 1){
          var isi = '';
          $.each(msg[0].pesan, function(i, data){
            isi += `<option value='`+data.id_jenis_kendaraan+`'>`+data.jenis_kendaraan+`</option>`;
          });
          $("#"+bawahx).html(isi);
        }else{
          alert("Terjadi Kesalahan Service");
        }
        $("#"+atasx).html("");
      }

    });
  }



	function tampil_mod(atas,bawah,atasx,bawahx){
		$("#modal_input_kat").modal("show");
		load_pengguna(atas,bawah);
		load_jenis_kendaraan(atasx,bawahx);
	}

	function tampil_mod_editkat(no_polisi,idx,namax,idy, jenisy,url,atas,bawah,atasx,bawahx){
		$("#form_editkat").prop("action",url);
		$("input[name='no_polisi']").val(no_polisi);
		$("#modal_edit_kat").modal("show");
		$("select[name='id_pengguna']").val("dinda");
		load_pengguna(atas,bawah);
		load_jenis_kendaraan(atasx,bawahx);
	
	}
	
	function tutup_mod(id){
        $("#"+id).modal("hide");
        // reset_validasi();
    }
</script>



    