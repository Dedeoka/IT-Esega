@extends('template.dashboard-admin')
@section('content')
<section class="col-md-10 p-0">
                        <div class="bg-free-space h-100">
                            <div class="free-space">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12">
                                        <div class="dashboard-card">
                                            <div class="text-container text-light text-center">
                                                <h1 class="mb-3">Notification</h1>
                                            </div>
                                            <div class="team-card registration-form">
                                                <form class="text-light" action="{{ route('add-notif') }}"  method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="title" class="form-control costume-form" id="title" name="title" placeholder="Notification Title ...">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="message" id="message" class="form-control costume-form" placeholder="Notification Message"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control costume-form-input @error('role') is-invalid @enderror" id="role" name="role">
                                                            <option value="" selected disabled hidden>Notif Type</option>
                                                            <option value="public">Public</option>
                                                            <option value="mole">Mobile Legends</option>
                                                            <option value="valo">Valorant</option>
                                                        </select>
                                                        @error('role')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group text-right">
                                                        <input type="submit" value="submit" class="btn btn-costume btn-danger p-3">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="team-cards mt-5">
                                                <div class="text-container text-light text-center">
                                                    <h3 class="mb-3">Public</h3>
                                                </div>
                                                @foreach ( $public as $item )
                                                <div class="team-card">
                                                    <div class="text-container  d-flex align-items-center text-light p-2 justify-content-between w-100">
                                                        <div class="team-name">{{ $item->title }}</div>
                                                        <div class="team-action">
                                                            <a href="{{ url('admin/notification/detail/'.$item->id) }}" class="btn btn-warning">View</a>
                                                            <a href="{{ url('admin/notification/edit/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                                            <form action="{{ url('admin/notification/'.$item->id) }}" method="POST" class="d-inline" >
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
                                                    <h3 class="mt-5 mb-3">Mobile Legend</h3>
                                                </div>
                                                @foreach ( $mole as $item )
                                                <div class="team-card">
                                                    <div class="text-container  d-flex align-items-center text-light p-2 justify-content-between w-100">
                                                        <div class="team-name">{{ $item->title }}</div>
                                                        <div class="team-action">
                                                            <a href="{{ url('admin/notification/detail/'.$item->id) }}" class="btn btn-warning">View</a>
                                                            <a href="{{ url('admin/notification/edit/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                                            <form action="{{ url('admin/notification/'.$item->id) }}" method="POST" class="d-inline">
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
                                                    <h3 class="mt-5 mb-3">Valorant</h3>
                                                </div>
                                                @foreach ( $valo as $item )
                                                <div class="team-card">
                                                    <div class="text-container  d-flex align-items-center text-light p-2 justify-content-between w-100">
                                                        <div class="team-name">{{ $item->title }}</div>
                                                        <div class="team-action">
                                                            <a href="{{ url('admin/notification/detail/'.$item->id) }}" class="btn btn-warning">View</a>
                                                            <a href="{{ url('admin/notification/edit/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                                            <form action="{{ url('admin/notification/'.$item->id) }}" method="POST" class="d-inline">
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
                    </section>
@endsection
