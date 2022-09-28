<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequestRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ContactRequestCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ContactRequestCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ContactRequest::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/contact-request');
        CRUD::setEntityNameStrings('contact request', 'contact requests');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name');
        CRUD::column('email');
        CRUD::column('number');
        CRUD::column('subject');
        CRUD::column('message');
        CRUD::column('by');
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ContactRequestRequest::class);

        $this->crud->addField([
            'label' => "Added By",
            'type' => "select_from_array",
            'name' => 'by',
            'options' => ['phone' => 'Phone', 'website' => 'Website', 'email' => 'Email', 'social' => 'Social'],
        ]);

        $this->crud->addField([
            'type' => "text",
            'name' => 'name',
        ]);
        $this->crud->addField([
            'type' => "email",
            'name' => 'email',
        ]);
        $this->crud->addField([
            'type' => "text",
            'name' => 'number',
        ]);
        $this->crud->addField([
            'type' => "text",
            'name' => 'subject',
        ]);
        $this->crud->addField([
            'type' => "textarea",
            'name' => 'message',
        ]);

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
