<?php

namespace App\Http\Controllers\Dashboard;

use App\Datatables\CityTables;
use App\Datatables\LocationTables;
use App\Http\Controllers\Controller;

use App\Models\CustomerCampaign;
use App\Repository\Cities\CityRepositoryContract;
use App\Repository\Customers\CustomerRepositoryContract;

use App\Datatables\CustomerTables;
use App\Models\Customer;

use App\Repository\Locations\LocationRepositoryContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
{

    public function __construct(public LocationRepositoryContract $locationRepository)
    {
    }


    public function show(LocationTables $datatables){
        return $datatables->render("dashboard.pages.locations.index", [
            'entity' => "locations"
        ]);
    }

    public function create(Request $request){
        return view("dashboard.pages.locations.create");
    }

    public function store(Request $request){
        $input = $request->all();

        $rules = array(
            'title'  => 'required|string'
        );

        $validation = Validator::make($input, $rules);

        if ($validation->fails())
        {
            return Response::make($validation->errors()->first(), 400);
        }

        $this->locationRepository->create([
            'title' => $input['title']
        ]);

        return redirect()->back()->with('success', "Create new success");

    }
    public function edit($id){
        $item = $this->locationRepository->findOrFail($id);

        if(request()->ajax()){
            return view("dashboard.pages.customers.modal.edit", [
                'item' => $item,
                'route' => route('dashboard.customers.edit',['id' => $item->id])
            ]);
        }

        return view("dashboard.pages.customers.edit", [
            'item' => $item
        ]);
    }

    public function update($id, Request $request){
        $item = $this->locationRepository->find($id);

        $input = $request->except('_token');

        $rules = array(
            'title'  => 'required|string'
        );

        $validation = Validator::make($input, $rules);

        if ($validation->fails())
        {
            return Response::make($validation->errors()->first(), 400);
        }
        $item->slug = null;
        $item->name = $input['name'];

        $item->save();

        return redirect()->back()->with('success', 'Item Updated');
    }

    public function delete($id = null){
        if(request()->has('ids')){
            $ids = request()->get('ids');
            try {
                foreach ($ids as $id){
                    $this->locationRepository->destroy($id);
                }

                return response()->json(['success' => true], 200);
            }catch (\Exception $exception){
                return $exception->getMessage();
            }
        }
    }
}
