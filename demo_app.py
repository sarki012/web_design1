#Develop a python script that displays clickable buttons
from flask import Flask, render_template

app = Flask(__name__)


@app.route("/")
def hello():
    return render_template('index.html')

@app.route("/getimage")
def get_img():
    return "gray_btn1.jpeg"


if __name__ == '__main__':
    app.run()