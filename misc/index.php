<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SurfClipse</title>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
<link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
  
  <script>hljs.initHighlightingOnLoad();</script>

<link href="../css/style1.css" type="text/css" rel="stylesheet" />
<style type="text/css">
hl
{
 color:#0066FF;
 font-size:18px;
}
.important
{
 color:#FF0000;
 font-weight:bold;
}


</style>
</head>

<body>
<table border="0" cellpadding="0" cellspacing="0" width="1000" align="center">
<tr>
<td>
<table border="0">
<tr>
<td width="70">
<img src="tutorial/images/sc4r.bmp" width="50" height="50" />
</td>
<td>
<h1>SurfClipse</h1>
</td>
</tr>
</table>
<spacer></spacer>
</td>
</tr>
<tr>
<td>
<p>
<div class="rounded2">
<strong>Abstract:</strong>
Despite various debugging supports of the existing IDEs for programming errors and exceptions, software developers often look at web for working solutions or any up-to-date information. Traditional web search does not consider thecontext of the problems that they search solutions for, and thus it often does not help much in problem solving. In this paper, we propose a context-aware meta search tool, SurfClipse, that analyzes an encountered exception andits context in the IDE, and recommends not only suitable search queries but also relevant web pages for the exception (and its context). The tool collects results from three popular search engines and a programming Q & A site against the exception in the IDE, refines the results for relevance against the context of the exception, and then ranks them before recommendation. It provides two working modes--interactive and proactive to meet the versatile needs of the developers, and one can browse the result pages using a customized embedded browser provided by the tool.
</div>
</p>
<spacer></spacer>
</td>
</tr>
<tr>
<td>
<h3>Replication Packages</h3>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">IDE Plug-in</a></li>
	<li><a href="#tabs-2">Experimental Data</a></li>
    <li><a href="#tabs-3">Prototype (Executable)</a></li>
    <li><a href="#tabs-4">Prototype (Library)</a></li>
  </ul>
  <div id="tabs-1">
  <p style="font-weight:bold">System Requirements</p>
<hr />
<ul>
<li><b>Required JDK:</b> JDK 7.0.21 and later. <span class="important">(This is a must)</span></li>
<li><b>Supported OS:</b> Windows 7+, Ubuntu Linux 12+, did not test with Mac OSX 10, but should work if JDK specification is met</li>
<li><b>Supported Eclipse IDE:</b> Indigo 3.7+, Juno 4.2+, Kepler 4.3+  <span class="important">(This is a must)</span></li>
<li><b>Required External Libraries:</b> <a href="https://drive.google.com/open?id=19Z2SnYwoe_IHxgNHbxOmC7kngoA6g8-8">Get Libs</a> (if required)</li>
</ul>
<p>So far, I tested with those configurations, but other versions are likely to support if <b>JDK 7.0.21+</b> installed and Eclipse IDE is of upper versions.</p>
<div>
<iframe width="560" height="315" src="//www.youtube.com/embed/LTIkFYrnllY" frameborder="0" allowfullscreen></iframe>
</div>

<p style="font-weight:bold">Important Resource Links</p>
<hr />
<ul>
<li><a href="https://drive.google.com/open?id=1dzl159ttx1-4vMt3ETdlmj9x8rywPK5J">Eclipse Plugin Update URL</a></li>
<li><a href="tutorial/">SurfClipse Manual</a></li>
<li><a href="troubleshoorting.php">SurfClipse Troubleshooting</a></li>
<li><a href="https://marketplace.eclipse.org/content/surfclipse">SurfClipse in Eclipse Marketplace</a></li>
</ul>
</div> <!--End of Tab 1-->
<div id="tabs-2">
Thanks for your interest. Since we started working on the journal version, the dataset will be expanded, and will be made public soon.
Nonetheless, we uploaded some sample datasets for the testing of our prototype which you might be interested in.
</div>
<div id="tabs-3">
<div class="rounded2">
	<strong>Tool Installation:</strong>
	<br />
	<ol>
	<li>Download <code>surfclipse-exec.jar, query, strace, ccontext, sclipseIndex, site-rank, solution</code>, and <code>docsource</code> from <a href="https://drive.google.com/open?id=1erooZLLoBMpin4q4FLNHXkfe9Puq8DyS"><b> Google Drive</b>.</a></li>
	<li>Keep all four items in the same directory.</li>
	<li>Make an output folder <code>search-output</code> in the same directory</li>
	<li>Unzip <code>docsource.7z</code> in the same directory</li>
	</ol>
	</div>
	
	<br />
	<div class="rounded2">
	<strong>Running SurfClipse:</strong>
	<p>
	 <strong>Recommending Webpages</strong>: Execute the following command with your custom parameters:
	</p>
	<code>
	java -jar surfclipse-exec.jar -caseNo 20 -query query -strace strace -ccontext ccontext -output search-output -topk 10
	</code>
	<ul>
	<li><code>-caseNo</code> : The query ID to be executed. For example, the above command will execute the query #20. If you want all queries to be executed, then REMOVE <code>-caseNo</code> parameter from your command.</li>
	<li><code>-query</code> : The folder that contains search queries. Each file contain one query and the corresponding query is identified by its file name.</li>
	<li><code>-strace</code> :  The folder that contains stack traces associated with each of the input queries.</li>
	<li><code>-ccontext</code> : The folder that contains contextual code segment associated with each of the input queries.</li>
	<li><code>-output</code> : The output folder that contains the search results.</li>
	<li><code>-topk</code> : The number of Top-K results to be returned by SurfClipse</li>
	<li><code>-task</code> : Task to be performed. In this case, use <code>search</code>. The default operation is <code>search</code></li>
	</ul>
	<h4>Executing single query</h4>
	<img src="surfclipse-running-snapshot.png" border="0" width="650" /> 
	<h4>Executing all queries from the dataset</h4>
	<img src="surfclipse-running-snapshot-all.png" border="0" width="650" /> 
	
	<p><strong>Evaluating SurfClipse:</strong> Execute the following command with your custom parameters: </p>
	<code>
	java -jar surfclipse-exec.jar -totalcase 50 -output search-output -goldset solution -topk 10 -task evaluate 
	</code>
	<ul>
	<li><code>-totalcase</code> : Total number of cases for the evaluation. Right now, the sample dataset contains 50 queries</li>
	<li><code>-output</code> : The output folder that contains the search results provided by SurfClipse.</li>
	<li><code>-goldset</code> : Ground truth for each of the queries.</li>
	<li><code>-topk</code> : The number of Top-K results to be considered for evaluation</li>
	<li><code>-task</code> : Task to be performed. In this case, use <code>evaluate</code></li>
	</ul>
	<p>
	<img src="surfclipse-evaluate-snapshot.png" border="0" width="650" /> 
	</p>
	
	</div>
