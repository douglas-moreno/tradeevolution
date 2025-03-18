<?php

namespace App\Livewire\Plan;

use App\Models\Plan;
use Livewire\Component;

class ListPlan extends Component
{
    public function createPlan()
    {
        $this->redirect(route('plan.create'), navigate: true);
    }

    public function render()
    {
        return view('livewire.plan.list-plan', ['plans' => $plans = Plan::all()]);
    }
}
