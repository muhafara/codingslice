<div class="data_colour">
<h1 align="center">
<b>Functions example's in C Program</b>
</h1></div>
<p></p>
<h4><b><u>Simple example of calculator program using function</u></b></h4>
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
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : simple-example-of-calculator-app-using-functions-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Simple example of calculator app using function in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> num_One, num_two, result;
<span style="color: #333399; font-weight: bold">char</span> op;
<span style="color: #888888">//Function to add two numbers</span>
<span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">add</span>() {
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Function to add number is calling.............&quot;</span>);
	result <span style="color: #333333">=</span> num_One <span style="color: #333333">+</span> num_two;
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of two numbers after addition = %d&quot;</span>, result);
}

<span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">subs</span>() {
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Function to subs numbers is calling.............&quot;</span>);
	result <span style="color: #333333">=</span> num_One <span style="color: #333333">-</span> num_two;
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of two number after subtraction = %d&quot;</span>, result);
}

<span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">mul</span>() {
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Function to multiply numbers is calling.............&quot;</span>);
	result <span style="color: #333333">=</span> num_One <span style="color: #333333">*</span> num_two;
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of two number after multiplication = %d&quot;</span>, result);
}

<span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">divi</span>() {
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Function to divide numbers is calling.............&quot;</span>);
	result <span style="color: #333333">=</span> num_One <span style="color: #333333">/</span> num_two;
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of two number after division = %d&quot;</span>, result);
}
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Enter the first_number&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>num_One);
	printf(<span style="background-color: #fff0f0">&quot;Enter the second_number&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>num_two);
	printf(<span style="background-color: #fff0f0">&quot;Enter the Character +,-,*,/&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %c&quot;</span>, <span style="color: #333333">&amp;</span>op);

	<span style="color: #888888">///Using if-statement to call functions depends upon the character</span>
	<span style="color: #888888">//if char = +</span>
	<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;+&#39;</span>) {
		add();
	}
	<span style="color: #888888">//if char = -</span>
	<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;-&#39;</span>) {
		subs();
	}
	<span style="color: #888888">//if char = *</span>
	<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;*&#39;</span>) {
		mul();
	}
	<span style="color: #888888">//if char = /</span>
	<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;/&#39;</span>) {
		divi();
	}

}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
Enter the first_number4
Enter the second_number5
Enter the Character +,-,*,/+

Function to add number is calling.............
The result of two numbers after
</pre>
<h4><b><u>Another example of calculator program using function arguments and return type</u></b></h4>
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
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : calculator-program-using-function-arguments-and-return-type.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : calculator program using function argument and return type</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> num_One, num_two;
<span style="color: #333399; font-weight: bold">char</span> op;

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">add</span>(<span style="color: #333399; font-weight: bold">int</span> one, <span style="color: #333399; font-weight: bold">int</span> two) {
	<span style="color: #333399; font-weight: bold">int</span> result;
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Function to add number is calling.............&quot;</span>);
	result <span style="color: #333333">=</span> one <span style="color: #333333">+</span> two;
	<span style="color: #008800; font-weight: bold">return</span> result;
}

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">subs</span>(<span style="color: #333399; font-weight: bold">int</span> one, <span style="color: #333399; font-weight: bold">int</span> two) {
	<span style="color: #333399; font-weight: bold">int</span> result;
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Function to subtract number is calling.............&quot;</span>);
	result <span style="color: #333333">=</span> one <span style="color: #333333">-</span> two;
	<span style="color: #008800; font-weight: bold">return</span> result;
}

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">mult</span>(<span style="color: #333399; font-weight: bold">int</span> one, <span style="color: #333399; font-weight: bold">int</span> two) {
	<span style="color: #333399; font-weight: bold">int</span> result;
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Function to multiply number is calling.............&quot;</span>);
	result <span style="color: #333333">=</span> one <span style="color: #333333">*</span> two;
	<span style="color: #008800; font-weight: bold">return</span> result;
}

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">divi</span>(<span style="color: #333399; font-weight: bold">int</span> one, <span style="color: #333399; font-weight: bold">int</span> two) {
	<span style="color: #333399; font-weight: bold">int</span> result;
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Function to multiply number is calling.............&quot;</span>);
	result <span style="color: #333333">=</span> one <span style="color: #333333">/</span> two;
	<span style="color: #008800; font-weight: bold">return</span> result;
}

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Enter the first_number&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>num_One);
	printf(<span style="background-color: #fff0f0">&quot;Enter the second_number&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>num_two);
	printf(<span style="background-color: #fff0f0">&quot;Enter the Character +,-,*,/&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %c&quot;</span>, <span style="color: #333333">&amp;</span>op);

	<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;+&#39;</span>) {
		printf(<span style="background-color: #fff0f0">&quot;The addition of two numbers is = %d&quot;</span>, add(num_One, num_two));
	}

	<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;-&#39;</span>) {
		printf(<span style="background-color: #fff0f0">&quot;The subtraction of two numbers is = %d&quot;</span>, subs(num_One,num_two));
	}

	<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;*&#39;</span>) {
		printf(<span style="background-color: #fff0f0">&quot;The multiplication of two number is = %d&quot;</span>, mult(num_One, num_two));
	}

	<span style="color: #008800; font-weight: bold">if</span> (op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;/&#39;</span>) {
		printf(<span style="background-color: #fff0f0">&quot;The division of two numbers is = %d&quot;</span>, divi(num_One,num_two));
	}
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Enter the first_number5
Enter the second_number5
Enter the Character +,-,*,/

Function to multiply number is calling.............The multiplication of two number is = 25
</pre>
