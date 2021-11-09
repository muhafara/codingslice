
<div class="data_colour">
<h1 align="center">
<b><u>do while-loop in C++</u></b>
</h1></div>
<p>In C++ language "do" is also a reserved keyword. The do-while loop is a sort of upside-down while loop. In this loop the condition is checked after entering or executing the body of the loop; it is also known as post-entry checked loops. The structure of "do while-loop" starts with the keyword "do" and then the body of do while-loops starts and ends with curly brackets { } and then keyword while along with condition inside the parenthesis ().</p>
<img src="\images\imagetwelve.png" class="img-responsive" alt="Cinque Terre">
<p>The difference between while loops and do-while loops are:</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">While-Loop</th>
      <th scope="col">Do while-Loop</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>While-loop is a type of entry-control loop also called pre-entry checked loop.</td>
      <td>Do while-loop is a type of exit-control loop also called post-entry checked loop.</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>While loop condition is checked before entering the body of a loop or before iteration starts.</td>
      <td>Do while-loop condition is checked after entering the body of a loop or after iteration starts.
</td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>While loop begins with the keyword "while".</td>
      <td>Do while-loop begin with the keyword "do".</td>
    </tr>
  </tbody>
</table>
<h4><b><u>Simple example (How to print number from 1 to 10 using do while-loop) in C++</u></b></h4>
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
19</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : simple-example-using-do-while-loop-in-c++.cpp</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : simple program using do while loop in c++</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(){
	<span style="color: #008800; font-weight: bold">do</span>{
		cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot; </span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\t</span><span style="background-color: #fff0f0">&quot;</span> <span style="color: #333333">&lt;&lt;</span>i;
		i<span style="color: #333333">++</span>;
	}<span style="color: #008800; font-weight: bold">while</span>(i<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">10</span>);
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 1	 2	 3	 4	 5	 6	 7	 8	 9	 10	
</pre>
<h4><b><u>How to print Fibonacci numbers using do while-loop in c++</u></b></h4>
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
24</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : how-to-print-fibonacci-number-using-do-while-loop-in-c++.cpp</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to print finonacci number using do while-loop in c++</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #333399; font-weight: bold">int</span> pre_Number <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>, next_Number <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>, new_Number, i;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(){
	<span style="color: #888888">//printing first two number of fibonacii series</span>
			cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot; &quot;</span><span style="color: #333333">&lt;&lt;</span> pre_Number<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot; &quot;</span><span style="color: #333333">&lt;&lt;</span> next_Number;
		<span style="color: #008800; font-weight: bold">do</span> {
			new_Number <span style="color: #333333">=</span> pre_Number <span style="color: #333333">+</span> next_Number;
			cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot; &quot;</span><span style="color: #333333">&lt;&lt;</span> new_Number;
			pre_Number <span style="color: #333333">=</span> next_Number;
			next_Number <span style="color: #333333">=</span> new_Number;
			i<span style="color: #333333">++</span>;
		} <span style="color: #008800; font-weight: bold">while</span> (i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">10</span>);
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 0 1 1 2 3 5 8 13 21 34 55 89 144
</pre>
<div class="data_colour">
<h1 align="center">
<b><u>Nested do while-loop</u></b>
</h1></div>
<p>Nested do while-loops is a loop within the body of the do while-loop. The first loops are called "outer-loop" and loops inside the body of "outer-loops" is called "inner-loop". The inner loop repeats itself until the outer loop finished. The inner loop repeats itself every time for one value of outer loops.</p>
<h4><b><u>Simple program using nested do while-loop</u></b></h4>
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
<span style="color: #888888"> Name        : simple-program-using-nested-do-while-loop-in-c++.cpp</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : simple program using nested do while-loop in c++</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #333399; font-weight: bold">int</span> i,j;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
	<span style="color: #008800; font-weight: bold">do</span> {
		<span style="color: #008800; font-weight: bold">do</span> {
			cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">This is the value of inner loop &quot;</span><span style="color: #333333">&lt;&lt;</span> j;
			j<span style="color: #333333">++</span>;
		} <span style="color: #008800; font-weight: bold">while</span> (j <span style="color: #333333">&lt;=</span> i);
		cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">This is the value of outer loop &quot;</span><span style="color: #333333">&lt;&lt;</span> i;
		i<span style="color: #333333">++</span>;
	} <span style="color: #008800; font-weight: bold">while</span> (i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">10</span>);
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
This is the value of inner loop 0
This is the value of outer loop 0
This is the value of inner loop 1
This is the value of outer loop 1
This is the value of inner loop 2
This is the value of outer loop 2
This is the value of inner loop 3
This is the value of outer loop 3
This is the value of inner loop 4
This is the value of outer loop 4
This is the value of inner loop 5
This is the value of outer loop 5
This is the value of inner loop 6
This is the value of outer loop 6
This is the value of inner loop 7
This is the value of outer loop 7
This is the value of inner loop 8
This is the value of outer loop 8
This is the value of inner loop 9
This is the value of outer loop 9
This is the value of inner loop 10
This is the value of outer loop 10
</pre>