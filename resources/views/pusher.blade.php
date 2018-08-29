<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('0ed9d481e4c6b4057ba0', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channelt');
    channel.bind('my-eventt', function(data) {
      // alert(JSON.stringify(data));
      alert(data.message);
      console.log('debug ', data);
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body>