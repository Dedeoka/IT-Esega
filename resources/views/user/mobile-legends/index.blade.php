@extends('template.dashboard-user')
@section('content')
                    <section class="col-md-10 p-0">
                        <div class="bg-free-space h-100">
                            <div class="free-space">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12">
                                        <div class="dashboard-card">
                                            <div class="text-container text-light text-center">
                                                <h1 class="mb-3">Mobile legends Registration</h1>
                                            </div>
                                            <div class="registration-form">
                                                <form class="text-light" action="{{ route('add-mole') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-container">
                                                        <div class="form-group">
                                                            <input type="team_name" class="form-control costume-form @error('team_name') is-invalid @enderror" value="{{ old('team_name') }}" id="team_name" name="team_name" placeholder="Your Team Name ..."  autofocus>
                                                            @error('team_name')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-container">
                                                        <div class="form-group">
                                                            <select class="form-control costume-form-input @error('slot') is-invalid @enderror" id="slot" name="slot" aria-placeholder="Slot" >
                                                                <option value="" selected disabled hidden>Slot</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                            </select>
                                                            @error('slot')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-container">
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('buktiBayar') is-invalid @enderror" id="buktiBayar" value="{{ old('buktiBayar') }}" name="buktiBayar" >
                                                            <label class="custom-file-label costume-form-file" for="buktiBayar">Masukan Bukti Pembayaran</label>
                                                            @error('buktiBayar')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <p>Bukti Transfer 100k ke (BNI 1232741233 A/N MARDIANTO SUCIPTO TAMBUNAN)</p>
                                                    </div>
                                                    <div class="form-container">
                                                        <div class="text-container mt-5">
                                                            Pemain 1
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('namaKetua') is-invalid @enderror" value="{{ old('namaKetua') }}" id="namaKetua" name="namaKetua" placeholder="Nama Ketua Team ..." >
                                                            @error('namaKetua')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nickKetua') is-invalid @enderror" value="{{ old('nickKetua') }}" id="nickKetua" name="nickKetua" placeholder="Nick ..." >
                                                            @error('nickKetua')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('idKetua') is-invalid @enderror" value="{{ old('idKetua') }}" id="idKetua" name="idKetua" placeholder="ID(Server) ..." >
                                                            @error('idKetua')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nohpKetua') is-invalid @enderror" value="{{ old('nohpKetua') }}" id="nohpKetua" name="nohpKetua" placeholder="No WA ..." >
                                                            @error('nohpKetua')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('tandaTangan1') is-invalid @enderror" id="tandaTangan1" name="tandaTangan1" >
                                                            <label class="custom-file-label costume-form-file" for="tandaTangan1">Tanda Tangan Peserta</label>
                                                            @error('tandaTangan1')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('fotoPeserta1') is-invalid @enderror"" id="fotoPeserta1" name="fotoPeserta1" >
                                                            <label class="custom-file-label costume-form-file" for="fotoPeserta1">Foto Peserta</label>
                                                            @error('fotoPeserta1')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="form-container">
                                                        <div class="text-container mt-5">
                                                            Pemain 2
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nama2') is-invalid @enderror" value="{{ old('nama2') }}" id="nama2" name="nama2" placeholder="Nama Anggota Team ..." >
                                                            @error('nama2')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nick2') is-invalid @enderror" value="{{ old('nick2') }}" id="nick2" name="nick2" placeholder="Nick ..." >
                                                            @error('nick2')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('id2') is-invalid @enderror" value="{{ old('id2') }}" id="id2" name="id2" placeholder="ID(Server) ..." >
                                                            @error('id2')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nohp2') is-invalid @enderror" value="{{ old('nohp2') }}" id="nohp2" name="nohp2" placeholder="No WA ..." >
                                                            @error('nohp2')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('tandaTangan2') is-invalid @enderror" id="tandaTangan2" name="tandaTangan2" >
                                                            <label class="custom-file-label costume-form-file" for="tandaTangan2">Tanda Tangan Peserta</label>
                                                            @error('tandaTangan2')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('fotoPeserta2') is-invalid @enderror"" id="fotoPeserta2" name="fotoPeserta2" >
                                                            <label class="custom-file-label costume-form-file" for="fotoPeserta2">Foto Peserta</label>
                                                            @error('fotoPeserta2')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-container">
                                                        <div class="text-container mt-5">
                                                            Pemain 3
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nama3') is-invalid @enderror" value="{{ old('nama3') }}" id="nama3" name="nama3" placeholder="Nama Anggota Team ..." >
                                                            @error('nama3')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nick3') is-invalid @enderror" value="{{ old('nick3') }}" id="nick3" name="nick3" placeholder="Nick ..." >
                                                            @error('nick3')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('id3') is-invalid @enderror" value="{{ old('id3') }}" id="id3" name="id3" placeholder="ID(Server) ..." >
                                                            @error('id3')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nohp3') is-invalid @enderror" value="{{ old('nohp3') }}" id="nohp3" name="nohp3" placeholder="No WA ..." >
                                                            @error('nohp3')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('tandaTangan3') is-invalid @enderror" id="tandaTangan3" name="tandaTangan3" >
                                                            <label class="custom-file-label costume-form-file" for="tandaTangan3">Tanda Tangan Peserta</label>
                                                            @error('tandaTangan3')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('fotoPeserta3') is-invalid @enderror"" id="fotoPeserta3" name="fotoPeserta3" >
                                                            <label class="custom-file-label costume-form-file" for="fotoPeserta3">Foto Peserta</label>
                                                            @error('fotoPeserta3')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-container">
                                                        <div class="text-container mt-5">
                                                            Pemain 4
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nama4') is-invalid @enderror" value="{{ old('nama4') }}" id="nama4" name="nama4" placeholder="Nama Anggota Team ..." >
                                                            @error('nama4')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nick4') is-invalid @enderror" value="{{ old('nick4') }}" id="nick4" name="nick4" placeholder="Nick ..." >
                                                            @error('nick4')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('id4') is-invalid @enderror" value="{{ old('id4') }}" id="id4" name="id4" placeholder="ID(Server) ..." >
                                                            @error('id4')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nohp4') is-invalid @enderror" value="{{ old('nohp4') }}" id="nohp4" name="nohp4" placeholder="No WA ..." >
                                                            @error('nohp4')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('tandaTangan4') is-invalid @enderror" id="tandaTangan4" name="tandaTangan4" >
                                                            <label class="custom-file-label costume-form-file" for="tandaTangan4">Tanda Tangan Peserta</label>
                                                            @error('tandaTangan4')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('fotoPeserta4') is-invalid @enderror"" id="fotoPeserta4" name="fotoPeserta4" >
                                                            <label class="custom-file-label costume-form-file" for="fotoPeserta4">Foto Peserta</label>
                                                            @error('fotoPeserta4')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-container">
                                                        <div class="text-container mt-5">
                                                            Pemain 5
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nama5') is-invalid @enderror" value="{{ old('nama5') }}" id="nama5" name="nama5" placeholder="Nama Anggota Team ..." >
                                                            @error('nama5')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nick5') is-invalid @enderror" value="{{ old('nick5') }}" id="nick5" name="nick5" placeholder="Nick ..." >
                                                            @error('nick5')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('id5') is-invalid @enderror" value="{{ old('id5') }}" id="id5" name="id5" placeholder="ID(Server) ..." >
                                                            @error('id5')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nohp5') is-invalid @enderror" value="{{ old('nohp5') }}" id="nohp5" name="nohp5" placeholder="No WA ..." >
                                                            @error('nohp5')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('tandaTangan5') is-invalid @enderror" id="tandaTangan5" name="tandaTangan5" >
                                                            <label class="custom-file-label costume-form-file" for="tandaTangan5">Tanda Tangan Peserta</label>
                                                            @error('tandaTangan5')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('fotoPeserta5') is-invalid @enderror"" id="fotoPeserta5" name="fotoPeserta5" >
                                                            <label class="custom-file-label costume-form-file" for="fotoPeserta5">Foto Peserta</label>
                                                            @error('fotoPeserta5')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-container">
                                                        <div class="text-container mt-5">
                                                            Pemain Cadangan 1 <br/> Jika tidak ada cadangan isi dengan -
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nama6') is-invalid @enderror" value="{{ old('nama6') }}" id="nama6" name="nama6" placeholder="Nama Anggota Team ..." >
                                                            @error('nama6')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nick6') is-invalid @enderror" value="{{ old('nick6') }}" id="nick6" name="nick6" placeholder="Nick ..." >
                                                            @error('nick6')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('id6') is-invalid @enderror" value="{{ old('id6') }}" id="id6" name="id6" placeholder="ID(Server) ..." >
                                                            @error('id6')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nohp6') is-invalid @enderror" value="{{ old('nohp6') }}" id="nohp6" name="nohp6" placeholder="No WA ..." >
                                                            @error('nohp6')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('tandaTangan6') is-invalid @enderror" id="tandaTangan6" name="tandaTangan6" >
                                                            <label class="custom-file-label costume-form-file" for="tandaTangan6">Tanda Tangan Peserta</label>
                                                            @error('tandaTangan6')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('fotoPeserta6') is-invalid @enderror"" id="fotoPeserta6" name="fotoPeserta6" >
                                                            <label class="custom-file-label costume-form-file" for="fotoPeserta6">Foto Peserta</label>
                                                            @error('fotoPeserta6')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-container">
                                                        <div class="text-container mt-5">
                                                            Pemain Cadangan 2 <br/> Jika tidak ada cadangan form diisi dengan - Form foto dan tanda tangan diisi dengan asal
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nama7') is-invalid @enderror" value="{{ old('nama7') }}" id="nama7" name="nama7" placeholder="Nama Anggota Team ..." >
                                                            @error('nama7')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nick7') is-invalid @enderror" value="{{ old('nick7') }}" id="nick7" name="nick7" placeholder="Nick ..." >
                                                            @error('nick7')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('id7') is-invalid @enderror" value="{{ old('id7') }}" id="id7" name="id7" placeholder="ID(Server) ..." >
                                                            @error('id7')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control costume-form @error('nohp7') is-invalid @enderror" value="{{ old('nohp7') }}" id="nohp7" name="nohp7" placeholder="No WA ..." >
                                                            @error('nohp7')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('tandaTangan7') is-invalid @enderror" id="tandaTangan7" name="tandaTangan7" >
                                                            <label class="custom-file-label costume-form-file" for="tandaTangan7">Tanda Tangan Peserta</label>
                                                            @error('tandaTangan7')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="custom-file my-3">
                                                            <input type="file" class="custom-file-input @error('fotoPeserta7') is-invalid @enderror"" id="fotoPeserta7" name="fotoPeserta7" >
                                                            <label class="custom-file-label costume-form-file" for="fotoPeserta7">Foto Peserta</label>
                                                            @error('fotoPeserta7')
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
                    </section>
@endsection
