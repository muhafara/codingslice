<div class="data_colour">
<h1 align="center">
<b>ASCII Codes in C++</b>
</h1></div>
<p>ASCII abbreviates "American standard code for information interchange". Electronic communication used these ASCII codes to represent text in electronic devices and for character coding.
<br>The table below shows "ASCII Codes" including hex, decimal and character.</p>
<p>
ascii-image;
<h4><b><u>How to print English capital alphabets using ascii tables</u></b></h4>
<p>In ASCII tables the decimal values of capital alphabets in english starts from 65 to 90</p>
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
16</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//============================================================================</span>
<span style="color: #888888">// Name        : english-capital-alphabets-using-ascii-table-in-c++.cpp</span>
<span style="color: #888888">// Author      : CodingSlice</span>
<span style="color: #888888">// Version     :</span>
<span style="color: #888888">// Copyright   : Your copyright notice</span>
<span style="color: #888888">// Description : How to print English capital alphabets using ASCII tables in C++</span>
<span style="color: #888888">//============================================================================</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #333399; font-weight: bold">int</span> i;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
	<span style="color: #008800; font-weight: bold">for</span>(i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">65</span>;i<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">90</span>;i<span style="color: #333333">++</span>){
			printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The value of ASCII decimal %d, and corresponding value is %c&quot;</span>, i,i);
		}
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
The value of ASCII decimal 65, and corresponding value is A
The value of ASCII decimal 66, and corresponding value is B
The value of ASCII decimal 67, and corresponding value is C
The value of ASCII decimal 68, and corresponding value is D
The value of ASCII decimal 69, and corresponding value is E
The value of ASCII decimal 70, and corresponding value is F
The value of ASCII decimal 71, and corresponding value is G
The value of ASCII decimal 72, and corresponding value is H
The value of ASCII decimal 73, and corresponding value is I
The value of ASCII decimal 74, and corresponding value is J
The value of ASCII decimal 75, and corresponding value is K
The value of ASCII decimal 76, and corresponding value is L
The value of ASCII decimal 77, and corresponding value is M
The value of ASCII decimal 78, and corresponding value is N
The value of ASCII decimal 79, and corresponding value is O
The value of ASCII decimal 80, and corresponding value is P
The value of ASCII decimal 81, and corresponding value is Q
The value of ASCII decimal 82, and corresponding value is R
The value of ASCII decimal 83, and corresponding value is S
The value of ASCII decimal 84, and corresponding value is T
The value of ASCII decimal 85, and corresponding value is U
The value of ASCII decimal 86, and corresponding value is V
The value of ASCII decimal 87, and corresponding value is W
The value of ASCII decimal 88, and corresponding value is X
The value of ASCII decimal 89, and corresponding value is Y
The value of ASCII decimal 90, and corresponding value is Z
</pre>

