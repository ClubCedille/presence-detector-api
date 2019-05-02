import sys
from flask import Flask

app = Flask(__name__)

__light_status__ = "False"


class presence_detector_server():

    @app.route('/')
    def hello():
        return "Hello World!"

    @app.route('/status/<int:post_id>', methods=['POST'])
    def receive_status(post_id):
        global __light_status__
        if post_id != 0 and post_id != 1 :
            print("0 or 1 is expected", file=sys.stderr)
            return "Error"
        else:
            if post_id == 1:
                __light_status__ = "True"
                return "True"
            else:
                __light_status__ = "False"
                return "False"

    @app.route('/status', methods=['GET'])
    def provide_status():
        global __light_status__
        return __light_status__

