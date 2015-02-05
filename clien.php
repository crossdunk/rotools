<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
  <script>
    var source = new EventSource('/events');
    source.onmessage = function(e) {
      document.body.innerHTML += e.data + '<br>';
    };
  </script>
</body>
</html>

<script>
if (!!window.EventSource) {
  var source = new EventSource('socket_server.php');
} else {
  // 瀏覽器不支援 SSE，使用傳統的 xhr polling :(
}

source.addEventListener('message', function(e) {
  console.log(e.data);
}, false);

source.addEventListener('open', function(e) {
  // 連線已建立
}, false);

source.addEventListener('error', function(e) {
  if (e.readyState == EventSource.CLOSED) {
    // 連線已關閉
  }
}, false);
</script>