<!-- input lapak -->
<section class="content bg-white" id="conten_lapak">
 	<div class="box box-default color-palette-box">
    <div class="box-header with-border">
      <div class="pull-left">
      	<button class="btn btn-primary " onclick="tampil_mod_input();">Input Baru</button> 
      </div>
      <div class="pull-right" style="padding-left:5px;">
  		  <h3 style="margin:0;">
         		Input Lapak
        </h3>
	    </div>
    </div>
   
    <div class="box-body" style="padding:25px;">
     
    	<div id="tampil_data_lapak" style="margin-top:10px;">
        	
     	</div>
    </div>
  </div>
</section>
<!-- /input lapak -->


<!-- input item -->
<section class="content bg-white" hidden id="conten_tambah_item">
  <div class="box box-default color-palette-box">
     <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('dist/img/photo1.png') center center;">
              <h3 class="widget-user-username" id="nama_lapak"><i class="fa fa-refresh fa-spin"></i></h3>
              <h5 class="widget-user-desc" id="nama_ceo"><i class="fa fa-refresh fa-spin"></i></h5>
              <button class="btn btn-sm btn-danger" onclick="kembali_lapak()">Kembali</button>
              <button class="btn btn-sm btn-primary" onclick="tampil_mod_input_item()">Tambah Item</button>
            </div>
           <!--  <div class="widget-user-image">
              <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Avatar">

            </div> -->
        
          </div>
   
    <div class="box-body" style="padding:25px;">
      <div id="tampil_data_item" style="margin-top:10px;">
          
      </div>
    </div>
  </div>
</section>
<!-- /input item -->

              

<!-- modal input lapak -->
<div class="modal fade bs-example-modal-lg" id="modal_input" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content">

      <div class="modal-header text-center" style="background-color:#3c8dbc;">
         <i class='fa fa-edit fa-3x' style='padding:20px; border-radius:10px; background-color:#FFFFFF; color:#3c8dbc;'></i>
         <h4 class="modal-title" id="label_modal" style="margin-top:10px; color:#FFFFFF;">FORM Input Lapak</h4>

      </div>
          <div class="modal-body">
            <form id="form_input"  method="POST" action="" >
              <div class="box-body">
               
                <div class="row">
                  <div class="col-md-6" style="border:0px solid;">
                     <div class='form-group' >
                          <label >Pilih Pelapak</label> <label class="label label-warning" id='ket_nl'> aa</label>
                          <select class="form-control select_modal" style="width: 100%;" id="pelapak" name="id_pengguna">
                            <option selected="selected">-- Pilih Pelapak --</option>
                           
                          </select>
                      </div> 

                      <div class='form-group'>
                          <label >Nama Lapak</label> 
                          <input type="text" name="nama_lapak"  class="form-control" placeholder='' >
                      </div> 

                      <div class="form-group">
                        <label>Jam Buka</label>

                        <div class="input-group">
                          <input type="text" name='jam_buka' class="form-control" data-inputmask='"mask": "99:99:00"' data-mask>
                          <div class="input-group-addon">
                            <i class="fa fa-clock-o text-green"></i>
                          </div>
                        </div>
                        
                      </div>

                      <div class="form-group">
                        <label>Jam Tutup</label>

                        <div class="input-group">
                          <input type="text" name='jam_tutup' class="form-control" data-inputmask='"mask": "99:99:00"' data-mask>
                          <div class="input-group-addon">
                            <i class="fa fa-clock-o text-red"></i>
                          </div>
                        </div>
                        
                      </div>

                      <div class='form-group'>
                          <label >Deskripsi Lapak</label>
                          <textarea name="deskripsi_lapak"  class="form-control">
                          </textarea> 
                      </div> 

                      <div class='form-group'>
                          <label >Status Aktif</label>
                          <select name="status_lapak" class="form-control" >
                              <option value="1">Aktif</option>
                              <option value="0">Tidak Aktif</option>
                          </select>
                      </div>   
                  </div>

                  <div class="col-md-6" style="border:0px solid;">
                     <div class='form-group' >
                          <label >Lokasi Lapak</label>
                          <div style="border:1px solid #DDD; height:182px;" id="map">
                         
                          
                          </div>
                      </div> 

                      <div class='form-group' >
                        <label >Latitude</label>
                        <input type="text" name="lti_lapak"  id="latitude" class="form-control" placeholder='' >
                      </div>

                      <div class='form-group' >
                          <label >Longitude</label>
                          <input type="text" name="lng_lapak" id="longitude" class="form-control" placeholder='' >
                      </div>

                      

                      <div class='form-group'>
                          <label >Alamat Detail</label>
                          <textarea name="alamat_detail_lapak"  class="form-control">
                          </textarea> 
                      </div> 

                  </div>
                </div>
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
<!-- /modal input lapak -->

