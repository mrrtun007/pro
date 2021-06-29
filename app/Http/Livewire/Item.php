<?php

namespace App\Http\Livewire;
use App\Models\Customerdata;
use Livewire\Component;

class Item extends Component
{
    public $searchTerm;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $costomerdata = Customerdata::with('storename','name',$searchTerm)
            ->orWhere('storename','LINK',$searchTerm)
            ->orWhere('name','LINK',$searchTerm)
            ->orWhere('address','LINK',$searchTerm)
            ->orWhere('number','LINK',$searchTerm)
            ->orWhere('sn','LINK',$searchTerm)
            ->orWhere('link','LINK',$searchTerm)
            ->orWhere('code','LINK',$searchTerm) 
            ->orderBy('id','DESC')->get();
        return view('livewire.item',['Costomerdata'=>$costomerdata]);
    }
}
