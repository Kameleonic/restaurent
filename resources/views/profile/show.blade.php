<x-app-layout>

    <div class="pt-10 mx-auto pb-20 bg-red-200">
        <div>
            <!-- Logo -->
            <div class="shrink-0 flex justify-center items-center">
                <img class="py-2 px-3 my-10 bg-gray-100 border-2 border-red-300 rounded-lg shadow-md"
                    src="/assets/images/klassy-logo.png" alt="Logo image">
            </div>
        </div>
        <div class="max-w-7xl mx-auto p-10 rounded-lg bg-red-300/60 shadow-md">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                <div class="mt-10 p-10 bg-red-400 rounded-lg shadow-md sm:mt-0">
                    @livewire('profile.update-profile-information-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 p-10 bg-red-400 rounded-lg shadow-md sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 p-10 bg-red-400 rounded-lg shadow-md sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 p-10 bg-red-400 rounded-lg shadow-md sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 p-10 bg-red-400 rounded-lg shadow-md sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
            <x-button class="my-20">
                <a class="" href="/home">Go Back</a>
            </x-button>
        </div>
    </div>


</x-app-layout>
