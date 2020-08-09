<!DOCTYPE html>
<html>

<head>
  <title>随机图片api</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net/">
  <link rel="preload" href="https://cdn.jsdelivr.net/gh/kylelogue/mustard-ui/dist/css/mustard-ui.min.css" as="style">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kylelogue/mustard-ui/dist/css/mustard-ui.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.2/dist/jquery.min.js"></script>
  <script>
    $(document).ready(function () {

      $('.scroll-down, .get-started').on('click', function (e) {
        e.preventDefault()
        $('html, body').animate({
          scrollTop: $('section:first-of-type').offset().top
        }, 300)
      })

    })
  </script>
  <style>
    header {
      background: #a0e5e4
    }

    .get-started {
      background: #43ccc8;
      border: 3px solid #50d0cc;
    }
  </style>
</head>

<body>
  <header>
    <h1 class="title">随机图片api</h1>
    <h2 class="subtitle">说明文档</h2>
    <p class="disclaimer"><a href="https://img.66ccff.ml/">图片一览</a></p>
    <button class="get-started button button-primary button-large">详情</button>
    <a class="scroll-down" href="#"></a>
  </header>
  <section>
    <p class="h3"><strong>直接调用</strong></p>
    <p>访问api.php即可，跳转至图片地址</p>
  </section>
  <section>
    <p class="h3"><strong>访问api.php?type=output</strong></p>
    <p>服务器读取后输出，一般不建议使用</p>
  </section>
  <section>
    <p class="h3"><strong>访问api.php?type=json</strong></p>
    <p>服务器输出json</p>
    <pre class="language-html">
    <code class="language-html">     
{&quot;code&quot;:&quot;200&quot;,&quot;url&quot;:&quot;https:\/\/fp1.fghrsh.net\/2019\/07\/15\/c2549aaa63db078834ead6a92fe63b61.jpg&quot;}
    </code>
</pre>
  </section>
  <section>
    <p class="h3"><strong>访问api.php?type=JSON</strong></p>
    <p>服务器读取图片信息后输出json，如非需要图片信息不建议使用</p>
    <pre class="language-html">
    <code class="language-html">     
{&quot;code&quot;:&quot;200&quot;,&quot;url&quot;:&quot;https:\/\/fp1.fghrsh.net\/2019\/07\/15\/c2549aaa63db078834ead6a92fe63b61.jpg&quot;,&quot;width&quot;:&quot;1920&quot;,&quot;height&quot;:&quot;1080&quot;,&quot;mime&quot;:&quot;image\/jpeg&quot;,&quot;size&quot;:&quot;821735&quot;}
    </code>
</pre>
  </section>
  <footer>
  </footer>
</body>

</html>