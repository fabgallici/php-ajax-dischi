function printCd(cd) {
  var target = $('.container');
  var template = $('#cd-template').html();
  var compiled = Handlebars.compile(template);
  var compiledCd = compiled(cd);
  target.append(compiledCd);

}

function printCds(cds) {
  var target = $('.container');
  var template = $('#cd-template').html();
  var compiled = Handlebars.compile(template);
  for (let i = 0; i < cds.length; i++) {
    var compiledCd = compiled(cds[i]);
    target.append(compiledCd);
    console.log(cds[i]);
  }
}

function getData() {
  $.ajax({
    url: "php/getAuthor.php",
    method: "GET",
    success: function (data) {
      console.log("data", data);
      // printCd(data);
      printCds(data);
    },
    error: function (error) {
      console.log("error", error);
    }
  });
}
function init() {
  getData();
}
$(document).ready(init);