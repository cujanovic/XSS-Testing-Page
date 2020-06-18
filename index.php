<?php
  $headervalue = 'X-XSS-Protection: 0';
  header($headervalue);
?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <style>
          p {
            margin-left: 10%;
            margin-right: 10%;
          }
        </style>
    </head>
    <body>
      <h1>XSS Testing Page</h1>
      <?php echo 'Server header -> '.$headervalue ?>
      ======================================================================================================================
      <table>
        <thead>
          <tr>
            <th>Parameter Name</th>
            <th>Reflected Context</th>
            <th colspan="2">Example</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>tagName</td>
            <td>Inside a tag declaration</td>
            <td><a href="?tagName=foo">?tagName=foo</a></td>
            <td>&lt;foo&gt;...&lt;/foo&gt;</td>
          </tr>
          <tr>
            <td>attributeName</td>
            <td>Inside an attribute name</td>
            <td><a href="?attributeName=foo">?attributeName=foo</a></td>
            <td>&lt;div foo=""&gt;...&lt;/div&gt;</td>
          </tr>
          <tr>
            <td>singleQuotedAttributeValue</td>
            <td>Inside an attribute value delimeted by a single quote (<code>'</code>)</td>
            <td><a href="?singleQuotedAttributeValue=foo">?singleQuotedAttributeValue=foo</a></td>
            <td>&lt;input value='foo'&gt;...&lt;/input&gt;</td>
          </tr>
          <tr>
            <td>doubleQuotedAttributeValue</td>
            <td>Inside an attribute value delimeted by a double quote (<code>"</code>)</td>
            <td><a href="?doubleQuotedAttributeValue=foo">?doubleQuotedAttributeValue=foo</a></td>
            <td>&lt;input value="foo"&gt;...&lt;/input&gt;</td>
          </tr>
          <tr>
            <td>unquotedAttributeValue</td>
            <td>Inside an attribute value delimeted by a double quote (<code>"</code>)</td>
            <td><a href="?unquotedAttributeValue=foo">?unquotedAttributeValue=foo</a></td>
            <td>&lt;input value=foo&gt;...&lt;/input&gt;</td>
          </tr>
          <tr>
            <td>urlencodeuri</td>
            <td>Test if browser sends urlencode URI</td>
            <td><a href="?urlencodeuri=foo>'<;">?urlencodeuri=foo>'<;</a></td>
            <td>?urlencodeuri=foo%3E%27%3C;</td>
          </tr>
          <tr>
            <td>dom</td>
            <td>Test DOM</td>
            <td><a href="./dom/#<s>sss</s>">/dom/#&lt;s&gt;sss&lt;/s&gt;</a></td>
            <td>DOM</td>
          </tr>
            <td>html</td>
            <td>In an HTML context</td>
            <td><a href="?html=foo">?html=foo</a></td>
            <td>&lt;div&gt;... foo ...&lt;/div&gt;</td>
          </tr>
          <tr>
            <td>html ahref</td>
            <td>In an HTML ahref context</td>
            <td><a href="?ahref=foo">?ahref=foo</a></td>
            <td>&lt;a href=&quot;foo&quot;&gt;... foo ...&lt;/a&gt;</td>
          </tr>
          <tr>
            <td>htmlComment</td>
            <td>Inside an HTML comment</td>
            <td><a href="?htmlComment=foo">?htmlComment=foo</a></td>
            <td>&lt;!--... foo ... --&gt;</td>
          </tr>
          <tr>
            <td>styleTag</td>
            <td>Inside a CSS style tag</td>
            <td><a href="?styleTag=foo">?styleTag=foo</a></td>
            <td>&lt;style&gt;... foo ...&lt;/div&gt;</td>
          </tr>
          <tr>
            <td>styleAttribute</td>
            <td>Inside a CSS style attribute</td>
            <td><a href="?styleAttribute=foo">?styleAttribute=foo</a></td>
            <td>&lt;div style="foo"&gt;...&lt;/div&gt;</td>
          </tr>
          <tr>
            <td>idAttribute</td>
            <td>Inside an ID attribute</td>
            <td><a href="?idAttribute=foo">?idAttribute=foo</a></td>
            <td>&lt;div id="foo"&gt;...&lt;/div&gt;</td>
          </tr>
          <tr>
            <td>classAttribute</td>
            <td>Inside a CSS class name attribute</td>
            <td><a href="?classAttribute=foo">?classAttribute=foo</a></td>
            <td>&lt;div class="foo"&gt;...&lt;/div&gt;</td>
          </tr>

          <tr>
            <td>jsSingleQuotedString</td>
            <td>Inside a sigle quoted string in JavaScript</td>
            <td><a href="?jsSingleQuotedString=foo">?jsSingleQuotedString=foo</a></td>
            <td>&lt;script&gt; var str = 'foo'; &lt;/script&gt;</td>
          </tr>
          <tr>
            <td>jsDoubleQuotedString</td>
            <td>Inside a double quoted string in JavaScript</td>
            <td><a href="?jsDoubleQuotedString=foo">?jsDoubleQuotedString=foo</a></td>
            <td>&lt;script&gt; var str = "foo"; &lt;/script&gt;</td>
          </tr>
          <tr>
            <td>jsSingleLineComment</td>
            <td>Inside a single line JavaScript comment</td>
            <td><a href="?jsSingleLineComment=foo">?jsSingleLineComment=foo</a></td>
            <td>&lt;script&gt; // foo &lt;/script&gt;</td>
          </tr>
          <tr>
            <td>jsMultiLineComment</td>
            <td>Inside a multi line JavaScript comment</td>
            <td><a href="?jsMultiLineComment=foo">?jsMultiLineComment=foo</a></td>
            <td>&lt;script&gt; /* foo */ &lt;/script&gt;</td>
          </tr>
          <tr>
            <td>js</td>
            <td>Inside a JavaScript script tag context</td>
            <td><a href="?js=foo">?js=foo</a></td>
            <td>&lt;script&gt; foo &lt;/script&gt;</td>
          </tr>
        </tbody>
      </table>
      <div>
      ======================================================================================================================
        <?php
          if (isset($_REQUEST['tagName'])) {
            echo "<" . $_REQUEST['tagName'] . ">&nbsp;</" . $_REQUEST['tagName'] . ">";
          }
        ?>

        <div <?php if (isset($_REQUEST['attributeName'])) { echo $_REQUEST['attributeName'] . "=\"\""; } ?>>&nbsp;</div>

        <div custAttr='<?php if (isset($_REQUEST['singleQuotedAttributeValue'])) { echo $_REQUEST['singleQuotedAttributeValue']; } ?>'>&nbsp;</div>
        <div custAttr="<?php if (isset($_REQUEST['doubleQuotedAttributeValue'])) { echo $_REQUEST['doubleQuotedAttributeValue']; } ?>">&nbsp;</div>
        <div custAttr=<?php if (isset($_REQUEST['unquotedAttributeValue'])) { echo $_REQUEST['unquotedAttributeValue']; } ?>>&nbsp;</div>

        <?php if (isset($_REQUEST['urlencodeuri'])) { echo $_SERVER['REQUEST_URI']; } ?>

        <?php if (isset($_REQUEST['html'])) { echo $_REQUEST['html']; } ?>

        <?php if (isset($_REQUEST['ahref'])) { echo "<a href=\"".$_REQUEST['ahref']."\">".$_REQUEST['ahref']."</a>"; } ?>

        <!-- <?php if (isset($_REQUEST['htmlComment'])) { echo $_REQUEST['htmlComment']; } ?> -->

        <style><?php if (isset($_REQUEST['styleTag'])) { echo $_REQUEST['styleTag']; } ?></style>

        <div style="<?php if (isset($_REQUEST['styleAttribute'])) { echo $_REQUEST['styleAttribute']; } ?>">&nbsp;</div>

        <div id="<?php if (isset($_REQUEST['idAttribute'])) { echo $_REQUEST['idAttribute']; } ?>">&nbsp;</div>

        <div class="<?php if (isset($_REQUEST['classAttribute'])) { echo $_REQUEST['classAttribute']; } ?>">&nbsp;</div>
      </div>
      <script>

        var singleQuotedString = '<?php if (isset($_REQUEST['jsSingleQuotedString'])) { echo $_REQUEST['jsSingleQuotedString']; } ?>';
        var doubleQuotedString = "<?php if (isset($_REQUEST['jsDoubleQuotedString'])) { echo $_REQUEST['jsDoubleQuotedString']; } ?>";

        // <?php if (isset($_REQUEST['jsSingleLineComment'])) { echo $_REQUEST['jsSingleLineComment']; } ?>

        /* <?php if (isset($_REQUEST['jsMultiLineComment'])) { echo $_REQUEST['jsMultiLineComment']; } ?> */

        <?php if (isset($_REQUEST['js'])) { echo $_REQUEST['js']; } ?>;
      </script>
    </body>
</html>
