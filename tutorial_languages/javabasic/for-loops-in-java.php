<div class="data_colour">
<h1 align="center">
<b>for loop in Java</b>
</h1></div>
<p>In "Java Language" there are many reserved keywords "for" is one of them. "for loop" consist of 4 parts initializing point, exit condition, repetitions or increment and the body of for loop. Initialization is the starting point of for loop; exit condition is limitation or number of repetitions in a loop and to increment or decrement every time in "for loop" increment or decrement operator is used.</p>
<p>In Java we have three types of for loops<br>
1- simple for-loop<br>
2- for-each (Enhanced for-loop)<br>
3- Labeled for-loop
</p>
<h4><b><u>Simple for-loop in Java</u></b></h4>
<p>The syntax of simple for-loop is:</p>
<img src="\images\simple-for-loop-in-java.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example using for-loop in Java</u></b></h4>
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
        <span style="color: #888888">/*</span>
<span style="color: #888888">        * Simple example using simple for-loop in java</span>
<span style="color: #888888">        * in this example we will print numbers from 1 to 10</span>
<span style="color: #888888">        * */</span>

        <span style="color: #888888">//////////////////////////////Simple for-Loop///////////////////////////////////</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">print</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Number are : &quot;</span><span style="color: #333333">);</span>
        <span style="color: #008800; font-weight: bold">for</span> <span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">;</span> i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">20</span><span style="color: #333333">;</span> i <span style="color: #333333">++</span> <span style="color: #333333">){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">print</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;   &quot;</span> <span style="color: #333333">+</span>i<span style="color: #333333">);</span>
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
Number are :    0   1   2   3   4   5   6   7   8   9   10   11   12   13   14   15   16   17   18   19   20
</pre>
<p>"for loops" can be used to make multiples of any number, printing a Fibonacci number, printing even or odd numbers and many more.</p>
<h4><b><u>How to print multiples of a number using for-loop in Java</u></b></h4>
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
13</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         *Printing multiples of any number</span>
<span style="color: #888888">         * *</span>
<span style="color: #888888">         */</span>
        <span style="color: #333399; font-weight: bold">int</span> multiple <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">5</span><span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;/////////////////////////Multiple of a number is&quot;</span><span style="color: #333333">);</span>
        <span style="color: #008800; font-weight: bold">for</span> <span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span> i<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">10</span><span style="color: #333333">;</span> i<span style="color: #333333">++){</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>multiple <span style="color: #333333">+</span><span style="background-color: #fff0f0">&quot; * &quot;</span> <span style="color: #333333">+</span> i <span style="color: #333333">+</span><span style="background-color: #fff0f0">&quot; = &quot;</span> <span style="color: #333333">+</span> multiple <span style="color: #333333">*</span> i<span style="color: #333333">);</span>
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
5 * 1 = 5
5 * 2 = 10
5 * 3 = 15
5 * 4 = 20
5 * 5 = 25
5 * 6 = 30
5 * 7 = 35
5 * 8 = 40
5 * 9 = 45
5 * 10 = 50
</pre>
<h4><b><u>How to print Fibonacci numbers using for-loop in Java</u></b></h4>
<p>Fibonacci numbers is the series of number 0, 1, 1, 2, 3, 5, 8, 13, 21 up to so on. It starts from 0 to 1, and each number is the sum of two proceedings one.</p>
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
16</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//printing Fibonacci series using java</span>
        <span style="color: #888888">//declaring and initialising first two numbers of fibonacci series</span>
        <span style="color: #333399; font-weight: bold">int</span> pre_Number <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">,</span> next_Number <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>
        <span style="color: #888888">//new number: we will add two numbers pre_number and next number</span>
        <span style="color: #333399; font-weight: bold">int</span> new_Number<span style="color: #333333">;</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">print</span><span style="color: #333333">(</span>pre_Number <span style="color: #333333">+</span> <span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #333333">+</span>next_Number<span style="color: #333333">);</span>
        <span style="color: #008800; font-weight: bold">for</span> <span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">;</span> i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">10</span><span style="color: #333333">;</span> i<span style="color: #333333">++)</span> <span style="color: #333333">{</span>
            new_Number<span style="color: #333333">=</span>pre_Number<span style="color: #333333">+</span>next_Number<span style="color: #333333">;</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">print</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #333333">+</span>new_Number<span style="color: #333333">);</span>
            pre_Number<span style="color: #333333">=</span>next_Number<span style="color: #333333">;</span>
            next_Number<span style="color: #333333">=</span>new_Number<span style="color: #333333">;</span>
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
0 1 1 2 3 5 8 13 21 34 55 89 144
</pre>
<h4><b><u>How to print even number using for-loop in Java:</u></b></h4>
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
12
13
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         * prime number are those which are divisible by 2</span>
<span style="color: #888888">         * to check if number are completely divisible by 2 we use remainder operator</span>
<span style="color: #888888">         * if remainder is equal to 0 after dividing number by 2</span>
<span style="color: #888888">         * its means number is prime */</span>
        <span style="color: #008800; font-weight: bold">for</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span> i<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">20</span><span style="color: #333333">;</span> i<span style="color: #333333">++){</span>
            <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>i<span style="color: #333333">%</span><span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">==</span><span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">){</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">print</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot; &quot;</span><span style="color: #333333">+</span> i<span style="color: #333333">);</span>
            <span style="color: #333333">}</span>
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
 2 4 6 8 10 12 14 16 18 20
