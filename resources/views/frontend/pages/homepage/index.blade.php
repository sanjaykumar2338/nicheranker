<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Niche Ranker - Premium Backlink Provider</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f8fafc;
      margin: 0;
      padding: 0;
    }
    .jDe9Eg {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      height: 48px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.07);
      background-color: #fff;
      position: sticky;
      top: 0;
      z-index: 10;
    }
    .DBPC9g {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .KJpqkQ {
      padding: 12px 16px;
      opacity: 0.7;
      cursor: pointer;
      transition: all 0.2s ease;
      color: #304254;
    }
    .KJpqkQ.active {
      opacity: 1 !important;
      font-weight: bold;
      color: #000 !important;
      border-bottom: 2px solid #000;
    }
    iframe {
      width: 100%;
      border: none;
      overflow: hidden;
      display: block;
    }
  </style>
</head>
<body>

<!-- Optional nav (hidden as per original) -->
<nav class="jDe9Eg" style="display: none;">
  <ul class="DBPC9g">
    <li class="KJpqkQ active"><a href="#iframe1" onclick="setActive(this)">Page 1</a></li>
    <li class="KJpqkQ"><a href="#iframe2" onclick="setActive(this)">Page 2</a></li>
    <li class="KJpqkQ"><a href="#iframe3" onclick="setActive(this)">Page 3</a></li>
    <li class="KJpqkQ"><a href="#iframe4" onclick="setActive(this)">Page 4</a></li>
    <li class="KJpqkQ"><a href="#iframe5" onclick="setActive(this)">Page 5</a></li>
  </ul>
</nav>

<!-- Laravel Blade frame routes -->
<iframe id="iframe1" src="{{ url('frameone') }}" scrolling="no"></iframe>
<iframe id="iframe2" src="{{ url('frametwo') }}" scrolling="no"></iframe>
<iframe id="iframe3" src="{{ url('framethree') }}" scrolling="no"></iframe>
<iframe id="iframe4" src="{{ url('framefour') }}" scrolling="no"></iframe>
<iframe id="iframe5" src="{{ url('framefive') }}" scrolling="no"></iframe>

<!-- Footer -->
<iframe id="footerFrame" src="{{ url('footerframe') }}" scrolling="no"></iframe>

<!-- Active menu JS -->
<script>
  function setActive(link) {
    document.querySelectorAll('.KJpqkQ').forEach(item => item.classList.remove('active'));
    link.parentElement.classList.add('active');
  }
</script>

<!-- Auto-resize for all except iframe1 -->
<script>
  function resizeIframe(iframe) {
    if (iframe.id === 'iframe1') return; // skip resizing

    try {
      const doc = iframe.contentDocument || iframe.contentWindow.document;
      if (doc?.body) {
        iframe.style.height = doc.body.scrollHeight + 'px';
      }
    } catch (e) {
      console.warn("Unable to access iframe for resizing:", e);
    }
  }

  window.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("iframe").forEach(iframe => {
      iframe.addEventListener("load", () => {
        resizeIframe(iframe);
        setTimeout(() => resizeIframe(iframe), 1000);
      });
    });
  });
</script>

</body>
</html>
