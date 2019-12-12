function printCDs(cds) {
  var target = $('.container');
  target.empty();
  var template = $('#cd-template').html();
  var compiled = Handlebars.compile(template);
  for (i= 0; i < cds.length; i++) {
    var cd = compiled(cds[i]);
    target.append(cd);
  }
}

function getData() {
  $.ajax({
    url: 'getAllCds.php',
    method: 'GET',
    success: function (data) {
      console.log(data);
      printCDs(data);
    },
    error: function (error) {

    }
  });
}

function getCdByAuthor(author) {
  $.ajax({
    url: 'getCdByArtist.php',
    data: {
      author: author
    },
    method: 'GET',
    success: function (data) {
      console.log(data);
      printCDs(data);
    },
    error: function (error) {

    }
  });
}
function cercaBtnClick() {
  var input = $('.my_input').val();
  getCdByAuthor(input);
  console.log(input);
}

function init() {
  getData();
  $('.my_button').on('click', cercaBtnClick);
}

$(document).ready(init);