<?php ob_start() ?>

 <table>
     <tr>
         <th>alimento (por 100g)</th>
         <th>Enlace a Wikipedia</th>
         
     </tr>
     <?php foreach ($params['alimentos'] as $alimento) :?>
     <tr>
         <td><a href="index.php?ctl=ver&id=<?php echo $alimento['id']?>">
                 <?php echo $alimento['nombre'] ?></a></td>
       
         <td><a class="cajamodal" href="http://es.wikipedia.org/wiki/<?php echo $alimento['nombre']?>">
                 http://es.wikipedia.org/wiki/<?php echo $alimento['nombre'] ?></a></td>
        <td><a href="index.php?ctl=archivoxml&id=<?php echo $alimento['id']?>">Generar xml</a></td>
         
     </tr>
     <?php endforeach; ?>

 </table>


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>