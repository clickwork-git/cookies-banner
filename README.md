Cookies Banner
==============

Cookies Banner displays a banner which allows users to accept or reject cookies from tracking applications like Google Analytics or Matomo.  It is a GDPR-compliant way to get cookie consent from visitors.

The plugin uses the script [Cookies EU banner](https://alex-d.github.io/Cookies-EU-banner/).

Usage
-----

**1) Go to the settings of the plugin.**

**2) Fill out the field "Text".**

For example: "Accept or reject the use of cookies by Google Analytics for statistical purposes."

Also you can link to a page with more information.

**3) Add the code of the tracking application to the field "Code".**

For example the code of Google Analytis is something like:

```
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-xxxxxx-1', 'auto');
  ga('send', 'pageview');
</script>
```

Important: Enter the code without `<script>` at the beginning and `</script>` at the end.

**4) Delete cookie**

The cookie can be deleted with the following:

```
<script>
  DeleteCookie;
</script>
```
