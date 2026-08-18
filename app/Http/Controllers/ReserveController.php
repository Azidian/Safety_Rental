<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReserveRequest;
use App\Models\Reserve;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ReserveController extends Controller
{
    public function index(): View
    {
        return view('reserves.index', [
            'reserves' => Reserve::query()->orderBy('id')->get(),
        ]);
    }

    public function create(): View
    {
        return view('reserves.create');
    }

    public function store(StoreReserveRequest $request): RedirectResponse
    {
        Reserve::create($request->validated());

        return redirect()
            ->route('reserves.index')
            ->with('success', 'Elemento creado satisfactoriamente');
    }

    public function show(Reserve $reserve): View
    {
        return view('reserves.show', compact('reserve'));
    }

    public function destroy(Reserve $reserve): RedirectResponse
    {
        $reserve->delete();

        return redirect()->route('reserves.index');
    }
}
