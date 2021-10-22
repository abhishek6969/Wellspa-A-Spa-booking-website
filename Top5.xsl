<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<head>
<style>
table {
  width: 100%;
}


</style>
</head>
<body>
    
             
    <h1 style="text-align: center; color: aliceblue; font-size: 3em; text-shadow: 2px 2px 30px red;">Top 5 Series</h1>

  <table width = "100%">
    <tr bgcolor="">
      <th>Name</th>
      <th>Category</th>
      <th>Rating</th>
    </tr>
    <xsl:for-each select="series/diff_series">
    <tr>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="category"/></td>
      <td><xsl:value-of select="rating"/></td>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>

