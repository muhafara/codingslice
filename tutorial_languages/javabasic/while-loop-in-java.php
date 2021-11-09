<div class="data_colour">
<h1 align="center">
<b>while loop in Java</b>
</h1></div>
<p>In Java language "while" is also a reserved keyword.  In "while loop" condition is checked before entering or before execution the body of loops; hence it is also called "entry control or pre-entry loop". Whenever a condition is true, the repetition inside of the body of a loop is executed. Loop consists of keyword "while" along with the condition inside the parenthesis (), then the body of loop starts and ends with curly brackets { }.</p>
<img src="\images\imageeleven.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example (How to print number from 1 to 10 using while-loop) in Java</u></b></h4>
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
10</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//Simple example using while-loop in java</span>
        <span style="color: #333399; font-weight: bold">int</span> i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">while</span> <span style="color: #333333">(</span>i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">10</span><span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">print</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #333333">+</span>i<span style="color: #333333">);</span>
            i<span style="color: #333333">++;</span>
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
 0 1 2 3 4 5 6 7 8 9 10
</pre>
<h4><b><u>How to print even number using while-loop in Java:</u></b></h4>
<p>Even numbers are those numbers which are entirely divisible with 2. In this program, we will use the remainder operator to check if the number is altogether divisible by two or not.</p>
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
        <span style="color: #888888">//Even number using while loop in java</span>
        <span style="color: #333399; font-weight: bold">int</span> i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">while</span> <span style="color: #333333">(</span>i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">10</span><span style="color: #333333">)</span> <span style="color: #333333">{</span>
            <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>i <span style="color: #333333">%</span> <span style="color: #0000DD; font-weight: bold">2</span> <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">)</span> <span style="color: #333333">{</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">print</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #333333">+</span> i<span style="color: #333333">);</span>
            <span style="color: #333333">}</span>
            i<span style="color: #333333">++;</span>
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
 2 4 6 8 10
</pre>
<h4><b><u>How to print odd number using while-loop in Java:</u></b></h4>
<p>Odd numbers are those numbers which are entirely divisible with 3. In this program, we will use the remainder operator to check if the number is altogether divisible by three or not.</p>
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
        <span style="color: #888888">//Odd number using while loop in java</span>
        <span style="color: #333399; font-weight: bold">int</span> i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">while</span> <span style="color: #333333">(</span>i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">10</span><span style="color: #333333">)</span> <span style="color: #333333">{</span>
            <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>i <span style="color: #333333">%</span> <span style="color: #0000DD; font-weight: bold">2</span> <span style="color: #333333">!=</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">)</span> <span style="color: #333333">{</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">print</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #333333">+</span> i<span style="color: #333333">);</span>
            <span style="color: #333333">}</span>
            i<span style="color: #333333">++;</span>
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
 1 3 5 7 9
</pre>
<div class="data_colour">
<h1 align="center">
<b><u>Nested while loop</u></b>
</h1></div>
<p>Nested while-loops is a loop within the body of the while-loop. The first loops are called "outer-loop" and loops inside the body of "outer-loops" is called "inner-loop". The inner loop repeats itself until the outer loop finished. The inner loop repeats itself every time for one value of outer loops.</p>
<h4><b><u>Simple program using nested while-loop</u></b></h4>
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
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//Odd number using while loop in java</span>
        <span style="color: #333399; font-weight: bold">int</span> i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">,</span> j<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">while</span> <span style="color: #333333">(</span>i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">5</span><span style="color: #333333">)</span> <span style="color: #333333">{</span>
            <span style="color: #008800; font-weight: bold">while</span> <span style="color: #333333">(</span>j <span style="color: #333333">&lt;=</span> i<span style="color: #333333">){</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The value of inner while loop &quot;</span><span style="color: #333333">+</span> j<span style="color: #333333">);</span>
                j<span style="color: #333333">++;</span>
            <span style="color: #333333">}</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The value of outer while loop &quot;</span><span style="color: #333333">+</span>i<span style="color: #333333">);</span>
            i<span style="color: #333333">++;</span>
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
The value of inner while loop 1
The value of outer while loop 1
The value of inner while loop 2
The value of outer while loop 2
The value of inner while loop 3
The value of outer while loop 3
The value of inner while loop 4
The value of outer while loop 4
The value of inner while loop 5
The value of outer while loop 5
</pre>
<h4><b><u>How to print prime numbers using nested while-loop</u></b></h4>
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
        <span style="color: #333399; font-weight: bold">int</span> i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">,</span> count<span style="color: #333333">,</span> j<span style="color: #333333">;</span>
        count <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">while</span> <span style="color: #333333">(</span>count <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">20</span><span style="color: #333333">)</span> <span style="color: #333333">{</span>
            j <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span>
            <span style="color: #008800; font-weight: bold">while</span> <span style="color: #333333">(</span>j <span style="color: #333333">&lt;=</span> i <span style="color: #333333">-</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">)</span> <span style="color: #333333">{</span>
                <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>i <span style="color: #333333">%</span> j <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">)</span> <span style="color: #333333">{</span>
                    <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">;</span>
                <span style="color: #333333">}</span>
                j<span style="color: #333333">++;</span>
            <span style="color: #333333">}</span>
            <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>j <span style="color: #333333">==</span> i<span style="color: #333333">)</span> <span style="color: #333333">{</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">print</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #333333">+</span> i<span style="color: #333333">);</span>
                count<span style="color: #333333">++;</span>
            <span style="color: #333333">}</span>
            i<span style="color: #333333">++;</span>

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
2 3 5 7 11 13 17 19 23 29 31 37 41 43 47 53 59 61 67
</pre>