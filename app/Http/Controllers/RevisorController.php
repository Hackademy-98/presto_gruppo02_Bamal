<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $announcementToCheck = Product::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcementToCheck'));
    }

    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettato con successo');
    }
    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setRejected(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato con successo');
    }
}
