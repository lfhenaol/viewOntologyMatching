app.controller('collect',['$scope','$http',function($scope,$http) {
    $scope.LOM = "";
    $scope.addElementsLOM = function(){
        $scope.LOM = {
            "lom": [
            {
                "general": {
                    "Identifier": {
                        "catalog":$scope.catalog || false,
                        "entry": $scope.entry || false
                    },
                    "title": $scope.title || false,
                    "language": $scope.language || false,
                    "description": $scope.description || false,
                    "keyword": $scope.keywordG || false,
                    "coverage": $scope.coverage || false,
                    "structure": $scope.structure || false,
                    "aggregationLevel": $scope.aggregationLevel || false
                },
                "technical": {
                    "requirement": {
                        "orComposite": {
                            "type": $scope.type || false,
                            "name": $scope.name || false,
                            "minimumVersion": $scope.minVersion || false,
                            "maximumVersion": $scope.maxVersion || false
                        }
                    },
                    "format": $scope.format || false,
                    "size": $scope.size || false,
                    "location": $scope.location || false,
                    "installationRemarks": $scope.installationRemarks || false,
                    "otherPlatformRequirements": $scope.otherPlatformRequirements || false,
                    "duration": $scope.duration || false
                },
                "educational": {
                    "interactivityType": $scope.interactivityType || false,
                    "learningResourceType": $scope.learningResourceType || false,
                    "interactivityLevel": $scope.interactivityLevel || false,
                    "semanticDensity": $scope.semanticDensity || false,
                    "intendedEndUserRole": $scope.intendedEndUserRole || false,
                    "context": $scope.context || false,
                    "typicalAgeRange": $scope.typicalAgeRange || false,
                    "difficulty": $scope.difficulty || false,
                    "typicalLearningTime": $scope.typicalLearningTime || false,
                    "description": $scope.descriptionE || false,
                    "language": $scope.languageE || false
                },
                "classification": {
                    "taxonPath": {
                        "taxon": {
                            "id": $scope.id || false,
                            "entry": $scope.entryC || false
                        },
                        "source": $scope.source || false
                    },
                    "purpose": $scope.purpose || false,
                    "description": $scope.descriptionC || false,
                    "keyword": $scope.keyword || false
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