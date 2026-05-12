<x-parent-component.main>
    <div class="container-fluid p-4">
        <div class="card-box mb-4">
            <h5 class="mb-3">Visitor Log</h5>
            <table class="table table-bordered table-hover">
                <thead class="table-success">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Relation</th>
                        <th>Date</th>
                        <th>Time In</th>
                        <th>Time Out</th>
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

                                    {{ $visitor->visitor_name }}
                                </td>
                                <td>
                                    {{ $visitor->relation ?? 'N/A' }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($visitor->visit_date)->format('d M Y') }}
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>

                            <td colspan="6" class="text-center">

                                No visitor records found.

                            </td>

                        </tr>

                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-parent-component.main>
