<div class="data_colour">
<h1 align="center">
<b>Inheritance in Java</b>
</h1></div>
<p>
In Java, inheritance is a mechanism of acquiring all the properties from his parent or superclass. The importance of inheritance is that you can build new classes based on existing classes or classes that already have the functionalities that a new class will acquire. The class which inherits all the functionalities from the existing class is called a child class, and the existing class is called a parent or superclass. Inheritance also represents the IS-A relationship which is known as the parent-child relationship.
</p>
<h4><b><u>Why we use inheritance and why it is essential.</u></b></h4>
<p>
With the inheritance method, overloading can be achieved, which results in runtime polymorphism.<br>
It is also helpful for code reusability.
</p>
<h2><b><u>Subclass and superclass :</u></b></h2>
<h4><b><u>Sub Class/Child Class:</u></b></h4>
<p>
A class that inherits all the functionalities from other classes is called subclass, derived class, extended class, or child class.
</p>
<h4><b><u>Super Class/Parent Class:</u></b></h4>
<p>Superclass is a class from which a class inherits or derive all its features is called parents class, a base class or a superclass.</p>
<img src="\images\inheritance-in-java.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>How to inherit a class in Java</u></b></h4>
<p>
If we want to inherit a class from another, we use the keyword "extends" in Java. It is a reserved keyword. The syntax of inheriting a class in Java is.
</p>
<img src="\images\syntax-of-inheritance-in-java.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>Simple example using inheritance in Java</u></b></h4>
<h4><b><u>Main class</u></b></h4>
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
27</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> variables<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Main</span> <span style="color: #333333">{</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">static</span> <span style="color: #333399; font-weight: bold">void</span> <span style="color: #0066BB; font-weight: bold">main</span><span style="color: #333333">(</span>String<span style="color: #333333">[]</span> args<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #888888">//Child class Automatic Vehicle</span>
        AutomaticVehicle automaticvehicle <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> AutomaticVehicle<span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">2011</span><span style="color: #333333">,</span> <span style="background-color: #fff0f0">&quot;Mercedes&quot;</span><span style="color: #333333">,</span> <span style="background-color: #fff0f0">&quot;Hatchback&quot;</span><span style="color: #333333">,</span>
                <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">5</span><span style="color: #333333">,</span> <span style="background-color: #fff0f0">&quot;Automatic Transmission&quot;</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;............Child Class............Automatic Transmission...................!&quot;</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Vehicle Model Year :&quot;</span><span style="color: #333333">+</span>automaticvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getCarModelYear</span><span style="color: #333333">()+</span><span style="background-color: #fff0f0">&quot;\nVehicle Model Maker &quot;</span><span style="color: #333333">+</span>automaticvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getCarModelMaker</span><span style="color: #333333">()</span>
        <span style="color: #333333">+</span><span style="background-color: #fff0f0">&quot;\nVehicle Types &quot;</span><span style="color: #333333">+</span>automaticvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getVehicleType</span><span style="color: #333333">()+</span><span style="background-color: #fff0f0">&quot;\nNumber of Door &quot;</span><span style="color: #333333">+</span>automaticvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getNumOfDoor</span><span style="color: #333333">()</span>
        <span style="color: #333333">+</span><span style="background-color: #fff0f0">&quot;\nNumber of wheel &quot;</span><span style="color: #333333">+</span>automaticvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getNumOfWheel</span><span style="color: #333333">()+</span><span style="background-color: #fff0f0">&quot;\nNumber of seats &quot;</span><span style="color: #333333">+</span>automaticvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getNumOfSeat</span><span style="color: #333333">()</span>
        <span style="color: #333333">+</span><span style="background-color: #fff0f0">&quot;\nCar transmission &quot;</span><span style="color: #333333">+</span>automaticvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getCarTransmission</span><span style="color: #333333">());</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;.....................................END...................................................&quot;</span><span style="color: #333333">);</span>

        <span style="color: #888888">//Child class Manual Vehicle</span>
        ManualVehicle manualvehicle <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">new</span> ManualVehicle<span style="color: #333333">(</span><span style="color: #0000DD; font-weight: bold">2018</span><span style="color: #333333">,</span> <span style="background-color: #fff0f0">&quot;BMW&quot;</span><span style="color: #333333">,</span> <span style="background-color: #fff0f0">&quot;Saloon&quot;</span><span style="color: #333333">,</span>
                <span style="color: #0000DD; font-weight: bold">2</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">4</span><span style="color: #333333">,</span> <span style="color: #0000DD; font-weight: bold">5</span><span style="color: #333333">,</span> <span style="background-color: #fff0f0">&quot;Manual Transmission&quot;</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;............Child Class............Manual Transmission...................!&quot;</span><span style="color: #333333">);</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;Vehicle Model Year :&quot;</span><span style="color: #333333">+</span>manualvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getCarModelYear</span><span style="color: #333333">()+</span><span style="background-color: #fff0f0">&quot;\nVehicle Model Maker &quot;</span><span style="color: #333333">+</span>manualvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getCarModelMaker</span><span style="color: #333333">()</span>
                <span style="color: #333333">+</span><span style="background-color: #fff0f0">&quot;\nVehicle Types &quot;</span><span style="color: #333333">+</span>manualvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getVehicleType</span><span style="color: #333333">()+</span><span style="background-color: #fff0f0">&quot;\nNumber of Door &quot;</span><span style="color: #333333">+</span>manualvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getNumOfDoor</span><span style="color: #333333">()</span>
                <span style="color: #333333">+</span><span style="background-color: #fff0f0">&quot;\nNumber of wheel &quot;</span><span style="color: #333333">+</span>manualvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getNumOfWheel</span><span style="color: #333333">()+</span><span style="background-color: #fff0f0">&quot;\nNumber of seats &quot;</span><span style="color: #333333">+</span>manualvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getNumOfSeat</span><span style="color: #333333">()</span>
                <span style="color: #333333">+</span><span style="background-color: #fff0f0">&quot;\nCar transmission &quot;</span><span style="color: #333333">+</span>manualvehicle<span style="color: #333333">.</span><span style="color: #0000CC">getCarTransmission</span><span style="color: #333333">());</span>
        System<span style="color: #333333">.</span><span style="color: #0000CC">out</span><span style="color: #333333">.</span><span style="color: #0000CC">println</span><span style="color: #333333">(</span><span style="background-color: #fff0f0">&quot;.....................................END...................................................&quot;</span><span style="color: #333333">);</span>

    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>Parent class Vehicle</u></b></h4>
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
39
40
41
42
43
44
45
46</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> variables<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #888888">//Parent Class</span>
<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">Vehicle</span> <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> carModelYear<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> String carModelMaker<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> String vehicleType<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> numOfDoor<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> numOfWheel<span style="color: #333333">;</span>
    <span style="color: #008800; font-weight: bold">private</span> <span style="color: #333399; font-weight: bold">int</span> numOfSeat<span style="color: #333333">;</span>

    <span style="color: #888888">//Constructor</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">Vehicle</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> carModelYear<span style="color: #333333">,</span> String carModelMaker<span style="color: #333333">,</span> String vehicleType<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> numOfDoor<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> numOfWheel<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> numOfSeat<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">carModelYear</span> <span style="color: #333333">=</span> carModelYear<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">carModelMaker</span> <span style="color: #333333">=</span> carModelMaker<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">vehicleType</span> <span style="color: #333333">=</span> vehicleType<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">numOfDoor</span> <span style="color: #333333">=</span> numOfDoor<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">numOfWheel</span> <span style="color: #333333">=</span> numOfWheel<span style="color: #333333">;</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">numOfSeat</span> <span style="color: #333333">=</span> numOfSeat<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #888888">//Getter for all the data types of a class</span>
    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">getCarModelYear</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">return</span> carModelYear<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #008800; font-weight: bold">public</span> String <span style="color: #0066BB; font-weight: bold">getCarModelMaker</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">return</span> carModelMaker<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #008800; font-weight: bold">public</span> String <span style="color: #0066BB; font-weight: bold">getVehicleType</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">return</span> vehicleType<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">getNumOfDoor</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">return</span> numOfDoor<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">getNumOfWheel</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">return</span> numOfWheel<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #333399; font-weight: bold">int</span> <span style="color: #0066BB; font-weight: bold">getNumOfSeat</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">return</span> numOfSeat<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>Child class automatic vehicle</u></b></h4>
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
18</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> variables<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