<!-- modal input item -->
<div class="modal fade " id="modal_input_item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog " role="document" >
    <div class="modal-content">

      <div class="modal-header text-center" style="background-color:#3c8dbc;">
         <i class='fa fa-image fa-3x' style='padding:20px; border-radius:10px; background-color:#FFFFFF; color:#3c8dbc;'></i>
         <h4 class="modal-title" id="label_modal_item" style="margin-top:10px; color:#FFFFFF;">Input Item</h4>

      </div>
          <div class="modal-body">
              <div class="box-body">
                <form id="form_input_item"  method="POST" action="">
                  <div class="form-group">
                    <input name="id_lapak" readonly="readonly" hidden>
                    <label>Pilih Kategori</label> <label class="label label-warning" id='ket_kategori'></label>
                      <select class="form-control " style="width:100%;" id="kategori" name="id_kategori">
                        <option selected="selected" >-- Pilih Kategori --</option>
                        
                      </select>
                  </div>

                  <div class="form-group">
                    <label>Nama Item</label>
                    <input name="nama_item" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Berat Item</label>
                    <input name="berat_item" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Harga</label>
                    <input name="harga" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Diskon</label>
                    <input name="diskon" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Label</label>
                    <input name="label" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Deskripsi Item</label>
                    <textarea name="ket_diskon" class="form-control"></textarea> 
                  </div>

                  <div class="form-group">
                    <label>Status Aktif</label>
                    <select name='status_aktif' class="form-control">
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                  </div>
              </div>
              <div class="modal-footer" style="padding-bottom:0px;">
                  <label type="button" class="btn btn-default na" onclick="tutup_modal('modal_input_item')">Tutup</label>
                  <button type="submit" class="btn na" id="btn_input_item" style="background-color:#3c8dbc; color:white;"  >Simpan</button>
              </div>
            </form>
          </div>
    </div>
  </div>
</div>
<!-- /modal input item -->

<!-- modal input galeri -->
<div class="modal fade " id="modal_galeri" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog " role="document" >
    <div class="modal-content">

      <div class="modal-header text-center" style="background-color:#3c8dbc;">
         <i class='fa fa-image fa-3x' style='padding:20px; border-radius:10px; background-color:#FFFFFF; color:#3c8dbc;'></i>
         <h4 class="modal-title" id="myModalLabel" style="margin-top:10px; color:#FFFFFF;">Galeri Item</h4>
      </div>
          <div class="modal-body">
            
              <div class="box-body">
                <form id="form_input_galeri"  method="POST" action="" enctype="multipart/form-data" >
                  <div class="row">
                     <div class="col-md-7">
                        <div class="form-group">
                          <input name="id_item" hidden readonly="readonly" >
                          <label>Pilih File</label>
                          <input type="file" name="url_gambar"  class="form-control" placeholder='' >
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                          <label>Tampil Utama ?</label> <br/>
                          <input type="radio" value="1" name='tampil_utama'> YA  <input type="radio" value="0" name='tampil_utama'> TDK
                        </div>
                     </div>
                  </div>  
                  <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn na " id="btn_input_galeri" style="background-color:#3c8dbc; color:white; width:100%; border-radius:0px; ">Upload</button>
                     </div>
                  </div>
                </form>
                <div style="margin-top:0px;" id="div_galeri" >
                    <center><i class="fa fa-refresh fa-spin"></i></center>
                </div>
              </div>
              <div class="modal-footer" style="padding-bottom:0px;">
                  <label type="button" class="btn btn-default na" onclick="tutup_modal('modal_galeri');">Tutup</label>
                  
              </div>
            <!-- </form> -->
          </div>
    </div>
  </div>
