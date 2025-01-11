# Group Project 
Web platform that provides advice for university students has been a deeply rewarding experience for me and my team.

## Grop Project contain the following sections :

For checking the design of the project , visit figma link:
https://www.figma.com/design/ilpvnSENLIy5M3ECJHZo3l/Plymouth-University?node-id=0-1

To see the Team tasks and Development stages you can follow Trello link bellow:
https://trello.com/invite/b/673bd9ebf0f6621456aeae4c/ATTIfbc076789e59ae3eff8c15e1ab1bed08D71
B8C25/group-13

### Low Fidelity Design
file contain initial prototype that analyse the main idea of the platform, you can find it on Low-fidelity branch

### FrontEnd Implementation:
contain HTML web page with CSS, Js and assets images , you can found it on Frontend branch.

### Backend Implementation:
contain the last version of the platform which developed using Laravel Framework , the project contain the Database migrations
of the project and the user interfaces. you can found it on the main brach
**Set up a Laravel project structure and environment.**
``` bash
composer global require laravel/installer
```
**Convert all HTML files to blade.**
**Create route for each page.**
```php
Route::get('/', ['uses' => 'HomeController@index','as'=>'index']);
Route::get('login', ['uses' => 'HomeController@login','as'=>'login']);
Route::get('register', ['uses' => 'HomeController@Register','as'=>'register']);
Route::get('map', ['uses' => 'HomeController@map','as'=>'map']);
Route::get('courses', ['uses' => 'HomeController@courses','as'=>'courses']);
Route::get('single_course', ['uses' => 'HomeController@single_course','as'=>'single_course']);
Route::get('advices', ['uses' => 'HomeController@advices','as'=>'advices']);
Route::get('chat', ['uses' => 'HomeController@chat','as'=>'chat']);
```
**Create controller to redirect the route on the specific blade page.**
```php
class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }
    public function Register(){
        return view('signup');
    }
    public function courses(){
        return view('courses');
    }
    public function map(){
        return view('map');
    }
    public function chat(){
        return view('chat');
    }
    public function single_course(){
        return view('single_course');
    }
    public function advices(){
        return view('advices');
    }
}
```
### Database
**Use Laravel migrations to create and manage MySQL database schemas.**
**for users entity:**
```bash
php artisan make:migration create_users_table
```
**for courses entity:**
```bash
php artisan make:migration create_courses_table
```
**for advices entity:**
```bash
php artisan make:migration create_advices_table
```
**for chats entity:**
```bash
php artisan make:migration create_chats_table
```
**for reviews entity:**
```bash
php artisan make:migration create_reviews_table
```

