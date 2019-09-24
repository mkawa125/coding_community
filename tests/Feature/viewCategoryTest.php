<?php

namespace Tests\Feature;

use App\Models\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class viewCategoryTest extends TestCase
{
    use WithoutMiddleware;
//    use RefreshDatabase;

    public function testGetAllCategories(){
        $category = factory(Category::class)->create();
        $resp = $this->get('/categories');
        $resp->assertStatus(200);
    }
}