</div>
<!-- /modal input lapak -->


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVnNu2GiqjJpw9Oj-W-XQe-gh1FZxsYnI&callback=initMap" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
 
    load_data();
    load_pelapak();
    load_map();
   
    $("#form_input").ajaxForm({
      beforeSend:function(){

         loading("tombol","btn_input");
      },
      success:function(msg){
        alert(msg[0].pesan);
        sukses = msg[0].success;
        if(sukses == 1){
          tutup_modal('modal_input');
          load_data();
        }
        $("#btn_input").html("Simpan");
      }
    });

    $("#form_input_item").ajaxForm({
      beforeSend:function(){
         // var action = $("#form_input_item").prop("action");
         // // alert(action);
         loading("tombol","btn_input_item");
      },
      success:function(msg){
        alert(msg[0].pesan);
        sukses = msg[0].success;
        var id_lapak = $("input[name='id_lapak']").val();
        if(sukses == 1){
          // $("#form_input_item").each(function(){this.reset();});
          tutup_modal('modal_input_item');
          load_data_item(id_lapak);
        }
        $("#btn_input_item").html("Simpan");
      }
    });

    $("#form_input_galeri").ajaxForm({
        beforeSend:function(){
           $("#btn_input_galeri").html("<i class='fa fa-spinner fa-pulse fa-fw' style='color: #FFFFFF;'></i> Loading");
        },
        success:function(msg){
          alert(msg[0].pesan);
          sukses = msg[0].success;
          var id_item = $("input[name='id_item']").val();
          if(sukses == 1){
            $("input[name='url_gambar']").val("");
            load_data_gambar(id_item);
          }
          $("#btn_input_galeri").html("Upload");
        }
    });
  });
  
  //-------------------------------------------- Input lapak -----------------------------//
  function load_map(){
    //* Fungsi untuk mendapatkan nilai latitude longitude
    function updateMarkerPosition(latLng) {
      document.getElementById('latitude').value = [latLng.lat()]
      document.getElementById('longitude').value = [latLng.lng()]
    }
      
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: new google.maps.LatLng(1.4202082,125.0906916),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
  
    var latLng = new google.maps.LatLng(1.4202082,125.0906916);

    /* buat marker yang bisa di drag lalu 
      panggil fungsi updateMarkerPosition(latLng)
     dan letakan posisi terakhir di id=latitude dan id=longitude
     */
    var marker = new google.maps.Marker({
      position : latLng,
      title : 'lokasi',
      map : map,
      draggable : true
    });
  
    updateMarkerPosition(latLng);
    google.maps.event.addListener(marker, 'drag', function() {
        updateMarkerPosition(marker.getPosition());
      });
  }
 
  
  function load_data(){
    $.ajax({
      url : url("get_lapak/0"),
      type : "GET",
      beforeSend:function(){
        loading("bodi","tampil_data_lapak");
      },
      success: function(msg){
        var sukses = msg[0].success;
        if(sukses == 1){
          no = 1;
          isi = "";
          jum_data = msg[0].success.length;
          $.each(msg[0].pesan, function(i, data){
       
            isi += `<tr>
                  <td>`+no+`</td>
                  <td>`+data.nama+`</td>
                  <td>`+data.nama_lapak+`</td>
                  <td>`+data.jam_buka+`</td>
                  <td>`+data.jam_tutup+`</td>
                  <td id='`+data.id_lapak+`' align='center'>
                    <i title='Perbaharui' class='fa fa-pencil bg-info text-blue' style='padding:5px; border-radius:5px; cursor:pointer' onclick="tampil_mod_edit_lapak('`+data.id_lapak+`')"></i>

                    <i title='Hapus' class='fa fa-trash bg-danger text-red' style='padding:5px; border-radius:5px; cursor:pointer' onclick="hapus('`+data.id_lapak+`')"></i>

                    <i title='tambah_item' class='fa fa-cogs bg-success text-green' style='padding:5px; border-radius:5px; cursor:pointer' onclick="tampil_tambah_item('`+data.id_lapak+`','`+data.nama_lapak+`','`+data.nama+`')"></i>
                  </td>
                </tr>`;
          no++;
          });
          var kop_tabel = ["No","Pelapak","Nama Lapak","Jam Buka","Jam Tutup", "Aksi"];
          set_tb(kop_tabel,isi,"tampil_data_lapak");

        }else{
          alert("Terjadi Kesalahan Service");
        }
      }
    });
  }

  function load_pelapak(){
    $.ajax({
      url : url("level_pengguna/2/0"),
      type : "GET",
      beforeSend:function(){
        loading("select","ket_nl","Sedang Memepersiapkan Data Lapak");

      },
      success: function(msg){
        var sukses = msg[0].success;
        if(sukses == 1){  
          var isi = `<option value='' selected='selected' >-- Pilih Pelapak --</option>`;
          $.each(msg[0].pesan, function(i, data){
            isi += `<option value='`+data.id_pengguna+`'>`+data.nama+`</option>`;
          });
           set_select2(isi,"pelapak","modal_input");
        }else{
          alert("Terjadi Kesalahan Service");
        }
        $("#ket_nl").html("");
      }

    });
  }

  function hapus(id){
    var konfir = confirm("Apakah Anda Yakin Untuk Menghapus Lapak ?");
    if(konfir){
      $.ajax({
        url : url("hapus_lapak/"+id),
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

  function tampil_mod_input(){
    var action_form = url("simpan_lapak");
    $("#form_input").prop("action",action_form);
    $("#label_modal").html("FORM Input Lapak");
    riset_form("form_input");
    load_pelapak();
    tampil_modal("modal_input");
  }

  function tampil_mod_edit_lapak(id_lapak){
    riset_form("form_input");
    var action_form = url("edit_lapak/"+id_lapak);
    $("#form_input").prop("action",action_form);
    $("#label_modal").html("FORM Edit Lapak");
    $.ajax({
        url : url("detail_lapak/"+id_lapak),
        type : "GET",
        success:function(msg){
          sukses = msg[0].success;
          pesan = msg[0].pesan;
          $("select[name='id_pengguna']").val(pesan.id_pengguna).trigger("change");
          $("input[name='nama_lapak']").val(pesan.nama_lapak);
          $("input[name='jam_buka']").val(pesan.jam_buka);
          $("input[name='jam_tutup']").val(pesan.jam_tutup);
          $("textarea[name='deskripsi_lapak']").val(pesan.deskripsi_lapak);
          $("input[name='status_lapak']").val(pesan.status_lapak);
          $("input[name='lti_lapak']").val(pesan.lti_lapak);
          $("input[name='lng_lapak']").val(pesan.lng_lapak);
          $("textarea[name='alamat_detail_lapak']").val(pesan.alamat_detail_lapak);
          tampil_modal("modal_input");
        }
    });
  }

 

  // -------------------------------------------- ITEM --------------------------------//

  function tampil_tambah_item(id_lapak,nama_lapak,nama_ceo){
    // alert(id_lapak+" "+nama_lapak+" "+nama_ceo);
    $("#nama_lapak").html(nama_lapak);
    $("#nama_ceo").html(nama_ceo);
    $("#conten_lapak").slideUp();
    $("#conten_tambah_item").slideDown();
    $("input[name='id_lapak']").val(id_lapak);
    load_data_item(id_lapak);
    load_kategori();
  }

  function load_kategori(){
    $.ajax({
      url : url("get_kategori/0"),
      type : "GET",
      beforeSend:function(){
        loading("select","ket_kategori","Sedang Memepersiapkan Data Kategori");
      },
      success: function(msg){
        var sukses = msg[0].success;
        if(sukses == 1){
          var isi = `<option value='' selected='selected' >-- Pilih Kategori --</option>
                     `;
          $.each(msg[0].pesan, function(i, data){
            isi += `<option value='`+data.id_kategori+`'>`+data.nama_kategori+`</option>`;
          });
          set_select2(isi,"kategori","modal_input_item");

        }else{
          alert("Terjadi Kesalahan Service");
        }
        $("#ket_kategori").html("");
      }

    });
  }

  function kembali_lapak(){
    $("#conten_tambah_item").hide();
    $("#conten_lapak").slideDown();
    
  }

 
  function load_data_item(id_lapak){
    $.ajax({
      url : url("get_item_lapak/0/"+id_lapak),
      type : "GET",
      beforeSend:function(){
        loading("bodi","tampil_data_item");
      },
      success: function(msg){
        var sukses = msg[0].success;
        // alert(sukses);
        if(sukses == 1){
          no = 1;
          isi = "";
          jum_data = msg[0].pesan.length;
          $.each(msg[0].pesan, function(i, data){
            isi += `<tr>
                  <td>`+no+`</td>
                  <td>`+data.nama_item+`</td>
                  <td>`+data.berat_item+`</td>
                  <td>`+data.harga+`</td>
                  <td id='`+data.id_item+`' align='center' style='width:100px;'>
                    <i title='Perbaharui' class='fa fa-pencil bg-info text-blue' style='padding:5px; border-radius:5px; cursor:pointer' onclick="tampil_edit_item('`+data.id_item+`');"></i>

                    <i title='Hapus' class='fa fa-trash bg-danger text-red' style='padding:5px; border-radius:5px; cursor:pointer' onclick="hapus_item('`+data.id_item+`','`+data.id_lapak+`')"></i>

                    <i title='Gambar Item' class='fa fa-image bg-success text-green' style='padding:5px; border-radius:5px; cursor:pointer' onclick="tampil_galeri('`+data.id_item+`')"></i>

                   
                  </td>
                </tr>`;
            no++;
          });
          var kop_tabel = ["No","Item","Berat Item","Harga","Aksi"];
          set_tb(kop_tabel,isi,"tampil_data_item");
        }else{
          alert("Terjadi Kesalahan Service");
        }
      }
    });
  }

  function tampil_mod_input_item(){
    var id_lapak = $("input[name='id_lapak']").val();
    var action_form = url("simpan_item");
    $("#form_input_item").prop("action",action_form);
    $("#label_modal_item").html("FORM Input Item");
    riset_form("form_input_item");
    load_kategori();
    $("input[name='id_lapak']").val(id_lapak);
    tampil_modal("modal_input_item");
  }

  function tampil_edit_item(id_item){
    alert(id_item);
     var action_form = url("edit_item/"+id_item);
     $("#form_input_item").prop("action",action_form);
     $("#label_modal_item").html("FORM Edit Item");
     $.ajax({
        url : url("detail_item/"+id_item),
        type : "GET",
        success:function(msg){
          sukses = msg[0].success;
          pesan = msg[0].pesan[0];
          
          $("select[name='id_kategori']").val(pesan.id_kategori).trigger("change");
          $("input[name='nama_item']").val(pesan.nama_item);
          $("input[name='berat_item']").val(pesan.berat_item);
          $("input[name='harga']").val(pesan.harga);
          $("input[name='diskon']").val(pesan.diskon);
          $("input[name='label']").val(pesan.label);
          $("textarea[name='ket_diskon']").val(pesan.ket_diskon);
          $("select[name='status_aktif']").val(pesan.status_aktif);
          tampil_modal("modal_input_item");
        }
    });
    


  }

   function hapus_item(id,id_lapak){
    var konfir = confirm("Apakah Anda Yakin Untuk Menghapus Item ?");
    if(konfir){
      $.ajax({
        url : url("hapus_item/"+id),
        type:'POST',
        data: {_method: 'delete'},
        beforeSend:function(){
           $("#"+id).addClass("bg-danger text-red").html("<i class='fa fa-spinner fa-pulse fa-fw'></i>");
        },success:function(msg){
          sukses = msg[0].success;
          alert(msg[0].pesan);
          if(sukses == 1){
            load_data_item(id_lapak);
          }
        }
      });
    }
  }

  // -------------------------------------------- Gambar Item ----------------------- //
  function tampil_galeri(id){
    $("#form_input_galeri").prop("action","https://bitshop.tarsiustech.com/api/v1/simpan_gambar/"+id);
    $("input[name='id_item']").val(id);
    load_data_gambar(id);
    tampil_modal("modal_galeri");
  }

  function load_data_gambar(id){
    $.ajax({
       url : "https://bitshop.tarsiustech.com/api/v1/get_gambar/"+id,
       type :"GET",
       beforeSend:function(){
          $("#div_galeri").html("<div class='text-center ' style='padding:80px;'><i class='fa fa-spinner fa-pulse fa-4x fa-fw text-red'></i> <br/> <i class='fa bg-danger text-red' style='padding:5px;  margin-top:5px;'>Sedang Memepersiapkan Gambar ..</i></div>");
       },
       success:function(msg){
          tampung = msg[0].pesan;
          buka_baris = `<div class='row' style='margin-top:10px;'>`;
          tutup_baris = `</div>`;
          no=1;
          awal = 1;
          batas = 3;
          jum_col = 3;
          jum_data = tampung.length;


          isi = "";
          if(jum_data > 0){

            $.each(msg[0].pesan, function(i, data){
              if(no == awal){
                isi += buka_baris;
              }
           
              if(no <= batas){
                isi += `<div class="col-md-4 ">
                          <div style='border:1px solid #DDD; padding:10px;'>
                            <center>
                              <img src="https://bitshop.tarsiustech.com/images/images-400/`+data.url_gambar+`"  class="img-responsive" >

                            </center>
                            <div style='margin-top:5px;' id='`+data.id_gambar_item+`'>
                               <center><button class='btn btn-primary btn-sm' style='border-radius:0px;'>Perbaharui</button><button class='btn btn-danger btn-sm' style='border-radius:0px;' onclick="hapus_gambar('`+data.id_gambar_item+`','`+data.id_item+`')">Hapus</button></center>
                            </div>
                            
                          </div>
                        </div>`;

                if( (no <= batas && no == jum_data) || (no == batas && no < jum_data)){
                    isi += tutup_baris;
                }

                if(no == batas && no < jum_data){
                   awal+=jum_col;
                   batas+=jum_col;
                }
              }
              no++;
            });
          }else{
            isi += `<center><label class='label label-warning'>Belum Ada Gambar Yang Diupload</label></center>`;
          }

          $("#div_galeri").html(isi);
       }
    });
  }

  function hapus_gambar(id_gambar,id_item){
    // alert(id_gambar+" "+id_item);
    var konfir = confirm("Apakah Anda Yakin Untuk Menghapus Gambar ?");
    if(konfir){
       $.ajax({
          url : "https://bitshop.tarsiustech.com/api/v1/hapus_gambar/"+id_gambar,
          type : "POST",
          data: {_method: 'delete'},
          beforeSend:function(){
            $("#"+id_gambar).addClass("bg-danger text-red").html("<center><i class='fa fa-spinner fa-pulse fa-fw'></i></center>");
          },success:function(msg){
            alert(msg[0].pesan);
            sukses = msg[0].success;
            if(sukses > 0){
              load_data_gambar(id_item);
            }
          }
       });

    } 
  }

</script>