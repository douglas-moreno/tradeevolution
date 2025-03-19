<?php

declare(strict_types=1);

namespace App\Livewire\Plan;

use App\Models\Goal;
use App\Models\Plan;
use App\Models\Step;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\Attributes\Computed;

class CreatePlan extends Component
{
    public $step;
    public $name;
    public $description;
    public $goal;
    public $month;
    public $year;

    #[Computed]
    public function goals()
    {
        return Goal::where('step_id', $this->step)->get();
    }

    public function createPlan(): void
    {
        // dd($this->step, $this->goal, $this->name, $this->description, $this->month, $this->year);
        $this->validate([
            'step' => 'required',
            'goal' => 'required',
            'name' => 'required|min:3|max:255',
            'description' => 'min:3|max:255',
            'month' => 'required',
            'year' => 'required',
        ]);

        $plan = Plan::create([
            'step_id' => $this->step,
            'goal_id' => $this->goal,
            'name' => $this->name,
            'description' => $this->description,
            'month' => $this->month,
            'year' => $this->year
        ]);

        $this->redirect(route('plan.show', $plan), navigate: true);
    }

    public function render(): View
    {
        $steps = Step::all();

        return view('livewire.plan.create-plan', compact('steps'));
    }
}
