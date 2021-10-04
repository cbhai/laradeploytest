<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('customer.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.customer.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="customer.name">
        <div class="validation-message">
            {{ $errors->first('customer.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.customer.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('customer.email') ? 'invalid' : '' }}">
        <label class="form-label" for="email">{{ trans('cruds.customer.fields.email') }}</label>
        <input class="form-control" type="text" name="email" id="email" wire:model.defer="customer.email">
        <div class="validation-message">
            {{ $errors->first('customer.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.customer.fields.email_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>