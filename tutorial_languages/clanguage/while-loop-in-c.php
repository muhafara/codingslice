
<div class="data_colour">
<h1 align="center">
<b><u>while loop</u></b>
</h1></div>
<p>In C language "while" is also a reserved keyword.  In "while loop" condition is checked before entering or before execution the body of loops; hence it is also called "entry control or pre-entry loop". Whenever a condition is true, the repetition inside of the body of a loop is executed. Loop consists of keyword "while" along with the condition inside the parenthesis (), then the body of loop starts and ends with curly brackets { }.</p>
<img src="\images\imageeleven.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example (How to print number from 1 to 10 using while-loop)</u></b></h4>
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
21</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : how-to-print-numbers-from-1-to-10-using-while-loop.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to print numbers from 1 to 10 using while loops</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">//declaring integer type variable to print a number</span>
<span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #888888">//while loop</span>
	<span style="color: #008800; font-weight: bold">while</span>(i<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">10</span>){
		printf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, i);
		i<span style="color: #333333">++</span>;
	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 1 2 3 4 5 6 7 8 9 10
</pre>
<h4><b><u>How to print even number using while-loop in c:</u></b></h4>
<p>Even numbers are those numbers which are entirely divisible with 2. In this program, we will use the remainder operator to check if the number is altogether divisible by two or not.</p>
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
21</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : how-to-print-even-number-using-while-loop-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to print even number using while loop</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #008800; font-weight: bold">while</span> (i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">10</span>) {
		<span style="color: #008800; font-weight: bold">if</span> (i <span style="color: #333333">%</span> <span style="color: #0000DD; font-weight: bold">2</span> <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">0</span>) {
			printf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, i);
		}
		i<span style="color: #333333">++</span>;
	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 2 4 6 8 10
</pre>
<h4><b><u>How to print odd number using while-loop in c:</u></b></h4>
<p>Odd numbers are those numbers which are entirely divisible with 3. In this program, we will use the remainder operator to check if the number is altogether divisible by three or not.</p>
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
<span style="color: #888888"> Name        : how-to-print-odd_number-using-while-loop-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to print odd number using while loop</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>

<span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #008800; font-weight: bold">while</span> (i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">10</span>) {
		<span style="color: #008800; font-weight: bold">if</span> (i <span style="color: #333333">%</span> <span style="color: #0000DD; font-weight: bold">2</span> <span style="color: #333333">!=</span> <span style="color: #0000DD; font-weight: bold">0</span>) {
			printf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, i);
		}
		i<span style="color: #333333">++</span>;
	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 1 3 5 7 9
</pre>
<div class="data_colour">
<h1 align="center">
<b><u>Nested while loop</u></b>
</h1></div>
<p>Nested while-loops is a loop within the body of the while-loop. The first loops are called "outer-loop" and loops inside the body of "outer-loops" is called "inner-loop". The inner loop repeats itself until the outer loop finished. The inner loop repeats itself every time for one value of outer loops.</p>
<h4><b><u>Simple program using nested while-loop</u></b></h4>
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
25</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : simple-program-using-nested-while-loop.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Simple program using nested while loop</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> i, j;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #888888">//outer while loop</span>
	<span style="color: #008800; font-weight: bold">while</span> (i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">5</span>) {
		<span style="color: #888888">//inner while loop</span>
		<span style="color: #008800; font-weight: bold">while</span> (j <span style="color: #333333">&lt;=</span> i) {
			printf(<span style="background-color: #fff0f0">&quot; </span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">This is the value of inner loops %d &quot;</span>, j);
			j<span style="color: #333333">++</span>;
		}
		printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">This is the value of outer loop %d &quot;</span>, i);
		i<span style="color: #333333">++</span>;
	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 
This is the value of inner loops 0 
This is the value of outer loop 0  
This is the value of inner loops 1 
This is the value of outer loop 1  
This is the value of inner loops 2 
This is the value of outer loop 2  
This is the value of inner loops 3 
This is the value of outer loop 3  
This is the value of inner loops 4 
This is the value of outer loop 4  
This is the value of inner loops 5 
This is the value of outer loop 5 
</pre>
<h4><b><u>How to print prime numbers using nested while-loop</u></b></h4>
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
30</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : how-to-print-prime-numbers-using-nested-while-loop.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to print prime numbers using nested while loop</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">2</span>, count,j;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	count<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">2</span>;
	<span style="color: #008800; font-weight: bold">while</span> (count <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">20</span>) {
		j<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">2</span>;
		<span style="color: #008800; font-weight: bold">while</span> (j<span style="color: #333333">&lt;=</span>i<span style="color: #333333">-</span><span style="color: #0000DD; font-weight: bold">1</span>) {
			<span style="color: #008800; font-weight: bold">if</span> (i <span style="color: #333333">%</span> j <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">0</span>){
				<span style="color: #008800; font-weight: bold">break</span>;
			}
			j<span style="color: #333333">++</span>;
		}
		<span style="color: #008800; font-weight: bold">if</span>(j<span style="color: #333333">==</span>i){
			printf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, i);
			count<span style="color: #333333">++</span>;
		}
		i<span style="color: #333333">++</span>;
	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 2 3 5 7 11 13 17 19 23 29 31 37 41 43 47 53 59 61 67
</pre>