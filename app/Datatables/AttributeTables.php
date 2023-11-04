<?php
namespace App\Datatables;

use App\Models\Attribute;
use App\Core\Datatables\DatatablesService;

class AttributeTables extends DatatablesService{

    public function query()
    {
        $query = Attribute::query();
        return $query->orderBy('id', 'desc');
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
            'title' => 'Title',
            'searchable' => true,
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'class' => 'dt-medium'
        ]);

        $this->addColumn([
            'data' => 'action',
            'class' => 'text-center dt-id',
            'title' => 'Action',
            'raw' => true,
            'render' => function($value){
                return view('dashboard.pages.attributes.partials.action', [
                    'value' => $value,
                    'entity' => "attributes"
                ]);
            },
        ]);
    }
}