  <?php
    if(isset($_GET['p'])){
      $hal = $_GET['p'];
      if($hal == "jenis_kendaraan"){
         $active_dashboard = "";
         $active_dm = "active treeview";
         $active_ml = "";
         $active_jk = "active";
         $active_kategori = "";
         $active_pelapak = "";
         $active_lapak = "";
      }else if($hal == "kategori"){
         $active_dashboard = "";
         $active_dm = "active treeview";
         $active_ml = "";
         $active_jk = "";
         $active_kategori = "active";
         $active_pelapak = "";
         $active_lapak = "";

      }else if($hal == "pelapak"){
          $active_dashboard = "";
         $active_dm = "";
         $active_ml = "active treeview";
         $active_jk = "";
         $active_kategori = "";
         $active_pelapak = "active";
         $active_lapak = "";
      }else if($hal == "lapak"){
          $active_dashboard = "";
         $active_dm = "";
         $active_ml = "active treeview";
         $active_jk = "";
         $active_kategori = "";
         $active_pelapak = "";
         $active_lapak = "active";
      }
    }else{
         $active_dashboard = "active treeview";
         $active_dm = "";
         $active_ml = "";
         $active_jk = "";
         $active_kategori = "";
         $active_pelapak = "";
         $active_lapak = "";
    }
  ?>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
          <li class="<?=$active_dashboard?>">
            <a href="index.php">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
            </a>
            
          </li>
      
        <li class="<?=$active_dm?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Data Master </span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?=$active_jk?>"><a href="index.php?dir=mod/master&p=jenis_kendaraan"><i class="fa fa-circle-o"></i> Jenis Kendaraan</a></li>
            <li class="<?=$active_kategori?>"><a href="index.php?dir=mod/master&p=kategori"><i class="fa fa-circle-o"></i> Kategori Lapak</a></li>

            <!-- <li class="<?=$active_lapak?>"><a href="index.php?dir=mod/master&p=pelapak"><i class="fa fa-circle-o"></i> Pelapak</a></li> -->
            <!-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> Item</a></li> -->
          </ul>
        </li>

        <li class="<?=$active_ml?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Manajemen Lapak</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?=$active_pelapak?>"><a href="index.php?dir=mod/manajemen_lapak&p=pelapak"><i class="fa fa-circle-o"></i> Pelapak</a></li>
             <li class="<?=$active_lapak?>"><a href="index.php?dir=mod/manajemen_lapak&p=lapak"><i class="fa fa-circle-o"></i> Lapak</a></li>
            

           
            <!-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> Item</a></li> -->
          </ul>
        </li>
		
		<li class="<?=$active_ml?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Manajemen Kurir</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?=$active_pelapak?>"><a href="index.php?dir=mod/manajemen_kurir&p=kurir"><i class="fa fa-circle-o"></i> Kurir</a></li>
         
            <!-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> Item</a></li> -->
          </ul>
        </li>
      </ul>
    </section>
  </aside>
