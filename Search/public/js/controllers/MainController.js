app.controller('collect',['$scope','$http','$location',function($scope,$http,$location) {
    $scope.nameMatchOnto = "Test";
    $scope.externEndpURL = "http://52.27.133.55:8890/sparql";
    $scope.uriGraph = "http://slor.sourceforge.net/ontology/slor.owl";
    $scope.LOM = "";
    $scope.MatchLOM="";

    $scope.go = function (path) {
        $location.path(path);
    }

    $scope.addElementsLOM = function(){
        $scope.LOM = {
            "nameMatchOnto":$scope.nameMatchOnto,
            "externEndpURL":$scope.externEndpURL,
            "uriGraph":$scope.uriGraph,
            "lom": [
            {
                "general": {
                    "identifier": {
                        "catalog":$scope.catalog + "",
                        "entry": $scope.entry + ""
                    },
                    "title": $scope.title + "",
                    "language": $scope.language + "",
                    "description": $scope.description + "",
                    "keyword": $scope.keywordG + "",
                    "coverage": $scope.coverage + "",
                    "structure": $scope.structure + "",
                    "aggregationLevel": $scope.aggregationLevel + ""
                },
                "technical": {
                    "requirement": {
                        "orComposite": {
                            "type": $scope.type + "",
                            "name": $scope.name + "",
                            "minimumVersion": $scope.minVersion + "",
                            "maximumVersion": $scope.maxVersion + ""
                        }
                    },
                    "format": $scope.format + "",
                    "size": $scope.size + "",
                    "location": $scope.location + "",
                    "installationRemarks": $scope.installationRemarks + "",
                    "otherPlatformRequirements": $scope.otherPlatformRequirements + "",
                    "duration": $scope.duration + ""
                },
                "educational": {
                    "interactivityType": $scope.interactivityType + "",
                    "learningResourceType": $scope.learningResourceType + "",
                    "interactivityLevel": $scope.interactivityLevel + "",
                    "semanticDensity": $scope.semanticDensity + "",
                    "intendedEndUserRole": $scope.intendedEndUserRole + "",
                    "context": $scope.context + "",
                    "typicalAgeRange": $scope.typicalAgeRange + "",
                    "difficulty": $scope.difficulty + "",
                    "typicalLearningTime": $scope.typicalLearningTime + "",
                    "description": $scope.descriptionE + "",
                    "language": $scope.languageE + ""
                },
                "classification": {
                    "taxonPath": {
                        "taxon": {
                            "id": $scope.id + "",
                            "entry": $scope.entryC + ""
                        },
                        "source": $scope.source + ""
                    },
                    "purpose": $scope.purpose + "",
                    "description": $scope.descriptionC + "",
                    "keyword": $scope.keyword + ""
                }
            }
        ]
        };

       // return $scope.LOM;
    };

    $scope.sendElementsChoice = function() {
        $scope.info = true;
        $scope.progss = false;

        $scope.addElementsLOM();
        $(document).ready(function() {
            $('#modal1').openModal();
        });
        var data = $scope.LOM;

        var config = {
            headers : {
                'Content-Type': 'application/json'
            }
        }

        $http.post('/requestMatching',data,config)
            .success(function (data, status, headers, config) {
                $scope.progss = true;
                $scope.info = false;
                $scope.MatchLOM = data;
                $scope.ResponseSuccess = data;
            })
            .error(function (data, status, headers, config) {
                $scope.ResponseDetails = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + headers +
                    "<hr />config: " + config;
            })
    }
}]);