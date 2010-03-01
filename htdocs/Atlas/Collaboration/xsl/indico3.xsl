<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0"
   xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
   xmlns:str="http://exslt.org/strings"
   extension-element-prefixes="str">
<xsl:output method="html" omit-xml-declaration="yes" indent="yes" media-type="text/html"/>

<xsl:param name="curr_date" />

<xsl:template match="/">
  <xsl:if test="*">
    <div style="margin:0;padding:0;">
    
    <div style="margin:0 0 0.3em 0;padding:0;font-weight:bold;">
      <script language="JavaScript">
        var current_date = '<xsl:value-of select="$curr_date"/>';
        if (current_date != '')
        {
          var weekday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
          var month = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
          var today = new Date();
          today.setFullYear(<xsl:value-of select="substring($curr_date, 1, 4)"/>);
          today.setMonth(<xsl:value-of select="substring($curr_date, 6, 2) - 1"/>);
          today.setDate(<xsl:value-of select="substring($curr_date, 9, 2)"/>);
          document.write(weekday[today.getDay()] + ', ' + month[today.getMonth()] + ' ' + today.getDate() + ', ' + today.getFullYear());
        }
      </script>
    </div>

    <div style="font-size:50%"><br/></div>

    <ul style="margin:0 0 0.3em 0;padding:0;list-style:none;background-color:transparent;">
      <li style="font-weight:bold;">Operation</li>
      <xsl:for-each select="document('/tmp/xml1')/collection/agenda_item">
        <xsl:sort select="./start_time" data-type="text" order="ascending"/>
        <xsl:sort select="str:tokenize(category, '/')[2]" data-type="text" order="ascending" case-order="lower-first"/>
        <xsl:apply-templates select="."/>
      </xsl:for-each>
    </ul>
    
    <div style="font-size:50%"><br/></div>

    <ul style="margin:0 0 0.3em 0;padding:0;list-style:none;background-color:transparent;">
      <li style="font-weight:bold;">Run Coordination</li>
      <xsl:for-each select="document('/tmp/xml2')/collection/agenda_item">
        <xsl:sort select="./start_time" data-type="text" order="ascending"/>
        <xsl:sort select="str:tokenize(category, '/')[2]" data-type="text" order="ascending" case-order="lower-first"/>
        <xsl:apply-templates select="."/>
      </xsl:for-each>
    </ul>

    <div style="font-size:50%"><br/></div>

    <ul style="margin:0 0 0.3em 0;padding:0;list-style:none;background-color:transparent;">
      <li style="font-weight:bold;">Data Quality</li>
      <xsl:for-each select="document('/tmp/xml3')/collection/agenda_item">
        <xsl:sort select="./start_time" data-type="text" order="ascending"/>
        <xsl:sort select="str:tokenize(category, '/')[2]" data-type="text" order="ascending" case-order="lower-first"/>
        <xsl:apply-templates select="."/>
      </xsl:for-each>
    </ul>

    </div>
  </xsl:if>
</xsl:template>


<xsl:template match="agenda_item">
    <li style="margin:0;padding:0;line-height:1.2em;">
      <a href="http://indico.cern.ch/event/{./id}" style="text-decoration:none;color:#000000;outline:none;"
         onmouseover="this.style.backgroundColor='#666666'; this.style.color='#ffffff';"
         onmouseout="this.style.backgroundColor='transparent'; this.style.color='#000000';">
        <span style="margin-left:0;font-weight:normal;"><xsl:value-of select="start_time"/></span>
	<span style="margin-left:0.5em;font-weight:bold;color:#333333;">
          <xsl:value-of select="str:tokenize(category, '/')[2]" disable-output-escaping="yes"/>
        </span>
	<span style="margin-left:0.5em;font-weight:normal;">
          <xsl:value-of select="str:tokenize(category, '/')[3]" disable-output-escaping="yes"/>
        </span>
        <span style="margin-left:0.5em;font-weight:bold;color:blue;"><xsl:value-of select="title"/></span>
        <span style="margin:0 0.5em 0 0.5em;font-weight:normal;"><xsl:value-of select="room"/></span>
      </a>
    </li>
</xsl:template>

</xsl:stylesheet>


<!-- 'for-each-group' is defined only in XSLT version 2.0 -->
<!--<xsl:for-each-group select="./agenda_item" group-by="str:tokenize(./category, '/')[2]">
  <xsl:value-of select="current-grouping-key()"/>
</xsl:for-each-group>-->

<!--

wget -q -O /tmp/xml1 'http://indico.cern.ch/tools/export.py?fid=1998&date=today&days=1&of=xml';
wget -q -O /tmp/xml2 'http://indico.cern.ch/tools/export.py?fid=1426&date=today&days=1&of=xml';
wget -q -O /tmp/xml3 'http://indico.cern.ch/tools/export.py?fid=1637&date=today&days=1&of=xml'

-->
