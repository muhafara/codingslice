<div class="data_colour">
<h1 align="center">
<b>Control Statement in C++</b>
</h1></div>
<p>
Control statement enables the programmers to specify the flow of program control. It creates an order for a set of instruction in a source code to be executed to make it possible to make decisions to perform tasks repeatedly or to jump from one section to another section of code. Another benefit of a control statement is its control the flow of the program. Some time programmer wants to repeat the task, and sometimes a programmer wants to execute the code based on condition.
</p>
<img src="\images\imageone.png" class="img-responsive" alt="Cinque Terre">

<h4>In C++ language, we have following control statement or control flow of a program.</h4>

1.Decision making (if statement)
<br>
2.Switch statements (Selection statements)
<br>
3.Jump statements (Goto statements)
<br>
4.Iteration statements (Loops)
<br>
5.Conditional operator statement
<br><br>

<h4><b><u>Decision making (if statement) in C++</u></b> </h4>
<p>
Decision making in a programming language is all about the execution of statement in a source code depending on what condition will meet the criteria or based at the outcome(true or false).  Decision making (if statement) allows a program to enter or select an action based upon condition. 
</p>
<img src="\images\imagetwo.png" class="img-responsive" alt="Cinque Terre">
<p>
<b>
<pre class="prettyprint">
<div align="center">
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
2
3
4
5
6
7
8
9</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">if</span>(condition is <span style="color: #007020">true</span>)
{
   cout<<(<span style="background-color: #fff0f0">&quot;Condition is true);</span>
}

<span style="color: #008800; font-weight: bold">if</span>(condition2 is <span style="color: #007020">true</span>)
{
    cout<<(<span style="background-color: #fff0f0">&quot;condition2 is true&quot;</span>);
}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>


<br>
<p>In a programming language, the keyword "if" is used to make decision-based upon the condition. The condition is a comparison, or maybe a mathematical operation, result of any function or any other operation.
</p>

<h4><b><u>Switch statements (Selection statements) in C++</u></b></h4>
<p>	Switch case structure allows a programmer to make a decision based on a single value or allow a variable to be tested for equality against a list of value. 
</p>
<img src="\images\imagethree.png" class="img-responsive" alt="Cinque Terre">

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
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">switch</span>(code)
{ 
    <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">1</span>:
    cout<<(<span style="background-color: #fff0f0">&quot;This is case one&quot;</span>);
    <span style="color: #997700; font-weight: bold">break:</span>
    <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">2</span>:
    cout<<(<span style="background-color: #fff0f0">&quot;This is case two&quot;</span>);
    <span style="color: #997700; font-weight: bold">break:</span>
    <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">3</span>:
    cout<<(<span style="background-color: #fff0f0">&quot;This is case three&quot;</span>);
    <span style="color: #997700; font-weight: bold">break:</span>
    <span style="color: #997700; font-weight: bold">default:</span>
    cout<<(<span style="background-color: #fff0f0">&quot;This is not a case one, case two or case three.</span>
}
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>


<br>
<p>Switch statement takes only value; it might be an operator, integer or character. A case statement is a part of a switch which shows the single value which is specified by each case statement.<p/>




<h4><b><u>Jump statements (Goto statements)</u></b></h4>
<p>Goto statement or sometimes referred to as "Jump Statement" can be used to jump anywhere in a program or transferring control of a program from one part to another which is the predefined label. Jump statement is also referred to as Unconditional Jump.
</p>
<img src="\images\imagefour.png" class="img-responsive" alt="Cinque Terre">
<p>
<b>
<pre class="prettyprint">
<div align="center">
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
2
3
4
5</pre></td><td><pre style="margin: 0; line-height: 125%">	<span style="color: #008800; font-weight: bold">goto</span> label;
	<span style="color: #888888">//Goto statement will skip the statement one  </span>
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;Statement one&quot;</span>;
	<span style="color: #997700; font-weight: bold">label:</span>
	cout<span style="color: #333333">&lt;&lt;</span><span style="background-color: #fff0f0">&quot;Statement two&quot;</span>;
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>



<h4><b><u>Iteration statements (Loops)</u></b></h4>
<p>In a programming language, the iteration statement repeats the process in a program until the condition is false or until a termination condition. Some of the repetition processes are to find prime numbers, Fibonacci number or printing number till 100. In programming.
The example of iteration statement is for loops, while loops and do-while loops.</p>

<p>
<b>
<pre class="prettyprint">
<div align="center">
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
2
3
4
5
6
7
8
9</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">for</span>(condition) 
    { 
	cout<<(<span style="background-color: #fff0f0">&quot;Repeat untill condition is true&quot;</span>);
	}

<span style="color: #008800; font-weight: bold">while</span> (condition)
    {
	cout<<(<span style="background-color: #fff0f0">&quot;Repeat while condition is true&quot;</span>)
	}
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>


<h4><b><u>Conditional operator statement</u></b></h4>
<p>In a programming language, the conditional operator is known as "Ternary Operator". It returns one value after checking the condition. It is similar to If else statement. 
Syntax of the conditional operator is an expression followed by a question mark (?) than if the condition of an expression is true; it will be executed, followed by a colon ( : ). Finally, the expression is to be executed if the condition is false. </p>
<img src="\images\imagefive.png" class="img-responsive" alt="Cinque Terre">
<br><br>
<b>
<pre class="prettyprint">
<div align="center">
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
2
3
4
5</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">main</span>() {
	(number <span style="color: #333333">&gt;</span> <span style="color: #0000DD; font-weight: bold">10</span>) <span style="color: #333333">?</span>
				(cout<span style="color: #333333">&lt;&lt;</span>(<span style="background-color: #fff0f0">&quot;The number is greater than 10&quot;</span>)) <span style="color: #333333">:</span>
				(cout<span style="color: #333333">&lt;&lt;</span>(<span style="background-color: #fff0f0">&quot;Number is less than or equal to 10&quot;</span>));
}
</pre></td></tr></table></div>

</div>
</pre>
</b>

<p><p>Different types of the conditional operator are arithmetic operator, assignment operator, logical operator, bitwise operator, increment/decrement operator, the conditional operator (ternary operator) and special operator.</p></p>
