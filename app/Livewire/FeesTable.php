<?php

namespace App\Livewire;

use App\Models\Fee;
use Livewire\Component;
use Livewire\WithPagination;

class FeesTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    public function render()
    {
        $fees = Fee::search($this->search)->paginate($this->perPage);
        return view('livewire.fees-table', compact('fees'));
    }
}
