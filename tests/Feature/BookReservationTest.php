<?php

namespace Tests\Feature;
use App\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookReservationTest extends TestCase {
	use RefreshDatabase;

	/**
	 * A basic test example.
	 *
	 * @return void
	 */
	// public function testBasicTest() {
	// 	$response = $this->get('/');

	// 	$response->assertStatus(200);
	// }
	/**
	 * @test
	 */
	
	public function a_book_can_be_deleted(){
		 $this->withoutExceptionHandling();
		 $this->post('/books', [
			'title' => 'Cool Book Title',
			'author' => 'Victor',
		]);
		 $book = Book::first();
		 $this->assertCount(1,Book::all());
		 $response = $this->delete('/books/'.$book->id);
		 $this->assertCount(0,Book::all());
		 $response->assertRedirect('/books');
	}
}
