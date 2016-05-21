<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Repository</title>
    <?php echo MaterializeCSS::include_full() ?>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        table.results.striped th, td {
            padding: 15px 15px;
        }

        .collection{
            border: 0px !important;
        }

        .collection .collection-item {
            background-color: #22A498;
        }

    </style>
</head>
<body>
<?php echo view("header/navbar")?>
<div class="row">
    <div class="col s12 m4 l2">&nbsp;</div>
    <div class="col s12 m4 l8" ng-app="collectInputData" ng-controller="collect">
        <h3 align="center">Repository</h3>
        <table id="table" class="highlight">
            <thead>
            <tr>
                <th data-field="id">Name Ontology Matching</th>
                <th data-field="name">External endpoint URL</th>
                <th data-field="price">Options</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    Test
                </td>
                <td>
                    http://52.27.133.55:8890/sparql
                </td>
                <td>
                        <div class="fixed-action-btn horizontal" style="top: 0px;">
                            <a class="btn-floating btn-large red">
                                <i class="large material-icons">menu</i>
                            </a>
                            <ul>
                                <li><a class="btn-floating waves-effect waves-light deleteIntoMatch" >
                                        <i class="material-icons">clear</i>
                                    </a></li>
                                <li><a class="btn-floating waves-effect waves-light editOntMatch">
                                        <i class="material-icons">edit</i>
                                    </a></li>
                                <li><a class="btn-floating waves-effect waves-light addOntMatch" href="/ontologyMatch">
                                        <i class="material-icons">add</i>
                                    </a></li>
                            </ul>
                        </div>
                </td>
            </tr>
            </tr>
            </tbody>
        </table>
        </div>
    <div class="col s12 m4 l2">&nbsp;</div>
</div>
<!-- Modules -->
<script src="<?php echo URL::to('/js/app.js') ?>"></script>
<!-- Controllers -->
<script src="<?php echo URL::to('/js/controllers/MainController.js') ?>"></script>
</body>
</html>