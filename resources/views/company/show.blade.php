<x-app-layout>
    <x-slot name="title">
        {{ $company->name }} | TKD CRM
    </x-slot>
    <livewire:company.show
        :company="$company"
    />
</x-app-layout>
