<div class="data_colour">
<h1 align="center">
<b>If statement in java</b>
</h1></div>
<p>
The "if statement" is a major part of programming languages allows a program to enter or select an action based upon condition. "if" is a reserved keyword in Java and it is used to make decisions in a program using simple comparison. Simply, the syntax of "if statement" is as follow.
</p>
<img src="\images\imagesix.png" class="img-responsive" alt="Cinque Terre">
<p>
Inside if parenthesis there is a sort of condition. It could be an arithmetic operation for example addition, subtraction, multiplication or division of a number; it could be a simple comparison of a number, for example, a number 1 is greater than number 2. 
The body of "if statement" start and end with curly brackets "{ }" and it will be executed if a condition will satisfy the specific criteria.
</p>
<h4><b><u>How to create a simple program using if statement</h4></u></b>

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
7</pre></td><td><pre style="margin: 0; line-height: 125%">        <span style="color: #333399; font-weight: bold">int</span> passingMark <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">38</span><span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>passingMark <span style="color: #333333">&gt;=</span> <span style="color: #0000DD; font-weight: bold">40</span><span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Congratulations !... You have passed the test&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>passingMark <span style="color: #333333">&lt;</span><span style="color: #0000DD; font-weight: bold">40</span><span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Sorry!... You have failed the test&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Sorry!... You have failed the test
</pre>

<div class="data_colour">
<h1 align="center">
<b>else statement in Java</b>
</h1></div>
<p>In programming languages, exceptions happen, Java  provides many ways to deals with these exception based on multiple possibilities. One of the various exceptions is handle in Java by the else statement with if. The syntax of the this statement is as follows.</p>
<img src="\images\imageseven.png" class="img-responsive" alt="Cinque Terre">
<p>Inside "if parenthesis ()" there is some condition, for example, arithmetic operation or simple comparison of number. If the condition inside "if parenthesis ()" is evaluated, then the statement inside the body of if is executed. If condition inside if parenthesis () doesn't satisfy the requirement, then the statement inside else body has to be executed.</p>
<h4><b><u>How to create a simple program using if-else statement</h4></u></b>
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
7</pre></td><td><pre style="margin: 0; line-height: 125%">        <span style="color: #333399; font-weight: bold">int</span> passingMark <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">42</span><span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>passingMark <span style="color: #333333">&gt;=</span> <span style="color: #0000DD; font-weight: bold">40</span><span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Congratulations !... You have passed the test&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #008800; font-weight: bold">else</span><span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Sorry!... You have failed the test&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Congratulations !... You have passed the test
</pre>
<div class="data_colour">
<h1 align="center">
<b>if-else statement in Java</b>
</h1></div>
<img src="\images\if-else-statement-two-in-java.png" class="img-responsive" alt="Cinque Terre">
<p>Inside "if parenthesis ()" there is some condition, for example, arithmetic operation or simple comparison of number. If the condition inside "if parenthesis ()" is evaluated, then the statement inside the body of if is executed. If condition inside if parenthesis () doesn't satisfy the requirement, then else and condition inside if will be checked and executed if its true and so on.</p>
<h4><b><u>How to create a simple program using if-else statement</h4></u></b>
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
10</pre></td><td><pre style="margin: 0; line-height: 125%"> <span style="color: #333399; font-weight: bold">int</span> passingMark <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">53</span><span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>passingMark <span style="color: #333333">&gt;=</span> <span style="color: #0000DD; font-weight: bold">40</span><span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Congratulations !... You have passed the test&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #008800; font-weight: bold">else</span> <span style="color: #0066BB; font-weight: bold">if</span><span style="color: #333333">(</span>passingMark <span style="color: #333333">&lt;</span> <span style="color: #0000DD; font-weight: bold">40</span> <span style="color: #333333">&amp;&amp;</span> passingMark <span style="color: #333333">&gt;</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Sorry!... You have failed the test&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #008800; font-weight: bold">else</span> <span style="color: #0066BB; font-weight: bold">if</span><span style="color: #333333">(</span>passingMark <span style="color: #333333">&lt;</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Invalid Input&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
</pre></td></tr></table></div>
</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Congratulations !... You have passed the test
</pre>
<h4><b><u>How to create a simple calculator program using if-else statement</h4></u></b>
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
28</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #333399; font-weight: bold">int</span> num_One <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> num_two <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">8</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">char</span> op <span style="color: #333333">=</span> <span style="color: #0044DD">&#39;+&#39;</span><span style="color: #333333">;</span>

        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;+&#39;</span><span style="color: #333333">){</span>
            <span style="color: #333399; font-weight: bold">int</span> result <span style="color: #333333">=</span> num_One <span style="color: #333333">+</span> num_two<span style="color: #333333">;</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The result after addition is &quot;</span> <span style="color: #333333">+</span>result<span style="color: #333333">);</span>
        <span style="color: #333333">}</span> <span style="color: #008800; font-weight: bold">else</span>
        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;-&#39;</span><span style="color: #333333">){</span>
            <span style="color: #333399; font-weight: bold">int</span> result <span style="color: #333333">=</span> num_One <span style="color: #333333">-</span> num_two<span style="color: #333333">;</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The result after subtraction is &quot;</span> <span style="color: #333333">+</span>result<span style="color: #333333">);</span>
        <span style="color: #333333">}</span> <span style="color: #008800; font-weight: bold">else</span>
        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;*&#39;</span><span style="color: #333333">){</span>
            <span style="color: #333399; font-weight: bold">int</span> result <span style="color: #333333">=</span> num_One <span style="color: #333333">*</span> num_two<span style="color: #333333">;</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The result after multiplication is &quot;</span> <span style="color: #333333">+</span>result<span style="color: #333333">);</span>
        <span style="color: #333333">}</span> <span style="color: #008800; font-weight: bold">else</span>
        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>op <span style="color: #333333">==</span> <span style="color: #0044DD">&#39;/&#39;</span><span style="color: #333333">){</span>
            <span style="color: #333399; font-weight: bold">int</span> result <span style="color: #333333">=</span> num_One <span style="color: #333333">/</span> num_two<span style="color: #333333">;</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The result after division is &quot;</span> <span style="color: #333333">+</span>result<span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
        <span style="color: #008800; font-weight: bold">else</span><span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Please input a valid operator&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>

    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
