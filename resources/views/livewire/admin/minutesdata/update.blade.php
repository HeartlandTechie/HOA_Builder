<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('MinutesData') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded" style="background-color: #e9ecef!important;">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.minutesdata.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('MinutesData')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

            
            <!-- Filename Input -->
            <div class='form-group'>
                <label for='inputfilename' class='col-sm-2 control-label'> {{ __('Filename') }}</label>
                <input type='file' wire:model='filename' class="form-control-file @error('filename') is-invalid @enderror" id='inputfilename'>
                @if($filename and !$errors->has('filename') and $filename instanceof \Livewire\TemporaryUploadedFile and (in_array( $filename->guessExtension(), ['png', 'jpg', 'gif', 'jpeg'])))
                    <a href="{{ $filename->temporaryUrl() }}"><img width="200" height="200" class="img-fluid shadow" src="{{ $filename->temporaryUrl() }}" alt=""></a>
                @endif
                @error('filename') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            
            <!-- Year_created Input -->
            <div class='form-group'>
                <label for='inputyear_created' class='col-sm-2 control-label'> {{ __('Year_created') }}</label>
                <input type='text' wire:model.lazy='year_created' class="form-control @error('year_created') is-invalid @enderror" id='inputyear_created'>
                @error('year_created') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.minutesdata.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
