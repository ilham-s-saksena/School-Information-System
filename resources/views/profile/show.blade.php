<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <form enctype="multipart/form-data" method="POST" action="{{ route('foto.profile') }}" class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
@csrf
            <div class="w-full text-center my-3">
                

                <x-label for="photo" value="{{ __('Photo') }}" />

                
                <!-- Current Profile Photo -->
                <div  class="mt-2 relative" x-show="! photoPreview">
                    <img style="background-image: url('/img/{{ Auth::user()->foto }}')" class="rounded-md border h-20 w-20 bg-cover bg-no-repeat bg-center mx-auto">
                    <div id="preview" class="h-20 w-20 absolute border top-0 left-1/2 -translate-x-1/2 bg-cover bg-no-repeat bg-center "></div>
                </div>
                
                
                <input type="file" name="foto" id="foto" accept=".jpg, .jpeg, .png" class="hidden">
            
            <div>

                
                <label for="foto" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </label>

                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Submit
                </button>
            </div>
               
        </form>
        <div class="pt-5">


            
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            
        </div>
    </div>
</x-app-layout>


<script>
    document.getElementById('foto').addEventListener('change', function() {
        const preview = document.getElementById('preview');
        const file = this.files[0];
        const reader = new FileReader();

        reader.onload = function() {
            preview.style.backgroundImage = `url('${reader.result}')`;
            preview.style.display = 'block';
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    });
</script>