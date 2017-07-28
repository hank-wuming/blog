import Echo from "laravel-echo";

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    key: 'GS5ziMqt53weGHvK4iS0cPgcHJnBh3D8',
    broadcaster: 'socket.io',
    host: 'https://localhost:6001'
});


window.Echo.private('hello').listen('.hihi', function (e) {
    console.log(e.test);
});
