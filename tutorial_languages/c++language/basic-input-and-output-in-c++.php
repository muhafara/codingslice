<div class="data_colour">
<h1 align="center">
<b>Basic input and output using cin and cout</b>
</h1></div>
<p>
For primary input and output in c++, we used two predefined objects that used stream concept: the byte sequence or flow of data. In every c++ program, we need to include "iostream" for primary input and output purposes. These headers files in c++ program contain definitions of essential operation like cin and cout. 
</p>
<h4><b><u>Cin</u></b></h4>
<p>Cin is the object of class "istream". It is used to take basic input through the standard input device like a keyboard in c++ programs. It is correlated with stdin standard input stream</p>
<h4><b><u>Cout</u></b></h4>
<p>Cout is the object of class "ostream". It is used to print or show data on the standard output device like monitors. It is correlated with stdout standard out stream.</p>
<h4><b><u>Simple Example(How to print and get data using cin and cout in c++)</u></b></h4>
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
17</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : how-to-display-and-get-data-using-cin-and-cout-in-c++.cpp</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to display and get data using cin and cout</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>
<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
string name;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(){
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;Enter the name</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>;
	cin<span style="color: #333333">&gt;&gt;</span>name;
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Greetings, &quot;</span><span style="color: #333333">&lt;&lt;</span>name;
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Enter the name
codingslice

Greetings, codingslice
</pre>