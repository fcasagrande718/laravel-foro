<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class ExampleTest extends TestCase
{
  use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
      $user = factory(App\User::class)->create([
        'name' => 'faq faq',
        'email' => 'fcasagrande@decampoacampo.com'
      ]);
      $this->actingAs($user, 'api')
            ->visit('api/user')
           ->see('faq faq')
           ->see('fcasagrande@decampoacampo.com');
    }
}
