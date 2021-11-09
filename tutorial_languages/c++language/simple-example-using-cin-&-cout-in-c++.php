<div class="data_colour">
<h1 align="center">
<b>Simple example using Cin and Cout</b>
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
38
39
40</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : simple-example-using-cin-and-cout-in-c++.cpp</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : simple example using datatypes with using cin and cout</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>
<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #333399; font-weight: bold">int</span> number;
<span style="color: #333399; font-weight: bold">char</span> character;
<span style="color: #333399; font-weight: bold">float</span> decimal;
string name;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(){
	<span style="color: #888888">////////Input and output of integer using cin and cout</span>
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;Enter the number</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>;
	cin<span style="color: #333333">&gt;&gt;</span>number;
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Integer number is = &quot;</span><span style="color: #333333">&lt;&lt;</span>number<span style="color: #333333">&lt;&lt;</span>endl;
	<span style="color: #888888">////////////////////End////////////////////////////////////</span>

	<span style="color: #888888">////////Input and output of Character using cin and cout</span>
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;Enter the character</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>;
	cin<span style="color: #333333">&gt;&gt;</span>character;
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Character number is = &quot;</span><span style="color: #333333">&lt;&lt;</span>character<span style="color: #333333">&lt;&lt;</span>endl;
	<span style="color: #888888">////////////////////End////////////////////////////////////</span>

	<span style="color: #888888">////////Input and output of integer using cin and cout</span>
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;Enter the float</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>;
	cin<span style="color: #333333">&gt;&gt;</span>decimal;
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Float number is = &quot;</span><span style="color: #333333">&lt;&lt;</span>decimal<span style="color: #333333">&lt;&lt;</span>endl;
	<span style="color: #888888">////////////////////End////////////////////////////////////</span>

	<span style="color: #888888">////////Input and output of string using cin and cout</span>
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;Enter the name</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>;
	cin<span style="color: #333333">&gt;&gt;</span>name;
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;\Name is = &quot;</span><span style="color: #333333">&lt;&lt;</span>name<span style="color: #333333">&lt;&lt;</span>endl;
	<span style="color: #888888">////////////////////End///////////////////////////////2/////</span>
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Enter the number
2

Integer number is = 2
Enter the character
w

Character is = w
Enter the float
3

Float number is = 3.0
Enter the name
hello
Name is = hello
</pre>