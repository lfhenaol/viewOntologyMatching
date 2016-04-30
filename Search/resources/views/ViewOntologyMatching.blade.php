<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ontology Matching</title>
    {!! MaterializeCSS::include_full() !!}
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{URL::to('/js/angular.min.js')}}"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col s12 m4 l2">&nbsp;</div>
        <div class="col s12 m4 l8">
            <h3 align="center">Ontology Matching</h3>
            {!! Form ::open(array('url' => '#')) !!}
            <div class="row">
                <div class="input-field col s12">
                    {{ Form::label('nameMatchOnto','Name matching ontologies') }}
                    {{ Form::text('nameMatchOnto','',array('id'=>'nameMatchOnto','class'=>'validate','required')) }}
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    {{ Form::label('externEndpURL','External endpoint URL') }}
                    {{ Form::text('externEndpURL','',array('id'=>'externEndpURL','class'=>'validate','required')) }}
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    {{ Form::label('uriGraph','Graph URI external ontology') }}
                    {{ Form::text('uriGraph','',array('id'=>'uriGraph','class'=>'validate','required')) }}
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
                                                            {{Form::checkbox('catalog','true',false,array('id'=>'catalog'))}}
                                                            {{Form::label('catalog','Catalog',array('style'=>'color:black'))}}
                                                            <br><br>
                                                            {{Form::checkbox('entry','true',false,array('id'=>'entry'))}}
                                                            {{Form::label('entry','Entry',array('style'=>'color:black'))}}
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p>
                                                {{Form::checkbox('title','true',false,array('id'=>'title'))}}
                                                {{Form::label('title','Title',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('language','true',false,array('id'=>'language'))}}
                                                {{Form::label('language','Language',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('description','true',false,array('id'=>'description'))}}
                                                {{Form::label('description','Description',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('keyword','true',false,array('id'=>'keyword'))}}
                                                {{Form::label('keyword','Keyword',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('coverage','true',false,array('id'=>'coverage'))}}
                                                {{Form::label('coverage','Coverage',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('structure','true',false,array('id'=>'structure'))}}
                                                {{Form::label('structure','Structure',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('aggregationLevel','true',false,array('id'=>'aggregationLevel'))}}
                                                {{Form::label('aggregationLevel','Aggregation Level',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('general','true',false,array('id'=>'general'))}}
                                                {{Form::label('general','General',array('style'=>'color:black'))}}
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
                                                                        {{Form::checkbox('type','true',false,array('id'=>'type'))}}
                                                                        {{Form::label('type','Type',array('style'=>'color:black'))}}
                                                                        <br><br>
                                                                        {{Form::checkbox('name','true',false,array('id'=>'name'))}}
                                                                        {{Form::label('name','Name',array('style'=>'color:black'))}}
                                                                        <br><br>
                                                                        {{Form::checkbox('minVersion','true',false,array('id'=>'minVersion'))}}
                                                                        {{Form::label('minVersion','Minimum version',array('style'=>'color:black'))}}
                                                                        <br><br>
                                                                        {{Form::checkbox('maxVersion','true',false,array('id'=>'maxVersion'))}}
                                                                        {{Form::label('maxVersion','Maximum version',array('style'=>'color:black'))}}
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p>
                                                {{Form::checkbox('format','true',false,array('id'=>'format'))}}
                                                {{Form::label('format','Format',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('size','true',false,array('id'=>'size'))}}
                                                {{Form::label('size','Size',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('location','true',false,array('id'=>'location'))}}
                                                {{Form::label('location','Location',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('installationRemarks','true',false,array('id'=>'installationRemarks'))}}
                                                {{Form::label('installationRemarks','Installation Remarks',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('otherPlatformRequirements','true',false,array('id'=>'otherPlatformRequirements'))}}
                                                {{Form::label('otherPlatformRequirements','Other Platform Requirements',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('duration','true',false,array('id'=>'duration'))}}
                                                {{Form::label('duration','Duration',array('style'=>'color:black'))}}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">add_circle</i>
                                            <span style="font-weight: bold">Educational</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <p>
                                                {{Form::checkbox('interactivityType','true',false,array('id'=>'interactivityType'))}}
                                                {{Form::label('interactivityType','Interactivity Type',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('learningResourceType','true',false,array('id'=>'learningResourceType'))}}
                                                {{Form::label('learningResourceType','Learning Resource Type',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('interactivityLevel','true',false,array('id'=>'interactivityLevel'))}}
                                                {{Form::label('interactivityLevel','Interactivity Level',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('semanticDensity','true',false,array('id'=>'semanticDensity'))}}
                                                {{Form::label('semanticDensity','Semantic Density',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('intendedEndUserRole','true',false,array('id'=>'intendedEndUserRole'))}}
                                                {{Form::label('intendedEndUserRole','Intended End User Role',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('context','true',false,array('id'=>'context'))}}
                                                {{Form::label('context','Context',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('typicalAgeRange','true',false,array('id'=>'typicalAgeRange'))}}
                                                {{Form::label('typicalAgeRange','Typical Age Range',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('difficulty','true',false,array('id'=>'difficulty'))}}
                                                {{Form::label('difficulty','Difficulty',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('typicalLearningTime','true',false,array('id'=>'typicalLearningTime'))}}
                                                {{Form::label('typicalLearningTime','Typical Learning Time',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('description','true',false,array('id'=>'description'))}}
                                                {{Form::label('description','Description',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('language','true',false,array('id'=>'language'))}}
                                                {{Form::label('language','Language',array('style'=>'color:black'))}}
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
                                                                        {{Form::checkbox('id','true',false,array('id'=>'id'))}}
                                                                        {{Form::label('id','Id',array('style'=>'color:black'))}}
                                                                        <br><br>
                                                                        {{Form::checkbox('entry','true',false,array('id'=>'entry'))}}
                                                                        {{Form::label('entry','Entry',array('style'=>'color:black'))}}
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <p>
                                                            {{Form::checkbox('source','true',false,array('id'=>'source'))}}
                                                            {{Form::label('source','Source',array('style'=>'color:black'))}}
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p>
                                                {{Form::checkbox('purpose','true',false,array('id'=>'purpose'))}}
                                                {{Form::label('purpose','Purpose',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('description','true',false,array('id'=>'description'))}}
                                                {{Form::label('description','Description',array('style'=>'color:black'))}}
                                                <br><br>
                                                {{Form::checkbox('keyword','true',false,array('id'=>'keyword'))}}
                                                {{Form::label('keyword','Keyword',array('style'=>'color:black'))}}
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
                    <button class="btn waves-effect waves-light" type="submit" name="action">Matching
                        <i class="material-icons right">device_hub</i>
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
            <div class="col s12 m4 l2">&nbsp;</div>
    </div>
</div>
</body>
</html>