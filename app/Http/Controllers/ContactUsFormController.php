<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsFormController extends Controller {
    // Create Contact Form
    public function createForm() {
        return view('contact');
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
        ]);
        //  Store data in database
        Contact::create($request->all());
        //
        return back()->with('success', 'We hebben uw bericht ontvangen! We nemen zo snel mogelijk contact met u op.');
    }
}
