<div class="data_colour">
<h1 align="center">
<b>Operator in C++</b>
</h1></div>
<p>An operator is a symbol in a programming language which perform a particular mathematics operation or logical operation. C++ language provides the following operators:<p/>
<p>
1.Arithmetic operator<br>
2.Relational operator<br>
3.Logical operator<br>
4.Bitwise operator<br>
5.Assignment operator<br>
6.Misc operator<br>
<p/>


<h4><b><u>Arithmetic operator in c++:</u></b></h4>
<p>An arithmetic operator performs mathematic operator on operands—for example, addition, subtraction, multiplication, division, increment and decrement operation.
<br>The table below shows the following operator with description.<p/>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Operator</th>
      <th scope="col">Description</th>
      <th scope="col">Example (number_One=8,number_Two=4)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">+</th>
      <td>Take two operands and perform addition</td>
      <td>number_One+number_Two=12</td>
    </tr>
    <tr>
      <th scope="row">-</th>
      <td>Take two operands and perform substraction</td>
      <td>number_One-number_Two=4</td>
    </tr>
    <tr>
      <th scope="row">*</th>
      <td>Take two operands and perform multiplication</td>
      <td>number_One*number_Two=16</td>
    </tr>
	 <tr>
      <th scope="row">/</th>
      <td>Take two operands and perform division</td>
      <td>number_One/number_Two=2</td>
    </tr>
	 <tr>
      <th scope="row">++</th>
      <td>It is called increment operator it increment the value</td>
      <td>number_One++=9</td>
    </tr>
	 <tr>
      <th scope="row">--</th>
      <td>It is called decrement operator it decrement the value</td>
      <td>number_One -- = 7</td>
    </tr>
  </tbody>
</table>

<h4><b><u>Simple example on aritmatic operator in c++</u></b></h4>
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
33</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : simple-example-using-arithmetic-operator-in-c++.cpp</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Simple example using arithmetic operator in c++</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #333399; font-weight: bold">int</span> num_One <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">8</span>, num_Two <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span>;
<span style="color: #333399; font-weight: bold">int</span> result;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;........................Arithmetic Operator.......................&quot;</span>;
<span style="color: #888888">//Operator (&#39;+&#39;)</span>
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Adding two number with + &quot;</span><span style="color: #333333">&lt;&lt;</span> num_One <span style="color: #333333">+</span> num_Two;
<span style="color: #888888">//Operator (&#39;-&#39;)</span>
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Subtracting two number with + &quot;</span><span style="color: #333333">&lt;&lt;</span> num_One <span style="color: #333333">-</span> num_Two;
<span style="color: #888888">//Operator (&#39;*&#39;)</span>
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Multiplying two number with + &quot;</span><span style="color: #333333">&lt;&lt;</span> num_One <span style="color: #333333">*</span> num_Two;
<span style="color: #888888">//Operator (&#39;/&#39;)</span>
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Dividing two number with + &quot;</span><span style="color: #333333">&lt;&lt;</span>num_One <span style="color: #333333">/</span> num_Two;
<span style="color: #888888">//Operator (++)</span>
num_One<span style="color: #333333">++</span>;
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Increment number with ++ &quot;</span><span style="color: #333333">&lt;&lt;</span> num_One;
<span style="color: #888888">//Operator (--)</span>
num_One<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">8</span>;
num_One<span style="color: #333333">--</span>;
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Decrement number with -- &quot;</span><span style="color: #333333">&lt;&lt;</span> num_One;

}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
........................Arithmetic Operator.......................
Adding two number with + 12
Subtracting two number with + 4
Multiplying two number with + 32
Dividing two number with + 2
Increment number with ++ 9
Decrement number with -- 7
</pre>

