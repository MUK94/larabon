<section>
    <div>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Modifier le mot de passe') }}
        </h2>

        <div class="mb-8">
					<p class="mt-1 text-sm text-gray-600">
            {{ __('Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester sécurisé.') }}
        	</p>
				</div>
			</div>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Mot de Passe Actuel')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="px-2 mt-1 block w-full border border-solid h-10 focus:outline-none focus:border-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 rounded-md shadow-sm" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('Nouveau Mot de Passe')" />
            <x-text-input id="update_password_password" name="password" type="password" class="px-2 mt-1 block w-full border border-solid h-10 focus:outline-none focus:border-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 rounded-md shadow-sm" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirmer Mot de Passe')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="px-2 mt-1 block w-full border border-solid h-10 focus:outline-none focus:border-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 rounded-md shadow-sm" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Enregister') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
