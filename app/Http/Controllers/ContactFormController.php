<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactForm\Store;
use App\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact-form.create');
    }

    public function store(Store $request)
    {
        ContactForm::create($request->validated());

        return redirect()->back()->withSuccess('Pesan telah diterima dan menunggu tindak lanjut.');
    }
}
