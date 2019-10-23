<!DOCTYPE html>
<html>
<head>
<title>Sort a HTML Table Numerically</title>
<style>
table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>
</head>
<body>

<p>Click the button to sort the table numerically:</p>
<p><button onclick="sortTable()">Sort</button></p>

<table id="myTable">
  <tr>
    <th>ID</th>
    <th>Name</th>
  </tr>
  <tr>
    <td>5</td>
    <td>Berglunds snabbkop</td>
  </tr>
  <tr>
    <td>3</td>
    <td>North/South</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Alfreds Futterkiste</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Koniglich Essen</td>
  </tr>
  <tr>
    <td>1</td>
    <td>Magazzini Alimentari Riuniti</td>
  </tr>
  <tr>
    <td>7</td>
    <td>Paris specialites</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Island Trading</td>
  </tr>

</table>

<script>
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];
      //check if the two rows should switch place:
      if (Number(x.innerHTML) < Number(y.innerHTML)) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>

</body>
</html>
