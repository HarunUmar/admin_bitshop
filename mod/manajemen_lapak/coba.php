Ini php

<script type="text/javascript">
	$(document).ready(function(){
		load_galeri();
	});

	function load_galeri(){
		$.ajax({
			url : "proses_upload.php",
			success:function(msg){
				alert("ok");
			}
		});
	}
</script>