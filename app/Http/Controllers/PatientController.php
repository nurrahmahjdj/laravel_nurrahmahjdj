<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $hospitals = Hospital::all();
        $query = Patient::with('hospital');

        if ($request->hospital_id) {
            $query->where('hospital_id', $request->hospital_id);
        }

        if ($request->name) {
            $query->where('name', 'like', '%'.$request->name.'%');
        }

        $patients = $query->get();
        return view('patients', compact('patients','hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>'required|string|max:255',
            'address'       =>'required|string|max:255',
            'phone'         =>'required|string|max:20',
            'hospital_id'   =>'required',
        ]);
        Patient::create($request->all());
        return redirect()->back()->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'address'       => 'required|string|max:255',
            'phone'         => 'nullable|string|max:20',
            'hospital_id'   => 'nullable|string|max:20',
        ]);

        $patient = Patient::findOrFail($id);
        $patient->update($request->all());
        return redirect()->back()->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return response()->json(['success'=>'Data berhasil dihapus']);
    }
}
