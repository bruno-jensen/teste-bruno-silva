<?php

namespace App\Http\Controllers\contact;

use App\Http\Controllers\Controller;
use App\Models\contact\Contact;
use Illuminate\Http\Request;
use DB;
use Log;
use Exception;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                
            
        $contactData['contactList'] = Contact::get();
        
        return view('contact.index', $contactData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        
        
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $newContact = new Contact();
        
        $newContact->Name = $data['Name'];
        $newContact->Contact = $data['Contact'];
        $newContact->email = $data['email'];
        
        try{
            $newContact->save();
        }
        catch(\Exception $exception){
            $errorCode = $exception->errorInfo[1];
            
            if($errorCode == 1062){
                Log::debug('Duplicated entry error at store!');
            }
        }
        
        return redirect('contact/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)    
    {
        //
        $contact = Contact::where('ID', $id)->first();
        $contact['id'] = $id;
        
        return view('contact.show', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contact = Contact::where('ID', $id)->first();
        $contact['ID'] = $id;
        
        return view('contact.edit', $contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
        $data = $request->all();        
        
        $contact->ID = $data['ID'];
        $contact->Name = $data['Name'];
        $contact->Contact = $data['Contact'];
        $contact->email = $data['email'];
        try{
            $contact->save();
        }
        catch(\Exception $exception){
            $errorCode = $exception->errorInfo[1];
            
            if($errorCode == 1062){
                Log::debug('Duplicated entry error at update!');
            }
        }
        
        return redirect('contact/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
        $contact->delete();
        
        return redirect('contact/');
    }
}
