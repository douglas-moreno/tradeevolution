<div>
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">
            {{ __('Plan') }} : {{ $plan->name }}
        </h1>
    </div>

    <div class="flex items-center justify-between">
        <h1 class="mt-6 text-xl font-semibold text-gray-600 dark:text-white">
            {{ __('Goal') }} - {{ __('Month') }} : {{ $plan->month }}
        </h1>
    </div>

    <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <table
                class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 border border-gray-200 dark:border-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ __('Contract') }}
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ __('Daily Target') }}
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ __('Weekly Target') }}
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ __('Monthly Target') }}
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ __('Daily Stop') }}
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ __('Weekly Stop') }}
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ __('Monthly Stop') }}
                        </th>
                    </tr>
                </thead>
                <tbody
                    class="divide-y divide-gray-200 dark:divide-gray-700 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-center font-medium text-gray-900 dark:text-white sm:pl-6">
                            {{ $goal->contract }}
                        </td>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-center font-medium text-gray-900 dark:text-white bg-green-500 sm:pl-6">
                            R$ {{ $goal->daily_target }}
                        </td>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-center font-medium text-gray-900 dark:text-white bg-green-500 sm:pl-6">
                            R$ {{ $goal->weekly_target }}
                        </td>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-center font-medium text-gray-900 dark:text-white bg-green-500 sm:pl-6">
                            R$ {{ $goal->monthly_target }}
                        </td>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-center font-medium text-gray-900 dark:text-white bg-red-500 sm:pl-6">
                            -R$ {{ $goal->daily_stop }}
                        </td>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-center font-medium text-gray-900 dark:text-white bg-red-500 sm:pl-6">
                            -R$ {{ $goal->weekly_stop }}
                        </td>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-center font-medium text-gray-900 dark:text-white bg-red-500 sm:pl-6">
                            -R$ {{ $goal->monthly_stop }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="flex items-center justify-center gap-3">
        <div class="flex items-center justify-between">
            <h1 class="mt-6 text-xl font-semibold text-gray-600 dark:text-white">
                {{ __('Results') }}
            </h1>
        </div>
        <div class="mt-2 pt-4">
            <flux:modal.trigger name="add-result">
                <flux:button icon="plus" variant="filled">{{ __('Add Result') }}</flux:button>
            </flux:modal.trigger>

            <flux:modal name="add-result" class="md:w-96">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">{{ __('Add Result') }}</flux:heading>
                        <flux:subheading>{{ __('Add a new result to your plan') }}</flux:subheading>
                    </div>

                    <flux:input wire:model="date" label="Date of result" type="date" />

                    <flux:input.group>
                        <flux:input.group.prefix>R$</flux:input.group.prefix>
                        <flux:input wire:model="amount" placeholder="Amount" />
                    </flux:input.group>
                    <div class="flex">
                        <flux:spacer />

                        <flux:button wire:click="addResult" variant="primary">Save changes</flux:button>
                    </div>
                </div>
            </flux:modal>
        </div>
    </div>

    <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <table
                class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 border border-gray-200 dark:border-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-center text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ __('Date') }}
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ __('Amount') }}
                        </th>
                    </tr>
                </thead>
                <tbody
                    class="divide-y divide-gray-200 dark:divide-gray-700 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    @forelse ($actions as $result)
                        <tr>
                            <td
                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-center font-medium text-gray-900 dark:text-white sm:pl-6">
                                {{ \Carbon\Carbon::parse($result->date)->format('d/m/Y') }}
                            </td>
                            <td
                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-center font-medium text-gray-900 dark:text-white sm:pl-6">
                                @if ($result->amount < 0)
                                    <span class="text-red-500">R$ {{ $result->amount }} </span>
                                @else
                                    <span class="text-green-500">R$ {{ $result->amount }} </span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td
                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-center font-medium text-gray-900 dark:text-white sm:pl-6">
                                {{ __('No results') }}
                            </td>
                        </tr>
                    @endforelse ($results as $result)
                </tbody>
            </table>
        </div>
    </div>
</div>
