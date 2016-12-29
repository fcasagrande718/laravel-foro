<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class test_basic_example extends FeatureTestCase
{

    function testBasicExample()
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
