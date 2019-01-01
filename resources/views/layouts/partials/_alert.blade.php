@if(session('success'))
		<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Berhasil</span>
               	{{ session('success') }}
            	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
@endif

@if(session('info'))
	<div class="alert alert-info">
		{{ session('info') }}
	</div>
@endif

@if(session('danger'))
	<div class="alert alert-danger">
		{{ session('danger') }}
	</div>
@endif