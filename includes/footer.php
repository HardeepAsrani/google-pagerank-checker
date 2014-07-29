<div id="myModal" class="reveal-modal">
     <h2 style="color:black;text-shadow:none;">What is PageRank?</h2>
     <blockquote>PageRank is an algorithm used by the Google web search engine to rank websites in their search engine results. PageRank is a way of measuring the importance of website pages. According to Google, PageRank works by counting the number and quality of links to a page to determine a rough estimate of how important the website is. The underlying assumption is that more important websites are likely to receive more links from other websites.</blockquote>
     <a class="close-reveal-modal">&#215;</a>
</div>

<div id="textModal" class="reveal-modal">
     <h2 style="color:black;text-shadow:none;">Embed PageRank Checker to your website</h2>
<textarea style="width:100%;height:100px;" readonly="true" onClick="this.select();">
&lt;div style=&quot;text-align:center;&quot;&gt;
&lt;table cellspacing=&quot;1&quot; style=&quot;margin:10px auto 40px;width:400px;border-radius: 5px;border:1px solid #DDD;text-align:center;&quot;&gt;
&lt;tr&gt;&lt;td style=&quot;background:#fff;vertical-align:middle;&quot;&gt;
&lt;p style=&quot;font-size:11px;font-family:Verdana;margin:0px;padding:2px;color:#555;&quot;&gt;&lt;strong&gt;Check PageRank:&lt;/strong&gt;&lt;/p&gt;
&lt;/td&gt;&lt;/tr&gt;
&lt;form name=&quot;pr&quot; action=&quot;http://www.trickspanda.com/tools/pagerank/rank.php&quot; method=&quot;post&quot; style=&quot;margin:0px;padding:0px;&quot; target=&quot;_black&quot;&gt;
&lt;tr&gt;&lt;td style=&quot;padding:10px;background:#fff;&quot;&gt;
&lt;input type=&quot;text&quot; value=&quot;http://&quot; name=&quot;www&quot; maxlength=&quot;150&quot; style=&quot;width:250px;padding:1px 2px 2px 3px;margin-right:10px;font-size:13px;font-family:Arial;&quot;&gt; 
&lt;input type=&quot;submit&quot; name=&quot;submit&quot; value=&quot; Check PageRank &quot; style=&quot;width:80px;font-size:11px;font-family:Arial;padding:1px;&quot;&gt;
&lt;/td&gt;&lt;/tr&gt;
&lt;/form&gt;
&lt;tr&gt;&lt;td&gt;
&lt;p style=&quot;margin:0px;padding:3px 0px 1px 0px;color:#242424;background: #fff;font-size:9px;font-family:Verdana;&quot;&gt;Powered by &lt;a href=&quot;http://www.trickspanda.com/tools/pagerank/&quot; target=&quot;_blank&quot;&gt;PageRank Checker&lt;/a&gt;.&lt;/p&gt;
&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;
&lt;/div&gt;
</textarea>
     <a class="close-reveal-modal">&#215;</a>
</div>

<?php

if (class_exists('GooglePageRankChecker')) {
    $pagerank = GooglePageRankChecker::getRank(stripslashes($_POST['www']));
}

if (!empty($_POST["www"])): ?>
<div id="badgeModal" class="reveal-modal">
    <h2 style="color:black;text-shadow:none;">Get a PageRank Website Badge</h2>
    <div style="text-align:center;">
     
    <?php
    if (is_numeric($pagerank)): ?>
        <img src="http://www.trickspanda.com/tools/pagerank/badges/<?php
		echo GooglePageRankChecker::getRank(stripslashes($_POST['www'])); ?>.png"/>
    <?php
	else: ?>
        <img src="http://www.trickspanda.com/tools/pagerank/badges/NA.png"/>
    <?php
	endif; ?>
    </div>
     <br/>
     <textarea style="width:100%;height:100px;" readonly="true" onClick="this.select();">
<a href="http://www.trickspanda.com/tools/pagerank/" target="_blank" title="Google PageRank Checker" >
    <?php
	if (is_numeric($pagerank)): ?>
        <img src="http://www.trickspanda.com/tools/pagerank/badges/<?php
		echo GooglePageRankChecker::getRank(stripslashes($_POST['www'])); ?>.png" border="0" />
    <?php
	else: ?>
        <img src="http://www.trickspanda.com/tools/pagerank/badges/NA.png" border="0" />
    <?php
	endif; ?>
</a></textarea>
     <a class="close-reveal-modal">&#215;</a>
</div>
<?php
endif; ?>

<h5><a href="#" data-reveal-id="myModal">What is PageRank?</a> - <a href="#" data-reveal-id="textModal">Embed This</a>
<?php

if (class_exists('GooglePageRankChecker')) {
	$pagerank = GooglePageRankChecker::getRank(stripslashes($_POST['www']));
}

if (!empty($_POST["www"])): ?>
- <a href="#" data-reveal-id="badgeModal">Get a PageRank Website Badge</a>
<?php
endif; ?>
</h5>