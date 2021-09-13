<!DOCTYPE html>
<html>
<head>
    <title>Framework Padawans</title>
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    
    <script>
        $(function () {
         
            $("#sidebar").load("sidebar.php");
         
        });
</script>
</head>

<body>


    <!-- MENU -->
    <div class="navbar">
        <img src="img/logo1.png" class="navlogo">
    </div>

    
<div class="container ">
    <div class="containerPadrao">
        <div class="row">
              
         <div class="col-3">
            <div id="sidebar"></div> 
         </div>
        
          <div class="col-9">
          <div class="container">
              <a id="#topo"><h2>Postagens</h2></a>

        <?php
            
          
            $url = "https://jsonplaceholder.typicode.com/posts";  // Consumo da API
            $inicio = curl_init($url);
            $dadosValidos = false;

                curl_setopt($inicio, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($inicio, CURLOPT_SSL_VERIFYPEER, false);
 
                    $api = array_values(json_decode(curl_exec($inicio)));
        

    
                $valor = array_values(json_decode(curl_exec($inicio)));
                    echo ("<table border='1'>
                            <tr><td><b>Titulo</b></td> 
                                <td><b>Descrição</b></td> 
                            </tr>");
                            
                    foreach ($valor as $key => $object) {
                        echo ("<tr>
                                <td>" . $object->title . "</td> 
                                <td>" . $object->body . "</td>
                               </tr>");
                        }
                            echo ("</table>");
                    
        ?>
            <a href="#" id="topo" class="topo">Voltar ao<br> topo</a>
     </div>
         </div>
         </div>
      
    </div>
    
</div>


<footer class="rodape"> 
    <div  class="d-flex justify-content-center align-items-center">
 
           <span> Desenvolvido por: Thalita Mendonça Antico   </span> 
         
    
    </div>    

</footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>