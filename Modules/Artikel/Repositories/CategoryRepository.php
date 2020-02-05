<?php


namespace Modules\Artikel\Repositories;



/**
    * created By    : Bimo Anugrah Prasetyo
    * @filename     : CategoryRepositories
    * @lastModified : 22-01-2020, 15:05
 */


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Modules\Artikel\Entities\Category;
use Modules\Artikel\Entities\Article;
use Modules\Artikel\Repositories\Core\CategoryCoreRepositories;
use Modules\Artikel\Repositories\ArticleRepository;

class CategoryRepository implements CategoryCoreRepositories
{
    // model property on class instances
    protected $article;

    // Constructor to bind model to repo
    public function __construct(Category $category, Article $article)
    {
        $this->category = $category;
        $this->article = $article;
    }

    public function getCat()
    {
        return $this->category->withCount('articles')->get();
    }
    
    public function storeCategory($request)
    {
        return $this->category->create([
            'name'                  => $request->name,
            'slug'                  => $request->slug,
            'asigned'               => $request->asigned,
            'meta_tag_description'  => $request->meta_tag_description,
        ]);
        
    }

    public function deleteCategory($request)
    {
        $delete = $this->category->find($request->id)->delete();
        return $delete;
       
    }


}