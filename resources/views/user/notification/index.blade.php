@extends('template.dashboard-user')
@section('content')
                    <section class="col-md-10 p-0">
                        <div class="bg-free-space h-100">
                            <div class="free-space">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12">
                                        <div class="dashboard-card">
                                            <div class="text-container text-light text-center">
                                                <h1 class="mb-3">Information</h1>
                                            </div>
                                            @foreach ( $notif as $item )
                                            <div class="info-card">
                                                <div class="text-container  d-flex align-items-center text-light p-2 justify-content-between w-100">
                                                    <div class="info-name">{{ $item->title }}</div>
                                                    <div class="info-action">
                                                        <a href="{{ url('notification/detail/'.$item->title) }}" class="btn btn-warning">View</a>
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
                </section>
@endsection
