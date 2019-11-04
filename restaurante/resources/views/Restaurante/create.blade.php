<div class="container">
    @if(session('success'))<p class="alert-success">{{session('success')}}</p>
    @endif
    <form action="{{url('/createPrato')}}" method="post">
        {{csrf_field()}}
        <div class="col-lg-3">
            <div class="form-group">
                <label for="name"> Informe o nome do prato</label>
                <input type="text" name="nome" placeholder="Informe o nome do prato" class="form-control">
            </div>
            <div class="form-group">
                <label for="name"> Informe a descrição do prato</label>
                <input type="text" name="descricao" placeholder="Informe a descrição do prato" class="form-control">
            </div>
            <div class="form-group">
                <label for="name"> Informe o preço do prato</label>
                <input type="text" name="preco" placeholder="Informe o preço do prato" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Salvar" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
