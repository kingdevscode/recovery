

<div class="form-group {{ $errors->has('nom_objet') ? 'has-error' : ''}}">
    <label for="nom_objet" class="control-label">Nom objet<span style="color:red">*</span></label>
    <input class="form-control" name="nom_objet" type="text" id="nom_objet" value="{{ isset($objet->nom_objet) ? $objet->nom_objet : ''}}" required>
    {!! $errors->first('nom_objet', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('lieu_trouvail') ? 'has-error' : ''}}">
    <label for="lieu_trouvail" class="control-label">lieu_trouvail<span style="color:red">*</span></label>
    <input class="form-control" name="lieu_trouvail" type="text" id="lieu_trouvail" value="{{ isset($objet->lieu_trouvail) ? $objet->lieu_trouvail : ''}}" required>
    {!! $errors->first('lieu_trouvail', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('date_trouvail') ? 'has-error' : ''}}">
    <label for="date_trouvail" class="control-label">date_trouvail<span style="color:red">*</span></label>
    <input class="form-control" name="date_trouvail" type="date" id="date_trouvail" value="{{ isset($objet->date_trouvail) ? $objet->date_trouvail : ''}}" required>
    {!! $errors->first('date_trouvail', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('date_enregistrement') ? 'has-error' : ''}}">
    <label for="date_enregistrement" class="control-label">date_enregistrement<span style="color:red">*</span></label>
    <input class="form-control" name="date_enregistrement" type="date" id="date_enregistrement" value="{{ isset($objet->date_enregistrement) ? $objet->date_enregistrement : ''}}" required>
    {!! $errors->first('date_enregistrement', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('date_restitution') ? 'has-error' : ''}}">
    <label for="date_restitution" class="control-label">date_restitution'<span style="color:red">*</span></label>
    <input class="form-control" name="date_restitution" type="date" id="date_restitution" value="{{ isset($objet->date_restitution) ? $objet->date_restitution : ''}}" required>
    {!! $errors->first('date_restitution', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('statut_objet') ? 'has-error' : ''}}">
    <label for="statut_objet" class="control-label"> statut_objet <span style="color:red">*</span></label>
    <input class="form-control" name="statut_objet" type="text" id="statut_objet" value="{{ isset($objet->statut_objet) ? $objet->statut_objet : ''}}" required>
    {!! $errors->first('statut_objet', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('description_o') ? 'has-error' : ''}}">
    <label for="description_o" class="control-label"> description_o <span style="color:red">*</span></label>
    <input class="form-control" name="description_o" type="text" id="description_o" value="{{ isset($objet->description_o) ? $objet->description_o : ''}}" required>
    {!! $errors->first('description_o', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="control-label"> photo <span style="color:red">*</span></label>
    <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($objet->photo) ? $objet->photo : ''}}" required>
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_categorie') ? 'has-error' : ''}}">
    <label for="id_categorie" class="control-label">{{ __('categorie ') }}<span style="color:red">*</span></label>


    <select class="form-control" name="id_categorie" type="number" id="id_categorie" value="{{ isset($objet->id_categorie) ? $objet->id_categorie : '' }}" required>
        <option value="">{{ __('Selectionner le categorie ') }} </option>
        @foreach($categorie as $categorie)
        <option value="{{$categorie->id}}" @if(isset($objet) && $categorie->id == $objet->id_categorie) selected @endif>{{$categorie->libelle_categorie}}</option>
        @endforeach
    </select>
    {!! $errors->first('id_categorie', '<p class="help-block">:message</p>') !!}

</div>


<div class="form-group {{ $errors->has('id_user') ? 'has-error' : ''}}">
    <label for="id_user" class="control-label">{{ __('user ') }}<span style="color:red">*</span></label>


    <select class="form-control" name="id_user" type="number" id="id_user" value="{{ isset($objet->id_user) ? $objet->id_user : '' }}" required>
        <option value="">{{ __('Selectionner le user ') }} </option>
        @foreach($user as $user)
        <option value="{{$user->id}}" @if(isset($objet) && $user->id == $objet->id_user) selected @endif>{{$user->libelle_bat}}</option>
        @endforeach
    </select>
    {!! $errors->first('id_user', '<p class="help-block">:message</p>') !!}

</div>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Creer' }}">
</div>
