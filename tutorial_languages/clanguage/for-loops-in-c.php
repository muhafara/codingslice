<div class="data_colour">
<h1 align="center">
<b><u>for loop</u></b>
</h1></div>
<p>In "C Language" there are many reserved keywords "for" is one of them. "for loop" consist of 4 parts initializing point, exit condition, repetitions or increment and the body of for loop. Initialization is the starting point of for loop; exit condition is limitation or number of repetitions in a loop and to increment or decrement every time in "for loop" increment or decrement operator is used. The syntax of "for loops" is </p>
<img src="\images\imageten.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example (How to print number from 1 to 10 using for loop)</u></b></h4>
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
19</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : how-to-print-number-from-1-to-10-using-for-loop.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to print numbers from 1 to 10 using for loop in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">//declaring a variable to increment</span>
<span style="color: #333399; font-weight: bold">int</span> counter<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #008800; font-weight: bold">for</span>(counter<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>; counter<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">10</span>; counter<span style="color: #333333">++</span>){
		printf(<span style="background-color: #fff0f0">&quot; %d</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>, counter);
	}
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 1
 2
 3
 4
 5
 6
 7
 8
 9
 10
</pre>
<h4><b><u>Simple example (How to print number from 10 to 1 using for loops in c)</u></b></h4>
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
19</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : how-to-print-number-from-10-to-1-using-for-loop.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to print numbers from 10 to 1 using for loop in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">//declaring a variable to increment</span>
<span style="color: #333399; font-weight: bold">int</span> counter<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #008800; font-weight: bold">for</span>(counter<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">10</span>; counter<span style="color: #333333">&gt;=</span><span style="color: #0000DD; font-weight: bold">1</span>; counter<span style="color: #333333">--</span>)
	printf(<span style="background-color: #fff0f0">&quot; %d</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">&quot;</span>, counter);
	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 10
 9
 8
 7
 6
 5
 4
 3
 2
 1
</pre>
<p>"for loops" can be used to make multiples of any number, printing a Fibonacci number, printing even or odd numbers and many more.</p>
<h4><b><u>How to print multiples of a number using for-loop in c</u></b></h4>
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
28</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : how-to-print-multiples-of-any-number-using-for-loop.c</span>
<span style="color: #888888"> Author      : CodingSlice;</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to print multiples of any number using for loops in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">/*</span>
<span style="color: #888888"> * In this program</span>
<span style="color: #888888"> * we will take a number from user from as input</span>
<span style="color: #888888"> * print its multiple</span>
<span style="color: #888888"> * */</span>
<span style="color: #888888">//declaring a variable</span>
<span style="color: #333399; font-weight: bold">int</span> multiple;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Enter the number you would like multiples of&quot;</span>);
	fflush(stdout);
	scanf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, <span style="color: #333333">&amp;</span>multiple);
	<span style="color: #008800; font-weight: bold">for</span> (<span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>; i<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">10</span>; i<span style="color: #333333">++</span>){
		printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0"> %d * %d = %d&quot;</span> ,multiple, i, multiple<span style="color: #333333">*</span>i);
	}

}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Enter the number you would like multiples of4

 4 * 1 = 4
 4 * 2 = 8
 4 * 3 = 12
 4 * 4 = 16
 4 * 5 = 20
 4 * 6 = 24
 4 * 7 = 28
 4 * 8 = 32
 4 * 9 = 36
 4 * 10 = 40
</pre>
<h4><b><u>How to print Fibonacci numbers using for-loop in c</u></b></h4>
<p>Fibonacci numbers is the series of number 0, 1, 1, 2, 3, 5, 8, 13, 21 up to so on. It starts from 0 to 1, and each number is the sum of two proceedings one.</p>
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
27</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : how-to-print-fibonacci-numbers.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to print Fibonacci number using for loops</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">//declaring and initialising first two numbers of fibonacci series</span>
<span style="color: #333399; font-weight: bold">int</span> pre_Number <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>, next_Number <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span>;
<span style="color: #888888">//new number: we will add two numbers pre_number and next number</span>
<span style="color: #333399; font-weight: bold">int</span> new_Number;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {

	<span style="color: #888888">//printing first two number of fibonacii series</span>
	printf(<span style="background-color: #fff0f0">&quot; %d %d&quot;</span>, pre_Number, next_Number);
	<span style="color: #008800; font-weight: bold">for</span> (<span style="color: #333399; font-weight: bold">int</span> i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>; i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">10</span>; i<span style="color: #333333">++</span>) {
		new_Number<span style="color: #333333">=</span>pre_Number<span style="color: #333333">+</span>next_Number;
		printf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, new_Number);
		pre_Number<span style="color: #333333">=</span>next_Number;
		next_Number<span style="color: #333333">=</span>new_Number;
	}
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
<h4><b><u>How to print even number using for-loop in c:</u></b></h4>
<p>Even numbers are those numbers which are entirely divisible with 2. In this program, we will use the remainder operator to check if the number is altogether divisible by two or not.</p>
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
<span style="color: #888888"> Name        : how-to-print-even-number-using-for-loop-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to print even number using for loop in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">/*</span>
<span style="color: #888888"> * prime number are those which are divisible by 2</span>
<span style="color: #888888"> * to check if number are completely divisible by 2 we use remainder operator</span>
<span style="color: #888888"> * if remainder is equal to 0 after dividing number by 2</span>
<span style="color: #888888"> * its means number is prime */</span>
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #008800; font-weight: bold">for</span>(<span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>; i<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">20</span>; i<span style="color: #333333">++</span>){
		<span style="color: #008800; font-weight: bold">if</span>(i<span style="color: #333333">%</span><span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">==</span><span style="color: #0000DD; font-weight: bold">0</span>){
			printf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, i);
		}
	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 2 4 6 8 10 12 14 16 18 20
