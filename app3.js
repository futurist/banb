var fs = require('fs');
var http = require('http');
var express = require('express');
var app = express();
var server = http.Server(app);
var path = require('path');


/*******

set up http

*******/
app.get('/user/:id', function(req, res){
	//console.log(req.app);
	res.send('user ' + req.params.id);
});

app.use(express.static(path.join(__dirname, './'))); //  "public" off of current is root

server.listen(3000);



/*******

set up websockets

*******/

var WebSocketServer = require('ws').Server;
var wss = new WebSocketServer({ port: 8888 });

wss.on('connection', function( ws ) {

	var path = ws.upgradeReq.url;
	console.log('connection successful！', path, ws.protocol );

	ws.on('message', function( data, flags ) {
		var path = ws.upgradeReq.url;
		var protocol = ws.protocol;
		//console.log(data, path, this);
		console.log(data);
		fs.appendFile("data.txt", data+'\n');
		wss.send({status:"ok", p:protocol, path: path});
	});

	ws.on('close', function() {
		console.log('stopping client');
	});

});


wss.send = function (data, client) {
  wss.clients.forEach(function each(client) {
	client.send( typeof data=="string" ? data : JSON.stringify( data ),  function ack(error) { if(error) console.log("SEND ERRRRRR!!!!! ", error); } );
  });
};

