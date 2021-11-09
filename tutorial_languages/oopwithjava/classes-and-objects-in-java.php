<div class="data_colour">
<h1 align="center">
<b>Classes and objects</b>
</h1></div>
<p>
It is a blueprint or template used to create objects and their data types and methods. We create classes so we can put similar things in the same class. Simply classes are like categories, and objects are like items that belong to the same categories.
</p>
<h4><b><u>Objects in object oriented programming. </u></b></h4>
<p>An object is a real-world entity or runtime entity. It is an instant of class that holds data. An object can consist of a state, behaviour and identity.
</p>
<h4><b><u>State of an object:</u></b></h4>
<p>It is represented by the characteristics of an object. State also reflects the properties of an object.</p>
<h4><b><u>The behaviour of an object:</u></b></h4>
<p>It is represented by the methods of an object. The behaviour of an object also reflects the response of an object to other objects.</p>
<h4><b><u>Identity of an object:</u></b></h4>
<p>It gives a unique name to an object and enables one object to interact with other objects.</p>
<img src="\images\class.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Syntax to define class and its objects</u></b></h4>
<img src="\images\syntax-to-define-a-class-in-java.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example creating class and its objects in Java</u></b></h4>
<h4><b><u>Main Class</u></b></h4>
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
28</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> classandobject<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">/////////////////////Object of car Mercedes//////////////////////////////////</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;///////////////////////////////////////////////////////////&quot;</span><span style="color: #333333">);</span>
        Car Mercedes <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> Car<span style="color: #333333">();</span>
        Mercedes<span style="color: #333333">.</span><span style="color: #0000CC">getDetailsOfCar</span><span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">2009</span><span style="color: #333333">,</span><span style="background-color: #fff0f0">&quot;Hatchback&quot;</span><span style="color: #333333">);</span>
        Mercedes<span style="color: #333333">.</span><span style="color: #0000CC">setDetails</span><span style="color: #333333">();</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;///////////////////////////////////////////////////////////&quot;</span><span style="color: #333333">);</span>
        <span style="color: #888888">//////////////////////////////END//////////////////////////////////////////</span>

        <span style="color: #888888">/////////////////////Object of car BMW//////////////////////////////////</span>
        Car Bmw <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> Car<span style="color: #333333">();</span>
        Bmw<span style="color: #333333">.</span><span style="color: #0000CC">getDetailsOfCar</span><span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">2010</span><span style="color: #333333">,</span><span style="background-color: #fff0f0">&quot;Saloon&quot;</span><span style="color: #333333">);</span>
        Bmw<span style="color: #333333">.</span><span style="color: #0000CC">setDetails</span><span style="color: #333333">();</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;///////////////////////////////////////////////////////////&quot;</span><span style="color: #333333">);</span>
        <span style="color: #888888">//////////////////////////////END//////////////////////////////////////////</span>

        <span style="color: #888888">/////////////////////Object of car Audi//////////////////////////////////</span>
        Car Audi <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> Car<span style="color: #333333">();</span>
        Audi<span style="color: #333333">.</span><span style="color: #0000CC">getDetailsOfCar</span><span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">2018</span><span style="color: #333333">,</span><span style="background-color: #fff0f0">&quot;Estate&quot;</span><span style="color: #333333">);</span>
        Audi<span style="color: #333333">.</span><span style="color: #0000CC">setDetails</span><span style="color: #333333">();</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;///////////////////////////////////////////////////////////&quot;</span><span style="color: #333333">);</span>
        <span style="color: #888888">//////////////////////////////END//////////////////////////////////////////</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>Car Class</u></b></h4>
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
19</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> variables<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">java.util.Scanner</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Car</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> regNumber<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> String carType<span style="color: #333333">;</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">getDetailsOfCar</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> regNumber<span style="color: #333333">,</span> String carType<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">regNumber</span> <span style="color: #333333">=</span> regNumber<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">carType</span> <span style="color: #333333">=</span> carType<span style="color: #333333">;</span>

    <span style="color: #333333">}</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">setDetails</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;The model Number of a car is &quot;</span> <span style="color: #333333">+</span> regNumber <span style="color: #333333">+</span> <span style="background-color: #fff0f0">&quot;\n The Model Name of a car is &quot;</span> <span style="color: #333333">+</span> carType<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
///////////////////////////////////////////////////////////
The model Number of a car is 2009
 The Model Name of a car is Hatchback
///////////////////////////////////////////////////////////
The model Number of a car is 2010
 The Model Name of a car is Saloon
///////////////////////////////////////////////////////////
The model Number of a car is 2018
 The Model Name of a car is Estate
///////////////////////////////////////////////////////////
</pre>