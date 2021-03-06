<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0"
   xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
   xmlns:date="http://exslt.org/dates-and-times"
   xmlns:str="http://exslt.org/strings"
   extension-element-prefixes="date str">
<xsl:output method="html" omit-xml-declaration="yes" indent="yes" media-type="text/html"/>

<xsl:template match="/collection">
  <xsl:if test="*">
  <div style="margin:0;padding:0;">

  <ul style="margin:0 0 0 0;padding:0;list-style:none;background-color:transparent;">
    <xsl:for-each select="./agenda_item">
      <xsl:sort select="./start_date" data-type="text" order="ascending"/>
      <xsl:sort select="./start_time" data-type="text" order="ascending"/>
      <xsl:apply-templates select="."/>
    </xsl:for-each>
  </ul>

  </div>
  </xsl:if>
</xsl:template>

<xsl:template match="agenda_item">
    <li style="padding:2px 0px 0px 10px; font-size:13px;color:#4D4D4D;font-weight:bold;">
      <span style="margin-left:0;"><xsl:apply-templates select="start_date"/><xsl:text> </xsl:text>
      <xsl:value-of select="./start_time"/></span>
      <xsl:text> </xsl:text>-<xsl:text> </xsl:text>
      <span style="margin-left:0;"><xsl:apply-templates select="end_date"/><xsl:text> </xsl:text>
      <xsl:value-of select="./end_time"/></span>
      <br/>
      <p style="padding:2px 0px 0px 10px; font-size:13px;color:#4D4D4D;font-weight:normal;"><xsl:value-of select="./title"/></p>
    </li>
</xsl:template>

<date:months>
   <date:month length="31" abbr="Jan">January</date:month>
   <date:month length="28" abbr="Feb">February</date:month>
   <date:month length="31" abbr="Mar">March</date:month>
   <date:month length="30" abbr="Apr">April</date:month>
   <date:month length="31" abbr="May">May</date:month>
   <date:month length="30" abbr="Jun">June</date:month>
   <date:month length="31" abbr="Jul">July</date:month>
   <date:month length="31" abbr="Aug">August</date:month>
   <date:month length="30" abbr="Sep">September</date:month>
   <date:month length="31" abbr="Oct">October</date:month>
   <date:month length="30" abbr="Nov">November</date:month>
   <date:month length="31" abbr="Dec">December</date:month>
</date:months>

<xsl:template match="start_date">
  <xsl:value-of select="document('')/*/date:months/date:month[number(substring(current(), 6, 2))]/@abbr"/>
  <xsl:text> </xsl:text>
  <xsl:value-of select="substring(current(), 9, 2)"/>
</xsl:template>

<xsl:template match="end_date">
  <xsl:value-of select="document('')/*/date:months/date:month[number(substring(current(), 6, 2))]/@abbr"/>
  <xsl:text> </xsl:text>
  <xsl:value-of select="substring(current(), 9, 2)"/>
</xsl:template>

</xsl:stylesheet>
