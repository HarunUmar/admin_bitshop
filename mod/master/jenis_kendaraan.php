<section class="content bg-white">
 	<div class="box box-default color-palette-box">
    <div class="box-header with-border">
      <div class="pull-left">
      	 <button class="btn btn-primary" onclick="tampil_input();">Input Baru</button>
      </div>
      <div class="pull-right" style="padding-left:5px;">
		  <h3 style="margin:0;">
       		INPUT Jenis Kendaraan
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
         <h4 class="modal-title" id="label_modal" style="margin-top:10px; color:#FFFFFF;">FORM Input Jenis Kendaraan</h4>

      </div>
          <div class="modal-body">
          
            <form id="form_input"  method="POST" action="" >
            
              <div class="box-body">
                <div class='form-group'>
                    <label >Jenis Kendaraan</label>
                    <input type="text" name="jenis_kendaraan" class="form-control" placeholder='Masukan Jenis Kendaraan' >
                    
                </div> 

                <div  class='form-group'>
                    <label >Beban Minimal</label>
                    <input type="text" name="beban_minimal"  class="form-control" placeholder='Masukan Beban Minimal' >
                   
                </div> 

                <div  class='form-group'>
                    <label >Beban Maksimal</label>
                    <input type="text" name="beban_maksimal" class="form-control" placeholder='Masukan Beban Maksimal' >
                  
                </div> 

                <div  class='form-group'>
                    <label >Status Aktif</label>
                    <select type="text" name="status_aktif" class="form-control">
                    	<option value="1">Aktif</option>
                    	<option value="0">Tidak Aktif</option>
                    	
                    </select>
                    
                </div> 

                <!-- <input type="hidden" readonly name="status_aktif" value="1"> -->
              </div>
              <div class="modal-footer" style="padding-bottom:0px;">
                  <label type="button" class="btn btn-default na" onclick="tutup_modal('modal_input');">Batal</label>
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
				 loading("tombol","btn_input");
			},
			success:function(msg){
				sukses = msg[0].success;
				alert(msg[0].pesan);
				if(sukses == 1){
					load_data();
					tutup_modal("modal_input");
				}
				$("#btn_input").html("Simpan");
			}
		});
	});
	
	function load_data(){
		$.ajax({
			url : url("get_jenis_kendaraan/0"),
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
						isi += `<tr>
									<td>`+no+`</td>
									<td>`+data.jenis_kendaraan+`</td>
									<td>`+data.beban_minimal+`</td>
									<td>`+data.beban_maksimal+`</td>
									<td id='`+data.id_jenis_kendaraan+`' align='center'>
										<i title='Perbaharui' class='fa fa-pencil bg-info text-blue' style='padding:5px; border-radius:5px; cursor:pointer' onclick="tampil_mod_edit('`+data.id_jenis_kendaraan+`','`+data.jenis_kendaraan+`','`+data.beban_minimal+`','`+data.beban_maksimal+`','`+data.status_aktif+`')"></i>

										<i title='Hapus' class='fa fa-trash bg-danger text-red' style='padding:5px; border-radius:5px; cursor:pointer' onclick="hapus('`+data.id_jenis_kendaraan+`')"></i>
									</td>
								</tr>`;
					no++;
					});
					var kop_tabel = ["No","Jenis Kendaraan","Beban Minimal","Beban Maksimal", "Aksi"];
					set_tb(kop_tabel,isi,"tampil_data");

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
				url : url("hapus_jenis_kendaraan/")+id,
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

	function tampil_input(){
		var action_form = url("simpan_jenis_kendaraan");
		$("#form_input").prop("action",action_form);
		$("#label_modal").html("FORM Input Jenis Kendaraan");
		riset_form("form_input");
		tampil_modal("modal_input");
	}

	function tampil_mod_edit(id,jenis_kendaraan,beban_minimal,beban_maksimal,status_aktif){
		riset_form("form_input");
		var action_form = url("edit_jenis_kendaraan/"+id);
		$("#form_input").prop("action",action_form);
		$("#label_modal").html("FORM Edit Jenis Kendaraan");
		$("input[name='jenis_kendaraan']").val(jenis_kendaraan);
		$("input[name='beban_minimal']").val(beban_minimal);
		$("input[name='beban_maksimal']").val(beban_maksimal);
		$("select[name='status_aktif']").val(status_aktif);
		tampil_modal("modal_input");
	}

	
	
</script>




    