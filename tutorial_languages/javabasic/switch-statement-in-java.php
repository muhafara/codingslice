<div class="data_colour">
<h1 align="center">
<b>Switch case in Java</b>
</h1></div>
<p>
Switch case is a multiple-choice selection of statement. It is used when we have multiple options. In a switch case, every value is checked for equality against a list of value. Every value is called "case", and the variable value is tested for every case to perform a different task for every choice. The syntax of the switch case statement is as follow.
</p>
<img src="\images\switch-case-in-java.png" class="img-responsive" alt="Cinque Terre">
<p>In Java "switch" is a reserved keyword. Inside "switch" parenthesis there is only value allowed it can be either an integer, character or any depending upon the value of the expression. The body of "switch" start and end with curly brackets and inside the body of the "switch" there are multiple cases representing some value. Every case must contain a "break"  statement to terminate the flow of the program if any case tested for equality with a variable value. In every "switch" statement there is a default case which will be executed if none of the cases tested for equality with the value of the variable and this default case needs no break statement because "switch" case will be terminated after default anyway. 
</p>
<h4><b><u>How to create a simple program using switch case statement</h4></u></b>
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
21</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #333399; font-weight: bold">int</span> num_Check <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">switch</span> <span style="color: #333333">(</span>num_Check<span style="color: #333333">)</span> <span style="color: #333333">{</span>
            <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">:</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;You have selected number 1&quot;</span><span style="color: #333333">);</span>
                <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">;</span>
            <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">:</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;You have selected number 2&quot;</span><span style="color: #333333">);</span>
                <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">;</span>
            <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">3</span><span style="color: #333333">:</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;You have selected number 3&quot;</span><span style="color: #333333">);</span>
                <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">;</span>
            <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">:</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;You have selected number 4&quot;</span><span style="color: #333333">);</span>
                <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">;</span>
            <span style="color: #008800; font-weight: bold">default</span><span style="color: #333333">:</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Number other then first four numbers&quot;</span><span style="color: #333333">);</span>
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
You have selected number 2
</pre>
<h4><b><u>How to create a simple calculator program using switch case statement</h4></u></b>
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
        <span style="color: #333399; font-weight: bold">int</span> first_number <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">18</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> second_number <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">int</span> Result<span style="color: #333333">;</span>
        <span style="color: #333399; font-weight: bold">char</span> op <span style="color: #333333">=</span> <span style="color: #0044DD">&#39;*&#39;</span><span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">switch</span> <span style="color: #333333">(</span>op<span style="color: #333333">)</span> <span style="color: #333333">{</span>
            <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0044DD">&#39;+&#39;</span><span style="color: #333333">:</span>
                Result <span style="color: #333333">=</span> first_number <span style="color: #333333">+</span> second_number<span style="color: #333333">;</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;After adding first and second number we get =&quot;</span> <span style="color: #333333">+</span> Result<span style="color: #333333">);</span>
                <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">;</span>
            <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0044DD">&#39;-&#39;</span><span style="color: #333333">:</span>
                Result <span style="color: #333333">=</span> first_number <span style="color: #333333">-</span> second_number<span style="color: #333333">;</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;After subtracting  first and second number we get =&quot;</span> <span style="color: #333333">+</span> Result<span style="color: #333333">);</span>
                <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">;</span>
            <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0044DD">&#39;*&#39;</span><span style="color: #333333">:</span>
                Result <span style="color: #333333">=</span> first_number <span style="color: #333333">*</span> second_number<span style="color: #333333">;</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;After multiplication first and second number we get =&quot;</span> <span style="color: #333333">+</span> Result<span style="color: #333333">);</span>
                <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">;</span>
            <span style="color: #008800; font-weight: bold">case</span> <span style="color: #0044DD">&#39;/&#39;</span><span style="color: #333333">:</span>
                Result <span style="color: #333333">=</span> first_number <span style="color: #333333">/</span> second_number<span style="color: #333333">;</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;After multiplication first and second number we get =&quot;</span> <span style="color: #333333">+</span> Result<span style="color: #333333">);</span>
                <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">;</span>
            <span style="color: #008800; font-weight: bold">default</span><span style="color: #333333">:</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Please input a valid operator +, -, *, /&quot;</span><span style="color: #333333">);</span>
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
After multiplication first and second number we get =72
</pre>