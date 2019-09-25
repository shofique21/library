<?php

namespace Tests\Feature;
use App\Author;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthManagementTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**
	 * @test
	 */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function an_auth_can_be_created(){
        $this->withoutExceptionHandling();
        $this->post('/author',[
            'name'=> 'Author name',
            'dob' => '05/14/1995',
        ]);
        $this->assertCount(1,Author::all());
        //$this->assertInstancOf(Carbon::class, $author->first()->dob);
       // $this->assertEquals('1995/14/05',$author->first()->dob->format('Y/d/m'));
    }
}
