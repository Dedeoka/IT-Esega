@extends('template.dashboard-user')
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
                                                        <div class="team-name">{{ $team->team_name }}</div>
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
                                                            <span class="d-block"> Email&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp: {{ $player->email }}</span>
                                                        </li>
                                                    </ul>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
@endsection

