<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ld;
use Illuminate\Support\Str;
use Mediconesystems\LivewirDatables\Column;
use Mediconesystems\LivewirDatables\NumberColumn;
use Mediconesystems\LivewirDatables\DataColumn;
use Mediconesystems\LivewirDatables\Http\Livewire\LivewireDatatable;

class LivewireDatatables extends LivewireDatatables
{
   /* public function render()
    {
        return view('livewire.livewire-datatables');
    }
    */
    public $model = La::class;

}
