<x-warden-component.main>

    <div>
        <div class="card-box mb-4">

            <h5 class="mb-3">

                Add Visitor

            </h5>

            <form action="{{ route('warden.store-visitor') }}" method="POST">

                @csrf

                <div class="row g-3">

                    {{-- STUDENT --}}
                    <div class="col-md-4">

                        <label class="form-label">

                            Student

                        </label>

                        <select name="student_id" class="form-control" required>

                            <option value="">

                                Select Student

                            </option>

                            @foreach ($students as $student)
                                <option value="{{ $student->id }}">

                                    {{ $student->name }}

                                </option>
                            @endforeach

                        </select>
                    </div>

                    {{-- VISITOR NAME --}}
                    <div class="col-md-4">

                        <label class="form-label">

                            Visitor Name

                        </label>

                        <input type="text" name="visitor_name" class="form-control" required>

                    </div>

                    {{-- RELATION --}}
                    <div class="col-md-4">

                        <label class="form-label">

                            Relation

                        </label>

                        <input type="text" name="relation" class="form-control">

                    </div>

                    {{-- PHONE --}}
                    <div class="col-md-4">

                        <label class="form-label">

                            Phone

                        </label>

                        <input type="text" name="phone" class="form-control">

                    </div>

                    {{-- VISIT DATE --}}
                    <div class="col-md-4">

                        <label class="form-label">

                            Visit Date

                        </label>

                        <input type="date" name="visit_date" class="form-control" required>

                    </div>



                </div>

                <button type="submit" class="btn btn-success mt-3">

                    Add Visitor

                </button>

            </form>

        </div>


        <div class="card-box mb-4">

            <h5 class="mb-3">

                Visitor Records

            </h5>

            <table class="table table-bordered table-hover">

                <thead class="table-success">

                    <tr>
                        <th>#</th>
                        <th>Student</th>
                        <th>Visitor</th>
                        <th>Relation</th>
                        <th>Phone</th>
                        <th>Date</th>
                    </tr>

                </thead>

                <tbody>

                    @if ($visitors->isNotEmpty())

                        @foreach ($visitors as $visitor)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ optional($visitor->student)->name ?? 'N/A' }}
                                </td>
                                <td>
                                    {{ $visitor->visitor_name }}
                                </td>
                                <td>

                                    {{ $visitor->relation ?? 'N/A' }}
                                </td>
                                <td>
                                    {{ $visitor->phone ?? 'N/A' }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($visitor->visit_date)->format('d M Y') }}

                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>

                            <td colspan="8" class="text-center">

                                No visitors found.

                            </td>

                        </tr>

                    @endif

                </tbody>

            </table>

        </div>

    </div>



</x-warden-component.main>
