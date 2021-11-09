<div class="data_colour">
<h1 align="center">
<b>Float in C++</b>
</h1></div>
<p>
A Float in C++ is a number which has a fractional part or decimal place. It is the short term of floating-point. It can be either positive or negative. Example of the float is 37.5. 
</p>
<h4><b><u>Float data types and Sizes:</u></b></h4>
<p>In C++ programming language we can use float, double and long double for integer type variables. The storage size of int datatypes can be of 4, 8 or 16 bytes.
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
      <td>float</td>
      <td>4 bytes</td>
      <td>4 bytes</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>long</td>
      <td>8 bytes</td>
      <td>8 bytes</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>double long</td>
      <td>16 bytes</td>
      <td>16 bytes</td>
    </tr>
  </tbody>
</table><br>
<h4><b><u>How to define and initialize float datatype in c++.</u></b></h4>
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
15</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//============================================================================</span>
<span style="color: #888888">// Name        : defining-and-initializing-float-data-types-in-c++.cpp</span>
<span style="color: #888888">// Author      : CodingSlice</span>
<span style="color: #888888">// Version     :</span>
<span style="color: #888888">// Copyright   : Your copyright notice</span>
<span style="color: #888888">// Description : How to define and initialize float data types in C++</span>
<span style="color: #888888">//============================================================================</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #888888">//defining and initializing float</span>
<span style="color: #333399; font-weight: bold">float</span> number<span style="color: #333333">=</span><span style="color: #6600EE; font-weight: bold">37.5</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;The value of float number is =:&quot;</span><span style="color: #333333">&lt;&lt;</span>number;
}
</pre></td></tr></table></div>

</div>
</pre>
<br>
<h1>Output</h1>

<pre class="prettyprint">

The value of float number is =37.500000
</pre>
</b>
</p>