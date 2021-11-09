<div class="data_colour">
<h1 align="center">
<b>Simple C++ Program</b>
</h1></div>
<p>
In every c++ program, we might have seen a declaration called using namespace std, which means we add some declarations in our programs like functions, name of the types and variable. By witing namespace std, we add all the declaration in our program, which is considered a bad practice. We need to include using namespace std which moved all the functionality into the standard library so don't need to write std::cout every time in the program we only need to write "cout".
</p>
<br>
<p>
In every C++ programs, we need to include the headers files by typing # include iostream which tells the compiler to have the standard C++ libraries, allowing programmers to perform standard input and output operations.s
</p>
<br>
<p>
 In every C++ program, we need the main program, the starting point of any program, and the main function's body with starting and ending brackets { }. The keyword main is a reserved keyword in c++.
</p>
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
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//============================================================================</span>
<span style="color: #888888">// Name        : simple-hello-world-program-in-c++.cpp</span>
<span style="color: #888888">// Author      : CodingSlice</span>
<span style="color: #888888">// Version     :</span>
<span style="color: #888888">// Copyright   : Your copyright notice</span>
<span style="color: #888888">// Description : simple hello world program in c++</span>
<span style="color: #888888">//============================================================================</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
	cout<span style="color: #333333">&lt;</span><span style="background-color: #fff0f0">&quot;Hello world!&quot;</span>;
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Hello world!
</pre>