<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog as ModelsBlog;


class BlogSidebar extends Component
{
    public $term="";
    
    public function render()
    {
        $blogs=ModelsBlog::where('heading','like','%'.$this->term.'%')->simplePaginate(2);
        return view('livewire.blog-sidebar',['blogs'=>$blogs]);
        //  return view('livewire.blog');
    }
}
