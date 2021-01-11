    
    
    <h1> {{ $modo }} empleado </h1>


    @if(count($errors)>0)

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>   
                    
                @endforeach
            </ul>
        </div>
        
    @endif


    <div class="form-group">
        <label for="Nombre">Nombre</label>
        <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}">
        
    </div>

    <div class="form-group">
        <label for="Apellido">Apellido</label>
        <input type="text" class="form-control" name="Apellido" id="Apellido" value="{{ isset($empleado->Apellido)?$empleado->Apellido:old('Apellido') }}">
        
    </div>

    <div class="form-group">
        <label for="Correo">Correo</label>
        <input type="text" class="form-control" name="Correo" id="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}">
        
    </div>

    <div class="form-group">
        <label for="Foto"></label>
        {{-- {{ $empleado->Foto }}  ruta de la foto--}}
        @if(isset($empleado->Foto))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'. $empleado->Foto }}" alt=""  width="100">
        @endif  
        <input type="file" class="form-control" name="Foto" id="Foto" value="">
        
    </div>

      
    <input class="btn btn-success" type="submit" value=" {{ $modo }} datos">
    <a  class="btn btn-primary" href="{{ url('empleado/') }}">Volver</a>