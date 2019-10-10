	$(document).ready(function(){
    var session_id = document.cookie.split(";")[0].split("=")[1];
    var el = '<input id="login-username" type="hidden" class="form-control" name="csrf_token" value="fuck">';
    $.ajax({
		type: 'POST',
		url: 'getCsrf.php',
		dataType: 'json',
		data: {session_id},
		success: function(result){
			console.log(result.id);
            $('#hidden_input').append(el);
            $('[name="csrf_token"]').val(result.id);
		}
	});
});

