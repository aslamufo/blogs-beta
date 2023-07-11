<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog as ModelsBlog;


class BlogList extends Component
{
    public $term="";
    
    public function render()
    {
        $blogs=ModelsBlog::where('heading','like','%'.$this->term.'%')->simplePaginate(4);
        return view('livewire.blog-list',['blogs'=>$blogs]);
        //  return view('livewire.blog');
    }
}
