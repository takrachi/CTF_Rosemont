#!/usr/bin/env python2

from flask import Flask, render_template, request
from itertools import cycle
import sys
from base64 import b64decode

app = Flask(__name__)

def xor(m, k):
    return ''.join(chr(ord(x) ^ ord(y)) for (x,y) in zip(m, cycle(k)))

# EN CONSTRUCTION
def decrypter_mdp(mdp, key):
	print xor(mdp.decode('hex'), key)
	return b64decode(xor(mdp.decode('hex'), key))

@app.route('/', methods=['GET'])
def main():
	anti_crash = ['dev', 'stdin', 'stderr', 'random', 'stdout']
	page = request.args.get('page')

	if page != None:	
		# Filtre la requete pour eviter les crashs
		for i in anti_crash:
			if i in page: page = ''
		# Ouverture de la page
		try:
			page = open('/home/gpd/src/'+page, 'r').read()
		except Exception as e:
			page = str(e)
	
	return render_template('index.html', mdp=page)

if __name__ == '__main__':
	if len(sys.argv) != 2:
		print " Specifiez la cle S.V.P."
		sys.exit(1)
	else:
		key = sys.argv[1]
		app.run(debug=False, host="0.0.0.0", port=8080) 

# Bravo! Voici le premier flag : FLAG-14635cb0de4e68862653e1980c668fb2
