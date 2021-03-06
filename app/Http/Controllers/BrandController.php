<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Exception;

class BrandController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:delete-brand')->only('destroy');
    }


    public function index()
    {
        $brands = Brand::orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('admin.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(BrandRequest $request)
    {
        try {
            //check active
            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            if ($request->has('photo')) {
                $filePath = uploadImage('brand', $request->photo);
            }

            //save brand in DB
            $brand = Brand::create([
                'name' => $request->name,
                'is_active' => $request->is_active,
                'photo' => $filePath
            ]);

            return redirect()->route('admin.brands')->with(['success' => __('Success Save')]);

        } catch (Exception $ex) {

            return redirect()->route('admin.brands')->with(['error' => __('Erorr')]);

        }
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            return redirect()->route('admin.brands')->with(['error' => __('Not found')]);
        }
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(BrandRequest $request, $id)
    {
        try {
            $brand = Brand::find($id);
            if (!$brand) {
                return redirect()->route('admin.brands')->with(['error' => __('Not found')]);
            }
            //check active
            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            //edit brand in DB
            $brand->update($request->all());

            return redirect()->route('admin.brands')->with(['success' => __('Success Save')]);

        } catch (Exception $ex) {

            return redirect()->route('admin.brands')->with(['error' => __('Erorr')]);

        }

    }

    public function destroy($id)
    {

        try {
            $brand = Brand::find($id);
            if (!$brand) {
                return redirect()->route('admin.brands')->with(['error' => __('Not found')]);
            }

            $brand = Brand::with('models')->where('id', $id)->first();

            if ($brand->models->count() == 0) {
                $brand->delete();
            } else {
                return redirect()->route('admin.brands')->with(['error' => __('Error: cannot delete brand because model existence ')]);
            }

            return redirect()->route('admin.brands')->with(['success' => __('Success delete')]);

        } catch (Exception $ex) {

            return redirect()->route('admin.brands')->with(['error' => __('Error')]);

        }

    }
}
