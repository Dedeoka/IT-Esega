<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Valo_team;
use App\Models\Valo_player;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class ValorantController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index(){
        $team = Valo_team::where('user_id','=', Auth::user()->id)->get();
        $notif = Notification::where('role', '=', 'valo')->where('id', '>', "7")->get();
        $user = Auth::user();
        $test = Valo_team::where('user_id','=', $user->id)->first();
        $slot = Valo_team::sum('slot');
        if(is_null($test)){
            if($slot >= "32"){
                $notif_slot = Notification::find('7');
                return view ('user.notification.slot-penuh', compact('notif_slot'));
            }else{
                return view('user.valorant.index');
            }
        }else{
            if($test->status == "pending"){
                //update
                $notif_pending = Notification::where('id', '=', '4')->get();
                return view('user.valorant.detail', compact('team', 'notif', 'notif_pending'));
            }elseif($test->status == "not_approved"){
                $notif_tolak = Notification::where('id', '=', '5')->get();
                return view('user.valorant.not-approved', compact('team', 'notif', 'notif_tolak'));
            }else{
                $notif_terima = Notification::where('id', '=', '6')->get();
                return view('user.valorant.approved', compact('team', 'notif', 'notif_terima'));
            }
        }
    }

    public function addprocess(Request $request){
        $request->validate([
            'team_name' => 'required|unique:valo_teams',
            'slot' => 'required',
            'buktiBayar' => 'required',
            'namaKetua' => 'required',
            'nickKetua' => 'required',
            'tagKetua' => 'required',
            'nohpKetua' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'tandaTangan1' => 'required',
            'fotoPeserta1' => 'required',
            'nama2' => 'required',
            'nick2' => 'required',
            'tag2' => 'required',
            'nohp2' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'tandaTangan2' => 'required',
            'fotoPeserta2' => 'required',
            'nama3' => 'required',
            'nick3' => 'required',
            'tag3' => 'required',
            'nohp3' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'tandaTangan3' => 'required',
            'fotoPeserta3' => 'required',
            'nama4' => 'required',
            'nick4' => 'required',
            'tag4' => 'required',
            'nohp4' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'tandaTangan4' => 'required',
            'fotoPeserta4' => 'required',
            'nama5' => 'required',
            'nick5' => 'required',
            'tag5' => 'required',
            'nohp5' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'tandaTangan5' => 'required',
            'fotoPeserta5' => 'required',
            'nama6' => 'required',
            'nick6' => 'required',
            'tag6' => 'required',
            'nohp6' => 'required',
            'tandaTangan6' => 'required',
            'fotoPeserta6' => 'required',
            'nama7' => 'required',
            'nick7' => 'required',
            'tag7' => 'required',
            'nohp7' => 'required',
            'tandaTangan7' => 'required',
            'fotoPeserta7' => 'required',
        ]);

        $team = new Valo_team();
        $team->team_name = $request->team_name;

        $proof = $request->file('buktiBayar');
        $path = 'bukti-bayar/valorant';
        $nama_file = $request->team_name."_".$proof->getClientOriginalName();
        $proof->move($path,$nama_file);
        $team->payment = $nama_file;
        $team->user_id = Auth::user()->id;
        $team->email = Auth::user()->email;
        $team->slot = $request->slot;
        $team->status = 'pending';
        $team->save();

        // ketua
        $ketua = new Valo_player;
        $ketua->team_id = $team->id;
        $ketua->name = $request->namaKetua;
        $ketua->nick = $request->nickKetua;
        $ketua->tagline = $request->tagKetua;
        $ketua->no_hp = $request->nohpKetua;
        $ttd1 = $request->file('tandaTangan1');
        $path1 = "tanda_tanganV/".$request->team_name;
        $ttd_file1 = $request->namaKetua."_".$ttd1->getClientOriginalName();
        $ttd1->move($path1,$ttd_file1);
        $ketua->tanda_tangan = $ttd_file1;
        $profile1 = $request->file('fotoPeserta1');
        $path2 = 'fotoV/'.$request->team_name;
        $foto_file1 = $request->namaKetua."_".$profile1->getClientOriginalName();
        $profile1->move($path2,$foto_file1);
        $ketua->foto = $foto_file1;
        $ketua->save();

        // member 2
        $member2 = new Valo_player;
        $member2->team_id = $team->id;
        $member2->name = $request->nama2;
        $member2->nick = $request->nick2;
        $member2->tagline = $request->tag2;
        $member2->no_hp = $request->nohp2;
        $ttd2 = $request->file('tandaTangan2');
        $path2 = "tanda_tanganV/".$request->team_name;
        $ttd_file2 = $request->nama2."_".$ttd2->getClientOriginalName();
        $ttd2->move($path2,$ttd_file2);
        $member2->tanda_tangan = $ttd_file2;
        $profile2 = $request->file('fotoPeserta2');
        $path2 = 'fotoV/'.$request->team_name;
        $foto_file2 = $request->nama2."_".$profile2->getClientOriginalName();
        $profile2->move($path2,$foto_file2);
        $member2->foto = $foto_file2;
        $member2->role = 'member';
        $member2->save();

        // member 3
        $member3 = new Valo_player;
        $member3->team_id = $team->id;
        $member3->name = $request->nama3;
        $member3->nick = $request->nick3;
        $member3->tagline = $request->tag3;
        $member3->no_hp = $request->nohp3;
        $ttd3 = $request->file('tandaTangan3');
        $path3 = "tanda_tanganV/".$request->team_name;
        $ttd_file3 = $request->nama3."_".$ttd3->getClientOriginalName();
        $ttd3->move($path3,$ttd_file3);
        $member3->tanda_tangan = $ttd_file3;
        $profile3 = $request->file('fotoPeserta3');
        $path3 = 'fotoV/'.$request->team_name;
        $foto_file3 = $request->nama3."_".$profile3->getClientOriginalName();
        $profile3->move($path3,$foto_file3);
        $member3->foto = $foto_file3;
        $member3->role = 'member';
        $member3->save();

        // member 4
        $member4 = new Valo_player;
        $member4->team_id = $team->id;
        $member4->name = $request->nama4;
        $member4->nick = $request->nick4;
        $member4->tagline = $request->tag4;
        $member4->no_hp = $request->nohp4;
        $ttd4 = $request->file('tandaTangan4');
        $path4 = "tanda_tanganV/".$request->team_name;
        $ttd_file4 = $request->nama4."_".$ttd4->getClientOriginalName();
        $ttd4->move($path4,$ttd_file4);
        $member4->tanda_tangan = $ttd_file4;
        $profile4 = $request->file('fotoPeserta4');
        $path4 = 'fotoV/'.$request->team_name;
        $foto_file4 = $request->nama4."_".$profile4->getClientOriginalName();
        $profile4->move($path4,$foto_file4);
        $member4->foto = $foto_file4;
        $member4->role = 'member';
        $member4->save();

        // member 5
        $member5 = new Valo_player;
        $member5->team_id = $team->id;
        $member5->name = $request->nama5;
        $member5->nick = $request->nick5;
        $member5->tagline = $request->tag5;
        $member5->no_hp = $request->nohp5;
        $ttd5 = $request->file('tandaTangan5');
        $path5 = "tanda_tanganV/".$request->team_name;
        $ttd_file5 = $request->nama5."_".$ttd5->getClientOriginalName();
        $ttd5->move($path5,$ttd_file5);
        $member5->tanda_tangan = $ttd_file5;
        $profile5 = $request->file('fotoPeserta5');
        $path5 = 'fotoV/'.$request->team_name;
        $foto_file5 = $request->nama5."_".$profile5->getClientOriginalName();
        $profile5->move($path5,$foto_file5);
        $member5->foto = $foto_file5;
        $member5->role = 'member';
        $member5->save();

        // cadangan 1
        $cadangan1 = new Valo_player;
        $cadangan1->team_id = $team->id;
        $cadangan1->name = $request->nama6;
        $cadangan1->nick = $request->nick6;
        $cadangan1->tagline = $request->tag6;
        $cadangan1->no_hp = $request->nohp6;
        $ttd6 = $request->file('tandaTangan6');
        $path6 = "tanda_tanganV/".$request->team_name;
        $ttd_file6 = $request->nama6."_".$ttd6->getClientOriginalName();
        $ttd6->move($path6,$ttd_file6);
        $cadangan1->tanda_tangan = $ttd_file6;
        $profile6 = $request->file('fotoPeserta6');
        $path6 = 'fotoV/'.$request->team_name;
        $foto_file6 = $request->nama6."_".$profile6->getClientOriginalName();
        $profile6->move($path6,$foto_file6);
        $cadangan1->foto = $foto_file6;
        $cadangan1->role = 'cadangan';
        $cadangan1->save();

        // cadangan 2
        $cadangan2 = new Valo_player;
        $cadangan2->team_id = $team->id;
        $cadangan2->name = $request->nama7;
        $cadangan2->nick = $request->nick7;
        $cadangan2->tagline = $request->tag7;
        $cadangan2->no_hp = $request->nohp7;
        $ttd7 = $request->file('tandaTangan7');
        $path7 = "tanda_tanganV/".$request->team_name;
        $ttd_file7 = $request->nama7."_".$ttd7->getClientOriginalName();
        $ttd7->move($path7,$ttd_file7);
        $cadangan2->tanda_tangan = $ttd_file7;
        $profile7 = $request->file('fotoPeserta7');
        $path7 = 'fotoV/'.$request->team_name;
        $foto_file7 = $request->nama7."_".$profile7->getClientOriginalName();
        $profile7->move($path7,$foto_file7);
        $cadangan2->foto = $foto_file7;
        $cadangan2->role = 'cadangan';
        $cadangan2->save();

        return redirect()->route('valo')->with('success', 'Berhasil Mendaftarkan Team');
    }

     public function detail($id){
        $team = Valo_team::find($id);
        return view('user.valorant.detail-team', compact('team'));
    }

    public function update($id){
        $team = valo_team::find($id);
        return view('user.valorant.update-bukti', compact('team'));
    }

    public function updateprocess(Request $request, $id){
        $request->validate([
            'buktiBayar' => "required",
        ]);

        $team = valo_team::find($id);
        $proof = $request->file('buktiBayar');
        $path = 'bukti-bayar/mobilelegend';
        $nama_file = $team->team_name."_".$proof->getClientOriginalName();
        $proof->move($path,$nama_file);
        $team->payment = $nama_file;
        $team->status = 'pending';
        $team->save();

        return redirect()->route('valo')->with('success', 'Berhasil Mengirim Ulang Bukti Pendaftaran');
    }



    public function edit($id)
    {
        $team = valo_team::find($id);
        $player = valo_player::where('team_id', $id)->get();
        // return $player;
        return view ('user.valorant.edit', [
            'team' => $team,
            'player' => $player,
        ]);
    }

    public function editprocess(Request $request, $id)
    {
        $request->validate([
            'nama1' => 'required',
            'nick1' => 'required',
            'id1' => 'required',
            'nohp1' => 'required',
            'nama2' => 'required',
            'nick2' => 'required',
            'id2' => 'required',
            'nohp2' => 'required',
            'nama3' => 'required',
            'nick3' => 'required',
            'id3' => 'required',
            'nohp3' => 'required',
            'nama4' => 'required',
            'nick4' => 'required',
            'id4' => 'required',
            'nohp4' => 'required',
            'nama5' => 'required',
            'nick5' => 'required',
            'id5' => 'required',
            'nohp5' => 'required',
            'nama6' => 'required',
            'nick6' => 'required',
            'id6' => 'required',
            'nohp6' => 'required',
            'nama7' => 'required',
            'nick7' => 'required',
            'id7' => 'required',
            'nohp7' => 'required',
        ]);

        $player1 = valo_player::where('id', $request->id_peserta1);
        $player1->update([
            'name' => $request->nama1,
            'nick' => $request->nick1,
            'tagline' => $request->id1,
            'no_hp' => $request->nohp1,
        ]);

        $player2 = valo_player::where('id', $request->id_peserta2);
        $player2->update([
            'name' => $request->nama2,
            'nick' => $request->nick2,
            'tagline' => $request->id2,
            'no_hp' => $request->nohp2,
        ]);


        $player3 = valo_player::where('id', $request->id_peserta3);
        $player3->update([
            'name' => $request->nama3,
            'nick' => $request->nick3,
            'tagline' => $request->id3,
            'no_hp' => $request->nohp3,
        ]);

        $player4 = valo_player::where('id', $request->id_peserta4);
        $player4->update([
            'name' => $request->nama4,
            'nick' => $request->nick4,
            'tagline' => $request->id4,
            'no_hp' => $request->nohp4,
        ]);

        $player5 = valo_player::where('id', $request->id_peserta5);
        $player5->update([
            'name' => $request->nama5,
            'nick' => $request->nick5,
            'tagline' => $request->id5,
            'no_hp' => $request->nohp5,
        ]);

        $player6 = valo_player::where('id', $request->id_peserta6);
        $player6->update([
            'name' => $request->nama6,
            'nick' => $request->nick6,
            'tagline' => $request->id6,
            'no_hp' => $request->nohp6,
        ]);

        $player7 = valo_player::where('id', $request->id_peserta7);
        $player7->update([
            'name' => $request->nama7,
            'nick' => $request->nick7,
            'tagline' => $request->id7,
            'no_hp' => $request->nohp7,
        ]);

        return redirect()->route('valo')->with('success', 'Berhasil Mengedit Data');
    }
}
