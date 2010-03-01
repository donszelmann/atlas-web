<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" indent="yes"/>
    <!-- work-around for bug in php xslt; doesn't recognise xpath 'last()' function -->
    <xsl:variable name="lastChannelPosition" select="count(//channel)"/>
    <xsl:template match="text()|@*"/>
    <xsl:template match="channels">
        <xsl:for-each select="channel">
            <xsl:if test="position()=($lastChannelPosition)">
                <tr>
                    <td>
                        <xsl:value-of select="value[@name='RunNumber']"/>
                    </td>
                    <td>
                        <xsl:value-of select="value[@name='RunType']"/>
                    </td>
                    <td>
                        <xsl:value-of select="value[@name='MaskInterpreted']"/>
                    </td>
                    <td>
                        <xsl:value-of select="value[@name='RecordingEnabled']"/>
                    </td>
                    <td>
                        <xsl:value-of select="value[@name='Start']"/>
                    </td>
                    <td>
                        <xsl:variable name="endValue">
                            <xsl:choose>
                                <xsl:when test="value[@name='End'] !=''">
                                    <xsl:value-of select="value[@name='End']"/>
                                </xsl:when>
                                <xsl:otherwise>Not ended</xsl:otherwise>
                            </xsl:choose>
                        </xsl:variable>
                        <xsl:value-of select="$endValue"/>
                    </td>
                    <td>
                        <xsl:value-of select="value[@name='TotalTime']"/>
                    </td>
                </tr>
            </xsl:if>
        </xsl:for-each>


    </xsl:template>
</xsl:stylesheet>
