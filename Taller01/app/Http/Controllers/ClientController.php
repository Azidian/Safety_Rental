<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Clients - Safety Rental';
        $viewData['subtitle'] = 'List of clients';
        $viewData['clients'] = Client::all();

        return view('client.index')->with('viewData', $viewData);
    }

    public function show(string $id): View|RedirectResponse
    {
        $client = Client::find($id);

        if (! $client) {
            return redirect()->route('home.index');
        }

        $viewData = [];
        $viewData['title'] = $client->getName().' - Safety Rental';
        $viewData['subtitle'] = $client->getName().' - Client information';
        $viewData['client'] = $client;

        return view('client.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Create Client - Safety Rental';

        return view('client.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        // 1. Creamos el arreglo asociativo vacío con el nombre descriptivo
        $validationRules = [];
        
        // 2. Le agregamos las reglas paso a paso (Formato 1)
        $validationRules['role'] = 'required|string|max:255';
        $validationRules['name'] = 'required|string|max:255';
        $validationRules['lastName'] = 'required|string|max:255';
        $validationRules['birthDate'] = 'required|date';
        $validationRules['address'] = 'required|string|max:255';
        $validationRules['email'] = 'required|email|max:255';
        $validationRules['phone'] = 'required|numeric';
        $validationRules['identificationNumber'] = 'required|numeric';
        $validationRules['licenseNumber'] = 'required|numeric';
        $validationRules['emergencyContact'] = 'required|numeric';
        $validationRules['nameEmergencyContact'] = 'required|string|max:255';
        $validationRules['lastNameEmergencyContact'] = 'required|string|max:255';
        $validationRules['EPS'] = 'required|string|max:255';

        // 3. Pasamos tu arreglo completo a la validación de Laravel
        $request->validate($validationRules);

        // 4. Guardamos la información en la base de datos
        Client::create($request->all());

        // 5. Redirigimos a la vista index con el mensaje de éxito
        return redirect()->route('client.index')->with('success', 'Client created successfully');
    }

    public function delete(string $id): RedirectResponse
    {
        $client = Client::find($id);

        if ($client) {
            $client->delete();
        }

        return redirect()->route('client.index')->with('success', 'Client deleted successfully');
    }
}
