MinecraftAPI.getServerStatus('mlgland.ddns.net', {
        port: 25565 // optional, only if you need a custom port
    }, function (err, status) {
        if (err) {
            return document.querySelector('.status').innerHTML = 'Error loading status';
        }

        // you can change these to your own message!
        document.querySelector('.upstate').innerHTML = status.online ? 'up' : 'down';
    });