<div class="data_colour">
<h1 align="center">
<b>Control statement in Java</b>
</h1></div>
<p>
Control statement enables the programmers to specify the flow of program control. It creates an order for a set of instruction in a source code to be executed to make it possible to make decisions to perform tasks repeatedly or to jump from one section to another section of code. Another benefit of a control statement is its control the flow of the program. Some time programmer wants to repeat the task, and sometimes a programmer wants to execute the code based on condition.
</p>
<img src="\images\java-descision-making-statement.png" class="img-responsive" alt="Cinque Terre">
<h4>In Java language, we have following control statement or control flow of a program.</h4>

1.Decision making (if statement)
<br>
2.Switch statements (Selection statements)
<br>
3.Jump statements (break, continue and return)
<br>
4.Iteration statements (Loops)
<br>
<h4><b><u>Decision making (if statement, else statement and if else statement) in Java</u></b> </h4>
<p>
Decision making in a programming language is all about the execution of statement in a source code depending on what condition will meet the criteria or based at the outcome(true or false).  Decision making (if statement) allows a program to enter or select an action based upon condition. 
</p>
<h4><b><u>if statement in Java</u></b> </h4>
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
8</pre></td><td><pre style="margin: 0; line-height: 125%">        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>condition one is <span style="color: #008800; font-weight: bold">true</span><span style="color: #333333">)</span>
        <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Condition One is true&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>condition teo is <span style="color: #008800; font-weight: bold">true</span><span style="color: #333333">)</span>
        <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;condition two is true&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>else statement in Java</u></b> </h4>
<img src="\images\if-else-statement-in-java.png" class="img-responsive" alt="Cinque Terre">
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
8</pre></td><td><pre style="margin: 0; line-height: 125%">        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>Condition one is <span style="color: #008800; font-weight: bold">true</span><span style="color: #333333">)</span>
        <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Condition One is true&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #008800; font-weight: bold">else</span>
        <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;condition one is false so else will be executed&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>if-else statement in Java</u></b> </h4>
<img src="\images\if-else-statements-two-in-java.png" class="img-responsive" alt="Cinque Terre">
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
11</pre></td><td><pre style="margin: 0; line-height: 125%">        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>condition one is <span style="color: #008800; font-weight: bold">true</span><span style="color: #333333">)</span>
        <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Condition One is true&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #008800; font-weight: bold">else</span> <span style="color: #0066BB; font-weight: bold">if</span><span style="color: #333333">(</span>condition two is <span style="color: #008800; font-weight: bold">true</span><span style="color: #333333">)</span>
        <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;else condition two will be executed&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span> <span style="color: #008800; font-weight: bold">else</span> <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>condition three is <span style="color: #008800; font-weight: bold">true</span><span style="color: #333333">)</span>
        <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;else condition three will be executed&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
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
14</pre></td><td><pre style="margin: 0; line-height: 125%">         <span style="color: #008800; font-weight: bold">switch</span><span style="color: #333333">(</span><span style="color: #008800; font-weight: bold">case</span><span style="color: #333333">)</span>
        <span style="color: #333333">{</span>
            <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">:</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is case one&quot;</span><span style="color: #333333">);</span>
                <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">:</span>
            <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">:</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is case one&quot;</span><span style="color: #333333">);</span>
                <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">:</span>
            <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">3</span><span style="color: #333333">:</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is case one&quot;</span><span style="color: #333333">);</span>
                <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">:</span>
            <span style="color: #008800; font-weight: bold">default</span><span style="color: #333333">:</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is not a case one, case two or case three.&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<br>
<p>Switch statement takes only value; it might be an operator, integer or character. A case statement is a part of a switch which shows the single value which is specified by each case statement.<p/>
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
9</pre></td><td><pre style="margin: 0; line-height: 125%">        <span style="color: #008800; font-weight: bold">for</span><span style="color: #333333">(</span>condition<span style="color: #333333">)</span>
        <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Repeat untill condition is true&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>

        <span style="color: #008800; font-weight: bold">while</span> <span style="color: #333333">(</span>condition<span style="color: #333333">)</span>
        <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Repeat while condition is true&quot;</span><span style="color: #333333">)</span>
        <span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>Jump statements (break, continue and return)</u></b></h4>
<p>Goto statement or sometimes referred to as "Jump Statement" can be used to jump anywhere in a program or transferring control of a program from one part to another which is the predefined label. Jump statement is also referred to as Unconditional Jump. Java supports three types of jump statement which are break, return and continue.
</p>
<p>
In Java, the break is mainly used to end a sequence in a switch statement. It is a reserved keyword in Java. It forcefully exits the loop and bypasses the condition, and break will execute the remaining code in the program. While using break inside the nested loops, it will only break out of the innermost loop.Java does not support the goto statement because it enables branching out in an unorganised manner. Java uses the concept of the label.
</p>
<p>
The continue is reserved in Java. It causes the loop to immediately end the current iteration and jump to the next iteration of the loop. </p>
<p>
The return statement usually uses to return to a value from any function, which causes your function to end and hand back a value to its calling function. This return, in general, is to take in inputs and return something.
</p>
