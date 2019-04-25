<?PHP
include "../core/reclamationc.php";
$reclamation1C=new reclamationc();
$listereclamation=$reclamation1C->afficherReclamation1();

//var_dump($listeEmployes->fetchAll());
?>

 <head>
  <title>Reclamation</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">Tableau des reclamations</h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6">
       <h3 class="panel-title">Enregistrement</h3>
      </div>
      <div class="col-md-6" align="right">

      </div>
     </div>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
     
      <table class="table table-bordered table-striped">
       <thead>
        <tr>
          <td>id</td>
         <td>sujet</td>
         <td>description</td>
         <td>email</td>
         <td>etat</td>
         <td>date</td>
         <td>Edit</td>
         <td>Delete</td>
        </tr>
       </thead>
       <?PHP
foreach($listereclamation as $row){
  ?>
  <tr>
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['sujet']; ?></td>
  <td><?PHP echo $row['description']; ?></td>
  <td><?PHP echo $row['email']; ?></td>
  <td><?PHP echo $row['etat']; ?></td>
  <td><?PHP echo $row['date']; ?></td>
    <td><form method="POST" action="modifierreclamation.php">
  <input type="submit" name="modifier" value="modifier" class="btn btn-warning btn-xs update">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
   <input type="hidden" value="<?PHP echo $row['etat']; ?>" name="etat">
  </form>
  </td>
  <td><form method="POST" action="supprimerreclamation.php">
  <input type="submit" name="supprimer" value="supprimer" class="btn btn-danger btn-xs delete">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">

  </form>
  </td>
  </tr>
  <?PHP
}
?>
      </table>      
     </div>
    </div>
   </div>
  </div>
</body>

