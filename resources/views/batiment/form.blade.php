


        <div class="form-group row {{ $errors->has('libelle_bat') ? 'has-error' : ''}}">
            <label class="col-sm-12 col-md-2 col-form-label">Nom Du Batiment</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text"  name="libelle_bat"required value="{{isset($batiment->libelle_bat) ? $batiment->libelle_bat : ''}}">
            </div>
        </div>
        <div class="form-group row {{ $errors->has('description_b') ? 'has-error' : ''}}">
            <label class="col-sm-12 col-md-2 col-form-label">description du batiment</label>
            <div class="col-sm-12 col-md-10">
                <textarea class="form-control" rows="5" name="description_b" type="textarea" id="description_b" required>{{ isset($batiment->description_b) ? $batiment->description_b : ''}}</textarea>
                {!! $errors->first('description_b', '<p class="help-block">:message</p>') !!}
            </div>
        </div>





        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? __('Modifier') : __('Creer')  }}">
        </div>

