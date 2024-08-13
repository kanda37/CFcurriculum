<?php

namespace App\Http\Controllers;

//use App\Models\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //ユーザ認証を追加

use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = auth()->user();
        $contacts = Contact::where('user_id', $user->id)->get();
        return view('contacts.index', compact('contacts'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    // 新規作成フォーム
    public function create()
    {
        return view('contacts.create');
    }

    // 新規作成処理
    public function store(Request $request)
    {
        $request->merge(['user_id' => Auth::user()->id]); //ユーザーIDを追加

        // バリデーションなどの処理を追加
        Contact::create($request->all());
        
        return redirect()->route('home');
    }

    public function destroy(Contact $contact) 
    {
        $contact->delete();
        return redirect()->route('home');
    }

    public function update(Request $request, Contact $contact) 
    {
        $contact->update($request->all());
        return redirect()->route('home');
    
    }
}
