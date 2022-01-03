
<div class="form-group {{ $errors->has('date_demande') ? 'has-error' : ''}}">
    <label for="date_demande" class="control-label">date_demande<span style="color:red">*</span></label>
    <input class="form-control" name="date_demande" type="date" id="date_demande" value="{{ isset($demande->date_demande) ? $demande->date_demande : ''}}" required>
    {!! $errors->first('date_demande', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('date_traitement') ? 'has-error' : ''}}">
    <label for="date_traitement" class="control-label">date_traitement<span style="color:red">*</span></label>
    <input class="form-control" name="date_traitement" type="date" id="date_traitement" value="{{ isset($demande->date_traitement) ? $demande->date_traitement : ''}}" required>
    {!! $errors->first('date_traitement', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('id_personnel') ? 'has-error' : ''}}">
    <label for="id_personnel" class="control-label">id_personnel<span style="color:red">*</span></label>
    <input class="form-control" name="id_personnel" type="text" id="id_personnel" value="{{ isset($demande->id_personnel) ? $demande->id_personnel : ''}}" required>
    {!! $errors->first('id_personnel', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group {{ $errors->has('id_client') ? 'has-error' : ''}}">
    <label for="id_client" class="control-label">{{ __('client ') }}<span style="color:red">*</span></label>


    <select class="form-control" name="id_client" type="number" id="id_client" value="{{ isset($demande->id_client) ? $demande->id_client : '' }}" required>
        <option value="">{{ __('Selectionner le client ') }} </option>
        @foreach($client as $client)
        <option value="{{$client->id}}" @if(isset($demande) && $client->id == $demande->id_client) selected @endif>{{$client->libelle_client}}</option>
        @endforeach
    </select>
    {!! $errors->first('id_client', '<p class="help-block">:message</p>') !!}

</div>


<div class="form-group {{ $errors->has('id_objet') ? 'has-error' : ''}}">
    <label for="id_objet" class="control-label">{{ __('objet ') }}<span style="color:red">*</span></label>


    <select class="form-control" name="id_objet" type="number" id="id_objet" value="{{ isset($demande->id_objet) ? $demande->id_objet : '' }}" required>
        <option value="">{{ __('Selectionner le objet ') }} </option>
        @foreach($objet as $objet)
        <option value="{{$objet->id}}" @if(isset($demande) && $objet->id == $demande->id_objet) selected @endif>{{$objet->libelle_bat}}</option>
        @endforeach
    </select>
    {!! $errors->first('id_objet', '<p class="help-block">:message</p>') !!}

</div>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Creer' }}">
</div>
