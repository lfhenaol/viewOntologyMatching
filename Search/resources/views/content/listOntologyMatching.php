<!DOCTYPE html>
<html lang="en">
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
<?php echo view("header/navbar")?>
<!-- Modules -->
<script src="<?php echo URL::to('/js/app.js') ?>"></script>
<!-- Controllers -->
<script src="<?php echo URL::to('/js/controllers/MainController.js') ?>"></script>
</body>
</html>