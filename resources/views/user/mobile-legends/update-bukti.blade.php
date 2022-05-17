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
                                                         <div class="form-group">
                                                            <label for="buktiBayar">Masukan Ulang Bukti Pembayaran (Bukti Transfer 100k/slot ke (BNI 1232741233 A/N MARDIANTO SUCIPTO TAMBUNAN))</label>
                                                            <input type="file" name="buktiBayar" id="buktiBayar" class="form-control costume-form-file @error('buktiBayar') is-invalid @enderror" value="{{ old('buktiBayar') }}">
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
