@extends('admin.admin')

@section('admin_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
@endsection

@section('admin_title', 'CTF')

@section('admin_detail')
<div class="row align-items-center justify-content-center" align="center" id="tableDataStartup" style="padding-top: 10px;padding-bottom: 10px;">
    <div class="col" style="padding: 10px 0 10px 0;">
        <div class="row justify-content-center" style="padding-bottom: 10px;">
            <h1 class="text-table-title ">Data Peserta</h1>
        </div>
        <div class="row justify-content-center" style="padding-bottom: 30px;">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Nama Tim</th>
                            <th scope="col">Nama Ketua</th>
                            <th scope="col">Anggota 1</th>
                            <th scope="col">Anggota 2</th>
                            <th scope="col">Bukti Bayar</th>
                            <th scope="col">Status Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($ctf as $data)
                            <tr>
                                <form action="{{ route('admin-ctf-change-status-pembayaran') }}" method="post">
                                    @method('put')
                                    @csrf
                                    <td><input name="ctf_email" id="ctf_email" value="{{ $data->email }}" hidden>{{ $data->email }}</td>
                                    <td>{{ $data->team_name }}</td>
                                    <td>
                                        {{ $data->team_leader }} - {{ $data->team_leader_institute }} -
                                        <a href="{{asset('storage/' . $data['team_leader_id_card'])}}"> Id Card</a>
                                    </td>
                                    <td>
                                        @if ($data->team_member_1 !== null)
                                            {{ $data->team_member_1 }} - {{ $data->team_member_1_institute }} -
                                            <a href="{{asset('storage/' . $data['team_member_1_id_card'])}}"> Id Card</a>
                                        @else
                                            NULL
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->team_member_2 !== null)
                                            {{ $data->team_member_2 }} - {{ $data->team_member_2_institute }} -
                                            <a href="{{asset('storage/' . $data['team_member_2_id_card'])}}"> Id Card</a>
                                        @else
                                            NULL
                                        @endif
                                    </td>
                                    <td><a href="{{asset('storage/' . $data['proof_payment'])}}"> Proof Payment</a></td>
                                    <td>
                                        <div class="btn-group">
                                            <!-- <select name="startup-status" id="startup-status" style="color:black">
                                                <option value="Confirmed">Confirmed</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Declined">Declined</option>
                                            </select> -->
                                            <select name="ctf_payment_status" id="ctf_payment_status" style="color:black" onchange="this.form.submit()">
                                                <option style="color:black" value="2" <?php if($data->status_pembayaran === '2') {echo('selected');}?>>Confirmed</option>
                                                <option style="color:black" value="1" <?php if($data->status_pembayaran === '1') {echo('selected');}?>>Pending</option>
                                                <option style="color:black" value="0" <?php if($data->status_pembayaran === '0') {echo('selected');}?>>Declined</option>
                                            </select>
                                        </div>
                                    </td>
                                </form>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection