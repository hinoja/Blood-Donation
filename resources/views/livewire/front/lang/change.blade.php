<div>
    <form class="nav-item dropdown">
        {{-- <button type="button" wire:click="ChangeLang('fr')">Value</button> --}}
        <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            @if (app()->getLocale() === 'fr') @lang('Français') @else @lang('English') @endif
        </a>
        <div class="dropdown-menu nav-item">
            <button  wire:click="ChangeLang('fr')" class="dropdown-item">@lang('Français')</button>
            <button  wire:click="ChangeLang('en')" class="dropdown-item">@lang('English')</button>
        </div>


        {{-- {{ app()->getLocale() }} --}}
        {{-- @if ()
         <i class="fas fa-globe"></i>
        @else
        <i class="fas fa-globe"></i>
        @endif
        <select class="select-language" wire:model.lazy="locale">

            <option value="fr" selected>
            </option>
            <option value="En"> <i class="fas fa-globe"></i> @lang('English')</option>
        </select> --}}
        {{-- {{ $locale }} --}}
    </form>
</div>
