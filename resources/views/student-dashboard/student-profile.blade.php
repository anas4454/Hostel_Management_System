
<x-student-component.main>
	<div class="container-fluid p-4">
		<div class="card-box mb-4">
			<h5 class="mb-3">Student Profile</h5>
			<div class="row g-4">
				<div class="col-md-4 text-center ">
					{{-- <img src="/images/profile-placeholder.png" class="rounded-circle mb-3" width="120" height="120" alt="Profile Picture"> --}}
					<h6 class="mt-5">Student Name : {{$student->name}}</h6>
					<p class="text-muted mt-2">Roll No:  {{ optional($student->studentProfile)->roll_number }}</p>
				</div>
				<div class="col-md-8">
					<div class="card-box p-4">
						<h6>Personal Information</h6>
						<ul class="list">
							<li>Email: {{$student->email}}</li>
							<li>Phone:  {{ optional($student->studentProfile)->phone }}</li>
						</ul>
						<a href="{{ route('student.edit-profile') }}" class="btn btn-outline-success mt-2">Edit Profile</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-student-component.main>
