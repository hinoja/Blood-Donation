<div>
    <form action="">
        {{-- <button type="button" wire:click="ChangeLang('fr')">Value</button> --}}
        <select class="select-language" wire:model.lazy="locale">
            <option value="fr" selected> <i class="fas fa-globe"></i> @lang('Français')
            </option>
            <option value="En"> <i class="fas fa-globe"></i> @lang('English')</option>
        </select>
        {{-- {{ $locale }} --}}
    </form>
</div>
