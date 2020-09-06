Crear cliente:
<br/>

@if ($errors->any())
    <div class="alert alert-danger" role="alert"  style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('client.store')}}" method="post">
    {{ csrf_field() }}
  <label for="name">First name:</label>
  <input type="text" id="name" name="name">
  <br><br>
  <button type="submit">Enviar</button>
</form> 
