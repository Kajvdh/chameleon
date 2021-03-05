// Plugin by Stanley Kulik - http://www.chattersworld.nl - 02/2021

kiwi.plugin('perform', function(kiwi, log) {
	kiwi.on('irc.registered', function(event, net) {
		kiwi.emit('input.raw', '/umode2 +D' )
	});
});