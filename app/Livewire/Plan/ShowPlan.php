<?php

declare(strict_types=1);

namespace App\Livewire\Plan;

use App\Models\Plan;
use Flux\Flux;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ShowPlan extends Component
{
    public Plan $plan;

    #[Validate('required')]
    public string $date;

    #[Validate('required|numeric')]
    public string $amount;

    public function addResult(): void
    {
        $this->plan->planActions()->create([
            'date' => $this->date,
            'amount' => $this->amount
        ]);

        $this->reset('date', 'amount');
        Flux::modal('add-result')->close();
    }

    public function mount(Plan $plan): void
    {
        $this->plan = $plan;
    }
    public function render(): View
    {
        $plan = $this->plan;
        $goal = $this->plan->goal()->first();
        $actions = $this->plan->planActions()->orderBy('date')->get();
        return view('livewire.plan.show-plan', compact('goal', 'plan', 'actions'));
    }
}
