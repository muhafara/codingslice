<div class="data_colour">
<h1 align="center">
<b>String in C++</b>
</h1></div>
<p>String in c++ is the objects that represent collections of character which is used to store the text. The string class provides support to work with a bunch of bytes. In C++ to use the string data type, the C++ string header must be included at the program's top, and most importantly we need to have using namespace std; to make the short name string visible instead of requiring the cumbersome std::string. Std is a C++ namespace for many pieces of functionality that are provided in standard C++ libraries. We would have the following # include's in our program to use the string type.<p/>
<h4><b><u>How to define and initialize string in C++</u></b></h4>
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
<span style="color: #888888"> Name        : string-in-c++.cpp</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : simple example using string in c++</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>
<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #888888">//////////////Defining the string///////////////////////////////////////</span>
string one;
<span style="color: #888888">/////////////Defining and initializing the string//////////////////////</span>
string two<span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;Hello&quot;</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(){
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;Enter the first string&quot;</span><span style="color: #333333">&lt;&lt;</span>endl;
	cin<span style="color: #333333">&gt;&gt;</span>one;
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;first string is &quot;</span><span style="color: #333333">&lt;&lt;</span>one<span style="color: #333333">&lt;&lt;</span>endl;
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;second string is &quot;</span><span style="color: #333333">&lt;&lt;</span>two;

}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Enter the first string
name
first string is name
second string is Hello
</pre>