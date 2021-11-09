<div class="data_colour">
<h1 align="center">
<b>Simple example using scanf() and printf()</b>
</h1></div>
<p>
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
29
30
31
32
33
34
35
36
37
38</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : Using print() and scanf() in C</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to use printf() and scanf() with data types</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> number;
<span style="color: #333399; font-weight: bold">float</span> decimal;
<span style="color: #333399; font-weight: bold">char</span> alpha;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #888888">//Taking integer data type as an input</span>
	printf(<span style="background-color: #fff0f0">&quot;Enter the number&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>number);

	<span style="color: #888888">//Taking float data type as an input</span>
	printf(<span style="background-color: #fff0f0">&quot;Enter the float&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %f&quot;</span>, <span style="color: #333333">&amp;</span>decimal);

	<span style="color: #888888">//Taking char data type as an input</span>
	printf(<span style="background-color: #fff0f0">&quot;Enter the char&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %c&quot;</span>, <span style="color: #333333">&amp;</span>alpha);

	<span style="color: #888888">//Printing integer data type</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0"> %d&quot;</span>, number);
	<span style="color: #888888">//Printing float data type</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0"> %f&quot;</span>, decimal);
	<span style="color: #888888">//Printing char data type</span>
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0"> %c&quot;</span>, alpha);
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Enter the number5
Enter the float56
Enter the chark

 5
 56.000000
 k
</pre>