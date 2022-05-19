@extends('layouts.tema')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    <form>
                                        <img src="https://cdn-icons-png.flaticon.com/512/4564/4564877.png"
                                            class="img-fluid" alt="Imagen metodo de pago">
                                        <div class="mb-3">
                                            <label for="InputClave" class="form-label">Numeros de tarjeta</label>
                                            <input type="Clave" class="form-control" id="InputClave"
                                                placeholder='4353-3344-6764-****' maxlength="19" />
                                            <div id="ClavelHelp" class="form-text">Nunga compartas tus datos!</div>
                                        </div>
                                        <label for="InputClave" class="form-label">Banco</label>
                                        <input type="Clave" class="form-control" id="InputClave">
                                        <p></p>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Tipo de tarjeta</option>
                                            <option value="1">Visa</option>
                                            <option value="2">MasterCard</option>
                                        </select>
                                        <div class="mb-3">
                                            <label for="InputPassword1" class="form-label">Fecha de vencimiento</label>
                                            <input type="password" class="form-control" id="InputPassword"
                                                placeholder='AA//MM' maxlength="5" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="InputPassword1" class="form-label">Nip</label>
                                            <input type="password" class="form-control" id="InputPassword1" maxlength="4">
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Aceptar termino y
                                                condiciones</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Continuar</button>
                                    </form>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
