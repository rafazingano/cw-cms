<h4 class="mb-xlg">Personal Information</h4>
<fieldset>
    <div class="form-group">
        {!! Form::label('name', 'Name', ['for' => 'name', 'class' => 'col-md-3 control-label']) !!}
        <div class="col-md-8">
            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('email', 'E-mail', ['for' => 'email', 'class' => 'col-md-3 control-label']) !!}
        <div class="col-md-8">
            {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('bio', 'Bio', ['for' => 'bio', 'class' => 'col-md-3 control-label']) !!}
        <div class="col-md-8">
            {!! Form::text('options[bio]', null, ['class' => 'form-control', 'id' => 'bio']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="profileCompany">Company</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="profileCompany">
        </div>
    </div>
</fieldset>
<hr class="dotted tall">
<h4 class="mb-xlg">About Yourself</h4>
<fieldset>
    <div class="form-group">
        <label class="col-md-3 control-label" for="profileBio">Biographical Info</label>
        <div class="col-md-8">
            <textarea class="form-control" rows="3" id="profileBio"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label mt-xs pt-none">Public</label>
        <div class="col-md-8">
            <div class="checkbox-custom checkbox-default checkbox-inline mt-xs">
                <input type="checkbox" checked="" id="profilePublic">
                <label for="profilePublic"></label>
            </div>
        </div>
    </div>
</fieldset>
<hr class="dotted tall">
<h4 class="mb-xlg">Change Password</h4>
<fieldset class="mb-xl">
    <div class="form-group">
        <label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="profileNewPassword">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="profileNewPasswordRepeat">
        </div>
    </div>
</fieldset>
<div class="panel-footer">
    <div class="row">
        <div class="col-md-9 col-md-offset-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </div>
    </div>
</div>