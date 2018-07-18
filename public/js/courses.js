// Prototypes
Array.prototype.unique = function(mutate) {
    var unique = this.reduce(function(accum, current) {
        if (accum.indexOf(current) < 0) {
            accum.push(current);
        }
        return accum;
    }, []);
    if (mutate) {
        this.length = 0;
        for (let i = 0; i < unique.length; ++i) {
            this.push(unique[i]);
        }
        return this;
    }
    return unique;
}
Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};

$(document).ready(function() {
    var level = [],
        topic = [],
        software = [];

    showItems();

    $('.list-levels').change(function() {
        if(this.checked) {
            level.push($(this).data('value'));
            showItems(true);
        } else {
            level.remove($(this).data('value'));
            showItems(true);
        }
    }); 

    $('.list-topics').change(function() {
        if(this.checked) {
            topic.push($(this).data('value'));
            showItems(true);
        } else {
            topic.remove($(this).data('value'));
            showItems(true);
        }
    });

    $('.list-softwares').change(function() {
        if(this.checked) {
            software.push($(this).data('value'));
            showItems(true);
        } else {
            software.remove($(this).data('value'));
            showItems(true);
        }
    });

    // Functions
    function showItems(onFilter = false) {
        // console.log(level);
        // console.log(topic);
        // console.log(software);
        
        var baseUrl = `http://localhost:8000/`,
            webUrl = `${baseUrl}free-courses/`,
            apiUrl = `${baseUrl}api/free-courses/`,
            queryString, requestUrl;

        if (onFilter) {
            if (level.length > 0 && topic.length > 0 && software.length > 0) {
                queryString = '?level='+level.toString()+'&topic='+topic.toString()+'&software='+software.toString();
            } else {
                if (level.length > 0  && topic.length > 0  && software.length == 0) {
                    queryString = '?level='+level.toString()+'&topic='+topic.toString();
                } else if (level.length > 0 && topic.length == 0 && software.length > 0 ) {
                    queryString = '?level='+level.toString()+'&software='+software.toString();
                } else if (level.length == 0 && topic.length > 0 && software.length > 0) {
                    queryString = '?topic='+topic.toString()+'&software='+software.toString();
                } else {
                    if (level.length > 0 && topic.length == 0 && software.length == 0) {
                        queryString = '?level='+level.toString();
                    } else if (level.length == 0 && topic.length > 0 && software.length == 0) {
                        queryString = '?topic='+topic.toString();
                    } else if (level.length == 0 && topic.length == 0 && software.length > 0) {
                        queryString = '?software='+software.toString();
                    } else {
                        queryString = '?all';
                    }
                }
            }

            requestUrl = apiUrl+queryString; 
            // console.log(requestUrl);

            $.ajax({
                type: "GET",
                url: requestUrl,
                dataType: "html",
                success: function(response){
                    console.log(response);
                    $('#courses').empty();
                    $('#courses').append(response);
                    window.history.pushState(null, null, webUrl+queryString);
                    return false;
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log('error');
                }
            });
        } else {
            var fullUrl = window.location.href;
            var extractUrl = fullUrl.split('?');
            if (extractUrl[1] !== undefined) {
                queryString = '?'+extractUrl[1];
            } else {
                queryString = '?all';
            }
            requestUrl = apiUrl+queryString;

            $.ajax({
                type: "GET",
                url: requestUrl,
                dataType: "html",
                success: function(response){
                    $('#courses').empty();
                    $('#courses').append(response);
                    window.history.pushState(null, null, webUrl+queryString);
                    return false;
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log('error');
                }
            });
        }
    }
}); 
