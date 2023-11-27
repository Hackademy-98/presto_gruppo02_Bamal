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

    public function acceptAnnouncement(Product $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettato con successo');
    }
    public function rejectAnnouncement(Product $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato con successo');
    }
}
