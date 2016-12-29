<?php
use App\User;

class CreatePostTest  extends FeatureTestCase {
	function test_a_user_create_a_post(){

		// having
		$title = "Esta es una pregunta";
		$content = "Este es el contenido";


		$this->actingAs($this->defaultUser())
		// When
		->visit(route('posts.create'))
		->type($title, 'title')
		->type($content, 'content')
		->press('Publicar');


		$this->seeInDatabase('posts', [
			'title' => $title,
			'content' => $content,
			'pending' => true,
			'user_id' => $this->defaultUser()->id,
		]);

		$this->see($title);
	}
}
