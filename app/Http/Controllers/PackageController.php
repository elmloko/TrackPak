<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Place;
use App\Models\Location;
use Illuminate\Http\Request;

/**
 * Class PackageController
 * @package App\Http\Controllers
 */
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::paginate();

        return view('package.index', compact('packages'))
            ->with('i', (request()->input('page', 1) - 1) * $packages->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $package = new Package();
        $place = Place::pluck('name_place', 'id');
        $location = Location::pluck('name_location', 'id');
        return view('package.create', compact('package', 'place', 'location'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Package::$rules);

        $package = Package::create($request->all());

        return redirect()->route('packages.index')
            ->with('success', 'Package created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = Package::find($id);

        return view('package.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::find($id);
        $place = Place::pluck('name_place', 'id');
        $location = Location::pluck('name_location', 'id');
        return view('package.edit', compact('package', 'place', 'location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Package $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        request()->validate(Package::$rules);

        $package->update($request->all());

        $location = Location::find($request->input('location_id'));
        $package->location()->associate($location);
        $package->save();

        return redirect()->route('packages.index')
            ->with('success', 'Package updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $package = Package::find($id)->delete();

        return redirect()->route('packages.index')
            ->with('success', 'Package deleted successfully');
    }
}
