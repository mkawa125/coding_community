<?php

namespace Tests\Feature;

use App\Models\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\User;

class viewCategoryTest extends TestCase
{
    use WithoutMiddleware;
    use WithFaker;
//    use RefreshDatabase;

    /** @test */
    public function testGetAllCategories(){
        $category = factory(Category::class)->create();
        $resp = $this->get('/categories');
        $resp->assertStatus(200);
    }

    /** @test */
    public function create_return_validation_error(){
//        $userIds = User::all()->pluck('id')->toArray();
//        $data = [
//            'category_name' => $this->faker->name,
//            'description' => $this->faker->sentence,
//            'added_by' => $this->faker->randomElement($userIds)
//        ];
//        $response = $this->post('categories', $data);
//        $response->assertStatus(302);
//        $response->assertSessionHasErrors($data);
    }
}
