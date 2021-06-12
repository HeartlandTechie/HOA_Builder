<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('CreateTitle', ['name' => __('User') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded" style="background-color: #e9ecef!important;">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.user.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('User')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Create') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="create" enctype="multipart/form-data">

        <div class="card-body">
            
            <!-- Name Input -->
            <div class='form-group'>
                <label for='inputname' class='col-sm-2 control-label'> {{ __('Name') }}</label>
                <input type='text' wire:model.lazy='name' class="form-control @error('name') is-invalid @enderror" id='inputname'>
                @error('name') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            
            <!-- Email Input -->
            <div class='form-group'>
                <label for='inputemail' class='col-sm-2 control-label'> {{ __('Email') }}</label>
                <input type='text' wire:model.lazy='email' class="form-control @error('email') is-invalid @enderror" id='inputemail'>
                @error('email') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            
            <!-- Is_superuser Input -->
            <div class='form-group'>
                <label for='inputis_superuser' class='col-sm-2 control-label'> {{ __('Is_superuser') }}</label>
                <select wire:model='is_superuser' class="form-control @error('is_superuser') is-invalid @enderror" id='inputis_superuser'>
                @foreach(config('easy_panel.crud.user.fields.is_superuser')['select'] as $key => $value)
                    <option value='{{ $key }}'>{{ $value }}</option>
                @endforeach
            </select>
                @error('is_superuser') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Create') }}</button>
            <a href="@route(getRouteName().'.user.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