<span style="color: #008800; font-weight: bold">public</span> <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">AutomaticVehicle</span> <span style="color: #008800; font-weight: bold">extends</span> Vehicle <span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">private</span> String CarTransmission<span style="color: #333333">;</span>

    <span style="color: #888888">//Constructor</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">AutomaticVehicle</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> carModelYear<span style="color: #333333">,</span> String carModelMaker<span style="color: #333333">,</span> String vehicleType<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> numOfDoor<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> numOfWheel<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> numOfSeat<span style="color: #333333">,</span> String carTransmission<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">super</span><span style="color: #333333">(</span>carModelYear<span style="color: #333333">,</span> carModelMaker<span style="color: #333333">,</span> vehicleType<span style="color: #333333">,</span> numOfDoor<span style="color: #333333">,</span> numOfWheel<span style="color: #333333">,</span> numOfSeat<span style="color: #333333">);</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">CarTransmission</span> <span style="color: #333333">=</span> carTransmission<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #888888">//Getter</span>

    <span style="color: #008800; font-weight: bold">public</span> String <span style="color: #0066BB; font-weight: bold">getCarTransmission</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">return</span> CarTransmission<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h4><b><u>Child class manual vehicle</u></b></h4>
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
16</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">package</span> variables<span style="color: #333333">.</span><span style="color: #0000CC">codingslice</span><span style="color: #333333">;</span>

 <span style="color: #008800; font-weight: bold">class</span> <span style="color: #BB0066; font-weight: bold">ManualVehicle</span> <span style="color: #008800; font-weight: bold">extends</span> Vehicle<span style="color: #333333">{</span>
    <span style="color: #008800; font-weight: bold">private</span> String carTransmission<span style="color: #333333">;</span>
    <span style="color: #888888">//Constructor</span>

    <span style="color: #008800; font-weight: bold">public</span> <span style="color: #0066BB; font-weight: bold">ManualVehicle</span><span style="color: #333333">(</span><span style="color: #333399; font-weight: bold">int</span> carModelYear<span style="color: #333333">,</span> String carModelMaker<span style="color: #333333">,</span> String vehicleType<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> numOfDoor<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> numOfWheel<span style="color: #333333">,</span> <span style="color: #333399; font-weight: bold">int</span> numOfSeat<span style="color: #333333">,</span> String carTransmission<span style="color: #333333">)</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">super</span><span style="color: #333333">(</span>carModelYear<span style="color: #333333">,</span> carModelMaker<span style="color: #333333">,</span> vehicleType<span style="color: #333333">,</span> numOfDoor<span style="color: #333333">,</span> numOfWheel<span style="color: #333333">,</span> numOfSeat<span style="color: #333333">);</span>
        <span style="color: #008800; font-weight: bold">this</span><span style="color: #333333">.</span><span style="color: #0000CC">carTransmission</span> <span style="color: #333333">=</span> carTransmission<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>

    <span style="color: #888888">//Getter for datatype</span>
    <span style="color: #008800; font-weight: bold">public</span> String <span style="color: #0066BB; font-weight: bold">getCarTransmission</span><span style="color: #333333">()</span> <span style="color: #333333">{</span>
        <span style="color: #008800; font-weight: bold">return</span> carTransmission<span style="color: #333333">;</span>
    <span style="color: #333333">}</span>
<span style="color: #333333">}</span>
</pre></td></tr></table></div>

</div>
</pre>
</b>
</p>
<h1>Output</h1>
<pre class="prettyprint">
............Child Class............Automatic Transmission...................!
Vehicle Model Year :2011
Vehicle Model Maker Mercedes
Vehicle Types Hatchback
Number of Door 4
Number of wheel 4
Number of seats 5
Car transmission Automatic Transmission
.....................................END...................................................

............Child Class............Manual Transmission...................!
Vehicle Model Year :2018
Vehicle Model Maker BMW
Vehicle Types Saloon
Number of Door 2
Number of wheel 4
Number of seats 5
Car transmission Manual Transmission
.....................................END...................................................
</pre>