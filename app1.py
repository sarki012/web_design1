from flask import Flask, render_template
import os
import cv2
import threading

IMG_FOLDER = os.path.join("static", "images")

app = Flask(__name__, template_folder='templates')

app.config["UPLOAD_FOLDER"] = IMG_FOLDER

@app.route('/')
@app.route('/index')
def show_index():
    full_filename = os.path.join(app.config['UPLOAD_FOLDER'], 'f1.jpeg')
    return render_template("image.html", user_image = full_filename)

if __name__ == '__main__':
    app.run()

#@app.route("/")
#def main(): 
#    banner1 = os.path.join(app.config["UPLOAD_FOLDER"], "f1.jpeg")
#    return render_template("image.html", user_image=banner1)