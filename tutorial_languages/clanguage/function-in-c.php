<div class="data_colour">
<h1 align="center">
<b>Function in C</b>
</h1></div>
<p>Functions are the set of statement that together perform a task. In "C language" every program must have one function, which is the "main" function. Every program written in c has at least one function, which is the "main" function. The keyword "function" is not a reserved keyword in c language.</p>
<h4><b><u>The main( ) as a function:</u></b></h4>
<p>In "C language" main ( ) function is the starting point of the program, and that's why every c language every program must have at least one function which us main ( ) function. This function usually has the control of the program by calling other functions. The keyword "main" is the reserved keyword. The default return type of the main ( ) is int type. img #16.
</p>
<p>In "C language" we have two types of functions.
<br>1.Standard-libraray functions
<br>2.User-defined functions</p>
<h4><b><u>Standard-library functions:</u></b></h4>
<p>In "C language" there is some function know as a built-in function or already defined in the header file. forexample printf(), puts(), get() and scanf(). </p>
<h4><b><u>User-defined functions:</u></b></h4>
<p>Programmers define User-defined function in the source code these functions are determined according to the need of the program.</p>
<h4><b><u>Different types of a function in "c language":</u></b></h4>
<p>In "c language"  four types of function types we have based upon return type and function arguments.
<br>1.Function without arguments and no-return values
<br>2.Function without arguments and return value
<br>3.Function with arguments and without return values
<br>4.Function with arguments and return value</p>
<h4><b><u>Function without arguments and no-return values:</u></b></h4>
<p>Function without any argument inside function parenthesis ( ) and not any return type inside the body of a function. This type of function is usually the function with "void" keyword in a function declaration. Declaration of this type of function consists of keyword "void", function name followed by parenthesis ()  and the body of the function starts and end with curly brackets { }.  This type of function must not have a return value.</p>
<img src="\images\imagefifteen.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example of a function without arguments and without return value</u></b></h4>
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
20</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/*</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> Name        : simple-example-function-without-arguments-and-without-return-value-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Simple example function without arguments and without return value</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">say_Hello</span>(){
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Hey! This is a function call&quot;</span>);
}

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Function is calling&quot;</span>);
	say_Hello();
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Function is calling
Hey! This is a function call
</pre>
<h4><b><u>Function without arguments and return value:</u></b></h4>
<p>Function having return type in its declaration but without any argument inside the function parenthesis. Declaration of this type of function consists of its return type, function name followed by parenthesis ( ) and the body which starts and end with curly brackets { }. Inside the body of this type of function, we usually used the keyword "return" and its must-have return value.</p>
<img src="\images\imagefourteen.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example of a function without arguments and return value</u></b></h4>
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
<span style="color: #888888"> Name        : Simple-example-function-without-arguments-and-return-value-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Simple example function without arguments and return values</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>
<span style="color: #333399; font-weight: bold">int</span> a<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">2</span>,b<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span>,result;
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">add</span>(){
	result<span style="color: #333333">=</span>a<span style="color: #333333">+</span>b;
	<span style="color: #008800; font-weight: bold">return</span> result;
}

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Function is calling&quot;</span>);
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">Result is %d&quot;</span>, add());
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Function is calling
Result is 3
</pre>
<h4><b><u>Function with arguments and without return values:</u></b></h4>
<p>Function without any return type but arguments inside function parenthesis ( ). The declaration of this type of function consists of keyword "void", function name along with function parenthesis ( ) and arguments inside function parenthesis ( ).</p>
<img src="\images\imageseventeen.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example of a function with arguments and without return value</u></b></h4>
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
<span style="color: #888888"> Name        : simple-example-of-a-function-with-arguments-and-without-return-value-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Simple example of a function with arguments and without return value</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>

<span style="color: #333399; font-weight: bold">int</span> result;

<span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">add</span>(<span style="color: #333399; font-weight: bold">int</span> num_One, <span style="color: #333399; font-weight: bold">int</span> num_two){
	result<span style="color: #333333">=</span>num_One<span style="color: #333333">+</span>num_two;
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0"> The result of two number is %d&quot;</span>, result);
}
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Function is calling&quot;</span>);
	add(<span style="color: #0000DD; font-weight: bold">2</span>,<span style="color: #0000DD; font-weight: bold">4</span>);
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Function is calling
 The result of two number is 6
</pre>
<h4><b><u>Function with arguments and return value:</u></b></h4>
<p>Function with a return type and also arguments inside function parenthesis ( ). The declaration of this function consists of the return type, function name, and the parenthesis and function argument inside the function parenthesis ( ). </p>
<img src="\images\imageeighteen.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example of a function with arguments and return value</u></b></h4>
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
<span style="color: #888888"> Name        : simple-example-of-a-function-with-arguments-and-return-value-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Simple example of a function with arguments and return value</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>

<span style="color: #333399; font-weight: bold">int</span> result;

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">add</span>(<span style="color: #333399; font-weight: bold">int</span> num_One, <span style="color: #333399; font-weight: bold">int</span> num_two){
	result<span style="color: #333333">=</span>num_One<span style="color: #333333">+</span>num_two;
	<span style="color: #008800; font-weight: bold">return</span> result;
}
<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Function is calling&quot;</span>);
	printf(<span style="background-color: #fff0f0">&quot;</span><span style="color: #666666; font-weight: bold; background-color: #fff0f0">\n</span><span style="background-color: #fff0f0">The result of adding two number is : %d &quot;</span>, add(<span style="color: #0000DD; font-weight: bold">6</span>,<span style="color: #0000DD; font-weight: bold">2</span>));
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Function is calling
The result of adding two number is : 8 
</pre>
<h4><b><u>return keyword in c</u></b></h4>
<p>The keyword "return" is the reserved keyword in c language. It terminates the calling function and returns the value to the function depending upon the return type..</p>
<h4><b><u>simple example using return keyword</u></b></h4>
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
<span style="color: #888888"> Name        : simple-example-using-return-keyword-in-c.c</span>
<span style="color: #888888"> Author      : CodingSlice</span>
<span style="color: #888888"> Version     :</span>
<span style="color: #888888"> Copyright   : Your copyright notice</span>
<span style="color: #888888"> Description : Simple example using the return keyword</span>
<span style="color: #888888"> ============================================================================</span>
<span style="color: #888888"> */</span>

<span style="color: #557799">#include &lt;stdio.h&gt;</span>
<span style="color: #557799">#include &lt;stdlib.h&gt;</span>

<span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>(<span style="color: #333399; font-weight: bold">void</span>) {
	printf(<span style="background-color: #fff0f0">&quot;Statement one&quot;</span>);
	<span style="color: #888888">/**?</span>
<span style="color: #888888">	 * Return statement terminates the function</span>
<span style="color: #888888">	 * after return</span>
<span style="color: #888888">	 * no statement will be executed</span>
<span style="color: #888888">	 */</span>
	<span style="color: #008800; font-weight: bold">return</span> <span style="color: #0000DD; font-weight: bold">0</span>;
	printf(<span style="background-color: #fff0f0">&quot;Statement 2&quot;</span>);
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Statement one
</pre>