</pre>
<h4><b><u>How to print odd number using for-loop in Java:</u></b></h4>
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
12
13
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         * odd number are those which are divisible by 3</span>
<span style="color: #888888">         * to check if number are completely divisible by 3 we use remainder operator</span>
<span style="color: #888888">         * if remainder is equal to 0 after dividing number by 3</span>
<span style="color: #888888">         * its means number is odd number */</span>
        <span style="color: #008800; font-weight: bold">for</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span> i<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">20</span><span style="color: #333333">;</span> i<span style="color: #333333">++){</span>
            <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>i<span style="color: #333333">%</span><span style="color: #0000DD; font-weight: bold">2</span> <span style="color: #333333">!=</span><span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">){</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">print</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot; &quot;</span><span style="color: #333333">+</span> i<span style="color: #333333">);</span>
            <span style="color: #333333">}</span>
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
 1 3 5 7 9 11 13 15 17 19
</pre>
<p>Nested-for loops is a loop within the body of the for-loop. The first loops are called "outer-loop" and loops inside the body of "outer-loops" is called "inner-loop". The inner loop repeats itself until the outer loop finished. The inner loop repeats itself every time for one value of outer loops.</p>
<h4><b><u>Simple example printing number using nested for-loop</u></b></h4>
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
15</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         * odd number are those which are divisible by 3</span>
<span style="color: #888888">         * to check if number are completely divisible by 3 we use remainder operator</span>
<span style="color: #888888">         * if remainder is equal to 0 after dividing number by 3</span>
<span style="color: #888888">         * its means number is odd number */</span>
        <span style="color: #008800; font-weight: bold">for</span> <span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">;</span> i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">3</span><span style="color: #333333">;</span> i <span style="color: #333333">++){</span>
            <span style="color: #008800; font-weight: bold">for</span> <span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> j <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">;</span> j <span style="color: #333333">&lt;=</span> i<span style="color: #333333">;</span> j<span style="color: #333333">++){</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is the value of inner loop &quot;</span> <span style="color: #333333">+</span> j<span style="color: #333333">);</span>
            <span style="color: #333333">}</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;This is the value of outer loop &quot;</span> <span style="color: #333333">+</span>i<span style="color: #333333">);</span>
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
This is the value of inner loop 0
This is the value of outer loop 0
This is the value of inner loop 0
This is the value of inner loop 1
This is the value of outer loop 1
This is the value of inner loop 0
This is the value of inner loop 1
This is the value of inner loop 2
This is the value of outer loop 2
This is the value of inner loop 0
This is the value of inner loop 1
This is the value of inner loop 2
This is the value of inner loop 3
This is the value of outer loop 3
</pre>
<h4><b><u>How to print prime number using nested for-loop in java</u></b></h4>
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
        <span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">,</span> j<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">for</span> <span style="color: #333333">(</span>i <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span> i <span style="color: #333333">&lt;=</span> <span style="color: #0000DD; font-weight: bold">30</span><span style="color: #333333">;</span> i<span style="color: #333333">++)</span> <span style="color: #333333">{</span>
            <span style="color: #008800; font-weight: bold">for</span> <span style="color: #333333">(</span>j <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">;</span> j <span style="color: #333333">&lt;=</span> i<span style="color: #333333">;</span> j<span style="color: #333333">++)</span> <span style="color: #333333">{</span>
                <span style="color: #888888">/*if i % j ==0 its means we have found a factor for prime number (j)</span>
<span style="color: #888888">                 * We don&#39;t need to check this number any more</span>
<span style="color: #888888">                 */</span>
                <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>i <span style="color: #333333">%</span> j <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">0</span><span style="color: #333333">)</span> <span style="color: #333333">{</span>
                    <span style="color: #008800; font-weight: bold">break</span><span style="color: #333333">;</span>
                <span style="color: #333333">}</span>
            <span style="color: #333333">}</span>
            <span style="color: #008800; font-weight: bold">if</span> <span style="color: #333333">(</span>i <span style="color: #333333">==</span> j<span style="color: #333333">)</span> <span style="color: #333333">{</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">print</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #333333">+</span> j<span style="color: #333333">);</span>
            <span style="color: #333333">}</span>
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
 2 3 5 7 11 13 17 19 23 29
