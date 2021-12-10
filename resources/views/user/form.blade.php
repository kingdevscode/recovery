

<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">Nom<span style="color:red">*</span></label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($user->name) ? $user->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('prenom') ? 'has-error' : ''}}">
    <label for="prenom" class="control-label">Prenom<span style="color:red">*</span></label>
    <input class="form-control" name="prenom" type="text" id="prenom" value="{{ isset($user->prenom) ? $user->prenom : ''}}" required>
    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('poste') ? 'has-error' : ''}}">
    <label for="poste" class="control-label">Poste<span style="color:red">*</span></label>
    <input class="form-control" name="poste" type="text" id="poste" value="{{ isset($user->poste) ? $user->poste : ''}}" required>
    {!! $errors->first('poste', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">Email<span style="color:red">*</span></label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($user->email) ? $user->email : ''}}" required>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">Mot de passe'<span style="color:red">*</span></label>
    <input class="form-control" name="password" type="password" id="password" value="{{ isset($user->password) ? $user->password : ''}}" required>
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
    <label for="password_confirmation" class="control-label">confirme Mot de passe <span style="color:red">*</span></label>
    <input class="form-control" name="password_confirmation" type="password" id="password_confirmation" value="{{ isset($user->password_confirmation) ? $user->password_confirmation : ''}}" required>
    {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('id_role') ? 'has-error' : ''}}">
    <label for="id_role" class="control-label">{{ __('Role ') }}<span style="color:red">*</span></label>


    <select class="form-control" name="id_role" type="number" id="id_role" value="{{ isset($user->id_role) ? $user->id_role : '' }}" required>
        <option value="">{{ __('Selectionner le role ') }} </option>
        @foreach($role as $role)
        <option value="{{$role->id}}" @if(isset($user) && $role->id == $user->id_role) selected @endif>{{$role->libelle_role}}</option>
        @endforeach
    </select>
    {!! $errors->first('id_role', '<p class="help-block">:message</p>') !!}

</div>


<div class="form-group {{ $errors->has('id_batiment') ? 'has-error' : ''}}">
    <label for="id_batiment" class="control-label">{{ __('Batiment ') }}<span style="color:red">*</span></label>


    <select class="form-control" name="id_batiment" type="number" id="id_batiment" value="{{ isset($user->id_batiment) ? $user->id_batiment : '' }}" required>
        <option value="">{{ __('Selectionner le batiment ') }} </option>
        @foreach($batiment as $batiment)
        <option value="{{$batiment->id}}" @if(isset($user) && $batiment->id == $user->id_batiment) selected @endif>{{$batiment->libelle_bat}}</option>
        @endforeach
    </select>
    {!! $errors->first('id_batiment', '<p class="help-block">:message</p>') !!}

</div>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Creer' }}">
</div>
