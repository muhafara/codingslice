<div class="data_colour">
<h1 align="center">
<b>Enumerated data type(Enum)</b>
</h1></div>
<p>Enumerated data types also referred to as "enum". It holds constant values which can not be changed. Reserved keyword "enum" is used To define these types of data types.</p>
<h4><b><u>Enum</u></b></h4>
<p>In "C language" enum is used to defined the variables of types "enum". It is used to designates values to necessary constants. It makes the program easy to read.</p>
<img src="\images\imagetwenty.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>How to define enum data types:</u></b></h4>
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
20</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : enum-data-types.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Enum in C</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">//Enum</span>
<span style="color: #008800; font-weight: bold">enum</span> numbers {one<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>, two<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">2</span>, three<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">3</span>, four<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">4</span>};
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #888888">//variable declaration of enum</span>
	<span style="color: #008800; font-weight: bold">enum</span> numbers num;
	num <span style="color: #333333">=</span> two;
	printf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, num);
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 2
</pre>
<h4><b><u>Example (How to print all enum values)</u></b></h4>
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
22</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : enum-data-types.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Enum in C</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">//Enum</span>
<span style="color: #008800; font-weight: bold">enum</span> numbers {one<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>, two<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">2</span>, three<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">3</span>, four<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">4</span>, five<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">5</span>, six<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">6</span>, seven<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">7</span>};
<span style="color: #333399; font-weight: bold">int</span> i;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #888888">//using for-loop to print the values of enum</span>
	<span style="color: #008800; font-weight: bold">for</span>(i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">one</span>;i<span style="color: #333333">&lt;=</span>seven;i<span style="color: #333333">++</span>){
		printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Values are: %d&quot;</span>, i);
	}

}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Values are: 1
Values are: 2
Values are: 3
Values are: 4
Values are: 5
Values are: 6
Values are: 7
</pre>