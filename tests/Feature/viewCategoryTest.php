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
    public function a_user_can_read_all_categories(){
        $category = factory(Category::class)->create();

        // when user visit categories page
        $response = $this->get('/categories');

        // User should be able to read category
        $response->assertSee($category->category_name);
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function user_can_read_single_category(){
        $category = factory(Category::class)->create();
        $response = $this->get('/categories/'.$category->id);

        // check if user can see category details
        $response->assertSee($category->category_name)
            ->assertSee($category->addedBy->name);
        $response->assertStatus(200);
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
