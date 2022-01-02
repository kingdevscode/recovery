<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">commentaire <span style="color:red">*</span></label>
    <input class="form-control" name="description" type="text" id="description" value="{{ isset($suggestion->description) ? $suggestion->description : ''}}" required>

        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('posted_at') ? 'has-error' : ''}}">
    <label for="posted_at" class="control-label">Date <span style="color:red">*</span></label>
    <textarea class="form-control" name="posted_at" type="text" id="posted_at" value="{{ isset($suggestion->posted_at) ? $suggestion->posted_at : ''}}" required>
    </textarea>
        {!! $errors->first('posted_at', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('id_client') ? 'has-error' : ''}}">
    <label for="id_client" class="control-label">client <span style="color:red">*</span></label>


    <select class="form-control" name="id_client" type="number" id="id_client" value="{{ isset($suggestion->id_client) ? $suggestion->id_client : '' }}" required>
        <option value="">{{ __('Selectionner le client ') }} </option>
        @foreach($client as $client)
        <option value="{{$client->id}}" @if(isset($suggestion) && $client->id == $suggestion->id_client) selected @endif>{{$client->libelle_cat}}</option>
        @endforeach
    </select>
    {!! $errors->first('id_client', '<p class="help-block">:message</p>') !!}

</div>





<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? __('Modifier') : __('Creer' )}}">
</div>
