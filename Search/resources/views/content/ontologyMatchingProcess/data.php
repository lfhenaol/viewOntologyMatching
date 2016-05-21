
<head>
    <meta charset="UTF-8">
    <title>Ontology Matching</title>
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
<div class="container">
<div class="row">
    <div class="col s12 m4 l2">&nbsp;</div>
    <div class="col s12 m4 l8" ng-app="collectInputData" ng-controller="collect">
        <h3 align="center">Ontology Matching</h3>
<div class="row">
    <div class="input-field col s12">
        <?php echo  Form::label('nameMatchOnto','Name matching ontologies')  ?>
        <?php echo  Form::text('nameMatchOnto',"test",array('id'=>'nameMatchOnto','class'=>'validate','required','ng-model'=>'nameMatchOnto'))  ?>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <?php echo  Form::label('externEndpURL','External endpoint URL')  ?>
        <?php echo  Form::text('externEndpURL'," ",array('id'=>'externEndpURL','class'=>'validate','required','ng-model'=>'externEndpURL'))  ?>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <?php echo  Form::label('uriGraph','Graph URI external ontology')  ?>
        <?php echo  Form::text('uriGraph'," ",array('id'=>'uriGraph','class'=>'validate','required','ng-model'=>'uriGraph'))  ?>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <button class="btn waves-effect waves-light" type="button" name="action" ng-click="go('/matching')">Next
            <i class="material-icons right">forward</i>
        </button>
    </div>
</div>
        </div>
    <div class="col s12 m4 l2">&nbsp;</div>
    </div>
    </div>
</body>