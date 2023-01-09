<!DOCTYPE html>
<html>
<style>
	.hide {
		display: none;
	}
</style>

<body>

	<select name="data_nomor" id="data_nomor" class="form-control">
		<option value="">Pilih</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	</select>

	<br>
	<div id="nomor1" class="hide">
		<input id="nomor1" placeholder="nomor 1" required />
	</div>

	<div id="nomor2" class="hide">
		<input id="nomor2" placeholder="nomor 2" required />
	</div>

	<div id="nomor3" class="hide">
		<input id="nomor3" placeholder="nomor 3" required />
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<script>

		$(document).ready(function(){
			$('#data_nomor').change(function(){
				var nomor=$(this).val();

				if (nomor == 1) {

					document.getElementById('nomor1').style.display = "block";
					document.getElementById('nomor2').style.display = "none";
					document.getElementById('nomor3').style.display = "none";

				} else if (nomor == 2) {
					document.getElementById('nomor1').style.display = "none";
					document.getElementById('nomor2').style.display = "block";
					document.getElementById('nomor3').style.display = "none";
					
				} else if (nomor == 3 ) {

					document.getElementById('nomor1').style.display = "none";
					document.getElementById('nomor2').style.display = "none";
					document.getElementById('nomor3').style.display = "block";
				} else if (!nomor) {

					document.getElementById('nomor1').style.display = "none";
					document.getElementById('nomor2').style.display = "none";
					document.getElementById('nomor3').style.display = "none";	
				}

			});
		});
// window.addEventListener("load", () => { // when the page loads
// 	document.getElementById("data_nomor").addEventListener("change", function() {
// 		var id =  $('#data_nomor').val(); 
// 		alert(id);
// 	});
// });
</script>

</body>
</html>
