<div class="data_colour">
<h1 align="center">
<b>Enumerated data type(Enum) in C++</b>
</h1></div>
<p>Enumerated data types also referred to as "enum". It holds constant values which can not be changed. Reserved keyword "enum" is used To define these types of data types.</p>
<h4><b><u>Enum</u></b></h4>
<p>In "C++ language" enum is used to defined the variables of types "enum". It is used to designates values to necessary constants. It makes the program easy to read.</p>
<img src="\images\imagetwenty.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>How to define enum data types in C++:</u></b></h4>
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
18</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//============================================================================</span>
<span style="color: #888888">// Name        : defining-and-initializing-enum-data-types-in-c++.cpp</span>
<span style="color: #888888">// Author      : CodingSlice</span>
<span style="color: #888888">// Version     :</span>
<span style="color: #888888">// Copyright   : Your copyright notice</span>
<span style="color: #888888">// Description : How to define and initialize enum data types in C++</span>
<span style="color: #888888">//============================================================================</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #888888">//defining and initializing enum</span>
<span style="color: #008800; font-weight: bold">enum</span> numbers {one<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>, two<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">2</span>, three<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">3</span>, four<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">4</span>};
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
	<span style="color: #888888">//variable declaration of enum</span>
		<span style="color: #008800; font-weight: bold">enum</span> numbers num;
		num <span style="color: #333333">=</span> two;
		cout<span style="color: #333333">&lt;&lt;</span>num;
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
<h4><b><u>Example (How to print all enum values) in C++</u></b></h4>
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
19</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//============================================================================</span>
<span style="color: #888888">// Name        : defining-and-initializing-enum-data-types-in-c++.cpp</span>
<span style="color: #888888">// Author      : CodingSlice</span>
<span style="color: #888888">// Version     :</span>
<span style="color: #888888">// Copyright   : Your copyright notice</span>
<span style="color: #888888">// Description : How to define and initialize enum data types in C++</span>
<span style="color: #888888">//============================================================================</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #333399; font-weight: bold">int</span> i;
<span style="color: #888888">//defining and initializing enum</span>
<span style="color: #008800; font-weight: bold">enum</span> numbers {one<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>, two<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">2</span>, three<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">3</span>, four<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">4</span>};
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
	<span style="color: #888888">//variable declaration of enum</span>
	<span style="color: #008800; font-weight: bold">for</span>(i<span style="color: #333333">=</span>one; i<span style="color: #333333">&lt;=</span>four;i<span style="color: #333333">++</span>){
		cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;The value of Enum: &quot;</span><span style="color: #333333">&lt;&lt;</span>i<span style="color: #333333">&lt;&lt;</span>endl;
	}
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
The value of Enum: 1
The value of Enum: 2
The value of Enum: 3
The value of Enum: 4
</pre>