<?php

namespace App\Http\Controllers\Contacts;

use App\Models\Contact\Contact;
use App\Http\Controllers\Controller;

class ActivitiesController extends Controller
{
    /**
     * Get all the activities for this contact.
     */
    public function index(Contact $contact)
    {
        return view('people.activities.index')
            ->withContact($contact);
    }
}