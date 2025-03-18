<?php

declare(strict_types=1);

namespace App\Livewire\Plan;

use App\Models\Plan;
use Livewire\Component;

use function Pest\Laravel\get;

class ShowPlan extends Component
{
    public Plan $plan;
    public $date;
    public $amount;

    public function mount(Plan $plan)
    {
        $this->plan = $plan;
    }
    public function render()
    {
        $plan = $this->plan;
        $goal = $this->plan->goal()->first();
        $actions = $this->plan->planActions()->get();
        return view('livewire.plan.show-plan', compact('goal', 'plan', 'actions'));
    }
}
