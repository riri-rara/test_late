<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('index');
    }

    // 確認画面の表示
    public function confirm(ContactRequest $request)
    {
        $validatedData = $request->validated();
        return view('confirm', [
            'surname' => $validatedData['surname'],
            'name' => $validatedData['name'],
            'gender' => $validatedData['gender'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'inquiry_type' => $validatedData['inquiry_type'],
            'inquiry_content' => $validatedData['inquiry_content']
        ]);

    }

    // お問い合わせ一覧表示
    public function index()
    {
        $contacts = Contact::with('category')->get(); // カテゴリをEagerロード
        return view('contacts.index', compact('contacts'));
    }

    // お問い合わせ詳細表示
    public function show($id)
    {
        $contact = Contact::with('category')->findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    // お問い合わせの保存
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // バリデーションルール
        ]);

        Contact::create($validatedData);
        return redirect()->route('thanks');
    }
}