</div>
<div id="tabs-4">
<p>Library name: <code>ca.usask.cs.srlab.surfclipse.prototype</code></p>
<h4>Executing the queries using SurfClipse</h4>
<pre>
<code class="java">
		int caseID = 20;
		String queryFolder = "query";
		String straceFolder = "strace";
		String codeFolder = "ccontext";
		int topk = 10;
		String outputFolder = "search-output";
		new DemoSCRunner(caseID, queryFolder, straceFolder, codeFolder,
				outputFolder, topk).executeAllQueries();
</code>
<h4>Evaluating the search results of SurfClipse</h4>
<pre>
<code class="java">
		int caseSize = 75;
		String resultFolder = "search-output";
		String goldsetFolder = "solution";
		int topk = 10;
		new PerformanceCalc(caseSize, goldsetFolder, resultFolder, topk)
				.calculatePerformance();
</code>
</pre>

</pre>

</div>
</div>


<div>
<p style="font-weight:bold">Related Papers</p>
<hr />
<ul>
<li>
M. Masudur Rahman, S. Yeasmin and C.K. Roy, <a href="http://www.cs.usask.ca/~croy/papers/2014/RahmanSurfClipseCSMRWCRE2014.pdf">"Towards a Context-Aware Meta Search Engine for IDE-Based Recommendation about Programming Errors and Exceptions"</a>, In Proceeding of the IEEE CSMR-18/WCRE-21 Software Evolution Week (CSMR-WCRE), pp. 194--203, Antwerp, Belgium, February 2014. 
</li>
<li>
M. Masudur Rahman and C.K. Roy, "<a href="http://homepage.usask.ca/~masud.rahman/papers/masud-ICSME2014-6146a617.pdf">SurfClipse: Context-Aware Meta Search in the IDE</a>", In Proceeding of The 30th International Conference on Software Maintenance and Evolution (Tool Demo Track) (ICSME 2014), pp. 617--620, Victoria, Canada, September 2014.
</li>
<li>
M. Masudur Rahman, Shamima Yeasmin Mukta, Chanchal K. Roy, <a href="http://www.cs.usask.ca/~croy/papers/2013/RahmanSurfClipseWCRE2013.pdf">"An IDE-Based Context-Aware Meta Search Engine"</a>, In Proceedings of Early Reseach Acheivement (ERA) Track of the 20th Working Conference on Reverse Engineering (WCRE 2013), pp. 467-471, Koblenz, Germany, October 2013.
</li>
</ul>
<div>
<pre class="rounded2">
@INPROCEEDINGS{csmrwcre2014masud, 
author={M. M. Rahman and S. Yeasmin and C. K. Roy}, 
booktitle={Proc. CSMR-WCRE}, 
title={Towards a context-aware IDE-based meta search engine for recommendation about programming errors and exceptions}, 
year={2014}, 
pages={194-203} } 
</pre>

<pre class="rounded2">
@INPROCEEDINGS{icsme2014masud, 
author={M. M. Rahman and C. K. Roy}, 
booktitle={Proc. ICSME}, 
title={SurfClipse: Context-Aware Meta-search in the IDE}, 
year={2014}, 
pages={617-620} } 
</pre>
 
<pre class="rounded2">
@INPROCEEDINGS{wcre2013masud, 
author={M. M. Rahman and S. Yeasmin and C. K. Roy}, 
booktitle={Proc. WCRE}, 
title={An IDE-based context-aware meta search engine}, 
year={2013}, 
pages={467-471} }
</pre>
</div>

</div>

</td>
</tr>
<tr>
<td colspan="3">
<h4 style="text-align:center">
<a style="text-decoration:none; cursor:pointer" href="../tools">&larr; Check out other tools by Masud Rahman</a>
</h4>
</td>
</tr>

<tr>
<td colspan="3">
<hr />
<p>&copy; Masud Rahman, Computer Science, University of Saskatchewan, Canada. </p>
</td>
</tr>
</table>

</body>
</html>
