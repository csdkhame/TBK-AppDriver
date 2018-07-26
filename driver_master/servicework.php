<script>

 

self.addEventListener('install', function() {
  self.skipWaiting();
});

self.addEventListener('activate', function(event) {
  event.waitUntil(clients.claim());
});


/// 
self.addEventListener('notificationclick', function(event) {
	
	

  console.log('[Service Worker] Notification click Received.');

  event.notification.close();

  event.waitUntil(
    clients.openWindow('<?=$_GET[name]?>')
  );
});
 

</script>