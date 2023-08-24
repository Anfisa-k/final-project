<?php

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/addArticle', function(){
    return view('pages.addArticle');
});
Route::post('/addArticle', function(Request $request){
    $userId = auth()->user()->id;
    $title = $request->title;
    $articleContent = $request->article;
    $article = new Article();
    $article->title = $title;
    $article->article = $articleContent;
    $article->author = $userId;
    $article->save();
    return view('welcome');
});
Route::get('/articles', function(){
    $articles = Article::all();
    return view('pages.articles', ['articles'=>$articles]);
});
Route::get('/article/{id}', function(Request $request){
    $articleId = $request->id;
    $article = Article::where('id', $articleId)->first();
    return view('pages.article', ['article'=>$article]);
});
require __DIR__.'/auth.php';
