@if(Session::has('flash_message'))
<script type="text/javascript">
swal({
  type: 'success',
  title: "",
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif

@if(Session::has('error_message'))
<script type="text/javascript">
	swal({
		title: "{{ Session::get('error_message') }}",
		text: "This message will be closed at 5 sec.",
		type: "warning",
		timer: 5000,
		showConfirmButton: true
	});
</script>
@endif


<script type="text/javascript">

function confirmDelete(item){
	event.preventDefault();
	return swalDelete($(item));
}

function confirmChangeStatus(item){
	event.preventDefault();
	return swalChangeStatus($(item));
}

function confirmReject(item){
	event.preventDefault();
	return swalReject($(item));
}

function swalDelete(item){
	var href = item.attr('href');
		return swal({
			title: (item.attr('data-message') ? item.attr('data-message') : 'Are you sure ?'),
			text: "",
			type: "warning",
			showCancelButton: true,
			cancelButtonText: "No",
			confirmButtonClass: "btn-danger",
			confirmButtonColor: '#d73925',
			confirmButtonText: "Yes",
			closeOnConfirm: true,
			closeOnCancel: false
		},
			function(isConfirm) {
			  if (isConfirm) {
						//window.location.href = href;
						$('#delete-item').attr('action',href).submit();

						
			  } else {
					swal({
						title: "Failed to delete!",
						text: "Your data is safe.",
						type: "error",
						timer: 2000,
						showConfirmButton: false
					});
			  }
			});
}

function swalChangeStatus(item){
	var href = item.attr('href');
		return swal({
			title: (item.attr('data-message') ? item.attr('data-message') : 'Are you sure ?'),
			text: "",
			type: "warning",
			showCancelButton: true,
			cancelButtonText: "No",
			confirmButtonClass: "btn-danger",
			confirmButtonColor: '#d73925',
			confirmButtonText: "Yes",
			closeOnConfirm: true,
			closeOnCancel: false
		},
			function(isConfirm) {
			  if (isConfirm) {
						//window.location.href = href;
						$('#change-status-item').attr('action',href).submit();

						
			  } else {
					swal({
						title: "Failed to change status!",
						text: "the status is same.",
						type: "error",
						timer: 2000,
						showConfirmButton: false
					});
			  }
			});
}




</script>