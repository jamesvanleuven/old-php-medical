<%@LANGUAGE=Python%>
<HTML>
<head></head>
<body>
<h1>Python Test</h1>

<%
#do some python stuff here
	def application(environ, start_response):
		import sys
		path = '/www'
		if path not in sys.path:
			sys.path.append(path)
		from pyinfo import pyinfo
		output = pyinfo()
		start_response('200 OK', [('Content-type', 'text/html')])
		return [output]
%>

</body>
</html>
