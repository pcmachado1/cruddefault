<?php
        
        $_GET['page'] = "";
       //mail('paulo_chm@hotmail.com', 'teste', "testess");
    switch ($_GET['page']) 
    {
        case '':
            
            include 'view/header.html';
            include 'view/usuarios.html';
            include 'view/footer.html';
            
        break;

        default:
            
        break;
    }
        
    
        
        
            
?>
