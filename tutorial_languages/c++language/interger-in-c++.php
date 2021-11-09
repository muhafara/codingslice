
<div class="data_colour">
<h1 align="center">
<b>Integer in C++</b>
</h1></div>
<p>
An Integer is a whole number. It has no fractional part, and it can either be positive or negative. An integer can be a single digit, zero or it could be the value of something all of these numbers are called integers. Some of the examples of the integer are 0, 15, -87 etc. In c language, we use "int" to define and declaring a variable. Integer allows us to store a numeric value for the variable. 
</p>
<h4><b><u>Integer data types and Sizes:</u></b></h4>
<p>In C++ programming language we can use short, int and long for integer type variables. The storage size of int datatypes can be of 2, 4 or 8 bytes.
</p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Type Name</th>
      <th scope="col">32-bit</th>
      <th scope="col">64-bit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>short</td>
      <td>2 bytes</td>
      <td>2 bytes</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>int</td>
      <td>4 bytes</td>
      <td>4 bytes</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>long</td>
      <td>8 bytes</td>
      <td>8 bytes</td>
    </tr>
  </tbody>
</table>
<br>
<h4><b><u>How to define and initialize int datatype in c++.</u></b></h4>
<br>
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
20</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//============================================================================</span>
<span style="color: #888888">// Name        : defining-and-initializing-int-data-types-in-c++.cpp</span>
<span style="color: #888888">// Author      : CodingSlice</span>
<span style="color: #888888">// Version     :</span>
<span style="color: #888888">// Copyright   : Your copyright notice</span>
<span style="color: #888888">// Description : How to define and initialize integer data types in C++</span>
<span style="color: #888888">//============================================================================</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #888888">//Inline number 12 we declared an int type variable named &quot;num&quot;, but we haven&#39;t initialized it.</span>
<span style="color: #333399; font-weight: bold">int</span> num;
<span style="color: #888888">//Inline number 14 we declared and initialized an int type variable named &quot;num2&quot;.</span>
<span style="color: #333399; font-weight: bold">int</span> num2<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">5</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
	<span style="color: #888888">//initilization num in the main menu</span>
	num<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">2</span>;
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;The integer type num is :&quot;</span><span style="color: #333333">&lt;&lt;</span>num<span style="color: #333333">&lt;&lt;</span>endl;
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;The integer type num2 is:&quot;</span><span style="color: #333333">&lt;&lt;</span>num2;
}
</pre></td></tr></table></div>

</div>
</pre>

<h1>Output</h1>

<pre class="prettyprint">
The integer type num is :2
The integer type num2 is:5
</pre>

</b>
</p>