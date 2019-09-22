<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::query()
            ->with('addedBy')
            ->withCount('subCategories')
            ->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), Category::rules());
        $category = $request->all();
        $category['added_by'] = auth()->user()->id;
        $newCategory = Category::create($category);
        $subcategory_array = $_POST['subcategory_name'];
        if ($subcategory_array != null){

            foreach ($subcategory_array as $subcategory_value){
                $subcategory['subcategory_name'] = $subcategory_value;
                $subcategory['category_id'] = $newCategory->id;
                //dd($subcategory);
                Subcategory::create($subcategory);
                $message = 'Category created successfully';
                return redirect()->to('/categories')->with('message', $message);
            }
        }else if ($request->post('subcategory_name') == null){
            $message = 'Category created successfully';
            return redirect()->to('/categories')->with('message', $message);
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::query()->where('id', $id)
            ->with('subCategories')->first();
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        $message = 'Category deleted successfully';
        return redirect()->back()->with('message', $message);
    }
}
