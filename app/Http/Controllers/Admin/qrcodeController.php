<?php

namespace App\Http\Controllers\Admin;

use App\qrcode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SimpleSoftwareIO\QrCode\Facades;

class qrcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qrcodes = qrcode::orderby('id', 'desc')->get();
        return view('admin.qrcodes.index',compact('qrcodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.qrcodes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'source' => 'required',
        ]);
        //$qrcode = \SimpleSoftwareIO\QrCode\Facades\QrCode::size('200')->generate($request->qrcode);
        $qrcode = base64_encode(\SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(200)->generate($request->source));
        qrcode::create(['name' => $request->name, 'source' => $request->source, 'qrcode' => $qrcode]);
        return redirect()->route('admin.qrcodes.index')->with('success','QRCode успешно создан.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(qrcode $qrcode)
    {
        return view('admin.qrcodes.show',compact('qrcode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(qrcode $qrcode)
    {
        return view('admin.qrcodes.edit',compact('qrcode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, qrcode $qrcode)
    {
        $request->validate([
            'name' => 'required',
            'source' => 'required',
        ]);
        //$qrcode->update($request->all());
        $qrcode_ = base64_encode(\SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(200)->generate($request->source));
        $qrcode->update(['name' => $request->name, 'source' => $request->source, 'qrcode' => $qrcode_]);
        return redirect()->route('admin.qrcodes.index')->with('success','QRCode успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(qrcode $qrcode)
    {
        $qrcode->delete();
        return redirect()->route('admin.qrcodes.index')->with('success','QRCode успешно удален');
    }
}
