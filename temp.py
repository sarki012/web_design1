import cgitb
import cgi
from flask import Flask, render_template

cgitb.enable() # This will show any errors on your webpage

print("Hello from Python. I'm good.")
#print "Content-type: text/html"