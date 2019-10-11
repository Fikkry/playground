<?php

namespace App\Http\Controllers\Admin;

use App\ContactForm;
use App\Http\Controllers\Controller;
use Suitable;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        $data = ContactForm::autoSort()->paginate(5);
        $table = Suitable::source($data)
        ->columns([
            'id',
            ['header' => 'Nama', 'field' => 'name', 'sortable' => true, 'searchable' =>true],
            ['header' => 'Email', 'field' => 'email', 'sortable' => true, 'searchable' =>true],
            ['header' => 'Message', 'field' => 'message', 'sortable' => true, 'searchable' =>true],
        ])
        ->search()
        ->render();

        return view('contact-form.index', compact('table', 'data'));
    }
}
