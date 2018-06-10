app.factory('emailService', function () {
    
    return {

       verificaEmail: function(input) {

             return 'email ' + input;
 
       },

       verificaAccount: function(input) {

        return 'account ' + input;

       }

    };

});