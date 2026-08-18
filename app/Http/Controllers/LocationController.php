<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Location;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LocationController extends Controller
{
    public function menu(): View
    {
        return view('location.menu');
    }

    public function create(): View
    {
        return view('location.create');
    }

    public function store(LocationRequest $request): RedirectResponse
    {
        $location = new Location;

        $location->setAddress($request->address);
        $location->setName($request->name);
        $location->setHeadquarters($request->headquarters);
        $location->setPhone($request->phone);
        $location->setCity($request->city);

        $location->save();

        return redirect()
            ->route('location.index')
            ->with('success', 'Elemento creado satisfactoriamente');
    }

    public function index(): View
    {
        $locations = Location::all();

        return view('location.index', [
            'locations' => $locations,
        ]);
    }

    public function show(int $id): View
    {
        $location = Location::findOrFail($id);

        return view('location.show', [
            'location' => $location,
        ]);
    }

    public function destroy(int $id): RedirectResponse
    {
        $location = Location::findOrFail($id);

        $location->delete();

        return redirect()
            ->route('location.index');
    }
}
