function getOldest(){
	var archiveContent = $('.archiveContent');
	$.ajax({
		url: '/CS-1550-Project-1/db_connect.php',
		type: 'post',
		data: {method: 'displayOldest'},
		success: function(result){
			archiveContent.html(result);
		}
	});
}

function getNewest(){
	var archiveContent = $('.archiveContent');
	$.ajax({
		url: '/CS-1550-Project-1/db_connect.php',
		type: 'post',
		data: {method: 'displayNewest'},
		success: function(result){
			archiveContent.html(result);
		}
	});
}
