<?php

namespace App\Http\Controllers\Admin;

<<<<<<< HEAD
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\News;

use Carbon\Carbon;

use Carbon\Carbon;
=======
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\News;

>>>>>>> origin/master

class NewsController extends Controller
{
  public function add()
  {
      return view('admin.news.create');
  }

  public function create(Request $request)
  {

<<<<<<< HEAD
      // Varidationを行う
=======
      // Varidationをおこなう
>>>>>>> origin/master
      $this->validate($request, News::$rules);

      $news = new News();
      $form = $request->all();

      // formに画像があれば、保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $news->image_path = basename($path);
      } else {
          $news->image_path = null;
      }

      unset($form['_token']);
      unset($form['image']);
      // データベースに保存する
      $news->fill($form);
      $news->save();

      return redirect('admin/news/create');
  }

  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = News::where('title', $cond_title)->get();
      } else {
          $posts = News::all();
      }
      return view('admin.news.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

<<<<<<< HEAD
=======
  // 以下を追記
>>>>>>> origin/master

  public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $news = News::find($request->id);
<<<<<<< HEAD

=======
      if (empty($news)) {
        abort(404);    
      }
>>>>>>> origin/master
      return view('admin.news.edit', ['news_form' => $news]);
  }


  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, News::$rules);
      // News Modelからデータを取得する
      $news = News::find($request->id);
      // 送信されてきたフォームデータを格納する
      $news_form = $request->all();
      unset($news_form['_token']);

      // 該当するデータを上書きして保存する
      $news->fill($news_form)->save();
<<<<<<< HEAD
      
        // 以下を追記
        $history = new History();
        $history->news_id = $news->id;
        $history->edited_at = Carbon::now();
        $history->save();

      return redirect('admin/news/');
  }

  // 以下を追記　　
  public function delete(Request $request)
=======

      return redirect('admin/news');
  }
  
    public function delete(Request $request)
>>>>>>> origin/master
  {
      // 該当するNews Modelを取得
      $news = News::find($request->id);
      // 削除する
      $news->delete();
      return redirect('admin/news/');
  }  
<<<<<<< HEAD


}
=======
}
>>>>>>> origin/master
