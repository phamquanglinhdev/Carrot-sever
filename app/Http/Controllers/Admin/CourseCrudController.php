<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CourseRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CourseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CourseCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Course::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/course');
        CRUD::setEntityNameStrings('Khóa học', 'Các khóa học');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn(['name' => 'name', 'label' => 'Tên Khóa']);
        CRUD::addColumn(['name' => 'price', 'label' => 'Học phí','type'=>'number']);
        CRUD::addColumn(['name' => 'lesson', 'label' => 'Số buổi']);
        CRUD::addColumn(['name' => 'hours', 'label' => 'Số giờ/buổi']);

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
        CRUD::setValidation(CourseRequest::class);

        CRUD::addField(['name' => 'name', 'label' => 'Tên khóa học']);
        CRUD::addField(['name' => 'price', 'label' => 'Học phí (Để trống nếu là giá liên hệ)','type'=>'number']);
        CRUD::addField(['name' => 'lesson', 'label' => 'Số buổi học (Để trống nếu là tùy chọn)','type'=>'number']);
        CRUD::addField(['name' => 'hours', 'label' => 'Số giờ học (Để trống nếu là tùy chọn)']);
        CRUD::addField([
            'name' => 'thumbnail',
            'type'=>'image',
            'label' => 'Ảnh bìa',
            'crop'=>true,
            'aspect_ratio'=>1,
        ]);
        CRUD::addField(['name' => 'content', 'label' => 'Nội dung','type'=>'document']);
        CRUD::addField(['name' => 'status', 'label' => 'Tình trạng','type'=>'select_from_array','options'=>['Nháp','Đã đăng']]);

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
