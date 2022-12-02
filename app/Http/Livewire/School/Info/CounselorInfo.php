<?php

namespace App\Http\Livewire\School\Info;

use Livewire\Component;

class CounselorInfo extends Component
{
    public $school;
    public $active = false;

    public function mount(){
        $this->school = \Auth::user()->selected_school;
    }

    public function render()
    {
        return view('livewire.school.info.counselor-info');
    }
}
