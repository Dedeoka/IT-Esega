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
                                                        <div class="team-name">Upload Ulang Bukti Pendaftaran</div>
                                                    </div>
                                                </div>
                                                <div class="team-detail-body">
                                                    <form class="text-light" action="{{ url('mobile-legends-team/update/'.$team->id) }}" method="post" enctype="multipart/form-data">
                                                    @method('patch')
                                                    @csrf
                                                    <div class="form-container">
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('buktiBayar') is-invalid @enderror" id="buktiBayar" value="{{ old('buktiBayar') }}" name="buktiBayar" >
                                                            <label class="custom-file-label costume-form-file" for="buktiBayar">Masukan Bukti Pembayaran</label>
                                                            @error('buktiBayar')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
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
                        </div>
                    </div>
                </section>
@endsection
