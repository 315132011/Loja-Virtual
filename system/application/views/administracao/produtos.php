<div id="form-cadastro">

<?php
    
    echo validation_errors();
    
    echo form_open_multipart(base_url().'administracao/produtos/cadastrar');
    
    echo form_fieldset('Adicionar Produtos');
    
        echo form_label('Categoria','categoria');
        
        foreach ($categorias as $categoria):
            $drop[$categoria->id] = $categoria->nome;
        endforeach;
    
        echo form_dropdown('categoria',$drop,set_value('categoria'));
    
        echo form_label('Nome do produto','nome');
        echo form_input('nome',set_value('nome'));
        
        echo form_label('Foto do produto2','userfile');
        echo form_upload('userfile');
                
        echo form_label('Preço do produto','preco');
        echo form_input('preco',set_value('preco'));
        
        echo form_label('Descricao do produto','descricao');
        echo form_textarea('descricao',set_value('descricao'));
        
        echo form_submit('mysubmit','Adicionar');
        echo form_reset('mysubmit','Cancelar');
                
    echo form_fieldset_close();
    
    echo form_close();
    
?>

</div>

<div id='lista-produtos'>
<?php
foreach($produtos as $produto):

    echo anchor("./administracao/produtos/excluir/".$produto->id, "[X]","onclick=\"return confirm('Confirma a exclsao desta categoria?')\"");
    echo " - ";
    echo anchor("./administracao/produtos/alterar/".$produto->id, $produto->nome);
    echo br('1');
   
endforeach;

?>
</div>