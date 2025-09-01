		<script>var hostUrl = "assets/";</script>
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

		@if (Session::get('success'))
			<script>
				Swal.fire({
					text: "{{ Session::get('success') }}",
					icon: "success",
					buttonsStyling: false,
					confirmButtonText: "Ok, terimakasih!",
					customClass: {
						confirmButton: "btn btn-primary"
					}
				});
			</script>
		@endif

		@if (Session::get('error'))
			<script>
				Swal.fire({
					text: "{{ Session::get('error') }}",
					icon: "error",
					buttonsStyling: false,
					confirmButtonText: "Alright!",
					customClass: {
						confirmButton: "btn btn-danger"
					}
				});
			</script>
		@endif

	</body>
</html>