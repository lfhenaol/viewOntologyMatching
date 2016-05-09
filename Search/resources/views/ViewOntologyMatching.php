<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ontology Matching</title>
    <?php echo MaterializeCSS::include_full() ?>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="<?php echo URL::to('/js/shared/angular.min.js') ?>"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col s12 m4 l2">&nbsp;</div>
        <div class="col s12 m4 l8" ng-app="collectInputData" ng-controller="collect">
            <h3 align="center">Ontology Matching</h3>
            <?php echo  Form ::open(array('url' => '#'))  ?>
            <div class="row">
                <div class="input-field col s12">
                    <?php echo  Form::label('nameMatchOnto','Name matching ontologies')  ?>
                    <?php echo  Form::text('nameMatchOnto',"",array('id'=>'nameMatchOnto','class'=>'validate','required','ng-model'=>'nameMatchOnto'))  ?>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <?php echo  Form::label('externEndpURL','External endpoint URL')  ?>
                    <?php echo  Form::text('externEndpURL',"",array('id'=>'externEndpURL','class'=>'validate','required','ng-model'=>'externEndpURL'))  ?>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <?php echo  Form::label('uriGraph','Graph URI external ontology')  ?>
                    <?php echo  Form::text('uriGraph',"",array('id'=>'uriGraph','class'=>'validate','required','ng-model'=>'uriGraph'))  ?>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header active"><i class="material-icons">assignment</i>
                                <span style="font-weight: bold">Elements of external LOM you want to match</span>
                            </div>
                            <div class="collapsible-body">
                                <ul class="collapsible popout" data-collapsible="accordion">
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">add_circle</i>
                                            <span style="font-weight: bold">General</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                <li>
                                                    <div class="collapsible-header"><i class="material-icons">add_circle</i>
                                                        <span style="font-weight: bold">Identifier</span>
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <p>
                                                            <?php echo Form::checkbox('catalog','',false,array('id'=>'catalog','ng-model'=>'catalog',
                                                                'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-catalog'",'ng-false-value'=>"")) ?>
                                                            <?php echo Form::label('catalog','Catalog',array('style'=>'color:black')) ?>
                                                            <br><br>
                                                            <?php echo Form::checkbox('entry','true',false,array('id'=>'entry','ng-model'=>'entry',
                                                                'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-entry'",'ng-false-value'=>"")) ?>
                                                            <?php echo Form::label('entry','Entry',array('style'=>'color:black')) ?>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p>
                                                <?php echo Form::checkbox('title','true',false,array('id'=>'title','ng-model'=>'title',
                                                    'ng-true-value'=>"'http://purl.org/dc/terms/title'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('title','Title',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('language','true',false,array('id'=>'language','ng-model'=>'language',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-language'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('language','Language',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('description','true',false,array('id'=>'description','ng-model'=>'description',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#description'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('description','Description',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('keywordG','true',false,array('id'=>'keywordG','ng-model'=>'keywordG',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-keyword'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('keywordG','Keyword',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('coverage','true',false,array('id'=>'coverage','ng-model'=>'coverage',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-coverage'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('coverage','Coverage',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('structure','true',false,array('id'=>'structure','ng-model'=>'structure',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-structure'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('structure','Structure',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('aggregationLevel','true',false,array('id'=>'aggregationLevel','ng-model'=>'aggregationLevel',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-aggregationLevel'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('aggregationLevel','Aggregation Level',array('style'=>'color:black')) ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">add_circle</i>
                                            <span style="font-weight: bold">Technical</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                <li>
                                                    <div class="collapsible-header"><i class="material-icons">add_circle</i>
                                                        <span style="font-weight: bold">Requirement</span>
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <ul class="collapsible popout" data-collapsible="accordion">
                                                            <li>
                                                                <div class="collapsible-header"><i class="material-icons">add_circle</i>
                                                                    <span style="font-weight: bold">OrComposite</span>
                                                                </div>
                                                                <div class="collapsible-body">
                                                                    <p>
                                                                        <?php echo Form::checkbox('type','true',false,array('id'=>'type','ng-model'=>'type',
                                                                            'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-type'",'ng-false-value'=>"")) ?>
                                                                        <?php echo Form::label('type','Type',array('style'=>'color:black')) ?>
                                                                        <br><br>
                                                                        <?php echo Form::checkbox('name','true',false,array('id'=>'name','ng-model'=>'name',
                                                                            'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-name'",'ng-false-value'=>"")) ?>
                                                                        <?php echo Form::label('name','Name',array('style'=>'color:black')) ?>
                                                                        <br><br>
                                                                        <?php echo Form::checkbox('minVersion','true',false,array('id'=>'minVersion','ng-model'=>'minVersion',
                                                                            'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#maxversion'",'ng-false-value'=>"")) ?>
                                                                        <?php echo Form::label('minVersion','Minimum version',array('style'=>'color:black')) ?>
                                                                        <br><br>
                                                                        <?php echo Form::checkbox('maxVersion','true',false,array('id'=>'maxVersion','ng-model'=>'maxVersion',
                                                                            'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#minversion'",'ng-false-value'=>"")) ?>
                                                                        <?php echo Form::label('maxVersion','Maximum version',array('style'=>'color:black')) ?>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p>
                                                <?php echo Form::checkbox('format','true',false,array('id'=>'format','ng-model'=>'format',
                                                    'ng-true-value'=>"'http://purl.org/dc/terms/format'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('format','Format',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('size','true',false,array('id'=>'size','ng-model'=>'size',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-size'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('size','Size',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('location','true',false,array('id'=>'location','ng-model'=>'location',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-location'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('location','Location',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('installationRemarks','true',false,array('id'=>'installationRemarks','ng-model'=>'installationRemarks',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-instalationremarks'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('installationRemarks','Installation Remarks',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('otherPlatformRequirements','true',false,array('id'=>'otherPlatformRequirements','ng-model'=>'otherPlatformRequirements',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-otherplatformrequeriments'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('otherPlatformRequirements','Other Platform Requirements',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('duration','true',false,array('id'=>'duration','ng-model'=>'duration',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-duration'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('duration','Duration',array('style'=>'color:black')) ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">add_circle</i>
                                            <span style="font-weight: bold">Educational</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <p>
                                                <?php echo Form::checkbox('interactivityType','true',false,array('id'=>'interactivityType','ng-model'=>'interactivityType',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-interactivityType'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('interactivityType','Interactivity Type',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('learningResourceType','true',false,array('id'=>'learningResourceType','ng-model'=>'learningResourceType',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-learningResourceType'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('learningResourceType','Learning Resource Type',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('interactivityLevel','true',false,array('id'=>'interactivityLevel','ng-model'=>'interactivityLevel',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-interactivityLevel'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('interactivityLevel','Interactivity Level',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('semanticDensity','true',false,array('id'=>'semanticDensity','ng-model'=>'semanticDensity',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-semanticDensity'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('semanticDensity','Semantic Density',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('intendedEndUserRole','true',false,array('id'=>'intendedEndUserRole','ng-model'=>'intendedEndUserRole',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-intendedUserRole'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('intendedEndUserRole','Intended End User Role',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('context','true',false,array('id'=>'context','ng-model'=>'context',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-context'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('context','Context',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('typicalAgeRange','true',false,array('id'=>'typicalAgeRange','ng-model'=>'typicalAgeRange',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-typicalAgeRange'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('typicalAgeRange','Typical Age Range',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('difficulty','true',false,array('id'=>'difficulty','ng-model'=>'difficulty',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-difficulty'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('difficulty','Difficulty',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('typicalLearningTime','true',false,array('id'=>'typicalLearningTime','ng-model'=>'typicalLearningTime',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-typicalLearningTime'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('typicalLearningTime','Typical Learning Time',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('descriptionE','true',false,array('id'=>'descriptionE','ng-model'=>'descriptionE',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#description'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('descriptionE','Description',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('languageE','true',false,array('id'=>'languageE','ng-model'=>'languageE',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-language'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('languageE','Language',array('style'=>'color:black')) ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">add_circle</i>
                                            <span style="font-weight: bold">Classification</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                <li>
                                                    <div class="collapsible-header"><i class="material-icons">add_circle</i>
                                                        <span style="font-weight: bold">Taxon Path</span>
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <ul class="collapsible popout" data-collapsible="accordion">
                                                            <li>
                                                                <div class="collapsible-header"><i class="material-icons">add_circle</i>
                                                                    <span style="font-weight: bold">Taxon</span>
                                                                </div>
                                                                <div class="collapsible-body">
                                                                    <p>
                                                                        <?php echo Form::checkbox('id','true',false,array('id'=>'id','ng-model'=>'id',
                                                                            'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#Id'",'ng-false-value'=>"")) ?>
                                                                        <?php echo Form::label('id','Id',array('style'=>'color:black')) ?>
                                                                        <br><br>
                                                                        <?php echo Form::checkbox('entryC','true',false,array('id'=>'entryC','ng-model'=>'entryC',
                                                                            'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#haas-entry'",'ng-false-value'=>"")) ?>
                                                                        <?php echo Form::label('entryC','Entry',array('style'=>'color:black')) ?>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <p>
                                                            <?php echo Form::checkbox('source','true',false,array('id'=>'source','ng-model'=>'source',
                                                                'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-source'",'ng-false-value'=>"")) ?>
                                                            <?php echo Form::label('source','Source',array('style'=>'color:black')) ?>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p>
                                                <?php echo Form::checkbox('purpose','true',false,array('id'=>'purpose','ng-model'=>'purpose',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-purpose'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('purpose','Purpose',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('descriptionC','true',false,array('id'=>'descriptionC','ng-model'=>'descriptionC',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#description'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('descriptionC','Description',array('style'=>'color:black')) ?>
                                                <br><br>
                                                <?php echo Form::checkbox('keyword','true',false,array('id'=>'keyword','ng-model'=>'keyword',
                                                    'ng-true-value'=>"'http://www.semanticweb.org/jenny/ontologies/2015/10/untitled-ontology-113#has-keyword'",'ng-false-value'=>"")) ?>
                                                <?php echo Form::label('keyword','Keyword',array('style'=>'color:black')) ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light" type="button" name="action" ng-click="sendElementsChoice()">Matching
                        <i class="material-icons right">device_hub</i>
                    </button>
                    <p>{{ count }}</p>
                </div>
            </div>
            <?php echo Form::close() ?>

            <!-- Modal Trigger -->
            <a class="modal-trigger waves-effect waves-light btn" href="#modal1" onclick=" $('#modal1').openModal();">Modal</a>

            <!-- Modal Structure -->
            <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h4>Modal Header</h4>
                    <p>{{addElementsLOM() | json}}</p>
                    <p>{{ResponseSucess}}</p>
                    <p>{{ResponseDetails}}</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
                </div>
            </div>
        </div>
            <div class="col s12 m4 l2">&nbsp;</div>
    </div>
</div>


<!-- Modules -->
<script src="<?php echo URL::to('/js/app.js') ?>"></script>
<!-- Controllers -->
<script src="<?php echo URL::to('/js/controllers/MainController.js') ?>"></script>
</body>
</html>