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
      display: block;
    }
  </style>
</head>
<body>

<!-- Navigation -->
<nav class="jDe9Eg">
  <ul class="DBPC9g">
    <li class="KJpqkQ active" onclick="loadFrame('frameone.html', this)">Page 1</li>
    <li class="KJpqkQ" onclick="loadFrame('frametwo.html', this)">Page 2</li>
    <li class="KJpqkQ" onclick="loadFrame('framethree.html', this)">Page 3</li>
    <li class="KJpqkQ" onclick="loadFrame('framefour.html', this)">Page 4</li>
    <li class="KJpqkQ" onclick="loadFrame('framefive.html', this)">Page 5</li>
  </ul>
</nav>

<!-- Iframe for main content -->
<iframe
  id="contentFrame"
  src="frameone.html"
  scrolling="no"
  style="width: 100%; height: 800px; border: none; overflow: hidden;"
></iframe>

<!-- Footer Iframe -->
<iframe
  id="contentFrame2"
  src="footer.html"
  scrolling="no"
  style="width: 100%; height: 1000px; border: none; overflow: hidden;"
></iframe>

<!-- Scripts -->
<script>
  function loadFrame(page, el) {
    document.getElementById('contentFrame').src = page;

    // Toggle active class
    document.querySelectorAll('.KJpqkQ').forEach(nav => nav.classList.remove('active'));
    el.classList.add('active');

    document.querySelectorAll('iframe').forEach(iframe => {
      iframe.setAttribute('scrolling', 'no');
    });
  }

  // Ensure all iframes have scrolling="no"
  window.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('iframe').forEach(iframe => {
      iframe.setAttribute('scrolling', 'no');
    });
  });
</script>

</body>
</html>
