<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Valo_team;
use App\Models\Valo_player;
use Illuminate\Support\Facades\DB;

class ValorantController extends Controller
{
    public function index(){
        $team = Valo_team::where('status', '=', 'pending')->get();
        $konfirmasi = Valo_team::where('status', '=', 'approved')->get();
        $tolak = Valo_team::where('status', '=', 'not_approved')->get();
        return view('admin.valorant.index', compact('team', 'konfirmasi', 'tolak'));
    }

    public function edit($id)
    {
        $team = Valo_team::find($id);
        $player = Valo_player::where('team_id', $id)->get();
        // return $player;
        return view ('admin.valorant.edit', [
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

        return redirect()->route('valo-admin')->with('success', 'Berhasil Mengedit Data');
    }

    public function detail($id){
        $team = Valo_team::find($id);
        return view('admin.valorant.detail', compact('team'));
    }

    public function delete($id){
        DB::table('Valo_teams')->where('id', $id)->delete();
        return redirect()->route('valo-admin')->with('success', 'Data Berhasil Dihapus');
    }

    public function approve($id)
    {
        DB::table('Valo_teams')->where('id', $id)
            ->update([
            'status' => 'approved'
            ]);
            return redirect()->route('valo-admin')->with('success', 'Bukti Pembayaran Berhasil Dikonfirmasi');
    }

    public function Tolak($id)
    {
        DB::table('Valo_teams')->where('id', $id)
            ->update([
            'status' => 'not_approved'
            ]);
            return redirect()->route('valo-admin')->with('success', 'Bukti Pembayaran Berhasil Ditolak');
    }
}
