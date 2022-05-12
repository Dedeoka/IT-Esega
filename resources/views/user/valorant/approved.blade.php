@extends('template.dashboard-user')
@section('content')
                    <section class="col-md-10 p-0">
                        <div class="bg-free-space h-100">
                            <div class="free-space">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12">
                                        <div class="dashboard-card">
                                            <div class="text-container text-light text-center">
                                                <h1 class="mb-3">Your Valorant Team</h1>
                                            </div>
                                            <div class="team-cards mt-5">
                                                @foreach ( $team as $item )
                                                <div class="team-card">
                                                    <div class="text-container  d-flex align-items-center text-light p-2 justify-content-between w-100">
                                                        <div class="team-name">{{ $item->team_name }}</div>
                                                        <div class="team-action">
                                                            <a href="{{ url('valorant-team/detail/'.$item->id) }}" class="btn btn-warning">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                </div>
                                                <div>
                                                <br/>
                                                <div class="text-container text-light text-center">
                                                    <h1 class="mb-3">Update Information</h1>
                                                </div>
                                                <br/>
                                                @foreach ( $notif_terima as $item )
                                                <div class="team-card">
                                                    <div class="text-container  d-flex align-items-center text-light p-2 justify-content-between w-100">
                                                        <div class="team-name">{{ $item->title }}</div>
                                                        <div class="team-action">
                                                            <a href="{{ url('notification/detail/'.$item->title) }}" class="btn btn-warning">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @foreach ( $notif as $item )
                                                <div class="team-card">
                                                    <div class="text-container  d-flex align-items-center text-light p-2 justify-content-between w-100">
                                                        <div class="team-name">{{ $item->title }}</div>
                                                        <div class="team-action">
                                                            <a href="{{ url('notification/detail/'.$item->id) }}" class="btn btn-warning">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
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
