<?php

namespace App\Http\Controllers\Author;

use App\Models\Book;
use App\Models\like;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $data['book'] = DB::table('books')
                ->select('books.*','likes.like', 'users.name as name', 'users.img as img', 'users.occupation as occupation', 'categories.category_name')
                ->leftjoin('likes', function($join){
                    $join->on('books.id', '=', 'likes.book_id');
                    $join->where('likes.user_id', Auth::user()->id );
                }) 
                ->leftjoin('users', 'users.id', 'books.user_id') 
                ->leftjoin('categories', 'books.category_id', 'categories.id') 
                ->orderBy('books.id', 'DESC')
                ->simplePaginate(5);
        // like count 
        $data['count'] = DB::table('likes')
                ->select("books.id as pid", DB::raw("COUNT(likes.book_id) as countLike"))
                ->leftjoin('books', 'books.id', 'likes.book_id' )
                ->groupBy('books.id')->get();
        // all user 
        $data['user'] = User::where('id', '!=', Auth::user()->id)->orderBy('id', 'DESC')->simplePaginate(5); 
        
        // emoji 
        $data ['emj_like'] = '👍🏻';
        $data ['emj_heart'] = '💖';
        $data ['emj_love'] = '😍';
        $data ['emj_cry'] = '😭';
        return view('pages.single-book')->with($data);
    }

    /**
     * Edit profile
     */
    public function editProfile(){
        return view('pages.edit-profile');
    }

    /**
     * Edit  Profile User
     */
    public function editProfileUser(Request $request){
        $id = Auth::user()->id;
        $user = User::findorfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->occupation = $request->occupation;
        $user->birthday = $request->birthday;
        $user->address = $request->address;
        $save = $user->save();
        if($save){
            session()->flash('level', 'success');
            session()->flash('msg', 'Add Successfully. ');
            return redirect()->route('author.home');
        }  
    }


    /**
     * Edit Profile Img
     */
    public function editProfileImg(Request $request){
        $image = $request->file('img');
        if($image){
            $image_name = 'user_image_'.rand(100,999).'.'.strtolower($image->getClientOriginalExtension());
            if($request->old_img){
                if($request->old_img == "public/frontend/img/user/avatar.png"){

                }else{
                    unlink($request->old_img);
                }
            }
            $upload_path = "public/frontend/img/user/";
            $image->move($upload_path,$image_name);
            $save = DB::table('users')->where('id',Auth::user()->id)->update(['img'=>$image_name]);
            if($save){
                session()->flash('level', 'success');
                session()->flash('msg', 'Add Successfully. ');
                return redirect()->route('author.home');
            } 
        }
    }
    /**
     * Store a new book
     */
    public function bookStatus(Request $request)
    {
        $book = new book();
        $book->book = $request->bookVal;
        $book->user_id = Auth::user()->id;
        $book->save();
        $cid = $book->id;
        $lastbook = book::where('id', $cid)->first();
        $img = asset('public/frontend/img/user/'.Auth::user()->img);
        $data = [
            'book' => $request->bookVal,
            'uname' => Auth::user()->name,
            'occupation' => Auth::user()->occupation,
            'pic' => $img,
            'p_time' => $lastbook->created_at->diffForHumans(),
            'p_id' => $lastbook->id            
        ];
        return response()->json($data);
    }

    /**
     * Store likes
     */
    public function likeStore(Request $request)
    {
        $like = $request->like;
        $book_id = $request->book_id;
        $likeShow = DB::table('likes')
                    ->select('likes.id as lid')
                    ->join('books', 'books.id', 'likes.book_id')
                    ->where('likes.book_id', $book_id)
                    ->where('likes.user_id', Auth::user()->id)
                    ->first();
        if($likeShow){
            DB::table('likes')
                ->where('id',$likeShow->lid)
                ->update(['like'=>$like]);
        }else{
            $like = new like();
            $like->like = $request->like;
            $like->book_id = $request->book_id;
            $like->user_id = Auth::user()->id;
            $like->save(); 
        }
        $countLike = DB::table('likes')
        ->select(DB::raw("COUNT(likes.book_id) as countLike"))
        ->where('likes.book_id', $book_id )
        ->first();
        return response()->json($countLike);        
    }

    // single user 
    public function profile($name, $id){
        $data['book'] = DB::table('books')
                        ->select('books.*','books.created_at as time', 'likes.like', 'users.name as name', 'users.img as img', 'users.occupation as occupation')
                        ->leftjoin('likes', function($join){
                            $join->on('books.id', '=', 'likes.book_id');
                            $join->where('likes.user_id', '=', Auth::user()->id);
                        }) 
                        ->leftjoin('users', 'users.id', 'books.user_id') 
                        ->where ('books.user_id', $id)
                        ->orderBy('books.id', 'DESC')
                        ->simplePaginate(5);

        // like count 
        $data['count'] = DB::table('likes')
                        ->select("books.id as pid", DB::raw("COUNT(likes.book_id) as countLike"))
                        ->leftjoin('books', 'books.id', 'likes.book_id' )
                        ->groupBy('books.id')
                        ->get();

        // all user 
        $data['user'] = User::where('id', '!=', $id)->orderBy('id', 'DESC')->simplePaginate(5); 
        $data['single_user'] = User::where('id', $id)->first(); 
        // emoji 
        $data ['emj_like'] = '👍🏻';
        $data ['emj_heart'] = '💖';
        $data ['emj_love'] = '😍';
        $data ['emj_cry'] = '😭';
        $data ['name'] = $name;
        return view('pages.profile')->with($data);
    }

    // single book view 
    public function bookView($id){
        $data['book'] = Book::where('id', $id)->where('status', 1)->first();
        $data['category'] = Category::where('status', 1)->get();
        return view('pages.index', $data);
    }
    // single book view 
    public function catBook($id){
        $data['book'] = Book::where('category_id', $id)->where('status', 1)->get();
        $data['category'] = Category::where('id', $id)->where('status', 1)->first();
        return view('pages.category', $data);
    }
}
