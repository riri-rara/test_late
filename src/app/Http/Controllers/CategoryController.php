<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
class CategoryController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(CategoryRequest $request)
    {
        $validatedData = $request->validated();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('auth.login');
    }

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // 特定カテゴリのコンタクトを表示
    public function showContactsByCategory($id)
    {
        $category = Category::with('contacts')->findOrFail($id);
        return view('categories.contacts', compact('category'));
    }
}


