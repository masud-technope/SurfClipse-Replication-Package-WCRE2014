## SurfClipse: A Context-Aware IDE-Based Meta Search Engine

Accepted Papers
------------------------------------
```
Towards a Context-Aware Meta Search Engine for IDE-Based Recommendation about Programming Errors and Exceptions
Mohammad Masudur Rahman, Shamima Yeasmin, and Chanchal K. Roy
```
**Download this paper:**  [<img src="http://homepage.usask.ca/~masud.rahman/img/pdf.png"
     alt="PDF" heigh="16px" width="16px" />](http://www.cs.usask.ca/~croy/papers/2014/RahmanSurfClipseCSMRWCRE2014.pdf)
```
SurfClipse: Context-Aware Meta Search in the IDE
Mohammad Masudur Rahman, and Chanchal K. Roy
```
**Download this paper:**  [<img src="http://homepage.usask.ca/~masud.rahman/img/pdf.png"
     alt="PDF" heigh="16px" width="16px" />](http://homepage.usask.ca/~masud.rahman/papers/masud-ICSME2014-6146a617.pdf)
```
An IDE-Based Context-Aware Meta Search Engine
Mohammad Masudur Rahman, Shamima Yeasmin, and Chanchal K. Roy
```
**Download this paper:**  [<img src="http://homepage.usask.ca/~masud.rahman/img/pdf.png"
     alt="PDF" heigh="16px" width="16px" />](http://www.cs.usask.ca/~croy/papers/2013/RahmanSurfClipseWCRE2013.pdf)

**Abstract:** Despite various debugging supports of the existing IDEs for programming errors and exceptions, software developers often look at web for working solutions or any up-to-date information. Traditional web search does not consider thecontext of the problems that they search solutions for, and thus it often does not help much in problem solving. In this paper, we propose a context-aware meta search tool, SurfClipse, that analyzes an encountered exception andits context in the IDE, and recommends not only suitable search queries but also relevant web pages for the exception (and its context). The tool collects results from three popular search engines and a programming Q & A site against the exception in the IDE, refines the results for relevance against the context of the exception, and then ranks them before recommendation. It provides two working modes--interactive and proactive to meet the versatile needs of the developers, and one can browse the result pages using a customized embedded browser provided by the tool.

Experimental Data
-----------------------
- Stack traces
- Context code
- Search query
- Ground truth
- Search results by SurfClipse
- Auxiliary/intermediate data

User Study
--------------------
- Survey test questions
- Survey responses
- Survey manual

Working Prototype
-----------------------
**Tool Installation**  
1.  Get  `surfclipse-exec.jar, query, strace, ccontext, sclipseIndex, site-rank, solution`, and  `docsource`  
2.  Keep all four items in the same directory.
3.  Make an output folder  `search-output`  in the same directory
4.  Unzip  `docsource.7z`  in the same directory

**Running SurfClipse**

Execute the following command with your custom parameters:
```
java -jar surfclipse-exec.jar -caseNo 20 -query query -strace strace -ccontext ccontext -output search-output -topk 10
```
-   `-caseNo`  : The query ID to be executed. For example, the above command will execute the query #20. If you want all queries to be executed, then REMOVE  `-caseNo`parameter from your command.
-   `-query`  : The folder that contains search queries. Each file contain one query and the corresponding query is identified by its file name.
-   `-strace`  : The folder that contains stack traces associated with each of the input queries.
-   `-ccontext`  : The folder that contains contextual code segment associated with each of the input queries.
-   `-output`  : The output folder that contains the search results.
-   `-topk`  : The number of Top-K results to be returned by SurfClipse
-   `-task`  : Task to be performed. In this case, use  `search`. The default operation is  `search`

**Execute a Single Query**

![](http://homepage.usask.ca/~masud.rahman/surfclipse/surfclipse-running-snapshot.png)

**Execute all Queries**

![](http://homepage.usask.ca/~masud.rahman/surfclipse/surfclipse-running-snapshot-all.png)

**Evaluating SurfClipse**

Execute the following command with your custom parameters:

```
java -jar surfclipse-exec.jar -totalcase 50 -output search-output -goldset solution -topk 10 -task evaluate
```
-   `-totalcase`  : Total number of cases for the evaluation. Right now, the sample dataset contains 50 queries
-   `-output`  : The output folder that contains the search results provided by SurfClipse.
-   `-goldset`  : Ground truth for each of the queries.
-   `-topk`  : The number of Top-K results to be considered for evaluation
-   `-task`  : Task to be performed. In this case, use  `evaluate`

![](http://homepage.usask.ca/~masud.rahman/surfclipse/surfclipse-evaluate-snapshot.png)

IDE Plug-in
-------------------------
- Eclipse IDE plug-in
- Plug-in dependencies

Please cite our works as 
----------------------------------
```
@INPROCEEDINGS{csmrwcre2014masud, 
author={M. M. Rahman and S. Yeasmin and C. K. Roy}, 
booktitle={Proc. CSMR-WCRE}, 
title={Towards a context-aware IDE-based meta search engine for recommendation about programming errors and exceptions}, 
year={2014}, 
pages={194-203} }
```
**Download this paper:**  [<img src="http://homepage.usask.ca/~masud.rahman/img/pdf.png"
     alt="PDF" heigh="16px" width="16px" />](http://www.cs.usask.ca/~croy/papers/2014/RahmanSurfClipseCSMRWCRE2014.pdf)
 ```
 @INPROCEEDINGS{icsme2014masud, 
author={M. M. Rahman and C. K. Roy}, 
booktitle={Proc. ICSME}, 
title={SurfClipse: Context-Aware Meta-search in the IDE}, 
year={2014}, 
pages={617-620} }
 ```
 **Download this paper:**  [<img src="http://homepage.usask.ca/~masud.rahman/img/pdf.png"
     alt="PDF" heigh="16px" width="16px" />](http://homepage.usask.ca/~masud.rahman/papers/masud-ICSME2014-6146a617.pdf)
```
@INPROCEEDINGS{wcre2013masud, 
author={M. M. Rahman and S. Yeasmin and C. K. Roy}, 
booktitle={Proc. WCRE}, 
title={An IDE-based context-aware meta search engine}, 
year={2013}, 
pages={467-471} }
```
**Download this paper:**  [<img src="http://homepage.usask.ca/~masud.rahman/img/pdf.png"
     alt="PDF" heigh="16px" width="16px" />](http://www.cs.usask.ca/~croy/papers/2013/RahmanSurfClipseWCRE2013.pdf)
     
 ## Something not working as expected?

Contact:  **Masud Rahman**  ([masud.rahman@usask.ca](mailto:masud.rahman@usask.ca))

OR

Create an issue from  [here](https://github.com/masud-technope/SurfClipse-Replication-Package-WCRE2014/issues/new)
