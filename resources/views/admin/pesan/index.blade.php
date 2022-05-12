@extends('template.dashboard-admin')
@section('content')
                    <section class="col-md-10 p-0">
                        <div class="bg-free-space h-100">
                            <div class="free-space">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12">
                                        <div class="dashboard-card">
                                            <div class="team-cards">
                                                @foreach ( $pesan as $item )
                                                <div class="team-detail-header">
                                                    <div class="text-container  d-flex align-items-center text-light p-2 justify-content-center w-100">
                                                        <div class="team-name">{{ $item->name }} | {{ $item->email }}</div>
                                                    </div>
                                                </div>
                                                <div class="team-detail-body">
                                                    <div class="text-notification"><h3>{{ $item->message }}</h3></div>
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
