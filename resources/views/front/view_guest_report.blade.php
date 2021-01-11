@extends('template.main')
@section('content')


    <section class="ftco-section">

    <div class="container">
    <div class="row">
        <table class="table table-bordered table-responsive">
            <thead class="thead-light">
                <tr>
                    <th>Lab ID</th>
                    <th>Patient Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>District</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Result</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if($guest)
                
                    <tr>
                        <td>{{ $guest->lab_id }}</td>
                        <td>{{ $guest->patient_name }}</td>
                        <td>{{ $guest->patient_age }}</td>
                        <td>{{ $guest->gender }}</td>
                        <td>{{ $guest->district }}</td>
                        <td>{{ $guest->email }}</td>
                        <td>{{ $guest->phone }}</td>
                        @if($guest->result == 'P')
                            <td>POSITIVE</td>
                        @elseif($guest->result == 'N')
                            <td>NEGATIVE</td>
                        @endif
                        <td>
                            {{-- <a href="" class="btn btn-primary btn-sm">Download Report</a> --}}
                            <a href="{{ route('down_pdf_guest', $guest->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Download Report</a>
                        </td>
                    </tr>

                @else
                    <tr><td colspan="6" style="color :rgb(223, 79, 79);">Report Not Available right now.</td></tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

    </section>

@endsection