</pre>

<h4><b><u>How to print odd number using for-loop in c:</u></b></h4>
<p>Odd numbers are those numbers which are entirely divisible with 3. In this program, we will use the remainder operator to check if the number is altogether divisible by three or not.</p>
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
<span style="color: #888888"> Name        : how-to-print-odd-number-using-for-loop-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to print odd number using for loop in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #888888">/*</span>
<span style="color: #888888"> * odd number are those which are divisible by 3</span>
<span style="color: #888888"> * to check if number are completely divisible by 3 we use remainder operator</span>
<span style="color: #888888"> * if remainder is equal to 0 after dividing number by 3</span>
<span style="color: #888888"> * its means number is odd number */</span>
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #008800; font-weight: bold">for</span>(<span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>; i<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">20</span>; i<span style="color: #333333">++</span>){
		<span style="color: #008800; font-weight: bold">if</span>(i<span style="color: #333333">%</span><span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">!=</span><span style="color: #0000DD; font-weight: bold">0</span>){
			printf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, i);
		}
	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 1 3 5 7 9 11 13 15 17 19
</pre>
<div class="data_colour">
<h1 align="center">
<b><u>Nested for loop</u></b>
</h1></div>
<p>Nested-loops is a loop within the body of the loop. The first loops are called "outer-loop" and loops inside the body of "outer-loops" is called "inner-loop". The inner loop repeats itself until the outer loop finished. The inner loop repeats itself every time for one value of outer loops.</p>
<h4><b><u>Simple example printing number using nested for-loop</u></b></h4>
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
<span style="color: #888888"> Name        : simple-example-using-nested-for-loop.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : how to use nested for-loops in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> i, j;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #888888">//outer loop</span>
	<span style="color: #008800; font-weight: bold">for</span> (i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>; i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">5</span>; i<span style="color: #333333">++</span>) {
		<span style="color: #888888">//inner loop</span>
		<span style="color: #008800; font-weight: bold">for</span> (j <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>; j <span style="color: #333333">&lt;=</span> i; j<span style="color: #333333">++</span>) {
			printf(<span style="background-color: #fff0f0">&quot; </span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The value of inner loops %d = &quot;</span>, j);
		}
		printf(<span style="background-color: #fff0f0">&quot; </span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The value of outer loops %d = &quot;</span>, j);
	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
The value of inner loops 0 =  
The value of outer loops 1 =  
The value of inner loops 0 =  
The value of inner loops 1 =  
The value of outer loops 2 =  
The value of inner loops 0 =  
The value of inner loops 1 =  
The value of inner loops 2 =  
The value of outer loops 3 =  
The value of inner loops 0 =  
The value of inner loops 1 =  
The value of inner loops 2 =  
The value of inner loops 3 =  
The value of outer loops 4 =  
The value of inner loops 0 =  
The value of inner loops 1 =  
The value of inner loops 2 =  
The value of inner loops 3 =  
The value of inner loops 4 =  
The value of outer loops 5 =  
The value of inner loops 0 =  
The value of inner loops 1 =  
The value of inner loops 2 =  
The value of inner loops 3 =  
The value of inner loops 4 =  
The value of inner loops 5 =  
The value of outer loops 6 = 
</pre>
<h4><b><u>How to print prime numbers using nested for-loop</u></b></h4>
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
28</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : how-to-print-prime-numbers-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : How to print Prime number using nested loop in c</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> i,j;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	<span style="color: #008800; font-weight: bold">for</span>(i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">2</span>; i<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">30</span>; i<span style="color: #333333">++</span>){
		<span style="color: #008800; font-weight: bold">for</span>(j<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">2</span>; j<span style="color: #333333">&lt;=</span>i;j<span style="color: #333333">++</span>){
			<span style="color: #888888">/*if i % j ==0 its means we have found a factor for prime number (j)</span>
<span style="color: #888888">			 * We don&#39;t need to check this number any more</span>
<span style="color: #888888">			*/</span>
			<span style="color: #008800; font-weight: bold">if</span>(i<span style="color: #333333">%</span>j<span style="color: #333333">==</span><span style="color: #0000DD; font-weight: bold">0</span>){
				<span style="color: #008800; font-weight: bold">break</span>;
			}
		}
		<span style="color: #008800; font-weight: bold">if</span>(i<span style="color: #333333">==</span>j){
			printf(<span style="background-color: #fff0f0">&quot; %d&quot;</span>, j);
		}
	}
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
 2 3 5 7 11 13 17 19 23 29
</pre>