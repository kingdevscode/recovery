

<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name_client" class="control-label">Nom<span style="color:red">*</span></label>
    <input class="form-control" name="name_client" type="text" id="name_client" value="{{ isset($client->name_client) ? $client->name_client : ''}}" required>
    {!! $errors->first('name_client', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('prenom') ? 'has-error' : ''}}">
    <label for="prenom_client" class="control-label">Prenom<span style="color:red">*</span></label>
    <input class="form-control" name="prenom_client" type="text" id="prenom_client" value="{{ isset($client->prenom_client) ? $client->prenom_client : ''}}" required>
    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
</div>




<div class="form-group {{ $errors->has('email_c') ? 'has-error' : ''}}">
    <label for="email_c" class="control-label">Email<span style="color:red">*</span></label>
    <input class="form-control" name="email_c" type="text" id="email_c" value="{{ isset($client->email_c) ? $client->email_c : ''}}" required>
    {!! $errors->first('email_c', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('password_client') ? 'has-error' : ''}}">
    <label for="password_client" class="control-label">Mot de passe'<span style="color:red">*</span></label>
    <input class="form-control" name="password_client" type="password_client" id="password_client" value="{{ isset($client->password_client) ? $client->password_client : ''}}" required>
    {!! $errors->first('password_client', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
    <label for="password_confirmation" class="control-label">confirme Mot de passe <span style="color:red">*</span></label>
    <input class="form-control" name="password_confirmation" type="password" id="password_confirmation" value="{{ isset($client->password_confirmation) ? $client->password_confirmation : ''}}" required>
    {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
</div>








<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Creer' }}">
</div>
