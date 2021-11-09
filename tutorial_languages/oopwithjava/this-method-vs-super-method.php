<div class="data_colour">
<h1 align="center">
<b>this vs super ()</b>
</h1></div>
<p>In Java, "this" is a reference call for the current class, while super() is the reference call for the parents class. </p>
<h4><b><u>this Keyword in Java</u></b></h4>
<p>
This keyword is used to access or call the current class members, such as variables and methods. It is required when we have a parameter with the same name as an instance variable. The keyword this is commonly used with the constructor and setter and optionally used in the getter.
</p>
<p>
 This keyword is used to call a constructor from another overloaded constructor in the same class. While working with "this," it must be the first statement in the constructor. It is used for constructor chaining; in other words, when one constructor calls another, it helps reduce duplicated code. We can use this everywhere in our class except static methods and static blocks, which will lead to a compile-time error. The reason is static methods does not need any object requires to call. It loads into memory at the very beginning.</p>
<h4><b><u>Simple example one accessing a parameter with the same name as an instance variable with this keyword in the same class.</u></b></h4>
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
22</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> thismethod<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">java.lang.reflect.Constructor</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">thisExample</span> <span style="color: #333333">{</span>
    <span style="color: #888888">//Instance of a class</span>
    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> myNumber<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> String myName<span style="color: #333333">;</span>
    <span style="color: #888888">/*</span>
<span style="color: #888888">    Example One</span>
<span style="color: #888888">    Constructor with the two arguments with same name as instance of the class</span>
<span style="color: #888888">    We shall create a two argument constructor</span>
<span style="color: #888888">    with same name as instance of a class</span>
<span style="color: #888888">    Link them by using this key word in constructor</span>
<span style="color: #888888">    */</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">thisExample</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> myNumber<span style="color: #333333">,</span> String myName<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//Constructor parameter has the same name as instance of a class</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">myNumber</span> <span style="color: #333333">=</span> myNumber<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">myName</span> <span style="color: #333333">=</span> myName<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>Simple example two accessing a parameter with the same name as an instance variable with this keyword in the same class.</u></b></h4>
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
25</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> thismethod<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">import</span> <span style="color: #0e84b5; font-weight: bold">java.lang.reflect.Constructor</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">thisExample</span> <span style="color: #333333">{</span>
    <span style="color: #888888">//Instance of a class</span>
    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> myNumber<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> String myName<span style="color: #333333">;</span>

    <span style="color: #888888">//////////////////////////Example two///////////////////////////////</span>
     <span style="color: #888888">/*</span>
<span style="color: #888888">    Example Two</span>
<span style="color: #888888">    Constructor with the two arguments with the different name as instance of the class</span>
<span style="color: #888888">    We shall create a two argument constructor</span>
<span style="color: #888888">    with different name as instance of a class</span>
<span style="color: #888888">    Link them by using this key word in constructor</span>
<span style="color: #888888">    Note : It is not necessary that constructor arguments and instance of a class has a same name.</span>
<span style="color: #888888">    */</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">thisExample</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> mySecondNumber<span style="color: #333333">,</span> String mySecondName<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//Constructor parameter has the different name as instance of a class</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">myNumber</span> <span style="color: #333333">=</span> mySecondNumber<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">myName</span> <span style="color: #333333">=</span> mySecondName<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>




<h4><b><u>super () method</u></b></h4>
<p>
In Java, super() is used to access or call the parent class member, such as variable and methods. Like this(), we can also use super() everywhere in our class except static methods and static blocks, which will lead to a compile-time error.  In the example below, we are using this keyword in the constructor and setter.
</p>
<p>
Calling a method with the same name from a parent class without super () will lead to a recursive call. It means that the method would call itself forever until memory is full.
</p>
<p>
The Java compiler will put a default call super() method; if we don't add it, it will be called a default constructor, which means constructor without argument. This method must be the first statement in the constructor.
</p>

<h4><b><u>Simple example accessing the superclass constructor in the base class using super ()</u></b></h4>
<h4><b><u>Main class</u></b></h4>
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
8</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> superexample<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        ChildClass childClass <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> ChildClass<span style="color: #333333">();</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>Parent class</u></b></h4>
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
8</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> superexample<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">ParentClass</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">ParentClass</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;With super keyword parent class constructor is calling......!&quot;</span><span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>Child class</u></b></h4>
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
7</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> superexample<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">ChildClass</span> <span style="color: #008800; font-weight: bold">extends</span> ParentClass<span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">ChildClass</span><span style="color: #333333">(){</span>
        <span style="color: #008800; font-weight: bold">super</span><span style="color: #333333">();</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
With super keyword parent class constructor is calling......!
</pre>

<h4><b><u>Simple example accessing the superclass method in the base class using super ()</u></b></h4>
<h4><b><u>Parent class</u></b></h4>
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
13</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> superexample<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">ParentClass</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">private</span> String name<span style="color: #333333">;</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">ParentClass</span><span style="color: #333333">(</span>String name<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">name</span> <span style="color: #333333">=</span> name<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #008800; font-weight: bold">public</span> String <span style="color: #0066BB; font-weight: bold">showName</span><span style="color: #333333">(</span>String name<span style="color: #333333">){</span>
        <span style="color: #008800; font-weight: bold">return</span> name<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>Child class</u></b></h4>
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
17</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> superexample<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">ChildClass</span> <span style="color: #008800; font-weight: bold">extends</span> ParentClass<span style="color: #333333">{</span>
    <span style="color: #888888">//Creating an object of parent class</span>
    ParentClass parentClass<span style="color: #333333">;</span>

    <span style="color: #008800; font-weight: bold">private</span> String childClassName<span style="color: #333333">;</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">ChildClass</span><span style="color: #333333">(</span>String name<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">super</span><span style="color: #333333">(</span>name<span style="color: #333333">);</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">childClassName</span> <span style="color: #333333">=</span> name<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">showName</span><span style="color: #333333">(){</span>
        parentClass<span style="color: #333333">.</span><span style="color: #0000CC">showName</span><span style="color: #333333">(</span>childClassName<span style="color: #333333">);</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>

<h4><b><u>Simple example accessing the superclass variable or datatype in the base class using super().</u></b></h4>
<h4><b><u>Parent class</u></b></h4>
<p>
<b>
<pre class="prettyprint">
<div align="center">
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
2
3
4
5</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> superexample<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">ParentClass</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">protected</span> <span style="color: #333399; font-weight: bold">int</span> numOne <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">5</span><span style="color: #333333">;</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>Child class</u></b></h4>
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
11</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> superexample<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">ChildClass</span> <span style="color: #008800; font-weight: bold">extends</span> ParentClass<span style="color: #333333">{</span>
    <span style="color: #888888">//Creating an object of parent class</span>
    ParentClass parentClass<span style="color: #333333">;</span>
    <span style="color: #888888">//Accessing numOne from Parent Class</span>
    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> numTwo <span style="color: #333333">=</span> parentClass<span style="color: #333333">.</span><span style="color: #0000CC">numOne</span> <span style="color: #333333">+</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">;</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">ChildClass</span><span style="color: #333333">(</span>String name<span style="color: #333333">)</span> <span style="color: #333333">{</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
