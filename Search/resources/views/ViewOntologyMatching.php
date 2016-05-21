<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ontology Matching</title>
    <?php echo MaterializeCSS::include_full() ?>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="<?php echo URL::to('/js/shared/angular.js') ?>"></script>
    <script src="<?php echo URL::to('/js/shared/angular-route.min.js') ?>"></script>
    <script src="<?php echo URL::to('/js/shared/angular-animate.min.js') ?>"></script>
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

        .view-animate {
            padding:10px;
        }
        .view-animate.ng-enter, .view-animate.ng-leave {
            -webkit-transition: 500ms cubic-bezier(0.250, 0.460, 0.450, 0.940) all;
            -moz-transition: 500ms cubic-bezier(0.250, 0.460, 0.450, 0.940) all;
            -ms-transition: 500ms cubic-bezier(0.250, 0.460, 0.450, 0.940) all;
            -o-transition: 500ms cubic-bezier(0.250, 0.460, 0.450, 0.940) all;
            transition: 500ms cubic-bezier(0.250, 0.460, 0.450, 0.940) all;

            display:block;
            width:100%;
            position:absolute;
            top:0;
            left:0;
            right:0;
            bottom:0;
            padding:10px;
        }

        .view-animate.ng-enter {
            left: 100%;
        }

        .view-animate.ng-leave {
            left: 0;
        }

        .view-animate.ng-enter.ng-enter-active {
            left: 0;
        }
        .view-animate.ng-leave.ng-leave-active {
            left: -100%;
        }
    </style>
</head>
<body ng-app="collectInputData" ng-controller="collect">


            <?php echo  Form ::open(array('url' => '#'))  ?>

            <div ng-view class="view-animate">
            </div>
            <?php echo Form::close() ?>

            <!-- Modal Trigger -->
<!--            <a class="modal-trigger waves-effect waves-light btn" href="#modal1" onclick=" $('#modal1').openModal();">Modal</a>-->




<!-- Modules -->
<script src="<?php echo URL::to('/js/app.js') ?>"></script>
<!-- Controllers -->
<script src="<?php echo URL::to('/js/controllers/MainController.js') ?>"></script>
</body>
</html>