<div>
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">
            {{ __('Create a new plan') }}
        </h1>
    </div>

    <div class="mt-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200 dark:border-gray-700">
            <form>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                        <flux:select wire:model.live="step">
                            <flux:select.option value="">{{ __('Select step') }}</flux:select.option>    
                        @foreach ($steps as $step)
                                <flux:select.option value="{{ $step->id }}">{{ $step->name }}</flux:select.option>
                            @endforeach
                        </flux:select>
                    </div>

                    <div class="col-span-6">
                        <flux:select wire:model="goal">
                            <flux:select.option value="">{{ __('Select goal') }}</flux:select.option>
                            @foreach ($this->goals as $goal)
                                <flux:select.option value="{{ $goal->id }}">{{ $goal->contract }} - {{ __('Daily') }}: {{ $goal->daily_target }} - {{ __('Weekly') }}: {{ $goal->weekly_target }} - {{ __('Monthly') }}: {{ $goal->monthly_target }}</flux:select.option>
                            @endforeach
                        </flux:select>
                    </div>

                    <div class="col-span-6">
                        <flux:input wire:model="name" placeholder="{{ __('Plan Name') }}" />
                    </div>

                    <div class="col-span-6">
                        <flux:input wire:model="description" placeholder="{{ __('Plan Description') }}" />
                    </div>

                    <div class="col-span-6">
                        <flux:select wire:model="month">
                            <flux:select.option value="">{{ __('Select month') }}</flux:select.option>
                            <flux:select.option value="1">{{ __('January') }}</flux:select.option>
                            <flux:select.option value="2">{{ __('February') }}</flux:select.option>
                            <flux:select.option value="3">{{ __('March') }}</flux:select.option>
                            <flux:select.option value="4">{{ __('April') }}</flux:select.option>
                            <flux:select.option value="5">{{ __('May') }}</flux:select.option>
                            <flux:select.option value="6">{{ __('June') }}</flux:select.option>
                            <flux:select.option value="7">{{ __('July') }}</flux:select.option>
                            <flux:select.option value="8">{{ __('August') }}</flux:select.option>
                            <flux:select.option value="9">{{ __('September') }}</flux:select.option>
                            <flux:select.option value="10">{{ __('October') }}</flux:select.option>
                            <flux:select.option value="11">{{ __('November') }}</flux:select.option>
                            <flux:select.option value="12">{{ __('December') }}</flux:select.option>
                        </flux:select>        
                    </div>

                    <div class="col-span-6">
                        <flux:select wire:model="year">
                            <flux:select.option value="">{{ __('Select year') }}</flux:select.option>
                            <flux:select.option value="2025">2025</flux:select.option>
                            <flux:select.option value="2026">2026</flux:select.option>
                            <flux:select.option value="2027">2027</flux:select.option>
                            <flux:select.option value="2028">2028</flux:select.option>
                            <flux:select.option value="2029">2029</flux:select.option>
                            <flux:select.option value="2030">2030</flux:select.option>
                        </flux:select>        
                    </div>
                    
                </div>

                <div class="flex items-center justify-end mt-4">
                    <flux:button variant="primary" class="w-full" wire:click="createPlan">
                        {{ __('Create') }}
                    </flux:button>
                </div>
            </form>
        </div>
    </div>
</div>
