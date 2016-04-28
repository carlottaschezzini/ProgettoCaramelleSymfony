$(document).ready(function () {
	$('#selectform').on('change', function (el) {
		var id = $("option:selected", this).val();
		$.ajax({
			url: '/admin/modifica/' + id
		})
		.done(function (data) {
			$('#form').html(data);
		})
	});
});