<h4><b><u>Relational operator</u></b></h4>
<p>A relational operator checks equality, check if the value of one operand is greater than or less other. <br>The table below shows the following operator with description.</p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Operator</th>
      <th scope="col">Description</th>
      <th scope="col">Example (number_One=8,number_Two=4)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">==</th>
      <td>Check if two operands are equal</td>
      <td>number_One=number_Two(Condition false)</td>
    </tr>
    <tr>
      <th scope="row">!=</th>
      <td>Check if two operands are not equal</td>
      <td>number_One!=number_Two(Condition true)</td>
    </tr>
    <tr>
      <th scope="row">></th>
      <td>Check if operand on left side is greater than operator on right side</td>
      <td>number_One>number_Two(Condition true)</td>
    </tr>
	 <tr>
      <th scope="row"><</th>
      <td>Check if operand on right side is greater than operator on left side</td>
      <td>number_One(<)number_Two(Condition false)</td>
    </tr>
	 <tr>
      <th scope="row"><=</th>
      <td>Check if operand on right side is greater than or equal to the operator on left side</td>
      <td>number_One(<=)number_Two(Condition false)</td>
    </tr>
	 <tr>
      <th scope="row">>=</th>
      <td>Check if operand on left side is greater than or equal to the operator on right side</td>
      <td>number_One>=num_Two(Condition false)</td>
    </tr>
  </tbody>
</table>
<h4><b><u>Simple example on relational operator in c++</u></b></h4>
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
40
41
42
43
44
45
46
47</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : simple-example-on-relational-operator-in-c++.cpp</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Simple example on relational operator in c++</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #333399; font-weight: bold">int</span> num_One<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">8</span>,num_Two<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">4</span>;
<span style="color: #333399; font-weight: bold">int</span> result;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;........................Relational Operator.......................&quot;</span>;
<span style="color: #888888">/*</span>
<span style="color: #888888"> * In this program</span>
<span style="color: #888888"> * we will check several conditions using a relational operator</span>
<span style="color: #888888"> * number one =8</span>
<span style="color: #888888"> * number two =4</span>
<span style="color: #888888"> * */</span>
<span style="color: #888888">//if number one is equal to number two.....(num_One=8 num_Two=4)</span>
<span style="color: #008800; font-weight: bold">if</span>(num_One<span style="color: #333333">==</span>num_Two){
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Number one and number two are equal&quot;</span>;
}
<span style="color: #888888">//if number one is not equal to number two.....(num_One=8 num_Two=4)</span>
<span style="color: #008800; font-weight: bold">if</span>(num_One<span style="color: #333333">!=</span>num_Two){
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Number one and number two are not equal&quot;</span>;
}
<span style="color: #888888">//if number one is less than number two.....(num_One=8 num_Two=4)</span>
<span style="color: #008800; font-weight: bold">if</span>(num_One<span style="color: #333333">&lt;</span>num_Two){
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Number one is less than number two&quot;</span>;
}
<span style="color: #888888">//if number one is greater then number two.....(num_One=8 num_Two=4)</span>
<span style="color: #008800; font-weight: bold">if</span>(num_One<span style="color: #333333">&gt;</span>num_Two){
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Number one is greater than number two&quot;</span>;
}
<span style="color: #888888">//if number one is less than or equal to number two.....(num_One=8 num_Two=4)</span>
<span style="color: #008800; font-weight: bold">if</span>(num_One<span style="color: #333333">&lt;=</span>num_Two){
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Number one is less or equal to number two&quot;</span>;
}
<span style="color: #888888">//if number one is greater than or equal to number two.....(num_One=8 num_Two=4)</span>
<span style="color: #008800; font-weight: bold">if</span>(num_One<span style="color: #333333">&gt;=</span>num_Two){
cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Number one is greater or equal to number two&quot;</span>;
}
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
........................Relational Operator.......................
Number one and number two are not equal
Number one is greater than number two
Number one is greater or equal to number two
</pre>
<h4><b><u>Logical Operator</u></b></h4>
<p>Logical operators don't perform any specific mathematical operator. It is an expression which contains a logical operator which return either true or false like relational operator.
<br>The table below shows the following operator with description.</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Operator</th>
      <th scope="col">Description</th>
      <th scope="col">Example (num_On=8,num_Two=4)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">&&</th>
      <td>(AND) Check if two statements or operands satisfy any condition</td>
      <td>num_One=8&&statement_Two=4 (both of the condition needs to be true) </td>
    </tr>
    <tr>
      <th scope="row">||</th>
      <td>(OR) Check if one of the two statements or operands satisfy any condition</td>
      <td>number_Onenumber=8||num_Two=4(one of the condition needs to be true)</td>
    </tr>
    <tr>
      <th scope="row">!</th>
      <td>It is used to perform logical it is used to reverse the state of condition</td>
      <td>!(number_One>number_Two)</td>
    </tr>	 
  </tbody>
