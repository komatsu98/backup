<?php

Route::get('/chef/{chefId}','RecipeController@index');
Route::get('/recipe/{recipeId}','RecipeController@recipe');
Route::get('/ingredient/{ingredientId}','RecipeController@ingredient');
Route::get('/chef/{chefId}/edit-recipe','RecipeController@edit');
Route::get('/', 'RecipeController@landingPage');
Route::get('/home','RecipeController@home');
Route::post('/chef/{chefId}/edit-recipe/recipe', 'RecipeController@addRecipe');
Route::delete('/chef/{chefId}/edit-recipe/recipe/{recipe}', 'RecipeController@deleteRecipe');
Route::post('/chef/{chefId}/edit/{recipe}', 'RecipeController@editRecipe');
Route::post('/chef/{chefId}/edit/form/{recipe}', 'RecipeController@editDetail');
Route::post('/search','RecipeController@search');
Route::auth();



