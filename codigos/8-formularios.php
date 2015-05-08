<?php 

print "<form action='processorder.php' method=post>";
print "<table border=0>";
print "<tr bgcolor=#cccccc>";
print "  <td width=150>Item</td>";
print "  <td width=15>Quantity</td>";
print "</tr>";
print "<tr>";
print "  <td>Tires</td>";
print "  <td align='center'><input type='text' name='tireqty' size='3'  ";
print "     maxlength='3'></td>";
print "</tr>";
print "<tr>";
print "  <td>Oil</td>";
print "  <td align='center'><input type='text' name='oilqty' size='3' maxlength='3'></td>";
print "</tr>";
print "<tr>";
print "  <td>Spark Plugs</td>";
print "  <td align='center'><input type='text' name='sparkqty' size='3' ";
print "     maxlength='5' maxsize='3'></td>";
print "</tr>";
print "<tr>";
print "  <td colspan='2' align='center'><input type='submit' value='Submit Order'></td>";
print "</tr>";
print "</table>";
print "</form>";
?>