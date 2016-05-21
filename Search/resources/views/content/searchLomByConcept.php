<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
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
<body onload=" $('select').material_select();">
<?php echo view("header/navbar")?>
<div class="row">
    <div class="col s12 m4 l2">&nbsp;</div>
    <div class="col s12 m4 l8" ng-app="collectInputData" ng-controller="collect">
        <h3 align="center">Search</h3>
        <div class="row">
            <div class="input-field col s6">
                <?php echo  Form::text('search',"",array('id'=>'search','class'=>'validate','required'))  ?>
            </div>
            <div class="input-field col s3">
                <?php echo  Form::select('Ontology Match',array("test"=>"test"),null,['placeholder'=>"Ontology Match","sdsd"=>"sdsd"])  ?>
            </div>
            <div class="input-field col s3">
                <?php echo  Form::select('Goal',array('Learn'=>"Learn"),null,['placeholder'=>"Goal"])  ?>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 center">
                <button class="waves-effect waves-circle waves-light btn-floating btn-large" type="button" name="action">
                    <i class="material-icons right">search</i>
                </button>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l2">&nbsp;</div>
</div>
<!-- Modules -->
<script src="<?php echo URL::to('/js/app.js') ?>"></script>
<!-- Controllers -->
<script src="<?php echo URL::to('/js/controllers/MainController.js') ?>"></script>
</body>
</html>