The result after addition is 12
</pre>

<h4><b><u>Comparision of two number</h4></u></b>
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
18</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #333399; font-weight: bold">int</span> num_One <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> num_two <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">;</span>
        <span style="color: #888888">// comparison of two number</span>
        <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>num_One <span style="color: #333333">&gt;</span> num_two<span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Number one is greater&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span><span style="color: #008800; font-weight: bold">else</span>
            <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>num_One <span style="color: #333333">&lt;</span> num_two<span style="color: #333333">){</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;NUmber two is greater&quot;</span><span style="color: #333333">);</span>
            <span style="color: #333333">}</span><span style="color: #008800; font-weight: bold">else</span>
                <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>num_One <span style="color: #333333">==</span> num_two<span style="color: #333333">){</span>
                    System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Number one is equal to number two&quot;</span><span style="color: #333333">);</span>
                <span style="color: #333333">}</span><span style="color: #008800; font-weight: bold">else</span><span style="color: #333333">{</span>
                    System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Invalid operation.........!&quot;</span><span style="color: #333333">);</span>
                <span style="color: #333333">}</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
NUmber two is greater
</pre>
<h4><b><u>How to create a program to check whether number is even or odd</u></b></h4>
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
12</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #333399; font-weight: bold">int</span> NumTOCheck <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">15</span><span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>NumTOCheck <span style="color: #333333">%</span>  <span style="color: #0000DD; font-weight: bold">2</span> <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The number you entered is EVEN&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span><span style="color: #008800; font-weight: bold">else</span> <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>NumTOCheck <span style="color: #333333">%</span> <span style="color: #0000DD; font-weight: bold">3</span> <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The number you entered is ODD!&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span><span style="color: #008800; font-weight: bold">else</span><span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Invalid Operations!....&quot;</span><span style="color: #333333">);</span>
        <span style="color: #333333">}</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h1>Output</h1>
<pre class="prettyprint">
The number you entered is ODD!
</pre>
