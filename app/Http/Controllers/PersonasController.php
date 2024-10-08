<?php

namespace App\Http\Controllers;
use App\Category;
use App\Models\Persona;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreatePersonaRequest;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Events\PersonaSaved;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        $personas = Persona::paginate(2);
        return view('personas',compact('personas'));
    }

    public function show($id) 
    {
        //return Persona::find($nPerCodigo);
        //return view('personas.show', compact('persona'));

        $persona = Persona::find($id)??new Persona();
        return view('show', [
            'persona' => $persona
        ]);
    } 

     public function create(){
        $token = Str::random(32);
        'categories'=> Category::pluck('name', 'id'),
        return view('create', compact('token'));

     }

     public function store(CreatePersonaRequest $request)
     {
        $persona =new Persona($request->validated());
        $persona-> image = $request->file('image')->store('images');
          $persona->save();
          $image = Image::make(storage::get($persona->image));
          Storage::put($persona->image, (string) $image);
          PersonaSaved::dispatch($persona);
         // Validación de datos (puedes personalizar esto según tus necesidades)
         date_default_timezone_set('America/Lima');

         $token = Str::random(32);
         $persona = new Persona();
         $persona->nPerCodigo = $request->input('nPerCodigo');
         $persona->cPerApellido = $request->input('cPerApellido');
         $persona->cPerNombre = $request->input('cPerNombre');
         $persona->cPerDireccion = $request->input('cPerDireccion');
         $persona->cPerAFecNac = $request->input('cPerAFecNac');
         $persona->cPerEdad = $request->input('cPerEdad');
         $persona->cPerSexo = $request->input('cPerSexo');
         $persona->cPerSueldo = $request->input('cPerSueldo');
         $persona->cPerRnd = $request->input('cPerRnd');
         $persona->cPerEstado = $request->input('cPerEstado');
         $persona->remenber_toker = $token;

         $persona->save();

        return redirect()->route('personas')->with('success', 'Nuevo Ingreso creado exitosamente.');

} 


public function edit(Persona $id)
{

            return view('edit',[
                'persona'=> $id]);
                'categories'=> Category::pluck('name', 'id')


    }
    public function update(CreatePersonaRequest $request, $id)
    {   
        date_default_timezone_set('America/Lima');
        $persona = Persona::findOrFail($id);

        // Actualizar los datos del formulario
        $persona->nPerCodigo = $request->input('nPerCodigo');
        $persona->cPerApellido = $request->input('cPerApellido');
        $persona->cPerNombre = $request->input('cPerNombre');
        $persona->cPerDireccion = $request->input('cPerDireccion');
        $persona->cPerAFecNac = $request->input('cPerAFecNac');
        $persona->cPerEdad = $request->input('cPerEdad');
        $persona->cPerSexo = $request->input('cPerSexo');
        $persona->cPerSueldo = $request->input('cPerSueldo');
        $persona->cPerRnd = $request->input('cPerRnd');
        $persona->cPerEstado = $request->input('cPerEstado');
        $persona->remenber_toker = $request->input('remenber_toker');
        // Actualiza más campos según sea necesario
        // $persona->save();
        if($request->hasFile('image')){//si enviamos una imagen
            Storage::delete($persona->image);//le pasamos la ubicacion de la imagen
            $persona->fill( $request->validated());//rellena todos los datos sin guardarlos
            $persona->image = $request->file('image')->store('images');//le asignamos la imagen que sube
            $persona->save();
        }
        $image = Image::make(storage::get($persona->image))
        ->widen(600)//redimenciona la imagen a 600 px
        ->limitColors(255)//limitamos el color a 255
        ->encode();//volvemos a codificar la nueva imagen
        //sobreescribiremos la misma imagen con la nueva imagen redimensionada
        Storage::put($persona->image, (string) $image);
        PersonaSaved::dispatch($persona);

        return redirect()->route('personas')->with('success', 'Persona creada exitosamente.');
    }
    public function destroy(Persona $persona) {
        Storage::delete($persona->image);//le pasamos la ubicacion de la imagen 
        $persona->delete();
        return redirect()->route('personas');

    }
}