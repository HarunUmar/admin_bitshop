<body class="bg-gray">
  <div class="login-box"  style="margin-top:10%;">
      <div class="login-box-body">
          <div class="row" >
              <div class='col-md-12'>
                  <center><img src="dist/img/logo bitshop.png" class="img-responsive" alt="Responsive image"  style="height:150px;"></center>
              </div>
          </div>

          <div class="row" style="margin-top:10px; margin-bottom:10px;">
              <div class='col-md-12 text-center'>
                  Masukan Email Dan Pasword Anda
              </div>
          </div>

          <div class="row">
              <div class="col-md-12">
                  <form id= "form_login" action="config/proses_login.php?op=login" method="post">
                      <div class="form-group has-feedback">
                          <input type="email" name='email' class="form-control" placeholder="Email">
                          <span class="form-control-feedback" style='margin-top:3px;'><i class="fa fa-user  fa-2x"></i></span>
                      </div>
                      <div class="form-group has-feedback">
                          <input type="password" name='password' class="form-control" placeholder="Password">
                          <span class="form-control-feedback" style='margin-top:3px;'><i class="fa fa-lock  fa-2x"></i></span>
                      </div>
                      <div class="row">
                          <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-block btn-flat" style="background-color:#3c8dbc; color:#FFFFFF" id="btn_login">Masuk</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>

          <!-- <div class="row" style="margin-top:10px; ">
              <div class="col-md-12 text-center">
                    -- Atau --
              </div>
          </div>
 -->
          <!-- <div class="row">
              <div class="col-md-12 text-center" style="margin-top:5px;">
                   Lupa Password <label style="color:#00BF9A;">Login</label> ?
              </div>
          </div>
      
          <div class="row" style="">
              <div class="col-md-12 text-center">
                   Daftar <span class="label label-warning" style='cursor:pointer;' data-toggle="modal" data-target="#myModal">Di sini</span>
              </div>
          </div> -->
      </div>
  </div>
</body>



<script type="text/javascript">
    $(document).ready(function(){

        $("#form_login").ajaxForm({
            beforeSend:function(){
              $("#btn_login").html("<i class='fa fa-spinner fa-pulse fa-fw' style='color: #FFFFFF;'></i> Loading");
            },success:function(msg){
              // alert(msg);
               if(msg == "sukses"){
                 location.reload();
               }else{
                  alert("User Tidak Ditemukan");
               }
               $("#btn_login").html("Masuk");
            }
        });

    }); 
</script>