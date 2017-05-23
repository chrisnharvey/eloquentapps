var server = {
    hostname: '127.0.0.1',
    port: 8080
}

var bt = require('bittorrent-tracker').Server

var tracker = new bt({
    udp: false,
    http: false,
    ws: true,
    filter: function (infoHash, params, cb) {
        // Call the NS API to verify a users NS Login
        // and that they have access to this torrent.
        // If they do, return true.
        // If not, return false and don't announce any peers

        var request = require('request')

        request.post({
            url: 'https://api.eloquentapps.io/tracker/check',
            form: {
                info_hash: infoHash,
                token: params.token
            }
        }, function(err,httpResponse,body) {
            console.log(err);
            console.log(httpResponse);
            console.log(body);
        });
    }
})

tracker.on('error', function (err) {
    // fatal server error!
    console.eror(err)
})

tracker.on('warning', function (err) {
    // client sent bad data. probably not a problem, just a buggy client.
    console.warn(err)
})

// start tracker server listening! Use 0 to listen on a random free port.
tracker.listen(server.port, server.hostname, function() {
    console.log('listening on ws port:' + tracker.ws.address().port)
})

