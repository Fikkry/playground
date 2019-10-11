<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSort;

class ContactForm extends Model
{
    use AutoSort;
    use AutoFilter;

    protected $guarded = [];

    protected $searchableColumns = ['name', 'email', 'message'];
}
