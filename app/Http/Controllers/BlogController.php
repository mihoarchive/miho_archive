<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Pagination\Paginator;
use App\Models\BlogModel;
use MongoDB\BSON\Regex;

use DB;

class BlogController extends Controller
{
    

    public function year_split($year){
        $repatrn = 'datetime":"';
        $split_year = str_replace($repatrn,"-",$year);
        $split_year = explode("-",$split_year);
        $year = $split_year[1];
        $year = (int)$year;
        return $year;
    }

    public function yearRange(){
        $year_start = BlogModel::select("datetime",'blog_id')->get();
        $year_end = BlogModel::select("datetime")->latest('datetime')->first();

       
        $start = $this->year_split($year_start);
        $end = $this->year_split($year_end);

        $year_range = array();
        $year_range = range($start,$end);


        return $year_range;
    }



    public function get_blog(){
        $blogs = BlogModel::all();
        return view('blog',['blogs'=>$blogs]);
    }

    public function individual_blog($id){
        $blog_id = (string)$id;
        $blogs = BlogModel::where('blog_id',$blog_id)->get();
        $split_text = explode("blog",$id);
        $nextblog = (int)$split_text[1] + 1;
        $nextblog = sprintf("%03d",$nextblog);
        return view('blog',['blogs'=>$blogs],['nextblog'=>$nextblog]);
    }
    public function edit_blog($id){
        $blog_id = (string)$id;
        $blog = BlogModel::where('blog_id',$blog_id)->get();
        return view('edit_blog',['blogs'=>$blogs]);
    }
    
    public function blog_page(){
        $show_blog = BlogModel::select('blog_id','datetime','title')->orderBy('date','desc')->paginate(9);
        Paginator::useBootstrap();
        $year_range = $this->yearRange();
        return view('mainblog', ['blogs'=>$show_blog],['years'=>$year_range]);
    }

    public function searchBlog(){
        $search_keyword = $_GET['search'];
        $get_blog = BlogModel::select('blog_id','datetime','title')->where('title','LIKE','%'.$search_keyword.'%')->orWhere('datetime','LIKE','%'.$search_keyword.'%')->orWhere('article_str','LIKE','%'.$search_keyword.'%')->orderBy('date','desc')->get();
 
        return view('found',['blogs'=>$get_blog]);
    }





    public function yearSelected($year){
        $year = (string)$year;
        $split_text = explode("blog",$year);
        $regex = "/" . $split_text[1] . "/";   
        $blog_id = BlogModel::select('blog_id')->where('datetime', 'regexp', $regex)->paginate(9);
        Paginator::useBootstrap();        
        $year_range = $this->yearRange();
  
        return view('mainblog', ['blogs'=>$blog_id],['years'=>$year_range]);

    }

}