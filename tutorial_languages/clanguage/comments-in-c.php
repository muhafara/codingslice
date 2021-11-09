<div class="data_colour">
<h1 align="center">
<b>Comments in C</b>
</h1></div>
<p>
In a computer programming language, a comment is a readable explanation for programmers in a source code. A comment is added inside a source to increase readability for programmers and help to understand the code easily. The compiler ignores them during compiling time.
<br>
Comments are consist of slash and asterisk. Comments body starts with slash asterisk and ends with asterisk slash i-e /*------------------*/.
</p>
<h4><b><u>How to use comments in C.</u></b></h4>
<br>
<b>
<pre class="prettyprint">
<div align="center">


<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : commentsinc.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to use comments in C language</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Single-line comments in line number 16&quot;</span>);
	<span style="color: #888888">/*This is how we add comments in our source code*/</span>
	printf(<span style="background-color: #fff0f0">&quot;Multi-line comments in line number 18&quot;</span>);
	<span style="color: #888888">/*This is how we add multi-line comments</span>
<span style="color: #888888">	 * </span>
<span style="color: #888888">	 * </span>
<span style="color: #888888">	 * </span>
<span style="color: #888888">	 * in </span>
<span style="color: #888888">	 * </span>
<span style="color: #888888">	 * our</span>
<span style="color: #888888">	 * </span>
<span style="color: #888888">	 * source code</span>
<span style="color: #888888">	 * </span>
<span style="color: #888888">	 */</span>
}
</pre></td></tr></table></div>

</div>
</pre>


<h1>Output</h1>

<pre class="prettyprint">

Single-line comments in line number 16
Multi-line comments in line number 18

</pre>
</b>
</p>