@extends('layouts.app')

@section('title', 'Home')

@section('content')
	<div class="welcome text-center py-5">
		<p>Welcome!</p>
	</div>

	<div class="container py-5">
		<div class="card shadow-sm">
			<div class="card-body identitas">
				<p>Anggota Kelompok B03:</p>
				<div class="container">
					<div class="row row-cols-1 row-cols-md-2 g-3">
						<div class="col">
							<a href="https://github.com/Jafkrim" class="card h-100 text-decoration-none text-dark">
								<div class="card-body d-flex align-items-center gap-3">
									<i class="bi bi-github" aria-hidden="true"></i>
									<p class="mb-0">Ja'far Balyan Al Karim - 5025241040</p>
								</div>
							</a>
						</div>
						<div class="col">
							<a href="https://github.com/Haaqill" class="card h-100 text-decoration-none text-dark">
								<div class="card-body d-flex align-items-center gap-3">
									<i class="bi bi-github" aria-hidden="true"></i>
									<p class="mb-0">Hanif Aqil Janardana - 5025241111</p>
								</div>
							</a>
						</div>
						<div class="col">
							<a href="https://github.com/miegorengkuda" class="card h-100 text-decoration-none text-dark">
								<div class="card-body d-flex align-items-center gap-3">
									<i class="bi bi-github" aria-hidden="true"></i>
									<p class="mb-0">Dafa Kumara Sahasika - 5025241112</p>
								</div>
							</a>
						</div>
						<div class="col">
							<a href="https://github.com/632ahnayor" class="card h-100 text-decoration-none text-dark">
								<div class="card-body d-flex align-items-center gap-3">
									<i class="bi bi-github" aria-hidden="true"></i>
									<p class="mb-0">Royan Habibi Alfatih - 5025241115</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
