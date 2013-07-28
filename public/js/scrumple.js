jQuery(function($) {
  $.getJSON("/api/tag/50", function(tags) {
    $("#taglist").append("<ul id='tags'>");
    tags.forEach(function(element,idx, array) {
      $("#taglist").append("<li><a href='/tag/" + element.name + "'>" + element.name + " (" + element.count + ")</a><br />");
    });
    $("#taglist").append("</ul>");
  });
});
