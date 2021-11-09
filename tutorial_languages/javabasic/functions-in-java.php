<div class="data_colour">
<h1 align="center">
<b>Functions in Java</b>
</h1></div>
<p>Functions are the set of statement that together perform a task. Every program written in java has at least one function, which is the "main" function. The keyword "function" is not a reserved keyword in Java language.</p>
<h4><b><u>The main( ) as a function:</u></b></h4>
<p>In "Java language" main ( ) function is the starting point of the program, and that's why every program must have at least one function which us main ( ) function. This function usually has the control of the program by calling other functions. The keyword "main" is the reserved keyword. The default return type of the main ( ) is int type.
</p>
<p>In Java we have two types of functions.
<br>1.Standard-libraray functions
<br>2.User-defined functions</p>
<h4><b><u>Standard-library functions:</u></b></h4>
<p>In java there is some function know as a built-in function or already defined in the standard library or built-in functions. forexample compareTo, equals(), sqrt(). </p>
<h4><b><u>User-defined functions:</u></b></h4>
<p>Programmers define User-defined function in the source code these functions are determined according to the need of the program.</p>
<h4><b><u>Different types of a function in "java language":</u></b></h4>
<p>In java we have four types of function types we have based upon return type and function arguments.
<br>1.Function without arguments and no-return values
<br>2.Function without arguments and return value
<br>3.Function with arguments and without return values
<br>4.Function with arguments and return value</p>
<h4><b><u>Function without arguments and no-return values:</u></b></h4>
<p>Function without any argument inside function parenthesis ( ) and not any return type inside the body of a function. This type of function is usually the function with "void" keyword in a function declaration. Declaration of this type of function consists of keyword "void", function name followed by parenthesis ()  and the body of the function starts and end with curly brackets { }.  This type of function must not have a return value.</p>
<img src="\images\imagefifteen.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example of a function without arguments and without return value</u></b></h4>
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
13</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> functions<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Function is going call.....!&quot;</span><span style="color: #333333">);</span>
        say_hello<span style="color: #333333">();</span>
    <span style="color: #333333">}</span>
    <span style="color: #888888">////////////////function without arguments and without return value/////////////////////</span>
    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">say_hello</span><span style="color: #333333">(){</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Hey! This is a function.....!&quot;</span><span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Function is going call.....!
Hey! This is a function.....!
</pre>
<h4><b><u>Function without arguments but has return value:</u></b></h4>
<p>Function having return type in its declaration but without any argument inside the function parenthesis. Declaration of this type of function consists of its return type, function name followed by parenthesis ( ) and the body which starts and end with curly brackets { }. Inside the body of this type of function, we usually used the keyword "return" and its must-have return value.</p>
<img src="\images\imagefourteen.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example of a function without arguments and return value</u></b></h4>
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
17</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> function<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">int</span> num_One <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">int</span> num_Two <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">int</span> Results<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Function is going call.....!&quot;</span><span style="color: #333333">);</span>
        add_Number<span style="color: #333333">();</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is a result &quot;</span> <span style="color: #333333">+</span>Results<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
    <span style="color: #888888">////////////////function without arguments but has a return value/////////////////////</span>
    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">add_Number</span><span style="color: #333333">(){</span>
        Results <span style="color: #333333">=</span> num_One <span style="color: #333333">+</span> num_Two<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">return</span>  Results<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Function is going call.....!
This is a result 6
</pre>
<h4><b><u>Function with arguments and without return values:</u></b></h4>
<p>Function without any return type but arguments inside function parenthesis ( ). The declaration of this type of function consists of keyword "void", function name along with function parenthesis ( ) and arguments inside function parenthesis ( ).</p>
<img src="\images\imageseventeen.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example of a function with arguments and without return value</u></b></h4>
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
15</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> functions<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">int</span> Results<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is a function call........!&quot;</span><span style="color: #333333">);</span>
        add_Number<span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
    <span style="color: #888888">////////////////function with arguments without a return value/////////////////////</span>

    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">add_Number</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> num_One<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> num_Two<span style="color: #333333">){</span>
        Results <span style="color: #333333">=</span> num_One <span style="color: #333333">+</span> num_Two<span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is a Result &quot;</span><span style="color: #333333">+</span>Results<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
This is a function call........!
This is a Result 3
</pre>
<h4><b><u>Function with arguments and return value:</u></b></h4>
<p>Function with a return type and also arguments inside function parenthesis ( ). The declaration of this function consists of the return type, function name, and the parenthesis and function argument inside the function parenthesis ( ). </p>
<img src="\images\imageeighteen.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example of a function with arguments and return value</u></b></h4>
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
16</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> functions<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">int</span> Results<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is a function call........!&quot;</span><span style="color: #333333">);</span>
        add_Number<span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is a Results &quot;</span> <span style="color: #333333">+</span>Results<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
    <span style="color: #888888">////////////////function with arguments with a return value/////////////////////</span>

    <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">int</span>  <span style="color: #0066BB; font-weight: bold">add_Number</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> num_One<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> num_Two<span style="color: #333333">){</span>
        Results <span style="color: #333333">=</span> num_One <span style="color: #333333">+</span> num_Two<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">return</span> Results<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
This is a function call........!
This is a Results 3
</pre>
<h4><b><u>return keyword in c</u></b></h4>
<p>The keyword "return" is the reserved keyword in Java. It terminates the calling function and returns the value to the function depending upon the return type. After using return keyword in java we can not execute the program statement further.</p>
