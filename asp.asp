<%@LANGUAGE=Python%>
<HTML>
<head></head>
<body>
<h1>Python Test</h1>

<%
	# enable debugging
	import cgitb
	cgitb.enable()
	print 'python interpreted text<br>'
	Response.Write('Python Test<br>')
	Response.write('<h3>Smaller heading</hr>')
%>

</body>
</html>