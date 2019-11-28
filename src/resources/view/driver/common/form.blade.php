<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="full_name"> Full Name <span
                class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="full_name" class="form-control col-md-7 col-xs-12" name="full_name"
               value="{{ $driver->full_name ?? old('full_name') }}"
               placeholder="Enter Full Name"
               required="required" type="text">
        @if(isset($errors) && $errors->has('full_name'))
            <p class="text text-danger">{{ $errors->first('full_name') }}</p>
        @endif
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address"> Address </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="address" class="form-control col-md-7 col-xs-12" name="address"
               value="{{ $driver->address ?? old('address') }}"
               placeholder="Enter Address" type="text">
        @if(isset($errors) && $errors->has('address'))
            <p class="text text-danger">{{ $errors->first('address') }}</p>
        @endif
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="licence_number"> Licence Number </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="licence_number" class="form-control col-md-7 col-xs-12" name="licence_number"
               value="{{ $driver->licence_number ?? old('licence_number') }}"
               placeholder="Enter Licence Number" type="text">
        @if(isset($errors) && $errors->has('licence_number'))
            <p class="text text-danger">{{ $errors->first('licence_number') }}</p>
        @endif
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_no"> Phone Number <span
                class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="phone_no" class="form-control col-md-7 col-xs-12" name="phone_no"
               value="{{ $driver->phone_no ?? old('phone_no') }}" title="{{ config("bus.validation.mobile_no.regex_message") }}"
               placeholder="Enter Phone Number" regex="{{ config("bus.validation.mobile_no.regex") }}"
               required="required" type="text">
        @if(isset($errors) && $errors->has('phone_no'))
            <p class="text text-danger">{{ $errors->first('phone_no') }}</p>
        @endif
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="salary"> Salary </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="salary" class="form-control col-md-7 col-xs-12" name="salary"
               value="{{ $driver->salary ?? old('salary') }}"
               placeholder="Enter Salary" type="text">
        @if(isset($errors) && $errors->has('salary'))
            <p class="text text-danger">{{ $errors->first('salary') }}</p>
        @endif
    </div>
</div>
