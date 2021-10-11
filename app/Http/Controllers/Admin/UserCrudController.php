<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
        $this->crud->denyAccess("create");
        $this->crud->denyAccess("show");
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn(['name'=>'name','label'=>'Tên']);
        CRUD::addColumn(['name'=>'avatar','label'=>'Ảnh đại diện','type'=>'image']);
        CRUD::addColumn('email');
        CRUD::addColumn(['name'=>'role','type'=>'select_from_array','options'=>["Admin","Người dùng"]]);
        CRUD::addColumn(['label' => "Các khoá", 'type' => 'select_multiple', 'name' => 'categories', 'entity' => 'categories', 'model' => "App\Models\Category", 'attribute' => 'name', 'pivot' => true,]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserRequest::class);
        CRUD::addField(['name' => 'avatar', 'type' => 'browse']);
//        CRUD::addField(['name' => 'avatar', 'type' => 'image']);
        CRUD::addField([   // SelectMultiple = n-n relationship (with pivot table)
            'label' => "Các khoá",
            'type' => 'select2_multiple',
            'name' => 'categories', // the method that defines the relationship in your Model

            // optional
            'entity' => 'categories', // the method that defines the relationship in your Model
            'model' => "App\Models\Category", // foreign key model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        ]);
        CRUD::addField(
            [   // radio
                'name'        => 'role', // the name of the db column
                'label'       => 'Phân Quyền', // the input label
                'type'        => 'radio',
                'options'     => [
                    // the key will be stored in the db, the value will be shown as label;
                    0 => "Admin",
                    1 => "Người dùng"
                ],
                // optional
                //'inline'      => false, // show the radios all on the same line?
            ],
        );


        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
