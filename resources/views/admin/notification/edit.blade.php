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
                                                <form class="text-light" action="{{ url('admin/notification/'.$notif->id) }}"  method="post">
                                                    @method('patch')
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="title" class="form-control costume-form @error('title') is-invalid @enderror" value="{{ old('title', $notif->title) }}" autofocus id="title" name="title">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="message" id="message" class="form-control costume-form @error('message') is-invalid @enderror">{{ $notif->message }}</textarea>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
@endsection
