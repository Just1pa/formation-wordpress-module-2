
jQuery(document).ready(function($) {

  $("#calculate").click(function () {
    var input = $("#input").val();
    var lines = input.split("\n");

    $("#result tbody").empty();

    for (var i = 0; i < lines.length; i++) {
      var line = lines[i];
      var parts = line.split("|");
      var entity1 = parts[0].trim();
      var entity2 = parts[1].trim();
      var distance = levenshteinDistance(entity1, entity2);

      $("#result tbody").append(
        "<tr><td>" + entity1 + "</td><td>" + entity2 + "</td><td>" + distance + "</td></tr>"
      );
    }
  });

  function levenshteinDistance(a, b) {
    if (a.length === 0) return b.length;
    if (b.length === 0) return a.length;

    var matrix = [];

    for (var i = 0; i <= b.length; i++) {
      matrix[i] = [i];
    }

    for (var j = 0; j <= a.length; j++) {
      matrix[0][j] = j;
    }

    for (var i = 1; i <= b.length; i++) {
      for (var j = 1; j <= a.length; j++) {
        if (b.charAt(i - 1) == a.charAt(j - 1)) {
          matrix[i][j] = matrix[i - 1][j - 1];
        } else {
          matrix[i][j] = Math.min(matrix[i - 1][j - 1] + 1, Math.min(matrix[i][j - 1] + 1, matrix[i - 1][j] + 1));
        }
      }
    }

    return matrix[b.length][a.length];
  }
});

