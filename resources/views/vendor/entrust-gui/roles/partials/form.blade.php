<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label for="name">Nombre Completo</label>
    <input type="input" class="form-control" id="name" placeholder="Nombre Completo" name="name" value="{{ (Session::has('errors')) ? old('name', '') : $model->name }}">
</div>
<div class="form-group">
    <label for="display_name">Nombre para Mostrar</label>
    <input type="input" class="form-control" id="display_name" placeholder="Nombre para Mostrar" name="display_name" value="{{ (Session::has('errors')) ? old('display_name', '') : $model->display_name }}">
</div>
<div class="form-group">
    <label for="description">Descripción</label>
    <input type="input" class="form-control" id="description" placeholder="Descripción" name="description" value="{{ (Session::has('errors')) ? old('description', '') : $model->description }}">
</div>
<div class="form-group">
    <label for="permissions">Permisos</label>
    <select name="permissions[]" multiple class="form-control">
      @foreach($relations as $index => $relation)
        <option value="{{ $index }}" {{ ((in_array($index, old('permissions', []))) || ( ! Session::has('errors') && $model->perms->contains('id', $index))) ? 'selected' : '' }}>{{ $relation }}</option>
      @endforeach
    </select>
</div>
