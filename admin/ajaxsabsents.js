$(document).ready(function(){
	$('#date1').datepicker();
	$('#date2').datepicker();
	$('#btn_search').on('click', function(){	
		if($('#date1').val() == "" || $('#date2').val() == ""){
			alert("Please enter something on the text fields");
		}else{
			$date1 = $('#date1').val();
			$date2 = $('#date2').val();
		        $date3 = $('#date3').val();
			$('#load_data').empty();
			$loader = $('<tr ><td colspan = "4"><center>Searching Employee Absent....</center></td></tr>');
			$loader.appendTo('#load_data');
			setTimeout(function(){
				$loader.remove();
				$.ajax({
					url: 'get_absents.php',
					type: 'POST',
					data: {
						date1: $date1,
						date2: $date2,
						date3: $date3
					},
					success: function(res){
						$('#load_data').html(res);
					}
				});
			}, 3000);
		}	
	});
	
	$('#reset').on('click', function(){
		location.reload();
	});
});