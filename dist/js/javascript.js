function url(nama_funct){
	var url_service = "https://bitshop.tarsiustech.com/api/v1/"+nama_funct;
	return(url_service);
}

function tampil_modal(id){
    $("#"+id).modal("show");
}

function tutup_modal(id){
	$("#"+id).modal("hide");
}

function riset_form(id){
	$("#"+id)[0].reset();
}

 function lihat_gambar(gambar){
 	var url_gambar = "https://bitshop.tarsiustech.com/images/images-700/"+gambar;
 	// alert(gambar);
    // alert(pisah[1]);
    $("#menu").hide();  
    var viewer = ImageViewer();
    var highResolutionImage = url_gambar;
    viewer.show(highResolutionImage);
  }

function set_tb(kop_tabel,isi_tabel,id){
	data_tampil = `<table  class='table datatabel table-bordered table-striped'>
				   <thead>
				   <tr>`;
	$.each(kop_tabel, function(i, data){
		data_tampil += `<td>`+data+`</td>`;
	});
	data_tampil += `</tr>
					</thead>
					<tbody>
					 	`+isi_tabel+`
					</tbody>
					</table>`;
	
	$("#"+id).html(data_tampil);
	$('.datatabel').dataTable();
}

function loading(opsi,id,msg){
	var tampil_loading;
	if(opsi == "bodi"){
		tampil_loading = "<div class='text-center ' style='padding:80px;'><i class='fa fa-spinner fa-pulse fa-4x fa-fw text-red'></i> <br/> <i class='fa bg-danger text-red' style='padding:5px;  margin-top:5px;'>Sedang Memepersiapkan Data ..</i></div>";

	}else if(opsi == "tombol"){
		tampil_loading = "<i class='fa fa-spinner fa-pulse fa-fw' style='color: #FFFFFF;'></i> Loading";
	}else if(opsi == "select"){
		tampil_loading = "<i class='fa fa-spinner fa-pulse fa-1x fa-fw'></i> "+msg+"</i>";
	}
	$("#"+id).html(tampil_loading);
}

function tidak_ada_data(id,isi){
	$("#"+id).html("<div class='text-center ' style='padding:80px;'><i class='fa fa-hand-stop-o fa-4x fa-fw text-red'></i> <br/> <i class='fa bg-danger text-red' style='padding:5px;  margin-top:5px;'>"+isi+"</i></div>");
}

function set_select2(isi,id_select,id_modal){
	$("#"+id_select).select2({dropdownParent:$("#"+id_modal)});
    $("#"+id_select).html(isi);
}




