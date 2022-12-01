<div class="row">
    <div class="{{ Auth::user()->hasRole('Admin') ? 'col-md-6' : 'col-md-6' }}">
        <div class="form-group layout_subtitle">
            {!! htmlspecialchars_decode(Form::label('name', 'Name <span>*</span>', ['class' => 'layout_subtitle' ])) !!}
            {{ Form::text('name', $campaign->name ?? null, ['id'=>'name', 'placeholder'=>'Add a name', 'class'=>'form-control'])}}
            @error('name')
                <span class="text-danger text-error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group layout_subtitle">
            {!! htmlspecialchars_decode(Form::label('advertiser_id', 'Advertiser <span>*</span>', ['class' => 'layout_subtitle' ])) !!}
            {{ Form::select('advertiser_id', $advertisers, $campaign->advertiser_id ?? null, ['id' => 'advertiser_id', 'class' => 'form-control']) }}
            @error('advertiser_id')
                <span class="text-danger text-error">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 d-flex align-items-bottom mb-3">
        <div class="col-md-1 segmentation_subtitle mt-3 px-0 segmentation">Duration</div>
        <div class="form-group col-md-11 my-0 segmentation_border"></div>
    </div>
    <div class="col-md-6">
        <div class="form-group layout_subtitle">
            {!! htmlspecialchars_decode(Form::label('start_date', 'Start date <span>*</span>', ['class' => 'layout_subtitle' ])) !!}
            {{ Form::date('start_date', $campaign->start_date ?? null, ['id'=>'start_date', 'placeholder'=>'Add a start date', 'class'=>'form-control'])}}
            @error('start_date')
                <span class="text-danger text-error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group layout_subtitle">
            {!! htmlspecialchars_decode(Form::label('finish_date', 'End date <span>*</span>', ['class' => 'layout_subtitle' ])) !!}
            {{ Form::date('finish_date', $campaign->finish_date ?? null, ['id'=>'finish_date', 'placeholder'=>'Add a finish date', 'class'=>'form-control'])}}
            @error('finish_date')
                <span class="text-danger text-error">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 d-flex align-items-bottom mb-3">
        <div class="col-md-1 segmentation_subtitle mt-3 px-0 segmentation">Budget</div>
        <div class="form-group col-md-11 my-0 segmentation_border"></div>
    </div>
    <div class="col-md-6">
        <div class="form-group layout_subtitle">
            {!! htmlspecialchars_decode(Form::label('budget', 'Budget <span>*</span>', ['class' => 'layout_subtitle' ])) !!}
            {{ Form::number('budget', $campaign->budget ?? null, ['id'=>'budget', 'placeholder'=>'Add a budget', 'class'=>'form-control','min'=>'0'])}}
            @error('budget')
                <span class="text-danger text-error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! htmlspecialchars_decode(Form::label('currency_id', 'Currency <span>*</span>', ['class' => 'layout_subtitle' ])) !!}
            {{ Form::select('currency_id', $currencies, $campaign->currency_id ?? null, ['id'=>'currency_id', 'class'=>'form-control'])}}
            @error('currency_id')
                <span class="text-danger text-error">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 d-flex align-items-bottom mb-3">
        <div class="col-md-1 segmentation_subtitle mt-3 px-0 segmentation">Languages</div>
        <div class="form-group col-md-11 my-0 segmentation_border"></div>
    </div>
    <div class="col-md-6">
        <div class="form-group layout_subtitle">
            <label class="col-sm-4" for="language-txt">Select Language <span>*</span></label>
            <div class="d-flex">
                {{ Form::select('language_id', $languages, $campaign->language_id ?? null, ['id' => 'language_id', 'class' => 'form-control']) }}
                <div class="col-sm-2 px-2">
                    <button type="button" class="btn" id="add_language">
                        <svg width="20" height="20" fill="#ad0075" class="bi bi-plus-circle-fill" viewBox="0 0 20 20">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="languages_div" class="d-flex align-items-center col-md-6">
        @if(isset($campaign))
        @foreach($campaign->languages as $language)
            <button id="language-{{ $language->id }}" class="badge badge-pill badge-primary d-flex align-items-center mr-2" style="padding-top:5px;padding-left:14px">
                <p class="m-0">
                    {{ $language->name }}
                    <input type="hidden" name="languages[]" value="{{ $language->id }}">
                </p>
                <span type="button" class="btn btn-sm btn-outline btn_delete_lenguage border-0" title="Delete language" onclick="removeLanguage($(this))">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </span>
            </button>
            @endforeach
        @endif
    </div>
</div>

@if(isset($campaign))
    <div class="row">
        <div class="col-md-12 d-flex align-items-bottom mb-3">
            <div class="col-md-1 segmentation_subtitle mt-3 px-0 segmentation">Status</div>
            <div class="form-group col-md-11 my-0 segmentation_border"></div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {!! htmlspecialchars_decode(Form::label('status', 'Status <span>*</span>', ['class' => 'layout_subtitle' ])) !!}
                {{ Form::select('status', $status, $campaign->status ?? null, ['id'=>'status', 'class'=>'form-control'])}}
                @error('status')
                    <span class="text-danger text-error">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
@endif

<div style="clear:both"></div>

<div class="row mt-2">
    <div class="col d-flex align-items-center justify-content-end">
        <button type="submit" class="btn btn-primary button_theme float-right">Save & Exit</button>
        <button type="button" class="btn btn-primary float-right button_theme_info" onclick="saveContinue('#campaign_form')" style="margin: 20px">Save & Continue</button>
        <a href="{{ route('campaigns.index') }}" class="btn btn-primary button_theme_secondary float-right">Cancel</a>
        <input type="hidden" id="save_and_continue" name="save_and_continue" value="0" />
    </div>
</div>
