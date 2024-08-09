<?php


namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return view('index', compact('mobils'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'merek' => 'required',
            'type' => 'required',
            'cc' => 'required',
            'tahun' => 'required',
            'decs' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Mobil::create([
            'nama' => $request->nama,
            'merek' => $request->merek,
            'type' => $request->type,
            'cc' => $request->cc,
            'tahun' => $request->tahun,
            'decs' => $request->decs,
            'image' => $imagePath,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Mobil created successfully.');
    }


    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('show', compact('mobil'));
    }


    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('edit', compact('mobil'));
    }

    public function update(Request $request, $id)
    {
        $mobil = Mobil::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'merek' => 'required',
            'type' => 'required',
            'cc' => 'required',
            'tahun' => 'required',
            'decs' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $mobil->image;
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($mobil->image);
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $mobil->update([
            'nama' => $request->nama,
            'merek' => $request->merek,
            'type' => $request->type,
            'cc' => $request->cc,
            'tahun' => $request->tahun,
            'decs' => $request->decs,
            'image' => $imagePath,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Mobil updated successfully.');
    }


    public function destroy($id)
    {
        $mobil = Mobil::findOrFail($id);

        if ($mobil->image) {
            Storage::disk('public')->delete($mobil->image);
        }

        $mobil->delete();

        return redirect()->route('dashboard.index')->with('success', 'Mobil deleted successfully.');
    }
}
