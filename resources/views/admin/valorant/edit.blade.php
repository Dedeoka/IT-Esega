@extends('template.dashboard-admin')
@section('content')
                    <section class="col-md-10 p-0">
                        <div class="bg-free-space h-100">
                            <div class="free-space">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12">
                                        <div class="dashboard-card">
                                            <div class="text-container text-light text-center">
                                                <h1 class="mb-3">Registration {{ $team->team_name }} Edit</h1>
                                            </div>
                                            <div class="registration-form">
                                                <form class="text-light" action="{{ url('admin/valorant-team/'.$team->id) }}" method="post" enctype="multipart/form-data">
                                                    @method('patch')
                                                    @csrf
                                                    @foreach ( $player as $item )
                                                    <div class="form-container">
                                                        <div class="text-container mt-5">
                                                            Pemain {{ $loop->iteration }}
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('id_peserta') is-invalid @enderror" value="{{ old('id_peserta', $item->id) }}" id="id_peserta" name="id_peserta{{$loop->iteration}}" placeholder="ID Peserta Team ..." hidden>
                                                            <input type="text" class="form-control costume-form @error('nama') is-invalid @enderror" value="{{ $item->name }}" id="nama" name="nama{{$loop->iteration}}" placeholder="Nama  Team ..." >
                                                            @error('nama{{$loop->iteration}}')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nick') is-invalid @enderror" value="{{ $item->nick }}" id="nick" name="nick{{$loop->iteration}}" placeholder="Nick ..." >
                                                            @error('nick{{$loop->iteration}}')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('id') is-invalid @enderror" value="{{ $item->tagline }}" id="id" name="id{{$loop->iteration}}" placeholder="ID(Server) ..." >
                                                            @error('id{{$loop->iteration}}')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nohp') is-invalid @enderror" value="{{ $item->no_hp }}" id="nohp" name="nohp{{$loop->iteration}}" placeholder="No WA ..." >
                                                            @error('nohp{{$loop->iteration}}')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    <div class="form-container mt-5">
                                                        <div class="form-group text-right">
                                                            <input type="submit" value="submit" class="btn btn-costume btn-danger p-3">
                                                        </div>
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
