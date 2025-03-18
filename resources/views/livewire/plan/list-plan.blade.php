<div>
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">
            {{ __('Plans') }}
        </h1>
    </div>

    <div class="mt-6">
        <div class="flow-root">
            <div class="relative -mx-4 overflow-x-auto shadow sm:rounded-lg">
                <div class="inline-block min-w-full py-2 align-middle">
                    <div class="overflow-hidden">
                        <div class="flex items-center justify-end mb-4">
                            <flux:button variant="primary" class="w-full" wire:click="createPlan">
                                {{ __('Create a new plan') }}
                            </flux:button>
                        </div>
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 border border-gray-200 dark:border-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 tracking-wider text-gray-500 dark:text-gray-400">
                                        {{ __('Name') }}
                                    </th>
                                    <th scope="col" class="relative px-6 py-3 text-gray-500 dark:text-gray-400">
                                        {{ __('Month') }}
                                    </th>
                                    <th scope="col" class="relative px-6 py-3 text-gray-500 dark:text-gray-400">
                                        {{ __('Year') }}
                                    </th>
                                    <th scope="col" class="relative px-6 py-3 text-gray-500 dark:text-gray-400">
                                        {{ __('Action') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                                @foreach ($plans as $plan)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 dark:text-white sm:pl-6">
                                            {{ $plan->name }}
                                        </td>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-center font-medium text-gray-900 dark:text-white sm:pl-6">
                                            {{ $plan->month }}
                                        </td>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm text-center font-medium text-gray-900 dark:text-white sm:pl-6">
                                            {{ $plan->year }}
                                        </td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm text-center font-medium sm:pr-6">
                                            <a href="{{ route('plan.show', $plan) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-500">
                                                {{ __('Open') }}</span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
