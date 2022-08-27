<?php
/*=======================================================================
// File:     EN.INC.PHP
// Description: English language file for error messages
// Created:     2006-01-25
// Ver:        $Id: en.inc.php 1886 2009-10-01 23:30:16Z ljp $
//
// Copyright (c) Asial Corporation. All rights reserved.
//========================================================================
*/

// Note: Format of each error message is array(<error message>,<number of arguments>)
$_jpg_messages = array(

/*
** Headers already sent error. This is formatted as HTML different since this will be sent back directly as text
*/
10  => array('<table border="1"><tr><td style="color:darkred; font-size:1.2em;"><b>JpGraph Error:</b>
HTTP headers have already been sent.<br>Caused by output from file <b>%s</b> at line <b>%d</b>.</td></tr><tr><td><b>Explanation:</b><br>HTTP headers have already been sent back to the browser indicating the data as text before the library got a chance to send it\'s image HTTP header to this browser. This makes it impossible for the library to send back image data to the browser (since that would be interpretated as text by the browser and show up as junk text).<p>Most likely you have some text in your script before the call to <i>Graph::Stroke()</i>. If this texts gets sent back to the browser the browser will assume that all data is plain text. Look for any text, even spaces and newlines, that might have been sent back to the browser. <p>For example it is a common mistake to leave a blank line before the opening "<b>&lt;?php</b>".</td></tr></table>',2),

/*
** Setup errors
*/
11 => array('No path specified for CACHE_DIR. Please specify CACHE_DIR manually in jpg-config.inc',0),
12 => array('No path specified for TTF_DIR and path can not be determined automatically. Please specify TTF_DIR manually (in jpg-config.inc).',0),
13 => array('The installed PHP version (%s) is not compatible with this release of the library. The library requires at least PHP version %s',2),


/*
**  jpgraph_bar
*/

2001 => array('Number of colors is not the same as the number of patterns in BarPlot::SetPattern()',0),
2002 => array('Unknown pattern specified in call to BarPlot::SetPattern()',0),
2003 => array('Number of X and Y points are not equal. Number of X-points: %d Number of Y-points: %d',2),
2004 => array('All values for a barplot must be numeric. You have specified value nr [%d] == %s',2),
2005 => array('You have specified an empty array for shadow colors in the bar plot.',0),
2006 => array('Unknown position for values on bars : %s',1),
2007 => array('Cannot create GroupBarPlot from empty plot array.',0),
2008 => array('Group bar plot element nbr %d is undefined or empty.',0),
2009 => array('One of the objects submitted to GroupBar is not a BarPlot. Make sure that you create the GroupBar plot from an array of BarPlot or AccBarPlot objects. (Class = %s)',1),
2010 => array('Cannot create AccBarPlot from empty plot array.',0),
2011 => array('Acc bar plot element nbr %d is undefined or empty.',1),
2012 => array('One of the objects submitted to AccBar is not a BarPlot. Make sure that you create the AccBar plot from an array of BarPlot objects. (Class=%s)',1),
2013 => array('You have specified an empty array for shadow colors in the bar plot.',0),
2014 => array('Number of datapoints for each data set in accbarplot must be the same',0),
2015 => array('Individual bar plots in an AccBarPlot or GroupBarPlot can not have specified X-coordinates',0),


/*
**  jpgraph_date
*/

3001 => array('It is only possible to use either SetDateAlign() or SetTimeAlign() but not both',0),

/*
**  jpgraph_error
*/

4002 => array('Error in input data to LineErrorPlot. Number of data points must be a multiple of 3',0),

/*
**  jpgraph_flags
*/

5001 => array('Unknown flag size (%d).',1),
5002 => array('Flag index %s does not exist.',1),
5003 => array('Invalid ordinal number (%d) specified for flag index.',1),
5004 => array('The (partial) country name %s does not have a corresponding flag image. The flag may still exist but under another name, e.g. instead of "usa" try "united states".',1),


/*
**  jpgraph_gantt
*/

6001 => array('Internal error. Height for ActivityTitles is < 0',0),
6002 => array('You can\'t specify negative sizes for Gantt graph dimensions. Use 0 to indicate that you want the library to automatically determine a dimension.',0),
6003 => array('Invalid format for Constrain parameter at index=%d in CreateSimple(). Parameter must start with index 0 and contain arrays of (Row,Constrain-To,Constrain-Type)',1),
6004 => array('Invalid format for Progress parameter at index=%d in CreateSimple(). Parameter must start with index 0 and contain arrays of (Row,Progress)',1),
6005 => array('SetScale() is not meaningful with Gantt charts.',0),
6006 => array('Cannot autoscale Gantt chart. No dated activities exist. [GetBarMinMax() start >= n]',0),
6007 => array('Sanity check for automatic Gantt chart size failed. Either the width (=%d) or height (=%d) is larger than MAX_GANTTIMG_SIZE. This could potentially be caused by a wrong date in one of the activities.',2),
6008 => array('You have specified a constrain from row=%d to row=%d which does not have any activity',2),
6009 => array('Unknown constrain type specified from row=%d to row=%d',2),
6010 => array('Illegal icon index for Gantt builtin icon [%d]',1),
6011 => array('Argument to IconImage must be string or integer',0),
6012 => array('Unknown type in Gantt object title specification',0),
6015 => array('Illegal vertical position %d',1),
6016 => array('Date string (%s) specified for Gantt activity can not be interpretated. Please make sure it is a valid time string, e.g. 2005-04-23 13:30',1),
6017 => array('Unknown date format in GanttScale (%s).',1),
6018 => array('Interval for minutes must divide the hour evenly, e.g. 1,5,10,12,15,20,30 etc You have specified an interval of %d minutes.',1),
6019 => array('The available width (%d) for minutes are to small for this scale to be displayed. Please use auto-sizing or increase the width of the graph.',1),
6020 => array('Interval for hours must divide the day evenly, e.g. 0:30, 1:00, 1:30, 4:00 etc. You have specified an interval of %d',1),
6021 => array('Unknown formatting style for week.',0),
6022 => array('Gantt scale has not been specified.',0),
6023 => array('If you display both hour and minutes the hour interval must be 1 (Otherwise it doesn\'t make sense to display minutes).',0),
6024 => array('CSIM Target must be specified as a string. Start of target is: %d',1),
6025 => array('CSIM Alt text must be specified as a string. Start of alt text is: %d',1),
6027 => array('Progress value must in range [0, 1]',0),
6028 => array('Specified height (%d) for gantt bar is out of range.',1),
6029 => array('Offset for vertical line must be in range [0,1]',0),
6030 => array('Unknown arrow direction for link.',0),
6031 => array('Unknown arrow type for link.',0),
6032 => array('Internal error: Unknown path type (=%d) specified for link.',1),
6033 => array('Array of fonts must contain arrays with 3 elements, i.e. (Family, Style, Size)',0),

/*
**  jpgraph_gradient
*/

7001 => array('Unknown gradient style (=%d).',1),

/*
**  jpgraph_iconplot
*/

8001 => array('Mix value for icon must be between 0 and 100.',0),
8002 => array('Anchor position for icons must be one of "top", "bottom", "left", "right" or "center"',0),
8003 => array('It is not possible to specify both an image file and a country flag for the same icon.',0),
8004 => array('In order to use Country flags as icons you must include the "jpgraph_flags.php" file.',0),

/*
**  jpgraph_imgtrans
*/

9001 => array('Value for image transformation out of bounds. Vanishing point on horizon must be specified as a value between 0 and 1.',0),

/*
**  jpgraph_lineplot
*/

10001 => array('LinePlot::SetFilled() is deprecated. Use SetFillColor()',0),
10002 => array('Plot too complicated for fast line Stroke. Use standard Stroke()',0),
10003 => array('Each plot in an accumulated lineplot must have the same number of data points.',0),

/*
**  jpgraph_log
*/

11001 => array('Your data contains non-numeric values.',0),
11002 => array('Negative data values can not be used in a log scale.',0),
11003 => array('Your data contains non-numeric values.',0),
11004 => array('Scale error for logarithmic scale. You have a problem with your data values. The max value must be greater than 0. It is mathematically impossible to have 0 in a logarithmic scale.',0),
11005 => array('Specifying tick interval for a logarithmic scale is undefined. Remove any calls to SetTextLabelStart() or SetTextTickInterval() on the logarithmic scale.',0),

/*
**  jpgraph_mgraph
*/

12001 => array("You are using GD 2.x and are trying to use a background images on a non truecolor image. To use background images with GD 2.x it is necessary to enable truecolor by setting the USE_TRUECOLOR constant to TRUE. Due to a bug in GD 2.0.1 using any truetype fonts with truecolor images will result in very poor quality fonts.",0),
12002 => array('Incorrect file name for MGraph::SetBackgroundImage() : %s Must have a valid image extension (jpg,gif,png) when using auto detection of image type',1),
12003 => array('Unknown file extension (%s) in MGraph::SetBackgroundImage() for filename: %s',2),
12004 => array('The image format of your background image (%s) is not supported in your system configuration. ',1),
12005 => array('Can\'t read background image: %s',1),
12006 => array('Illegal sizes specified for width or height when creating an image, (width=%d, height=%d)',2),
12007 => array('Argument to MGraph::Add() is not a valid GD image handle.',0),
12008 => array('Your PHP (and GD-lib) installation does not appear to support any known graphic formats.',0),
12009 => array('Your PHP installation does not support the chosen graphic format: %s',1),
12010 => array('Can\'t create or stream image to file %s Check that PHP has enough permission to write a file to the current directory.',1),
12011 => array('Can\'t create truecolor image. Check that you really have GD2 library installed.',0),
12012 => array('Can\'t create image. Check that you really have GD2 library installed.',0),

/*
**  jpgraph_pie3d
*/

14001 => array('Pie3D::ShowBorder() . Deprecated function. Use Pie3D::SetEdge() to control the edges around slices.',0),
14002 => array('PiePlot3D::SetAngle() 3D Pie projection angle must be between 5 and 85 degrees.',0),
14003 => array('Internal assertion failed. Pie3D::Pie3DSlice',0),
14004 => array('Slice start angle must be between 0 and 360 degrees.',0),
14005 => array('Pie3D Internal error: Trying to wrap twice when looking for start index',0,),
14006 => array('Pie3D Internal Error: Z-Sorting algorithm for 3D Pies is not working properly (2). Trying to wrap twice while stroking.',0),
14007 => array('Width for 3D Pie is 0. Specify a size > 0',0),

/*
**  jpgraph_pie
*/

15001 => array('PiePLot::SetTheme() Unknown theme: %s',1),
15002 => array('Argument to PiePlot::ExplodeSlice() must be an integer',0),
15003 => array('Argument to PiePlot::Explode() must be an array with integer distances.',0),
15004 => array('Slice start angle must be between 0 and 360 degrees.',0),
15005 => array('PiePlot::SetFont() is deprecated. Use PiePlot->value->SetFont() instead.',0),
15006 => array('PiePlot::SetSize() Radius for pie must either be specified as a fraction [0, 0.5] of the size of the image or as an absolute size in pixels  in the range [10, 1000]',0),
15007 => array('PiePlot::SetFontColor() is deprecated. Use PiePlot->value->SetColor() instead.',0),
15008 => array('PiePlot::SetLabelType() Type for pie plots must be 0 or 1 (not %d).',1),
15009 => array('Illegal pie plot. Sum of all data is zero for Pie Plot',0),
15010 => array('Sum of all data is 0 for Pie.',0),
15011 => array('In order to use image transformation you must include the file jpgraph_imgtrans.php in your script.',0),
15012 => array('PiePlot::SetTheme() is no longer supported. Use PieGraph::SetTheme()',0),

/*
**  jpgraph_plotband
*/

16001 => array('Density for pattern must be between 1 and 100. (You tried %f)',1),
16002 => array('No positions specified for pattern.',0),
16003 => array('Unknown pattern specification (%d)',0),
16004 => array('Min value for plotband is larger than specified max value. Please correct.',0),


/*
**  jpgraph_polar
*/

17001 => array('Polar plots must have an even number of data point. Each data point is a tuple (angle,radius).',0),
17002 => array('Unknown alignment specified for X-axis title. (%s)',1),
//17003 => array('Set90AndMargin() is not supported for polar graphs.',0),
17004 => array('Unknown scale type for polar graph. Must be "lin" or "log"',0),

/*
**  jpgraph_radar
*/

18001 => array('Client side image maps not supported for RadarPlots.',0),
18002 => array('RadarGraph::SupressTickMarks() is deprecated. Use HideTickMarks() instead.',0),
18003 => array('Illegal scale for radarplot (%s). Must be \'lin\' or \'log\'',1),
18004 => array('Radar Plot size must be between 0.1 and 1. (Your value=%f)',1),
18005 => array('RadarPlot Unsupported Tick density: %d',1),
18006 => array('Minimum data %f (Radar plots should only be used when all data points > 0)',1),
18007 => array('Number of titles does not match number of points in plot.',0),
18008 => array('Each radar plot must have the same number of data points.',0),

/*
**  jpgraph_regstat
*/

19001 => array('Spline: Number of X and Y coordinates must be the same',0),
19002 => array('Invalid input data for spline. Two or more consecutive input X-values are equal. Each input X-value must differ since from a mathematical point of view it must be a one-to-one mapping, i.e. each X-value must correspond to exactly one Y-value.',0),
19003 => array('Bezier: Number of X and Y coordinates must be the same',0),

/*
**  jpgraph_scatter
*/

20001 => array('Fieldplots must have equal number of X and Y points.',0),
20002 => array('Fieldplots must have an angle specified for each X and Y points.',0),
20003 => array('Scatterplot must have equal number of X and Y points.',0),

/*
**  jpgraph_stock
*/

21001 => array('Data values for Stock charts must contain an even multiple of %d data points.',1),

/*
**  jpgraph_plotmark
*/

23001 => array('This marker "%s" does not exist in color with index: %d',2),
23002 => array('Mark color index too large for marker "%s"',1),
23003 => array('A filename must be specified if you set the mark type to MARK_IMG.',0),

/*
**  jpgraph_utils
*/

24001 => array('FuncGenerator : No function specified. ',0),
24002 => array('FuncGenerator : Syntax error in function specification ',0),
24003 => array('DateScaleUtils: Unknown tick type specified in call to GetTicks()',0),
24004 => array('ReadCSV2: Column count mismatch in %s line %d',2),
/*
**  jpgraph
*/

25001 => array('This PHP installation is not configured with the GD library. Please recompile PHP with GD support to run JpGraph. (Neither function imagetypes() nor imagecreatefromstring() does exist)',0),
25002 => array('Your PHP installation does not seem to have the required GD library. Please see the PHP documentation on how to install and enable the GD library.',0),
25003 => array('General PHP error : At %s:%d : %s',3),
25004 => array('General PHP error : %s ',1),
25005 => array('Can\'t access PHP_SELF, PHP global variable. You can\'t run PHP from command line if you want to use the \'auto\' naming of cache or image files.',0),
25006 => array('Usage of FF_CHINESE (FF_BIG5) font family requires that your PHP setup has the iconv() function. By default this is not compiled into PHP (needs the "--width-iconv" when configured).',0),
25007 => array('You are trying to use the locale (%s) which your PHP installation does not support. Hint: Use \'\' to indicate the default locale for this geographic region.',1),
25008 => array('Image width/height argument in Graph::Graph() must be numeric',0),
25009 => array('You must specify what scale to use with a call to Graph::SetScale()',0),

25010 => array('Graph::Add() You tried to add a null plot to the graph.',0),
25011 => array('Graph::AddY2() You tried to add a null plot to the graph.',0),
25012 => array('Graph::AddYN() You tried to add a null plot to the graph.',0),
25013 => array('You can only add standard plots to multiple Y-axis',0),
25014 => array('Graph::AddText() You tried to add a null text to the graph.',0),
25015 => array('Graph::AddLine() You tried to add a null line to the graph.',0),
25016 => array('Graph::AddBand() You tried to add a null band to the graph.',0),
25017 => array('You are using GD 2.x and are trying to use a background images on a non truecolor image. To use background images with GD 2.x it is necessary to enable truecolor by setting the USE_TRUECOLOR constant to TRUE. Due to a bug in GD 2.0.1 using any truetype fonts with truecolor images will result in very poor quality fonts.',0),
25018 => array('Incorrect file name for Graph::SetBackgroundImage() : "%s" Must have a valid image extension (jpg,gif,png) when using auto detection of image type',1),
25019 => array('Unknown file extension (%s) in Graph::SetBackgroundImage() for filename: "%s"',2),

25020 => array('Graph::SetScale(): Specified Max value must be larger than the specified Min value.',0),
25021 => array('Unknown scale specification for Y-scale. (%s)',1),
25022 => array('Unknown scale specification for X-scale. (%s)',1),
25023 => array('Unsupported Y2 axis type: "%s" Must be one of (lin,log,int)',1),
25024 => array('Unsupported Y axis type:  "%s" Must be one of (lin,log,int)',1),
25025 => array('Unsupported Tick density: %d',1),
25026 => array('Can\'t draw unspecified Y-scale. You have either: 1. Specified an Y axis for auto scaling but have not supplied any plots. 2. Specified a scale manually but have forgot to specify the tick steps',0),
25027 => array('Can\'t open cached CSIM "%s" for reading.',1),
25028 => array('Apache/PHP does not have permission to write to the CSIM cache directory (%s). Check permissions.',1),
25029 => array('Can\'t write CSIM "%s" for writing. Check free space and permissions.',1),

25030 => array('Missing script name in call to StrokeCSIM(). You must specify the name of the actual image script as the first parameter to StrokeCSIM().',0),
25031 => array('You must specify what scale to use with a call to Graph::SetScale().',0),
25032 => array('No plots for Y-axis nbr:%d',1),
25033 => array('',0),
25034 => array('Can\'t draw unspecified X-scale. No plots specified.',0),
25035 => array('You have enabled clipping. Clipping is only supported for graphs at 0 or 90 degrees rotation. Please adjust you current angle (=%d degrees) or disable clipping.',1),
25036 => array('Unknown AxisStyle() : %s',1),
25037 => array('The image format of your background image (%s) is not supported in your system configuration. ',1),
25038 => array('Background image seems to be of different type (has different file extension) than specified imagetype. Specified: %s File: %s',2),
25039 => array('Can\'t read background image: "%s"',1),

25040 => array('It is not possible to specify both a background image and a background country flag.',0),
25041 => array('In order to use Country flags as backgrounds you must include the "jpgraph_flags.php" file.',0),
25042 => array('Unknown background image layout',0),
25043 => array('Unknown title background style.',0),
25044 => array('Cannot use auto scaling since it is impossible to determine a valid min/max value of the Y-axis (only null values).',0),
25045 => array('Font families FF_HANDWRT and FF_BOOK are no longer available due to copyright problem with these fonts. Fonts can no longer be distributed with JpGraph. Please download fonts from http://corefonts.sourceforge.net/',0),
25046 => array('Specified TTF font family (id=%d) is unknown or does not exist. Please note that TTF fonts are not distributed with JpGraph for copyright reasons. You can find the MS TTF WEB-fonts (arial, courier etc) for download at http://corefonts.sourceforge.net/',1),
25047 => array('Style %s is not available for font family %s',2),
25048 => array('Unknown font style specification [%s].',1),
25049 => array('Font file "%s" is not readable or does not exist.',1),

25050 => array('First argument to Text::Text() must be a string.',0),
25051 => array('Invalid direction specified for text.',0),
25052 => array('PANIC: Internal error in SuperScript::Stroke(). Unknown vertical alignment for text',0),
25053 => array('PANIC: Internal error in SuperScript::Stroke(). Unknown horizontal alignment for text',0),
25054 => array('Internal error: Unknown grid axis %s',1),
25055 => array('Axis::SetTickDirection() is deprecated. Use Axis::SetTickSide() instead',0),
25056 => array('SetTickLabelMargin() is deprecated. Use Axis::SetLabelMargin() instead.',0),
25057 => array('SetTextTicks() is deprecated. Use SetTextTickInterval() instead.',0),
25058 => array('Text label interval must be specified >= 1.',0),
25059 => array('SetLabelPos() is deprecated. Use Axis::SetLabelSide() instead.',0),

25060 => array('Unknown alignment specified for X-axis title. (%s)',1),
25061 => array('Unknown alignment specified for Y-axis title. (%s)',1),
25062 => array('Labels at an angle are not supported on Y-axis',0),
25063 => array('Ticks::SetPrecision() is deprecated. Use Ticks::SetLabelFormat() (or Ticks::SetFormatCallback()) instead',0),
25064 => array('Minor or major step size is 0. Check that you haven\'t got an accidental SetTextTicks(0) in your code. If this is not the case you might have stumbled upon a bug in JpGraph. Please report this and if possible include the data that caused the problem',0),
25065 => array('Tick positions must be specified as an array()',0),
25066 