AUTH_TOKEN = "242014209179761|E5cEM0s2iqY-WD95HfOvXJ4GymE";

window.fbAsyncInit = function() {
  FB.init({
    appId      : '{242014209179761}',
    xfbml      : true,
    version    : 'v2.0'
  });
};

(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "https://connect.facebook.net/en_US/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));


$(document).ready(function() {
  // Get all the fb events for acmw
  $.get( "https://graph.facebook.com/uwacmw/events?access_token=" + AUTH_TOKEN, function(response) {
    // Sort chronologically
    response.data.reverse();
    var today = new Date();

    for (var i = 0; i < response.data.length; i++) {
      var event_date = (new Date(response.data[i].start_time));
      // Only display future events
      if (event_date > today) {
        // Create "event" DOM object
        var cover = $("<img>")
          .attr("src", "https://graph.facebook.com/" + response.data[i].id + "/picture?access_token=" + AUTH_TOKEN)
          .css({"float": "left", "margin-right": "1em", "margin-bottom": "1em"});
        var event_title = $("<h4>")
          .text(response.data[i].name);
        var event_time = $("<p>")
          .css("clear", "left")
          .text(event_date.toDateString() + " at " + response.data[i].location);
        var link = $("<a>")
          .attr("href", "https://www.facebook.com/events/" + response.data[i].id);
        
        // Super glue everything together, and append to page
        link.append(cover).append(event_title).append(event_time)
        var event_box = $("<div>").append(link);
        $("#upcommingEvents").append(event_box);
      }
    }
  });
});