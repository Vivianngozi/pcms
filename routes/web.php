<?php

use Illuminate\Support\Facades\Route;
//for eloquent
use App\Models\Post;

// for eloquent user model
use App\Models\User;

use App\Models\Role;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Video;

use App\Models\Tag;

use App\Http\Controllers\postcontroller;

use Carbon\Carbon;


// Route::get('/insert', function() {
//    Country::create(['name'=>'Nigeria']);
// });

// Route::get('/insert', function() {
//     $country = new Country;

//     $country->name = 'Uk';

//     $country->save();
// });




/*
|--------------------------------------------------------------------------
| Eloquent Relationship
|--------------------------------------------------------------------------
*/
//one to one relationship to get post
// Route::get('/user/{id}/post', function($id) {
//     return User::find($id)->post->title;
// });

//one to one relationship to get user
// Route::get('/post/{id}/user', function($id) {
//     return post::find($id)->user->name;
// });

//one to many
// Route::get('/post', function(){
//     $user = User::find(1);
//     foreach($user->posts as $post){
//         echo $post->content . "<br>";
//     }
// });


// many to many

// Route::get('/user/{id}/role', function($id) {
//     $user = User::find($id);

//     foreach($user->roles as $role){
//         return $role->name;
//     }
// });

// Or

// Route::get('/user/{id}/role', function($id) {

//     $user = User::find($id)->roles()->OrderBy('id', 'desc')->get();

//     return $user;

// });

// Route::get('/role/{id}/user', function($id) {
//         return Role::find($id)->users;
//     });

// return intermediate
// Route::get('/user/pivot', function() {
//     $user = User::find(1);
    
//     foreach($user->roles as $role){
//         echo $role->pivot->created_at;
//     }
// });
//or
// Route::get('/user/{id}/pivot', function($id) {
//     $user = User::find($id);
    
//     foreach($user->roles as $role){
//         echo $role->pivot->created_at;
//     }
// });

//has many through relationship

// Route::get('/user/country', function() {
//     $country = Country::find(2);

//     foreach ($country->posts as $post) {
//         # code...
//         return $post->title;
//     }
// });



// Polymorphic relationships
// Route::get('/user/photos', function(){


//     $user = User::find(1);

//     foreach($user->photos as $photo) {
//     return $photo;
// }

// });
// Route::get('/post/photos', function() {

//     $post = Post::find(1);

//     foreach($post->photos as $photos) {
//         echo $photos->path . "<br>";
//     }
// });

// //to return the user

// Route::get('/user/{id}/photos', function($id) {
//     $photo = Photo::findOrFail($id);

//     return $photo->imageable;
// });

// many to many

// retrieving tag
// Route::get('/post', function() {
//     $post = Post::findOrFail(1);

//     foreach($post->tags as $tag){
//         echo $tag->name;
//     }
// });
// Route::get('video/{id}/tag', function($id){
//     $video = Video::findOrFail($id);
//     foreach($video->tags as $tags){
//         echo $tags->name;
//     }
// });


// retrieving post
// Route::get('/tag/post', function() {
//     $tag = Tag::find(1);

//     foreach($tag->posts as $post) {
//         echo $post->title;
//     }
// });

/*
|--------------------------------------------------------------------------
| Eloquent or object relational mapper
|--------------------------------------------------------------------------
*/

// Route::get('/read', function(){
//     $posts = Post::all();

//     foreach($posts as $post){
//         return $post->title;
//     }

// });
// Route::get('/find', function(){
//     $posts = Post::find(2);

//     return $posts->title;

    
// });



// Route::get('/findwhere', function(){
//     $posts = Post::where('id',2)->orderBy('id', 'desc')->take(1)->get();
//     return $posts;
// });

// Route::get('/findmore', function(){
//     // $posts = Post::findOrFail(2);

//     // return $posts;

//     $posts = Post::where('title', '<', 50)->firstOrFail();
//     return $posts->title;
// });

/*
|--------------------------------------------------------------------------
| Eloquent insert
|--------------------------------------------------------------------------
*/

// Route::get('/basicinsert', function(){
//     $post = new Post;

//     $post->title = 'I love this course';
//     $post->user_id = 2;
//     $post->content = 'I want to be the best at it';

//     $post->save();
// });

/*
|--------------------------------------------------------------------------
| Eloquent basic update
|--------------------------------------------------------------------------
*/

// Route::get('/basicinsert2', function(){
//     $post = Post::find(5);

//     $post->title = 'You can do it';
//     $post->content = 'add content';

//     $post->save();
// });


/*
|--------------------------------------------------------------------------
| Eloquent create
|--------------------------------------------------------------------------
*/

