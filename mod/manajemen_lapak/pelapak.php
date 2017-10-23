<section class="content bg-white">
 	<div class="box box-default color-palette-box">
    <div class="box-header with-border">
      <div class="pull-left">
      	<button class="btn btn-primary " onclick="tampil_input_pl();">Input Baru</button> 
      </div>
      <div class="pull-right" style="padding-left:5px;">
		  <h3 style="margin:0;">
       		Input Pelapak
      </h3>
	  </div>
    </div>
    <div class="box-body" style="padding:25px;">
         
      	<div id="tampil_data" style="margin-top:10px;">
          	
       	</div>
    </div>
  </div>
</section>

<div class="modal fade" id="modal_input" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">

      <div class="modal-header text-center" style="background-color:#3c8dbc;">
         <i class='fa fa-edit fa-3x' style='padding:20px; border-radius:10px; background-color:#FFFFFF; color:#3c8dbc;'></i>
         <h4 class="modal-title" id="label_modal" style="margin-top:10px; color:#FFFFFF;">FORM Input Pengguna Lapak</h4>

      </div>
          <div class="modal-body">
            <form id="form_input"  method="POST" action="" >
              <div class="box-body">
                <div class='form-group'>
                    <label >Nama Pelapak </label>
                    <input type="text" name="nama"  class="form-control" placeholder='' >
                </div> 

                <div class='form-group'>
                    <label >No Hp</label>
                      <input type="text" name="no_hp"  class="form-control" placeholder='' >
                </div> 

                <div class='form-group'>
                    <label >Email</label>
                      <input type="text" name="email"  class="form-control" placeholder='' >
                </div> 

                <div class='form-group'>
                    <label >Alamat</label>
                    <textarea name="alamat"  class="form-control">
                      

                    </textarea> 
                </div> 
                <input type="hidden" readonly name="username" value="-">
                <input type="hidden" readonly name="password" value="-">
                <input type="hidden" readonly name="status_aktif" value="0">
                <input type="hidden" readonly name="level" value="2">
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
              tutup_modal('modal_input');
              load_data();
            }
            $("#btn_input").html("Simpan");
          }
      });
  });


  function load_data(){
    $.ajax({
      url : url("level_pengguna/2/0"),
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
            // url = "https://bitshop.tarsiustech.com/api/v1/edit_kendaraan/"+data.id_pengguna;
            isi += `<tr>
                  <td>`+no+`</td>
                  <td>`+data.nama+`</td>
                  <td>`+data.no_hp+`</td>
                  <td>`+data.email+`</td>
                  <td>`+data.alamat+`</td>
                  <td id='`+data.id_jenis_kendaraan+`' align='center'>
                    <i title='Perbaharui' class='fa fa-pencil bg-info text-blue' style='padding:5px; border-radius:5px; cursor:pointer' onclick="#"></i>

                    <i title='Hapus' class='fa fa-trash bg-danger text-red' style='padding:5px; border-radius:5px; cursor:pointer' onclick="hapus('`+data.id_pengguna+`')"></i>
                  </td>
                </tr>`;
          no++;
          });
          var kop_tabel = ["No","Nama","No Hp","Email","Alamat","Aksi"];
          set_tb(kop_tabel,isi,"tampil_data");

        }else{
          alert("Terjadi Kesalahan Service");
        }
      }
    });
  }

  function tampil_input_pl(){
    var action_form = url("register");
    $("#form_input").prop("action",action_form);
    $("#label_modal").html("FORM Input Pelapak");
    riset_form("form_input");
    tampil_modal("modal_input");
  }



 
</script>