@extends('template.dashboard-admin')
@section('content')
<section class="col-md-10 p-0">
                        <div class="bg-free-space h-100">
                            <div class="free-space">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12">
                                        <div class="dashboard-card">
                                            <div class="text-container text-light text-center">
                                                <h1 class="mb-3">Daftar Team</h1>
                                            </div>
                                            <div class="img-container text-center">
                                                <img src="../../img/logo-vall.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="team-cards mt-5">
                                                <div class="text-container text-light text-center">
                                                    <h2 class="mb-3">Menunggu Konfirmasi</h2>
                                                </div>
                                                @foreach ( $team as $item )
                                                <div class="team-card">
                                                    <div class="text-container  d-flex align-items-center text-light p-2 justify-content-between w-100">
                                                        <div class="team-name">{{ $item->team_name }}</div>
                                                        <div class="team-action">
                                                            <a href="{{ url('admin/valorant-team/detail/'.$item->id) }}" class="btn btn-warning">View</a>
                                                            <a href="{{ url('admin/valorant-team/edit/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                                            <form action="{{ url('admin/valorant-team/'.$item->id) }}" method="POST" class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="text-container text-light text-center">
                                                    <h2 class="mb-3 mt-5">Telah Dikonfirmasi</h2>
                                                </div>
                                                @foreach ( $konfirmasi as $item )
                                                <div class="team-card">
                                                    <div class="text-container  d-flex align-items-center text-light p-2 justify-content-between w-100">
                                                        <div class="team-name">{{ $item->team_name }}</div>
                                                        <div class="team-action">
                                                            <a href="{{ url('admin/valorant-team/detail/'.$item->id) }}" class="btn btn-warning">View</a>
                                                            <a href="{{ url('admin/valorant-team/edit/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                                            <form action="{{ url('admin/valorant-team/'.$item->id) }}" method="POST" class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="text-container text-light text-center">
                                                    <h2 class="mb-3 mt-5">Ditolak</h2>
                                                </div>
                                                @foreach ( $tolak as $item )
                                                <div class="team-card">
                                                    <div class="text-container  d-flex align-items-center text-light p-2 justify-content-between w-100">
                                                        <div class="team-name">{{ $item->team_name }}</div>
                                                        <div class="team-action">
                                                            <a href="{{ url('admin/valorant-team/detail/'.$item->id) }}" class="btn btn-warning">View</a>
                                                            <a href="{{ url('admin/valorant-team/edit/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                                            <form action="{{ url('admin/valorant-team/'.$item->id) }}" method="POST" class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger">
                                                                    Delete
                                                                </button>
                                                            </form>
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
                    </section>
@endsection