</table>
<h4><b><u>Simple example using logical operator in c++</u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
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
<span style="color: #888888"> Name        : simple-example-using-logical-operator-in-c++.cpp</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Simple example using logical operator in c++</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;iostream&gt;</span>
<span style="color: #008800; font-weight: bold">using</span> <span style="color: #008800; font-weight: bold">namespace</span> std;
<span style="color: #333399; font-weight: bold">int</span> num_One <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">8</span>, num_two <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span>;
<span style="color: #333399; font-weight: bold">int</span> result;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
	<span style="color: #008800; font-weight: bold">if</span> ((num_One <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">8</span>) <span style="color: #333333">&amp;&amp;</span> (num_two <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">4</span>)) {
		cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Number one is equal to number 8 and number two is equal to 4 thats why this conditon is true both condition must be true&quot;</span>;
	}
	<span style="color: #008800; font-weight: bold">if</span> ((num_One <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">8</span>) <span style="color: #333333">||</span> (num_two <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span>)) {
		cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Number one is equal to number 8 and number two is equal to 4 One of the condition must be true&quot;</span>;
	}
	<span style="color: #008800; font-weight: bold">if</span> (<span style="color: #333333">!</span>(num_One <span style="color: #333333">==</span> num_two)) {
		cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Reversing the logical state or result of expression&quot;</span>;
	}
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Number one is equal to number 8 and number two is equal to 4 thats why this conditon is true both condition must be true
Number one is equal to number 8 and number two is equal to 4 One of the condition must be true
Reversing the logical state of expression
</pre>

<h4><b><u>Assignment Operator in c++</u></b></h4>
<p>The assignment operator is used to assigning values.
<br>The table below shows the following assignment operator with the description.</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Operator</th>
      <th scope="col">Description</th>
      <th scope="col">Example</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">=</th>
      <td>simple assignning operator</td>
      <td>number_One=2</td>
    </tr>
    <tr>
      <th scope="row">+=</th>
      <td>increment the value and then assign</td>
      <td>number_One+=</td>
    </tr>
    <tr>
      <th scope="row">-=</th>
      <td>decrement the value and then assign</td>
      <td>number_One-=</td>
    </tr>
	 <tr>
      <th scope="row">/=</th>
      <td>divide the value and then assign</td>
      <td>number_One/=</td>
    </tr>
	 <tr>
      <th scope="row">*=</th>
      <td>multiply the value and then assign</td>
      <td>number_One*=</td>
    </tr>
	 <tr>
      <th scope="row">%=</th>
      <td>taking the modulus and then assign</td>
      <td>number_One%=</td>                                     \
    </tr>
	 <th scope="row"><<=</th>
      <td>bitwise(Left shift the operator and the asssign)</td>
      <td>number_One<<=</td>
    </tr>
	 <th scope="row">>>=</th>
      <td>bitwise(right shift the operator and the asssign)td>
      <td>number_One>>=/td>
    </tr>
	 <th scope="row">&=</th>
      <td>bitwise assignment operator</td>
      <td>number_One&=/td>
    </tr> <th scope="row">^=</th>
      <td>bitwise exclusive OR assignment operator</td>
      <td>number_One^=</td>
    </tr>
	 <th scope="row">|=</th>
      <td>bitwise inclusive OR assignment operator</td>
      <td>number_One|=</td>
    </tr>
  </tbody>
</table>

<h4><b><u> Bitwise operator in c++</u></b></h4>
<p>Bitwise operators are used to works on bits. The binary number is a combination of 0 & 1.<br> The table below shows the binary operator with the description.<p/>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Operator</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">&</th>
      <td>Bitwise mask bits</td>
    </tr>
    <tr>
      <th scope="row">|</th>
      <td>Bitwise set bits</td>
    </tr>
    <tr>
      <th scope="row">^</th>
      <td>Bitwise exclusive OR (XOR)</td>
    </tr>
	 <tr>
      <th scope="row">~</th>
      <td>Bitwise one's compliment</td>
    </tr>
	 <tr>
      <th scope="row"><<</th>
      <td>Bitwise left shift operator</td>
    </tr>
	 <tr>
      <th scope="row">>></th>
      <td>Bitwise right shift operator.</td>
    </tr>
  </tbody>
</table>

<h4><b><u>Misc Operator</u></b></h4>
<p>C++ language also provides some miscellaneous operators used in a language, for example, the ternary operator ( ? ), pointers (n*) and &( return the address of variable).</p>










