<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;
class BooksController extends Controller {
	public function store(Request $request) {
		$data = request()->validate([
			'title' => 'required',
			'author' => 'required',
		]);
		// Book::create([
		// 	'title' => request('title'),
		// 	'author' => request('author'),
		// ]);
		Book::create($data);
		//Book::create($this->validateRequest());
	}
	public function update(Book $book){
		$data = request()->validate([
			'title' => 'required',
			'author' => 'required',
		]);
		$book->update($data);
		return redirect('/books/'.$book);
		//$book->update($this->validateRequest())
	}
	public function destroy(Book $book){
		$book->delete();
		return redirect('/books');
	}
	public function validateRequest(){
		$data = request()->validate([
			'title' => 'required',
			'author' => 'required',
		]);
	}
}
