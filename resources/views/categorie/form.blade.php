


        <div class="form-group row {{ $errors->has('nom_categorie') ? 'has-error' : ''}}">
            <label class="col-sm-12 col-md-2 col-form-label">Nom</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text"  name="nom_categorie"required value="{{isset($categorie->nom_categorie) ? $categorie->nom_categorie : ''}}">
            </div>
        </div>
        <div class="form-group row {{ $errors->has('description_categorie') ? 'has-error' : ''}}">
            <label class="col-sm-12 col-md-2 col-form-label">description de la categorie</label>
            <div class="col-sm-12 col-md-10">
                <textarea class="form-control" rows="5" name="description_categorie" type="textarea" id="description_categorie" required>{{ isset($categorie->description_categorie) ? $categorie->description_categorie : ''}}</textarea>
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
            </div>
        </div>





        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? __('Modifier') : __('Creer')  }}">
        </div>

