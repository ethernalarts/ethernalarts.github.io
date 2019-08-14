
function ajaxCall() {
    this.send = function(data, url, method, success, type) {
        type = type||'json';
        var successRes = function(data) {
            success(data);
        };

        var errorRes = function(e) {
            console.log(e);
        };
        jQuery.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000
        });

    }

}

function locationInfo() {
    var rootUrl = "//geodata.solutions/api/api.php";
    //set default values
    var username = 'demo';
    var ordering = 'name';
    //now check for set values
    var addParams = '';
    if(jQuery("#gds_appid").length > 0) {
        addParams += '&appid=' + jQuery("#gds_appid").val();
    }
    if(jQuery("#gds_hash").length > 0) {
        addParams += '&hash=' + jQuery("#gds_hash").val();
    }

    var call = new ajaxCall();

    this.confCity = function(id) {
        var url = rootUrl+'?type=confCity&countryId='+ jQuery('#countryId_dest').val() + '&stateId=' + jQuery('#stateId_dest option:selected').attr('stateid') + '&cityId_dest=' + id;
        var method = "post";
        var data = {};
        call.send(data, url, method, function(data) {
            if(data){
                //    alert(data);
            }
            else{
                //   alert('No data');
            }
        });
    };

    this.getCities = function(id) {
        jQuery(".cities_dest option:gt(0)").remove();
        //get additional fields
        var stateClasses = jQuery('#cityId_dest').attr('class');
        //console.log(stateClasses);
        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getCities&countryId='+ jQuery('#countryId_dest').val() +'&stateId=' + id + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.cities_dest').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.cities_dest').find("option:eq(0)").html("Select City");
            if(data.tp == 1){
                if(data.hits > 1000)
                {
                    //alert('Free usage far exceeded. Please subscribe at geodata.solutions.');
                    console.log('Daily geodata.solutions request limit exceeded:' + data.hits + ' of 1000');
                }
                else
                {
                    console.log('Daily geodata.solutions request count:' + data.hits + ' of 1000')
                }

                var listlen = Object.keys(data['result']).length;
                //console.log('number is cities is ' + listlen);
                if(listlen > 0)
                {
                    jQuery.each(data['result'], function(key, val) {

                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        jQuery('.cities_dest').append(option);
                    });
                }
                else
                {
                    var usestate = jQuery('#stateId_dest option:selected').val();
                    var option = jQuery('<option />');
                    option.attr('value', usestate).text(usestate);
                    option.attr('selected', 'selected');
                    jQuery('.cities_dest').append(option);
                }

                jQuery(".cities_dest").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

    this.getStates = function(id) {
        jQuery(".states_dest option:gt(0)").remove();
        jQuery(".cities_dest option:gt(0)").remove();
        //get additional fields
        var stateClasses = jQuery('#stateId_dest').attr('class');
        console.log(stateClasses);
        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getStates&countryId=' + id + addParams  + addClasses;
        var method = "post";
        var data = {};
        jQuery('.states_dest').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.states_dest').find("option:eq(0)").html("Select State");
            if(data.tp == 1){
                if(data.hits > 1000)
                {
                    //alert('Free usage far exceeded. Please subscribe at geodata.solutions.');
                    console.log('Daily geodata.solutions request limit exceeded: ' + data.hits + ' of 1000.');
                }
                else
                {
                    console.log('Daily geodata.solutions request count:' + data.hits + ' of 1000')
                }
                jQuery.each(data['result'], function(key, val) {
                    var option = jQuery('<option />');
                    option.attr('value', val).text(val);
                    option.attr('stateid', key);
                    jQuery('.states_dest').append(option);
                });
                jQuery(".states_dest").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };
}

jQuery(function() {
    var loc = new locationInfo();
    var coid = jQuery("#countryId_dest").val();
    loc.getStates(coid);
    jQuery(".states_dest").on("change", function(ev) {
        var stateId = jQuery("option:selected", this).attr('stateid');
        if(stateId != ''){
            loc.getCities(stateId);
        }
        else{
            jQuery(".cities option:gt(0)").remove();
        }
    });
    jQuery(".cities_dest").on("change", function(ev) {
        var cityId = jQuery("option:selected", this).val();
        if(cityId != ''){
            loc.confCity(cityId);
        }
    });
});
