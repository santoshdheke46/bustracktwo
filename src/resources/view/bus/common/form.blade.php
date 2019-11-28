<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Name </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="name" class="form-control col-md-7 col-xs-12" name="name"
               value="{{ $bus->name ?? old('name') }}"
               placeholder="Enter Name" type="text">
        @if($errors->has('name'))
            <p class="text text-danger">{{ $errors->first('name') }}</p>
        @endif
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Number <span
                class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="number" class="form-control col-md-7 col-xs-12" name="number"
               value="{{ $bus->number ?? old('number') }}"
               placeholder="Enter Vehicle Number"
               required="required" type="text">
        @if($errors->has('number'))
            <p class="text text-danger">{{ $errors->first('number') }}</p>
        @endif
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="capacity"> Capacity </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="capacity" class="form-control col-md-7 col-xs-12" name="capacity"
               value="{{ $bus->capacity ?? old('capacity') }}"
               placeholder="Enter Capacity" type="number">
        @if($errors->has('capacity'))
            <p class="text text-danger">{{ $errors->first('capacity') }}</p>
        @endif
    </div>
</div>