</pre>























<h4><b><u>for each loop (Enhanced for-loop)</u></b></h4>
<p>
In java, the for-each loop is generally used to emphasise an array or a Collections class, for example, an array list. It is introduced in SE 5.0. Like simple for-loop, this loop also starts with the reserved keyword "for". in this loops, and we don't declare initialising and ending point. We need to declare a variable of the same type as the base type, followed by a colon and then the array's name.
Besides this, the for-each loop has some limitation as well. We can't traverse the array elements in reverse order as these loops don't work based on an index.
</p>
<h4><b><u>Simple example of Iteration of an array using for each loop</u></b></h4>
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
15</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">/*</span>
<span style="color: #888888">         * Simple example using for-each loop in java</span>
<span style="color: #888888">         * in this example we will print element of an array</span>
<span style="color: #888888">         * */</span>

        <span style="color: #333399; font-weight: bold">int</span> arr<span style="color: #333333">[]</span> <span style="color: #333333">=</span> <span style="color: #333333">{</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">3</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">5</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">6</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">7</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">8</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">9</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">10</span><span style="color: #333333">};</span>
        <span style="color: #888888">//////////////////////////////for-each Loop///////////////////////////////////</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Array element :&quot;</span><span style="color: #333333">);</span>
        <span style="color: #008800; font-weight: bold">for</span> <span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> i <span style="color: #333333">:</span> arr<span style="color: #333333">)</span> <span style="color: #333333">{</span>
            System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">print</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #333333">+</span>i<span style="color: #333333">);</span>
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
Array element :
 1 2 3 4 5 6 7 8 9 10
</pre>



<h4><b><u>Labeled for-loop</u></b></h4>
<p>
A label is an actual java identifier followed by a colon ": ". Java doesn't support goto statements like c and c++, but we can use the label in java while working with loops. In java label for-loop is used while working with nested fo- lops to break or continue. If we use a break or continue statement compiler will exit from the inner loop and continue the outer loop again. If we want to escape from the outer loop using the break statement given inside the inner loop, we should define the label and colon ( : ) before loops.
</p>
<img src="\images\label-for-loop.png" class="img-responsive" alt="Cinque Terre">
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
16</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//java class</span>
<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>
    <span style="color: #888888">//Java main method</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #997700; font-weight: bold">labelone:</span>
        <span style="color: #008800; font-weight: bold">for</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> i<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>i<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">3</span><span style="color: #333333">;</span>i<span style="color: #333333">++){</span>
            <span style="color: #997700; font-weight: bold">labeltwo:</span>
            <span style="color: #008800; font-weight: bold">for</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> j<span style="color: #333333">=</span><span style="color: #0000DD; font-weight: bold">1</span><span style="color: #333333">;</span>j<span style="color: #333333">&lt;=</span><span style="color: #0000DD; font-weight: bold">3</span><span style="color: #333333">;</span>j<span style="color: #333333">++){</span>
                <span style="color: #008800; font-weight: bold">if</span><span style="color: #333333">(</span>i<span style="color: #333333">==</span><span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">&amp;&amp;</span>j<span style="color: #333333">==</span><span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">){</span>
                    <span style="color: #008800; font-weight: bold">break</span> labeltwo<span style="color: #333333">;</span>
                <span style="color: #333333">}</span>
                System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span>i<span style="color: #333333">+</span><span style="background-color: #fff0f0">&quot; &quot;</span><span style="color: #333333">+</span>j<span style="color: #333333">);</span>
            <span style="color: #333333">}</span>
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
1 1
1 2
1 3
2 1
3 1
3 2
3 3
</pre>