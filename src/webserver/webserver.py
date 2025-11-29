from flask import Flask, request
from flask_cors import CORS, cross_origin
import new_prediction as engine

app = Flask(__name__)
app.config['CORS_HEADERS'] = 'Content-Type'
CORS(app)


@app.route('/', methods=["POST", "GET"])
@cross_origin(origin='*')
def test():
    return str(engine.testData([int(request.args.get('sbp')),
                        float(request.args.get('tobacco')),
                        float(request.args.get('ldl')),
                        float(request.args.get('adiposity')),
                        float(request.args.get('famhist')),
                        float(request.args.get('obesity')),
                        float(request.args.get('alcohol')),
                        float(request.args.get('age')),
                        float(request.args.get('lan'))]))
    # return "<h1>" + str(engine.testData([150,25,4.2,40,1,38,4,23]])) + "</h1>"
if __name__ == '__main__':
    app.run(host='0.0.0.0') #ssl_context='adhoc'
