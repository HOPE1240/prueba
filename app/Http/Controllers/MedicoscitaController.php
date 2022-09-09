<?php

namespace App\Http\Controllers;

use App\Models\Medicoscita;
use Illuminate\Http\Request;

/**
 * Class MedicoscitaController
 * @package App\Http\Controllers
 */
class MedicoscitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicoscitas = Medicoscita::paginate();

        return view('medicoscita.index', compact('medicoscitas'))
            ->with('i', (request()->input('page', 1) - 1) * $medicoscitas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicoscita = new Medicoscita();
        return view('medicoscita.create', compact('medicoscita'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Medicoscita::$rules);

        $medicoscita = Medicoscita::create($request->all());

        return redirect()->route('medicoscitas.index')
            ->with('success', 'Medicoscita created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicoscita = Medicoscita::find($id);

        return view('medicoscita.show', compact('medicoscita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicoscita = Medicoscita::find($id);

        return view('medicoscita.edit', compact('medicoscita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Medicoscita $medicoscita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicoscita $medicoscita)
    {
        request()->validate(Medicoscita::$rules);

        $medicoscita->update($request->all());

        return redirect()->route('medicoscitas.index')
            ->with('success', 'Medicoscita updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medicoscita = Medicoscita::find($id)->delete();

        return redirect()->route('medicoscitas.index')
            ->with('success', 'Medicoscita deleted successfully');
    }
}
