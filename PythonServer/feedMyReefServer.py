#!/usr/bin/python3

from http import client
from http.server import BaseHTTPRequestHandler, HTTPServer
import time
from aquarium.aquarium import Aquarium

hostName = ""
hostPort = 8888

class MyServer(BaseHTTPRequestHandler):

	def _set_headers(self):
		self.send_response(200)
		self.send_header('Content-type', 'text/html')
		self.end_headers()

	#	GET is for clients geting the predi
	def do_GET(self):

		aquarium = Aquarium()

		self._set_headers()

		if(self.path == "/light" ):
			light=aquarium.toggleLight()
			self.wfile.write(light)
		if(self.path == "/feed"):
			meal=aquarium.feed()
			self.wfile.write(meal)
		if(self.path == "/temperature"):
			valueTemp=aquarium.getTemperature()
			self.wfile.write(valueTemp)
		if (self.path == "/ph"):
			valuePH = aquarium.getPHValue()
			self.wfile.write(valuePH)

		#self.wfile.write(bytes("<html><body><h1>You Feeded the fish!!</h1></body></html>" , "utf-8"))


	#	POST is for submitting data.
	def do_POST(self):

		print( "incomming http: ", self.path )

		content_length = int(self.headers['Content-Length']) # <--- Gets the size of data
		post_data = self.rfile.read(content_length) # <--- Gets the data itself
		self.send_response(200)

		client.close()

		#import pdb; pdb.set_trace()


myServer = HTTPServer((hostName, hostPort), MyServer)
print(time.asctime(), "Server Starts - %s:%s" % (hostName, hostPort))

try:
	myServer.serve_forever()
except KeyboardInterrupt:
	pass

myServer.server_close()
print(time.asctime(), "Server Stops - %s:%s" % (hostName, hostPort))
