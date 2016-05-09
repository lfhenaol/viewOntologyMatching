app.controller('collect',['$scope','$http',function($scope,$http) {
    $scope.LOM = "";
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

        return $scope.LOM;
    };

    $scope.sendElementsChoice = function() {

        var data = $scope.LOM;

        var config = {
            headers : {
                'Content-Type': 'application/json'
            }
        }

        $http.post('/requestMatching',data,config)
            .success(function (data, status, headers, config) {
                $scope.ResponseSucess = data;
            })
            .error(function (data, status, headers, config) {
                $scope.ResponseDetails = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + headers +
                    "<hr />config: " + config;
            })
    }
}]);