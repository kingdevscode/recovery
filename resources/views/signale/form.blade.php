

<div class="form-group {{ $errors->has('description_signale') ? 'has-error' : ''}}">
    <label for="description_signale" class="control-label">description de l'objet<span style="color:red">*</span></label>
    <input class="form-control" name="description_signale" type="textarea" id="description_signale" value="{{ isset($signale->description_signale) ? $signale->description_signale : ''}}" required>
    {!! $errors->first('description_signale', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('lieu_perte') ? 'has-error' : ''}}">
    <label for="lieu_perte" class="control-label">lieu_perte<span style="color:red">*</span></label>
    <input class="form-control" name="lieu_perte" type="text" id="lieu_perte" value="{{ isset($signale->lieu_perte) ? $signale->lieu_perte : ''}}" required>
    {!! $errors->first('lieu_perte', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('date_perte') ? 'has-error' : ''}}">
    <label for="date_perte" class="control-label">date_perte<span style="color:red">*</span></label>
    <input class="form-control" name="date_perte" type="date" id="date_perte" value="{{ isset($signale->date_perte) ? $signale->date_perte : ''}}" required>
    {!! $errors->first('date_perte', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('statut_signale') ? 'has-error' : ''}}">
    <label for="statut_signale" class="control-label">statut_signale<span style="color:red">*</span></label>
    <input class="form-control" name="statut_signale" type="text" id="statut_signale" value="{{ isset($signale->statut_signale) ? $signale->statut_signale : 'en attente'}}" required>

    {!! $errors->first('statut_signale', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group {{ $errors->has('id_categorie') ? 'has-error' : ''}}">
    <label for="id_categorie" class="control-label">{{ __('categorie ') }}<span style="color:red">*</span></label>


    <select class="form-control" name="id_categorie" type="number" id="id_categorie" value="{{ isset($signale->id_categorie) ? $signale->id_categorie : '' }}" required>
        <option value="">{{ __('Selectionner le categorie ') }} </option>
        @foreach($categorie as $categorie)
        <option value="{{$categorie->id}}" @if(isset($signale) && $categorie->id == $signale->id_categorie) selected @endif>{{$categorie->nom_categorie}}</option>
        @endforeach
    </select>
    {!! $errors->first('id_categorie', '<p class="help-block">:message</p>') !!}

</div>


<div class="form-group {{ $errors->has('id_client') ? 'has-error' : ''}}">
    <label for="id_client" class="control-label">{{ __('client ') }}<span style="color:red">*</span></label>


    <select class="form-control" name="id_client" type="number" id="id_client" value="{{ isset($signale->id_client) ? $signale->id_client : '' }}" required>
        <option value="">{{ __('Selectionner le client ') }} </option>
        @foreach($client as $client)
        <option value="{{$client->id}}" @if(isset($signale) && $client->id == $signale->id_client) selected @endif>{{$client->name_client}}</option>
        @endforeach
    </select>
    {!! $errors->first('id_client', '<p class="help-block">:message</p>') !!}

</div>

<div class="form-group {{ $errors->has('id_client') ? 'has-error' : ''}}">
    <input class="form-control" name="id_client" type="hidden" id="id_client"
    value=" {{ isset($signale->id_client) ? $signale->id_user : Auth::guard('client')->client()->id }}"required >

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Creer' }}">
</div>
