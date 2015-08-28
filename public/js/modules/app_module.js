var ssApp = {

    settings: {
        apiRoot: '/api/v1/admin'
    },

    displayNotification: function(messages) {
        // sort through message.. show based on type: error, success, etc
        if (typeof messages != undefined) {
            for (var type in messages) {
                if (Array.isArray(messages[type])) {
                    var arrayLength = messages[type].length;
                    for (var i = 0; i < arrayLength; i++ ) {
                        if (type == 'success') {
                            toastr.success(messages[type][i]);
                        } else if (type == 'error') {
                            toastr.error(messages[type][i]);
                        }
                    }
                } else {
                    if (type == 'success') {
                        toastr.success(messages[type]);
                    } else if (type == 'error') {
                        toastr.error(messages[type]);
                    }
                }
            }
        }
    },

    arraysAreIdentical: function(arr1, arr2) {
        if (arr1.length !== arr2.length) return false;
        for (var i = 0, len = arr1.length; i < len; i++){
            if (arr1[i] !== arr2[i]){
                return false;
            }
        }
        return true;
    }
}

