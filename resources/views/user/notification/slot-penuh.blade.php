@extends('template.dashboard-user')
@section('content')
                    <section class="col-md-10 p-0">
                        <div class="bg-free-space h-100">
                            <div class="free-space">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12">
                                        <div class="dashboard-card">
                                             <div class="text-container text-light text-center">
                                                <h1 class="mb-3">SLOT PENDAFTARAN TELAH PENUH!!!</h1>
                                            </div>
                                            <div class="team-cards">
                                                <div class="team-detail-header">
                                                    <div class="text-container  d-flex align-items-center text-light p-2 justify-content-center w-100">
                                                        <div class="team-name">{{ $notif_slot->title }}</div>
                                                    </div>
                                                </div>
                                                <div class="team-detail-body">
                                                    <div class="text-notification"><h3>{{ $notif_slot->message }}</h3></div>
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
