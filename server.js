var io = require('socket.io')(8888);
console.log('Leaved');
io.on('connection', function (socket) {

    console.log('Connected');

    socket.on('disconnect', function (socket) {
        console.log('Leaved');
    })
});
