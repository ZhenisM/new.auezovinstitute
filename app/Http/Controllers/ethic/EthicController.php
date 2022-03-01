<?php
namespace App\Http\Controllers\ethic;
use App\Ethic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EthicController extends Controller
{
    public function index()
    {
        return view('ethic.index');
    }



    public function document($id)
    {
        $ethic = Ethic::where('id', $id)->first();
        return view('ethic.document', [
            'ethic' => $ethic,
        ]);
    }

    public function documentsList()
    {
        $ethics = Ethic::where('locale', \App::getLocale())->where('type', 'document')->get();
        return view('ethic.documentsList', [
            'ethics' => $ethics,
        ]);
    }

    public function ethicofficer()
    {
        $ethic = Ethic::where('type', 'ethicofficer')->where('locale', \App::getLocale())->first();
        return view('ethic.ethicofficer', [
            'ethic' => $ethic,
        ]);
    }
}