// Route::get('/create', function(){
//     Post::create(['title'=>'Life is beautiful', 'content'=>'I\'m live it']);
// });


/*
|--------------------------------------------------------------------------
| Eloquent update
|--------------------------------------------------------------------------
*/


// Route::get('/update', function(){
//     Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'new tile!!!', 'content'=>'The latest']);
// });


/*
|--------------------------------------------------------------------------
| Eloquent delete
|--------------------------------------------------------------------------
*/

// Route::get('/delete', function(){
    // $post = Post::find(5);

    // $post->delete();

     //Or
    // Post::destroy(6);

    //multiply delete

    // Post::destroy([2,3]);
    //or Post::where('is_admin', 0)->delete;
// });

/*
|--------------------------------------------------------------------------
| Eloquent soft delete
|--------------------------------------------------------------------------
*/

// Route::get('/softDelete', function(){
//     Post::find(9)->delete();
// });


/*
|--------------------------------------------------------------------------
| Eloquent soft delete retrieve
|--------------------------------------------------------------------------
*/

// Route::get('/readSoftDelete', function(){
    //this won't work because it will not just fetch the trash
    // $post = Post::find(7);
    // return $post;

    // $post = Post::withTrashed()->where('id', 1)->get();
    // return $post;


    //for multiply items
//     $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//     return $post;
// });





/*
|--------------------------------------------------------------------------
| Eloquent restore
|--------------------------------------------------------------------------
*/
// Route::get('/restore', function(){
//     Post::withTrashed()->where('is_admin', 0)->restore();
// });


/*
|--------------------------------------------------------------------------
| Eloquent permanent delete
|--------------------------------------------------------------------------
*/

// Route::get('/forceDelete', function() {
    //it will delete all items in the database
    // Post::withTrashed()->where('is_admin', 0)->forceDelete();


//     Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });



/*
|--------------------------------------------------------------------------
| Database insert
|--------------------------------------------------------------------------
*/



// Route::get('/insert', function (){
//     DB::insert('insert into posts(title, content) values(?, ?)', ['Never give up', 'Ngozi, you have to do this']);
// });



/*
|--------------------------------------------------------------------------
| Database sql raw queries
|--------------------------------------------------------------------------
*/
// Route::get('/read', function() {
//     $result = DB::select('select * from posts where id=?', [1]);

//     foreach($result as $post){
//         // return $post->title;

//         // return $result;

//         return var_dump($result);

//     }
// });

// Route::get('/update', function() {
//     $update = DB::update('update posts set title="NEW UPDATE" where id=?',[1]);
//     return $update;
// });

// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts where id = ?', [1]);
//     return $deleted;
   
// });


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

// Route::get('/', function () {
//     return view('welcome');


// });

// Route::get('/think', function() {
//     return "Yes ooo, I am thinking";
// });


  

// use App\Http\Controllers\postcontroller;



// Route::resource('/posts' , postcontroller::class);


// Route::get('/latest', [postcontroller::class, 'latest']);
//for contact
// Route::get('/contact', [postcontroller::class, 'contact']);


// Route::get('/post/{id}/{name}/{password}', [postcontroller::class, 'show_post']);

// use App\Http\Controllers\postcontroller;
// Route::get('/post/{id}', [postcontroller::class, 'index']);

// Route::get('test',[TestController::class, 'test']);


// Route::get('/about', function () {
//     return "Hi about page";


// });

// Route::get('/contact', function () {
//     return "Hi contact page";


// });
// Route::get('/post/{id}/{name}', function($id, $name) {
//     return "Hi post page ". $id. " ". $name;
// });


// Route::get('/admin/posts/example', array ('as' => 'admin.home', function (){

//     $url = Route('admin.home');

//     return "This url is ". $url;



// }));







/* Forms and Validation */

Route::group(['middleware'=> 'web'], function() {

    Route::resource('/posts', postcontroller::class);


    /* Date  */

    Route::get('/date', function() {

        $date = new DateTime('+1 week');

        echo $date->format('d-m-y');

        echo '<br>';

        echo Carbon::now()->addDays(4)->diffForHumans();
        echo '<br>';

        echo Carbon::now()->subMonths(2)->diffForHumans();

        echo '<br>';

        echo Carbon::now()->yesterday()->diffForHumans();

        
    });


    Route::get('/getName', function() {

        $user = User::find(1);
        
        echo $user->name;
    });


    Route::get('/setName', function() {
        $user = User::find(1);

        $user->name = 'Vivian';

        $user->save();

        echo 'Nice one, Vivian';
    });
});





