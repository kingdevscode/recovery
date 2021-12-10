


        <div class="form-group row {{ $errors->has('nom_role') ? 'has-error' : ''}}">
            <label class="col-sm-12 col-md-2 col-form-label">Nom Du role</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text"  name="nom_role"required value="{{isset($role->nom_role) ? $role->nom_role : ''}}">
            </div>
        </div>
        <div class="form-group row {{ $errors->has('description_r') ? 'has-error' : ''}}">
            <label class="col-sm-12 col-md-2 col-form-label">description du role</label>
            <div class="col-sm-12 col-md-10">
                <textarea class="form-control" rows="5" name="description_r" type="textarea" id="description_r" required>{{ isset($role->description_r) ? $role->description_r : ''}}</textarea>
                {!! $errors->first('description_r', '<p class="help-block">:message</p>') !!}
            </div>
        </div>





        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? __('Modifier') : __('Creer')  }}">
        </div>

