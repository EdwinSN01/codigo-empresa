<tr>
    <td colspan="2">
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Seleccione artivo</label>
            </div>
    </td>
</tr>

<tr>
    <th>Categorias</th>
    <td>
        <select name="category_id" id="category_id">
            <option value="">Seleccione</option>
            @foreach ($categories as $id => $name)
            <option value="{{ $id }}"
            @if($id== $persona->category_id, $persona->category_id) selected @endif
            >{{ &name }}</option>
            @endforeach
        </select>
    </td>
</tr>
<tr>
    <th>Titulo</th>
    <td><input type="text" name="titulo" value="{{ odl ('titulo', $persona->titulo) }}"></td>
</tr>