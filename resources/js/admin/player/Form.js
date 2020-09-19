import AppForm from '../app-components/Form/AppForm';

Vue.component('player-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                roll:  '' ,
                country_id:  '' ,
                odi_matches:  '' ,
                test_matches:  '' ,
                t20_matches:  '' ,
                odi_runs:  '' ,
                test_runs:  '' ,
                t20_runs:  '' ,
                odi_50s:  '' ,
                test_50s:  '' ,
                t20_50s:  '' ,
                odi_100s:  '' ,
                test_100s:  '' ,
                t20_100s:  '' ,
                odi_wickets:  '' ,
                test_wickets:  '' ,
                t20_wickets:  '' ,
                odi_highest_score:  '' ,
                test_highest_score:  '' ,
                t20_highest_score:  '' ,
                odi_batting_average:  '' ,
                test_batting_average:  '' ,
                t20_batting_average:  '' ,
                
            }
        }
    }

});