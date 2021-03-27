@extends('ArgonDashboard.argon_dashboard_template')

@section('content')
@if(Auth::user()->level == 'user')
@if($len > 0)
@foreach($order as $item)
<div class="container order completed mb-5 ">
    <table class="table table-striped table-hover table-sm table-responsive text-center">
        <thead>
            <tr>
                <th scope="col">Status</th>
                <th scope="col">Id Order</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Budget</th>
                <th scope="col">Finish?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $item->status ? "Terkonfirmasi" : "Menunggu Konfirmasi"}}</th>
                <td>{{ $item->id }}</td>
                <td><?= join(" ", [$item->name_depan, $item->name_belakang]) ?></td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->telphone }}</td>
                <td>{{ $item->budget }}</td>
                @if($item->status)
                <td><a href="{{ route('dashboard.finish',['id'=>$item->id]) }}" onclick="confirm('Are you sure?')">DONE</a></td>
                @endif
            </tr>
            @if($item->comment)
            <div class="container comment">
                <h4>Comment : </h4>
                <p>{{ $item->comment }}</p>
            </div>
            @endif
        </tbody>
    </table>
    @if($item->done)
    <div class="completed">
        <p>You're order is completed, you can <a href="{{ route('dashboard.destroy',['id'=>$item->id]) }}" onclick="confirm('Are you sure want to delete this order?')">delete</a> this order</p>
    </div>
    @endif
</div>
@endforeach
@else
<div class=" container order">
    <img src="{{ asset('foto/cash_delivery.jpg') }}">
    <h2 class="mt-5">OOPS! You haven't ordered anything..</h2>
    <a href="{{ route('home') }}" class="mt-4">Go Grab One</a>
</div>
@endif
@else

@if($len > 0)
@foreach($order as $item)
<div class="container adminOrder mb-5">
    <h3>Ordered By : {{ $item->user_name }} | {{ $item->user_id }} </h3>
    <table class="table table-striped table-hover table-sm table-responsive text-center">
        <thead>
            <tr>
                <th scope="col">Status</th>
                <th scope="col">Id Order</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Address</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Kabupaten</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Kode Pos</th>
                <th scope="col">Budget</th>
                <th scope="col">Note</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    @if($item->status)
                    Confirmed
                    @else
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Confirm
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Order Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="{{ route('dashboard.update',['id'=>$item->id]) }}">
                                    @csrf
                                    <div class="modal-body text-left">
                                        <h4>Comment : </h4>
                                        <textarea class="form-control" name="comment"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                </th>
                <td>{{ $item->id }}</td>
                <td><?= join(" ", [$item->name_depan, $item->name_belakang]) ?></td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->telphone }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->provinsi }}</td>
                <td>{{ $item->kabupaten }}</td>
                <td>{{ $item->kecamatan }}</td>
                <td>{{ $item->kode_pos }}</td>
                <td>{{ $item->budget }}</td>
                <td>{{ $item->note }}</td>
            </tr>
        </tbody>
    </table>

    @if($item->done)
    <div class="completed">
        <p>You're order is completed, you can <a href="{{ route('dashboard.destroy',['id'=>$item->id]) }}" onclick="confirm('Are you sure want to delete this order?')">delete</a> this order</p>
    </div>
    <h6 style="color: rgb(255, 126, 126);">**NOTE : Better to let customer delete the order, or contact them for confirmation</h6>
    @endif
</div>
@endforeach
@else
<div class="container adminOrder">
    <img src="{{ asset('foto/order_empty.jpg') }}">
    <h2 class="mt-3">OOPS! Order is empty..</h2>
    @endif
</div>
@endif
@endsection