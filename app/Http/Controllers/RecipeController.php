<?php
/**
 * Created by PhpStorm.
 * User: komatsu
 * Date: 08/02/2018
 * Time: 16:07
 */

namespace App\Http\Controllers;


use App\Chef;
use App\Ingredient;
use App\Recipe;
use App\Recipe_ingredient;
use App\RecipeRepositories\RecipeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function __construct(RecipeRepository $recipes)
    {
        $this->middleware('auth');

        $this->recipes = $recipes;
    }

    public function index($chefId){
        $chef = Chef::find($chefId);

        $recipes = $chef->recipes;
//        dd($recipes);
        $data = [
            'chef' => $chef,
            'recipes' => $recipes
            // recipes tro thanh ten bien cua recipes trong index
        ];

        return view('recipe', $data);
    }

    public function recipe($recipeId){
        $recipe = Recipe::find($recipeId);
//        foreach ($recipe->ingredients as $ingredientId) {
//             $ingredientId->pivot->ingredient_id;
//
//        }
        $ingredients = $recipe->ingredients;
        $data = [
            'recipe' => $recipe,
            'ingredients' => $ingredients
        ];

        return view('detail',$data);
    }

    public function ingredient($ingredientId){
       $ingredient = Ingredient::find($ingredientId);
       $data = [
           'ingredient' => $ingredient
       ];

       return view('ingredient',$data);
    }

    public function edit($chefId){
        $chef = Chef::find($chefId);
        $recipes = $chef->recipes;

        $data = [
            'recipes' => $recipes,
            "chefId" => $chefId,
            'chef' => $chef,

        ];

        return view('edit-recipe',$data);
    }

    public function home() {
        $this->middleware('auth');
        $chefs = \App\Chef::orderBy('created_at', 'asc')->get();

        return view('home',[
            'chefs' => $chefs,
        ]);
    }

    public function landingPage() {

        return view('welcome');
    }

    public function addRecipe($chefId, \Illuminate\Http\Request $request) {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name' => 'required|max:255',

        ]);
        $chef = Chef::find($chefId);
        $this->authorize('addRecipe', $chef);

        if ($validator->fails()) {
            return redirect('/chef/'.$chefId.'/edit-recipe')
                ->withInput()
                ->withErrors($validator);
        }

        $recipe = new \App\Recipe();

        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->avatar_url = $request->avatar_url;
        $recipe->detail = $request->detail;
        $recipe->chef_id = $chefId;
        $recipe->save();

        return redirect('/chef/'.Auth::user()->id.'/edit-recipe');
    }



    public function deleteRecipe(Request $request, $chefId, \App\Recipe $recipe) {
        $this->authorize('deleteRecipe', $recipe);
        $recipe->delete();

        return redirect('/chef/'.$chefId.'/edit-recipe');
    }

    public function editDetail(Request $request, $chefId, Recipe $recipe)
    {
        $this->authorize('editDetail', $recipe);

        $data = [
            'recipe'=>$recipe,
            'chefId'=>$chefId,
        ];

        return view('edit-detail', $data);
    }

    public function editRecipe(Request $request, $chefId, Recipe $recipe)
    {
        $recipe->chef_id = $chefId;
        $recipe->avatar_url = $request->avatar_url;
        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->detail = $request->detail;
        $recipe->save();
        return redirect('/chef/'.$chefId.'/edit-recipe');
    }

    public function search(Request $request)
    {
        $chefs =  \App\Chef::orderBy('created_at', 'asc')->get();
        $results = Recipe::where('name','LIKE','%'.$request->recipe_name.'%')->get();
        $data = [
          'results'=>$results,
          'chefs'=>$chefs,
        ];

        return view('home', $data);
    }





//    public function editDetail($id)
//    {
//        $recipe = Recipe::find($id);
//        return view('recipe.edit', compact('recipe'));
//    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */


}