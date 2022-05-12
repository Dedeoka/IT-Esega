@extends('template.dashboard-admin')
@section('content')
                    <section class="col-md-10 p-0">
                        <div class="bg-free-space h-100">
                            <div class="free-space">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12">
                                        <div class="dashboard-card">
                                            <div class="team-cards">
                                                <div class="team-detail-header">
                                                    <div class="text-container  d-flex align-items-center text-light p-2 justify-content-center w-100">
                                                        <div class="team-name">{{ $team->team_name }} ({{$team->slot}} slot)</div>
                                                    </div>
                                                    <div class="text-center" style="color: #ada1a1">
                                                        <h5>Valorant<h5>
                                                    </div>
                                                </div>
                                                <div class="team-detail-body">
                                                    <div class="text-container">
                                                        <h3>Anggota</h3>
                                                    </div>
                                                    @foreach ( $team->player as $player )
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <span class="d-block">{{ $player->name }} ({{ $player->role }})</span>
                                                            <span class="d-block">Nick &nbsp &nbsp &nbsp &nbsp &nbsp: {{ $player->nick }} {{ $player->tagline }}</span>
                                                            <span class="d-block">No telpon : {{ $player->no_hp }}</span>
                                                            <br/>
                                                        </li>
                                                    </ul>
                                                     @endforeach
                                                    <div class="text-container mt-5">
                                                        <h3>Bukti Pembayaran</h3>
                                                    </div>
                                                    <div class="img-container">
                                                        <img src="{{ asset('bukti-bayar/valorant/'.$team->payment) }}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="team-card mt-5">
                                                        <div class="text-container  d-flex align-items-center text-light p-2 justify-content-between w-100">
                                                            <h3>Action</h3>
                                                            <div class="team-action">
                                                                <form action="{{  url('admin/valorant-team/approve/'.$team->id) }}" method="POST" class="d-inline">
                                                                    @method('patch')
                                                                    @csrf
                                                                    <button class="btn btn-success">Konfirmasi</button>
                                                                </form>
                                                                <form action="{{  url('admin/valorant-team/tolak/'.$team->id) }}" method="POST" class="d-inline" >
                                                                    @method('patch')
                                                                    @csrf
                                                                    <button class="btn btn-danger">Tolak</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
@endsection

