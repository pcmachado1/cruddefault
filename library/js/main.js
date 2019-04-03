$(document).ready(function(){
    
        var usersTable;
    
    $('#btnEditar').click(function(){
       
        $.post('../cruddefault/controller/EdicaoUsuarioController.php',
            {
                id:$("#idHidden").val(),
                nome:$('#txtNomeEdit').val(),
                sobrenome:$('#txtSobrenomeEdit').val(),
                email:$('#txtEmailEdit').val()

            },function(data){
                $("#usersTable tbody").empty();
                loadUsers();
                $("#myModal1").modal("hide")
                                                                         
                            }
              );
    });
    
    $(this).click(function(event){
           
        var curId =event.target.id;

        usersTable = $("#usersTable tbody tr");

        for(i = 0; i < usersTable.length; i++){
                
            if(usersTable[i].id === curId){
                
                $("#idHidden").val(curId);
                $("#txtNomeEdit").val(usersTable[i].childNodes[0].id);
                $("#txtSobrenomeEdit").val(usersTable[i].childNodes[1].id);
                $("#txtEmailEdit").val(usersTable[i].childNodes[2].id);
                
               }
            }
    });
    
    $('#btnCadastro').click(function(){
        
        var objectCadastro = $('input');
        
        $.post('../cruddefault/controller/CadastroController.php',
            {
             nome:objectCadastro[0].value,
             sobrenome:objectCadastro[1].value,
             email:objectCadastro[2].value
            },function(data){
                $("#usersTable tbody").empty();
                loadUsers();
                $("#myModal").modal("hide");
                
                }
            );
    });
});

function deletarUsuario(idDoUsuario){
    
    $.post('../cruddefault/controller/DeletarUsuarioController.php',{id:idDoUsuario},function(data){
        $("#usersTable tbody").empty();
        loadUsers();
        $("#myModal").modal("hide");
        console.log(data);
    });
    console.log(idDoUsuario);
}
function loadUsers(){
    $.post('../cruddefault/controller/UsuariosController.php',{},function(data){
        var jsonObject = JSON.parse(data);
        for(i=0;i<jsonObject.length;i++){
            
            $('#usersTable').append("<tr id="+jsonObject[i].id+">"+
                                        "<td id="+jsonObject[i].nome+">"+jsonObject[i].nome+"</td>"+
                                        "<td id="+jsonObject[i].sobrenome+">"+jsonObject[i].sobrenome+"</td>"+
                                        "<td id="+jsonObject[i].email+">"+jsonObject[i].email+"</td>"+
                                        "<td><button id="+jsonObject[i].id+" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal1\"><span class=\"glyphicon glyphicon-plus\"></span> Editar</button></td>"+
                                        "<td><button id="+jsonObject[i].id+" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal2\" onClick=deletarUsuario("+jsonObject[i].id+")><span class=\"glyphicon glyphicon-plus\" ></span> Excluir</button></td>"+
                                        "</tr>"
                    );
        }
    });
}


