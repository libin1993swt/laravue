import AppForm from '../app-components/Form/AppForm';

Vue.component('movie-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                
            }
        }
    }

});