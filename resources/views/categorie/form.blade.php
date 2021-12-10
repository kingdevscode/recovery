


        <div class="form-group row {{ $errors->has('libelle_cat') ? 'has-error' : ''}}">
            <label class="col-sm-12 col-md-2 col-form-label">Nom</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text"  name="libelle_cat"required value="{{isset($categorie->libelle_cat) ? $categorie->libelle_cat : ''}}">
            </div>
        </div>
        <div class="form-group row {{ $errors->has('description_c') ? 'has-error' : ''}}">
            <label class="col-sm-12 col-md-2 col-form-label">description de la categorie</label>
            <div class="col-sm-12 col-md-10">
                <textarea class="form-control" rows="5" name="description_c" type="textarea" id="description_c" required>{{ isset($categorie->description_c) ? $categorie->description_c : ''}}</textarea>
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
            </div>
        </div>





        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? __('Modifier') : __('Creer')  }}">
        </div>

