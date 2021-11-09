<div class="data_colour">
<h1 align="center">
<b>Char in C</b>
</h1></div>
<p>
Char is a fundament and most basic data type in C. It is the short form of "Character", and it stores a single character to the letter in memory and uses a single byte of memory. A character can be of two types signed or unsigned.  The range of unsigned char is from 0 to 255, where variable consumes all the 8 bit of memory. In C language value of char is written in a single quote, for example, char name= 'c'.
</p>
<b>
<h4><b><u>How to define and initialize int char in c.</u></b></h4>

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
19</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : char.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to define and initialize character datatype in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>

<span style="color: #888888">//defining and initializing char variable c with value c.</span>
<span style="color: #333399; font-weight: bold">char</span> c<span style="color: #333333">=</span><span style="color: #0044DD">&#39;c&#39;</span>;

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;The value of character C is = %c&quot;</span>, c);
}
</pre></td></tr></table></div>



</div>
</pre>

<br>

<h1>Output</h1>

<pre class="prettyprint">
The value of character C is = c
</pre>

</b>
</p>