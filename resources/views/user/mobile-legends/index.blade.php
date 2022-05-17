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
                                                                <option value="1" @if(old('slot') == '1')selected @endif>1</option>
                                                                <option value="2" @if(old('slot') == '2')selected @endif>2</option>
                                                            </select>
                                                            @error('slot')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-container">
                                                         <div class="form-group">
                                                            <label for="buktiBayar">Masukan Bukti Pembayaran (Bukti Transfer 100k/slot ke (BNI 1232741233 A/N MARDIANTO SUCIPTO TAMBUNAN))</label>
                                                            <input type="file" name="buktiBayar" id="buktiBayar" class="form-control costume-form-file @error('buktiBayar') is-invalid @enderror" value="{{ old('buktiBayar') }}">
                                                            @error('buktiBayar')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
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
                                                            <input type="text" class="form-control costume-form @error('email1') is-invalid @enderror" value="{{ old('nohpKetua') }}" id="nohpKetua" name="nohpKetua" placeholder="No WA ..." >
                                                            @error('nohpKetua')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control costume-form @error('email1') is-invalid @enderror" value="{{ old('email1') }}" id="email1" name="email1" placeholder="Email ..." >
                                                            @error('email1')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                            <label for="tandaTangan1">Tanda Tangan Peserta (Foto tanda tangan dibutuhkan untuk kepentingan absensi)</label>
                                                            <input type="file" name="tandaTangan1" id="tandaTangan1" class="form-control costume-form-file @error('tandaTangan1') is-invalid @enderror">
                                                            @error('tandaTangan1')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fotoPeserta1">Foto Peserta (Foto peserta dibutuhkan untuk kepentingan registrasi)</label>
                                                            <input type="file" name="fotoPeserta1" id="fotoPeserta1" class="form-control costume-form-file @error('fotoPeserta1') is-invalid @enderror">
                                                            @error('fotoPeserta1')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
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
                                                            <input type="email" class="form-control costume-form @error('email2') is-invalid @enderror" value="{{ old('email2') }}" id="email2" name="email2" placeholder="Email ..." >
                                                            @error('email2')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                            <label for="tandaTangan2">Tanda Tangan Peserta (Foto tanda tangan dibutuhkan untuk kepentingan absensi)</label>
                                                            <input type="file" name="tandaTangan2" id="tandaTangan2" class="form-control costume-form-file @error('tandaTangan2') is-invalid @enderror">
                                                            @error('tandaTangan2')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fotoPeserta2">Foto Peserta (Foto peserta dibutuhkan untuk kepentingan registrasi)</label>
                                                            <input type="file" name="fotoPeserta2" id="fotoPeserta2" class="form-control costume-form-file @error('fotoPeserta2') is-invalid @enderror">
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
                                                            <input type="email" class="form-control costume-form @error('email3') is-invalid @enderror" value="{{ old('email3') }}" id="email3" name="email3" placeholder="Email ..." >
                                                            @error('email3')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                            <label for="tandaTangan3">Tanda Tangan Peserta (Foto tanda tangan dibutuhkan untuk kepentingan absensi)</label>
                                                            <input type="file" name="tandaTangan3" id="tandaTangan3" class="form-control costume-form-file @error('tandaTangan3') is-invalid @enderror">
                                                            @error('tandaTangan3')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fotoPeserta3">Foto Peserta (Foto peserta dibutuhkan untuk kepentingan registrasi)</label>
                                                            <input type="file" name="fotoPeserta3" id="fotoPeserta3" class="form-control costume-form-file @error('fotoPeserta3') is-invalid @enderror">
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
                                                            <input type="email" class="form-control costume-form @error('email4') is-invalid @enderror" value="{{ old('email4') }}" id="email4" name="email4" placeholder="Email ..." >
                                                            @error('email4')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                            <label for="tandaTangan4">Tanda Tangan Peserta (Foto tanda tangan dibutuhkan untuk kepentingan absensi)</label>
                                                            <input type="file" name="tandaTangan4" id="tandaTangan4" class="form-control costume-form-file @error('tandaTangan4') is-invalid @enderror">
                                                            @error('tandaTangan4')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fotoPeserta4">Foto Peserta (Foto peserta dibutuhkan untuk kepentingan registrasi)</label>
                                                            <input type="file" name="fotoPeserta4" id="fotoPeserta4" class="form-control costume-form-file @error('fotoPeserta4') is-invalid @enderror">
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
                                                            <input type="email" class="form-control costume-form @error('email5') is-invalid @enderror" value="{{ old('email5') }}" id="email5" name="email5" placeholder="Email ..." >
                                                            @error('email5')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                            <label for="tandaTangan5">Tanda Tangan Peserta (Foto tanda tangan dibutuhkan untuk kepentingan absensi)</label>
                                                            <input type="file" name="tandaTangan5" id="tandaTangan5" class="form-control costume-form-file @error('tandaTangan5') is-invalid @enderror">
                                                            @error('tandaTangan5')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fotoPeserta5">Foto Peserta (Foto peserta dibutuhkan untuk kepentingan registrasi)</label>
                                                            <input type="file" name="fotoPeserta5" id="fotoPeserta5" class="form-control costume-form-file @error('fotoPeserta5') is-invalid @enderror">
                                                            @error('fotoPeserta5')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-container">
                                                        <div class="text-container mt-5">
                                                            Pemain 6 (Cadangan) <br/> Jika tidak ada cadangan isi dengan -
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
                                                            <input type="text" class="form-control costume-form @error('email6') is-invalid @enderror" value="{{ old('email6') }}" id="email6" name="email6" placeholder="Email ..." >
                                                            @error('email6')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                            <label for="tandaTangan6">Tanda Tangan Peserta</label>
                                                            <input type="file" name="tandaTangan6" id="tandaTangan6" class="form-control costume-form-file @error('tandaTangan6') is-invalid @enderror">
                                                            @error('tandaTangan6')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fotoPeserta6">Foto Peserta</label>
                                                            <input type="file" name="fotoPeserta6" id="fotoPeserta6" class="form-control costume-form-file @error('fotoPeserta6') is-invalid @enderror">
                                                            @error('fotoPeserta6')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-container">
                                                        <div class="text-container mt-5">
                                                            Pemain 7 (Cadangan) <br/> Jika tidak ada cadangan form diisi dengan -
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
                                                            <input type="text" class="form-control costume-form @error('email7') is-invalid @enderror" value="{{ old('email7') }}" id="email7" name="email7" placeholder="Email ..." >
                                                            @error('email7')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                            <label for="tandaTangan7">Tanda Tangan Peserta</label>
                                                            <input type="file" name="tandaTangan7" id="tandaTangan7" class="form-control costume-form-file @error('tandaTangan7') is-invalid @enderror">
                                                            @error('tandaTangan7')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fotoPeserta7">Foto Peserta</label>
                                                            <input type="file" name="fotoPeserta7" id="fotoPeserta7" class="form-control costume-form-file @error('fotoPeserta7') is-invalid @enderror">
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
