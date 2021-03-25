@extends('ArgonDashboard.argon_dashboard_template')

@section('content')
<div class="container order">
    @if($len > 0)
    <table class="table table-striped table-hover table-sm table-responsive">
        <thead>
            <tr>
                <th scope="col">Id Order</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Budget</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td><?= join(" ", [$item->name_depan, $item->name_belakang]) ?></td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->telphone }}</td>
                <td>{{ $item->budget }}</td>
                <td>{{ $item->status ? "Terkonfirmasi" : "Belum Terkonfirmasi"}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <img src="{{ asset('foto/cash_delivery.jpg') }}">
    <h2 class="mt-5">OOPS! You haven't ordered anything..</h2>
    <a href="{{ route('home') }}" class="mt-4">Go Grab One</a>
    @endif
</div>
@endsection