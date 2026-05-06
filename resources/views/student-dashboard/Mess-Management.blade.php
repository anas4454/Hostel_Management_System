{{--
<x-student-component.main>
	<div class="container-fluid p-4">
		<div class="card-box mb-4">
			<h5 class="mb-3">Mess Management</h5>
			<div class="row g-4">
				<div class="col-md-6">
					<div class="card-box p-4">
						<h6>Today's Menu</h6>
						<ul class="list">
							<li>Breakfast: Paratha & Omelette</li>
							<li>Lunch: Rice & Chicken Curry</li>
							<li>Dinner: Daal & Roti</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card-box p-4">
						<h6>Mess Feedback</h6>
						<button class="btn btn-outline-success mt-2">Submit Feedback</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-student-component.main> --}}


<x-student-component.main>

<div class="container-fluid p-4">

    <div class="card-box">
        <h5 class="mb-3">Weekly Mess Menu</h5>

        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Day</th>
                        <th>Breakfast</th>
                        <th>Lunch</th>
                        <th>Dinner</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><strong>Monday</strong></td>
                        <td>Paratha + Egg + Tea</td>
                        <td>Chicken Curry + Roti + Salad</td>
                        <td>Daal + Rice + Pickle</td>
                    </tr>

                    <tr>
                        <td><strong>Tuesday</strong></td>
                        <td>Bread + Jam + Tea</td>
                        <td>Beef Curry + Roti</td>
                        <td>Vegetable + Rice</td>
                    </tr>

                    <tr>
                        <td><strong>Wednesday</strong></td>
                        <td>Omelette + Paratha + Tea</td>
                        <td>Chicken Biryani</td>
                        <td>Daal + Roti</td>
                    </tr>

                    <tr>
                        <td><strong>Thursday</strong></td>
                        <td>Chana + Paratha + Tea</td>
                        <td>Chicken Karahi + Roti</td>
                        <td>Rice + Yogurt</td>
                    </tr>

                    <tr>
                        <td><strong>Friday</strong></td>
                        <td>Bread + Butter + Tea</td>
                        <td>Pulao + Raita</td>
                        <td>Chicken Curry + Roti</td>
                    </tr>

                    <tr>
                        <td><strong>Saturday</strong></td>
                        <td>Halwa + Puri + Tea</td>
                        <td>Beef Biryani</td>
                        <td>Daal + Rice</td>
                    </tr>

                    <tr>
                        <td><strong>Sunday</strong></td>
                        <td>Omelette + Bread + Tea</td>
                        <td>Chicken Roast + Roti</td>
                        <td>Vegetable + Rice</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
                    <div class="card-box p-4">
                        <h6>Mess Feedback</h6>
                        <div class="d-flex align-items-center gap-2">
                            <textarea name="mess_feedback" id="" cols="40" rows="3" class="form-control" style="resize: none;"></textarea>
                            <button class="btn btn-outline-success" style="width: 100px;">Submit Feedback</button>
                        </div>
                    </div>
				</div>

    </div>

</div>

</x-student-component.main>
