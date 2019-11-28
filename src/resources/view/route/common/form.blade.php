<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Name <span
                class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="name" class="form-control col-md-7 col-xs-12" name="name"
               value="{{ $route->name ?? old('name') }}"
               placeholder="Enter Name" maxlength="255" required="required" type="text">
        @if(isset($errors) && $errors->has('name'))
            <p class="text text-danger">{{ $errors->first('name') }}</p>
        @endif
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="addresses"> Address </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="addresses" class="form-control col-md-7 col-xs-12" name="addresses"
               value="{{ $route->addresses ?? old('addresses') }}"
               placeholder="Enter Address" maxlength="255" type="text">
        @if(isset($errors) && $errors->has('addresses'))
            <p class="text text-danger">{{ $errors->first('addresses') }}</p>
        @endif
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="route_type"> Route Type </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="route_type" class="form-control col-md-7 col-xs-12" name="route_type"
               value="{{ $route->route_type ?? old('route_type') }}"
               placeholder="Enter Route Type" maxlength="255" type="text">
        @if(isset($errors) && $errors->has('route_type'))
            <p class="text text-danger">{{ $errors->first('route_type') }}</p>
        @endif
    </div>
</div>
