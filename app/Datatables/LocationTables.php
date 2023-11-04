<?php
namespace App\Datatables;

use App\Core\Datatables\DatatablesService;
use App\Models\Location;

class LocationTables extends DatatablesService{

    public function query()
    {
        $query = Location::query();
        return $query->orderBy('id', 'asc');
    }

    public function columns()
    {
        $this->addColumn([
            'data' => 'checkbox',
            'class' => 'text-center dt-id',
            'searchable' => false,
            'orderable' => false,
            'title' => '<div class="form-check text-center">
                                <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                            </div>',
            'render' => function($value){
                return '<div class="custom-control custom-checkbox text-center">
                        <input type="checkbox" name="chk_child" value="'.$value->id.'" class="dataTable-checkbox">
                        </div>';
            },
            'raw' => true
        ]);
        $this->addColumn([
            'data' => 'id',
            'name' => 'id',
            'title' => 'Id',
            'searchable' => false,
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'class' => 'text-center dt-id'
        ]);
        $this->addColumn([
            'data' => 'name',
            'name' => 'name',
            'title' => 'Location',
            'searchable' => true,
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'class' => 'dt-md'
        ]);

        $this->addColumn([
            'data' => 'action',
            'class' => 'text-center dt-id',
            'title' => 'Hành động',
            'raw' => true,
            'render' => function($value){
                return view('dashboard.pages.cities.partials.action', ['value' => $value]);
            },
        ]);
    }
}