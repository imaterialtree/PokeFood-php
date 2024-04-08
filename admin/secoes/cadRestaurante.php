<div class="container">
    <h2 class='display-5 mb-5'>CADASTRO RESTAURANTE</h1>
    <form action="controller/inserirRestaurante.php" method="post" enctype="multipart/form-data" class="col-10 col-lg-6 mx-auto">
        <div class="mb-3">
            <label for="txtNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="txtNome" id="txtNome">
        </div>
    
        <div class="mb-3">
            <label for="txtDescricao" class="form-label">Descrição</label>
            <textarea class="form-control" name="txtDescricao" id="txtDescricao" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="txtCategoria" class="form-label">Categoria</label>
            <input class="form-control" type="text" name="txtCategoria" required>
        </div>
        <div class="mb-3">
            <label for="fileImagem" class="form-label">Imagem do Restaurante</label>
            <input class="form-control" type="file" name="fileImagem" required>
        </div>
        <input type="submit" value="Salvar" class="btn btn-primary col-12">
    </form>
</div>
