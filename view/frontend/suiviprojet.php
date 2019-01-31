<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

  <head>

      <!--- basic page needs
      ================================================== -->
      <meta charset="utf-8">
      <title>Suivi Projet PHP & Mysql</title>
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- mobile specific metas
      ================================================== -->
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSS
      ================================================== -->
      <link rel="stylesheet" href="../../public/css/suivi.css">
      <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
      <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  </head>

  <body>
    <div class="container">
      <h1>Suivi Projet PHP & Mysql</h1>
      
      <div id="table" class="table-editable">
        <span class="table-add glyphicon glyphicon-plus"></span>
        <table class="table">
          <tr>
            <th>Name</th> <!--  -->
            <th>Value</th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td contenteditable="true">INTERFACE</td>
            <td contenteditable="true">FRONTEND</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
          <tr>
            <td contenteditable="true">lecture des billets</td>
            <td contenteditable="true">OK</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
          <tr>
            <td contenteditable="true">Ajout de commentaires</td>
            <td contenteditable="true">OK</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
          <tr>
            <td contenteditable="true">Signaler un commentaire</td>
            <td contenteditable="true">A faire</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
          <tr>
            <td contenteditable="true">INTERFACE</td>
            <td contenteditable="true">BACKEND</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
          <tr>
            <td contenteditable="true">Create</td>
            <td contenteditable="true">A finir</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
          <tr>
            <td contenteditable="true">Read</td>
            <td contenteditable="true">A faire</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
          <tr>
            <td contenteditable="true">Update</td>
            <td contenteditable="true">A faire</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
          <tr>
            <td contenteditable="true">Delete</td>
            <td contenteditable="true">A faire</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
          <tr>
            <td contenteditable="true">Modérer commentaires</td>
            <td contenteditable="true">A faire</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
          <tr>
            <td contenteditable="true">TinyMCE</td>
            <td contenteditable="true">OK</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
          <tr>
            <td contenteditable="true">Vues</td>
            <td contenteditable="true">Doit être finalisées(css, html)</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
          <!-- This is our clonable table line -->
          <tr class="hide">
            <td contenteditable="true">Untitled</td>
            <td contenteditable="true">undefined</td>
            <td>
              <span class="table-remove glyphicon glyphicon-remove"></span>
            </td>
            <td>
              <span class="table-up glyphicon glyphicon-arrow-up"></span>
              <span class="table-down glyphicon glyphicon-arrow-down"></span>
            </td>
          </tr>
        </table>
      </div>
      
      <button id="export-btn" class="btn btn-primary">Export Data</button>
      <p id="export"></p>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="../../public/js/suivi.js"></script>
  </body>
</html>



