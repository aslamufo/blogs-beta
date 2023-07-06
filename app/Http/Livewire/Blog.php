<?php

namespace App\Http\Livewire;

use App\Models\Blog as ModelsBlog;
use Livewire\Component;

class Blog extends Component
{
    
    public $term="";
    
    public function render()
    {
        $blogs=ModelsBlog::where('heading','like','%'.$this->term.'%')->simplePaginate(2);
        return view('livewire.blog',['blogs'=>$blogs]);
        //  return view('livewire.blog');
    }
}
