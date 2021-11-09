<div class="data_colour">
<h1 align="center">
<b>Pattern printing using operators, nested for-loops and if-statements in c</b>
</h1></div>
<p>There are many patterns which we can design by using operators, nested for loops and if statements.</p>
<h4><b><u>Example (Printing square pattern in c)</u></b></h4>
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
25</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : square-shape-pattern-printing-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Square shape pattern printing in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> i,j,lenght<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">5</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {

	<span style="color: #008800; font-weight: bold">for</span>(i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>; i<span style="color: #333333">&lt;=</span>lenght;i<span style="color: #333333">++</span>){
		<span style="color: #008800; font-weight: bold">for</span>(j<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>;j<span style="color: #333333">&lt;=</span>lenght;j<span style="color: #333333">++</span>){
			<span style="color: #008800; font-weight: bold">if</span>(j<span style="color: #333333">&lt;=</span>lenght){
				printf(<span style="background-color: #fff0f0">&quot;* &quot;</span>);
			}
		}
		printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>);
	}

}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
* * * * * 
* * * * * 
* * * * * 
* * * * * 
* * * * * 
</pre>
<h4><b><u>Example (Printing X pattern in c)</u></b></h4>
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
31</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : x-shape-pattern-printing-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : X shape pattern printing in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #333399; font-weight: bold">int</span> i, j, rows <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">6</span>, length;
	length <span style="color: #333333">=</span> rows <span style="color: #333333">*</span> <span style="color: #0000DD; font-weight: bold">2</span> <span style="color: #333333">-</span> <span style="color: #0000DD; font-weight: bold">1</span>;

	<span style="color: #008800; font-weight: bold">for</span> (i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>; i <span style="color: #333333">&lt;=</span> length; i<span style="color: #333333">++</span>) {
		<span style="color: #008800; font-weight: bold">for</span> (j <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>; j <span style="color: #333333">&lt;=</span> length; j<span style="color: #333333">++</span>) {
			<span style="color: #008800; font-weight: bold">if</span> (j <span style="color: #333333">==</span> i <span style="color: #333333">||</span> j <span style="color: #333333">==</span> length <span style="color: #333333">-</span> i <span style="color: #333333">+</span> <span style="color: #0000DD; font-weight: bold">1</span>)
				printf(<span style="background-color: #fff0f0">&quot; *&quot;</span>);

			printf(<span style="background-color: #fff0f0">&quot; &quot;</span>);

		}

		printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>);

	}

}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 *         * 
  *       *  
   *     *   
    *   *    
     * *     
      *     
     * *     
    *   *    
   *     *   
  *       *  
 *         * 
</pre>
<h4><b><u>Example (Printing z pattern in c)</u></b></h4>
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
28</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : z-shape-pattern-printing-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : z shape pattern printing in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> i, j;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #008800; font-weight: bold">for</span> (i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>; i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">8</span>; i<span style="color: #333333">++</span>) {
		<span style="color: #008800; font-weight: bold">for</span> (j <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>; j <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">8</span>; j<span style="color: #333333">++</span>) {
			<span style="color: #008800; font-weight: bold">if</span> (i <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">1</span> <span style="color: #333333">||</span> i <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">8</span> <span style="color: #333333">||</span> j <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">9</span> <span style="color: #333333">-</span> i) {
				printf(<span style="background-color: #fff0f0">&quot;*&quot;</span>);
			} <span style="color: #008800; font-weight: bold">else</span> {
				printf(<span style="background-color: #fff0f0">&quot; &quot;</span>);
			}

		}

		printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>);

	}
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
********
      * 
     *  
    *   
   *    
  *     
 *      
********
</pre>
<h4><b><u>Example(Triangle pattern in c)</u></b></h4>
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
23</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : triangle-shape-pattern-printing-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : triangle shape pattern printing in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> i, j;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #008800; font-weight: bold">for</span> (i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>; i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">8</span>; i<span style="color: #333333">++</span>) {
		<span style="color: #008800; font-weight: bold">for</span> (j <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>; j <span style="color: #333333">&lt;=</span> i; j<span style="color: #333333">++</span>) {
			printf(<span style="background-color: #fff0f0">&quot; *&quot;</span>);
		}

		printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>);

	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 *
 * *
 * * *
 * * * *
 * * * * *
 * * * * * *
 * * * * * * *
 * * * * * * * *
</pre>
<h4><b><u>Pyramid shape in c</u></b></h4>
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
27</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : pyramid-shape-pattern-printing-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : pyramid shape pattern printing in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> i,dots,counter<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">0</span>;
<span style="color: #333399; font-weight: bold">int</span> rows<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">5</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	   <span style="color: #008800; font-weight: bold">for</span> (i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>; i <span style="color: #333333">&lt;=</span> rows; <span style="color: #333333">++</span>i, counter <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>) {
	      <span style="color: #008800; font-weight: bold">for</span> (dots <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>; dots <span style="color: #333333">&lt;=</span> rows <span style="color: #333333">-</span> i; <span style="color: #333333">++</span>dots) {
	         printf(<span style="background-color: #fff0f0">&quot;  &quot;</span>);
	      }
	      <span style="color: #008800; font-weight: bold">while</span> (counter <span style="color: #333333">!=</span> <span style="color: #0000DD; font-weight: bold">2</span> <span style="color: #333333">*</span> i <span style="color: #333333">-</span> <span style="color: #0000DD; font-weight: bold">1</span>) {
	         printf(<span style="background-color: #fff0f0">&quot;* &quot;</span>);
	         <span style="color: #333333">++</span>counter;
	      }
	      printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>);
	   }
	   <span style="color: #008800; font-weight: bold">return</span> <span style="color: #0000DD; font-weight: bold">0</span>;
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
        * 
      * * * 
    * * * * * 
  * * * * * * * 
* * * * * * * * * 
</pre>