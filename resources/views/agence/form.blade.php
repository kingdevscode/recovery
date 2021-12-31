


        <div class="form-group row {{ $errors->has('nom_agence') ? 'has-error' : ''}}">
            <label class="col-sm-12 col-md-2 col-form-label">Nom De L'agence</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text"  name="nom_agence"required value="{{isset($agence->nom_agence) ? $agence->nom_agence : ''}}">
            </div>
        </div>
        <div class="form-group row {{ $errors->has('description_b') ? 'has-error' : ''}}">
            <label class="col-sm-12 col-md-2 col-form-label">description du agence</label>
            <div class="col-sm-12 col-md-10">
                <textarea class="form-control" rows="5" name="description_agence" type="textarea" id="description_agence" required>{{ isset($agence->description_agence) ? $agence->description_agence : ''}}</textarea>
                {!! $errors->first('description_agence', '<p class="help-block">:message</p>') !!}
            </div>
        </div>





        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? __('Modifier') : __('Creer')  }}">
        </div>
