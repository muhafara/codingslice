<div class="data_colour">
<h1 align="center">
<b>Constructor in Java</b>
</h1></div>
<p>
In programming languages, the constructor is a  particular type of method with the same name as a class name. It is always used to initialize the objects of the class. It is called automatically whenever the objects of a class are created. Every time we create a new object with a new () keyword, at least one constructor is called.
</p>

<h4><b><u>Rules for creating a Constructors</u></b></h4>
<p>It must have the same as a class.</p>
<p>It must have no explicit return type.</p>
<p>It cannot be final, static, abstract and synchronized.</p>

<h4><b><u>Types of constructor</u></b></h4>
<p>There are two types of constructors</p>

<h4><b><u>Default constructor / Zero argument constructor.</u></b></h4>
<p>A constructor that does not have arguments in its parameters is called default or no arguments constructor. It is the default constructor. We don't need to create this; the java compiler will provide it. </p>
<h4><b><u>How to declare zero argument constructor in Java</u></b></h4>
<h4><b><u>Main Class</u></b></h4>
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
9</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> constructor<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">BankAccount</span> <span style="color: #333333">{</span>

    <span style="color: #888888">/////////Default constructor ///////////////////////</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">BankAccount</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Default Constructor is calling..................!&quot;</span><span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>Bank Account class</u></b></h4>
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
9</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> constructor<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Default constructor&quot;</span><span style="color: #333333">);</span>
        BankAccount bankaccount <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> BankAccount<span style="color: #333333">();</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Default constructor
Default Constructor is calling..................!
</pre>
<h4><b><u>Argument/ Parametrized constructor.</u></b></h4>
<p>A constructor that does have an argument in its parameters is called a parameterized constructor. This argument could be two or more.</p>
<h4><b><u>How to declare argument constructor in Java</u></b></h4>
<h4><b><u>Main class</u></b></h4>
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
14</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> constructor<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Two argument constructor&quot;</span><span style="color: #333333">);</span>
        BankAccount firstCustomerBankAccount <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> BankAccount<span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">1234</span><span style="color: #333333">,</span> <span style="background-color: #fff0f0">&quot;First Customer&quot;</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;First Customer ID number is &quot;</span> <span style="color: #333333">+</span> firstCustomerBankAccount<span style="color: #333333">.</span><span style="color: #0000CC">getCustomerIdNumber</span><span style="color: #333333">()</span> <span style="color: #333333">+</span> <span style="background-color: #fff0f0">&quot;\nFirst customer name is &quot;</span> <span style="color: #333333">+</span> firstCustomerBankAccount<span style="color: #333333">.</span><span style="color: #0000CC">getCustomerName</span><span style="color: #333333">());</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Four argument constructor&quot;</span><span style="color: #333333">);</span>
        BankAccount secondCustomerBankAccount <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> BankAccount<span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">1235</span><span style="color: #333333">,</span> <span style="background-color: #fff0f0">&quot;Second Customer&quot;</span><span style="color: #333333">,</span> <span style="background-color: #fff0f0">&quot;America&quot;</span><span style="color: #333333">,</span> <span style="background-color: #fff0f0">&quot;email@customer.com&quot;</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;First Customer ID number is &quot;</span> <span style="color: #333333">+</span> secondCustomerBankAccount<span style="color: #333333">.</span><span style="color: #0000CC">getCustomerIdNumber</span><span style="color: #333333">()</span> <span style="color: #333333">+</span> <span style="background-color: #fff0f0">&quot;\nFirst customer name is &quot;</span> <span style="color: #333333">+</span> secondCustomerBankAccount<span style="color: #333333">.</span><span style="color: #0000CC">getCustomerName</span><span style="color: #333333">()</span> <span style="color: #333333">+</span>
                <span style="background-color: #fff0f0">&quot;\nCustomer Address is &quot;</span> <span style="color: #333333">+</span> secondCustomerBankAccount<span style="color: #333333">.</span><span style="color: #0000CC">getCustomerAddress</span><span style="color: #333333">()</span> <span style="color: #333333">+</span> <span style="background-color: #fff0f0">&quot;\nCustomer Email is &quot;</span> <span style="color: #333333">+</span> secondCustomerBankAccount<span style="color: #333333">.</span><span style="color: #0000CC">getCustomerEmail</span><span style="color: #333333">());</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>Bank Account class</u></b></h4>
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
39</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> constructor<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">BankAccount</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> customerIdNumber<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> String customerName<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> String customerAddress<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> String customerEmail<span style="color: #333333">;</span>

    <span style="color: #888888">//Constructor with two arguments</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">BankAccount</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> customerIdNumber<span style="color: #333333">,</span> String customerName<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">customerIdNumber</span> <span style="color: #333333">=</span> customerIdNumber<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">customerName</span> <span style="color: #333333">=</span> customerName<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
    <span style="color: #888888">//Constructor with four arguments</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">BankAccount</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> customerIdNumber<span style="color: #333333">,</span> String customerName<span style="color: #333333">,</span> String customerAddress<span style="color: #333333">,</span> String customerEmail<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">customerIdNumber</span> <span style="color: #333333">=</span> customerIdNumber<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">customerName</span> <span style="color: #333333">=</span> customerName<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">customerAddress</span> <span style="color: #333333">=</span> customerAddress<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">customerEmail</span> <span style="color: #333333">=</span> customerEmail<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #888888">//Getter so we can get the value of data types</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">getCustomerIdNumber</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">return</span> customerIdNumber<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #008800; font-weight: bold">public</span> String <span style="color: #0066BB; font-weight: bold">getCustomerName</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">return</span> customerName<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #008800; font-weight: bold">public</span> String <span style="color: #0066BB; font-weight: bold">getCustomerAddress</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">return</span> customerAddress<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #008800; font-weight: bold">public</span> String <span style="color: #0066BB; font-weight: bold">getCustomerEmail</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">return</span> customerEmail<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
Two argument constructor
First Customer ID number is 1234
First customer name is First Customer
Four argument constructor
First Customer ID number is 1235
First customer name is Second Customer
Customer Address is America
Customer Email is email@customer.com
</pre>